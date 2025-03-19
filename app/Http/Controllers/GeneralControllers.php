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

        // Ambil data dari cache atau database
        $regazine = $this->getCachedRegazine();
        $regazinelast = $this->getCachedRegazineLast();
        $testimoni = Testimoni::with(['media', 'kategoris'])->get();

        // Retrieve the cached data (if available, otherwise return empty arrays)
        $responselates = Cache::get('responselates', []);
        $responselimit = Cache::get('responselimit', []);

        return view('index', compact('responselates', 'responselimit', 'regazine', 'regazinelast', 'testimoni'));
    }

    public function profile()
    {
        return view('profile');
    }

    public function direksi()
    {
        return view('direksi');
    }

    public function jasaslf()
    {
        $testimoni = Testimoni::whereHas('kategoris', function ($query) {
            $query->where('kategori_id', 1);
        })
        ->with(['media', 'kategoris'])
        ->get();


        // dd($testimoni);
        return view('jasaslf', compact('testimoni'));
    }

    private function getCachedRegazine()
    {
        return Cache::remember('regazine', 3700, function () {
            return Regazine::with('media')->orderBy('id', 'desc')->get();
        });
    }

    /**
     * Helper Method: Get Cached Regazine Last
     */
    private function getCachedRegazineLast()
    {
        return Cache::remember('regazinelast', 3700, function () {
            return Regazine::with('media')->latest()->first();
        });
    }

    /**
     * Helper Method: Get Cached Testimoni
     */
}

