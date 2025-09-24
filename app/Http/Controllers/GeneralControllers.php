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

        // Ambil data dari database (tanpa cache)
        $regazine = $this->getRegazineNoCache(); // Menggunakan method tanpa cache
        $regazinelast = $this->getRegazineLastNoCache(); // Menggunakan method tanpa cache
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



        $schemaOrg = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'PT. Kinarya Kompegriti Rekanusa',
            'alternateName' => 'Rekanusa',
            'url' => 'https://rekanusa.co.id',
            'logo' => asset('img/general/logo.png'),
            'description' => 'Jasa Konsultan teknik yang melingkupi pekerjaan konsultasi perencana struktur sipil, mewujudkan bangunan yang memiliki legalitas sertifikat laik fungsi (SLF).',
            'address' => [
                '@type' => 'PostalAddress',
                'addressCountry' => 'ID',
                'addressLocality' => 'Jakarta',
                'addressRegion' => 'DKI Jakarta'
            ],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => '+62-813-8080-1113',
                'contactType' => 'customer service',
                'availableLanguage' => ['Indonesian', 'English']
            ],
            'sameAs' => [
                'https://wa.me/6281380801113'
            ],
            'foundingDate' => '2010',
            'numberOfEmployees' => [
                '@type' => 'QuantitativeValue',
                'minValue' => 10,
                'maxValue' => 50
            ],
            'areaServed' => [
                '@type' => 'Country',
                'name' => 'Indonesia'
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Layanan Konsultan Teknik',
                'itemListElement' => [
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Konsultasi Perencana Struktur Sipil',
                            'description' => 'Pekerjaan konsultasi enjiniring untuk perencana Struktur Sipil, Arsitektural, Mekanikal, Elektrikal, Plumbing'
                        ]
                    ],
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Audit Struktur dan Audit Energy',
                            'description' => 'Layanan audit struktur bangunan dan audit energi untuk memastikan keamanan dan efisiensi'
                        ]
                    ],
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Sertifikat Laik Fungsi (SLF)',
                            'description' => 'Pekerjaan Perizinan Sertifikat Laik Fungsi (SLF) Bangunan Gedung'
                        ]
                    ],
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Dokumen Pendukung SLF',
                            'description' => 'Pekerjaan Perizinan Dokumen Pendukung Pengurusan SLF (KRK, PBG, SLO, RKK Damkar, Dokumen Lingkungan, dll)'
                        ]
                    ]
                ]
            ]
        ];

        $schemaLocal = [
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            '@id' => 'https://rekanusa.co.id/#localbusiness',
            'name' => 'PT. Kinarya Kompegriti Rekanusa',
            'image' => asset('img/general/logo.png'),
            'telephone' => '+62-813-8080-1113',
            'url' => 'https://rekanusa.co.id',
            'address' => [
                '@type' => 'PostalAddress',
                'addressCountry' => 'ID',
                'addressLocality' => 'Jakarta',
                'addressRegion' => 'DKI Jakarta'
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => -6.2088,
                'longitude' => 106.8456
            ],
            'openingHoursSpecification' => [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => [
                    'Monday',
                    'Tuesday',
                    'Wednesday',
                    'Thursday',
                    'Friday'
                ],
                'opens' => '08:00',
                'closes' => '17:00'
            ],
            'priceRange' => '$$'
        ];



        return view('index', compact('responselates', 'responselimit', 'regazine', 'regazinelast', 'testimoni', 'title', 'keyword', 'description', 'type', 'url', 'locale', 'schemaOrg', 'schemaLocal'));
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

        // Schema.org AboutPage structured data
        $schemaAboutPage = [
            '@context' => 'https://schema.org',
            '@type' => 'AboutPage',
            'name' => 'Profil Perusahaan - PT. Kinarya Kompegriti Rekanusa',
            'description' => 'Profil lengkap PT. Kinarya Kompegriti Rekanusa, perusahaan jasa konsultan teknik yang berpengalaman dalam bidang struktur sipil, audit bangunan, dan perizinan SLF.',
            'url' => 'https://rekanusa.co.id/profile',
            'mainEntity' => [
                '@type' => 'Organization',
                'name' => 'PT. Kinarya Kompegriti Rekanusa',
                'alternateName' => 'Rekanusa',
                'description' => 'Perusahaan jasa Konsultan teknik yang melingkupi pekerjaan konsultasi perencana struktur sipil, audit struktur dan audit energy, perizinan Sertifikat Laik Fungsi (SLF) Bangunan Gedung, dan dokumen pendukung pengurusan SLF.',
                'foundingDate' => '2010',
                'url' => 'https://rekanusa.co.id',
                'logo' => asset('img/general/logo.png'),
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressCountry' => 'ID',
                    'addressLocality' => 'Jakarta',
                    'addressRegion' => 'DKI Jakarta'
                ],
                'contactPoint' => [
                    '@type' => 'ContactPoint',
                    'telephone' => '+62-813-8080-1113',
                    'contactType' => 'customer service',
                    'availableLanguage' => ['Indonesian', 'English']
                ],
                'sameAs' => [
                    'https://wa.me/6281380801113'
                ],
                'knowsAbout' => [
                    'Konsultasi Enjiniring Struktur Sipil',
                    'Konsultasi Arsitektural',
                    'Konsultasi Mekanikal',
                    'Konsultasi Elektrikal',
                    'Konsultasi Plumbing',
                    'Audit Struktur Bangunan',
                    'Audit Energy',
                    'Sertifikat Laik Fungsi (SLF)',
                    'Perizinan Bangunan Gedung',
                    'KRK (Kajian Risiko Kebakaran)',
                    'PBG (Persetujuan Bangunan Gedung)',
                    'SLO (Sertifikat Laik Operasi)',
                    'RKK Damkar',
                    'Dokumen Lingkungan'
                ],
                'areaServed' => [
                    '@type' => 'Country',
                    'name' => 'Indonesia'
                ],
                'numberOfEmployees' => [
                    '@type' => 'QuantitativeValue',
                    'minValue' => 10,
                    'maxValue' => 50
                ],
                'slogan' => 'Mewujudkan bangunan yang memiliki legalitas sertifikat laik fungsi (SLF)'
            ]
        ];

        return view('profile', compact('title', 'keyword', 'description', 'type', 'url', 'locale', 'schemaAboutPage'));
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

        $schemaDireksi = [
            [
                '@context' => 'https://schema.org',
                '@type' => 'Organization',
                'name' => 'PT. Kinarya Kompegriti Rekanusa',
                'url' => 'https://rekanusa.co.id',
                'logo' => asset('img/general/logo.png'),
                'description' => 'Perusahaan konsultan profesional yang menyediakan layanan konstruksi, bangunan, dan perizinan dengan jajaran direksi berpengalaman.',
                'contactPoint' => [
                    '@type' => 'ContactPoint',
                    'telephone' => '+62-813-8080-1113',
                    'contactType' => 'customer service'
                ],
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressCountry' => 'ID',
                    'addressLocality' => 'Jakarta',
                    'addressRegion' => 'DKI Jakarta'
                ],
                'employee' => [
                    [
                        '@type' => 'Person',
                        'name' => 'Muhammad Egy Bagus Putra',
                        'jobTitle' => 'Direktur Utama',
                        'description' => 'Warga Negara Indonesia, berdomisili di Bogor, Indonesia. Berpengalaman sebagai Sarjana Teknik Sipil.',
                        'worksFor' => [
                            '@type' => 'Organization',
                            'name' => 'PT. Kinarya Kompegriti Rekanusa'
                        ],
                        'hasCredential' => [
                            '@type' => 'EducationalOccupationalCredential',
                            'credentialCategory' => 'degree',
                            'educationalLevel' => 'Bachelor Degree',
                            'about' => 'Civil Engineering'
                        ]
                    ]
                ],
                'foundingDate' => '2017',
                'legalName' => 'PT. Kinarya Kompegriti Rekanusa',
                'organizationType' => 'Corporation'
            ],
            [
                '@context' => 'https://schema.org',
                '@type' => 'Person',
                'name' => 'Muhammad Egy Bagus Putra',
                'jobTitle' => 'Direktur Utama',
                'description' => 'Direktur Utama PT. Kinarya Kompegriti Rekanusa dengan pengalaman sebagai Sarjana Teknik Sipil dan pemegang saham perusahaan.',
                'worksFor' => [
                    '@type' => 'Organization',
                    'name' => 'PT. Kinarya Kompegriti Rekanusa',
                    'url' => 'https://rekanusa.co.id'
                ],
                'hasCredential' => [
                    '@type' => 'EducationalOccupationalCredential',
                    'credentialCategory' => 'degree',
                    'educationalLevel' => 'Bachelor Degree',
                    'about' => 'Civil Engineering'
                ],
                'nationality' => [
                    '@type' => 'Country',
                    'name' => 'Indonesia'
                ],
                'homeLocation' => [
                    '@type' => 'Place',
                    'name' => 'Bogor, Indonesia'
                ],
                'knowsAbout' => [
                    'Civil Engineering',
                    'Construction Management',
                    'Building Permits',
                    'Project Management'
                ]
            ]
        ];

        return view('direksi', compact('title', 'keyword', 'description', 'type', 'url', 'locale', 'schemaDireksi'));
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

        $schemaJasaSLF = [
            [
                '@context' => 'https://schema.org',
                '@type' => 'Service',
                'name' => 'Layanan Sertifikat Laik Fungsi (SLF)',
                'description' => 'Layanan profesional untuk pengurusan Sertifikat Laik Fungsi (SLF) bangunan yang memastikan keamanan, legalitas, dan kepatuhan terhadap standar yang berlaku.',
                'url' => 'https://rekanusa.co.id/jasaslf',
                'provider' => [
                    '@type' => 'Organization',
                    'name' => 'PT. Kinarya Kompegriti Rekanusa',
                    'url' => 'https://rekanusa.co.id',
                    'logo' => asset('img/general/logo.png'),
                    'contactPoint' => [
                        '@type' => 'ContactPoint',
                        'telephone' => '+62-813-8080-1113',
                        'contactType' => 'customer service'
                    ]
                ],
                'serviceType' => 'Building Certification Service',
                'areaServed' => [
                    '@type' => 'Country',
                    'name' => 'Indonesia'
                ],
                'hasOfferCatalog' => [
                    '@type' => 'OfferCatalog',
                    'name' => 'Layanan SLF',
                    'itemListElement' => [
                        [
                            '@type' => 'Offer',
                            'itemOffered' => [
                                '@type' => 'Service',
                                'name' => 'Pengurusan Sertifikat Laik Fungsi',
                                'description' => 'Layanan lengkap pengurusan SLF untuk berbagai jenis bangunan'
                            ]
                        ],
                        [
                            '@type' => 'Offer',
                            'itemOffered' => [
                                '@type' => 'Service',
                                'name' => 'Konsultasi Persyaratan SLF',
                                'description' => 'Konsultasi mengenai persyaratan administratif dan teknis SLF'
                            ]
                        ],
                        [
                            '@type' => 'Offer',
                            'itemOffered' => [
                                '@type' => 'Service',
                                'name' => 'Audit Kelayakan Fungsi Bangunan',
                                'description' => 'Pemeriksaan dan audit kelayakan fungsi bangunan sesuai standar'
                            ]
                        ]
                    ]
                ]
            ],
            [
                '@context' => 'https://schema.org',
                '@type' => 'ProfessionalService',
                'name' => 'Konsultan SLF PT. Kinarya Kompegriti Rekanusa',
                'description' => 'Layanan konsultan profesional untuk Sertifikat Laik Fungsi (SLF) dengan pengalaman dalam membantu klien memenuhi persyaratan legalitas dan keamanan bangunan.',
                'url' => 'https://rekanusa.co.id/jasaslf',
                'telephone' => '+62-813-8080-1113',
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressCountry' => 'ID',
                    'addressLocality' => 'Jakarta',
                    'addressRegion' => 'DKI Jakarta'
                ],
                'geo' => [
                    '@type' => 'GeoCoordinates',
                    'latitude' => -6.2088,
                    'longitude' => 106.8456
                ],
                'openingHoursSpecification' => [
                    '@type' => 'OpeningHoursSpecification',
                    'dayOfWeek' => [
                        'Monday',
                        'Tuesday',
                        'Wednesday',
                        'Thursday',
                        'Friday'
                    ],
                    'opens' => '08:00',
                    'closes' => '17:00'
                ],
                'priceRange' => '$$',
                'areaServed' => [
                    '@type' => 'Country',
                    'name' => 'Indonesia'
                ],
                'knowsAbout' => [
                    'Building Certification',
                    'Function Worthiness Certificate',
                    'Building Safety Standards',
                    'Legal Compliance',
                    'Building Audit'
                ]
            ]
        ];

        $testimoni = $this->getTestimoniByKategori(1);
        return view('jasaslf', compact('testimoni', 'title', 'keyword', 'description', 'type', 'url', 'locale', 'schemaJasaSLF'));
    }

    /**
     * Halaman Audit
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function audit()
    {
        $title = 'PT. Kinarya Kompegriti Rekanusa | Audit Struktur';
        $keyword = 'audit bangunan egedung, audit bangunan, audit konstruksi bangunan, jasa konsultan struktur, audit struktur bangunan, konsultan struktur terbaik di indonesia, ahli struktur bangunan, jasa audit bangunan, pemeriksaan bangunan, konsultan struktur bangunan, jasa audit struktur gedung, jasa perhitungan struktur, jasa struktur bangunan, konsultan struktur, audit bangunan pasca gempa, jasa audit struktur bangunan, inspeksi bangunan, audit struktur';
        $description = 'Rekanusa adalah konsultan teknik profesional yang menyediakan layanan audit struktur untuk menilai kelayakan dan keamanan bangunan, serta memberikan solusi perbaikan dan perkuatan demi masa layanan yang optimal.';
        $type = 'website';
        $url = 'https://rekanusa.co.id/audit-struktur';
        $locale = 'id_ID';

        $schemaAudit = [
            [
                '@context' => 'https://schema.org',
                '@type' => 'Service',
                'name' => 'Layanan Audit Struktur Bangunan',
                'description' => 'Layanan profesional untuk mengoptimalkan keamanan dan kinerja bangunan dengan audit struktur berkualitas. Kami menyediakan layanan audit struktur yang komprehensif untuk memastikan keamanan bangunan Anda.',
                'provider' => [
                    '@type' => 'Organization',
                    'name' => 'PT. Kinarya Kompegriti Rekanusa',
                    'url' => 'https://rekanusa.co.id',
                    'logo' => asset('img/general/logo.png'),
                    'contactPoint' => [
                        '@type' => 'ContactPoint',
                        'telephone' => '+62-813-8080-1113',
                        'contactType' => 'customer service',
                        'availableLanguage' => ['Indonesian', 'English']
                    ],
                    'address' => [
                        '@type' => 'PostalAddress',
                        'addressCountry' => 'ID',
                        'addressLocality' => 'Jakarta',
                        'addressRegion' => 'DKI Jakarta'
                    ]
                ],
                'areaServed' => [
                    '@type' => 'Country',
                    'name' => 'Indonesia'
                ],
                'hasOfferCatalog' => [
                    '@type' => 'OfferCatalog',
                    'name' => 'Layanan Audit Struktur',
                    'itemListElement' => [
                        [
                            '@type' => 'Offer',
                            'itemOffered' => [
                                '@type' => 'Service',
                                'name' => 'Audit Struktur Bangunan',
                                'description' => 'Pemeriksaan dan evaluasi struktur bangunan untuk keamanan'
                            ]
                        ],
                        [
                            '@type' => 'Offer',
                            'itemOffered' => [
                                '@type' => 'Service',
                                'name' => 'Evaluasi Kinerja Bangunan',
                                'description' => 'Penilaian kinerja dan keamanan struktur bangunan'
                            ]
                        ],
                        [
                            '@type' => 'Offer',
                            'itemOffered' => [
                                '@type' => 'Service',
                                'name' => 'Konsultasi Keamanan Struktur',
                                'description' => 'Konsultasi profesional untuk optimalisasi keamanan struktur'
                            ]
                        ]
                    ]
                ],
                'serviceType' => 'Structural Audit',
                'category' => 'Construction Safety Services'
            ],
            [
                '@context' => 'https://schema.org',
                '@type' => 'ProfessionalService',
                'name' => 'Audit Struktur Professional Services',
                'description' => 'Layanan profesional audit struktur untuk mengoptimalkan keamanan dan kinerja bangunan dengan standar kualitas tinggi dan tenaga ahli berpengalaman.',
                'provider' => [
                    '@type' => 'Organization',
                    'name' => 'PT. Kinarya Kompegriti Rekanusa',
                    'url' => 'https://rekanusa.co.id'
                ],
                'areaServed' => 'Indonesia',
                'hasOfferCatalog' => [
                    '@type' => 'OfferCatalog',
                    'name' => 'Structural Audit Services Catalog',
                    'itemListElement' => [
                        [
                            '@type' => 'Offer',
                            'itemOffered' => [
                                '@type' => 'ProfessionalService',
                                'name' => 'Building Safety Assessment',
                                'description' => 'Penilaian keamanan bangunan profesional'
                            ]
                        ],
                        [
                            '@type' => 'Offer',
                            'itemOffered' => [
                                '@type' => 'ProfessionalService',
                                'name' => 'Structural Performance Evaluation',
                                'description' => 'Evaluasi kinerja struktur bangunan'
                            ]
                        ]
                    ]
                ],
                'openingHours' => 'Mo-Fr 08:00-17:00',
                'geo' => [
                    '@type' => 'GeoCoordinates',
                    'latitude' => '-6.2088',
                    'longitude' => '106.8456'
                ],
                'priceRange' => '$$',
                'serviceArea' => [
                    '@type' => 'Country',
                    'name' => 'Indonesia'
                ]
            ]
        ];

        $testimoni = $this->getTestimoniByKategori(2);
        return view('audit', compact('testimoni', 'title', 'keyword', 'description', 'type', 'url', 'locale', 'schemaAudit'));
    }

    /**
     * Halaman Audit Energi
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function auditenergy()
    {
        $title = 'PT. Kinarya Kompegriti Rekanusa | Audit Energy';
        $keyword = 'jasa audit energi bangunan, konsultan audit energi, jasa audit energi industri, audit energi gedung perkantoran, jasa efisiensi energi, audit energi untuk penghematan listrik, audit energi pabrik dan fasilitas industri, konsultan efisiensi energi profesional, layanan audit energi bersertifikat, jasa audit energi untuk ISO 50001';
        $description = 'Jasa audit energi untuk gedung dan industri. Hemat biaya listrik, tingkatkan efisiensi, dan patuhi regulasi. Konsultasi dengan ahli bersertifikat!';
        $type = 'website';
        $url = 'https://rekanusa.co.id/audit-energy';
        $locale = 'id_ID';

        $schemaAuditEnergy = [
            [
                '@context' => 'https://schema.org',
                '@type' => 'Service',
                'name' => 'Layanan Audit Energi',
                'description' => 'Layanan audit energi profesional untuk meningkatkan efisiensi energi dan menghemat biaya operasional dengan solusi yang presisi dan berkelanjutan.',
                'url' => 'https://rekanusa.co.id/energy',
                'provider' => [
                    '@type' => 'Organization',
                    'name' => 'PT. Kinarya Kompegriti Rekanusa',
                    'url' => 'https://rekanusa.co.id',
                    'logo' => asset('img/general/logo.png'),
                    'contactPoint' => [
                        '@type' => 'ContactPoint',
                        'telephone' => '+62-813-8080-1113',
                        'contactType' => 'customer service'
                    ]
                ],
                'serviceType' => 'Energy Audit Service',
                'areaServed' => [
                    '@type' => 'Country',
                    'name' => 'Indonesia'
                ],
                'hasOfferCatalog' => [
                    '@type' => 'OfferCatalog',
                    'name' => 'Layanan Audit Energi',
                    'itemListElement' => [
                        [
                            '@type' => 'Offer',
                            'itemOffered' => [
                                '@type' => 'Service',
                                'name' => 'Audit Energi Bangunan',
                                'description' => 'Evaluasi komprehensif penggunaan energi pada bangunan komersial dan industri'
                            ]
                        ],
                        [
                            '@type' => 'Offer',
                            'itemOffered' => [
                                '@type' => 'Service',
                                'name' => 'Konsultasi Efisiensi Energi',
                                'description' => 'Rekomendasi untuk meningkatkan efisiensi energi dan mengurangi biaya operasional'
                            ]
                        ],
                        [
                            '@type' => 'Offer',
                            'itemOffered' => [
                                '@type' => 'Service',
                                'name' => 'Sertifikasi Energi',
                                'description' => 'Layanan sertifikasi dan compliance audit energi sesuai standar nasional'
                            ]
                        ]
                    ]
                ]
            ],
            [
                '@context' => 'https://schema.org',
                '@type' => 'ProfessionalService',
                'name' => 'Konsultan Audit Energi PT. Kinarya Kompegriti Rekanusa',
                'description' => 'Layanan konsultan profesional untuk audit energi dengan fokus pada efisiensi energi, penghematan biaya, dan keberlanjutan lingkungan.',
                'url' => 'https://rekanusa.co.id/energy',
                'telephone' => '+62-813-8080-1113',
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressCountry' => 'ID',
                    'addressLocality' => 'Jakarta',
                    'addressRegion' => 'DKI Jakarta'
                ],
                'geo' => [
                    '@type' => 'GeoCoordinates',
                    'latitude' => -6.2088,
                    'longitude' => 106.8456
                ],
                'openingHoursSpecification' => [
                    '@type' => 'OpeningHoursSpecification',
                    'dayOfWeek' => [
                        'Monday',
                        'Tuesday',
                        'Wednesday',
                        'Thursday',
                        'Friday'
                    ],
                    'opens' => '08:00',
                    'closes' => '17:00'
                ],
                'priceRange' => '$$',
                'areaServed' => [
                    '@type' => 'Country',
                    'name' => 'Indonesia'
                ],
                'knowsAbout' => [
                    'Energy Audit',
                    'Energy Efficiency',
                    'Sustainability Consulting',
                    'Energy Management',
                    'Green Building'
                ]
            ]
        ];

        $testimoni = $this->getTestimoniByKategori(3);
        return view('energy', compact('testimoni', 'title', 'keyword', 'description', 'type', 'url', 'locale', 'schemaAuditEnergy'));
    }

    /**
     * Halaman PBG
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function pbg()
    {
        $title = 'PT. Kinarya Kompegriti Rekanusa | PBG';
        $keyword = 'jasa pengurusan PBG, konsultan PBG terpercaya, pengurusan PBG cepat dan mudah, jasa perizinan bangunan gedung (PBG), pengganti IMB terbaru (PBG), jasa PBG untuk rumah tinggal, jasa PBG bangunan komersial, layanan PBG melalui SIMBG, pengurusan PBG dan SLF';
        $description = 'Jasa pengurusan PBG (Persetujuan Bangunan Gedung) resmi dan cepat. Proses mudah melalui SIMBG. Konsultasi perizinan bangunan oleh ahli.';
        $type = 'website';
        $url = 'https://rekanusa.co.id/pbg';
        $locale = 'id_ID';

        $schemaPBG = [
            [
                '@context' => 'https://schema.org',
                '@type' => 'Service',
                'name' => 'Layanan Persetujuan Bangunan Gedung (PBG)',
                'description' => 'Layanan profesional untuk pengurusan Persetujuan Bangunan Gedung (PBG) yang menggantikan IMB, memastikan legalitas dan kepatuhan bangunan terhadap standar teknis yang berlaku.',
                'url' => 'https://rekanusa.co.id/pbg',
                'provider' => [
                    '@type' => 'Organization',
                    'name' => 'PT. Kinarya Kompegriti Rekanusa',
                    'url' => 'https://rekanusa.co.id',
                    'logo' => asset('img/general/logo.png'),
                    'contactPoint' => [
                        '@type' => 'ContactPoint',
                        'telephone' => '+62-813-8080-1113',
                        'contactType' => 'customer service'
                    ]
                ],
                'serviceType' => 'Building Approval Service',
                'areaServed' => [
                    '@type' => 'Country',
                    'name' => 'Indonesia'
                ],
                'hasOfferCatalog' => [
                    '@type' => 'OfferCatalog',
                    'name' => 'Layanan PBG',
                    'itemListElement' => [
                        [
                            '@type' => 'Offer',
                            'itemOffered' => [
                                '@type' => 'Service',
                                'name' => 'Pengurusan Persetujuan Bangunan Gedung',
                                'description' => 'Layanan lengkap pengurusan PBG untuk berbagai jenis bangunan'
                            ]
                        ],
                        [
                            '@type' => 'Offer',
                            'itemOffered' => [
                                '@type' => 'Service',
                                'name' => 'Konsultasi Persyaratan PBG',
                                'description' => 'Konsultasi mengenai persyaratan administratif dan teknis PBG'
                            ]
                        ],
                        [
                            '@type' => 'Offer',
                            'itemOffered' => [
                                '@type' => 'Service',
                                'name' => 'Perubahan Fungsi Bangunan',
                                'description' => 'Layanan untuk perubahan fungsi bangunan sesuai regulasi'
                            ]
                        ]
                    ]
                ]
            ],
            [
                '@context' => 'https://schema.org',
                '@type' => 'ProfessionalService',
                'name' => 'Konsultan PBG PT. Kinarya Kompegriti Rekanusa',
                'description' => 'Layanan konsultan profesional untuk Persetujuan Bangunan Gedung (PBG) dengan pengalaman dalam membantu klien memenuhi persyaratan legalitas dan standar teknis bangunan.',
                'url' => 'https://rekanusa.co.id/pbg',
                'telephone' => '+62-813-8080-1113',
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressCountry' => 'ID',
                    'addressLocality' => 'Jakarta',
                    'addressRegion' => 'DKI Jakarta'
                ],
                'geo' => [
                    '@type' => 'GeoCoordinates',
                    'latitude' => -6.2088,
                    'longitude' => 106.8456
                ],
                'openingHoursSpecification' => [
                    '@type' => 'OpeningHoursSpecification',
                    'dayOfWeek' => [
                        'Monday',
                        'Tuesday',
                        'Wednesday',
                        'Thursday',
                        'Friday'
                    ],
                    'opens' => '08:00',
                    'closes' => '17:00'
                ],
                'priceRange' => '$$',
                'areaServed' => [
                    '@type' => 'Country',
                    'name' => 'Indonesia'
                ],
                'knowsAbout' => [
                    'Building Approval',
                    'Building Permit',
                    'Construction Regulations',
                    'Building Standards',
                    'Legal Compliance'
                ]
            ]
        ];

        $testimoni = $this->getTestimoniByKategori(4);
        return view('pbg', compact('testimoni', 'title', 'keyword', 'description', 'type', 'url', 'locale', 'schemaPBG'));
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
        $title = 'PT. Kinarya Kompegriti Rekanusa | Perencanaan Bangunan';
        $keyword = 'jasa konsultan arsitektur, jasa desain struktur, jasa desain bangunan, engineering design documentation, jasa masterplan kawasan, jasa gambar perencanaan, jasa desain gambar bangunan, jasa gambar kerja, jasa drafter, jasa design and build, jasa pembuatan ded, gambar proyek bangunan, jasa as built drawing, engineering design, jasa konsultan teknik sipil, jasa desain kawasan, jasa konstruksi';
        $description = 'Jasa DED (Detail Engineering Design) akurat & profesional. Gambar kerja lengkap, sesuai standar teknis & regulasi. Cocok untuk proyek konstruksi Anda.';
        $type = 'website';
        $url = 'https://rekanusa.co.id/bangunan';
        $locale = 'id_ID';

        $schemaBangunan = [
            [
                "@context" => "https://schema.org",
                "@type" => "Service",
                "name" => "Layanan Audit Struktur Bangunan",
                "description" => "Layanan audit struktur bangunan profesional untuk memastikan keamanan dan kualitas struktur bangunan sesuai standar yang berlaku.",
                "url" => "https://rekanusa.co.id/bangunan",
                "provider" => [
                    "@type" => "Organization",
                    "name" => "PT. Kinarya Kompegriti Rekanusa",
                    "url" => "https://rekanusa.co.id",
                    "logo" => "{{ asset('img/general/logo.png') }}",
                    "contactPoint" => [
                        "@type" => "ContactPoint",
                        "telephone" => "+62-813-8080-1113",
                        "contactType" => "customer service"
                    ]
                ],
                "serviceType" => "Building Structure Audit",
                "areaServed" => [
                    "@type" => "Country",
                    "name" => "Indonesia"
                ],
                "hasOfferCatalog" => [
                    "@type" => "OfferCatalog",
                    "name" => "Layanan Audit Bangunan",
                    "itemListElement" => [
                        [
                            "@type" => "Offer",
                            "itemOffered" => [
                                "@type" => "Service",
                                "name" => "Audit Struktur Bangunan",
                                "description" => "Pemeriksaan menyeluruh terhadap kondisi struktur bangunan"
                            ]
                        ],
                        [
                            "@type" => "Offer",
                            "itemOffered" => [
                                "@type" => "Service",
                                "name" => "Evaluasi Keamanan Struktur",
                                "description" => "Evaluasi keamanan struktur bangunan berdasarkan standar teknis"
                            ]
                        ],
                        [
                            "@type" => "Offer",
                            "itemOffered" => [
                                "@type" => "Service",
                                "name" => "Sertifikasi Laik Fungsi",
                                "description" => "Penerbitan sertifikat laik fungsi untuk bangunan"
                            ]
                        ]
                    ]
                ]
            ],
            [
                "@context" => "https://schema.org",
                "@type" => "ProfessionalService",
                "name" => "Konsultan Audit Bangunan PT. Kinarya Kompegriti Rekanusa",
                "description" => "Layanan konsultan audit bangunan profesional dengan sertifikasi resmi untuk memastikan keamanan dan kualitas struktur bangunan.",
                "url" => "https://rekanusa.co.id/bangunan",
                "telephone" => "+62-813-8080-1113",
                "address" => [
                    "@type" => "PostalAddress",
                    "addressCountry" => "ID",
                    "addressLocality" => "Jakarta",
                    "addressRegion" => "DKI Jakarta"
                ],
                "geo" => [
                    "@type" => "GeoCoordinates",
                    "latitude" => -6.2088,
                    "longitude" => 106.8456
                ],
                "openingHoursSpecification" => [
                    "@type" => "OpeningHoursSpecification",
                    "dayOfWeek" => [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday"
                    ],
                    "opens" => "08:00",
                    "closes" => "17:00"
                ],
                "priceRange" => "$$",
                "areaServed" => [
                    "@type" => "Country",
                    "name" => "Indonesia"
                ]
            ]
        ];

        $testimoni = $this->getTestimoniByKategori(5);
        return view('bangunan', compact('testimoni', 'title', 'keyword', 'description', 'type', 'url', 'locale', 'schemaBangunan'));
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

        $schemaKonstruksi = [
            [
                "@context" => "https://schema.org",
                "@type" => "Service",
                "name" => "Layanan Konsultasi Konstruksi",
                "description" => "Layanan konsultasi konstruksi profesional yang mencakup perencanaan, pengawasan, dan manajemen proyek konstruksi dengan standar kualitas tinggi.",
                "url" => "https://rekanusa.co.id/konstruksi",
                "provider" => [
                    "@type" => "Organization",
                    "name" => "PT. Kinarya Kompegriti Rekanusa",
                    "url" => "https://rekanusa.co.id",
                    "logo" => "{{ asset('img/general/logo.png') }}",
                    "contactPoint" => [
                        "@type" => "ContactPoint",
                        "telephone" => "+62-813-8080-1113",
                        "contactType" => "customer service"
                    ]
                ],
                "serviceType" => "Construction Consulting",
                "areaServed" => [
                    "@type" => "Country",
                    "name" => "Indonesia"
                ],
                "hasOfferCatalog" => [
                    "@type" => "OfferCatalog",
                    "name" => "Layanan Konstruksi",
                    "itemListElement" => [
                        [
                            "@type" => "Offer",
                            "itemOffered" => [
                                "@type" => "Service",
                                "name" => "Perencanaan Konstruksi",
                                "description" => "Layanan perencanaan konstruksi yang komprehensif dan profesional"
                            ]
                        ],
                        [
                            "@type" => "Offer",
                            "itemOffered" => [
                                "@type" => "Service",
                                "name" => "Pengawasan Konstruksi",
                                "description" => "Pengawasan konstruksi untuk memastikan kualitas dan keamanan proyek"
                            ]
                        ],
                        [
                            "@type" => "Offer",
                            "itemOffered" => [
                                "@type" => "Service",
                                "name" => "Manajemen Proyek Konstruksi",
                                "description" => "Manajemen proyek konstruksi yang efisien dan terorganisir"
                            ]
                        ]
                    ]
                ]
            ],
            [
                "@context" => "https://schema.org",
                "@type" => "ProfessionalService",
                "name" => "Konsultan Konstruksi PT. Kinarya Kompegriti Rekanusa",
                "description" => "Layanan konsultan konstruksi profesional dengan pengalaman bertahun-tahun dalam industri konstruksi Indonesia.",
                "url" => "https://rekanusa.co.id/konstruksi",
                "telephone" => "+62-813-8080-1113",
                "address" => [
                    "@type" => "PostalAddress",
                    "addressCountry" => "ID",
                    "addressLocality" => "Jakarta",
                    "addressRegion" => "DKI Jakarta"
                ],
                "geo" => [
                    "@type" => "GeoCoordinates",
                    "latitude" => -6.2088,
                    "longitude" => 106.8456
                ],
                "openingHoursSpecification" => [
                    "@type" => "OpeningHoursSpecification",
                    "dayOfWeek" => [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday"
                    ],
                    "opens" => "08:00",
                    "closes" => "17:00"
                ],
                "priceRange" => "$$",
                "areaServed" => [
                    "@type" => "Country",
                    "name" => "Indonesia"
                ]
            ]
        ];

        $testimoni = $this->getTestimoniByKategori(6);
        return view('konstruksi', compact('testimoni', 'title', 'keyword', 'description', 'type', 'url', 'locale', 'schemaKonstruksi'));
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

        $schemaDED = [
            [
                "@context" => "https://schema.org",
                "@type" => "Service",
                "name" => "Layanan DED (Detail Engineering Design)",
                "description" => "Layanan profesional untuk merancang konsep desain bangunan dengan tenaga ahli professional. Kami menyediakan layanan DED yang komprehensif untuk berbagai jenis proyek konstruksi.",
                "provider" => [
                    "@type" => "Organization",
                    "name" => "PT. Kinarya Kompegriti Rekanusa",
                    "url" => "https://rekanusa.co.id",
                    "logo" => "{{ asset('img/general/logo.png') }}",
                    "contactPoint" => [
                        "@type" => "ContactPoint",
                        "telephone" => "+62-813-8080-1113",
                        "contactType" => "customer service",
                        "availableLanguage" => ["Indonesian", "English"]
                    ],
                    "address" => [
                        "@type" => "PostalAddress",
                        "addressCountry" => "ID",
                        "addressLocality" => "Jakarta",
                        "addressRegion" => "DKI Jakarta"
                    ]
                ],
                "areaServed" => [
                    "@type" => "Country",
                    "name" => "Indonesia"
                ],
                "hasOfferCatalog" => [
                    "@type" => "OfferCatalog",
                    "name" => "Layanan DED",
                    "itemListElement" => [
                        [
                            "@type" => "Offer",
                            "itemOffered" => [
                                "@type" => "Service",
                                "name" => "Detail Engineering Design",
                                "description" => "Perancangan detail teknik untuk proyek konstruksi"
                            ]
                        ],
                        [
                            "@type" => "Offer",
                            "itemOffered" => [
                                "@type" => "Service",
                                "name" => "Konsep Desain Bangunan",
                                "description" => "Perancangan konsep desain bangunan profesional"
                            ]
                        ]
                    ]
                ],
                "serviceType" => "Engineering Design",
                "category" => "Construction Services"
            ],
            [
                "@context" => "https://schema.org",
                "@type" => "ProfessionalService",
                "name" => "DED Professional Services",
                "description" => "Layanan profesional Detail Engineering Design dengan tenaga ahli berpengalaman untuk merancang konsep desain bangunan yang berkualitas.",
                "provider" => [
                    "@type" => "Organization",
                    "name" => "PT. Kinarya Kompegriti Rekanusa",
                    "url" => "https://rekanusa.co.id"
                ],
                "areaServed" => "Indonesia",
                "hasOfferCatalog" => [
                    "@type" => "OfferCatalog",
                    "name" => "DED Services Catalog",
                    "itemListElement" => [
                        [
                            "@type" => "Offer",
                            "itemOffered" => [
                                "@type" => "ProfessionalService",
                                "name" => "Building Design Consultation",
                                "description" => "Konsultasi desain bangunan profesional"
                            ]
                        ]
                    ]
                ],
                "openingHours" => "Mo-Fr 08:00-17:00",
                "geo" => [
                    "@type" => "GeoCoordinates",
                    "latitude" => "-6.2088",
                    "longitude" => "106.8456"
                ],
                "priceRange" => "$$",
                "serviceArea" => [
                    "@type" => "Country",
                    "name" => "Indonesia"
                ]
            ]
        ];

        $testimoni = $this->getTestimoniByKategori(7);
        return view('ded', compact('testimoni', 'title', 'keyword', 'description', 'type', 'url', 'locale', 'schemaDED'));
    }

    public function portofolio()
    {
        $title = 'PT. Kinarya Kompegriti Rekanusa | Portofolio';
        $keyword = 'portofolio proyek konstruksi, galeri proyek konsultan teknik, contoh proyek konsultan sipil, portofolio audit struktur, portofolio SLF, portofolio konsultan bangunan, portofolio konsultan teknik sipil, portofolio konsultan struktur, portofolio konsultan perencana, portofolio konsultan pengawas, portofolio konsultan manajemen konstruksi';
        $description = 'Lihat portofolio proyek PT. Kinarya Kompegriti Rekanusa. Berbagai proyek konsultan teknik sipil, audit struktur, SLF, dan manajemen konstruksi yang telah kami kerjakan.';
        $type = 'website';
        $url = 'https://rekanusa.co.id/portofolio';
        $locale = 'id_ID';

        $schemaPortofolio = [
            [
                "@context" => "https://schema.org",
                "@type" => "ImageGallery",
                "name" => "Portofolio PT. Kinarya Kompegriti Rekanusa",
                "description" => "Galeri portofolio proyek-proyek konstruksi dan audit bangunan yang telah dikerjakan oleh PT. Kinarya Kompegriti Rekanusa.",
                "url" => "https://rekanusa.co.id/portofolio",
                "creator" => [
                    "@type" => "Organization",
                    "name" => "PT. Kinarya Kompegriti Rekanusa",
                    "url" => "https://rekanusa.co.id",
                    "logo" => "{{ asset('img/general/logo.png') }}",
                    "contactPoint" => [
                        "@type" => "ContactPoint",
                        "telephone" => "+62-813-8080-1113",
                        "contactType" => "customer service"
                    ]
                ],
                "about" => [
                    "Construction Projects",
                    "Building Audit",
                    "Engineering Consulting",
                    "Structure Assessment"
                ],
                "keywords" => "portofolio, konstruksi, audit bangunan, konsultan teknik, proyek",
                "inLanguage" => "id",
                "dateModified" => "{{ date('Y-m-d') }}",
                "publisher" => [
                    "@type" => "Organization",
                    "name" => "PT. Kinarya Kompegriti Rekanusa",
                    "logo" => [
                        "@type" => "ImageObject",
                        "url" => "{{ asset('img/general/logo.png') }}"
                    ]
                ]
            ],
            [
                "@context" => "https://schema.org",
                "@type" => "CreativeWork",
                "name" => "Portofolio Proyek Konstruksi dan Audit Bangunan",
                "description" => "Kumpulan karya dan proyek yang telah diselesaikan oleh PT. Kinarya Kompegriti Rekanusa dalam bidang konstruksi dan audit bangunan.",
                "url" => "https://rekanusa.co.id/portofolio",
                "creator" => [
                    "@type" => "Organization",
                    "name" => "PT. Kinarya Kompegriti Rekanusa",
                    "url" => "https://rekanusa.co.id"
                ],
                "dateCreated" => "2020-01-01",
                "dateModified" => "{{ date('Y-m-d') }}",
                "genre" => [
                    "Construction",
                    "Engineering",
                    "Building Audit",
                    "Consulting"
                ],
                "keywords" => "portofolio, konstruksi, audit bangunan, konsultan teknik, engineering",
                "inLanguage" => "id",
                "copyrightHolder" => [
                    "@type" => "Organization",
                    "name" => "PT. Kinarya Kompegriti Rekanusa"
                ],
                "license" => "https://creativecommons.org/licenses/by-nc-nd/4.0/",
                "workExample" => [
                    "@type" => "CreativeWork",
                    "name" => "Proyek Konstruksi dan Audit Bangunan",
                    "description" => "Berbagai proyek konstruksi dan audit bangunan yang telah berhasil diselesaikan"
                ]
            ]
        ];

        $portofolio = Portofolio::with(['media', 'kategoris'])
            ->where('publish', 1) // Tambahkan kondisi untuk hanya menampilkan yang sudah dipublish
            ->paginate(50);
        $kategori = Kategori::all();
        return view('portofolio', compact('portofolio', 'kategori', 'title', 'keyword', 'description', 'type', 'url', 'locale', 'schemaPortofolio'));
    }

    public function regazine()
    {
        $title = 'PT. Kinarya Kompegriti Rekanusa | Regazine';
        $keyword = 'artikel konstruksi, berita teknik sipil, majalah konstruksi, artikel SLF, artikel audit struktur, artikel konsultan bangunan, artikel konsultan teknik sipil, artikel konsultan struktur, artikel konsultan perencana, artikel konsultan pengawas, artikel konsultan manajemen konstruksi';
        $description = 'Baca artikel dan berita terkini seputar konstruksi, teknik sipil, SLF, audit struktur, dan manajemen konstruksi dari PT. Kinarya Kompegriti Rekanusa.';
        $type = 'website';
        $url = 'https://rekanusa.co.id/regazine';
        $locale = 'id_ID';

        // Schema.org structured data for Regazine
        $schemaRegazine = [
            [
                '@context' => 'https://schema.org',
                '@type' => 'Blog',
                'name' => 'Regazine PT. Kinarya Kompegriti Rekanusa',
                'description' => 'Publikasi digital yang berisi artikel, berita, dan informasi terkini seputar industri konstruksi, audit bangunan, dan konsultasi teknik.',
                'url' => 'https://rekanusa.co.id/regazine',
                'publisher' => [
                    '@type' => 'Organization',
                    'name' => 'PT. Kinarya Kompegriti Rekanusa',
                    'url' => 'https://rekanusa.co.id',
                    'logo' => [
                        '@type' => 'ImageObject',
                        'url' => '{{ asset("img/general/logo.png") }}'
                    ],
                    'contactPoint' => [
                        '@type' => 'ContactPoint',
                        'telephone' => '+62-813-8080-1113',
                        'contactType' => 'customer service'
                    ]
                ],
                'inLanguage' => 'id',
                'genre' => [
                    'Construction',
                    'Engineering',
                    'Building Audit',
                    'Technical Consulting'
                ],
                'keywords' => 'regazine, konstruksi, audit bangunan, konsultan teknik, engineering, publikasi',
                'dateModified' => '{{ date("Y-m-d") }}',
                'about' => [
                    '@type' => 'Thing',
                    'name' => 'Industri Konstruksi dan Audit Bangunan'
                ]
            ]
        ];

        $regazine = Regazine::with('media')->paginate(8);
        $regazineLast = $this->getRegazineLastNoCache();
        return view('regazine', compact('regazine', 'regazineLast', 'schemaRegazine'));
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
    private function getRegazineNoCache()
    {
        return Regazine::with('media')->orderBy('id', 'desc')->get();
    }

    /**
     * Helper Method: Get Regazine Last (No Cache)
     *
     * Mengambil data regazine terakhir langsung dari database.
     */
    private function getRegazineLastNoCache()
    {
        return Regazine::with('media')->latest()->first();
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
