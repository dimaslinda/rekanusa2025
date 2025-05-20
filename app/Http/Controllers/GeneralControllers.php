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
     * Menampilkan halaman utama website
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

        $title = 'PT. Kinarya Kompegriti Rekanusa';
        $keyword = 'slf, konsultan slf, audit struktur, sertifikat laik fungsi, PBG, Audit Struktur Bangunan, Audit Bangunan, Jasa Konsultan Bangunan, Jasa Konsultan Audit Bangunan, Jasa Audit Struktur';
        $description = 'jasa Konsultan teknik yang melingkupi pekerjaan konsultasi perencana struktur sipil,mewujudkan bangunan yang memiliki legalitas sertifikat laik fungsi (SLF).';
        $type = 'website';
        $url = 'https://rekanusa.co.id/';
        $locale = 'id_ID';



        return view('index', compact('responselates', 'responselimit', 'regazine', 'regazinelast', 'testimoni', 'title', 'keyword', 'description', 'type', 'url', 'locale'));
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
        $title = 'PT. Kinarya Kompegriti Rekanusa | Company Profile';
        $keyword = 'konsultan teknik sipil, jasa konsultan sipil, konsultan struktur, perencana struktur, pengawasan konstruksi, audit struktur bangunan, sertifikat laik fungsi, SLF, PBG, konsultan bangunan, jasa konsultan bangunan, PT Kinarya Kompegriti Rekanusa';
        $description = 'PT. Kinarya Kompegriti Rekanusa adalah perusahaan konsultan teknik sipil yang berfokus pada perencanaan, pengawasan, audit struktur, serta pendampingan perolehan Sertifikat Laik Fungsi (SLF) bangunan. Kami berkomitmen memberikan layanan profesional dan solusi terbaik untuk mewujudkan bangunan yang aman, legal, dan berkualitas.';
        $type = 'website';
        $url = 'https://rekanusa.co.id/profile';
        $locale = 'id_ID';

        return view('profile', compact('title', 'keyword', 'description', 'type', 'url', 'locale'));
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
        $title = 'PT. Kinarya Kompegriti Rekanusa | Direksi';
        $keyword = 'direksi PT Kinarya Kompegriti Rekanusa, tim manajemen konsultan teknik sipil, pimpinan konsultan struktur, direktur konsultan bangunan, manajemen perusahaan konsultan SLF';
        $description = 'Kenali tim direksi PT. Kinarya Kompegriti Rekanusa yang terdiri dari para profesional berpengalaman di bidang konsultan teknik sipil. Dipimpin oleh direktur utama yang memiliki track record kuat dalam perencanaan struktur, audit bangunan, dan pengawasan konstruksi.';
        $type = 'website';
        $url = 'https://rekanusa.co.id/direksi';
        $locale = 'id_ID';

        return view('direksi', compact('title', 'keyword', 'description', 'type', 'url', 'locale'));
    }

    /**
     * Halaman Jasa SLF
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function jasaslf()
    {
        $title = 'PT. Kinarya Kompegriti Rekanusa | SLF';
        $keyword = 'perpanjangan SLF, Sertifikat laik fungsi, jasa pbg, jasa pengurusan SLF, perizinan gedung, jasa konsultan pbg, jasa pembuatan slf, konsultasi pbg, konsultan slf bekasi, pengurusan izin bangunan, sertifikat layak fungsu gedung, jasa pengurusan pbg, konsultan pbg, slf bangunan gedung, pengurusan slf, pbg slf, konsultan bangunan, konsultan pbg slf, jasa urus pbg, jasa pengurusan pbg tangerang, jasa pembuatan pbg, jasa pengurusan pbg jakarta, jasa konsultan slf, jasa slf, jasa urus slf, konsultan slf';
        $description = 'Jasa SLF terpercaya untuk pengurusan Sertifikat Laik Fungsi gedung. Cepat, resmi, sesuai regulasi. Konsultasi gratis & layanan seluruh Indonesia.';
        $type = 'website';
        $url = 'https://rekanusa.co.id/jasaslf';
        $locale = 'id_ID';

        $testimoni = $this->getTestimoniByKategori(1);
        return view('jasaslf', compact('testimoni', 'title', 'keyword', 'description', 'type', 'url', 'locale'));
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
        $title = 'PT. Kinarya Kompegriti Rekanusa | Manajemen Konstruksi';
        $keyword = 'mk konsultan. konsultan pengawas proyek, jasa konsultan manajemen, konsultan pengawas konstruksi, pengawasan konstruksi, jasa manajemen konstruksi, perusahaan manajemen konstruksi, manajemen proyek, konsultan mep jakarta, konsultan mk, konsultan manajemen konstruksi, konsultan pengawas, manajemen rekayasa konstruksi, manajemen konstruksi, manajemen proyek konstruksi, konstulan perencanaan di jakarta, jasa pengawas konstruksi';
        $description = 'Jasa manajemen konstruksi profesional untuk kontrol biaya, waktu & mutu proyek. Tim ahli, terstruktur, dan sesuai standar pelaksanaan konstruksi.';
        $type = 'website';
        $url = 'https://rekanusa.co.id/konstruksi';
        $locale = 'id_ID';

        $testimoni = $this->getTestimoniByKategori(6);
        return view('konstruksi', compact('testimoni', 'title', 'keyword', 'description', 'type', 'url', 'locale'));
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
        $title = 'PT. Kinarya Kompegriti Rekanusa | DED';
        $keyword = 'jasa konsultan arsitektur, jasa desain struktur, jasa desain bangunan, engineering design documentation, jasa masterplan kawasan, jasa gambar perencanaan, jasa desain gambar bangunan, jasa gambar kerja, jasa drafter, jasa design and build, jasa pembuatan ded, gambar proyek bangunan, jasa as built drawing, engineering design, jasa konsultan teknik sipil, jasa desain kawasan, jasa konstruksi';
        $description = 'Jasa DED (Detail Engineering Design) akurat & profesional. Gambar kerja lengkap, sesuai standar teknis & regulasi. Cocok untuk proyek konstruksi Anda.';
        $type = 'website';
        $url = 'https://rekanusa.co.id/ded';
        $locale = 'id_ID';

        $testimoni = $this->getTestimoniByKategori(7);
        return view('ded', compact('testimoni', 'title', 'keyword', 'description', 'type', 'url', 'locale'));
    }

    public function portofolio()
    {
        $title = 'PT. Kinarya Kompegriti Rekanusa | Portofolio';
        $keyword = 'portofolio proyek konstruksi, galeri proyek konsultan teknik, contoh proyek konsultan sipil, portofolio audit struktur, portofolio SLF, portofolio konsultan bangunan, portofolio konsultan teknik sipil, portofolio konsultan struktur, portofolio konsultan perencana, portofolio konsultan pengawas, portofolio konsultan manajemen konstruksi';
        $description = 'Lihat portofolio proyek PT. Kinarya Kompegriti Rekanusa. Berbagai proyek konsultan teknik sipil, audit struktur, SLF, dan manajemen konstruksi yang telah kami kerjakan.';
        $type = 'website';
        $url = 'https://rekanusa.co.id/portofolio';
        $locale = 'id_ID';

        $portofolio = Portofolio::with(['media', 'kategoris'])
            ->where('publish', 1) // Tambahkan kondisi untuk hanya menampilkan yang sudah dipublish
            ->paginate(50);
        $kategori = Kategori::all();
        return view('portofolio', compact('portofolio', 'kategori', 'title', 'keyword', 'description', 'type', 'url', 'locale'));
    }

    public function regazine()
    {
        $title = 'PT. Kinarya Kompegriti Rekanusa | Regazine';
        $keyword = 'artikel konstruksi, berita teknik sipil, majalah konstruksi, artikel SLF, artikel audit struktur, artikel konsultan bangunan, artikel konsultan teknik sipil, artikel konsultan struktur, artikel konsultan perencana, artikel konsultan pengawas, artikel konsultan manajemen konstruksi';
        $description = 'Baca artikel dan berita terkini seputar konstruksi, teknik sipil, SLF, audit struktur, dan manajemen konstruksi dari PT. Kinarya Kompegriti Rekanusa.';
        $type = 'website';
        $url = 'https://rekanusa.co.id/regazine';
        $locale = 'id_ID';

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
