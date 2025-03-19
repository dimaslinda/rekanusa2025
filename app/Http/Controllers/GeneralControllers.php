<?php

namespace App\Http\Controllers;

use App\Models\Regazine;
use App\Models\Testimoni;
use App\Jobs\FetchPostsJob;
use Illuminate\Support\Facades\Cache;

class GeneralControllers extends Controller
{
    public function index()
    {
        $apiUrl = "https://rekanusa.co.id/artikel/wp-json/wp/v2/posts";
        $authCredentials = ['dimasbon', 'dongorasta'];

        // Dispatch background jobs for API fetching
        FetchPostsJob::dispatch($apiUrl, $authCredentials, 'responselates', 1);
        FetchPostsJob::dispatch($apiUrl, $authCredentials, 'responselimit', 3);

        // Fetch local data (cached or DB)
        $regazine = Cache::remember('regazine', 3700, function () {
            return Regazine::with('media')->orderBy('id', 'desc')->get();
        });

        $regazinelast = Cache::remember('regazinelast', 3700, function () {
            return Regazine::latest()->first();
        });

        $testimoni = $this->getCachedTestimoni();

        // Retrieve the cached data (if available, otherwise return empty arrays)
        $responselates = Cache::get('responselates', []);
        $responselimit = Cache::get('responselimit', []);

        return view('index', compact('responselates', 'responselimit', 'regazine', 'regazinelast', 'testimoni'));
    }

    private function getCachedTestimoni()
    {
        return Cache::remember('testimoni', 120, function () {
            return Testimoni::with('media')->get();
        });
    }
}

