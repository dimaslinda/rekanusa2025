<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Regazine;
use App\Models\Testimoni;
use App\Models\Portofolio;
use App\Jobs\FetchPostsJob;
use Illuminate\Support\Facades\Cache;

class GeneralControllers extends Controller
{
    /**
     * Handle the HTTP request to show the home page.
     *
     * @return \Illuminate\Contracts\View\View
     */
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

    /**
     * Display the profile view.
     *
     * This method returns the profile view, which contains information
     * about the company, its mission, and its services.
     */

    /**
     * Display the profile view.
     *
     * This method returns the profile view, which contains information
     * about the company, its mission, and its services.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function profile()
    {
        return view('profile');
    }

    /**
     * Halaman Direksi
     *
     * Menampilkan halaman direksi yang berisi informasi tentang direktur
     * utama PT. Kinarya Kompegriti Rekanusa beserta riwayat hidup dan pengalaman
     * kerja.
     *
     * @return \Illuminate\Http\Response
     */
    public function direksi()
    {
        return view('direksi');
    }

    /**
     * Halaman Jasa SLF
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function jasaslf()
    {
        $testimoni = $this->getTestimoniByKategori(1);
        return view('jasaslf', compact('testimoni'));
    }

    /**
     * Halaman Audit
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function audit()
    {
        $testimoni = $this->getTestimoniByKategori(2);
        return view('audit', compact('testimoni'));
    }

    /**
     * Halaman Audit Energi
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function auditenergy()
    {
        $testimoni = $this->getTestimoniByKategori(3);
        return view('energy', compact('testimoni'));
    }

    /**
     * Halaman PBG
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function pbg()
    {
        $testimoni = $this->getTestimoniByKategori(4);
        return view('pbg', compact('testimoni'));
    }

    /**
     * Halaman Bangunan
     *
     * Menampilkan halaman bangunan yang berisi informasi tentang jasa bangunan
     * yang diberikan oleh PT. Kinarya Kompegriti Rekanusa.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function bangunan()
    {
        $testimoni = $this->getTestimoniByKategori(5);
        return view('bangunan', compact('testimoni'));
    }

    /**
     * Halaman Konstruksi
     *
     * Menampilkan halaman konstruksi yang berisi informasi tentang jasa konstruksi
     * yang diberikan oleh PT. Kinarya Kompegriti Rekanusa.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function konstruksi()
    {
        $testimoni = $this->getTestimoniByKategori(6);
        return view('konstruksi', compact('testimoni'));
    }

    /**
     * Halaman DED
     *
     * Menampilkan halaman DED yang berisi informasi tentang jasa DED
     * yang diberikan oleh PT. Kinarya Kompegriti Rekanusa.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function ded()
    {
        $testimoni = $this->getTestimoniByKategori(7);
        return view('ded', compact('testimoni'));
    }

    public function portofolio()
    {
        $portofolio = Portofolio::with(['media', 'kategoris'])
            ->paginate(8)
            ->where('publish', 1); // Tambahkan kondisi untuk hanya menampilkan yang sudah dipublish
        $kategori = Kategori::all();
        return view('portofolio', compact('portofolio', 'kategori'));
    }

    public function regazine()
    {
        $regazine = Regazine::with('media')->paginate(8);
        $regazineLast = $this->getCachedRegazineLast();
        return view('regazine', compact('regazine', 'regazineLast'));
    }

    /**
     * Helper Method: Get Cached Regazine
     *
     * Retrieves the cached regazine data from the cache store.
     * If the cache does not exist, it will query the database
     * and store the result in the cache for 3700 seconds (1 hour and 5 minutes).
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
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
     * Helper Method untuk Mengambil Testimoni berdasarkan Kategori ID
     *
     * @param  int  $kategoriId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    private function getTestimoniByKategori($kategoriId)
    {
        return Testimoni::whereHas('kategoris', function ($query) use ($kategoriId) {
            $query->where('kategori_id', $kategoriId);
        })
            ->with(['media', 'kategoris'])
            ->get();
    }
}
