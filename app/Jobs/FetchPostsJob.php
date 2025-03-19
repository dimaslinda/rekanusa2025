<?php

namespace App\Jobs;

use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class FetchPostsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $apiUrl;
    protected $authCredentials;
    protected $cacheKey;
    protected $limit;

    public function __construct($apiUrl, $authCredentials, $cacheKey, $limit)
    {
        $this->apiUrl = $apiUrl;
        $this->authCredentials = $authCredentials;
        $this->cacheKey = $cacheKey;
        $this->limit = $limit;
    }

    public function handle()
    {
        $client = new Client([
            'timeout' => 60, // Set higher timeout
        ]);

        try {
            $response = $client->request('GET', $this->apiUrl, [
                'verify' => false,
                'auth' => $this->authCredentials,
            ]);

            $responseBody = json_decode($response->getBody(), true);

            foreach ($responseBody as &$item) {
                $item['featured_media_src_url'] = $item['featured_media_src_url'] ?? 'default-image.jpg';
                $item['title']['rendered'] = $item['title']['rendered'] ?? 'No Title Available';
                $item['excerpt']['rendered'] = $item['excerpt']['rendered'] ?? 'No Excerpt Available';
                $item['link'] = $item['link'] ?? '#';
            }

            $data = array_slice($responseBody, 0, $this->limit);

            Cache::put($this->cacheKey, $data, 7200); // Cache the result for 2 hours
        } catch (\Exception $e) {
            Log::error("Error fetching posts: " . $e->getMessage());
        }
    }
}
