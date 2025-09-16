@extends('layouts.main')
@section('kepala')
    {{-- swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <style>
        .bannerSwiper {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .bannerSwiper .swiper-slide {
            position: relative;
            width: 100%;
            height: 100%;
        }
    </style>
    
    {{-- Schema.org Structured Data --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "PT. Kinarya Kompegriti Rekanusa",
        "alternateName": "Rekanusa",
        "url": "https://rekanusa.co.id",
        "logo": "{{ asset('img/general/logo.png') }}",
        "description": "Jasa Konsultan teknik yang melingkupi pekerjaan konsultasi perencana struktur sipil, mewujudkan bangunan yang memiliki legalitas sertifikat laik fungsi (SLF).",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "ID",
            "addressLocality": "Jakarta",
            "addressRegion": "DKI Jakarta"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+62-813-8080-1113",
            "contactType": "customer service",
            "availableLanguage": ["Indonesian", "English"]
        },
        "sameAs": [
            "https://wa.me/6281380801113"
        ],
        "foundingDate": "2010",
        "numberOfEmployees": {
            "@type": "QuantitativeValue",
            "minValue": 10,
            "maxValue": 50
        },
        "areaServed": {
            "@type": "Country",
            "name": "Indonesia"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Layanan Konsultan Teknik",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Konsultasi Perencana Struktur Sipil",
                        "description": "Pekerjaan konsultasi enjiniring untuk perencana Struktur Sipil, Arsitektural, Mekanikal, Elektrikal, Plumbing"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Audit Struktur dan Audit Energy",
                        "description": "Layanan audit struktur bangunan dan audit energi untuk memastikan keamanan dan efisiensi"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Sertifikat Laik Fungsi (SLF)",
                        "description": "Pekerjaan Perizinan Sertifikat Laik Fungsi (SLF) Bangunan Gedung"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Dokumen Pendukung SLF",
                        "description": "Pekerjaan Perizinan Dokumen Pendukung Pengurusan SLF (KRK, PBG, SLO, RKK Damkar, Dokumen Lingkungan, dll)"
                    }
                }
            ]
        }
    }
    </script>
    
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "@id": "https://rekanusa.co.id/#localbusiness",
        "name": "PT. Kinarya Kompegriti Rekanusa",
        "image": "{{ asset('img/general/logo.png') }}",
        "telephone": "+62-813-8080-1113",
        "url": "https://rekanusa.co.id",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "ID",
            "addressLocality": "Jakarta",
            "addressRegion": "DKI Jakarta"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": -6.2088,
            "longitude": 106.8456
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday"
            ],
            "opens": "08:00",
            "closes": "17:00"
        },
        "priceRange": "$$"
    }
    </script>
@endsection
@section('content')
    {{-- banner --}}
    <section id="banner" class="overflow-hidden relative uppercase font-monserrat">
        <!-- Swiper -->
        <div class="swiper bannerSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="object-cover absolute inset-0 w-full h-full">
                        <img loading="eager" class="object-cover inset-0 w-full h-full" loading="eager"
                            src="{{ asset('img/general/bg-banner1.webp') }}" alt="banner rekanusa 1">
                    </div>
                    <img loading="eager" class="object-cover absolute inset-0 w-full h-full mix-blend-normal"
                        src="{{ asset('img/general/bg-hijau.png') }}" loading="eager" alt="bg hijau rekanusa">
                </div>
                <div class="swiper-slide">
                    <div class="object-cover absolute inset-0 w-full h-full">
                        <img loading="eager" class="object-cover inset-0 w-full h-full" loading="eager"
                            src="{{ asset('img/general/bg-banner2.webp') }}" alt="banner bangunan rekanusa">
                    </div>
                    <img loading="eager" class="object-cover absolute inset-0 w-full h-full mix-blend-normal"
                        src="{{ asset('img/general/bg-hijau.png') }}" loading="eager" alt="bg hijau rekanusa">
                </div>
                <div class="swiper-slide">
                    <div class="object-cover absolute inset-0 w-full h-full">
                        <img loading="eager" class="object-cover inset-0 w-full h-full" loading="eager"
                            src="{{ asset('img/general/bg-banner3.webp') }}" alt="banner konstruksi rekanusa">
                    </div>
                    <img loading="eager" class="object-cover absolute inset-0 w-full h-full mix-blend-normal"
                        src="{{ asset('img/general/bg-hijau.png') }}" loading="eager" alt="bg hijau rekanusa">
                </div>
            </div>
        </div>
        <div
            class="container relative z-10 px-4 py-24 mx-auto text-center max-w-screen lg:pl-20 lg:text-left md:py-52 lg:py-56">
            <h1
                class="mb-4 text-xl font-extrabold tracking-normal leading-relaxed text-white md:text-4xl md:leading-relaxed lg:text-5xl lg:leading-relaxed 2xl:text-6xl 2xl:leading-relaxed">
                @if (app()->getLocale() == 'en')
                    building planning, <br class="hidden lg:block"> supervision,testing,and <br class="hidden lg:block">
                    licensing <span class="p-2 bg-primary">Consultant.</span>
                @else
                    <span class="p-2 bg-primary">Konsultan</span> perencana, <br class="hidden lg:block"> pengawasan,
                    pengujian,<br class="hidden lg:block"> dan perizinan bangunan <br class="hidden lg:block"> gedung.
                @endif

            </h1>
            <div class="flex flex-col justify-center space-y-4 lg:justify-start sm:flex-row sm:space-y-0">
                <a href="https://wa.me/6281380801113" target="_blank"
                    class="justify-start items-center px-5 py-3 text-base font-bold text-center rounded-lg shadow-2xl drop-shadow-2xl transition-all md:inline-flex text-primary bg-tombol hover:bg-primary hover:text-tombol hover:scale-105 focus:ring-4 focus:ring-blue-300">
                    @if (app()->getLocale() == 'en')
                        consult now
                    @else
                        konsultasi sekarang
                    @endif
                </a>
            </div>
        </div>
    </section>
    {{-- end banner --}}

    {{-- mitra kami --}}
    <section id="mitra">
        <div class="container p-6 mx-auto mt-5 text-center md:mt-20">
            <h2 class="pt-10 text-2xl font-bold uppercase text-primary md:text-4xl font-inter">
                @if (app()->getLocale() == 'en')
                    our partners
                @else
                    mitra kami
                @endif
            </h2>
        </div>
        {{-- logo utama --}}
        <div class="container p-6 mx-auto">
            <div class="flex justify-center p-5 mb-10 w-full md:mb-32">
                <img src="{{ asset('img/logo/telkom.webp') }}" class="w-[40%] lg:w-[30%] aspect-4/3 object-contain"
                    loading="lazy" alt="logo telkom indonesia">
                <img src="{{ asset('img/logo/mercedez.webp') }}" loading="lazy"
                    class="w-[40%] lg:w-[30%] aspect-4/3 object-contain" alt="logo benz">
                <img src="{{ asset('img/logo/bca.webp') }}" loading="lazy"
                    class="w-[40%] lg:w-[30%] aspect-4/3 object-contain" alt="logo bank bca">
            </div>
            <div class="flex flex-wrap gap-4 justify-center p-0 w-full md:p-5">
                <img src="{{ asset('img/logo/superindo.webp') }}" loading="lazy"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy" alt="logo superindo">
                <img src="{{ asset('img/logo/olx.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy" alt="logo superindo">
                <img src="{{ asset('img/logo/shell.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy" alt="logo shell">
                <img src="{{ asset('img/logo/djp.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy" alt="logo djp">
                <img src="{{ asset('img/logo/property.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                    alt="logo telkom property">
                <img src="{{ asset('img/logo/Shoetown.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy" alt="logo Shoetown">
                <img src="{{ asset('img/logo/bpjs.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy" alt="logo jmo">
                <img src="{{ asset('img/logo/pln.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                    alt="logo Logo_PLN">
                <img src="{{ asset('img/logo/logo-telkomsel-baru.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                    alt="logo logo-telkomsel-baru">
                <img src="{{ asset('img/logo/askrindo.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                    alt="logo askrindo">
                <img src="{{ asset('img/logo/tah sunghung.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                    alt="logo tahsungsung">
                <img src="{{ asset('img/logo/tonghong.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                    alt="logo tonghung">
                <img src="{{ asset('img/logo/landmark.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                    alt="logo telkom landmark">
                <img src="{{ asset('img/logo/roki.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy" alt="logo roki">
                <img src="{{ asset('img/logo/sinar.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                    alt="logo sinar samudra">
                <img src="{{ asset('img/logo/prima.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                    alt="logo Logo-Primaadjuster-300x86">
                <img src="{{ asset('img/logo/hwi.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy" alt="logo hwi">
                <img src="{{ asset('img/logo/sg.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy" alt="logo advance">
                <img src="{{ asset('img/logo/bp.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy" alt="logo bp">
                <img src="{{ asset('img/logo/argha.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy" alt="logo argha">
                <img src="{{ asset('img/logo/gs.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy" alt="logo gs">
                <img src="{{ asset('img/logo/margautama.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                    alt="logo margautama">
                <img src="{{ asset('img/logo/maxresdefault.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                    alt="logo maxresdefault">
                <img src="{{ asset('img/logo/maybank.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy" alt="logo maybank">
                <img src="{{ asset('img/logo/LG_logo_(2014).svg.png') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy" alt="logo LG">
                <img src="{{ asset('img/logo/Shopee.svg') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy" alt="logo Shopee">
            </div>
        </div>
    </section>
    {{-- end mitra kami --}}

    {{-- profil perusahaan --}}
    <section id="profil"
        class="hidden relative lg:block overflow-hidden bg-[url('../../public/img/general/profile-perusahaan.webp')] bg-cover bg-no-repeat bg-center">
        <div class="container mx-auto p-6">
            <div class="flex">
                @if (App::getLocale() == 'id')
                    <div class="flex flex-col max-w-lg xl:max-w-3xl">
                        <h2
                            class="mb-4 text-xl font-extrabold tracking-normal leading-relaxed uppercase font-inter text-primary md:text-2xl md:leading-relaxed 2xl:text-4xl 2xl:leading-relaxed">
                            Profil Perusahaan <span class="font-extrabold text-white bg-secondary"> PT. Kinarya <br>
                                kompegriti rekanusa</span>
                        </h2>
                        <div class="text-paragraph font-poppins 2xl:text-xl">
                            <p class="mb-5 font-poppins">
                                PT. Kinarya Kompegriti Rekanusa adalah Perusahaan jasa Konsultan teknik yang melingkupi :
                            </p>
                            <ul class="list-image-[url('../../public/img/general/polygon.png')] list-outside pl-4 mb-5">
                                <li>
                                    Pekerjaan konsultasi enjiniring untuk perencana Struktur Sipil, Arsitektural, Mekanikal,
                                    Elektrikal, Plumbing.
                                </li>
                                <li>
                                    Pekerjaan Audit Struktur dan Audit Energy
                                </li>
                                <li>
                                    Pekerjaan Perizinan Sertifikat Laik Fungsi ( SLF ) Bangunan Gedung
                                </li>
                                <li>
                                    Pekerjaan Perizinan Dokumen Pendukung Pengurusan SLF (KRK, PBG, SLO, RKK Damkar, Dokumen
                                    Lingkungan, dll)
                                </li>
                            </ul>
                            <p class="mb-5">
                                Komitmen kami untuk mendapatkan hasil terbaik dengan cara yang benar, menjalankan dan
                                melaksanakan tugas dengan penuh tanggung jawab yang mengedepankan keunggulan penerapan
                                teknologi yang inovatif serta mampu beradaptasi dalam mendapatkan peluang baru untuk
                                pertumbuhan yang menguntungkan.
                            </p>
                            <p>
                                Layanan yang profesional, optimis, tuntas dan solutif adalah dedikasi kami untuk kepuasan
                                pelanggan, serta nilai kerja yang baik dan lingkungan kerja yang sehat, mempengaruhi kami
                                untuk memberikan layanan yang memuaskan.
                            </p>
                        </div>
                    </div>
                @else
                    <div class="flex flex-col max-w-lg xl:max-w-3xl">
                        <h2
                            class="mb-4 text-xl font-extrabold tracking-normal leading-relaxed uppercase font-inter text-primary md:text-2xl md:leading-relaxed 2xl:text-4xl 2xl:leading-relaxed">
                            Company Profile <span class="font-extrabold text-white bg-secondary">PT. Kinarya <br>
                                kompegriti rekanusa</span>
                        </h2>
                        <div class="text-paragraph font-poppins 2xl:text-xl">
                            <p class="mb-5 font-poppins">
                                PT. Kinarya Kompegriti Rekanusa is an engineering consulting services company that covers :
                            </p>
                            <ul class="list-image-[url('../../public/img/general/polygon.png')] list-outside pl-4 mb-5">
                                <li>
                                    Engineering consulting work for Civil Structural, Architectural, Mechanical, Electrical,
                                    Plumbing planners. </li>
                                <li>
                                    Structure Audit and Energy Audit Work
                                </li>
                                <li>
                                    Building Certificate of Functioning (SLF) Licensing Work
                                </li>
                                <li>
                                    Licensing Work Supporting Documents for SLF (KRK, PBG, SLO, RKK Damkar, Environmental
                                    Documents, etc.)
                                </li>
                            </ul>
                            <p class="mb-5">
                                We are committed to getting the best results the right way, carrying out and executing tasks
                                with full responsibility that emphasizes excellence in the application of innovative
                                technology and being able to adapt to new opportunities for profitable growth.
                            </p>
                            <p>
                                Professional, optimistic, thorough and solutive services are our dedication to customer
                                satisfaction, as well as good work values and a healthy working environment, influencing us
                                to provide satisfactory services.
                            </p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="absolute bottom-0 -right-52 xl:-right-32 2xl:-right-0">
            <img src="{{ asset('img/general/person.webp') }}" class="w-[70%] 2xl:w-full" loading="lazy" alt="person">
        </div>
    </section>
    <section id="profil" class="block lg:hidden">
        <div class="flex flex-col">
            <div class="relative flex flex-col min-h-52">
                <div
                    class="overflow-hidden bg-[url('../../public/img/general/bg-portofolio.webp')] bg-cover bg-no-repeat bg-center">
                    <img src="{{ asset('img/general/person.webp') }}" class="w-full h-full object-contain"
                        loading="lazy" alt="profile rekanusa">
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute -bottom-1" viewBox="0 0 1440 320">
                    <path fill="#ffff" fill-opacity="1" d="M0,192L1440,0L1440,320L0,320Z"></path>
                </svg>
            </div>
            <div class="relative pb-24 bg-white">
                @if (app()->getLocale() == 'en')
                    <h2
                        class="mb-4 text-2xl font-extrabold tracking-normal leading-relaxed text-center uppercase sm:text-3xl sm:tracking-normal sm:leading-relaxed font-inter text-primary">
                        Company Profile <span class="font-extrabold text-secondary">PT. Kinarya <br> kompegriti
                            rekanusa</span>
                    </h2>
                    <div class="flex-col justify-center items-center p-6 text-paragraph font-poppins">
                        <div class="mb-5 font-poppins">
                            PT. Kinarya Kompegriti Rekanusa is an engineering consulting services company that covers :
                        </div>
                        <ul class="list-image-[url('../../public/img/general/polygon.png')] list-outside pl-4 mb-5">
                            <li>
                                Engineering consulting work for Civil Structural, Architectural, Mechanical, Electrical,
                                Plumbing planners. </li>
                            </li>
                            <li>
                                Structure Audit and Energy Audit Work
                            </li>
                            <li>
                                Building Certificate of Functioning (SLF) Licensing Work
                            </li>
                            <li>
                                Licensing Work Supporting Documents for SLF (KRK, PBG, SLO, RKK Damkar, Environmental
                                Documents, etc.)
                            </li>
                        </ul>
                        <p class="mb-5 text-justify">
                            We are committed to getting the best results the right way, carrying out and executing tasks
                            with full responsibility that emphasizes excellence in the application of innovative technology
                            and being able to adapt to new opportunities for profitable growth.
                        </p>
                        <p class="text-justify">
                            Professional, optimistic, thorough and solutive services are our dedication to customer
                            satisfaction, as well as good work values and a healthy working environment, influencing us to
                            provide satisfactory services.
                        </p>
                    </div>
                @else
                    <h2
                        class="mb-4 text-2xl font-extrabold tracking-normal leading-relaxed text-center uppercase sm:text-3xl sm:tracking-normal sm:leading-relaxed font-inter text-primary">
                        {{ __('Profil Perusahaan') }} <span class="font-extrabold text-secondary">PT. Kinarya <br>
                            kompegriti
                            rekanusa</span>
                    </h2>
                    <div class="flex-col justify-center items-center p-6 text-paragraph font-poppins">
                        <div class="mb-5 font-poppins">
                            {{ __('PT. Kinarya Kompegriti Rekanusa adalah Perusahaan jasa Konsultan teknik yang melingkupi :') }}
                        </div>
                        <ul class="list-image-[url('../../public/img/general/polygon.png')] list-outside pl-4 mb-5">
                            <li>
                                {{ __('Pekerjaan konsultasi enjiniring untuk perencana Struktur Sipil, Arsitektural, Mekanikal, Elektrikal, Plumbing.') }}
                            </li>
                            <li>
                                {{ __('Pekerjaan Audit Struktur dan Audit Energy') }}
                            </li>
                            <li>
                                {{ __('Pekerjaan Perizinan Sertifikat Laik Fungsi ( SLF ) Bangunan Gedung') }}
                            </li>
                            <li>
                                {{ __('Pekerjaan Perizinan Dokumen Pendukung Pengurusan SLF (KRK, PBG, SLO, RKK Damkar, Dokumen Lingkungan, dll)') }}
                            </li>
                        </ul>
                        <p class="mb-5 text-justify">
                            {{ __('Komitmen kami untuk mendapatkan hasil terbaik dengan cara yang benar, menjalankan dan melaksanakan tugas dengan penuh tanggung jawab yang mengedepankan keunggulan penerapan teknologi yang inovatif serta mampu beradaptasi dalam mendapatkan peluang baru untuk pertumbuhan yang menguntungkan.') }}
                        </p>
                        <p class="text-justify">
                            {{ __('Layanan yang profesional, optimis, tuntas dan solutif adalah dedikasi kami untuk kepuasan pelanggan, serta nilai kerja yang baik dan lingkungan kerja yang sehat, mempengaruhi kami untuk memberikan layanan yang memuaskan.') }}
                        </p>
                    </div>
                @endif
            </div>
        </div>
    </section>
    {{-- end profil perusahaan --}}

    {{-- kami hadir --}}
    <section id="kami"
        class="hidden relative lg:block overflow-hidden bg-[url('../../public/img/general/tech.webp')] bg-cover bg-no-repeat bg-center">
        <div class="container mx-auto p-6 z-10 relative">
            <div class="flex flex-col max-w-lg 2xl:max-w-3xl float-right">
                <div class="flex flex-col py-10">
                    <h2
                        class="mb-4 text-xl font-extrabold tracking-normal leading-relaxed uppercase font-inter text-primary md:text-2xl md:leading-relaxed 2xl:text-4xl 2xl:leading-relaxed">
                        @if (app()->getLocale() == 'en')
                            we are here as a leading <br> multinational <span class="text-white bg-secondary">technical
                                <br> consulting</span> services <br> provider.
                        @else
                            Kami hadir sebagai <br> perusahaan penyedia <br> jasa <span
                                class="text-white bg-secondary">konsultan teknis</span> <br> multinasional terkemuka
                        @endif
                    </h2>
                    <div class="text-justify font-poppins text-paragraph 2xl:text-xl">
                        @if (app()->getLocale() == 'en')
                            We dedicate all the best works and solutions we have, supported by experienced and certified
                            human resources in their fields, as well as complete calibrated equipment to provide a
                            commitment of support to our partners in the vision of achieving progress & success together.
                        @else
                            Kami mendedikasikan semua karya dan solusi terbaik yang kami miliki, didukung dengan sumber daya
                            manusia yang berpengalaman dan bersertifikasi dibidangnya, serta peralatan yang lengkap
                            terkalibrasi untuk memberikan komitmen dukungan kepada mitra kami dalam visi mencapai kemajuan &
                            kesuksesan bersama.
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 -left-6 xl:left-24">
            <img src="{{ asset('img/general/person-2.webp') }}" class="w-[50%] xl:w-[60%] 2xl:w-[70%]" loading="lazy"
                alt="person">
        </div>
    </section>
    <section id="kami" class="block lg:hidden">
        <div class="flex flex-col">
            <div class="relative flex flex-col min-h-52">
                <div
                    class="overflow-hidden bg-[url('../../public/img/general/bg-tech.webp')] bg-cover bg-no-repeat bg-center">
                    <img src="{{ asset('img/general/person-2.webp') }}" class="w-full h-full object-contain pt-32"
                        loading="lazy" alt="profile rekanusa">
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute -bottom-1" viewBox="0 0 1440 320">
                    <path fill="#ffff" fill-opacity="1" d="M0,192L1440,0L1440,320L0,320Z"></path>
                </svg>
            </div>
            <div class="relative pb-24 bg-white">
                <h2
                    class="mb-4 text-2xl font-extrabold tracking-normal leading-relaxed text-center uppercase sm:text-3xl sm:tracking-normal sm:leading-relaxed font-inter text-primary">
                    @if (app()->getLocale() == 'en')
                        we are here as a leading multinational <span class="text-white bg-secondary">technical
                            consulting</span> services provider.
                    @else
                        Kami hadir sebagai perusahaan penyedia jasa <span class="text-white bg-secondary">konsultan
                            teknis</span>
                        multinasional terkemuka
                    @endif

                </h2>
                <div class="flex-col justify-center items-center px-6 text-paragraph font-poppins">
                    <div class="text-justify font-poppins">
                        @if (app()->getLocale() == 'en')
                            We dedicate all the best works and solutions we have, supported by experienced and certified
                            human resources in their fields, as well as complete calibrated equipment to provide a
                            commitment of support to our partners in the vision of achieving progress & success together.
                        @else
                            Kami mendedikasikan semua karya dan solusi terbaik yang kami miliki, didukung dengan sumber daya
                            manusia yang berpengalaman dan bersertifikasi dibidangnya, serta peralatan yang lengkap
                            terkalibrasi untuk memberikan komitmen dukungan kepada mitra kami dalam visi mencapai kemajuan &
                            kesuksesan bersama.
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end kami hadir --}}

    {{-- layanan dan jasa --}}
    <section id="layanan" class="bg-[url('../../public/img/general/bg-layanan.webp')] bg-cover md:py-20">
        <div class="container p-6 mx-auto text-center">
            <h2 class="pt-10 mb-5 text-2xl font-bold uppercase text-primary md:text-4xl lg:text-5xl font-inter lg:mb-10">
                @if (app()->getLocale() == 'en')
                    <span class="px-1 text-white bg-secondary">Rekanusa</span> services
                @else
                    Layanan dan Jasa <span class="px-1 text-white bg-secondary">Rekanusa</span>
                @endif
            </h2>
            <p class="text-sm text-paragraph font-poppin md:text-base lg:px-24 2xl:text-xl">
                @if (app()->getLocale() == 'en')
                    It is certainly an honor for us to provide the best service to contribute to boosting your business with
                    the various services we provide.
                @else
                    Suatu kehormatan bagi kami tentunya dalam memberikan pelayanan terbaik untuk berkontribusi melejitkan
                    bisnis Anda dengan berbagai layanan yang kami berikan.
                @endif
            </p>
            <div class="flex justify-center items-center p-2 mt-2 md:mt-0 md:p-6 font-poppins">
                <div class="grid grid-cols-2 gap-2 md:gap-4 md:grid-cols-3">
                    <a href="/jasaslf">
                        <div
                            class="relative p-2 lg:p-5 max-w-80 rounded-xl border-2 border-[#D9D9D9] bg-white hover:cursor-pointer hover:scale-105 hover:bg-secondary hover:shadow-2xl transition-all group">
                            <div class="mb-5 max-w-xs rounded-xl shadow-lg">
                                <img src="{{ asset('img/general/service-slf.webp') }}" loading="lazy"
                                    class="object-cover w-full h-full rounded-xl" alt="jasa slf">
                            </div>
                            <div
                                class="h-10 text-xs font-bold text-primary capitalize md:text-xl lg:px-10 group-hover:text-white">
                                @if (app()->getLocale() == 'en')
                                    Function-worthy Certificate
                                @else
                                    Jasa Sertifikat Laik Fungsi
                                @endif
                            </div>
                            <div
                                class="flex justify-center mt-5 mb-2 text-xs md:justify-end md:text-base text-secondary group-hover:text-white md:mt-10">
                                <div class="flex flex-col justify-center items-center md:flex-row md:justify-between">
                                    <div class="uppercase">
                                        @if (app()->getLocale() == 'en')
                                            show more
                                        @else
                                            selengkapnya
                                        @endif
                                    </div>
                                    <div>
                                        <svg class="w-4 h-4 md:w-6 md:h-6" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/audit">
                        <div
                            class="relative p-2 lg:p-5 max-w-80 rounded-xl border-2 border-[#D9D9D9] bg-white hover:cursor-pointer hover:scale-105 hover:bg-secondary hover:shadow-2xl transition-all group">
                            <div class="mb-5 max-w-xs rounded-xl shadow-lg">
                                <img src="{{ asset('img/general/service-audit.webp') }}" loading="lazy"
                                    class="object-cover w-full h-full rounded-xl" alt="jasa audit">
                            </div>
                            <div
                                class="h-10 text-xs font-bold text-primary capitalize md:text-xl lg:px-10 group-hover:text-white">
                                @if (app()->getLocale() == 'en')
                                    structure audit
                                @else
                                    Audit Struktur
                                @endif
                            </div>
                            <div
                                class="flex justify-center mt-5 mb-2 text-xs md:justify-end md:text-base text-secondary group-hover:text-white md:mt-10">
                                <div class="flex flex-col justify-center items-center md:flex-row md:justify-between">
                                    <div class="uppercase">
                                        @if (app()->getLocale() == 'en')
                                            show more
                                        @else
                                            selengkapnya
                                        @endif
                                    </div>
                                    <div>
                                        <svg class="w-4 h-4 md:w-6 md:h-6" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/auditenergi">
                        <div
                            class="relative p-2 lg:p-5 max-w-80 rounded-xl border-2 border-[#D9D9D9] bg-white hover:cursor-pointer hover:scale-105 hover:bg-secondary hover:shadow-2xl transition-all group">
                            <div class="mb-5 max-w-xs rounded-xl shadow-lg">
                                <img src="{{ asset('img/general/service-energi.webp') }}" loading="lazy"
                                    class="object-cover w-full h-full rounded-xl" alt="jasa audit energi">
                            </div>
                            <div
                                class="h-10 text-xs font-bold text-primary capitalize md:text-xl lg:px-10 group-hover:text-white">
                                @if (app()->getLocale() == 'en')
                                    energy audit
                                @else
                                    Audit Energi
                                @endif
                            </div>
                            <div
                                class="flex justify-center mt-5 mb-2 text-xs md:justify-end md:text-base text-secondary group-hover:text-white md:mt-10">
                                <div class="flex flex-col justify-center items-center md:flex-row md:justify-between">
                                    <div class="uppercase">
                                        @if (app()->getLocale() == 'en')
                                            show more
                                        @else
                                            selengkapnya
                                        @endif
                                    </div>
                                    <div>
                                        <svg class="w-4 h-4 md:w-6 md:h-6" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/pbg">
                        <div
                            class="relative p-2 lg:p-5 max-w-80 rounded-xl border-2 border-[#D9D9D9] bg-white hover:cursor-pointer hover:scale-105 hover:bg-secondary hover:shadow-2xl transition-all group">
                            <div class="mb-5 max-w-xs rounded-xl shadow-lg">
                                <img src="{{ asset('img/general/service-pbg.webp') }}" loading="lazy"
                                    class="object-cover w-full h-full rounded-xl" alt="jasa pbg">
                            </div>
                            <div
                                class="h-10 text-xs font-bold text-primary capitalize md:text-xl lg:px-10 group-hover:text-white">
                                @if (app()->getLocale() == 'en')
                                    building Approval
                                @else
                                    Jasa PBG
                                @endif
                            </div>
                            <div
                                class="flex justify-center mt-5 mb-2 text-xs md:justify-end md:text-base text-secondary group-hover:text-white md:mt-10">
                                <div class="flex flex-col justify-center items-center md:flex-row md:justify-between">
                                    <div class="uppercase">
                                        @if (app()->getLocale() == 'en')
                                            show more
                                        @else
                                            selengkapnya
                                        @endif
                                    </div>
                                    <div>
                                        <svg class="w-4 h-4 md:w-6 md:h-6" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/bangunan">
                        <div
                            class="relative p-2 lg:p-5 max-w-80 rounded-xl border-2 border-[#D9D9D9] bg-white hover:cursor-pointer hover:scale-105 hover:bg-secondary hover:shadow-2xl transition-all group">
                            <div class="mb-5 max-w-xs rounded-xl shadow-lg">
                                <img src="{{ asset('img/general/service-bangunan.webp') }}" loading="lazy"
                                    class="object-cover w-full h-full rounded-xl" alt="jasa bangunan">
                            </div>
                            <div
                                class="h-10 text-xs font-bold text-primary capitalize md:text-xl lg:px-10 group-hover:text-white">
                                @if (app()->getLocale() == 'en')
                                    building audit
                                @else
                                    Perencanaan Bangunan
                                @endif
                            </div>
                            <div
                                class="flex justify-center mt-5 mb-2 text-xs md:justify-end md:text-base text-secondary group-hover:text-white md:mt-10">
                                <div class="flex flex-col justify-center items-center md:flex-row md:justify-between">
                                    <div class="uppercase">
                                        @if (app()->getLocale() == 'en')
                                            show more
                                        @else
                                            selengkapnya
                                        @endif
                                    </div>
                                    <div>
                                        <svg class="w-4 h-4 md:w-6 md:h-6" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/konstruksi">
                        <div
                            class="relative p-2 lg:p-5 max-w-80 rounded-xl border-2 border-[#D9D9D9] bg-white hover:cursor-pointer hover:scale-105 hover:bg-secondary hover:shadow-2xl transition-all group">
                            <div class="mb-5 max-w-xs rounded-xl shadow-lg">
                                <img src="{{ asset('img/general/service-konstruksi.webp') }}" loading="lazy"
                                    class="object-cover w-full h-full rounded-xl" alt="jasa konstruksi">
                            </div>
                            <div
                                class="h-10 text-xs font-bold text-primary capitalize md:text-xl lg:px-10 group-hover:text-white">
                                @if (app()->getLocale() == 'en')
                                    construction management
                                @else
                                    Manajemen Konstruksi
                                @endif
                            </div>
                            <div
                                class="flex justify-center mt-5 mb-2 text-xs md:justify-end md:text-base text-secondary group-hover:text-white md:mt-10">
                                <div class="flex flex-col justify-center items-center md:flex-row md:justify-between">
                                    <div class="uppercase">
                                        @if (app()->getLocale() == 'en')
                                            show more
                                        @else
                                            selengkapnya
                                        @endif
                                    </div>
                                    <div>
                                        <svg class="w-4 h-4 md:w-6 md:h-6" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/ded">
                        <div
                            class="relative p-2 lg:p-5 max-w-80 rounded-xl border-2 border-[#D9D9D9] bg-white hover:cursor-pointer hover:scale-105 hover:bg-secondary hover:shadow-2xl transition-all group">
                            <div class="mb-5 max-w-xs rounded-xl shadow-lg">
                                <img src="{{ asset('img/general/service-konstruksi.webp') }}" loading="lazy"
                                    class="object-cover w-full h-full rounded-xl" alt="jasa ded">
                            </div>
                            <div class="h-10 text-xs font-bold text-primary md:text-xl lg:px-10 group-hover:text-white">
                                @if (app()->getLocale() == 'en')
                                    DED Service
                                @else
                                    Jasa DED
                                @endif
                            </div>
                            <div
                                class="flex justify-center mt-5 mb-2 text-xs md:justify-end md:text-base text-secondary group-hover:text-white md:mt-10">
                                <div class="flex flex-col justify-center items-center md:flex-row md:justify-between">
                                    <div class="uppercase">
                                        @if (app()->getLocale() == 'en')
                                            show more
                                        @else
                                            selengkapnya
                                        @endif
                                    </div>
                                    <div>
                                        <svg class="w-4 h-4 md:w-6 md:h-6" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- end layanan dan jasa --}}

    {{-- portofolio --}}
    <section id="portofolio" class="py-24 h-auto">
        <div class="container p-6 mx-auto">
            <div class="flex flex-col xl:flex-row">
                <div class="w-full">
                    <svg baseprofile="tiny" class="w-full" fill="#6f9c76" stroke="#ffffff" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width=".5" version="1.2" viewbox="0 0 1000 368"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="features">
                            <path data-tooltip-target="tooltip-IDKU"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#6761C0"
                                d="M494.2 51.4l0.7 0.1 0.9 0 1.4 0 1.1 0 0.1 0.3 0.1 0.9 0.3 0.8-0.7 0.4-0.2 0.1-0.3 0-0.7-0.2-0.4-0.5-1.1-0.7-0.5-0.6-0.7-0.6z m18 38.9l-0.4-0.4-0.3-0.3-0.2-0.4-0.2-0.6 0-0.5 0.4-0.2 0.3 0.3 0.6 0.4 0.2 0.3 0 0.2-0.3-0.2-0.6-0.4-0.2-0.1 0 0.1 0.1 0.1 0.1 0.2 0.3 0.6 0.4 0.6 0.3 0.3 0.3 0.2 0 0.1-0.4 0-0.4-0.3z m-21.7-21.6l-0.2 0-0.6-0.1-0.2 0.1-0.2 0-0.3 0.2-0.1 0-0.3-0.2-0.1-0.3 0.1-0.3 0.3-0.3 0.3-0.2 0.4 0 0.4 0.1 0.3 0.1 0.3 0.2 0.2 0.2 0 0.2 0 0.3-0.2 0.1-0.1-0.1z m3.3-1.7l-0.1 0.4-0.2 0.5 0 1.2-0.1 0.3-0.3 0.2-0.2-0.1-0.1-0.4-0.1-0.3-1.1-0.5-0.3-0.4-0.2-0.5-0.2-0.5-0.1-0.4 0.2-0.5 0.5-0.2 1.2 0 0.3 0 0.3 0.1 0.3 0.1 0.2 0.2 0 0.3 0 0.5z m2.9-2.3l-0.2-0.4-0.6-0.5-0.2-0.4 0.1-0.5 0.4-0.2 0.5 0.1 0.4 0.3 0.3 0.3 0.3 0.4 0.2 0.4 0.1 0.4 0 0.2 0 0.4-0.1 0.2-0.2-0.1-1-0.6z m-10.7-0.1l-0.3 0-0.3-0.2-0.3-0.2-0.2-0.1-0.2-0.3-0.1-0.2 0-0.2 0.2-0.3 0.1-0.1 0.3-0.2 0.2-0.1 0.2 0 0.2 0.1 0.4 0.3 0.2 0 1.7 0.1 0.3 0.2 0.5 0.7 0.4 0.1 0.2 0 0.4 0.2 0.4 0.1 0.2 0.1 0 0.2 0 0.2-0.4 0.4-0.8-0.1-1.6-0.7-1.7 0z m9.8-6.4l-0.3-0.2-0.5-0.5-0.3-0.2 0.2 0 0.4-0.1 0.1-0.1 0.1 0 0.4 0.2 0.4 0.2 0.4 0.3 0.3 0.3 0.2 0.3-0.1 0.2-0.3 0-0.4-0.1-0.6-0.3z m-0.6-5.1l0 0.5-0.2 0.5-0.7 0.8-0.8 0.1-0.9-0.7-0.5-0.9 0.3-0.9 0.7-0.6 0.3-0.2 0.2 0.2 0.5 0.5 0.9 0.5 0.2 0.2z m4.8 32.4l-1 0.5-0.3 0.6-1.1-0.2-0.9 0.2-0.4 0.6-0.3 0.6-0.8-0.2-0.9-1-0.3-0.6-0.3-0.8-0.3-0.4-0.7-0.8-0.8-0.1-0.6-0.3-0.4 0.7-0.6-0.4-0.7-0.3-0.3 0.6-0.4-0.2-0.5-1-0.6-0.2-0.4 1.1-0.8 0.3-0.4 0.3-0.8 0-0.9-0.2-0.4-0.4 0.4-0.5 0-0.7-0.7 0.6-1.2 0.6-0.8-0.2-0.6-0.3-0.4 0.5-0.3 0.9-0.2 0.9-1.2-0.3-0.4-0.9-1.1-0.2-1.3 0.3-1.6 1.5-0.7 0.5-0.9-0.3-0.6-0.6-0.6-0.6-1.1-0.2-0.6 0.2-0.1 1 0 0.6 0.3 0.6 0 0.6-0.5 0.8-1.8 0.4-1-0.4-0.9 0.4 0.3 1.2 1.2 0.6 0.3 1.1-0.9 0-1.1 0-0.3 0.6-0.4 0.9-0.3 0.8-0.2 0.3 0 0.4-0.1 0.5-0.2 0.7-0.1 0.6-0.2 0.9 0 0.3-0.1 0.3-0.3 0.6-0.2 0.2 0 0.4 0 0.6 0 0.2-0.4 0.3-0.8 0-0.3 0.1-0.1 0.3 0 0.3-0.3 0.9 0 0.8-0.6 0.3 0 0.3-0.5 0-0.3 0.3-0.8 0.4-0.6 0.5-0.3 0-0.3 0.1-0.1 0.5-0.5 0.1-0.3 0.5-0.3 0.8 0 0.3-0.3 0.1 0 0.2-0.1 0.4-0.8 0.6 0 0.6-0.3 0.5-0.6 0-0.4-0.9-0.6-0.2-0.5 0-0.1 0-0.9 0.6-0.9 0-0.5 0.2-0.9 0-0.7 0.1-0.5 0.6 0 0.5-0.1 0.6-0.2 0.3-0.7 0.4-0.3 0-0.5-0.3-0.3 0-0.5-0.3 0-0.1-0.7-0.2-0.3-0.1-0.3 0-0.2-0.2-0.6-0.1-0.7 0-0.5 0-0.7 0.1-0.2-0.7 0-0.8-0.4-0.6-0.3-0.6-0.2-0.4-0.9-0.2-0.1-0.3-0.3-0.6-1.1-0.3-0.3 0-0.9 0.1-0.4 0-0.6 0.2-0.3 0.5-0.2 0.4-0.1 0.2-0.2 0-0.3 0.6-0.6 0-0.3-0.2-0.1-0.6-0.5 0-0.3-0.6-1.5-0.3-1.5-0.3 0-0.2 0-0.4 0-0.1 0.1 0.1 0.4 0.1 0.5-0.1 0.3-0.3 0.1-0.3 0-0.5-0.1-0.4 0-0.5 0.2-0.3 0.7-0.6 0.3-0.3 0.5-0.8 0.4-1.1 0.2-1.4 0-0.6 0-0.2-0.1-0.2 0-0.1 0-0.2 0.1-0.2 0.2-0.2 0.2-0.1 0.2-0.1 1.1-0.1 1.1-0.5 0.2-0.2 0.1-0.4-0.1-0.4 0-0.3 0.1-0.4 0.1-0.4 0.1-0.2 0-0.3-0.1-0.3-0.2-0.1-0.4 0-0.3 0.2-0.3-0.1-0.2-0.4 0-0.2 0-0.6 0-0.2-0.2-0.3-0.1-0.2 0-0.4 0.2-1.1 0.3-0.7 0.6-0.4 1.5-0.2 0.5-0.2 0.2-0.2-0.1-0.3 0-0.4 0.1-0.4 0.3-0.2 0.7 0.1 0.4-0.3 0.8-0.7 0.4-0.1 0.3-0.2 0.7-0.9 0.5-0.2 0.9-0.1 0.4-0.2 0.2-0.3 0-0.4-0.2-0.5-0.3-0.4-0.3-0.3-0.2-0.2-0.3-0.1-0.2-0.1-0.3 0-0.2 0.1-0.4 0.2-0.2 0-0.3-0.3 0-0.4 0.2-0.4 0.1-0.4-0.1-0.2-0.2-0.4 0-0.2 0.1-0.3 0.2 0 0.2-0.1 0.2-0.1 0.2-0.5-0.1-0.4-0.5-0.7-0.1-0.2 0-0.1 0.2-0.1 0.3-0.2 0.1-0.3 0.1-0.2 0-0.2 0.1-0.2 0.3-0.4 0.3-0.3 1.1-0.8 0.3-0.3 0.3-0.7 0.3-0.5 0.3 0.1 0.5 0.8 0.6 0.2 0.6-0.1 1.3-0.5 0.8-0.1 0.3-0.2 0.2-0.3 0.1-0.9 0.1-0.3 0.7-1-0.1-0.1-0.3-0.1-0.3-0.4 0-0.3 0.7-3 0.4-0.9 0.4-0.5 0.2 0.1 0.2 0.1 0.1 0 0.2-0.1 0.2-0.2-0.1-0.2-0.1-0.4-0.3-0.6-0.1-0.2 0-0.2 0-0.4 0-0.2-0.5-1.2-0.1-0.5 0-0.8 0.1-0.8 0.8-2.3 0-0.6-0.3-0.3-0.4-0.2-0.3-0.3 0-0.5 0.2-0.1 0.7-0.4 0.1-0.2 0.4-0.8 0.3-0.9 0.2-1.7 0.1-0.4 0.2-0.4 0.1-0.2 0.4-0.1 0.2-0.1 0.1-0.2 0.9-0.8 0.1 0.1 0.1 0.1 0.2 0.1 0.3 0 0.1-0.2 0.1-0.3 0.7-0.6 0.1-0.6 0-0.7 0.2-0.6 0.3-0.3 0.2 0 0.2 0.2 0.1 0.3 0.1 0.3 0.4 0.1 0.9 0 0.4 0.2 0.3 0.1 0.1 0.2 0.1 0.3 0.1 0.3 0.2 0.3 0.3 0.1 0.3-0.2 0.9-0.9 0.4-0.2 0.2-0.2 0.2-0.2 0.1-0.5 0.2 0.1 0.2 0.1 0.5 0 0.9 0.2 0.3 0.1 0.5-0.2 0.6-0.3 0.5-0.1 0.5 0.6 0.1 0 0.2-0.1 0.1 0.1 0.1 0.1 0.1 0.2 0.5 0.9 0.2 0.1 0.2 0 0.2 0 0.5-0.5 0.2 0 0.2 0.1 0.4-0.1 0.1-0.2 0-0.1-0.1-0.2 0-0.2 0.1-0.3 0.4-0.4 0.2-0.2 0.2 0 0.8 1.3 0.3 0 0.5-0.3 0.5 0.2 0.4 0 0.4-0.1 0.6-0.5 0.4 0 0.7 0.5 0.8 0.2 1.5-0.3 0.8 0 1.1 0.3 3.7-0.1 0.2-0.1 0.3-0.3 0.2 0 0.3 0 0.2 0.2 0.1 0.2 0.1 0.2 0.8 0.5 1.6 0.8 1.1 1.2 0.5 0.3 0.5 0.1 0.7 0.1 0.3 0 0.5 0 0.4 0.1 0.1 0.2-0.2 0.1-0.5 0.5-0.2 0.1-0.2 0-2.7-0.9 0 0.1 0.1 0.2 0 0.1 0.2 0.1 0.2 0.1 0.1 0.1 0.1 0.2-0.1 0.1-0.1 0.2-0.1 0.2 0.3 0.1 0.4 0 0.4 0.1 0.3 0.2 0.2 0.2-0.1 0.3 0 0.2 0.2 0.1 0.2-0.1 0.2-0.1 0.2-0.1 0.2 0.1 1.9 1.8 0.2 0.2 0.7 0.1 0.3 0.2 0.3 0.2-0.1 0.2-0.3 0.3-0.4 0-0.5-0.1-0.7-0.5-0.4-0.1-0.9-0.1 0 0.1 0.5 0.1 0.6 0.2 0.5 0.4 0.3 0.4 0.3 0.1 0.3-0.1 0.3-0.1 0.3 0 0.2 0 0.5 0.4 0.2 0.2 1 1 0.1 0.3 0 0.1-0.1 0.1-0.3 0.1-1.2-0.2 0.3 0.3 0.3 0.3 0.9 0.2 0.8 0.2 0.2 0.2 0 0.3-0.2 0.2-0.6 0.3-0.2 0.2-0.3 0.5-0.3 0.1-1.9 0.2-0.4-0.1-0.9-0.3-0.3-0.1-0.5-0.2-0.2-0.4-0.2-0.5-0.3-0.5-0.1-0.2 0-0.5-0.1-0.1-0.2-0.1-0.4-0.2 0.2 0.4 0.1 0.1 0.1 1.1 0.2 0.3 0.3 0.4 0.2 0.5 0 0.5-0.3 0.3-0.3 0-0.9-0.4-0.4-0.1-2.5 0-1.6-0.3-2.6 0.1-0.7 0.2-0.5 0.8 0.5-0.3 0.6-0.2 0.6 0 1.1 0 0.6 0 0.3 0.3-0.2 0.5-0.1 0.5 0.2 0.5 0.3 0.5 0.3 0.2 0.2 0.1 0.8 0.2 0.2 0.2 0.2 0.1 0.3 0.5 0.3-0.2 0.6 0 0.6 0.1 0.5 0.1 0.1 0.1 0.2-0.1 0.1 0.2 0 0.6-0.1 0.2 0 0.3-0.2 0.1-0.2 0.1-0.2 0.1-0.2 0.2-0.2 0.4-0.1 0.1-0.2 0.2-0.2 0.1 0 0.2-0.1 0.8-0.1 0.2-0.3 0.3-0.2 0-0.4-0.4-0.6-0.3-0.2 0-0.1 0.1-0.1 0.1 0.1 0.2 0.1 0.2 0.2 0.2 1.4 0.8 0.3 0.1 0.4 0.1 0.8 0 0.5 0.1 0.1 0.2-0.1 0.3 0 0.3 0.5 0.6 0.8 0 0.9-0.1 0.8 0.2 0.2 0.2 0.1 0.1 0 0.1 0.2 0.2 0.1 0.2-0.1 0.2-0.2 0.2-0.2 0-0.2 0.2-0.5 0.6-0.2 0.2 0.3 0.1 0.4-0.1 0.4-0.1 0.3-0.1 0.4-0.1 0.4 0.2 0.2 0.3 0 0.2-0.4 0.1-0.7 0.3-0.4 0.1-1.3 0.2 0 0.1 0.4 0 1.5 0.3 1.9 0.1-0.2 0.3-0.5 0.2-0.4 0.1-0.3 0.2-0.8 0.5-0.1 0.2 0.2 0.3 0.8 0.2 0.8 0.1 0.8 0.2 0.6 0.5 0.2 0.4 0.1 0.3 0.1 1.3 0.1 0.4 0.2 0.4 0.2 0.2 0.8 0.7 0.3 0.4 1.9 1.7 0.2 0.2 0.1 0.3z"
                                id="IDKU" name="North Kalimantan">
                            </path>
                            <path data-tooltip-target="tooltip-IDNT"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#39B54A"
                                d="M619.4 319.4l0.6 1.1 0.5 0.5 0.7 0.1 0.2-0.1 0.4-0.6 0.3-0.2 0.3-0.2 0.3 0 0.2 0.1 0.3 0.3 0.3 0.3 0.1 0.3 0.2 0.3 0.1 0.4-0.1 0.1 0 0.4 0 0.1 0 0.3 0.1 0 0-0.1 0.3 0 0.4-0.1 0.3 0 0.3-0.2 0.1-0.3 0.1-0.2-0.1-0.3 0-0.2 0-0.1 0.2-0.3 0.1-0.1 0-0.6 0.2-0.2 0-0.1 0.1 0 0.2-0.1 0.6-0.5 0.4-0.5 0.1-0.1 0.1-0.2 0.1-0.7 0.3-1.1 0-0.4 0.3 0 1-0.1 0.9-0.1 0.8-0.3 1.3-0.9 0-0.1 0.1-0.2 0.2-0.4 0.1-0.2 1.4-0.4 0.1-0.1 0.5-0.5 0.7-0.2 0.3-0.1 0.6-0.2 0.5-0.4 0.4-0.2 0.1 0.5-0.3 0.7 0 0.3 0.1 0.3 0.2 0.3 0.2 0.1 0.3 0.1 0.4 0 0.2-0.1 0.5-0.3 1-0.4 0.2-0.3 0.1-0.1 0.1-0.4 0.1-0.1 0.2-0.1 0.1 0 0 0.2 0.2 0.1 0.3 0.2 0.4 0.3 0.3 0.3 0.2 0.4-0.1 0.4-0.3 1.3 0 0.2 0.1 0.2 0.1 0.1 0 0.1-0.1 0.2-0.1 0-0.5 0-0.2 0-0.3 0.2-0.2 0.2-0.2 0.1-0.3 0-0.1-0.1-0.2-0.3-0.2-0.1-0.1 0-0.4 0-0.7 0.1-0.3 0.4-0.1 0.6 0.2 0.7 0.1 0.3 0.1 0.3 0.5 0.4 0.4 0.2 0.1 0.2 0 0.1 0 0.3 0 0.2 0.5 0.7 0 0.3 0.3 1.2-0.7 0.4-0.5 0.6-0.3 0.8-0.2 1.5-0.1 0.2-1.9 1.3-0.6 0.5-1.7 2-0.2 0.7-0.3 0.3-1.1 0.6-0.8 0.5-0.6 0.6-1 0.6-0.3 0.4-0.4 1-0.2 0.2-0.3 0.4-0.9 0.7-0.7 0.3-0.7 0.1-2.2-0.1-1.4 0.2-0.7 0.1-0.2 0-0.4-0.1-0.2 0-0.3 0.2-0.4 0.8-0.2 0.2-0.4 0.1-0.2 0.2-0.1 0.3-0.2 0.3-0.2 0.1-1.8 0.2-2.1 1.4-0.5 0.2-0.2-0.1-0.2-0.2-0.4 0.1-0.8 0.2-0.4-0.1-0.4-0.2-0.4-0.2-0.4 0.1-0.4 0.3-0.3-0.1-0.6-0.5-0.3-0.1-0.4 0-0.4 0.1-0.3 0.3-0.2 0.2-0.2 0.1-0.2-0.1 0-0.1 0-0.3 0.3-0.4 0.1-0.4 0.1-0.4-0.1-0.8 0.2-0.3 0.3-0.3 0.6-0.5 1-0.4 0.3-0.2 0.2-0.1 0.7-0.1 0.2-0.1 1.6-0.9 0.3-0.5-0.4-0.5-0.4-0.2-0.4-0.2-0.4-0.1-0.5 0-0.4 0.1-0.6 0.5-0.4-0.1-0.2-0.3 0-0.4 0.1-1.4 0.2-0.3 0.7-0.5 0.4-0.3 0.2-0.4 0.1-0.4 0-0.5-0.1-0.2-0.2-0.4-0.1-0.2 0.1-0.2 0.1-0.1 0.1-0.1 0.1-0.1 0.1-0.4 0.1-1.8 0.1-0.4 0.2-0.4 0.5-0.4 0.7-0.3 0.1-0.2 0.6-0.8 0.2-0.2 0.1 0 0.2-0.1 0.2 0 0.1-0.1 0.2-0.3 0.1-0.1 0.1 0 0.3 0.1 0.1-0.1 0.6-0.9 0.2-0.2 0.1-0.1 0.9-0.8 0.5-0.6 0.2-0.2 0.4-0.1 0.4 0z m-17.5-18.3l0.4 0.1 0.2 0.2 0 0.4-0.3 0.2-0.8 0.3-1.7 0.1-0.6 0.3-1 1.6-0.5 0.3-0.3 0.1-0.2-0.1-0.4-0.4 0.5-1.4 1.8-1.3 0.2 0 0.1 0.1 0.3 0 0.2 0 0.7-0.3 0.2 0 0.4 0.1 0.2-0.1 0.1 0 0.4-0.2 0.1 0z m-46.6 30.7l0.4 0.5 0.4 0.6 0.2 0.7-0.3 0.8-0.2 0.3-0.6 0.4-0.9 0.9-0.3 0.6-0.3 0.2-1.2 0.3-0.2 0.2-0.2 0.1-1.3-0.2-0.3 0.1-0.9 0.5-0.2 0.2-0.1 0.3-0.1 0.4-0.2 0.1-0.4 0-0.4-0.2-0.5-0.6-0.3-0.1-3-0.4-0.2 0-0.2-0.1-1.3-0.4-0.1-0.1-0.2-0.4-0.1-0.1-0.8-0.4-0.1-0.1-0.6-0.9-0.2-0.1-0.2 0-0.1 0-0.1-0.9-0.3-0.5-0.7-1-0.2-0.2-0.2-0.2-0.2 0-0.3 0-0.2-0.1-0.2-0.2-0.1-0.2-0.2 0.1-0.1-0.1-0.1-0.2-0.1-0.1-0.4-0.2-0.2-0.1-0.8-0.1-0.3-0.1-0.7-0.5-1.2-0.6-0.2-0.3-0.1-0.5-0.2-0.3-0.8-0.2 0-0.1 0-0.3-0.1 0-0.1 0-0.1 0.1-0.1 0-0.5-0.1-0.9-0.1-0.9-0.3-0.4 0-0.3 0-0.4 0.1-0.4 0.1-0.1 0.2-0.2 0.4-0.4-0.1-0.8-0.6-0.1 0-0.2 0.1-0.2 0-0.2 0-0.5-0.4-0.5 0.1-0.8 0-0.8-0.1-0.8-0.3-0.8-0.2-0.3-0.1-0.9-0.7-0.2-0.3-0.4-0.7-0.2-0.2-0.2-0.2-0.6-0.4-0.3-0.3-0.1-0.4 0.1-0.5 0.3-0.5 0.5-0.5 0.9-0.8 0.5-0.2 0.5-0.2 0.7-0.1 0.2 0 0.6-0.4 0.3-0.1 0.8-0.1 0.6-0.1 0.1 0 0.3-0.2 0.2 0 0.7 0 1.6 0.2 0.2 0 0.2-0.2 1-0.2 0.4 0.1 0.8 0.3 0.2 0 0.4-0.3 0.5-0.1 1.1-0.3 0.4 0 0.3 0.1 0.1 0.3 0.2 0.2 2.4 0.2 0.4-0.1 2.5-1.8 0.2 0.1 0.1 0.4 0.2 0.2 0.8 0.7 1.2 1.7 0.4 0.4 0.3 0.2 0.4 0.1 0.4 0.1 0.3-0.2 0.4-0.1 0.4 0.2 0.5 0.3 0.3 0.4 0 0.8 0.1 0.5 0.1 0.8 0.1 0.3 0.2 0.2 1.2 0.6 0.3 0 0.1-0.3 0.3-0.2 0.5-0.2 0.9-0.1 0.4 0 0.4 0.2 0.3 0.3 0.1 0.6 0.2 0.2 1.4 0.8 0.6 0.7 0.7 1.6 0.5 0.7 0.5 0.4 1.4 0.7 0.5 0.4z m-21.1-26.8l0.3-0.1 0.6 0 0.4 0.1 0 0.4-0.6 0.4-0.2 0.2 0 0.3-0.3 0-0.3 0-0.2 0.1-0.1 0.3 0 0.3 0.4 0.4 0 0.4-0.1 0.2-0.3 0.4-0.1 0.2-0.2-0.1-0.2-0.1-0.2-0.2-0.1-0.2-0.2-0.1-0.2 0.1-0.2 0.1-0.2 0.1-0.2-0.1-0.1-0.2 0.1-0.6 0.1-0.1 0.3-0.1-0.1-0.2 0-0.1 0.3-0.1 0.3-0.2 0-0.2-0.3-0.2 0.1-0.4-0.4-0.8 0.1-0.4 0.4 0.3 0.1 0.1 0.1 0.2 0.1 0.4 0.1 0.2 0.4 0.2 0.3-0.2 0.2-0.3 0.1-0.4z m-3.3-2.1l0.1 0.3 0.1 0.2 0.2 0.1 0.2 0.3-0.3 0.1 0 0.2 0 0.2-0.1 0.1-0.6 0-0.2 0-0.2-0.4-0.2-0.1-0.3 0.1-0.2 0.4-0.2 0.1-0.3 0 0.1 0.2 0.2 0.2 0.1-0.1 0.1-0.2 0.2 0.2-0.2 0.5-0.2 0.2-0.1 0-0.2-0.1-0.2 0.2-0.1 0.5 0 0.3 0.1 0.3 0.2 0.4 0.3 0.3-0.5 0.1-0.9-0.4-0.4 0.3-0.1-0.2 0.1 0-0.1-0.2 0.1-0.3 0.4-0.6 0-0.2 0-0.5 0-0.2-0.2 0-0.1 0-0.1-0.1 0-0.5 0-0.6 0-0.1 0.1-0.2 0.2 0 0.3 0 0.1 0 0-0.1 0.1-0.3 0-0.2-0.1-0.7 0.2-0.1 0-0.3-0.2-0.6 0.1 0 0.7-0.3 0.1 0.3 0 0.4 0.1 0.3 0.3 0.2 0.9-0.2 0.4 0.1 0.1 0 0.2 0.1 0.1 0.2 0.1 0.2 0 0.1-0.2 0.1-0.1 0z m75-5l0 0.3-0.1 0.1-0.1 0.1-0.1 0.1-0.1 1.4-0.2 0.4-0.6 0.3-0.9 0-1.6-0.2-1.6 0.3-0.8 0.1-0.4-0.4 0-0.7 0.3-0.5 1.8-1.5 0.3-0.1 0.3-0.2 0.6-0.1 0.3-0.1 0.7 0 0.5 0.1 0.5 0.2 0.5 0.3 0.1-0.1 0.2-0.1 0.2 0.1 0.2 0.2z m-6.4 0.4l0 0.2 0 0.5-0.1 0.2-0.4 0.2-1.1 0-0.5 0.1-0.3 0.3-0.1 0.5 0.1 0.8 0 0.4-0.1 0.3-0.4 0-0.5-0.2-0.5-0.2-0.2-0.1 0-0.2-0.2 0-0.1 0.2-0.1 0.3 0.1 0.3 0 0.2 0.1 0.2 0.8 1.3 0 0.6-0.8 0.6-0.2 0-1 0.2-0.1 0-0.3 0.2-0.1 0.1-0.7-0.1-0.2 0-0.4 0.3-0.1 0.1-0.3 0-1.4 0.3-0.2 0.2-0.6 0.6-0.2 0.1-1.3 0.4-0.8 0.2-2.1-0.1-0.3 0.1-0.4 0.1-0.3 0-0.5-0.2-1.3-0.2-0.9 0.1-0.8 0.4-0.6 0.6-0.8 0.4-2.5 0.7-0.9 0.4-0.8 0.5-0.2 0.1-0.2 0-0.2 0-0.3-0.1-0.3 0-0.3-0.2-0.3-0.3-0.2-0.1-0.3 0.2-0.3 0.7-0.3 0.2-0.1-0.2-0.2-0.9-0.2-0.3-0.8-0.4-0.8 0-0.8 0-0.8-0.1-0.8-0.3-0.4-0.1-0.4 0.1-0.2 0.5 0 0.4 0.2 0.4-0.1 0.4-0.6 0.7-0.9 0-1.7-0.5-0.9 0.1-0.7 0.2-1.2 0.7-0.4 0-1.1 0-0.6-0.3-0.1 0-0.5 0-0.2 0-0.3-0.3-0.9-0.9-0.1-0.3-0.2-0.5-0.3-0.2-0.4 0-0.4 0.1-0.2 0.3-0.2 0.3-0.1 0.3-0.4 0.1-0.4-0.1-0.3-0.2-0.2-0.1-0.3-0.2-0.2 0-0.5 0.1-0.2-0.1-0.3-0.3-0.1-0.1-0.4-0.4-0.1-0.1-0.2-0.1-0.1 0-0.4-0.1-0.5 0.1-0.8 0.2-0.4 0-0.7-0.1-0.2 0-0.3 0-0.2 0.1-0.2 0-0.2-0.1-1.2 0.7-0.8-0.1-0.7-0.1-0.4-0.2-0.8-0.7-0.4-0.2-0.4 0-0.3 0.1-0.7 0.3-0.7 0.3-1.6 0.2-0.6 0.4-0.1 0-0.1 0.1 0 0.1 0.1 0.2 0 0.1-0.2 0.1-0.2 0.2-0.3 0-0.1-0.2-0.2-1.1-0.1-0.1-0.3 0-0.2 0-0.4-0.2-0.3-0.2-0.3-0.4-0.1-0.4 0-2.9 0-0.5 0.3-0.5 1-1.1 0.1-0.4-0.2-0.5 0-0.7 0.6 0.6 0.5 0.4 0.2-0.1 0.1 0 0.5-0.4 0.2 0 0.1 0 0.1 0 0.2 0.2 0.2-0.2 0.1-0.3 0.2-0.3 0-0.1 0.1-0.3 0.2-0.1 0.2 0.1 0.1 0 0.2 0.1 0.1-0.1 0.1 0 0.2 0 0.1 0 0.1 0.2 0.1 0 0.3-0.1 0.1-0.2 0-0.3 0.1-0.3 0.1 0 0.3 0.2 0.1 0.2 0.1 0 0.2-0.4 0.7-0.7 0.2-0.4 0.2-0.1 1.2-0.5 2 0.2 0.3-0.2 0.4-0.6 0.2-0.2 0.3 0.1 0.1 0.3 0.1 0.3 0.2 0.3 0.5 0 0.8-0.4 0.4 0.2 0.2 0.1 0.3 0.2 0.3 0 0.2 0 0.1-0.3 0-0.2-0.1-0.5 0.8 0.3 0.4 0.3 0.2 0.3 0.2 0.3 1 0.6 0.4 0.1 1.3-0.1 0.4 0.1 0.3 0.1 0.5 0.1 0.7 0.1 0.9-0.1 0.5 0 0.3 0.2 0.5 0.6 0.2 0.3 0.5 0.3 1 0.3 0.4 0.1 0.4 0 0.2 0 0.2 0.2 0.2 0.1 0.5-0.1 0.2 0 0.1 0.1 0.1 0.2 0.2 0.1 0.2 0.1 0.2 0 0.4 0 0.2 0.1 0.2 0.2 0.5 0.7 0.4 0.3 0.9 0.9 0.5 0.2 0.3-0.1 0.3-0.1 0.2-0.1 0.4 0 0.4 0.2 0.1 0.1 0.1 0.2 0.1 0.2 0.1 0 0.3-0.1 0.1-0.1 0.7-0.5 0.2 0 0-0.4 0-0.2 0.2 0 0.5 0.1-0.2-0.4 0-0.5 0.2-0.4 0.3-0.2 0.3 0.1 0.8 0.8 0.3 0 1.1-0.4 0.4-0.1 0.2 0 0.2 0.1 0.1 0 0.2 0 0.1 0 0.4-0.4 0.4 0.2 0.4 0.2 0.4 0 0.8-0.4 0.1-0.1 0.1-0.2 0.1-0.1 0.7-0.1 0.2-0.1 0.1-0.2 0.2-0.1 0.2 0 0.2 0.1 0.1 0.2 0.1 0.1-0.3 0.3-0.1 0.3 0.1 0.4 0.3 0.3 0.2 0.1 0.4-0.1 0.2 0 0.2 0.1 0.4 0.3 0.3 0.1 0.3 0.1 1.8 1.5 0.5 0.3 0.6 0 3.2-0.6 0.5-0.1 0.5-0.4 0.3-0.5-0.1-0.5-0.1-0.1-0.3-0.1-0.1-0.1-0.1-0.1 0-0.1 0.1-0.2 0-0.2 0.2-0.1 1-0.5 0.3-0.2 0.7-0.9 0.4-0.2 0.7-0.1 0.4-0.1 0.3 0.1 0.3-0.1 0.3-0.2 0.4-0.1 0.4 0 0.3-0.2 0.4-0.6 0.5-0.3 1.2-0.4 1.3-1.4 0.1-0.3-0.2-0.2-0.5-0.1-0.8 0-0.4 0.1-0.5 0.2-0.4 0.3-0.4 0.3-0.1-0.1-0.7 0.1-0.1 0 0-0.2 0-0.3 0.6-0.9 0.1-0.3 0.1-0.5 0.2-0.2 0.8-0.5 0.4-0.3 0.2 0 0.2-0.1 0.2 0.2 0.2 0.3 0.1 0.1 0.4 0.1 0.3 0.2 0.6 0.4 0.3 0.3 0 0.3-0.1 0.7 0.6 1.3 0.3 0.3 0.1 0.2z m7.2 46.2l0.5 0.3 0.1 0.3-0.1 0.8-0.1 0.4-0.4 0-0.5-0.1-0.3 0-0.4 0.1-1 0.9-0.2 0.1-0.3 0.1-0.2 0-0.1 0.2 0 0.5-0.1 0.2 0 0.2-0.5 0.5-0.6 0.1-0.7 0.1-3.1 0.8-0.4 0.2-0.2 0.3 0.3 0.2 0 0.1-1.8 0.4-0.7-0.1-0.5-0.5-0.1-1.8-0.1-0.4 0.1-0.1 0.4-0.1 0.4-0.4 1.3-0.4 0.4 0 0.4 0 0.3 0 0.1-0.1 0.3-0.1 0.2-0.1 0.2 0 0.2 0 0.5-0.2 0.9-1 0.4-0.2 0.9-0.4 0.3-0.2 0.1-0.2 0-0.5 0.2-0.2 0.1-0.1 0.2 0.1 0.1 0 0.1-0.3 0.1-0.4 0.4-0.3 0.7-0.4 1.1-0.3 0.4-0.3 0.4-0.7 0.2-0.2 0.2 0.3 0 0.3-0.1 0.3-0.3 0.4 0.4 0.2-0.1 0.5-0.3 0.3 0 0.2 0.1 0.1-0.2 0.2-0.2 0.2-0.1 0 0.1 0.2 0.2 0 0.2 0 0.2 0z m-28.7-3.2l0.4 0.2 0.4-0.1 0.3 0.1 0.2 0.5-0.1 0.8-0.2 0.3-0.7 0.6-0.5 0.3-0.2 0.2-0.1 0-0.1 0-0.2 0-0.1 0.1-0.1 0.1-0.1 0.2-0.5 0.2-1.2-0.2-0.9 0.1-0.4-0.1-0.4-0.2-0.2-0.2-0.1-0.1-0.1-0.1 0.3-0.3 2.4-1.2 0.7-1 0.3-0.3 0.5-0.1 0.4 0 0.3 0.2z m30.2-5.7l0.2 0.3 0.6 0.2 0 0.3-0.2 0.2-0.7 0.3-0.2 0.2-0.1 0.3-0.2 0.1-0.3-0.1-0.2-0.4-0.3 0.2 0.5 0.9 0.1 0.5-0.3 0.2 0.1 0.3 0 0.2-0.2 0-0.3 0-0.1-0.2-0.1-0.2-0.3-0.2-0.1 0.1-0.1 0.3-0.3 0.3-0.4 0-0.1-0.5 0-0.6 0.1-0.3 0.3-0.3 0.4-0.4 0.3-0.3 0.4-0.9 0.3-0.3 0.2-0.2 0.5-0.2 0.3 0 0.2 0.2z m9.1-38.5l0.3 0.1 0 0.2-0.1 0.5-0.1 0.1-0.2 0.1-0.9 0.2-1.3 0-0.4 0.1-0.3 0.3-0.2 0.3-0.3 0.7-0.4 0.7-0.8 0.9-0.2 0-0.2-0.2-0.1-0.3-0.1-0.1-0.3 0.1-0.4 0.3-0.3 0.4-0.1 0.2-0.1 0.1-0.3 0.1-0.2 0.1-0.1 0.2 0.1 0.2 0.7 0.9-0.2 0.4-0.3 0.2-0.3 0-0.5 0-0.2-0.1-0.4-0.6-0.2-0.2-0.9 0.9-0.2 0.1-0.3 0.3-0.2 0.1-0.3-0.1-0.1 0-0.3-0.4-0.8-0.5-0.4-0.2-0.3 0.3-0.1 0.1-0.2 0.1-0.2 0-0.1 0-0.2-0.2-0.1 0-0.1-0.1-0.2 0-0.1 0.1-0.1 0-0.2-0.4 0.5-0.6 1.2-0.9 0.9-0.8 0.3-0.1 0.2-0.1 1.6-0.7 0.3-0.2 0.1-0.1 0-0.4-0.3-0.2-0.7-0.1-1.3 0-0.1-0.3 0.3-0.3 0.4-0.3 0.3-0.1 0.2 0.1 0.3 0.1 0.3 0 0.2-0.2 0.3 0 0.4-0.4 0.3-0.1 0.5 0 0.5 0.1-0.1 0.2 0 0.3 0 0.2-0.2 0.2-0.5 0.5-0.2 0.4 0 0.3 0.2 0.2 0.4 0.2 0.4 0.1 0.4-0.1 0.3-0.2 0.1-0.4-0.1-0.3-0.3-0.2-0.1-0.2 0.4-0.2 0.2 0.2 0.3 0 0.2-0.3 0.1-0.3-0.1-0.3-0.1-0.2-0.1-0.1 0-0.3 0.1-0.1 0.2-0.1 0.1 0 0.2 0 0.2 0.1 0 0.1 0 0.2 0 0.1 0.3 0.1 0.4 0 0.2-0.1-0.2-0.3 0-0.1 0.5-0.1 0.4-0.3 0.4-0.3 0.3-0.1 0.1-0.1 0.2 0 0.1-0.1 0.1 0.1 0.1 0.1 0 0.1 0.1 0 0.1 0.1 0.3 0.2 0.2 0.1 0.3 0.1 0.4 0.1 0.8 0.1z m7.6-0.1l-0.3 0.7-0.1 0.5 0.1 0.3 0.1 0.4-0.3 0.4-0.8 0.5-0.2 0.4-0.3 0.4-0.2 0.4-0.2 0.9-0.1 0.4-0.3 0.5-0.3 0.3-0.3 0.2-0.4 0.2-0.4 0.1-0.5 0.1-0.5-0.1-0.1-0.3 0-0.7 0-0.4-0.4-0.5-0.1-0.3-0.2-0.2-0.3 0-0.5 0.1-0.7 0.4-0.2 0.1-0.2 0-0.3-0.2 0.1-0.2 0.3-0.2 0.1-0.1 0.7-1.3 0.4-0.5 0.7-0.5 0.4-0.1 0.3 0 0.2 0.2 0.1 0.1 0.2 0.6 0 0.1 0.3 0.4 0.1 0.1 0.1 0.1 0-0.5 0.3-0.3 0.5-0.4 0.7-1.1 0.4-0.4 0.5-0.9 0.3-0.2 0.1-0.2 0.2-0.1 0.2-0.1 0.3 0.1 0.2 0.2 0.3 0.6z m16.3-0.1l0.1 0.3 0 1.8-0.1 0.3-0.2 0.3-0.5 0.1-0.4 0-1.1 0.3-1.8 0.1-3.3 0.6-0.8 0-1.1-0.1-0.2 0-0.2 0.1-0.2 0.1-0.4 0.2-0.4 0.1-0.4 0.2-0.4 0.1-0.2 0.1-0.1 0-0.1 0-0.2-0.2-0.1-0.1-0.4-0.1-0.1 0.1-0.2 0-0.5 0.3-0.1 0-0.1 0.1-0.2 0.1-0.1 0.1-0.2 0.1-0.2-0.1-0.2-0.2-0.2-0.1-0.1 0-0.4 0.2 0 0.1-0.3-0.1-0.1-0.2-0.1-0.2-0.1-0.2-0.1-0.3 0.2-0.3 0.6-0.5 0.2-0.3 0.4-0.7 0.1-0.3 1.2-0.8 0.6-0.1 0.2 0 0.1-0.1 0.3-0.3 0.2-0.1 0.1-0.1 0-0.2-0.2 0-0.4 0.1-0.5 0.1-1.4 0.7-0.6 0 0.1-0.9 0.2-0.2 0.3-0.2 0.2-0.2 0.1-0.3 0.1-0.3 0.2-0.3 0.2-0.2 0.3-0.1 0.4 0.1 1-0.1 0.4 0 0.3 0.3 0.1 0.9 0.3 0.3 0.8-0.5 0.4-0.3 0.5 0 1.7-0.2 2.4 0.2 0.8-0.2 0.2-0.1 0.1 0 0.3 0 0.1 0 0.1 0.1 0.1 0.1 0.3 0.1 1-0.2 0.6 0 0.2 0 0.1 0.1 0.2 0.2 0.4 0.7 0.2 0.2z m-54.9 4.3l0.6 0.1 0.4 0.1 0.2 0.4-0.2 0.5-0.6 0.3-0.5-0.4-0.2-0.7 0.3-0.3z m-12.8-2.9l0.4 0.1 0.3 0.4 0 0.4-0.3 0.4-0.4 0-0.3-0.2-0.4-0.7 0.2-0.1 0.1-0.1 0.1-0.1 0.3-0.1z m-1.9 46.4l0.1 0 0.3 0.1-0.1 0.2-0.3 0.2-0.4 0.2-0.4 0.1-0.4 0-0.5-0.1 0-0.1 0.2-0.3 0.5-0.3 0.6 0 0.4 0z"
                                id="IDNT" name="Nusa Tenggara Timur">
                            </path>
                            <path data-tooltip-target="tooltip-IDKB"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#39B54A"
                                d="M425.1 105.3l0 0.3-0.3 1.6 0 0.3 0 0.3 0.2 0.4 0.1 0.3 0 0.4 0 0.4-0.1 0.3-0.2 0.2-0.2 0.1-0.2 0.1-0.5 0.5-0.5 0.2-0.2 0.2-1.9 1.6-0.2 0.1-0.3 0.2-0.2 0.1-0.6 0.5-1 0.4-0.3 0.2-0.3 0.3-0.1 0.2 0 0.2 0 0.3 0 0.2-0.1 0.4 0 0.2 0.1 0.2 0.1 0.1 0.1 0 0.2 0 0.4-0.2 0.2 0 0.2 0 0.2 0.1 0.1 0.2 0.1 0.2 0.1 0.4-0.1 0.4-0.2 0.4-0.2 0.4 0 0.3 0 0.5-0.1 0.5-0.2 0.3-0.7 0.8-0.5 0.7-0.2 0.1-0.4 0.2-0.2 0.2-0.3 0.3-0.1 0.2-0.2 0.7-0.5 0.3-0.4 0.4-0.1 0.2-0.3 0.1-0.2 0.2-0.3 0.7-0.2 0.4-0.3 0.3-0.3 0.3-0.2 0.3 0 0.3 0 0.7-0.1 0.5-0.2 0.2-0.2 0.1-0.2 0-0.2 0.1-0.7 0.5-0.2 0.2-0.3 0-0.4 0-0.4 0-0.2 0-0.7-0.2-0.2-0.1-0.2 0-0.2 0.1-0.3 0.1-0.8 0.2-0.7 0.3 0.6 0.8 0.3 0.6 0.2 0.3 0.8 0.5 0.2 0.4 0.5 0.9 0.1 0.3 0 0.2 0 0.2 0 0.2 0.4 1.4 0 0.3 0 0.1-0.1 0.2-0.5 1-0.3 0.7-0.1 0.5-0.1 0.1-0.1 0.1-0.2 0-0.1 0.1-0.2 0.1-0.2 0.3-0.1 0.1-0.1 0.1-0.2 0-0.1 0-0.3 0.1-0.1 0.1-0.1 0-0.1 0.1-1.1 1.2-0.4 0.5 0 0.2-0.1 0.3 0.1 0.1 0.1 0.1 0.1 0.1 0.3 0.1 0.1 0.2 0.2 0.2 0.2 0.4 0 0.2 0 0.3-0.4 0.8-0.4 1-0.1 0.2-0.4 0-0.2-0.1-0.2-0.1-0.2-0.2-0.2-0.2-0.4-0.7-0.2-0.2-0.1-0.1-0.2 0-0.1 0.1-0.3 0.1-0.2 0.1-0.2 0-0.1 0.1-0.1 0-0.1 0.3-0.1 0.2-0.1 0.1-0.5 0.1-0.3-0.1-0.4-0.1-0.2 0.1-0.2 0-1.1 0.4-0.5 0.4-0.6 0.3-2 0.7-0.4 0.2-0.1 0.1-0.2 0.2-3.5 1.4-0.3 0-0.3 0-0.6-0.1-0.2-0.1-0.2 0.1-0.5 0.3-1.9 0.7-0.2 0.1-0.3 0-0.4-0.2-0.4 0-0.4 0-1-0.2-2.4 0-0.3 0-0.2 0.1-0.1 0.2-0.1 0.4-0.5 0.5-1.8 0.5-2.1 1.4-0.8 0.5-0.3 0-1.1 0.6-2 1.3-0.4 0.4-0.6 0.8-0.2 0.2 0 0.3 0 0.3 0.2 0.5 0 0.3-0.2 0.4-0.2 0.2-0.7 0.4-1.1 0.3-0.3 0.4-1.1 0.5-0.5 0.4-0.4 0.4-0.2 0.1-0.3 0.4-0.4 0.8-0.6 0.4-0.5 0.2-0.6 0.3-0.4 0.4-0.6 0.8-0.4 0.3-0.7 0.7-0.3 0.1-0.2 0-0.3-0.2-0.1 0-0.3 0-0.2-0.1-0.2 0-0.3 0-0.5 0.1-0.7 0.5-0.4 0.3-0.4 0.6-0.2 0.1-0.1 0.2-0.1 0.2 0.1 0.2 0.1 0.2 0.2 0.3 0.3 0.1 0.2 0.1 0.3-0.1 0.3-0.2 0.1 0 0.1 0 0.2 0 0.1 0.2 0.1 0.2 0 0.3-0.2 0.5 0 0.1 0.1 0.2 0.2 0.1 0.1 0.2 0.1 0.3-0.2 0.8 0 0.3 0 0.3-0.1 0.8-0.6 2.3 0 0.4 0.1 1.3 0.1 0.5 0.2 0.6 2.5 5.5 0 0.4-0.2 0.8 0 0.4 0 1.8 0.1 0.6 0.1 0.3 0.1 0.2 0.1 0.3 0.2 0.4 0.1 0.3-0.1 0.3-0.1 0.3-0.1 0.2-0.2 0.2-0.3 0.2-1.1 0.4-0.3 0.2-0.2 0.4-0.3 0.8-0.3 0.4-0.1 0.2-0.2 0.1-0.2 0.1-0.6 0.2 0-0.1-0.5 0.1-0.7 0.5-0.3 0.2-1 0.3-0.4 0-0.3 0.2-0.4 0.3-1.5 2-0.7 0.4-0.7-0.6 0-0.2 0.1 0 0.1-0.1 0.1-0.1 0-0.2-0.1-0.5-0.1-0.4-0.1-0.5-0.2-0.8-0.6-0.7-0.8-0.1-0.8 0.1-2 0.9-2.1 1.5-0.7 0.1-0.5-0.6-0.3-0.8-0.4-0.7 0.4-0.4 0.3-0.6 0.2-0.6-0.1-0.6-0.3-0.8-0.1-0.8-0.2-0.7 0-0.3-0.2-0.2-0.7-0.2-0.2-0.2 0-0.2 0.4-0.4 0.1-0.3 0.3-0.5 0.7 0.1 0.6 0 0.3-0.8-0.6 0.5-0.6-0.2-0.3-0.5-0.9-1.4 0-0.3-0.1-0.9-0.2-1.7-0.2-0.4-0.3-0.2-0.3-0.1-0.1-0.4 0-0.4 0-0.3 0.2-0.9 0.2-0.8 0.2-0.8-0.1-0.9-0.5-1.3-0.1-0.2-0.3-0.6-0.2 0-0.7-0.2-0.9-0.5-0.3-0.1-0.3-0.1-1-1 0.1 0 0.2-0.2 0.1 0-0.2-0.1-0.1-0.2 0-0.2 0-0.2 0.2-0.2 0.9-0.5 0.3-0.1 0.3-0.2 0.2-0.3 0.5-1.3 0.1-0.4 0.1-1.3 0.5-2.5 0.1-0.9-0.2-0.8-0.4-0.9-0.2-0.3-0.4-0.2-0.5-0.1-0.4-0.1-0.3-0.3 0-0.4-0.4-0.2-0.2-0.4 0.1-0.6 0.2-0.9 0-0.3-0.3-0.2-0.4 0-0.1-0.1-0.5-0.2-0.2 0-0.5 0-0.2-0.2-0.3-0.6-0.5-0.2-0.2-0.3-0.3-0.6-0.4-0.4-0.1-0.3 0-0.4 0-0.3 0.2-0.2 0.2-0.2 0.1-0.2 0.1-0.3 0-0.1-0.6 0.2-0.2 0.2-0.1 0.3 0 0.4-0.1 0.5-0.2 0.2-0.5 0.5-0.6-0.3-0.3-0.4-0.2 0-0.1 0.1-0.2 0-0.2-0.1-0.3-1.1-0.4-0.3-0.7-0.3-0.7-0.2-1-0.2-0.2 0.1-0.2 0-0.1 0.2 0 0.2 0.1 0.1 0.1 0.2-0.1 0.4-0.3 0.1-0.3 0.1-0.3-0.1-0.8-0.4-0.1-0.1-0.2 0-0.7-0.4-0.2-0.2-0.6-3.1 0.2-0.4 0.2-0.2 0.3 0.1 0.4 0.3 0.3 0.2 1.4 0 0.3 0.1 0.6 0.5 0.5 0.1 0.1 0.1 0.2 0 0.2 0 0.4-0.1 0.2-0.1-0.1-0.2-0.2-0.1-0.5 0.1-0.2-0.1-0.3-0.5-0.2-0.2-0.4-0.2-0.5-0.2-0.2-0.1-0.3 0-0.2-0.1 0-0.1 0.1 0 0.2-0.1-0.1-0.1-0.1-0.1-0.1-0.1 0-0.1 0.4 0 0.6 0.1 0.4 0 0-0.1-0.5-0.4-0.5-0.2-0.6 0-1.3 0-0.3 0.1-0.1 0-0.2-0.2-0.3-0.1 0-0.1-0.1-0.1-0.1-0.1-0.2-0.1 0-0.1-0.1 0-0.2 0-0.2 0.1-0.2 0-0.1 0-0.2-0.1-0.4-0.4-0.2-0.3-0.2-0.3-0.4-1.8 0-0.8 0-0.1 0.2-0.1 0.5 0-0.7-0.9-0.2-0.5 0.2-0.5 0-0.1-0.2-0.1-0.3 0-0.2 0.1 0 0.3-0.3-0.2-0.1-0.3 0.1-0.3 0.2-0.3 0.2-0.1 0.3-0.1 0.6-0.1 0.6 0.1 0.6 0.1 0.5 0.2 0.3 0.3 0.1 0-0.1-0.3-0.4-0.4-0.1-0.2-0.1-0.3 0.1-0.8-0.1-1.1-0.2-0.5-0.3-0.6-0.1-0.3 0-0.6 0.1-0.3 0.2 0 0.5 0.3 2 0.2-0.4-0.3-0.8-0.6-1.2-1-0.2-0.1-1.3-2.6-1.1-0.9-0.2-0.1-0.4-0.1-1.2 0-0.5-0.3-0.2-0.5 0.2-0.8 0.3-0.6 0-0.2 0-0.5-0.1-0.4-0.5-0.8-0.1-0.5 0.1-0.2 0.3-0.4 0-0.3 0-0.8 0-0.5-0.2-0.4-0.9-1 0.1-0.2 0.1-0.2 0.1-0.4-0.1-0.5-0.6-0.6 0-0.4 0.2-0.2 0.3-0.3 0.3-0.2 0.2-0.2 0.4 0 0.3-0.2 0.3-0.2 0.2-0.4 0.3-0.8 0-0.8-1-2.8-0.1-0.5 0.2-0.3 0.4-0.1 0.7-0.1 0.8-0.2 1.5-0.6 0.7-0.4 0.3-0.3 1.2-1.4 0.2-0.5 0.3-0.4 0.5-0.3 0-0.1-0.5-0.1-0.3 0.3-0.2 0.4-0.3 0.2-0.3 0.2-0.4 1-0.3 0.2-0.1 0.1 0 0.2-0.2 0.3-0.2 0.1-0.3 0-0.1 0.1-0.4 0.3-0.4 0.1-1.1 0.1-0.5 0.2 0.1-0.7 0.3-0.5 0.7-0.9 0.3-0.6 0.1-0.7 0-2.2 0.2-0.7 0.5-0.5 3.1-2.2 0.4-0.5 0.6-1.1 0.3-0.6 0.4-0.3 0.1-0.1 0-0.1 0.1-0.1 0-0.1 0-0.1-0.1 0-0.1 0-0.1 0.1-0.9 0.7 0-0.3 0.2-0.2 0.3-0.2 0.3-0.3 0.1-0.4 0-0.3 0-0.7 0.1-0.7 0.4-0.2 1.3-0.2 2.7-0.7 0.3-0.1 0.3-0.2 0.3-0.3 0.6-1 0.2-0.2-0.4 1.1-0.5 0.9-0.3 0.4-0.2 0.3-0.8 0.6-0.1 0.2-0.1 0.3 0.2 0.7 0 0.2 0 0.1 0.1 0.3 0.1 0.2 0.2 0.3 0.2 0.2 0.3 0.1 0.8 0 0.4 0.1 0.1 0.4-0.1 1.5 0 0.9 0.1 0.4 0.2 0.4 0.4 0.5 1.8 1.5 0.1 0.2 0 0.6 0.2 0 0.3-0.2 0.2 0.1 0.3 0.9 0.4 0.3 0.4 0 0.4 0 0.3 0 0.4 0.1 0.2 0.4 0.4 1.1 0.3 0.4 0.2 0.2 0.7 0.4 0.4 0.3 0.4 0.8 0.4 0.3 0.4 0.2 1.2 0.1 0.3 0.2 0.3 0.4 0.5 0.8 0.9 1.5 0.1 0.4 0.1 0.5 0.2 0 0.2-0.1 0.3 0 1 0.2 0.3 0.1 0.3 0.3 0.8 1.1 0.8 0.6 0.9 0.5 0.9 0.1 0.9-0.4 0.2-0.3 0-0.1 0.1-0.1 0.2 0.1 0.2 0 0.1 0.2 0.2 0.1 0.3 0.1 0.2-0.1 0.4-0.4 0.2-0.1 0.1 0 0.2 0.1 0.1 0 0.4-0.2 0.3-0.2 0 0.1 0.2 0.1 0.1 0.1 0.2-0.1 0-0.2 0-0.4 0.2-0.3 1.1-0.9 0.6-0.3 0.6-0.1 1.2 0 4.5-1.1 0.4 0 2.6 1.2 0.4 0.1 0.5 0 0.4-0.1 0.7-0.2 0.4 0 0.2 0.2 0.1 0.3 0.1 0.3 0.2 0.5 0.2-0.2 0.5-0.6 1.7-0.7 0.3 0 0.3 0 0.5 0.2 1.1 0.4 0.5 0.2 1.2-0.3 1.7-2.1 1.3-0.4 1.6 0 0.5-0.1 0.3-0.1 0.1-0.2 1-3 0.7-1.3 0-0.2 0-0.2-0.1-0.2-0.4 0-0.1-0.2 0.1-0.5 0.4-0.2 2.3-1.1 0.4-0.2 1.3-0.1 0.3-0.1 0.4-0.3 0.2-0.3 0.3-0.2 0.5-0.1 5.9 0.3 0.5 0.2 0.2 0 0.2-0.1 0.2-0.2 0.1-0.2 0.2-0.2 0.3-0.1 0.4 0.1 0.3 0.1 0.4 0.1 0.9-0.1 0.4 0.1 0.4 0.2 0.4 0.1 0.2 0.3 0 0.5-0.1 0.4-0.2 0.4-0.4 0.3-0.6 0.4-0.1 0.3 0.1 0.1 0.3 0 0.7-0.2 0.8-0.2 0.8 0.1 0.7 0.4 0.6 0.5 0.3 0 0.9 0.1 1.2 0.2 0.9 0.4 1.5 1.1 0.9 0.1 0.7-0.4 0.5-0.1 0.4 0 0.4 0.3 1 1.2 0.6 0.2 0.5-0.1 3.1-2.1 1.2-1.5 0.4-0.4 0.4-0.1 2.9-0.5 0.7 0 0.8 0.3 0.2 0.1 0.2 0.2 0.2 0.2 0.2 0.1 0.2 0 0.4-0.3 0.1-0.1z m-109.4 62.4l0.3-0.3 0.6-0.1 0.7 0.1 0.4 0.1-0.4 0.3-0.7 0-0.9-0.1z m9.8-9l0.2 0.2-0.1 0.2-0.7 0.7-0.1 0 0-0.1-0.1-0.2-0.1 0-0.1 0-0.1 0 0 0.1-0.2 0-0.1-0.1 0-0.1 0.1-0.2 0.2-0.1 0.1 0 0.2 0 0.2-0.1 0.4-0.3 0.2 0z m1.6-1.8l0.2 0.2 0 0.2-0.1 0.3-0.1 0.2-0.1 0.1-0.3 0.1-0.2 0.1-0.1-0.1 0-0.3 0-0.2 0.1-0.1 0.4-0.4 0.1 0 0.1-0.1z m-5.7 8l0.1 0.3-0.1 0.4-0.2 0.3-0.1 0.2-0.3 0.2-1.3 0.4-0.2 0-0.5 0-0.1-0.1-0.1-0.2 0-0.3 0-0.1 0.1-0.2 0.1-0.2 0-0.2-0.1-0.2-0.1-0.1-0.4 0.1-0.2-0.1 0.3-0.3 0.5-0.2 0.8-0.2 0.3-0.1 0.1-0.1 0.1-0.1 0.3 0.2 0.3 0.1 0.5 0.3 0.2 0.2z m15.7-9.2l0.1 0.1 0.1 0.1 0.2 0.1 0 0.2 0 0.2-0.2 0.1-0.4 0.2-1 0.7-0.2 0.1-0.3 0-1.4 0.6-0.6 0.4-0.7 0.2-0.7 0.7-0.4 0.1-0.3-0.1-0.4-0.2-0.4-0.3-0.2-0.3 0.1-0.4 0.5-1.3 0.1-3.2 0.2-0.4 0.3-0.2 0.3 0.1 0.7 0.2 0.4 0 0.2 0 0.4-0.3 0.2-0.1 0.4 0.1 0.6 0.4 0.4 0.2 0.3 0 0.3-0.2 0.1-0.1 0.2-0.1 0.4 0 0.3 0.3 0.3 0.3 0.1 0.3 0 1.5z"
                                id="IDKB" name="Kalimantan Barat">
                            </path>
                            <path data-tooltip-target="tooltip-IDPA"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#07410F"
                                d="M833.8 218l7.8-9.8-19.9-7.1-0.5-0.3 0-0.6 0.4-0.9 0.5-1 0.5-0.7 0.5-0.7 1.8-1.4 0.6-0.8 0-0.2-0.1-0.8 0-0.3 0.2-0.2 0.2-0.1 0.3-0.2 3.6-2.9 0.1 0 0.6 2.4 0.5 0.5 0.9-0.2 1.1-1.2 0.5-0.3 0.2 0.8-0.2 1.3-0.1 0.2-0.1 0.1-0.1 0.1-0.1 0.1-0.1 0.2-0.1 0.2 0.1 0.6-0.2 0.8 0 0.3 0.7 0.2 0.2 0.3 0.1 0.8 0 0.1 0.1 0.1 0 0.1 0.1 0.3-0.1 0 0.2 0.2 0.1 0.1 0.2 0.3 0.3 0.1 0.4-0.1 0.6-0.5 0 0.2-0.1 0.4 0 0.2 0 0.1 0.3 0.3 0.2 0.6 0.4 0.1 0.8 0 0.5 0.1 0.5 0.4 0.3 0 3.3 0.2 0.4 0 0.5 0.3 0.4 0.1 0.4-0.1 0.8-0.3 1.3-0.1 0.4-0.2 0.3-0.1 0.3-0.3 0.9-0.9 0.1-0.1 0.1-0.3 0-0.2-0.1-0.2 0.1-0.1 0.5-0.8 0.8-0.5 1.5-0.6 0.7-0.4 0.3-0.4-0.1-0.1-0.2-0.2-0.1-0.3 0-0.1 0.1-0.2 0.1-0.1 0.1-0.1 0.1 0 0-0.1 0.2 0 0.4 0.1 0.4-0.2 0.5-0.6 0.9-0.2 0.4-0.3 0.3-0.4 0.2-0.4 0-0.4-0.2-0.7 0-0.2 0.5-0.5 0.2-0.3 0.1-0.4 0-0.9 0.1-0.1 0.4-0.3 0.2-0.2 0.3 0.1 0.2-0.8 0.2-0.2 0.2 0 0.2-0.1 0.2-0.1 0-0.2 0.1-0.1 0.3-0.1 0.4-0.1 1.8-0.8 0.8-0.5 0.6-0.7 0.2-0.4 0.1-0.4 0.1-1.4 0.1-0.3 0.2-0.3 0.6-0.7 0.2-0.3 0.1-0.4 0-0.2-0.1-0.4-0.1-0.6 0.1-0.1 0.1-0.2 0.3-0.4 0.3-0.4 0.5-0.3 0.5-0.1 1 0 0.2-0.1 0.6-0.3 0.2-0.1 0.1 0.2 0 0.3-0.1 0.3 0.2 0.1 0.5 0 0.6 0.1 0.1 0.2 0.1 0.1 0.1-0.1 0.3 0 0.1-0.1 0.3 0.1 0.7 0.2 0.4-0.4 0.3 0 0.4 0.2 0.2 0.1 0.2-0.1 0.1-0.1 0.1-0.2 0.2 0 0.5-0.1 0.2-0.1 1-0.7 1.2-0.2 0.3-0.1 0.1-0.2 0-0.2 0.1-0.2 0.6-0.3 0.9-0.2 2.5-0.1 0.5-0.1 0.3-0.2 0.7-0.4 0.1-0.3-0.2-0.4-0.4-0.4-0.2-0.3 0-0.2 0.2-0.1 0.1-0.2 0-0.3-0.1-0.3-0.2-0.1-0.5-0.2-0.2-0.1-1.1-0.8 0.2-0.3 0.1-0.4 0-0.9 0.1-0.2 0.4-0.2 4.1-1.6 2.3-1.3 0.4-0.2 0.1-0.1 0.1-0.1 0.3-0.4 0.1 0 0.3-0.1 5.2-2.2 0.9-0.3 0.8 0 0.9 0.3 0.1 0.1 0.5 0.6 0.2 0 0.3 0.4 0.1 0.1 0.3 0 0.2 0.1 0.9 0.9 0.3 0.3 0.9 0.1 2.2 0.6 2.5 1.2 3.4 1 1.4 0.2 0.4 0.2 0.9 0.2 1.4 1.1 1.3 1.5 0.8 0.6 0.4 0.1 1.3 0 0.4 0.1 3.1 1 3.5 2.2 2 0.7 1.1 0.6 0.3 0 0.3 0.1 0.9 0.8 3.2 1.2 2.1 1.2 0.8 0.3 0.8 0 3.9-0.3 0.5-0.2 0.2-0.4 0.2-0.1 0.3 0.2 0.5 0.2 0.1 0 0-0.3 0.1-0.1 0.2 0.1 0 0.1 0 0.2 0.1 0.2 0.8 1 0.3 0.1 1.2 0.5 0.5 0.3 0.4 0.2 0.3-0.2 0.3 0.1 0.2 0 0.1-0.2 0.1-0.2-0.1-0.2-0.2-0.2-0.1-0.1 0.3-0.2 0.2 0 1.9 0.7 0.3 0.1 2.1 0.1 2.5 1 0.2 0.2 0.1 0.3-0.1 0.7-0.1 0.2-0.8 0.9 0.1 0.2 0.2 0.2 0.2 0.1 0.2 0.1 0.1-0.2 0.1-0.2 0-0.2 0.2-0.1 0.1 0 0.4 0.3 0.1 0.1 0.2-0.1 0.5-0.1 0.2-0.1 1.8 0 0.9-0.1 0.2 0 0 0.6 0 3.5 0 3.8-0.1 4.9 0.1 6.6 0 4.3 0 4 0 3.4 0 8.4 0 3.5 0 4.3 0 0.2 0 0.1 0 3.9 0 2.4 0 0.9 0 5.1 0 3.7 0 3.8 0 4.6 0 1.8 0 0.3-0.2 0.2-0.1 0.2 0 0.2-0.1 0 0 0.1 0 0.2 0.1 0 0.1 0.1 0 0.1 0 0.2-0.2 0.2-0.1 0.1 0 0.3 0.1 0-0.1 0-0.1 0-0.1 0-0.2 0-0.2 0 0 0.1 0.1 0 0.1 0.1 0.1 0 0 0.1-0.1 0.1 0.1 0 0 0.3 0.2 0 0.1 0 0.1 0.3-0.1 0.1 0 0.2-0.1 0.2-0.3 0-0.2 0.2 0 0.2 0 0.5-0.1 0.1-0.1 0.1-0.2 0-0.1 0.1 0 0.1 0.2 0.2 0 0.1-0.2 0.2-0.1 0-0.3 0.1-0.3 0.1-0.1 0.2-0.1 0.1 0.3 0.2 0 0.3 0 0.1 0 0.2-0.1 0.3 0 0.1-0.1 0.2-0.1 0.1 0 0.1 0 0.1 0 0.1 0.2 0.2 0.1 0.1 0.3 0.3 0.1 0.2 0 0.1-0.2 0.3-0.1 0.1 0.1 0.1 0 0.1 0.2 0.2 0.3 0.2 0 0.1 0.1 0.3 0.1 0.1 0 0.3 0.1 0.3 0.5-0.2 0 0.4 0.1 0.2 0 0.1 0.3 0.2 0.3 0 0 2.1 0 3 0 2.5 0 0.9 0 5.2 0 3.7 0 3.8 0 0.8 0 3.4 0 5.3 0 3.5 0 3.7 0 3.9 0 2.3-0.8-0.5-0.3-0.1-1.2-0.6-4.7-4.8-2.3-3.4-1-1-0.2-0.2-1.3-1.1-0.2-0.3-0.1-0.3-0.2-0.1-1-0.4-0.7-0.7-0.3-0.5-4.4-3.2-0.8-1.1-0.3-0.5-0.1-0.5 0.2-0.4 0.4-0.4 0.4-0.3 0.3 0 0.3 0 0.2-0.1 0-0.3 0.1-0.8-0.2-0.6 0-0.5 0.1-0.5 0.5-0.3 0.5 0.3 0.4-0.2 0.4-1-0.3 0.1-0.3 0.5-0.4 0.1-0.5 0-0.3 0.1-0.1 0.2-0.2 0.9-0.1 1.3-0.1 0.2-0.4 0.3-0.8 0.5-0.8 0.2-3.3 0.1-2.7 0.3-0.6 0.2-1.1 0.6-0.6 0.2-1.6 0.4-0.8 0.1-0.7-0.1-0.7-0.1-0.8-0.4-0.5-0.5-0.3-0.7 0-0.2 0-0.2 0.1-0.3 0.1-0.1 0-0.1-0.1-0.4 0-0.6-0.1-0.3-0.4-0.4 0.3-0.1 0.3 0.1 0.4 0.1 0.3-0.3-0.9-0.3-0.5-0.1-0.2 0.2 0 0.2 0.1 0.4 0 0.2 0.1 0.1 0.2 0 0.1 0.1 0 0.1 0 0.1-0.1 0.1 0 0.9-0.5 0.5-1.5 0.4-0.7 0.3-2.3 2-0.2 0.3-0.1 0.4 0 0.1-0.1 0.2-0.2 0.2-0.1 0.1-0.3 0-0.2-0.1-0.7-1.5-0.5-0.7-0.2-0.4-0.1-0.5 0.1-0.4 0.3-0.3 0.9-0.2 0.4-0.3 0.1-0.1-0.1-0.2 0-0.2-0.3-0.2 0-0.2 0.1-0.5 0-1.7 0.1-0.4 0.2-0.2 0.8-0.1 0.5-0.4 0.2-0.6 0.1-1.6 0.5-1.3 0.2-0.3 0.1-0.2 0.1-0.6 0.1-0.3 0.2-0.1 0.2-0.2 0.2-0.2 0.1-0.7-0.5-0.6-0.7-0.3-0.7-0.2-0.8 0-0.3-0.2-0.2-0.9-0.1-0.5-0.8-1.3-0.4-0.5-0.5-0.4-1.5-1-0.3-0.2-0.1-0.1-0.1-0.1-0.2-0.1-0.4 0-0.2-0.1-0.2 0-0.3-0.2-0.2-0.3 0.1-0.2 0.4-0.1 4.2 0.1 0.8 0.1 0.4 0.2 0.6 0.4 0.2 0.1 3 0.1 0.4-0.2 0.3-0.4 0.2-0.5 0.3-0.5 0.5-0.1 0-0.2-0.4-0.1-0.3 0.1-0.5 0.5-0.3 0.4-0.1 0.2-0.3 0-0.8 0-0.9 0.1-0.4 0-0.4-0.3-1-0.6-0.4-0.2-0.4 0-1.4-0.1-0.3-0.1-0.5-0.3-1.1-0.3-0.1-0.2-0.2-0.1-2-2-1.4-1.1-0.2-0.5 0.4-0.6 0.3-0.2 0.3 0 0.8 0 0.4 0 0.8 0.4 0.5 0 0.3-0.2 0.5-0.5 0.3-0.2 1.7-0.1 0.7-0.1 0.3 0 0.2 0 0.3 0.2 0.2 0 0.4 0.2 0.6 0.9 0.4 0.2 0.6 0.5 0.1 0.1 0.2 0.1 0.4 0.1 0.3 0.2 0.1 0 0.3 0.1 0.8-0.1 0.2 0.1-0.2-0.3-0.5-0.1-0.4 0-0.2-0.1-0.2-0.2-0.9-0.4-1.4-1.3-0.6-0.4-0.9-0.2-1.3-0.1-0.4-0.1-0.3-0.2-1-0.9-0.5-0.4-0.9-0.2-0.3-0.3-0.2-0.4-0.1-0.4 0.3-0.6 0.4 0 0.8 0.4 0.3 0.1 1.4 0.8-2.4-1.6-0.6-0.5-1-1.2-0.2-0.2-0.3-0.1-2.7-2.5-0.9-1.7-0.2-0.5-0.3-0.8-0.1-0.3 0-1 0-0.3-0.4-0.9 0-0.4-0.1-0.3-0.4-0.4-0.1-0.2 0-0.3-1.3-2-0.3-0.6 0.2-0.5 0.7-0.4 1.4-0.3 0.5-0.4-0.3 0.1-0.9 0.2-0.4 0-2.2-0.5-0.5-0.3-0.1-0.1-0.1-0.2-0.1-0.1-0.2-0.3 1.8-1.1 1.1-0.4 1.1-0.4-0.4-0.2-0.4 0.1-0.9 0.1-0.4 0-0.4 0.1-0.4 0.2-0.8 0.5-0.4 0.1-1 0.1-0.3 0.2-0.1 0 0-0.1-0.2-0.1-0.1-0.2 0-0.2 0-0.2-0.2-0.8-0.1-0.9 0-0.5 0.1-0.2 0.2-0.2 0.3-0.2 0.2-0.1 0.2-0.1 0.1 0 0-0.3-0.1 0-0.4-0.2-0.1 0-0.3-0.2 0-0.4 0.2-0.9 0-0.5 0-0.2-0.2-0.1-0.1 0.3-0.1 0.2-0.2 0.1-0.3-0.1 0.1 0.5 0.1 0.4-0.2 0.2-0.6-0.2-0.2-0.1-0.6-0.8-0.8-0.9-0.2-0.5 0.4-0.6-0.4-0.1-1 0.7-0.7 0-0.1-0.1-0.1-0.1-0.5-0.7-0.1 0 0.1-0.4 0.3-0.5 0.2-0.3-0.8 0.3-0.4 0.2-0.3-0.1-0.4-0.4-0.2-0.7-0.3-0.2-0.1 0.1-0.2 0.1-0.2 0-0.3-0.2-0.6-0.1-0.4-0.2-0.4-0.3-0.1-0.2 0.4-0.3 0-0.1-0.2-0.1-0.2-0.5-0.2-0.1-0.1 0.1-0.3 0.5-0.2 0.1-0.3 0-0.2-0.1-0.3-0.4-0.2-0.1-0.2-0.1-0.1-0.1 0-0.3-0.7 0.2-0.5-0.1-0.6-0.3-0.4-0.4 0.2-0.2 0.1-0.1 0-0.2 0-0.2-0.1 0-0.3 0.2-0.3-0.2-0.5-0.6 0 0.5-0.2 0.1-0.5-0.2-0.1-0.1 0-0.3 0.3-1.2-0.1 0-0.9 0.6-0.2 0.3 0.2 0.3-0.3 0.3-1-0.4-0.3-0.4-0.1-0.6-0.6 0.7-0.5-0.4-0.1-0.3 0.2-0.4 0.1-0.7-0.1 0-0.5 0.7-0.6 0.4-0.7 0.1-1-0.5-0.2-0.1 0-0.1 0.1-0.3 0.2-0.1 0.3-0.1 0.1-0.2-0.2-0.2-0.5 0.2-1.4 0.8-0.4 0.2-0.5 0.1-0.1-0.1-0.2-0.1-0.2-0.2-0.1-0.2 0.1-0.4-0.1 0-0.2-0.1-0.5-0.1-0.2 0.2-0.2 0-0.9-0.7-1.4-0.5-1.8-1-1.4-0.7-0.5-0.4-0.1-0.1-0.4 0-0.2-0.1-0.6-0.4-0.4-0.2-1.7 0-1.8-0.5-0.6-0.5 0-0.1-0.5 0-0.3-0.2-0.2-0.1-0.3-0.2-0.4-0.1-0.2 0-0.3-0.1-0.4-0.3-0.9-1-0.4-0.3-0.7-0.1-1.7 0-0.7-0.3-0.3 0.2-0.5 0.1-0.5-0.1-0.4-0.1-0.1 0-0.9-0.1-0.8-0.2-0.2-0.1-0.4-0.2-2.4-0.3-0.4-0.1-0.3-0.2-0.3 0.1-1.1 0.2-0.5-0.1-1.2 0.4-0.9 0-0.8-0.2-4.5-2.6-0.3-0.2-0.1-0.3-0.2-0.3-0.4-0.3-0.5-0.1-0.2-0.1z m76.8 50.2l0.1 0.3 0.4 0.4 0.1 0.3-0.1 0.2-0.2 0.2-0.5 0.3-0.3 0.1-0.3-0.1-0.2-0.1-0.2-0.1-0.3-0.1-0.1-0.8-0.3-0.1-0.2-0.1-0.2-0.2-0.3-0.4-0.1-0.4 0-0.4 0.2-0.2 0.2 0.2 0.5 0.4 0.3 0.2 0.3 0.1 0.7 0 0.3 0.1 0.2 0.2z m2.8 31.1l0.1 0.3 0.2 0.4-0.1 0.5-0.3 0.2-3.8-0.3-0.9-0.3-0.5-0.1-0.9 0-0.5-0.1-0.2-0.4 0.1-0.5 0.2-0.3 1.5-1 0.4-0.3 0.1-0.4 0-0.4 0.2-0.3 0.3-0.1 0.8-0.1 1.1-0.4 0.6 0.1 0.3 0.5 0.1 0.6 0 0.7 0.1 0.5 0.3 0.4 0.8 0.8z m0.8-15.9l0.7 0.2 1.4 0.2 0.6 0.3-0.3 0.4-0.3 0.3-0.2 0.4-0.3 0.8-0.5 1-0.1 0.3-0.1 1.9-0.1 0.2-0.2 0.2-1.1 0.5-0.4 0.4-0.2 0.7 0.1 1.5 0.1 0.7 0.2 0.7-0.9 0-0.4 0.1-0.4 0.2-0.6 0.8-0.3 0.2-0.5 0.2-0.9 0-0.4 0.1-0.4 0.2-0.3 0.4-0.5 0.9-0.3 0.4-1.3 1-0.4 0.1-0.2 0.2-0.7 0.8-0.6 0.4-0.6 0.4-0.7 0.2-0.8 0.2-0.8 0-1.4-0.5-0.9-0.1-2.9-0.1-3.6-0.1-1 0.1-0.8 0.2-1.6 0.7-0.8 0 0-0.8 1.7-4.8 0.5-0.9 0.1-0.3 0.1-0.3 0.6-0.4 0.2-0.2 0.2-1.2 0.2-0.2 0.1-0.2 1.4-2.9 0.4-0.7 1-0.8 0.1-0.4 0.1-0.4 0.2-0.4 0.4-0.9 0.4-0.5 1.2-1 3.1-2.1 3-1 2.6-0.4 0.6-0.2 1.2-0.2 1.9-0.1 1.8 0.3 0.7 0.9 0.1 0.3 1 1.4 0.2 0.3 0.3 0.2 0.3 0.2z m-41.3-114.7l1 0.6 0 0.1-0.2 0.1-0.2 0.2-0.1 0.1-1.6 0-0.7 0.1-0.6 0-0.1 0.1 0 0.2-0.2 0.2-0.2 0.1-0.4 0-0.2 0.2-0.1 0.1-0.2 0.1-0.2 0-1.9-0.1-0.4 0 0 0.1 0.2 0.1 0.1 0.2 0 0.2-0.2 0-0.2 0-0.4-0.2-0.1 0-0.3 0-0.4 0.1-0.2 0-0.2 0-0.6-0.3-0.3 0-0.8-0.3-0.4-0.1-0.1 0.1-0.2 0.1-0.1 0.1-0.2 0-0.2 0-0.2 0.1-0.1 0.1-0.1 0.2-0.1 0.3-0.1 0-0.1-0.3-0.2 0-0.2 0-0.2 0.1-0.3-0.5-0.6-0.4-1.6-0.3-0.2 0-0.4 0-0.2 0-0.2-0.1-0.2-0.2-0.2-0.1-0.4 0-0.3-0.1-0.3-0.1-0.5-0.3-0.9-0.4-0.2-0.1-0.2-0.2-0.3-0.1-0.9 0-0.3-0.2-0.7-0.3-0.7-0.1-0.1 0-0.3-0.3-0.2-0.1-0.2 0-0.3 0.1-0.2 0-0.3-0.3-0.2 0-0.2 0-0.3 0.1-0.3 0.1-0.2-0.1-0.5-0.3-0.5 0-0.6 0.1-0.5-0.1-0.3-0.1-0.1-0.2 0-0.2-0.2-0.3-0.1 0-0.3 0-0.1 0-0.1-0.1 0-0.2-0.1-0.2-0.1 0-0.1-0.1 0.2-0.2 0.3-0.1 0.2 0 0.1-0.1 0.3 0 2.1 0.4 4 0.3 1.3 0.3 0.9 0.1 1.2-0.3 1.4 0.4 0.6-0.2 0.8 0.3 1.8-0.1 0.8 0.2 0.1 0.1 0.2 0.2 0.1 0.1 0.2 0 0.5 0 0.2 0.1 0.3 0.2 0.4 0.2 0.7 0.3 0.4 0.1 1.3-0.2 3.2 0.4 1.7-0.1 0.4 0 0.7 0.3 0.4 0.1 0.7 0 0.3 0.1 0.4 0.1z m-30.9-5.7l0.2 0.1 0.2 0.1 0.2 0.1 0.3-0.1-0.4 0.5-0.7 0.2-1.8 0.1-1.6-0.1-0.2-0.2 0.1-0.4 0.2-0.3 0.4 0 0.4 0.2 1.1-0.2 0.4 0.2 0.3 0.1 0.9-0.3z m-5.7-9l-0.1 0.3-0.1 0.3 0 0.6-0.6 0.9-0.3 0.1-0.3 0.1-0.7 0-0.3-0.1-0.3-0.2-0.2-0.3-0.3-0.7-0.5-0.4-0.2-0.5 0.3-0.5 0-0.1 0.1-0.4 0.1-0.2 0.1-0.1 0-0.1 0.3-0.2 0.3-0.1 0.3-0.1 0.9 0.3 0.3 0.2 0.1 0.1 0 0.2 0.2 0.3 0.1 0.2-0.1 0.2 0 0.3-0.1 0.2-0.3 0.4-0.1 0.3 0.3 0.2 0.4-0.2 0.3-0.9 0.4-0.1z m27.2 1.5l0.2 0.2-0.1 0.3-0.2 0.3-0.4 0.1-0.2 0.1-0.9 0.7-1.2 0.2-0.4 0.1-0.2 0.2-0.4 0.2-0.4 0.1-0.4 0-0.8-0.1-1.3-0.8-0.9-0.2-0.4 0.1-0.8 0.3-0.5 0-0.4-0.1-0.4-0.3-0.3-0.4-0.3-0.4-0.1-0.4 0.1-1.1 0-0.2-0.3-0.4-0.1-0.1 0-0.2-0.3-0.7-0.3-1.9-0.3-0.7-0.5-0.4-0.5 0.1-0.3 0.4-0.3 0.5-0.5 0.4-0.4-0.1-3.1-2.5-0.1 0.2 0 0.3 0.2 0.4-0.6-0.2-0.7-0.6-0.6-0.8-0.5-1.4 0-0.3 0.4-0.2 0.2 0.1 0.3 0.3 0.2 0.2 0.1 0 0.2-0.1 0.2 0 0.1 0.1 0.2 0.1 0.1 0.1 0.6 0.1 1 0.1 0.2 0 0.5-0.2 0.1 0.2 0.2 0.4 1.3-0.3 0.2 0.1 0.1 0.1 0.1 0.3 0.1 0.3 0.1 0.1 0.2 0 0.2-0.1 0.2-0.1 0.6 0.4 0.4 0.2 0.2-0.1 0.1-0.3 0.3-0.3 0.4-0.2 0.4-0.1 0.4 0.1 0.5 0.4 1.4 1.5 1.6 1.1 0.4 0.4 0.2 0.5 0.2 0.2 0.1 0.2 0.3 0.2 0.1 0.2 0 0.3 0.1 0.2 0.3 0.3 0.3 0.2 0.3 0.3 0.2 0.5 0.3 0.4 0.2 0.3 0.2 0 0.3-0.2 0-0.1 0.5 0 0.5-0.1 0.5 0.2 0.2 0.4 0.2 0.2 1.1 0.2z"
                                id="IDPA" name="Papua">
                            </path>
                            <path data-tooltip-target="tooltip-IDJI"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#39B54A"
                                d="M409 301.5l0.2 0.1 0.2 0.3 0 0.3-0.1 0.1-0.2 0-0.5 0.1-1.6 0-0.2-0.1-0.1-0.3 0.1-0.3 0.3-0.2-0.1-0.2-0.1-0.1 1 0.2 1.1 0.1z m-34-34.2l0.4 0.4 0.4 0.3 0.5 0.3 1.3 0.3 0.9 0.1 0.3 0.1 0.3 0 0.4-0.1 0.7-0.4 0.4-0.1 0.4 0.1 0.6 0.7 1.2 1.5 0.3 0.2 0.4 0.1 0.9 0 0.8-0.1 0.7-0.2 0.2-0.1 0.8 0 0.4 0 0.8-0.3 0.5-0.1 0.7 0.2 0.3 0.1 0.2-0.1 0.1-0.1 0.1-0.1 0.4 0.1 0.3 0.3 0.3 0.2 0.3 0.2 0.5 0.2 0.4 0 0.2-0.2 0.2-0.4-0.1-0.3 0.1-0.1 0.1-0.1 0.3 0.1 0.1 0.1 0.1 0.2 0.1 0.2 0.1 0.2-0.1 0.4-0.3 0.8 0 0.5 0 0.2 0.5 0.7 0.2 0.1 0.2 0.1 0.3-0.1 0.2 0 0.2 0.3-0.6 0.2-0.4 0.1-0.1 0.2 0.1 0.2 0.1 0.4 0.2 0.3 0.2 0.1 0.3 0.2 0.4 0.3 0.2 0.4-0.1 0.4-0.3 0.1-1.2-0.1 0.3 0.4 0.5 0.3 1.1 0.5 0.3-0.3 0.3-0.4 0.3-0.3 0.4-0.1 0.3 0.1 0.3 0.3 0.2 0.3 0.3 0.5 0.1 0.4 0 0.3-0.2 0.7 0 0.3 0 0.8-0.2 0.4-0.7 0.5-0.2 0.4 0 1.6 1.6 1.2 2.6 1.1 0.3 0.1 0.5 0 0.4 0.1 0.4 0.1 0.4 0.3 0.7 0.7 0.4 0.3 0.7 0.2 0.4 0.2 0.3 0 0.1 0 0.4-0.1 0.3 0 0.4 0.2 0.4 0.6 0.3 0.1 0.5 0 0.4-0.2 0.7-0.4 0.7-0.4 0.4-0.1 0.4-0.1 0.4-0.1 0.6-0.4 0.5 0 2.5 0.4 0.3-0.1 0.4-0.1 0.1-0.1 0.5 0 0.8 0.3 0.4 0.1 0.4-0.1 0.3-0.2 0.4-0.5 0.3-0.2 0.3 0 0.3 0.1 0.5 0.1 0.4-0.1 0.3-0.1 1.4-1.2 0.6-0.1 0.6 0.4 0.8 1 0.5 0.4 0.6 0.2 0.5 0.1 0.8-0.3 0.4 0 0.3 0.1 0.7 0.7 0.3 0.2 0.2 0 0.3 0.1 0.4-0.1 0.2 0.1 0.2 0 0.3 0.3 0.8 0.5 0.3 0.3 0.1 0.4 0 0.4-0.1 0.9-0.1 0.1-0.2 0.4-0.1 0.2 0 0.2 0 0.2 0.1 0.2 0 0.1 0 0.9-0.8 2.9-0.8 4 0 0.6-0.1 0.4 0 0.2 0 0.3 0.2 0.4 0.1 0.9 0 0.4 0.3 0.2 0.2-0.2 0.1-0.5 0-0.9 0.4 0.4 0 0.6 0 1.3 0.1 0.4 0.3 0.4 0.3 0.3 0.3 0.1 0.4 0.1 0.3 0 0.5 0.4 1 0.3 0.2 0.3 0.1 0.2 0.3 0.3 0.2 0.3-0.1 0.5-0.5 0.7-0.8 0-1.8-0.6-0.4-0.1-1.1 0.1-0.5-0.1 0.1-0.3 0.4-0.5-0.1-0.8-0.7-0.6-0.9-0.4-0.8 0-0.8 0.5-0.5 0.2-0.2-0.3-0.3-0.3-0.5 0.1-0.9 0.3-0.1 0-0.7-0.1-0.2-0.1-0.2-0.4-0.2-0.1-0.4 0.1-0.3 0.2-0.3 0.1-0.2-0.4 0-0.2 0.1-0.3 0-0.2-0.2-0.1-0.2 0-0.4 0.2-0.2 0.1-0.4-0.1-0.5-0.1-0.5-0.2-0.3-0.3-0.1 0.1-0.1 0-0.1 0.1 0 0.1-0.1-0.3-0.1-0.7-0.1-0.1-0.4 0-0.3 0.1-0.3 0.2-0.1 0.2-0.2 0-0.4 0-0.1-0.1 0.1-0.3 0-0.1-0.3-0.2-0.2 0-0.2 0.1-0.3-0.1-0.3-0.1-0.3-0.6-0.3-0.1-0.6-0.1-0.1-0.1-0.2-0.3-0.2 0-0.6 0.1-0.3-0.1-0.7-0.4-0.1-0.1-0.1-0.2-0.2-0.2-0.1-0.1-0.4 0-0.3 0.1-0.3 0.2-0.4-0.2-1-1.2-0.4-0.3-0.8-0.3-0.8-0.2-0.9-0.1-2.5 0.3-0.9 0.2-0.7 0.4-1 1.2-0.7 0.4-0.7-0.2-0.2 0-0.5-0.3-0.1 0.1 0 0.2-0.2 0.1-0.2 0-0.2 0-0.2-0.2-0.1 0-0.3 0.2-0.2 0.2-0.2 0.1-0.3 0.1-0.3 0-0.3 0.1-0.2 0.1-0.4 0.4-0.3-0.2-0.9-0.4-0.7-0.1-1.1-0.4-1.5 0-0.3-0.1-0.3-0.2-0.3-0.1-0.4 0 0.1-0.2 0-0.1-0.3-0.3-0.5-0.2-0.5-0.1-0.4 0-0.2 0.1-0.6 0.2-0.2 0-0.2-0.1-0.1-0.1-0.1-0.1-0.3-0.1-3.7-0.3-0.4-0.2-0.7-0.4-0.1 0-0.5 0.4-0.1 0-0.1 0.1-0.2 0-0.4-0.1-0.4-0.5-0.3-0.1-0.6 0.1-0.2-0.1-0.2-0.1-0.2-0.1-0.2 0-0.2 0.1-0.2 0.4 0 0.4 0 0.3-0.4 0.1-0.1-0.1-0.1-0.2-0.1-0.3-0.2-0.1-0.2 0.1-0.1 0.2-0.1 0.4-0.1 0.1-0.1 0.2 0 0.2 0.3 0.1 0 0.2-0.1 0.1-0.2 0.1-0.4-0.1-0.4-0.2-0.3-0.3-0.2-0.4-0.1 0-0.2 0.3-0.4-0.1-0.6-0.3-0.3 0-0.3 0.2-0.3 0-1.4-0.3-0.1-0.3 0-0.2 0-0.2-0.3-0.2-0.2 0-0.3 0.1-0.2 0.1-0.2-0.1-0.2-0.2-0.2 0-1 0-0.2 0-0.1 0-0.2-0.2-0.2-0.1-0.2 0-0.2 0.1 0 0.1-1.7 0.5-0.1 0-0.1-0.2-0.1-0.2-0.1-0.2-0.2-0.1-0.2 0-0.3-0.1-0.1-0.3 0-0.2-0.1-0.2-0.2 0-0.1 0.2 0 0.2-0.1 0.1-0.2 0.3-0.1 0.1-0.2 0-0.8 0-0.4 0-1.1-0.5 0.1 0 0-0.2 0.3-0.9 0-0.2 0-0.1 0-0.5 0-0.1 0.1-0.2 0.3-0.3 0.3-0.4 0.8-0.4 1.2-1.1 1-0.6 0.5-0.2 0.4-0.2 0.4-0.3 0.3-0.1 0.1 0.1 0.2 0.1 0.2 0.1 0.2 0 0.2-0.1 0.1-0.2 0.1-0.6 0.3-0.9 0.1-0.5 0.1-0.8-0.1-0.2-0.1-0.3-0.2-0.2-0.5-0.6-0.2-0.2-0.3-0.1-0.6 0-0.4-0.2 0-0.3 0-0.4-0.1-0.1 0-0.2 0-0.1 0-0.2 0.5-0.3 0.2-0.3-0.3-0.2-0.1-0.4-0.3-1 0.3-2.5 0.1-0.4-0.1-0.6 0-0.9 0.1-0.9 0.3-0.3 0.5 0.1 0.4 0.2 0.3 0.1 0.2 0 0.1-0.1 0.2 0 0.1 0 0.3 0.2 0.3 0.1 1.2 0.5 0.8 0.1 0-0.2 0.1-0.2 0.1-0.2 0.1-0.1 0.1-0.1 0.2-0.1 0.4-0.3 0.6-0.4 0.3-0.3 0.3-0.3 0.8-0.7 0.3-0.2 0-0.2 0-0.2-0.2-0.8 0-0.3 0.1-0.7-0.1-1.7 0.1-0.5 0.3-1.8 0-0.4 0.2-0.5 0.8-1.2 0.1-0.1z m77 3.4l0.1 0.5-0.3 0.2-0.9 0-0.2-0.1-0.4-0.1-0.3-0.1-0.2-0.1-0.1-0.1-0.2-0.1-0.1 0.1-0.1 0.1-0.1 0-0.1 0.1-0.2 0-0.1-0.1-0.1 0-0.1-0.1-0.3-0.1-0.6 0.4-0.1 0 0 0.2 0.2 0.1 0.2 0.1 0.3 0.1 0.2 0.1 0.1 0.1 0.1 0.2-0.5 0.3-0.4-0.1-0.8-0.6-0.2 0.2-0.1 0.2 0 0.1 0.1 0 0 0.1 0.1 0.2 0 0.1-0.1 0.1-0.1 0.1-0.1 0-0.1-0.1-0.1 0-0.4-0.4 0-0.2 0.2-0.7-0.7 0.1-0.4-0.1-0.1-0.2 0.1-0.5 0.2-0.3 0.2-0.2 0.3-0.3-0.2-0.3 0.2-0.2 0.4-0.1 0.4 0 1.7 0 1.6 0.2 0.4 0.2 1.4 0.7 0.3 0.3z m-56.7-23.4l0.3 0.2 0.2 0.2 0.2 0.3 0.1 0.5-0.1 0.4-0.1 0.4-0.3 0.3-0.3 0.1-0.2 0-0.5 0-0.2-0.1 0-0.1-0.2 0-0.3 0.2-0.5 0-0.2-0.3 0-0.3-0.2-0.5 0.1-0.2 0.6-0.4 0-0.1 0.5-0.5 0.2 0.1 0.3-0.1 0.3-0.1 0.3 0z m26.6 23.6l0.4 0.2 0.5 0.2 0.4 0.3 0.3 0.6-0.6 0.1-0.9 0.5-1.4 0.2-0.5 0.5-0.4 0.1-0.5 0-0.4 0.2-0.4 0.7 0.3 0.1 0.2 0.2 0 0.2-0.4 0.2-0.8 0-1.1-0.1-1.4-0.2-0.4 0-0.4-0.1-0.4 0.4-0.7 0-0.4 0.2-0.2 0.3-0.1 0.3-0.1 0.2-0.1 0.3-0.1 0.3-0.2 0.5-0.3 0.1-0.4 0.1-0.2-0.1-0.2-0.2-0.4-0.2-1 0.1-3.1-0.2-0.3-0.1-0.4-0.1-0.9 0.4-0.4-0.1-0.2-0.7-0.1-0.2-0.1-0.1 0-0.1 0.2-0.1 0-0.2-0.2 0-0.5-0.2-0.1 0-0.1 0.2 0 0.4-0.1 0.2 0.2 0.2 0.4 0.3 0.2 0.2 0 0.2-0.4 0.1-6.1-1.4-0.8 0-0.7 0-0.3 0-0.1-0.2-0.1-0.6 0-0.3 0.2-0.3-0.1-0.1-0.2 0.3-0.2-0.2-0.1-0.3-0.1-0.3 0.1-0.4 0.1-0.1 0.2 0 0.4-0.1 0.6-0.4 0.6-0.5 1-1.2 0-0.3 0.6-0.2 0.8-0.1 0.6-0.1 0.7 0 1.7-0.2 1.6 0.3 2.5 0 3.4-0.2 1.6 0.2 2.9-0.3 2.4 0.1 2.6-0.4 0.9 0.1 0.4 0.2 0.4 0.2 0.3 0.2 0.4 0.3z m10.8 4.3l0.2 0 0.2 0 0.2 0.1 0 0.3 0 0.3-0.1 0-1.7-0.1-0.4 0-0.2 0-0.1-0.1 0-0.2 0.1-0.1 0.1-0.1 0.7-0.3 0.2-0.1 0.1 0.1 0.5 0.2 0.2 0z m-4.4-0.8l0.3 0.5 0.2 0.3 0 0.6-0.1 0.4-0.2 0-0.5-0.3-0.5-0.1-0.1-0.2-0.4 0-0.2-0.1-0.2-0.4-0.2-0.5-0.1-0.4 0.5-0.5 0.6-0.1 0.4 0.1 0.3 0.3 0.2 0.4z m30.1 0.3l0 0.1 0.1 0.3-0.1 0.8-0.3 0.4-0.8 0.2-0.8-0.1-0.8-0.4-0.2-0.4 0.2-0.2 0.1 0 0.1 0.1 0.1-0.1 0.2-0.5 0.1 0 0.1 0.2 0.1 0.3 0.1 0.1 0.1 0.1 0.3 0 0.4 0.2 0.6 0 0.2 0 0-0.1-0.1 0-0.1-0.2-0.1-0.2 0.1-0.1 0.1-0.1 0.1 0 0.1 0.1 0-0.1 0-0.2 0.1-0.2z"
                                id="IDJI" name="Jawa Timur">
                            </path>
                            <path data-tooltip-target="tooltip-IDMA"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#39B54A"
                                d="M702.4 297.6l0.2 0.2-0.1 0.2-0.3 0.1-0.2 0.1-0.5 0.1-0.6-0.1-0.6 0-0.4-0.1-0.1-0.1-0.2-0.2-0.1-0.2 0.1-0.2 0.1-0.2 0.1-0.2 0.1-0.2 0.3-0.1 0.4 0.2 0.6-0.1 0.5-0.2 0.4-0.1 0.2 0.2 0.1 0.6 0 0.3z m15.8-0.9l0.2 0.3-0.1 0.3-0.1 0.3-0.2 0.2-0.2 0-0.3 0-0.3-0.1-0.2-0.3-0.4-0.1-0.2 0.1-0.1 0.1-0.3 0.1-0.6-0.1-0.7-0.5-0.3-0.4 0.5-0.3 0.6-0.2 1.9 0.2 0.8 0.4z m-25.4-1l0.3 0.3 0.3 0.4-0.1 0.4-0.5 0.2-0.4 0-0.7 0.3-0.4 0.1-0.4-0.1-0.5-0.5-0.4-0.1 1.6-1 0.4-0.1 0.4 0 0.4 0.1z m-10.4-2.6l0.2 0.2 0.1 0.3 0 0.4 0 0.3-0.2 0.4-0.4 0.1-1-0.3 0-0.2 0.1-0.2 0-0.6 0-0.2 0.3-0.3 0.3-0.1 0.3 0.1 0.3 0.1z m76.9-7.9l0.3-0.2 0.1-0.1 0.1 0.1-0.2 0.8-0.2 0.4-0.4 0.2-0.8-0.2-0.3 0.1 0.2 0.5-1.2 0-0.3-0.2 0.3-0.6 0.1-0.2 0.2-0.1 0.2-0.1 0.6 0 0.3-0.1 0.3-0.2 0.1-0.1 0.1 0 0 0.1 0.2 0 0.1 0 0.2-0.1z m-2.7-1.9l0.1 0 0.2 0.1 0.1 0.1-0.1 0.1-0.1 0.1-0.1-0.1-0.1-0.1-0.2-0.1-0.1 0.1-0.2 0.1-0.1 0.1-0.8 0-0.8-0.2-0.3-0.1 0-0.2 0-0.3 0.3-0.6 0.1 0.1 0.6 0.5 0.3-0.2 0.2 0.1 0.3 0.1 0.2 0.1 0.7-0.1 0.1 0-0.3 0.4z m4.1-2.6l0.1 0.1 0 0.1-0.3 0.2-0.8 0.8-0.2 0.1-0.2 0.1-0.2 0.1-0.1 0.3-0.2 0.2-0.2 0-0.3 0 0-0.1 0.2-0.1 0-0.1 0.1-0.2-0.5 0-0.4 0.1-0.4 0-0.3-0.3-0.1-0.3 0.1-0.3 0.3-0.3 0.3-0.2 0.1-0.1 0.2 0.1 0.3 0 0.3 0 1.2-0.1 0.3-0.1 0.2 0 0.2-0.1 0.1 0 0.2 0.1z m2.1-1.5l0.2-0.2 0.1 0 0 0.1 0 0.2-0.1 0.1-0.4 0.3 0.1 0.3-1-0.2-0.2-0.1 0.1-0.1 0.2-0.1 0.2-0.3 0.3-0.5 0.1-0.2 0.1 0.1 0.3 0.5 0 0.1z m6.2-13l0.5 0.1 0.1 0.2 0 0.3-0.4 0.4-0.4-0.2-0.3 0.3-0.1 0.4 0.5 0.3-0.2 0.3-0.3 0.2-0.3 0.2-0.5-0.5 0.2-0.8 0.6-0.8 0.6-0.4z m61.5-1.8l0.3 0.2 0.2 0.1 0.1 0.3 0 0.3-0.1 0.6-0.2 0.4-0.1 0.2-0.2 0.3-0.5 0.7-0.1 0.3-0.1 0.3-0.3-0.1-0.7-0.4 0.2-0.3 0-0.1 0-0.4 0.1-0.2 0.6-1 0.2-0.7 0.1-0.3 0.1-0.1 0.2-0.1 0.2 0z m-1.9-3.3l-0.1 0.4-0.3 0.3-0.7 0.3 0.2 0.4-0.1 0.5-0.3 0.2-0.6-0.3-0.2-0.2-0.2-0.3 0-0.3 0-0.2-0.1-0.2-0.5-0.5-0.2 0-0.3 0-0.2 0-0.1-0.2-0.1-0.2-1.2-0.5-0.1-0.2-0.1-0.2 0.1-0.2 0.1-0.2 0.2-0.2 0.1-0.1 0.3-0.1 0.1-0.1 0.3-0.3 0.1-0.1 0.2-0.1 0.1-0.1 0.2 0 0.2 0 0.1 0 0.2 0.2 0.6 0.3 0.2 0.2 0.5 0.6 0.3 0.2 0.4 0.2 0.2 0.1 0.3 0.2 0.3 0.4 0.1 0.3z m4.6-2.7l0.3-0.1 0.3 0.1 0.2 0.3 0.1 0.3 0 0.4-0.2 0.4-0.3 0.7-0.5 1.4-0.2 0.2-0.3-0.2-0.3-0.2-0.1-0.2 0.3-0.2 0-0.1-0.3-0.5 0.1-0.6 0.3-0.5 0.4-0.1 0-0.6 0.1-0.3 0.1-0.2z m-9.2-0.6l0.2 0 0.2 0.2 0.2 0.1 0.3 0.1 0 0.1-0.5 0.1-0.3 0.2-0.3 0.4-0.4 0.3-0.2 0 0-0.1-0.1-0.1-0.1-0.3-0.4-0.4-0.3-0.1-0.1 0.1-0.2-0.2-0.8-0.7-0.3-0.7-0.3-0.2-0.4 0.2-0.4-0.2 0-0.3 0.3-0.3 0.2-0.3-0.1-0.3-0.3 0-0.6 0.4-0.4-0.7-0.1-0.9 0.2-0.8 0.6-0.6 0 0.9 0.1-0.1 0.9-0.4 0.2 0 0.2 0.1 0.2 0.7 0.1 0.2 0.1 0 0.1-0.1 0.4-0.2-0.1 0.3-0.4 0.4-0.2 0.3 0 0.4 0.1 0.3 0.3 0.3 0.3 0.4 0.3-0.1 0.3 0.2 0.6 1 0.2 0.1 0.4 0-0.2 0.2 0.1 0.1 0.4 0z m-31.2-12.9l-0.1 0.4 0.1 0.3 0.1 0.3 0.2 0.3-0.1 0.1-0.1 0.1-0.1 0-0.1-0.2-0.1-0.1-0.1-0.2 0 0.3-0.1 0.1-0.1 0.1-0.2-0.1-0.1-0.1-0.3-0.8 0-0.6 0.1-0.6 0.3-0.5 0.4-0.4 0.1 0.2 0 0.1 0 0.2-0.1 0.2 0.1-0.1 0.2-0.1 0.1 0 0.1 0.1 0 0.2-0.2 0.8z m-9.5-1.9l0.5 0.5 0.3 0.1 0.4-0.2 0 0.2-0.2 0.2-0.1 0.2-0.2 0.1-0.3 0.1-0.1 0-0.1-0.1-0.2-0.3-0.2-0.3 0-0.3 0.2-0.2z m-47.3-19.5l0.1-0.3 0.2-0.1 0.1 0.1 0 0.8-0.3 0.2-0.3 0-0.4 0.1-0.1-0.2-0.2-0.1-0.2 0-0.3 0 0.3-0.2 0.9-0.1 0.2-0.2z m-53.3-14.1l0.3 0.3 0.1 0.3 0.1 0.5-0.2 0.3-0.1 0.2 0 0.2-0.3 0.2-0.4-0.1-0.3-0.1-0.4 0-0.2-0.2-0.3-0.3-0.2-0.3 0-0.4 0.6-0.7 0.3-0.1 0.3 0 0.7 0.2z m7.6-10.1l0.2 0.3 0.3 0.3 0 0.3-0.4 0.1-0.4-0.1-0.7-0.3-0.9-0.2-0.3-0.2-0.3-0.2-0.2-0.3 0.1 0 0.5-0.3 0-0.1 0.2-0.2 0.1-0.1 0-0.1 0.1 0 0.1 0 0.6 0 0.3 0.3 0.7 0.8z m3.1-2.9l0.2 0.1 0.1 0.3 0 0.3 0.1 0.3-0.2 0.4-0.1 0.2-0.2 0.1-0.5-0.1-1.3 0.2-0.4-0.2-0.3-0.4 0.3-0.4 0.6-0.5 0.4-0.4 0.7 0 0.2-0.1 0.1-0.1 0.1 0.1 0 0.1 0.1 0.1 0.1 0z m3.6-4.9l0.3 0.1 0.3 0.2 0.2 0.2-0.1 0.1-0.2 0.1-0.2 0.4-0.1 0.1-0.1 0.2-0.2 0.5-0.1 0.1-0.2 0.2-0.3 0.1-1.6 0-0.2 0-0.1-0.3 0.3-0.3 0.3-0.2 0.3-0.1 0.1-0.1 0.1 0 0.2-0.3 0.1-0.1 0.1 0 0.1 0.1 0.1 0 0.3-0.2 0.1-0.2 0.1-0.2-0.2-0.4 0.6 0z m2.7 103.7l0.6 0.4 0.1 0.2-0.2 0.3-1 0.9-0.3 0.1-0.2 0.6-0.3 0.1-0.4-0.1-0.2-0.1-0.9-0.6-0.2-0.1-0.3 0-1.2-0.1-0.4-0.1-0.3-0.2-0.5-0.4-0.2-0.3-0.1-0.4-0.1-0.2-0.2-0.2-0.2-0.1 0-0.2 0.2-0.1 0.2 0 0.2 0 0.8-0.1 0.7 0.2 1.4 0.5 1.5 0.2 0.8 0 0.7-0.2z m59.7 0l0.3-0.1 0.3-0.1 0.4-0.1 0.4 0.2-0.4 0.5-0.6 0.3-0.6 0.2-0.8 0.6-1.4 0.6-0.2 0-0.5-0.1-1 0.3-0.2 0.1 0.1 0.6-0.1 0.3-0.3 0.2-0.9 0.6-0.2 0.2-0.2 0.1-1 0 0.2-0.4 0.9-0.9 0.4-0.4 0.1-0.3 0.2-0.2 0.3-0.2 0.2 0 0.5-0.3 0.2-0.1 0.2-0.3-0.1-0.2-0.1-0.2 0-0.4 0.1-0.3 0.2-0.2 0.2 0 0.3 0.2 0.4 0.1 0.8-1 0.5-0.3 0.2 0.2 0.7 0.7-0.1 0.1-0.1 0.2 0.1 0.1 0.2 0.1 0.1-0.1 0.2-0.3 0.1 0z m-25.1-5.1l0.3 0.1 0.1 0.3 0 0.4-0.1 0.3-0.2 0.3-0.7 0.7-0.6 1.3-0.1 0.2-0.3-0.1-1.3-0.3-0.1-0.2-1.9-2.1-0.2-0.4 0.1-1.3 0.2-0.6 0.7-0.2 1.8 0 0.1 0 0.6 0.2 0.1 0.1 0.2 0.1 0.7 0 0.2 0.1 0.2 0 0.2 0.2 0.1 0.1 0 0.2-0.2 0.5 0.1 0.1z m-59.4-3l0 0.3 0 0.1-0.1 0.2-0.2 0.1-0.2-0.1-0.2-0.1-0.2-0.1-0.9 0.1-0.4 0.1-0.3-0.2-1.6 0.6-0.2 0.1-0.5 0.4-0.1 0.1-0.4 0.1-0.2 0.2-1.1 1.3 0 0.2 0 0.1 0 0.2-0.1 0.2-0.2 0.2-0.3 0.5-0.2 0.2-0.2-0.2-0.4-0.4-0.2-0.1-1 0-0.5-0.1-0.9-0.2-0.6-0.1-1.6 0.2-0.4-0.1-0.3-0.3-0.4-0.3-0.4-0.1-0.5 0.2-0.3-0.2-0.4 0.1-1.1 0.1-0.4 0.2-0.2 0.1-0.4 0-0.3 0-0.2 0.1 0 0.1 0 0.2-0.1 0.1-0.1 0.1-0.2 0-0.1 0-1.7 1.4-0.4 0.2-0.3-0.2 0-0.3 0.2-0.4 0.2-0.4 0.2-0.1 0-0.3 0-1.4 0.1-0.2 0.3-0.3 0.2-0.2 0.3-0.1 0.3-0.1 0.2-0.4 0-0.5 0.1-0.3 0.1-0.1 0.3-0.1 0.1-0.1 0.1-0.1 0.2-0.3 0.5-0.9 0.2-0.2 0.2-0.1 0.2-0.1 0.3 0.1 0.6 0.3 0.1 0.1 0.1 0.2 0.2 0 3.1 0.4 0.3 0 0.6-0.4 0.3-0.1 0.4 0 0.4 0.1 0.5 0.1 0.4-0.1 1-1 1.1-0.4 0.6-0.5 0.4-0.1 2-0.4 0.2-0.2 0.2 0 0.1 0.1 0 0.4 0 0.2 0.1 0.2 0.2 0.2 0.9 0.4 0.2 0.2 0.2 0.2 0.2 0.2 0.3 0.1 1.2-0.1 0.3 0 0.2 0.3 0.1 0.3 0.1 0.3 0.1 0.3z m12.5-4l0.3 0.1 0.1 0.3-0.1 0.7-0.1 0.2-0.3 0.2-0.7 0.2-0.2 0.1-0.1 0-0.1 0.1-0.2 0.4-0.2 0.2-0.3 0.1-0.3 0-0.2-0.3 0-0.4 0-0.1 0.1-0.2 0.2-0.1 0.1 0 0.1-0.1 0.1-0.2-0.1-0.3-0.2-0.7 0-0.3 0.2-0.3 0.2-0.1 0.7 0.1 0.4 0.3 0.3 0.1 0.3 0z m83.6-6l-0.3 0-0.1-0.1-0.2 0.1-0.2 0.2-0.2 0.2-0.1 0.2 0.1 0.5 0 0.4 0 0.2 0.4 0.7 0.2 0.3-0.1 0.2-0.2 0.3 0.1 0.2 0.2 0.1 0.2 0.1 0.2 0.1 0 0.1 0.1-0.1 0.1 0 0 0.1 0 0.2-0.1 0-0.1 0 0 0.1-0.3 0.4 0 0.4-0.1 0.2-0.2 0.1-0.1 0 0.1 0.5-0.1 0.4-0.2 0.5-0.2 0.9-0.2 0.4-0.3 0.3-0.3 0.1-0.1 0.1-0.3 0.8-0.1 0.2-0.3 0.2-0.4 0.1-0.5 0.1-0.4 0.2 0.2 0.4-0.2 0.2-0.1 0.1-0.2 0.1-0.2-0.1 0.1 0.4-0.2 0.3-0.3 0.1-0.2 0.1-0.1 0.1-0.9 0.7-0.1 0.3-0.1 0.2 0 0.4-0.2 0.2-0.2 0.2-0.2 0.2-0.2 0.3 0.2 0 0.2 0.1 0 0.1-0.1 0.2-0.1 0.1 0 0.2 0 0.1-0.1 0.2-0.2 0.3-0.3 0.3-0.4 0.2-0.1-0.3 0.3-0.8 0.1-0.4-0.2-0.1-0.2-0.1-0.1-0.1-0.1 0-0.2 0.2-0.1 0.1-0.1 0.5-0.1 0.2-0.5 0.3-0.8 0.1-1.5-0.1-0.2-0.2 0.1-0.4 0.3-0.9 0-0.3-0.2-0.3-0.2-0.1-0.3 0-0.1-0.4 0.1-0.5 0.2-0.4 0.4-0.2 0.2 0 0.3 0.1 0.1 0 0.2-0.2 0-0.2-0.1-0.2-0.2-0.1-0.1-0.1 0-0.1 0.3 0 0-0.2-0.1-0.3 0-0.2-0.1 0.1-0.2-0.1 0-0.1-0.1-0.2-0.1 0 0 0.1-0.1 0-0.1-0.5 0.1-0.3 0.4-0.1 0.4 0.1 0.8 0.4 0.4 0.1 0.6-0.2-0.4-0.1-0.4-0.1-0.3-0.3-0.3-0.6 0-0.2 0.2-0.1 0-0.1 0.1-0.7 0.1-0.3 0.5-0.7 0-0.3 0.1-0.5 0.2-0.4 0.2-0.3 1.2-1 0.3-0.1 0.1 0.1 0.2 0.2 0.1 0.1 0.1 0 0.1-0.2 0.3-0.6 0.1-0.1 0.1-0.1 0.1-0.1 0.1-0.2-0.1 0 0-0.2 0-0.2 0.2-0.1 1.1-0.2 0-0.1-0.1-0.2 0-0.2 0.1-0.4 0.2-0.2 0.4-0.5 0-0.2 0.1-0.2 0.1-0.1 0.2-0.1 0.4 0 0.2 0 0.2-0.1-0.3-0.6 0-0.4 0.1-0.3 0.7-0.5 0.4-0.2 0.5-0.2 0.4 0 0.3 0.1 0.2 0.3-0.2 0.7 0.1 0.1 0.2-0.1 0.2-0.1 0.3-0.4 0.2-0.2 0.2 0.2 0 0.2 0.5 0.9 0.1 0-0.1 0.2-0.2 0.2-0.3 0.2-0.3 0z m5.6-0.7l0.1 0.7-0.1 0.4-0.3 0.2-0.2-0.1-0.7-0.5-0.1-0.2-0.2-0.7-0.5-0.3-0.7-0.1-1.4 0.1-0.6-0.1-0.2-0.4 0.5-0.6 2.4-0.1 0.4 0.1 0.4-0.1 0.3 0.1 0.2 0.3 0.1 0.3 0.1 0.3 0.4 0.4 0.1 0.3z m-65.5-1.1l-0.2 0.2 0.2 0.3 0.2 0.2 0 0.2-0.8 0.8-0.3-0.2-0.8-0.6-0.7-0.3-0.3-0.3-0.1-0.4 0.2-0.4 0.5-0.4 0.6-0.3 0.5-0.2 0.2 0.1 0.3 0.3 0.2 0.1 0.1 0.1 0.4 0 0.1 0 0.3 0.3 0 0.3-0.2 0.2-0.4 0z m115-11.1l0.5 0.1 0.3 0.1-0.2 0.2-0.1 0.2-0.1 0.4-0.1 0.2-0.5 0.5-0.5-0.1-0.4-0.1-0.5 0.1 0 0.1 0.4 0 0.2 0.3 0.1 0.1-0.1 0.2-0.2 0.2-0.3 0.2-0.2 0.1-1 1.7 0.3 0.1-0.1 0.2-0.9 0.8-1.3 0.5-0.8 0.5-0.4 0.2-0.5-0.9-0.3-0.3-0.1-0.1-0.2-0.1-0.8-0.2-0.3-0.2-0.2-0.7-0.2-0.4 0-0.2 0-0.2 0.3-0.7 0.3-1.5 0.4-3.3 0.1-0.4 0.2-0.1 0 0.2 0.2 0.3 1.1 0.2 0.5 0.4 0-0.3-0.4-0.6 0-0.3-1 0.1-0.4-0.6 0.2-1.9-0.2-0.7-0.4-1.3 0-0.7 0.1-0.2 0.2-0.2 0.2 0 0.2 0.1 0.2 0.3 0.2 0.2 0.2 0.3 0.7 0.2 0.3 0.2 0.6 0.6 0.6 0.5 0.3 0.1 0.1 0 0.1 0.2 0 0.2-0.1 0.2-0.2 0.2 0 0.1 0.5 0.6 0.4 0.4 0.4 0.2 0.8 0.1 0.3 0.2 0.3 0.3 0.3 0.3 0.1 0 0.1-0.1 0.2 0.1 0.1 0.1 0 0.1 0 0.1 0 0.1 0.4 0.6 0 0.2 0.1 0 0 0.1 0.1 0.1-0.1 0.1-0.1 0-0.1 0.1 0 0.1 0.1 0.9z m-33.3-15.7l0.2 0.2 0.1 0.4-0.2 0.9-0.1 0.4-0.2 0.4-0.3 0.4-0.3 0.3-0.3 0.2-0.3-0.3-0.1-0.5-0.2-0.3 0.1 0.3-0.1 0.2-0.1 0.2-0.2 0-0.1 0-0.1-0.1-0.3-0.4 0 0.1-0.1-0.2 0-0.2 0-0.5 0-0.1-0.1-0.1 0-0.2 0-0.1 0.1 0 0.1 0 0-0.1 0-1 0-0.5 0.3 0-0.1-0.2-0.2-0.7-0.1 0-0.1 0-0.2-0.1 0.1-0.1 0-0.1 0.1-0.1 0-0.2 0-0.1-0.1 0-0.1 0-0.2 0 0-0.2 0-0.4 0-0.1-0.2-0.2-0.1-0.1-0.1-0.2-0.1-0.3 0.8 0.4 0.1 0 0.2-0.2 0.3-0.2 0.2-0.1 0.1 0.4-0.1 0.3-0.1 0.2-0.1 0.1 0.3 0.2 0.2 0 0.3-0.1 0.1 0 0.1 0.1 0.1 0.2 0 0.4 0.3 0.7 0 0.2 0.1-0.2 0-0.1 0.1 0 0.1 0.4 0.1 0.5 0.1 0.3 0.3 0.2z m38.7 7.3l0 0.2 0 0.2-0.1 0.1-0.1 0.2 0 0.2 0.1 0.4-0.1 0.2-0.1 0.2-0.4 0.8-0.1 0.3-0.3 0.5-1.4 0.6-0.4 0.4-0.5-0.4-0.3-0.1-0.2 0.2-0.1 0-0.3-0.4-0.1 0 0-0.1-0.3-0.4-0.1 0-0.2-0.2-0.9-0.5-0.2-0.2-0.2 0-1.2-0.5-0.1-0.1-0.1-0.1 0-0.1 0-0.1-0.2 0-0.1 0 0 0.1-0.2 0-0.2-0.1-0.1-0.2-0.1-0.3-0.1-0.1-0.5-0.7-0.3-0.7 0-0.7 0.3-0.6 0.4-0.2 0.4 0.1 0.3 0 0.4-0.3 0-0.2-0.7 0-0.4 0.1-0.2-0.3 0.1-0.3 0.2-0.3 0.1-0.4-0.2-0.2-0.5-0.6 0.1-0.1 0.2-0.1 0.2-0.2 0.2-0.3 0-0.4 0.8-0.4-0.2-0.3 0-0.1 0.5-0.5 0-0.2-0.3-0.3-0.2 0.3-0.2 0.2-0.2 0-0.1-0.4-0.2-0.2-0.3-0.1-0.7 0-0.4-0.2-0.3-0.1-0.5-0.5-0.1-0.3 0.3-0.3 0.4-0.3 0.4-0.1 0.4 0.2 0.7 0.5 0.4 0.1 0.4-0.1 0.1-0.2 0.1-0.3 0.1-0.3 0.2-0.2 0.3-0.2 0.2-0.2 0.1-0.3 0.1-0.3 0.9-1.6 0.1 0.4 0.2 0.1 0.2-0.1 0.2-0.2 0.2 0.1 0-0.4 0-0.2 0-0.1-0.2-0.2 0-0.1 0-1 0-0.1 0.1-0.1 0.1-0.1 0.1 0 0.1 0 0.1 0 0.1 0.1 0.1 0.1 0.2 0 0.6-0.3 0.2 0 1 0.4 0.1 0.2 0.3 0.7 0.2 0.3 0.6 0.3 0.1 0.2-0.1 0.1-0.4 0.2 0.1 0.1 0.1 0.1 0 0.4-0.1 0 0-0.2-0.5 0.1-0.2 0.1-0.1 0.2 0.2 0 0.5 0 0.2 0.1 0.2 0.1 0.4 0.2 0.5 0.6 0.4 0.7-0.3 0.2-0.3 0.6-0.1 0.5-0.1 0.3 0.2 0 0.1 0.1 0.1 0 0.1 0.1 0 0.2-0.1 0.3-0.1 0.3-0.4 0.4-0.2 0.2 0.5 0.1 0.3 0.2 0.3 0.2-0.1 0.4 0.1 0 0.1 0.1 0.1 0.1-0.2 0.2-0.4 0.2-0.2 0.2-0.1-0.4-0.2-0.1-0.2 0.2-0.1 0.3 0.1 0.1 0.5 0.3 0.2 0.1-0.2 0 0.2 0.5-0.3 0-0.5-0.1-0.4-0.3-0.1-0.1-0.1-0.1-0.2-0.1-0.3-0.1-0.3 0.1-0.2 0.1-0.2 0.1-0.1 0.1 0.9 0 0.2 0.1 0.1 0.4 0.2 0.2 0.8 0.7 0.3 0.2 0.8 0.9 0.1 0.3-0.1 0.5-0.2 0.4-0.4 0.4-0.4 0.2-0.1-0.1-0.2-0.1 0 0.3-0.1 0.2-0.1 0.1 1-0.3 0.3-0.3z m-31.1-16.8l0.1 0.3 0 0.4-0.1 0.3-0.2 0.2-0.2 0.2-0.5 2.8-0.5 1.5-0.1 0.2-0.6 0.5-0.2 0.1-0.1 0-0.3 0.2-0.3 0.1-0.1 0.2-0.2 0.3-0.4 0.4-0.4 0.6-0.4 0.7-0.1 0.6 0 0.4 0.1 0.6 0 0.4-0.1 0.2-1.9 2.3-0.3 0.1 0-0.2 1.2-3.4 0.5-0.5 0.1-0.2 0-1.3 0-0.3 0.7-1.1 0.3 0 0.3 0.2 0.1-0.1 0.3-0.8 0-0.8 0.1-0.4 0.3-0.7 0.8-2.3 0.4-0.6 0.1-0.3 0.1-0.8 0.3-0.3 0.3-0.2 0.4 0.1 0.3 0.1 0.2 0.3z m-28.7-12.3l0.3 0.4 0.1 0.5-0.1 0.5-0.2 0.1-0.2-0.2-0.1-0.5 0.1-0.5 0.1-0.3z m-2.5-5.2l0.1-0.1 0.2 0 0.1 0.1 0.1 0 0.4 0.5 0.4 0.7 0.2 0.7-0.4 0.2-0.1-0.2-0.8-1.6-0.2-0.3z m-4.8-6.1l0.4 0.4 0.2 0.2-0.2 0.1-0.6-0.5-1-0.3-0.1-0.1-0.2-0.2-0.1-0.2 0-0.2 0-0.1 0-0.1 0-0.1 0.1 0 0.1-0.1 0.1 0.1 0.1 0.2 0.3 0.2 0.9 0.7z m-2.5-2.7l0.1 0.1 0.1 0.1 0 0.2 0.1 0.1 0 0.4-0.1 0.2-0.2 0.1-0.2-0.1-0.2-0.4-0.1-0.5-0.1-0.3 0.6 0.1z m4.1 1l0.2 0.4-0.2 0.2-0.4-0.1-0.5-0.3-0.2-0.3-0.4-0.9-0.1-0.3 0.1-0.2 0.2-0.1 0.3-0.1 0.4 0.2 0.3 0.5 0.1 0.6 0.2 0.4z m-52.4-7.8l0 0.2 0.1 0.2 0.1 0.1 0.1 0.2-0.3 0.3-0.3 0.2-0.4-0.1-0.2-0.3-0.1-0.4 0.3-0.4 0.3-0.1 0.4 0.1z m-5.3-2.2l0.3 0.3 0.3 0.5 0.1 0.4-0.3 0.2-0.4 0.1-0.7 0.2-0.8 0.1-0.4 0.1-0.8 0.3-0.1-0.3 0.1-0.4 0.2-0.4 0.1-0.3 0-0.3 0.1-0.3 0.1-0.2 0.2-0.2 0.7-0.2 0.3 0.2 0.7 0.1 0.3 0.1z m-3.9-0.4l0.4 0.4-0.1 0.2-0.3 0.3-0.1 0.3 0.1 0.4 0.1 0.4 0 0.3-0.5 0.2-0.1-0.1-0.4-0.2-0.3-0.1-0.1 0-0.2 0-0.1 0.1 0 0.2 0.5 0.7 0.1 0.1-0.1 0.2-0.4 0.5-0.3 0.3-0.5 0.1-0.6 0.1-0.4 0.1-0.3 0.3-0.4 0.3-0.6 0.1 0.1-0.2 0.5-0.3 0.1-0.1 0.4-0.8 1-0.7 0.3-0.4-0.3-0.2-0.4 0.2-0.8 0.6-0.7 0.3-0.5 0.3-0.5 0.1-0.3 0.1-0.4 0.4-0.3 0.4-0.4 0.3-0.6 0-0.4-0.2-0.2-0.3 0-0.4-0.3-0.5 0.1-0.2 0.9-1 0.5-0.4 1-0.7 0.2 0 0.3-0.1 1.7 0.1 0.2 0 1.7-1.3 0.9-0.3 0.8 0.1z m7.7 0.3l0.1 0.4 0.1 1.4-0.5-0.3-0.3-0.4-0.4-0.2-0.3 0.2 0 0.2 0 0.2 0 0.2-0.2 0.2-0.1 0-0.2-0.1-0.2-0.2-0.1-0.3 0.1 0-0.3-0.2-0.2-0.3-0.1-0.3-0.4-0.5-0.2-0.3 0.1-0.3 0.4-0.1 0.3 0 0.2 0.1 0.3 0.4 0.2 0.1 0.5 0.2 0.3 0.2 0.2-0.5 0.2-0.3 0.2 0 0.3 0.5z m-29.2-1.1l0 2.7-0.3 0.7-0.4 0.3-0.4 0.1-0.4-0.2-0.5-0.1-0.4 0.1-2.4 1.2-0.2 0.1-0.2 0.1-0.5 0.7-0.2 0.2-0.7 0.4-1.6 0.4-1 0.5-0.7 0.5-0.5-0.1-0.4 0.2-0.4-0.4-0.4-0.2-1.3-0.3-0.6-0.5-0.7-0.1-1.7-0.8-1.2-0.9-0.3-0.1-0.8-0.2-0.9-0.5-0.4-0.4-0.3-0.2-0.8 0-0.5-0.6-0.2-0.7-0.3-0.8-1.2-0.8-0.4-0.4-0.3-0.4-0.3-0.5 0-0.1-0.6-1.1-0.3-2.2 0.5-1.5 0.3-0.4 0.6-0.4 0.5-0.4 0.4 0.2 0.2 0.5 0.3 0.3 0.5 0.2 0.5 0.2 0.3 0 0.5-0.2 0-0.5 0.6-0.5 0.8-0.3 2.5-0.7 5.9-0.2 2.3 0.2 0.4 0.3 0.3 0.4 0.4 0.4 0.5-0.2 0.3 0.3 0.4 0.1 0.5 0.1 0.4 0.1 0.7 0.5 0.4 0.1 0.6 0.3 0.1 0.2 0.2 0.1 0.1 0.2 0.1 0.2 0 0.7 0 0.2-0.1 0-0.3 0-0.2-0.1-0.2-0.2-0.3 0-0.3 0.3 0 0.3 0.1 0.3 0.2 0.4 0.1 0.2 0.2 0 0.2 0.3 0.3 0.3 0.4 0.1 0.2-0.1 0.2-0.5 0.2-0.1 0.2 0.1 0.7 0.3 0.9 0.2 0.4 0.1 0.2 0.3-0.1 0.4-0.3 0.9-0.1 0.4z m71.8 2.1l0.1 0.2 0 0.2-0.1 0.4-0.1 0.2-0.3 0.4 0 0.1-0.1 0.2-0.3 0.4 0 0.2-0.2 2.6 0.2 0.3 0.2 0.3 0 0.2-0.5 0.1-0.4-0.1-0.6-0.6-0.3-0.1-0.4-0.1-2-0.7-0.3 0-0.2-0.2-0.8-0.9-0.3-0.2-0.3-0.2-0.4-0.1-0.4-0.1-0.3-0.1-0.3-0.3-0.3-0.5-0.3-0.2-0.3-0.2-0.4-0.1-0.4-0.1-0.4 0-0.9-0.7-3.7-1.2-0.4-0.3-0.1-0.1-0.2 0-1-0.4-0.7-0.3-0.4-0.3-0.2-0.3 0-0.1-0.2-0.2 0-0.2 0-0.6 0-0.1-0.6-0.7-0.8-0.3-6.9-0.7-0.7 0.1-0.1 0.6 1 1.4 0.2 0.7-0.7 0.5-0.8 0-1.7-0.8-0.9-0.3-2.4-0.2-0.8-0.2-1.6-0.8-0.6-0.2-0.5 0-1.5 0.2-0.4 0.1-0.4-0.4-0.1-0.3 0.2-0.4 0.7-0.9-0.3-0.4-0.3-0.3-0.4-0.1-0.4 0-0.4-0.2-0.3 0-0.1 0.1 0 0.1-0.4 0.5-1.2 0.4-0.1 0.2-0.2 0.2-1.6 1.4-0.2 0.2 0 0.1-0.1 0.1-0.1 0.1 0 0.2 0 0.2 0.2 0.1 0.1 0.1 0.1 0.1-0.3 0.4-0.8 0.1-1 0-0.8 0-0.8 0.4-0.4 0.1-0.4-0.1-0.3-0.2-0.7-0.4-0.3-0.3-2.3-3.7-0.2-0.2-0.9-0.1-0.3-0.1-0.6-0.2-0.1 0 0-0.5 0.2-0.5 0.2-0.6 0-0.4-0.3-0.3-0.3-0.2-0.6 0.2-0.5 0.5-0.4 0.6-0.3 0.6-0.2 0.7-0.2 2-0.1 0.2-0.2 0.3-0.2 0.7-0.2 0.2-0.1 0-0.4 0.1-0.2 0-0.1 0.2-0.1 0.4-0.3 0.4-0.2 0.4-0.2 0.7-0.1 0.3 0 0.2 0.2 0.2-0.1 0.1-0.2 0.4-0.1 0.2-0.5-0.5 0.1-1 0.6-1.7 0-0.9-0.1-0.4-0.1-0.2-0.2-0.1-0.6-0.8-0.2-1.2-0.1-0.3-0.5-0.4 0-0.1 0.4-0.2 0.2-0.1 0.4 0 0.2-0.1 0.2-0.1 0.5-0.6 0.2-0.1 0.3-0.1 0.5-0.4 0.3-0.2 0.4-0.1 0.4 0 0.4 0 0.3 0.1 0.4-0.1-0.2-0.6 0-0.3 0.1-0.2 0.3-0.3 0.1-0.2-0.2-0.2-0.4 0-0.3-0.1 0.1-0.3 0.2 0 0.5-0.1 0.2-0.1 0.3-0.7 0-0.2 0-0.1 0.1 0 0.1 0 0.2 0 0-0.2 0.1-0.2 0.1-0.2 0.1-0.2 0.3 0 0.5 0.1 3.3 0 0.7-0.2 0.9-0.1 0.7-0.2 0.4 0 0.4 0.1 0.8 0.2 0.5 0.1 3.9 0 0.8 0.2 0.5-0.1 0.8-0.1 0.8-0.2 1.4-0.6 0.7-0.2 0.3 0.3 0 0.7-0.1 0.8 0.3 0.2 0.5 0.8 0.4 0.2 0.2 0 0.4-0.1 0.2 0 0.1 0 0.1 0.1 0.1 0 0.1 0 0-0.1-0.1-0.2 0-0.1 0-0.1 0-0.1 0.2 0 0.1 0.1 0.1 0 0.2 0.2 0.2 0 0-0.3 0.2-0.2 0.3-0.2 0.6-0.2 1-0.6 0.6-0.2 0.2-0.2 0-0.4 0.1-0.3 0.6-0.3 0.8-0.2 1.6 0 0.2-0.1 0.2 0 0 0.2 0 0.1 0.1 0.1 0.1 0 1.2 0.2 2.8 1.1 0.2 0.1 0.2 0.1 0.4 0.6 0.3 0.2 0.3 0 0.2 0 0.3-0.2 0.2 0 0.1 0 0.1 0.2 0 0.2 0.3 0.2 0.2-0.2 0.3 0.2 0.3 0.2 0.3 0.4 0.4 0.2 1.7 0.3 3.2 0 1.8-0.3 0.9 0 0.8 0.4 2 1.8 0.3 0.2 1.5 0.5 0.2 0.1 0 0.2 0.2 0.7 0 0.1 0.4 0.7 0.2 0.8 0 1.7 0.1 0.3 0.4 0.5 0.1 0.3 0.1 0.2 0.3 0 0.8 0 0.8 0 0.6 0.2 0.5 0.4 0.3 0.5-0.4 0.1 0 0.4 0.1 0.4 0.3 0.4 0.6 0.6 0.2 0.4z m-16 83.2l0.3 0.1 0.1 0.1-0.1 0.3-0.3 0-0.2-0.2-0.2 0-0.2 0-0.2-0.1 0.1-0.1 0-0.1 0.2 0 0.2 0 0.1 0 0.2 0z m-1.1-0.7l0.1 0.3-0.1 0.2-0.2-0.1-0.1 0 0-0.2-0.2-0.1-0.1-0.2 0-0.2 0.1-0.1 0.2-0.1 0.2 0.1 0 0.2 0.1 0.2z m-6.6-3.1l-0.4-0.2 0-0.3 0.1-0.2 0.1 0 0.3 0.4 0.2 0.1 0.2-0.1 0.1 0 0.2 0-0.1 0.3-0.3 0.1-0.3 0-0.1-0.1z m-10.9-11.5l-0.1-0.2 0-0.2 0.1-0.2 0.2-0.1 0.2 0.1 0.2 0.2-0.1 0.3-0.1 0.2-0.2 0-0.2-0.1z m7.1-4.8l0 0.1-0.1 0 0-0.3 0.2-0.3 0.2-0.1 0.2 0 0.2 0 0.2 0 0.1 0.2-0.1 0.1-0.2 0.5-0.1 0.1-0.2 0-0.2-0.1-0.1-0.1 0-0.1-0.1 0z m10.5-8.5l-0.1 0-0.2-0.2 0-0.1 0.1-0.1 0.3 0.1 0.1 0.1 0 0.2-0.2 0z m-48.7-16.2l0.1-0.1 0.1 0.2-0.2-0.1z m0.1-0.4l0 0.2-0.2-0.1 0.2-0.1z m4.6-1.6l0.2-0.2 0.1 0.1-0.3 0.1z m-0.2-1.2l0-0.2 0.1 0.2-0.1 0z m83.2-0.7l0.2-0.1 0.3 0 0.1 0.4-0.3 0.8-0.2 0.1-0.1 0-0.1 0.1-0.1 0.1-0.2 0.1-0.1-0.4 0-0.5 0.3-0.4 0.2-0.2z m-44.1-15.7l0.1-0.1 0.3 0.1-0.1 0.3-0.3-0.3z m98.3 39.3l0.1 0.2 0.1 0.3-0.1 0.4-0.3 0.1-0.3 0-0.1 0-0.1 0.1-0.3 0.1-0.4-0.1-0.1-0.3-0.1-0.4-0.2-0.3-0.2-0.2 0-0.2 0.1-0.2 0.3-0.3 0.4-0.1 0.4 0 0.4 0.3 0.3 0.3 0.1 0.3z m-10.2-14.8l0.3 0.3 0.1 0-0.1 0.3-0.1 0.5-0.3 0.3-0.2 0-0.3 0-0.2-0.4 0-0.4 0-0.4 0.2-0.3 0.2 0 0.2 0 0.1 0.1 0.1 0z"
                                id="IDMA" name="Maluku">
                            </path>
                            <path data-tooltip-target="tooltip-IDNB"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#39B54A"
                                d="M493.5 295.5l0.1 0.1 0.2 0.1 0.2 0.2 0.1 0.2-0.1 0.1-0.1 0.1-0.4 0.2-0.5 0.5-0.4 0.6-1.1 2.2-0.2 0.3-0.4 0.2-0.2-0.1-0.6-0.4-0.2-0.2 0-0.2 0.2-0.3 0.3-0.6 0-0.3-0.2-0.3-0.2-0.2-0.1 0 0-0.1-0.1-0.9 0-0.2 0.1-0.3 0.2-0.1 1.1-0.6 0.3 0 2 0z m-20.4 2.6l0.7 0.2 0.7 0.6 0.6 0.7 0.1 0.8-0.1 0.3-0.7 1-0.2 0.2-0.1 0.3-0.1 1.5-0.2 0.3-0.8 0.8-0.2 0.4-0.4 0.7-0.4 0.6-0.5 1-0.7 0.6-0.4 0.5 0.2 0.6-0.1 0.3 0.1 0.2 0.2 0 0.2-0.3 0.2-0.1 0.2 0.2 0.2 0 0.2 0.2 0.4 0.1-0.5 0.7-0.8 0.1-0.3-0.1-0.7 0.5-0.5 0-0.3-0.2 0.4-0.5 0.1-0.5 0.3-0.5-0.3-0.1-0.7 0.1-0.5 0.4 0 0.5 0.1 0.7 0 0.7-0.3-0.1 0-0.2 0-0.3-0.2-0.2-0.1 0-0.2 0.2-0.2 0.1-0.1-0.1-0.1-0.2-0.1-0.2-0.2-0.1-0.3 0.1-0.8 0.3-0.3 0.1-0.1-0.1-0.2-0.2-0.1 0-0.2 0-0.3 0.2-0.1 0.1-0.2-0.2-0.3-0.5-0.3-0.2-0.2 0-1-0.1-0.1 0.3-0.2 0.2-0.2-0.1-0.3-0.2 0.2-0.1 0.2-0.1 0-0.1-0.1-0.2-0.2 0-0.2 0-0.2 0.1-0.2 0 0 0.2 0 0.2 0 0.4-0.2 0.1-0.2 0-0.2-0.1-0.1-0.1-0.1-0.1-0.2-0.5-0.1-0.2-0.3-0.2-0.1 0.1-0.1 0.1-0.3 0-0.3 0-1.2-0.7-0.5-0.1-0.2-0.5 0-0.5 0.1-0.4 0.2-0.5 0.4 0.2 0.3-0.2 0.1 0.2 0 0.3 0.1 0.1 0.5 0 0.5 0.1 0.2-0.1 0.3-0.1 0.3-0.2 0.2 0.1 0.2 0 0.2 0.1 0.2 0 0.1-0.1 0.1-0.1 0.2-0.1 0.1 0 0.1 0.1 0.1 0.3 0.1 0.2 0.3-0.4 0.2-0.1 0-0.2-0.6-0.3 0.1-0.8 0.1-0.7 0.1-1.2-0.2-1.1-0.5-0.4-0.2-1.1 0.4-0.7 0.4-0.1 0.6 0 0.1 0 0.1-0.2 0.2-0.3 0.1-0.2 0.3-0.2 0.6-0.3 0.2-0.2 1.8-1.8 0.3-0.2 1.8-0.7 0.3 0 0.6 0.3 1.5 0.4 0.8 0.1 0.3 0.2 0.4 0.2 0.3 0.1 0.9 0.2z m48.5-2.9l0.5 0.3 0.4 0.4 0.1 0.5-0.2 0.6-0.2 0.3-0.3 0.3-0.5 0.2-0.5 0-0.6-0.6 0-0.9 0.4-0.8 0.9-0.3z m2.3 9.6l-0.1 0-0.1 0.1-0.1 0 0.1 0.2-0.1 0.1-0.1 0.1-0.2 0.2 0 0.3 0.1 0.2 0.1 0.3 0.1 0.3-0.1 0-0.1 0.1 0 0.1 0.1 0.2-0.4 0.2-0.2 0.2-0.3 0.1-0.3-0.3-0.1 0.3-0.2 0.1-0.1 0-0.3-0.2-0.2-0.1-0.2 0.1-0.3 0.1-1.2 0.2-0.4-0.1-0.5-0.4-0.4-0.7-0.2-0.1-0.3-0.1-0.2 0.1 0 0.2-0.2 0.2-0.5 0.2-0.8-0.2-0.5 0.2-0.5-0.2-0.3 0.1-0.4 0.3-0.5 0.3 0.2 0.1 0.3 0.3 0.2 0.1 0.2 0.1 1.5 0 1.6 0.2 0.4 0.2 0.2 0.2 0 0.1 0.2 0.3 0.1 0.1-0.1 0.2-0.3 0.1-0.4 0.1-0.3 0-0.4-0.1-0.2-0.1-0.3-0.1-0.1 0 0 0.1-0.2 0.1-0.1 0.1-0.2-0.2-0.8-0.6-0.4-0.2-0.9 0-0.9 0.1-4 1.2-1-0.3-0.5-1.1 0-0.5 0.3-0.4 0.3-0.4 0.3-0.5 0.1-0.3 0-0.4 0-0.3-0.1-0.2-0.1-0.4-0.2-0.2-0.1-0.3 0-0.4-0.3 0.3-0.1 0.4 0.1 0.9-0.1 0.2-0.4 0.2-0.4 0.1-0.3 0.1-0.5 0.7-0.3 0.6-0.1 0.2-0.1 0.1-0.3 0-2.3 1.9-0.3 0.1-0.4-0.2-0.5-0.2-0.3-0.2-0.2 0.1-0.7 0.2 0.1 0-0.1-0.1-0.1 0-0.1 0-0.2 0.2-0.1 0.1-0.2 0.3-2.2 1.1-0.2-0.2-0.1 0-0.2 0.1-0.1 0-0.1-0.1-0.2-0.3-0.1-0.1-0.3 0-0.1 0.1-0.1 0.1-0.2 0.2-0.1 0.1-0.2 0-0.3 0-0.1 0-0.2-0.1-0.2-0.1-0.2-0.2-0.2 0-0.3 0.1-0.1 0.1-0.8 0.3-2.1 1.3-0.8 0.3-0.9 0.3-1.7 0.4-1.1 0.1-0.6-0.2-0.6-0.1-0.9-0.4-0.7 0-0.4 0.2-0.3 0.6-0.3 0.3-0.3 0.3-1.1 0.2-1.2 0.1-0.4-0.4-0.4-0.3-0.4-0.2-0.4 0-0.4 0-1.1-0.3-0.5-0.1-0.4-0.1-0.7-0.5-0.2 0.1-0.1-0.3-0.2-0.4-0.4-0.4 0.1-0.3 0.3-0.5-0.1-0.3-0.1-0.5 0-0.2 0.4-0.4 0.4-0.5 0.8-0.2 0.1-0.4 0-0.2-0.2-0.1-0.1-0.1 0-0.1-0.1-0.2-0.1-0.2-0.1-0.1-0.4 0-0.1-0.2 0.1-0.6 0-0.5-0.5-0.3 0.9-1.7 0.8-0.2 0.1-0.4 0-0.9 0.4 0.3 0.2 0.1 0.2 0 0.2 0 1.9-0.6 1-0.6 1.1-0.8 0.7-0.4-0.2-0.5 0.5-0.2 0.6-0.1 0.5-0.2 0.4 0.6 0.2 0 0.7 0.1 0.2 0.1 0.3 0.2 0.6 0.2 0.7 0.6 1.6 0.7-0.1-0.3 0-0.3 0.2-0.2 0-0.3 0.1-0.3 0.1-0.1 0.1 0.1 0.3 0.1 1 0 0.5-0.1 0.3-0.1 0.1 0.3 0.2 1.3 0.3 0.5 0.1-0.4 0.1-0.9 0.2-0.3 0.2 0.1 0.2 0.4 0.1 1.4 0.1 0.3 0.2 0.2 0.9 0.5 0.3-0.1 0.2-0.1 0.2 0 0.2 0-0.1 0.2 0 0.1 0.2 0.1 0.2 0 0.1 0.2 0.2 0.1-0.1 0.1-0.1 0.1 0 0.2 0.2 0 0.2 0.1 0.1 0 0 0.1 0.1 0.1-0.2 0-0.2 0-0.2 0.1-0.1 0.1 0.2 0.3 0.2 0.7 0.2 0.3 0.3 0.2 0.4-0.1 1.3-0.4 0.1 0.1 0.1 0.1 0.1 0.2 0 0.1 0 0.1 0.3 0 0.3 0 0.4 0.2 0.3 0.2 0.4-0.3 0.8-0.9 0.3-0.2 0.1 0 0.1-0.2 0.1-0.1 0.1 0 0-0.1 0.2-0.1 0.2 0 0.7-0.1 0.7 0 0.2 0 0.3 0.2 0.2 0 1.1 0 0.3-0.1 0.4-0.2 0.2-0.4-0.1-0.3-0.1-0.4-0.3-0.3-0.3-0.1-0.1-0.1-0.1-0.1-0.2-0.2-0.1 0.1 0 0.1-0.1 0.1-0.3 0.3-0.3-0.6-0.9-0.7-0.3-0.5-0.1 0-0.2 0.2-0.3-0.2-0.5-0.6-0.4-0.1-0.4 0.1-0.6 0.3-0.3 0-0.4-0.2-0.3-0.2-0.3-0.4-1.1-0.7-1.2-0.9-0.3-0.2-0.4-0.7-0.3-0.4-0.6-0.4-0.2-0.3-0.2-0.2-0.2 0-0.1-0.3 0.1-0.5 0.2-0.5 0.1-0.4 0.3-0.2 0.1 0 0.2 0 0.1 0 0.5-0.4 0.1 0 0.4-0.1 1.6-0.6 0.5-0.1 0.8-0.1 0.1 0.1 0.1 0.3 0.2 0.1 0.1 0 0.2-0.1 0.2 0 0.4 0 0.9 0.1 0.9 0.1 0.7 0.4 0.3 0.8 0.1 0.8 0.1 0.4 0.2 0.2 0 0.1 0.7 0.8 0.4 0.8 0.2 0.3 0.1 0 0.1 0 0.1-0.1 0.7 0.6 0.2 0.1 0.3-0.1 0.4-0.2 0.3-0.3 0.5-0.5 0.2-0.2 0-0.2 0.1 0 0.3-0.1 0.2-0.2 0.3-0.5 0.4-0.2 0.4 0 0.4 0 0.1 0.1 0.4 0.3 0.2 0 0.8 0 0.2 0.1 0.1 0 0.1 0.1 0.1 0.1 0.6 0.1 0.2 0 0.3 0.4 0.7 1.3-0.2 0.3-0.1 0.5 0 0.9-0.5 1.4-0.1 0.3 0.3 0.1 0.3-0.3 0.3-0.4 0.1-0.2 0-0.1 0.2-0.5 0.3-0.4 0-0.2-0.1-0.2-0.1-0.3 0-0.8 0.3-0.6 0.4-0.4 0.5-0.4 0.7-0.2 0.9-0.2 1 0 0.8 0.2 0.4 0.1 0.3 0.1 0.2 0.3 0.2 0.4 0 0.6 0.3 0.9 0.6 1.1-0.1 0.7-0.3 0.8 0.1 0.7 0 0.5 0.1 0.4 0.2 0.4 0.5 0.1 0.3-0.1 0.4-0.1 0.3-0.2 0.3-0.2 0-0.1-0.1-0.2-0.1-0.2 0.4-0.1 0.1-0.1 0.1-0.2 0-0.2 0.1-0.2 0.3 0.3 0.2 0.4 0.2 0.4z"
                                id="IDNB" name="Nusa Tenggara Barat">
                            </path>
                            <path data-tooltip-target="tooltip-IDSN"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#585858"
                                d="M558.6 278.2l1.2 0 0.6 0.1 0.4 0.3-0.2 0.4-0.7 0.2-0.6 0.1-0.3-0.2-0.3-0.2-1.2-0.2-0.4-0.2-0.4 0.1-0.4 0.1-0.5-0.1-0.3-0.1-0.1-0.2-0.1-0.1 0.1-0.2 0.1-0.1 0.3-0.2 0.4 0.1 0.7 0.3 1.7 0.1z m-4-4.1l0.3-0.3 0.2-0.1 0.1 0.4-0.1 0.3-0.1 0.5-0.1 0.3-0.6 0.1-0.7 0-0.4-0.2-0.1 0.3-0.2 0.2-0.7-0.4-0.3-0.4 0.1-0.3-0.5 0.1-0.4-0.2-0.3 0.1-0.1-0.4 0.1-0.2 0.5 0.3 0.5-0.2 0.1-0.5-0.1-0.4 0.1-0.5 0.3 0.2 0.4 0 0.5 0.7 1 0.4 0.3 0.2 0.2 0z m6.5-82.7l0.1-0.1-0.2-0.6-0.2-0.5-0.2 0.2-0.1 0-0.1-0.2-0.2-0.5-0.1-0.2-0.2 0.2-0.1 0.4-0.1 0.1-0.2 0-0.2-0.2-0.1-0.1-0.1-0.2 0.1-0.3 0.3 0 0.3-0.1 0.1-0.5 0.4 0.1 0.2-0.1 0.3-0.5 0.1 0.1 0.1 0-0.6-1.2-0.3-0.2 0.1 0-0.2-0.2-0.3-0.2-0.2-0.1-2.3-0.4-0.3 0-0.2 0.1-0.2 0-0.2-0.2-0.2-0.2-0.2-0.1-0.2-0.1-0.2 0-0.5 0-0.3 0.1-0.2 0.2-0.3 0.1-0.5 0-0.3 0.1-1 0.6-0.4 0-0.4 0.1-0.4 0.1-0.2 0.3-0.1 0.3-0.2 0.4-0.3 0.3-5 3.1-0.7 0.6-0.5 0.3-0.5 0.1 0.1 0.3 0.3 0.3 0.1 0.3 0 0.3 0.1 0.2 0.1 0.2 0.2 0.1 0.2 0.2 0.3 1 0.2 0.4-0.1 0.1-0.1 0-0.2 0.3 0.4 0.4 0.4 0.2 0.9 0.4 0.6 0.3 0.1 0.1 0.1 0.2 0 0.3 0.2 0.3 0.1 0.1 0.4 0-0.1 0.2-0.3 0.3-0.1 0.3 0 0.2 0.1 0.2 0 0.2-0.1 0.3-0.1 0.8 0 0.1 0.2 0.4 0 0.3 0 0.2-0.1 0.3-0.1 1 0.1 0.3 0.3 0.9 0.1 0.4 0 1.7 0.1 0.1 0.3 0.4 0.1 0.7-0.3 0.8-0.9 1.2-0.3 0.6-0.2 0.7-0.2 0.7 0 3.4 0.1 0.3 0.4 0.7 0.1 0.3 0 0.8 0 0.2-0.1 0.4 0 0.2 0 0.3 0.2 0.6 0 0.7-0.5 1.2 0.1 0.7 0.5 0.6 0.2 0.4-0.1 0.3-0.1 0.3 0 0.5 0.1 0.5 0.1 0.4 0.2 0.4 0.6 0.6 0.2 0.4-0.1 0.2-0.2 0.2-0.4 0.3 0 0.2-0.4 1.9 0 0.5-0.2 0.3-0.4 0.2-0.5 0-0.3 0.1-0.3 0.6-0.1 2.4-0.4 2.4-0.2 0.4-0.2 0.3 0.8 1.2 0.2 0.4 0.2 0.8 0.2 0.3 0.9 1 0.1 0.3 0 0.4 0.9 3.1 0.1 0.8 0.1 0.1 0.3 0.6 0.1 0.4-0.1 0.1-0.5-0.3-0.3 0.1-0.7-0.8-0.1-0.2-0.1-0.3-0.3-0.6-0.2-0.2-0.5 0-0.5 0.1-0.4 0.3-0.5 0.2-0.9 0.1-0.1 0.1-0.5 0.3-0.3 0.2-0.8 0.2-0.4 0.2-0.1-0.1-0.1-0.1-0.3 0-1.2-0.2-0.3-0.1-0.2-0.2-0.5 0-0.6 0.1-0.3 0-0.3 0.2-0.9 0.9-0.1 0.2-0.1 0.4 0 0.2-0.4 0.3-0.4 0.3-0.7 0.2-0.9 0-0.9-0.1-0.6-0.4-0.1-0.4 0-0.4-0.2-0.4-0.5-0.2-0.4 0.3-0.2 0.4-0.2 0.3-0.3-0.3-0.1-0.2 0-0.5 0-0.2-0.2-0.2-0.2-0.2-0.1-0.1-0.1-0.3-0.3 0-0.5 0.1-0.4 0.2 0.3 0.5-0.5 0-0.3-0.2-0.1-0.3-0.1-0.4 0.1-0.2 0.1-0.2 0.1-0.2-0.1-0.2-0.1-0.2-0.2-0.4-0.7-0.9-0.4-0.8-0.1-0.8 0.1-1 0.2-0.6 0.1-1.3 0.1-0.4 0.3-0.7 0.2-0.6 0.1-0.2 0.1-0.1 0.4-0.2 0.2-0.1 0.3-0.4 0.1-0.4 0.1-0.7 0.2-0.6 0.8-1.4 0.1-0.7-0.7-2.5 0.1-0.8 0.1-0.1 0.3-0.1 0.2-0.2 0.2-0.6 0.1-0.3 0.8-1.4 0.2-0.3 0.3-2.9 0.3-1.3 0.1-0.8 0-0.2-0.1-0.3-0.1-0.2 0-0.2-0.3-0.3-0.1-0.2 0.1-0.4 0.4-0.8 0.1-0.4-0.2-0.8-0.1-0.2-0.1-0.1 0-0.3 0.2-0.3 0-0.2 0.1-0.2-0.1-0.3 0-0.3 0.5-0.6 0.1-0.3-0.4-0.2-0.4 0.1-0.2 0.2 0 0.4-0.1 0.4-0.1-0.3-0.1-0.8-0.3-0.6-0.9-2.2-0.5-0.7-0.2-0.8-0.6-0.8 0-0.2 0.3-0.7 0.2-1 0.2-0.4 0.3-0.4 0.1-0.3 0-0.3-0.3-1-0.1-0.1 0-0.1-0.2-1.2-0.4-1.1 0-0.3-0.1-0.7-0.1-0.8 0-0.1-0.2-0.2-0.5-0.5 0-0.2-0.1-0.3 0.1-0.2 0.1-0.2 0.2-0.1 0.2-0.1 0.2 0.1 0.3 0.1 0.2 0 0.3-0.1 0.3-0.1 0.7-0.5 0.4-0.2 0.4-0.2 0.9-0.2 0.2-0.1 0.1-0.2-0.2-0.3-0.5-0.7-1.3-3.1-0.1-0.3 0-0.4 0-0.4 0.1-0.4 0-0.3 0-0.2-0.5-0.9 0.3-0.2 0.6 0 0.3-0.1 0.4 0.1 0.8 0.2 0.5 0 1.3-0.4 0.7-0.4 0.3-0.2 0.1-0.3 0-0.1 0-0.2-0.2-0.1-0.1-0.1-0.1-0.2 0.1-0.3 0.1-0.4 0-0.2-0.7-0.9-0.1-0.8 0.1-0.5-0.1-0.3-0.1-0.2-0.2-0.3-0.1-0.2 0-0.2 0.3-0.5 0.1-0.4-0.1-0.2-0.2-0.3-0.2-0.3-0.7-0.6-0.3-0.1-0.4-0.2-0.2-0.1-0.1-0.2 0-0.3 0.1-0.3 0.1-1 0-0.4 0.3-0.3 2.1-1.9 0.2-0.1 0.3 0 0.2 0 0.2-0.1 0.3-0.2 0.2-0.3 0.9-1.8 0.7-0.3 1.2-0.7 1.6-0.9 0.4-0.1 0.7 0 1.1 0.1 2.6 0.8 0.6 0.1 0.5-0.1 0.1-0.2 0.1-0.1 0.2-0.5 0.1-0.2 0.2-0.2 0.5 0 0.4 0.2 0.4 0.3 2.1 3.2 0.7 0.8 0.7 0.7 2.8 2.3 0.8 0.4 10.7 2.2 1 0.3 1 0.5 0.4 0.3 0.4 0.3 1.1 1.3 1.3 1 0.5 0.4 2.1 1.1 0.4 0.3 0.3 0.4 0.2 0.4 0.1 0.5 0.1 0.5 0 0.4-0.1 0.4-0.1 0.4-0.3 0.4-3.1 3.2-0.3 0.2-1.3 0.8-0.4 0.1-0.2 0.1-0.3 0-0.3 0-0.8-0.5-1.6-1.4-1.5-0.9-0.3-0.2-0.3 0-0.4-0.1-0.4 0-0.8 0.2-0.7 0.2-0.9 0.5z m-10.6 60.1l0.1 0.8 0.1 0.9 0 0.8-0.1 0.9-0.5 1.2 0 0.5 0.1 1-0.1 0.8-0.1 1-0.2 0.3-0.2 0.4 0 0.4 0 0.8-0.1 0.4-0.1 0.4-0.2 0.1-0.2-0.9-0.1-0.6-0.1-0.4 0.2-2.1-0.1-0.2-0.1-0.1-0.3-0.1-0.1-0.2 0.1-0.2-0.1-0.2-0.2-0.6-0.1-0.2 0.1-0.2 0.3-0.4 0.1-0.3 0-1.2-0.2-2 0.1-2.7 0.2-0.9 0.3-0.6 0.2-0.1 0.1 0.1 0.1 0.1 0.1 0.2 0 0.5 0.1 0.3 0.2 0.3 0.1 0.3 0.1 0.4 0.5 1.3z m24.4 28l0.7-0.2 0.4 0.4-0.1 0.7-0.4 0.3-0.7 0.2-0.4 0-0.1-0.4 0-0.3 0.2-0.3 0.1-0.3 0.3-0.1z"
                                id="IDSN" name="Sulawesi Selatan">
                            </path>
                            <path data-tooltip-target="tooltip-IDJT"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#39B54A"
                                d="M375 267.3l-0.1 0.1-0.8 1.2-0.2 0.5 0 0.4-0.3 1.8-0.1 0.5 0.1 1.7-0.1 0.7 0 0.3 0.2 0.8 0 0.2 0 0.2-0.3 0.2-0.8 0.7-0.3 0.3-0.3 0.3-0.6 0.4-0.4 0.3-0.2 0.1-0.1 0.1-0.1 0.1-0.1 0.2-0.1 0.2 0 0.2-0.8-0.1-1.2-0.5-0.3-0.1-0.3-0.2-0.1 0-0.2 0-0.1 0.1-0.2 0-0.3-0.1-0.4-0.2-0.5-0.1-0.3 0.3-0.1 0.9 0 0.9 0.1 0.6-0.1 0.4-0.3 2.5 0.3 1 0.1 0.4 0.3 0.2-0.2 0.3-0.5 0.3 0 0.2 0 0.1 0 0.2 0.1 0.1 0 0.4 0 0.3 0.4 0.2 0.6 0 0.3 0.1 0.2 0.2 0.5 0.6 0.2 0.2 0.1 0.3 0.1 0.2-0.1 0.8-0.1 0.5-0.3 0.9-0.1 0.6-0.1 0.2-0.2 0.1-0.2 0-0.2-0.1-0.2-0.1-0.1-0.1-0.3 0.1-0.4 0.3-0.4 0.2-0.5 0.2-1 0.6-1.2 1.1-0.8 0.4-0.3 0.4-0.3 0.3-0.1 0.2 0 0.1 0 0.5 0 0.1 0 0.2-0.3 0.9 0 0.2-0.1 0-0.2-0.1-1.7-0.4-0.2-1.4-0.1 0-0.1 0-0.1 0.1-0.2 0-0.2-0.1 0-0.2-0.1-3.5-0.2-0.5 0-1 0-0.2-0.1-0.2-0.1-0.2-0.4-0.2-1-0.1-0.3-0.1-0.7 0-0.4 0-1.1 0-0.8-0.2-0.6-0.6-0.3-0.5-0.3-0.7-0.7-3-0.1-0.2-0.5 0.6-2.2 1.6-0.2 0.2-0.4 0.5-0.2 0.2-0.1-0.1 0-0.2-0.1-0.5-0.1-0.1-0.1 0-0.1 0.1-0.1 0-0.2 0-1.2-0.2-0.4 0.2-0.2 0.2 0 0.2 0 0.6-0.1 0.3-0.1 0.4-1 1.5-0.4 0.4 0 0.2-0.1 0.4-0.2 0-2-0.6-0.5-0.4-0.4 0.2-0.7-0.2-0.8-0.3-1.1-0.2-1.9-0.6-3.4-0.4-0.8 0.2-0.4 0.1-0.2-0.2 0-0.2-0.1 0-0.2-0.1-0.1-0.1 0.1-0.1 0.1-0.2 0-0.1-0.1-0.1-0.6-0.2-3.4-0.3-2-0.2-1 0.3-0.3 0.4-0.2 0.2-0.1 0-0.6-0.5-0.2-0.1-0.3 0-0.4 0-0.4-0.1-0.4-0.1-0.2-0.3-0.1-0.9-0.2-0.4-0.3 0.1-0.1 0.1-0.5 0.2-0.2 0.1-0.2 0.4-0.2 0.2-1.1-1-0.1-0.1-0.1-0.1 0-0.3 0.1-0.2 0.1-0.3 0-0.3 0-0.3-0.4-1.4-0.1-0.9-0.1-0.3 0-0.2-0.1-0.1-0.3-0.1-0.2-0.1-0.1 0-0.1-0.5-0.1-0.2-0.1-0.1-0.2 0-0.5 0.2-0.2-0.1-0.1-0.1-0.2-0.4-0.4-0.1-0.5-0.1-0.2-0.6 0.5-1.6 0-0.4 0.1-0.3 0.2-0.3 0.2-0.2 0.4-0.1 0.3 0 0.8 0.1 0.5 0 0.2-0.1 0.2-0.1 0.5-0.4 0.3-0.2 0.2-0.3 0.3-0.2 0.1-0.3 0.1-0.2 0-0.4-0.1-0.6 0.2-1 0.1-0.3 0.4-0.8 1.4-1.6 0.2 0.2 0.2 0.2 0.2 0.2 0.4 0.1 0.5 0 0.3-0.1 0.1-0.3 0-0.5 0.2-0.3 0.4 0 0.4 0.1 0.3 0.2 0.7 0.6 0.5 0.1 0.5 0.3 0.2 0.1 0.5-0.1 3.5 0.4 1.7-0.3 1-1.1 0.8 0.6 3.8 0.6 3.4 1.1 0.9 0.1 0.9 0 2.5-0.4 0.5-0.1 0.2-0.2 0.1-0.1 0.3-0.5 0.2-0.1 0.2 0.1 0.1 0.2 0 0.2 0.1 0.2 0.3 0.2 0.9 0.4 0.7 0.2 0.8 0.6 0.4 0.3 0.5 0 0.4-0.1 0.3-0.2 0.4-0.1 0.4-0.1 0.3-0.1 0.3-0.1 0.8-0.9 0.9-1.2 1.4-2.9 0.3-0.9 0.1-0.7 0-0.8 0.1-0.4 0.2-0.3 0.1-0.2-0.3-0.4 0.5-0.1 0.2-0.2 0.3-0.4 0.2-0.2 1-0.4 0.6-0.1 0.2-0.1 0.3-0.1 0.1-0.1 1.2-0.1 0.5-0.2 0.1 0.2 0.6 0.3 0.2 0.1 0.4 0 0.2 0 0.1-0.1 0.1-0.1 0.1 0.1 0.2 0.2 0.3 0.2 0.2 0.2 0.1 0.3 0.1 0.7 0.4 0.7 0.7 2.1 0.4 0.7 0.1 0.2 0.1 0 0.2 0 3.6 0.4 0.5 0 0.8-0.2 0.4-0.1 0.3-0.2 0.7-1 0.3-0.3 0.5 0.3 1.2 0.3 0.6 0.2 0.2 0.2 0.7 0.9 0.4 0.3z m-52.5 20.4l0.1 0.1 0.3 0 0.1 0.1-0.1 0.2-0.1 0.1-0.2-0.1-0.5-0.1-1.1-0.3-1.2-0.3-0.2-0.1-0.3-0.1-0.9 0.1-0.3-0.1-0.1-0.2 0.1-0.4 0.2-0.3 0.3-0.2 1 0.5 1 0.2 0.7 0.2 1 0.6 0.2 0.1z m27.9-38.2l0.6-0.1 0.1 0.1-0.1 0.4-0.2 0.3-0.3 0.1-0.1-0.1-0.1-0.2-0.1-0.3 0-0.1 0.2-0.1z"
                                id="IDJT" name="Jawa Tengah">
                            </path>
                            <path data-tooltip-target="tooltip-IDJB"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#07410F"
                                d="M320 268.9l-1.4 1.6-0.4 0.8-0.1 0.3-0.2 1 0.1 0.6 0 0.4-0.1 0.2-0.1 0.3-0.3 0.2-0.2 0.3-0.3 0.2-0.5 0.4-0.2 0.1-0.2 0.1-0.5 0-0.8-0.1-0.3 0-0.4 0.1-0.2 0.2-0.2 0.3-0.1 0.3 0 0.4-0.5 1.6 0.2 0.6 0.5 0.1 0.4 0.1 0.2 0.4 0.1 0.1 0.2 0.1 0.5-0.2 0.2 0 0.1 0.1 0.1 0.2 0.1 0.5 0.1 0 0.2 0.1 0.3 0.1 0.1 0.1 0 0.2 0.1 0.3 0.1 0.9 0.4 1.4 0 0.3 0 0.3-0.1 0.3-0.1 0.2 0 0.3 0.1 0.1 0.1 0.1 1.1 1-0.2 0.1-0.5 0.4-0.5-0.3-0.2 0-0.1-0.1-0.2-0.1-0.2 0-0.2 0.1-0.2 0.2-0.2 0.2 0.2 0.4-0.1 0.1-0.1 0.1-0.4-0.1-0.1-0.5-0.1-0.1-0.3 0-1.3 0-0.4 0.1-0.6 0.6-0.1 0.9-0.2 0.5-0.8 0.5-2.5 0-3.8-0.6-3.6-0.9-1-0.1-0.8 0.2-0.6-0.3-0.1-0.6-0.4-0.3-0.6-0.1-1.2-0.2-0.6-0.2-0.2-0.4-0.3-0.5-0.7-0.4-0.7-0.5-0.7-0.2-0.5-0.2-0.9-0.3-0.3-0.4-0.3-0.1-0.4-0.1-0.1 0-0.2 0-0.1-0.2-1 0.2-1.3-0.2-1-0.1-0.7-0.1-0.6-0.2-0.7-0.2-0.7-0.2-4.7-0.4-1.6 0-3.6-0.4-1.7-0.1-0.8-0.7-0.5-0.2-0.5-0.1-0.5 0.3-0.2 0.1 0-0.4 0.1-0.5-0.5-0.5 0.1-0.9 0-0.4 0.1-0.3 0.2-0.4 0.4-0.4 0.3-0.2 0.4 0 0.3-0.1 0.1-0.2-0.3-0.4 0.3-0.3 0.8-1 0.6-0.5 0-0.8-0.1-0.6-0.5-0.4-0.6 0.1-0.6-0.3-0.6 0.2-0.3 0.5-0.1-0.2-0.1-0.2 0-0.3 0.1-0.5 0.2-0.5 0.8-1.4 1.1-1 0-0.3-0.4-0.4-0.2-0.1-0.7-0.2-0.1-0.3-0.2-0.4-0.4-3.5 0.1-0.6 0.2-0.6 0.2-0.5 0-0.5-0.1-0.5-0.1-0.3 0.2-0.4 0.2-0.2 0.2-0.1 0.2 0 0.1 0.2 0.1 0.3 0.2 0.2 0.1 0.1 0.3-0.1 0.3-0.2 0.3-0.2 0.5 0.1 0.4 0.1 0.4 0.3 0.6 0.2 2.2 0 0.5-0.3-0.1-0.3 0-1.1 0.3 0.2 0.1 0.1 0.1 0.2 0.1 0.1 0.2 0.2 0.3 0.2 0.2 0 0.1-0.1 0.4-0.2 0.7 0.3 0.7 0.6 0.4-0.2 0.2-0.5 0.4-1.4 0.1-0.3 0.1-0.2 0-0.3 0-0.7 0.1-1.1 0-1.3 0.1 0 0.2-0.2 0.1-0.3 0.1-0.3 0-0.2-0.2-0.3-0.1-0.2 0.1-0.3 0.4-0.6 0-0.7 0.4-0.2 0.7 0.1 0.7 0.4 0.2 0.2 0.2 0.2 0.3 0.3 0.4 0.1 0.4 0 0.3 0 1.5-0.5 0.8 0.2 0.6 0.2 0.5 0.7 0.7 1.1 0.7 0.8 0.4 0.8 0.8 0.4 1.1 0.4 1.1 0 0.7 0.8 0.5 0.2 0.4-0.2 0.3 0.2 0.3-0.1 0.3-0.2 0.4-0.2 0.1-0.1 0.2 0 0.2 0 0.2 0.1 0.2 0 0-0.2 0-0.2 0.3-0.1 0.4 0.1 0 0.3 0.3 0 0.3-0.3 0.1-0.1 0.3 0.5 0 0.4 1 0.6 0.8 0.4 1.2 0.6 0.5 0.1 0.4 0.2 0.4 0 0.3 0 0.2-0.1 0.4-0.2 0.4-0.3 0.1 0 0.2-0.2 0.1-0.2 0.1-0.3 0-0.2-0.2-0.2-0.2-0.2 0.2-0.1 0.4 0.2 0.6 0.2 1.3 0.1 0.4 0.2 0.1-0.2 0.4-0.1 0.1 0.5 0.2 1.4 1.6 2 0.4 0.2 0.3 0.1 1 0.6 0.7 3.6 0.6 1.9 1.1 0.1 0.9 0.5 0.8 0.4 0.9-0.1 0.8-0.4 0.2 0.2 0.3 0.1 0.3 0 0.3 0.1 0.1 0.1z"
                                id="IDJB" name="Jawa Barat">
                            </path>
                            <path data-tooltip-target="tooltip-IDJK"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#07410F"
                                d="M282.3 254.3l0 1.3-0.1 1.1 0 0.7 0 0.3-0.1 0.2-0.1 0.3-0.4 1.4-0.2 0.5-0.4 0.2-0.7-0.6-0.7-0.3-0.4 0.2-0.1 0.1-0.2 0-0.3-0.2-0.2-0.2-0.1-0.1-0.1-0.2-0.1-0.1-0.3-0.2-0.1 0-0.3-0.3-0.2-0.9-0.6-0.6-0.3-2.2 0.2-0.3 0.6-0.5 0.1 0 0 0.1 0.2 0.4 0.2 0.2 0.8 0.2 0.9-0.1 3-0.4z"
                                id="IDJK" name="Jakarta Raya">
                            </path>
                            <path data-tooltip-target="tooltip-IDBT"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#07410F"
                                d="M277.8 258.7l0 1.1 0.1 0.3-0.5 0.3-2.2 0-0.6-0.2-0.4-0.3-0.4-0.1-0.5-0.1-0.3 0.2-0.3 0.2-0.3 0.1-0.1-0.1-0.2-0.2-0.1-0.3-0.1-0.2-0.2 0-0.2 0.1-0.2 0.2-0.2 0.4 0.1 0.3 0.1 0.5 0 0.5-0.2 0.5-0.2 0.6-0.1 0.6 0.4 3.5 0.2 0.4 0.1 0.3 0.7 0.2 0.2 0.1 0.4 0.4 0 0.3-1.1 1-0.8 1.4-0.2 0.5-0.1 0.5 0 0.3 0.1 0.2 0.1 0.2-0.1 0.1-0.4 0.1-0.5 0.1-0.5-0.1-0.2-0.1-0.2-0.1-0.2 0-0.2-0.1-0.1 0-0.2-0.3-0.1-0.1-0.3 0-0.1-0.1 0-0.1-0.1-0.2-0.1-0.1-0.8-0.5-0.6 0-0.9-0.4-1.4-1.1-0.9-0.3-0.6-0.1-0.3 0-0.4 0-0.4 0.1-0.4 0.1-0.1 0.3-0.2 0.1-0.2-0.3-0.4 0.1-0.6 0-0.6 0.1-0.4 0.1-0.4-0.1-0.6-0.1-0.4-0.1-2.1 0.3-0.8 0.1-0.4 0.4-0.8-0.3-0.2 0.2-0.3-0.3-0.2-0.2-0.4 0-0.2 0.2-0.2 0.1-0.1-0.1 0-0.2-0.1-0.1-0.1-0.1-0.1-0.1-0.9-0.3-0.9-0.1-0.2 0.1-0.1 0.4-0.1 0.1-0.1 0.2-0.2 0-0.4-0.1-0.1-0.4-0.2-0.7-0.3-0.2-0.1-0.1 0-0.2 0.2 0 0.6 0.1 0.3-0.1 0.4-0.3 0.5-0.6 0.2-0.3 0.1-0.4 0.2-0.2 0.4-0.2 0.2 0.1 0.3 0.3 0.2 0.2 0.2 0.3 0 0.2 0 0.2 0 0.2 0.5 0.8 0.1 0.3 0.3 0.3 0.3 0.1 0.4-0.1 0.2-0.4 0.3-0.9 0.2-0.4 1.6-1.4 0.3-0.4 0.1-0.3-0.2-1.7 0.5-1 0.3-0.2 0.4 0.1 0.1 0.7 0.3 0.2 0.3 0.2 0.5 0 0.9-0.4 0.5-0.7 0.3-0.8-0.1-0.7 0.2-3.4 0.2-0.8 0.5-1.6 0.4-0.8 1.4-1.4 0.2-0.1 0.2-0.2 0.4-1.3 0.5-0.5 0.6-0.3 0.6 0.1 0.5 0.5 0.1 1.3 0.1 0.2 0.2 0.1 0.6 0.4 0.3 0.1 0.7-0.3 0.4-0.7 0.5-0.5 0.9 0.1 1.2 1 0.5 0.1 0.5 0.1 1.2 0.6 0.5 0 0.3-0.2 0.3-0.2 0.4-0.2 2.3 0.1 0.4 0.1 0.4 0.1 0.3 0.2 0.2 0.4 0 0.2-0.1 0-0.6 0.5-0.2 0.3 0.3 2.2 0.6 0.6 0.2 0.9 0.3 0.3 0.1 0z m-29.6 4.5l0 0.5 0 0.8-0.2 0.7-0.3 0.3-0.3 0.1-0.4 0.5-0.2 0.1-0.2-0.1 0-0.4 0.2-0.3 0.2-0.3-0.3-0.1-0.1-0.2-0.1-0.5-0.9 0.9-0.2 0.1-0.1-0.4 0.4-0.5 1-0.8 0.2 0.1 0.1-0.1 0.2-0.2 0.2 0 0.1 0 0.1-0.1 0.2-0.1 0.2 0 0.2 0z"
                                id="IDBT" name="Banten">
                            </path>
                            <path data-tooltip-target="tooltip-IDYO"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#39B54A"
                                d="M342.7 290.3l0.1-0.4 0-0.2 0.4-0.4 1-1.5 0.1-0.4 0.1-0.3 0-0.6 0-0.2 0.2-0.2 0.4-0.2 1.2 0.2 0.2 0 0.1 0 0.1-0.1 0.1 0 0.1 0.1 0.1 0.5 0 0.2 0.1 0.1 0.2-0.2 0.4-0.5 0.2-0.2 2.2-1.6 0.5-0.6 0.1 0.2 0.7 3 0.3 0.7 0.3 0.5 0.6 0.6 0.8 0.2 1.1 0 0.4 0 0.7 0 0.3 0.1 1 0.1 0.4 0.2 0.1 0.2 0.1 0.2 0 0.2 0 1 0.2 0.5 0.1 3.5 0 0.2 0.2 0.1 0.2 0 0.1-0.1 0.1 0 0.1 0 0.2 1.4-2.6-0.2-0.2 0-0.3-0.3-0.1-0.1-0.5 0-0.4-0.2-0.7-0.3 0 0.1-1.1-0.5-0.5-0.1-0.5-0.1-0.4-0.1-1.3-0.7-0.2 0-0.2 0-0.2-0.1-0.1-0.1-0.5-0.5-0.1-0.1-0.3-0.3-0.2-0.1-0.6 0-4.9-2.6z"
                                id="IDYO" name="Yogyakarta">
                            </path>
                            <path data-tooltip-target="tooltip-IDSG"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#585858"
                                d="M620.1 252l0.1 0.4 0 0.5-0.3 0.4-0.3-0.2-0.1-0.2 0-0.4-0.1-0.3-0.3-0.1-0.5-0.2-0.2-0.1-0.3-0.4 0-0.4 0.1-0.4 0.2-0.5 0.1 0.2 1 0.7 0.2 0.2 0.2 0.5 0.2 0.3z m-5.7-9l0.4 0.2 0.2 0.5 0 0.5 0.1 0.5-0.4-0.2-0.3-0.3-0.5-0.8-0.4-0.3-0.3-0.2-0.3-0.3-0.2-0.4 0.2 0 0.6 0.1 0.3 0.3 0.3 0.3 0.3 0.1z m-4.7-5.3l0.4 0.2 0.7 0 0.5 0.2 0.3 0.5 0 1.1-0.1 0.4-0.3 0.2-0.5 0-0.4-0.2-0.3-0.3-0.7-1.5 0-0.5 0.4-0.1z m-24.1-34.4l0.2 0.1 0.2 0.3 0.2 0.3 0 0.2-0.1 0-0.4 0.1-0.4 0.2-0.3 0.2-0.2-0.4 0.2-0.4 0.2-0.4 0.4-0.2z m2.3-1.8l0.4 0.3 0.1 0.1 0 0.2-0.1 0.3-0.2 0.3-0.3 0.1-0.2-0.2-0.2-0.3-0.2-0.6 0-0.2 0-0.2 0-0.3 0.2-0.1 0-0.1 0.1 0 0.1 0.1 0.1 0.1 0.1 0.3 0.1 0.2z m-26.8-10.1l0.9-0.5 0.7-0.2 0.8-0.2 0.4 0 0.4 0.1 0.3 0 0.3 0.2 1.5 0.9 1.6 1.4 0.8 0.5 0.3 0 0.3 0 0.2-0.1 0.4-0.1 1.3-0.8 1.4 0.2 2.2 0.1 0.7 0.2 4.8 1.9 0.4 0 1.1-0.1 0.3 0.1 0.4 0 0.3 0.2 0.4 0.2 1.7 1.3 0.9 1.2-0.3 0.4-0.5 1.1 0.1 0.5 0.3 0.1 0.8 0.4 0.3 0.2 0.1 0.3 0.1 0.6-0.1 0.4-0.3-0.1 0.1-0.2-0.1-0.2-0.3-0.2-0.4 0 0.1-0.2 0-0.1-0.2-0.3-0.2-0.1-0.4-0.1-0.3-0.2 0 0.2-0.1 0.2-0.2 0.1-0.2-0.1 0 0.4 0.2 0.3 0.2 0.2 0.2 0.3 0.2 0.3 0 0.4-0.2 0.4-0.3 0.6-0.1 0.2-0.1 0-0.2 0.2-0.3 0.1-0.4 0.1-0.2 0.1-0.1 0.3 0.2 0.4 0.4 0.7 0.2 0.3 0.3 0.3 0.3 0.2 0.4 0 0.3 0.2 0.2 0.2 0.2 0.3 0.2 0.3 0.4 0.2 0.5 0 0.8-0.1 0.4 0.2 0.3 0.3 0.3 0.8 1.2 1.5 0.4 0.3 0.4 0.1 1.3 0 0.2 0 0.2 0.1 0.1 0.2 0.1 0.2 0 0.2-0.4 0.1-0.2 0.1-0.1 0.1-0.1 0.4-0.3 0-0.5 0.1-0.4 0.1-0.3 0.1 0 0.1 1 0.1 0.4 0.1 0.4 0.2 0.3 0.2 0.1 0.4 0.1 0.3-0.1 0.9 0.1 0.3 0.2 0.4 0.2 0.3 0.3 0.1 0.1 0 0.1-0.2 0-0.2 0-0.1 0.5 0.3 0.8 0.1 0.8 0 0.5-0.1-1.1-1.1-0.3-0.5 0.7-0.2 0.7 0.3 0.6 0.7 0.3 0.9 0.3 1.2 0.1 0.4 0 0.4-0.3 0.6 0 0.4 0.2 0.8 0 0.8-0.1 0.4-0.3 0.2-0.3 0-0.2 0.2-0.1 0.3-0.2 0.3-0.3-0.4-1.4-1-0.7-0.7-0.5-0.3-0.5-0.1 0.2 0.4 0.8 0.8 0.1 0.2 0.2 0.3 0.1 0.2 0.1 0 0.3 0 0.1 0 0 0.2 0 0.1 0 0.1 0.1 0.3 0 0.1 0 0.4-0.1 0.2-0.2 0.1-0.2 0-0.2 0-0.5-0.6-0.2 0-0.1 0.1 0 0.1 0.1 0.2-0.2 0.2-0.2-0.1-0.2-0.4 0-0.5-0.6-0.5-0.8-0.2-0.7 0.2-0.7 0.4-0.7 0.1-0.6-0.1-0.7-0.2-0.7 0.4-0.9 0.3-0.8 0.2-1.3 0-0.2 0.1-0.1 0.1-0.4 0.2-0.1 0.1-0.5 0.1-0.3 0.3-0.2 0.1-0.7 0.1-0.2 0-0.4 0.5-0.4 0.7-0.3 0.9-0.2 0.8 0.1 0.8 0.3 0.7 0.4 0.6 0.5 0.4 0.1 0.1 0.4 0.1 0 0.1-0.4 0.1-0.4 0.5-0.3 0.1-0.4 0-0.9 0.2-0.4 0.1-2-0.2-0.4-0.1-0.5-0.4-0.4-0.2-0.3 0-0.3 0.1-0.5 0.1-0.3-0.1-0.2 0-0.1 0.2-0.2 0.1-0.3 0.1-0.1 0-0.4-0.3-0.6-0.7-0.3-0.1-0.3-0.1-1.2-0.5-0.2-0.2-1-1.3-0.1-0.2-0.1-0.1-0.1 0-0.1-0.1-0.1-0.6 0-0.9 0.4-1.6 0.4-1.2 0.2-0.8 0.1-0.8-0.1-1.6 0.1-0.6 0-0.2 0-0.1 0.2-0.1 0.3 0 0.1 0.1-0.1 0.2-0.1 0.2 0.6-0.3 0.6-1.4 0.2-1.6-0.6-0.9-0.8-0.4-2.5-0.4-1.5-0.6 0-0.2-0.3-0.3-0.1-0.2 0-0.2-0.1-0.2-0.3-0.3-0.3-0.2-0.2 0-0.3 0.2-0.3 0.1-0.2-0.2 0.1-0.4 0.2-0.5 0.1-0.3-0.2-0.4-0.3-0.1-0.8 0-0.5-0.1-0.3-0.1-1.1-1.4-4.2-3.7-0.4-0.8-0.1-0.6 0-0.2 0.1-0.3 0.1-0.4 0.1-0.2 0.1-0.5 0.4-0.4 0.5-0.4 0.3-0.4 0.4-0.9 0.2-0.3 0.3-0.2 0.2 0 0.2-0.1 0.2-0.2 0-0.2 0.1-0.1 0.2-0.1 0.3-0.1 0.1-0.1 0.1-0.4 0.2-1.1 0-0.4-0.1-0.5-0.1-0.3-0.2-0.1-0.1-0.1 0.1-0.3 0.3-0.6 0-0.3 0.1-0.3 0.1-0.3 0-0.8 0.1-0.2 0-0.3z m19.4 45.7l0 0.2-0.2 0-0.1 0.1-0.1 0.2 0.1 0.6 0.1 3.2-0.2 0.4-0.3 0.3-0.3 0-0.4-0.1-0.3 0.1-0.2 0-0.6-0.9-0.3-0.3-0.3-0.1-0.2 0-0.1-0.1-0.2-0.1-0.1-0.2-0.2-0.4-0.8-1.2-0.4-0.8 0.1-0.2 0-0.6 0.1-0.2 0.2-0.2 0.1-0.3 0.1-0.2 0.1-0.3 0.1-0.1 0.5-0.1 0.2-0.1 0-0.2-0.2-0.2-0.4-0.4 0.2-0.3 0.3-0.3 0.4-0.3 0.3-0.1-0.1 0.3 0 0.3 0.2 0.2 0.4 0 0.1 0 0.3-0.5 0.2 0 0.2 0 0.1 0.2 0.2 1.2 0.3 0.3 0.5-0.1 0.2 0.3 0.2 0.2 0.2 0.3 0 0.5z m14.1-5.9l0 0.4 0 0.2-0.1 0.2-0.2 0-0.2-0.1-0.2 0-0.1 0.2-0.1 0.2-0.2 0.3-1.2 1.3-0.4 0.5-0.7 1.6-0.1 0.4 0.1 0.2 0.2 0 0.3 0 0.1 0.1 0 0.2-0.1 0.2-0.2 0.2-0.5 0.1 0.2 0.1 0.5 0.2 0.3 0.2 0.1 0.1 0.1 0.3 0 0.4 0 0.5-0.2 0.5-0.2 0.2-0.2-0.3-0.2 0.3-0.1 0.5-0.1 0.4 0 0.2-0.2 0.2-0.1 0-0.1-0.1 0-0.1-0.2 0.1-0.2 0.2-0.4 0.1-0.1-0.9 0-0.9-0.1-0.5-0.1-0.2-0.2-0.3-0.2-0.1-0.2 0.4-0.1 0.3 0.1 0.4 0 0.2-0.3 0.6-0.3 0.3-0.4 0.1-0.3-0.2-0.4-0.3-0.1-0.5 0.1-0.2 0.7-0.4 0-0.1-0.3 0-0.3-0.1-0.2 0-0.3 0.2-0.1 0.2-0.1 0.2 0 0.6-0.1 0.3-0.3 0.1-1 0-0.2-0.1-0.3-0.1-0.2-0.2 0.2-0.2-0.2-0.3-0.1-0.4 0.2-0.4 0.5-0.8 0.2-0.4 0-0.5 0.2-1.5 0.1-0.4 0.2-0.3 0.1-0.1 0.6-0.1 0.1-0.1 0-0.1 0.4-0.5-0.2-0.3 0-0.4-0.2-1-0.2-0.5-0.2-0.7-0.2-0.7-0.2-0.5-0.3-0.3 0-0.1 0.3-0.4 0.5-1 0.3-0.4 0.4-0.2 1.3-0.1 0.6-0.1 0.6-0.3 1.4-1.1 1.1-0.6 0.7-0.3 0.4 0.1 0.3 0.3 0.2 0.3 0.3 2.5 0 1.4 0.1 0.3 0.2 0.3 0.1 0.1 0 0.2 0.1 0.3 0 0.3z m7.4 6.1l0.7 0.5 0.4 0.3 0.2 0.4-0.1 0.3-0.2 0.3-0.5 0.5-0.4 0.7-0.2 0.2-0.9 0.2-0.7 0.4-0.4 0.2-0.3-0.1-0.4-0.5-0.3-0.1-0.4 0.1-1.6 1-0.4 0.2-0.2 0.8-0.1 0.2 0.1 0.1 0.2 0 0.5-0.2 0.2 0 0.2 0.5-0.5 0.9-0.9 1.3-0.4 0.8-0.3 0.2-0.5 0.1 0-0.1 0-0.5-0.1-0.2-0.2-0.2-0.1 0 0 0.1-0.3 0.4 0 0.2-0.1 0-0.2-0.1 0-0.2 0-0.5 0-0.2-0.3 0-0.6 0.8-0.3 0.2-0.5 0-0.3-0.3-1.4-3.1 1.6-1.3 0.2-0.3-0.1-0.3-0.4-0.1 0.1-0.3 0.5-0.7 0.2-0.6 0.1-0.1 0.2 0 0.1 0 0.2-0.3 0.4-0.8 0.2-0.2 0.4-0.2 0.5-0.1 0.5-0.2 0.2-0.4 0-0.3-0.1-0.1-0.9 0.4-0.1-0.1 0.2-0.3-0.3-0.2 0.1-0.3 0.3-0.4 0.1-0.3 0-0.5 0-0.3 0.4-0.6 0.1-0.3-0.1-0.3-0.1-0.1-0.3 0-0.2 0.2-0.3 0 0.2-0.4 1.1-0.9 0.2-0.3 0.1-0.5 0-0.5 0-0.4-0.1-0.2-0.1-0.2-0.1-0.2 0-0.2 0.2-0.1 0.2 0 0.2-0.1 0.1-0.3-0.1-3.3 0.1-0.8 0.3-0.8 0.6-1.2 0.1-0.4 0.1-0.3 0.3-0.2 1.9-1.5 0.4-0.1 0.6 0 0.3 0.1-0.5 0.7 0.1 0.3 0.4 0.3 1.2 1.1 0.3 0.3 0.6 0.8 0.1 0.5 0.1 0.4 0 0.2-0.2 0.4 0 0.2 0 0.2 0.1 0.1 0.2 0.1 0.1 0.1 0.1 0.7 0 2.1-0.1 0.5-0.3-0.1-0.2-0.4-0.1-0.8 0-0.1-0.2-0.3-0.1-0.1-0.2-0.1-0.1-0.2 0-0.2 0-0.2-0.6-0.1-0.3 1.1-0.5-0.5-0.1 0-0.1 0.1-0.1 0.1-0.3-0.2-0.1 0.2 0 0.9-0.1 0.1-0.3 0.3-0.1 0.2-0.2 0.6 0 0.2 0.1 0.8 0 0.4-0.5 0.3-0.3 0.4-0.1 0.4-0.1 0.2 0 0.2 0.1 0.2 0.1 0.1 0 0.2 0.2 0.5 0 0.2 0 0.5-0.1 0.3-0.5 0.9-0.1 0.5 0 0.3 0.4 0.2 0.4-0.3 0.3-0.4 0.3-0.4 0.5-0.1 0.3 0.1 0 0.2 0 0.2 0.1 0.1 0.7 0.2 0.1 0.4 0.2 0.2 0.7 0.3z m1-24.4l0.6 0.4 0.4 0.7 0 0.8-0.3 0.6-0.8 1.3-0.6 0.7-0.6 0.3-1-0.1-0.8-0.4-0.7-0.8-0.7-0.8-0.1-0.5-0.2-0.8-0.2-0.4 0.2-0.2 0.5-0.4 0.3-0.2 0.3-0.5 0.2-0.1 0.4 0.1 0.3 0.1 0.4 0.3 0.4 0.2 0.3 0 0.4-0.2 0.4-0.1 0.5-0.1 0.4 0.1z m-0.5-8.3l0 0.5-0.4 0-0.4 0-0.2 0.3-0.1 0.2-0.5-0.2-0.4-0.3-0.2-0.2-0.1-0.2 0-0.2 0.2-0.1 0.2 0 1.2-0.5 0.3 0.1 0.2 0.2 0.2 0.4z"
                                id="IDSG" name="Sulawesi Tenggara">
                            </path>
                            <path data-tooltip-target="tooltip-IDPB"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#6761C0"
                                d="M790.9 202.2l0.1 0.3 0.1 0.3 0 0.4-0.2 0.3-0.3-0.2-0.2-0.3-0.1-0.3-0.1-0.5-0.1-0.1-0.4 0-0.1-0.1-0.3-0.4 0.1-0.1 0.3-0.2 0.2-0.1 0.3 0.1 0.3 0.3 0.4 0.6z m38.9-12.2l-0.1 0-3.6 2.9-0.3 0.2-0.2 0.1-0.2 0.2 0 0.3 0.1 0.8 0 0.2-0.6 0.8-1.8 1.4-0.5 0.7-0.5 0.7-0.5 1-0.4 0.9 0 0.6 0.5 0.3 19.9 7.1-7.8 9.8-0.2 0-0.8 0.1-0.2-0.1-0.4-0.3-1-0.7-0.2-0.1 0-0.2-0.1-0.7 0-0.2-0.4-0.1-0.5 0-0.4-0.1-0.2-0.2 0.1-0.4 0.6-0.6 0.2-0.4 0-0.1-0.3-0.3-0.1-0.1 0-0.2 0.1-1.1 0.2-0.2 0.3-0.2 0.4 0 0.3 0 0.8 0.2 1.6 0.1 0.4 0.1 0.5 0.3 0.2 0.1 0.2-0.1 0.1-0.1 0.2-0.1 0.1 0 0.4-0.3 0-0.3-0.2 0.1-0.1 0.1-0.2 0.1-0.2 0-0.2-0.1 0-0.1 0-0.1 0-0.1-0.1-0.1-0.2 0-0.1 0-0.1 0.1-0.2 0-0.9 0-1.4-0.2-1.6-0.1-0.1 0-0.2-0.1-0.1 0.1-0.1 0.2-0.1 0.1-0.5 0.3-0.3 0.2-0.1 0.3-0.1 0.4-0.1 0.2-0.3 0.2-1.1 0.2-0.2 0.1-0.3-0.2-0.5-0.5-0.4-0.2 0.3-0.4-0.2-0.3-0.4-0.4-0.2-0.2-0.1-0.1-0.3-0.1-0.5 0-0.3-0.1-0.9-0.6 0.4 0.6 0.2 0.5-0.3 0.4-0.8 0 0 0.1 0.2 0.2 0.3 0.2 0.1 0.2 0.1 0.3-0.3 0.5-0.2 0-0.1-0.1-0.1-0.1-0.1-0.1-0.2-0.1-0.1-0.3-0.3-0.3-0.3-0.1-0.4 0-0.5-0.2-0.4-0.2-0.1-0.3-0.1-0.2-0.1-0.4 0-0.1-0.1-0.1-0.2 0.1-0.2 0.1-0.2 0.1-0.1-0.3 0.2-0.3 0.8-0.6 0.2-0.2-0.1-0.1-0.3-0.8-0.3-0.3-0.3-0.3-0.3-0.3-0.1 0.2 0 0.2 0 0.1 0.1 0.2-0.1 0.4 0 0.1-0.3 0.3-0.3 0.1-0.4-0.2-0.3-0.3-0.4-0.1-0.3 0.2-0.5 0.8-0.2 0.2-0.3-0.1-0.3-0.2-0.9-2.2-0.3-0.5-0.9-1-0.2-0.3 0-0.4 0-0.4-0.1-0.1-0.1-0.1-0.2 0.1-0.2 0.1-0.1 0.1-0.1 0.1-0.1 0.5 0.2 0.4 0.2 0.5 0.1 0.5 0.2 0.2 0 0.2-0.3 0-0.1 0-0.2-0.6-0.2-0.2-0.3-0.3-0.2-0.1-0.4-0.1-0.2 0.1-0.4 0.2-0.2 0-0.2-0.5 0.3-0.3 0-0.2 0-0.2-0.2-0.4-0.2-0.5-0.8-1.2-0.1-0.4 0-0.5 0.2-0.3 0.5-0.2 0.3-0.2 0.2-0.4-0.1-0.5-0.3-1.5 0-1.4 0.1-0.3 0.4 0.3 0.1-0.2 0-0.1 0-0.5 0.2-0.2 0.2 0 0.5 0.2 0.2-0.3 0.3-0.9 0.3-0.2 0.4-0.1 0.5-0.6 0.4-0.1 0.3 0.2 0.3 0.4 0.3 0.3 0.3-0.2-0.1-0.1-0.1-0.1 0-0.1 0-0.2-0.1-0.2-0.2 0-0.1-0.1-0.2-0.1-0.2-0.1-0.1-0.2-0.1-0.3-0.1-0.3 0-0.4 0.3-0.5 0.1-0.3 0-0.3-0.1-0.2-0.2-0.2-0.1-0.1-0.3 0.1-0.4 0-0.2 0.1 0.3 0.4-0.1 0.1-0.2 0.5-0.1 0.5-0.2 0.1-1.3 0.7-0.3 0.2-0.6 0.6-0.4 0.6-0.3 1.3 0.2 3.4-0.7 1.1-0.3 0.1-1.1 0.3-0.1-0.1-0.1-0.1-0.4-0.8-0.1 0-0.2-0.1 0 0.1 0.1 0.4 0 0.5-0.1 0.2-0.4-0.1 0 0.2 0.4 0.2 0.8 0.3 0.3 0.2 0.3 0.4 0.1 0.4 0.1 0.5-0.1 0.4-0.2 0.3-0.4 0.3-0.4 0.3-0.3 0.1-0.3 0.1-1.9 2-0.3 0.7 0.2 0.8 0.7 0.6 0.3 0.4-0.1 0.3-0.2 0.2-0.4 0.1-0.2 0.1-0.2 0.2-0.3 0.6-2.3 2.5-0.4 0.3-0.8 0.2-0.9 0-1.7-0.3-0.5 0-0.3 0.2-0.6 0.7-0.3 0.2-0.4-0.1-1.1-0.4-0.1 0-0.1-0.1-0.1-0.1-0.1-0.2 0-0.4-0.1-0.3-0.2-0.2-0.4-0.2-0.2-0.1-0.2-0.2-0.2-0.5-0.1-0.2-0.2-0.1-0.2-0.2-0.2-0.2-0.1-0.2 0.1-0.2 0.2 0.1 0.4 0.3 0-0.3 0-0.2-0.4-1.1-0.3-0.3-0.1-0.1 0-0.7 0-0.2-1.1-2.2 0-0.7 0.5-0.4 0.9 0.1 0.8 0.3 0.8-0.1 0.2-0.1 0-0.2 0-0.2-0.1-0.2 0.1-0.2 0.1-0.2 0.3-0.3 0.3-0.2 0.1-0.1-0.1-0.3-0.2-0.1-0.2-0.1-0.1-0.1-0.1-0.3-0.3-0.7-0.2-0.1-0.4 0-0.4-0.2-0.2-0.5-0.1-0.9-0.1-0.5 0.2-1.2-0.2-0.4-0.3-0.2-0.4-0.1-0.7 0.2-0.1 0-0.1 0.1 0 0.3 0.2 0.4-0.1 0.2-0.4 0.2-0.4 0-0.4-0.2-0.4-0.3-0.1-0.2-0.3-0.6-0.1-0.2-0.5-0.4 0-0.2 0.3-0.2 0.2-0.2 0-0.3-0.1-0.1-0.5-0.3-0.2 0-0.1-0.1-0.2-0.6-0.1-0.1-0.1-0.1-0.1-0.3-0.1-0.2-0.2-0.1-0.2-0.1-0.3-0.4-0.2-0.1-0.2 0-0.2-0.2-0.1-0.2-0.1-0.1-2.2-1.2-0.5-0.2 0.1-0.3-0.4-0.3-0.9-0.2-0.2 0-0.7 0-0.3 0-0.2-0.1-0.2-0.2-0.2-0.1-0.1 0.4-0.3 0.2-0.3 0-0.2-0.2-0.2 0.1-0.2 0-0.1 0-0.2-0.1 0.1 0.4-0.2 0.1-0.5-0.1-0.1-0.1-0.3-0.7-0.3 0.2-0.9-0.2-0.3 0.3-0.1 0 0-0.3 0.2-0.1 0.2-0.1 0.2-0.2 0.1-0.2 0.1-0.1 0.2-0.5-0.4 0-0.3-0.1 0-0.2 0.3 0 0.3-0.2 0.3-0.2 0.2-0.3-0.2-0.2-0.5-0.1-0.9 0.1-0.1-0.1 0.2-0.2 0.8-0.4 0.3 0 0.4 0.1 0.2-0.1 0.2-0.3 0.2 0.2 0.1 0.1 0.1-0.1-0.2-0.3 0.2-0.1 0.9 0.1 0.5-0.1 0.5-0.2-0.4-0.2-1 0.1 0-0.3 0.2-0.1 0.8-0.3 0.4 0 0.2-0.1 0.2 0 2.2 0 0.2 0 0.8 0.4 0.3 0 0.7 0-0.1 0 0.1 0 0.3 0-0.1 0.2 0.1 0.3 0.1 0.2-0.3 0.2 0.3 0 0.5-0.2 0.3 0 0-0.2-0.1-0.3 0.3-0.2 0.4 0 0.2 0.1 0.2 0.1 0.4 0.1 0.4 0 0.4 0.1 0.7 0.4 1.1 1.3 0.7 0.2 0.3 0 0.2-0.1 0.3-0.2 0.2-0.3 0.3-0.1 1.1-0.8 0.4-0.4 0.9-1.4 0.5-0.4 0.5-0.9 1.1-1.3 0.2-0.4 0.3-0.3 1.6-0.8 0.5-0.1 0.1 0 0.2 0 0.1-0.1 0.1-0.1 0.2-0.1 0.1 0.1 0.2 0 0.1 0.1 0.4-0.1 0.5-0.2 0.4 0 1 0.6 0.1 0.2 0.1 0.7 0.1 0.3 0.3-0.2 0.3 0 0.3 0.1 0.2 0.2 0.2 0.3 0 0.2-0.1 0.6 0 1.7-0.1 0.5 0.4-0.1 0.1-0.3-0.1-0.8 0.1-0.5 0.1-0.5 0.5-1.3 0.2-0.1 0.2 0 0 0.2 0 0.8 0.1 1-0.1 0.4-0.1 0.5 0.3-0.1 0.1-0.4 0.1-0.9 0-0.3-0.1-0.2-0.1-0.3 0.1-0.2 0.3-0.1 0.1 0.1 0.1 0.3 0.2 0.3 0.1 0.4 0.1 0.4 0.4-0.1 0-0.1 0-0.3 0.1-0.1 0.1 0 0.2 0 0.2 0 0.3-0.2 0.2-0.1 0.3-0.3 0.1 0.2 0.2 0 0.1 0 0.1 0 0.1 0 0.6 0.4 0.1 0.3 0 0.2 0 1.2 0 0.2-0.1 0.3 0.3 0.9 0.1-0.3 0.1-0.2-0.1-0.3 0-0.4 0.1-0.4 0.2-0.8 0.1-0.4 0-1.1 0.1-0.2 0.4 0.1 0.2 0.3 0.4 0.7 0.4 0.6 0.3 0.9 0.2 0.2 0.1-0.1 0.1-0.3 0-0.4 0.1-1.2-0.1-0.2 0-0.1-0.2-0.3-0.1-0.1 0-0.2 0-0.2 0.1-0.2 0.2-0.2-0.4-0.1-0.7 0-0.3-0.2-0.2-0.3 0.1-0.1 0.4-0.1 0.3 0 0.9-0.2 0.5 0 0.2 0.1 0.1 0.3 0.5 0.4 0.2 0.2 0.1 0-0.2-0.4-0.4-0.4-0.2-0.5 0.4-0.2 1.3 0.2 0.7-0.1 0.3-0.3-1.1 0-0.5 0-0.5-0.2 0-0.3 1-0.4 0.3-0.4-0.5 0.1-0.9 0.2-0.5 0 0-0.1 0.9-0.3 0.4-0.2 0.4-0.3 0.1-0.4 0-0.5 0-0.5-0.1-0.4-0.3 1-0.2 0.4-0.4-0.3-0.1 0-0.5 0.5-0.4 0.2-0.3 0.1-0.3-0.1-0.4-0.4-0.2-0.2-0.1-0.1 0.2-0.2 0.2-0.2 0.7-0.2 0.3-0.2 0.3-0.3 0.1-0.3 0.4 0.2 0.3-0.1 0.3-0.3 0.4-0.2-0.2-0.1-0.2 0.1-0.4 0.2-0.3 0 0-0.3 0.1-0.1 0.4-0.1 0.1-0.1 0.1-0.1 0.1-0.3 0-0.2 0.1-0.2-0.4 0-0.5 0-0.2 0.1-0.1 0-0.3-0.1-0.2 0-0.1 0.1-0.3 0.5-0.1 0.1-0.1 0.1-0.4 0-0.1 0-0.5 0.4-0.2 0-0.8 0.1-0.3 0.1-0.1 0.3-0.2 0.1-0.3 0.1-0.3 0.2-0.2 0.3 0 0.1-0.2 0.1-0.1-0.1-0.2-0.1-0.1-0.1-0.2 0.1-0.4 0.2 0.1-0.9-0.1-0.2-0.3 0.7-0.3 0.4-0.3 0.1-0.3-0.1-0.2-0.6-0.4-0.1 0 0.2 0.2 0.3-0.3 0-0.4 0.1-0.6 0.1-0.8-0.3-0.4-0.1-0.9 0.1-0.5 0-0.2-0.2-0.2-0.2-0.4 0.1-0.9 0.2-0.7-0.1-0.5 0.1-0.7 0.4-0.4 0.1-0.9 0-0.9 0.2-0.8 0.4-0.8 0.2-0.8-0.1-1.2-0.6-0.5-0.1-0.4 0.1-0.5 0.2-1.4 0.9-0.2 0.1-0.2-0.1-0.1-0.2-0.1-0.1-0.2-0.1-0.4-0.1-0.2-0.4-0.1-0.5-0.2-0.4-0.2-0.2-0.4-0.2-0.4-0.1-0.4 0.1-0.4 0.2-1.3 0.3-1.4 0.8-0.7 0.2-0.9-0.1-0.5-0.3-0.3-0.4-0.2-0.5-0.3-0.4-0.5-0.3-2.8-1.2-0.5-0.5 0-0.4 0.1-0.2 0.6-0.3 0.1-0.1 0.1-0.3 0.2-0.2 0.5-0.2-0.5 0.1-1 0.3-0.5 0-0.4-0.6-0.4-0.3-0.2-0.1-0.1-0.2 0-0.2 0.1-0.3 0-0.2-0.1-0.2-0.1 0-0.2 0-0.1-0.1-0.2-0.2 0-0.2 0-0.7 0-0.2 0-0.2-0.2-0.5 0.4-0.2 0.3-0.3 0.2-0.4 0.3-0.3 0.3-0.2 0.2-0.2 0.1-0.3-0.1-0.5 0.1 0 0 0.1 0-0.1 0.1-0.1-0.5 0-0.7 0.4-0.8 0.2-0.1 0-0.2-0.1-0.2-0.2 0-0.2 0.1-0.1 0.1-0.1-0.2-0.1-0.1-0.1-0.1-0.1-0.1-0.1 0.2-0.8 0-0.2 0.3-0.2 0.1-0.2 0.1 0 0.6-0.2 0.1 0 0.4-0.4 0.1-0.2-0.3 0-1.2 0.5-0.5 0.1 0.2-0.3-0.1-0.1-0.3 0-0.2 0.2-0.7 0.7-0.4 0.2-0.1-0.5 0.2-0.6 0-0.6-0.3-0.5-0.1 0.6-0.1 0.4-0.2 0.3-0.5 0.2-0.5 0-0.3-0.3 0-0.4 0.3-0.3-0.4-0.2-0.3 0.1-0.4 0.1-0.4 0.1-0.4-0.1-0.3-0.2-0.4-0.5-0.4-0.1-0.4-0.1-0.6 0-0.1 0-0.1-0.1-0.2 0-0.2 0-0.2 0.1-0.2 0.1-0.1 0.1 0.1 0.2-0.3 0.1-0.2 0.1-0.2-0.1-0.1-0.1-0.5-0.5-0.1-0.1 0-0.1-0.2-0.1 0-0.1 0.2-0.2 0.1-0.2-0.2-0.3-0.2-0.2-0.2-0.2-0.6 0.2-0.4-0.1-0.9-0.5-0.1 0.4 0.4 0.3 0.8 0.6 0.1 0.3-0.3 0.3-0.4 0.3-0.2 0.1-0.7 0.1-0.6 0.4-0.4 0.2-0.2-0.1-0.1-0.5-0.1-0.2-0.2-0.2-0.2-0.1-0.8-0.3-0.8-0.1-1.6 0.1-0.5 0-0.4-0.2-0.2-0.2 0-0.4 0.1-0.2 0.6-0.3 0.3-0.2 0.1-0.1 0.5-1.5 0-0.3 0-0.2 0.2 0 0-0.1 0.3-0.4 0.4-0.2 1.6-0.3 0.5-0.1 0.1-0.2 0.3-0.9 0.6-0.7 0.1-0.2 0-0.2 0.3-0.5 0.1-0.4-0.1-0.7 0.1-0.2 0.3-0.2-0.1-0.3 0.1-0.8-0.2-0.4 0.2 0 0.4-0.3-0.8-0.8-0.3-0.5 0.1-0.6 1.8-0.5 0.8-0.1 0.3-0.1 0.2-0.3 0.5-0.2 0.3-0.1 0.2 0 0.8-0.1 0.1-0.1 0.2-0.2 0.3 0 0.3 0 0.2 0.1-0.4 0.5-0.2 0.2 0 0.3 0.3-0.1 0.5-0.1 0.3-0.2 0.2-0.1 0.2-0.1 3.7-0.8 1.7-0.5 0.2 0 0.2-0.2 0.5-0.9 0.8-0.9 0.6-0.5 0.5-0.3 1-0.3 0.2-0.1 0.2-0.1 0.3-0.8 0.2-0.3 1-0.7 0.3 0 0.6-0.4 0.8-0.2 0.6-0.4 0.4 0 0.5-0.1 1.6-0.5 0.8-0.1 4.8 0.4 0.6-0.2 3.9 1.9 0.4 0 0.2 0 0.5-0.2 0.3 0 0 0.2 0 0.1 0.1 0.2 0.4 0.2 0.6 0.4 0.3 0.2 0.2 0 0.2 0 0.4 0 0.1 0.1 0.3 0.3 0.1 0 0.2 0.1 0.4-0.1 0.2 0 2.7 2 0.5 0.5 0.2 0.4 0.2 0.3 0.9 0.5 0.2 0.1 3.3 0.4 0.1 0.1 0.1 0 0.1 0.1 0.1 0 0.2-0.3 0.1-0.1 0.1-0.1 0.1 0 0.3 0.1 0.3 0.2 0.4 0.1 1.8 0.1 0.3-0.1-0.2-0.3 0.2-0.2 0.3-0.1 0.3 0 0.3 0.1 0.1 0.1 0.4 0.3 0.1 0 0.3-0.1 1.1-0.1 0.8 0 0.3-0.1 0.3-0.1 0.3 0.2 1.3 1.2 0.2 0.2 0.4 0.1 0.2 0.1 0.2 0.1 0.3 0.4 0.2 0.2 0.6 0.2 0.1 0.1 0 0.2-0.4 0.2-1.2 0.1-0.3 0.1-0.1 0.3 0 0.5-0.2 0.3-0.3 0-0.1 0.2 0.8 1.7 0.2 0.3 0.1 0.2 0.1 0.4 0.1 0.3 0.2 0.2 0.3 0.6 0.2 0.4 0.4 0.3 0.4 0.3 0.3 0.1 0.2 0.2 1.2 2.3 0.3 0.4-0.8 1.3-0.2 0.4 0 0.8-0.2 1.4-0.1 0.3-0.2 0.2-1 1.1-0.3 0.2-0.3 0.3-0.1 0.1-0.3 0-0.2 0.1-0.1 0.2 0 0.2 0 0.3 0.3 0.8 0.8 4 0.1 1.5 0 0.2 0 0.1 0.1 0.1 0 0.1 0 0.1-0.1 0-0.1 0-0.1 0-0.1 0.1-0.3 1.2 0 0.5 0.1 0.2 0.4 0.1 0.1 0.2 0.1 0.3-0.1 0.1 0 0.2 0 0.3 0 0.4 0.3 0.6 0.1 0.4-0.1 0.5-0.1 0.1 0.1 0.2 0.3 0.3 0.1 0.2 0 0.3 0.2 0.4 0.2 0.3 0.2 0.3 0.9 0.6 0.2 0.5 0.3 0.3 0.3 0.2 0.2 0.1 0.2 0.2 0.2 0.3 0.1 0.4 0.2 0.7 0.3 0.8 0 0.4 0.4 0.3 0.2 0.6 0.2 1.2 0.1 0.2 0.3 0.2 0.2 0.3 0.2 0.6 0.4 0.9 0 0.1 0.5 0 0.3-0.1 0.6-0.4-0.1-0.2-0.2-0.9-0.1-0.2-0.2-0.4-0.1-0.2 0-0.3 0-0.5 0-0.3-0.1-0.3-0.2-0.4-0.1-0.2-0.1-0.6 0-0.5 0.1-0.5 0.1-0.3 0.3-0.5 0.2-0.2 0.9-0.3-0.3-0.1-0.1-0.1 0-0.2 0.2-0.2 0.2 0.1 0.5 0.3 0.1 0.1 0.4 0.1 0.4 0.1 0.3 0.3 0.2 0.3 0.2 0.7 0.1 5.2 0.1 0.3z m-22 27.6l1 1.2 0.4 0.1-0.5 0.1-0.5-0.5-0.5-0.5-0.4-0.3-0.2 0.1-0.5 0.1-0.2 0-0.3 0-0.2-0.1-0.2-0.1-0.3-0.2-0.3-0.2-0.4-0.1-0.3-0.1-0.2-0.3-0.1-0.2-0.2-0.2-0.3 0-0.3-0.1-0.1-0.3-0.1-0.3 0-0.2 0.1-0.4 0.2 0.1 1.4 1 0.1 0 0.1 0 0.1 0.1 0.1 0.3 0.1 0 0.3 0.3 0.2 0.1 0.2 0.1 0.5 0 0.5 0.1 0.5 0.2 0.3 0.2z m-38.7-31.6l0.5-0.4 0.3-0.1 0.3 0-0.3 0.3-0.4 0.3-0.5 0.2-0.3 0.1-0.2-0.1 0.2-0.2 0.4-0.1z m58.9-4.4l0.1 0.5-0.1 0.1-0.2 0.1-0.4 0-0.2-0.1-0.1-0.2 0.2-0.3-0.4-0.3 0-0.3 0.6-0.4 0.1-0.4 0.1-0.4 0.1-0.7 0.2 0.1 0 0.2 0.1 0.2-0.1 0.3 0 1.6z m-3.8-8.1l0.2 0 0.3 0.1 0.2 0.2 0.1 0.2 0 0.2-0.1 0.1-0.5 0.9-0.1 0.8-0.3 0.3-0.3 0.1-0.4-0.3-0.2-0.5 0-0.6 0.2-0.5 0.2-0.5 0.1-0.2 0.2-0.1 0.1-0.2 0.3 0z m-3-5.3l0.3 0.1 0 0.4-0.1 0.6-0.2 0.1-0.3 0.3-0.2 0.3 0.3 0.4-0.3 0.7-0.4 0.7-0.3 0.5-0.3-1 0-0.3 0.2-1 1.1-1.7 0.2-0.1z m-76.1 3l-0.6 0.4-0.3 0.4 1.8 0.7 0.1 0.2-0.2 0.1-0.2 0-0.2 0.1-0.2 0.1-0.1 0.1-0.1 0.1-0.1 0.1-0.2 0.1-0.1 0-0.2-0.2-0.2-0.1-0.1 0-0.1-0.2 0.1-0.2 0.1-0.1-0.1-0.1 0-0.2-0.1-0.1-0.2 0.2-0.4 0.6-0.1 0.1-0.3 0.2-0.2 0.3-0.2 0.3-0.2 0.2-0.7 0.2-1.3 0-0.6 0.2-0.1-0.1-0.1-0.2-0.2-0.1-0.1 0 0.2-0.1 0.1 0-0.6-0.3-0.4-0.1-1 0.1-0.9-0.4-0.8 0-0.2-0.1-0.3-0.1-0.6-0.3-0.3-0.2-0.3-0.1-0.1-0.1-0.4-0.4-0.1-0.1-0.9-0.3-0.4-0.2-0.3-0.1-0.3-0.5 0.6-0.3 2.5-0.9 0.1-0.1 0-0.1 0-0.1 0.4-0.1 0.2-0.1 0.6-0.1 0.4-0.2 1.1-0.6 0.3-0.1 0.5-0.1 0.8-0.1 0.8-0.2 0.5 0 1.2 0.3 0.2-0.1 0.3-0.3 0.4-0.3 0.4-0.2 0.7-0.3 0.2 0 0.2 0 0.2 0.1 0.1 0.2-0.1 1 1.1 0.7 0.2 0.3 0.3 0.4 0.1 0.4 0 0.3-0.2 0.1-0.2 0 0 0.1-0.1 0.4-0.1 0.1-0.2 0-0.2 0.1z m-8.6-14.4l0.2 0.3-0.2 0.2-0.5 0.5 0-0.1-0.1-0.1 0-0.1 0-0.2-0.8 0.6-0.5 0.3-0.5 0.1 0.8-0.5 0.1-0.2-0.1-0.1-0.2 0.1-0.2 0.1-0.1 0.1-0.3 0-1.4 0-0.3-0.2 0.1-0.3 0.3-0.3 1.8-0.6 0.4 0 0.4 0.2 0.4 0.1 0.4 0 0.3 0.1z m21.8-3.2l0.1 0.1 0.2 0.3 0 0.2 0 0.9-0.7 3-0.4 0.8-0.1 0.4-0.1 0.4-0.1 0.5-0.3 0.3-0.4 0.1-0.3-0.1-0.3-0.4-0.3-0.2-0.2 0.1-0.3 0.1-0.3 0.2-0.3 0-0.2-0.2-0.5-0.7-0.1-0.2-0.5-0.4-0.5-0.3-0.3-0.2-0.1-0.3-0.1-0.1 0.1-0.3 0-0.1-0.1-0.1-0.1-0.1-0.1-0.1-0.1-0.3 0-0.2 0-0.1-0.2-0.2-0.2-0.2-0.2-0.1-0.1-0.1-0.2-0.3 0.5-0.3 0-0.4-0.2-0.5-0.3-0.4-0.7-0.7 0-0.3 0.6-0.4 2.2-0.5 0.8-0.4 0.7-0.3 0.5-0.1 0.4 0.1 0.3 0.3 0.1 0.3 0.1 0.2 0.1 0 0.3-0.2 0.4-0.1 0.9-0.1 0.1 0 0.1 0 0.2 0.2 0.2 0.2 0.4 0.6 0 0.2-0.3 0.3-0.1 0.2z m-2.7-4.4l0.1 0.1-0.1 0.1-0.3 0.1-0.1 0-0.1 0-0.2 0.1-0.1 0-0.1 0.2 0.1 0.2 0.1 0 0.2 0 0 0.2-0.1 0.1-0.1 0.1-0.2 0.1-0.5 0.2-0.6 0.3-0.3 0.1-0.8 0.1-2.8 0.6-1.5 0.1-0.7 0.2 0-0.2 0.2-0.1 0.1 0-0.4 0-0.3-0.1-0.3 0-0.1 0.4-0.1 0-0.2-0.3-0.3 0.1-0.8 0.3 0.2-0.3 0.4-0.2 0.2-0.2-0.1-0.4 0.3-0.3 0-0.8 0.3-0.3 0 0.3 0.1 0 0-0.2 0.2-0.2 0.2 0 0.3 0.1-0.2 0.5 0.5 0.2 0.6-0.1 0.3-0.6 0.2 0.1 0.1 0.2 0.1 0.1 0 0.2 0.6-0.4 0.3-0.1 0.3 0.1-0.1 0.1 0.3 0.1 0.2 0 0.1-0.2 0.2 0 0.3 0 0.4 0.2 0.3 0.1 0.5-0.2 0.5-0.2 0.4-0.1 0.3 0.3 0-0.2-0.1-0.2 0.1-0.2-0.3-0.4 0-0.2 0.2 0.1 0.1 0.1 0.4 0 0.3 0 0.1 0 0.3-0.1 0.1 0 0.2 0.1 0.3 0.2 0.3 0z m-4.8-6.8l0.2 0.3 0 0.3-0.1 0.3-0.5 0.7-0.3 0.3-0.9 0.2-0.3 0-0.2-0.2 0.3-0.1 0.3-0.7-0.1-0.5-0.6 0.2 0 0.1-0.1 0.3-0.1 0.1-0.1 0.1-0.3 0.1-0.1 0.1-0.2 0.1-1.1 0.1 0.1-0.2 0.3-0.1 0.2-0.1 0-0.3-0.3 0.1-0.2-0.1-0.2-0.2-0.1-0.3 0.2 0 0.1 0.1 0.1 0 0 0.1 0.2-0.2 0.2-0.3 0.2-0.2 0.1 0.1 0.1 0.4 0.2 0.1 0.2 0 0.3-0.1 0.2-0.2 0.2-0.2 0.2-0.2 0.5-0.1 0.1-0.1 0.1-0.1 0-0.1 0.2-0.1 0.1 0.1 0.3 0.1 0.5 0.2 0.1 0.1z m12.3-3.9l0.2 0.3 0.6 0.5 0.1 0.2-0.1 0.2-0.4 0-0.1 0.2-0.1 0.3-0.2 0.1-0.2 0.2-0.1 0.3-0.1 0-0.2-0.1-0.1 0 0 0.4-0.2 0.3-0.3 0.1-0.4-0.2-0.7-0.6-0.5-0.3-0.2 0.1-0.1-0.1-0.6 0-0.1-0.1-0.1-0.1-0.3 0.1-0.3 0.1-0.9 0.7-0.1-0.3-0.1-0.1-0.4 0.1-0.1 0.1-0.1 0-0.1 0-0.2 0-0.2-0.2-0.1 0-0.5-0.6-0.5-0.4-0.1-0.1 0.2-0.1-0.3-0.5-0.3-0.2-0.3 0-0.6-0.1-0.3 0-0.2-0.1-0.2 0-0.1-0.3 0.1-0.3-0.1-0.4-0.1-0.2-1.1-1-0.2-0.3-0.1-0.4-0.2 0-0.1 0-0.3 0 0.1-0.2 0.1-0.1-0.4 0-0.5 0-0.5 0.1-0.2 0.2 0.4 0.1 0.2 0.1 0.2 0.2-0.4 0-0.2 0.2 0.1 0.3 0.7 0.3 0.3 0.3 0.7 0.9 0.4 0.8 0.1 0.4 0.2 0.2 0.8 0.4 0.4 0.2 0.1-0.3 0.1-0.2 0.1 0 0.9 0 0.3 0.1 0.1 0.1 0.1 0.2 0.1 0.1 0.2 0.1 0.1 0.1 0.2 0.2 0.2 0.4 0.2 0.2-0.2 0.1-0.1 0.1-0.2 0.2-0.1 0.2 0 0.1-0.2 0.2-0.9 0.3-1.7 0.3-0.4 0-0.5 0-0.3-0.3-0.2-0.4-0.5-1.4 0.2-0.1 0.1-0.3-0.1-0.3-0.1-0.2-1.5 0.4-0.6 0.4-0.3 0.8 0.1 0 0.2-0.1 0 0.3-0.4 0.9-0.1 0.1-0.1 0-0.1 0 0-0.3 0.3-0.6-0.4-0.1 0-0.3 0.1-0.4 0-0.4-0.1-0.2-0.3-0.3-0.2-0.2 0.1-0.2 0.1-0.1 0-0.2 0-0.2-0.3-0.1-0.5 0.1-0.6 0.3-0.2 0.2 0 0.1-0.2-0.1 0-0.2-0.1 0-0.4 0-0.2-0.1-0.1-0.1-0.2 0.3-0.1 0-0.1-0.2-0.1-0.1-0.6 0-0.4 0-0.1-0.1-0.1-0.1 0-0.2-0.1-0.1-0.2-0.1-0.5-0.1-0.7-0.3-0.3-0.2 0.5-0.1 0.2 0 0.3 0.2 0.2 0.1 0.1-0.1 0.4 0 0 0.1 0.7-0.2 0.4 0 0.2 0.1 0.3 0.2 0.3 0 0.3-0.2 0.2-0.1 0.1-0.3-0.2 0-0.4-0.1-0.2-0.1 0.3-0.1 0.2-0.3 0-0.3-0.1-0.3-0.2 0.4-0.3 0.2-0.2 0 0-0.4-0.1 0-0.1 0.2-0.2 0-0.1 0-0.2-0.1 0.1 0.3 0.1 0.3 0.1 0.2-0.1 0.2-0.3-0.1-0.3-0.1-0.3-0.2-0.1-0.1-0.1-0.3-0.2-0.4-0.1-0.3 0.1-0.2 0.2-0.1 0.2 0 0.3 0.1 0.1-0.1 0.1-0.1 0.1-0.1 0.1-0.2 0.1 0.3 0.1 0.3 0 0.2 0.2 0.1 0.2-0.1 0-0.2-0.1-0.4-0.1-0.2 0.5-0.1 0.2 0.2 0.3 0.2 0.4 0.2-0.1-0.4 0-0.1 0.1 0 0 0.1 0.1 0.2 0.9-0.4 0.4-0.2 0.2-0.4 0.2 0.1 0.2 0.1 0.3 0.4 0-0.1 0.1-0.2 0.1 0.1 0 0.1 0.1 0.1 0-0.2 0.2-0.4 0.1 0.1 0.2 0.2 0.2-0.2 0.5 0 0.4-0.1 0.4 0 0.6-0.2 0.5 0 0.1 0.4 0.3-0.2 0.6 0.1 0.3-0.1-0.1-0.1-0.2-0.1-0.1-0.1-0.2 0 0.2-0.2 0.3-0.2 0.5-0.1 0.4 0 2.8 0.8 0 0.1 0.1 0.1 0.1 0.1 0.1-0.1 0.1-0.1 0.1-0.1 0.6-0.1 0.1 0 0.4 0 0.2 0 0.1 0.2-0.3 0.3 0.3 0 0.5 0.1 0.6 0.1 0.2 0 0.5 0.2 0.2 0.1 0.2 0.2 0.2 0.2 0.2 0.1 0.1 0.1 0.1 0.2 0.2 0.1 0.3 0 0.1 0.1 0.1 0 0.3 0 0.2 0 0.1 0.1 0.1 0.1 0.5 0.2 0.2 0.2 0.2 0.6-0.3 0.3-0.1 0.2 0 0.2z m59.6-19.6l0.3-0.2 0.3 0 0.1 0.2-0.2 0.3-0.3 0.2-0.3-0.1-0.1-0.2 0.2-0.2z m-60.8-5.2l0-0.2 0.2-0.2-0.1 0.2-0.1 0.2z m0.4-1l0.1-0.2 0.2 0.1 0 0.2-0.1 0.2-0.3 0.2 0-0.2 0.1-0.3z m46.2 69.8l0.2 0.1 0 0.5-0.4 0.4-0.4 0-0.1-0.1-0.7-0.4-0.2-0.2-0.1-0.3-0.2-0.3-0.1-0.3 0.3-0.1 0.6 0.3 0.3 0.2 0-0.1 0.1 0 0.3 0.1 0.2 0.2 0.2 0z m-73-40.6l0.2 0.1 0.1 0.3-0.1 0.3-0.1 0.1-0.1 0.2-0.1 0.4-0.2 0.3-0.2 0.2-0.3-0.1-0.2-0.4-0.2-0.3 0.1-0.4 0-0.2 0.2-0.1 0.1-0.1 0.2-0.2 0.4-0.1 0.2 0z"
                                id="IDPB" name="Papua Barat">
                            </path>
                            <path data-tooltip-target="tooltip-IDST"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#6761C0"
                                d="M616.3 173.7l0.1 0.3 0.1 0.4 0.1 0.2-0.1 0.2-0.1 0-0.2-0.4-0.1 0.1-0.3 0-0.2-0.1 0.1-0.3 0.3-0.5 0.1-0.1 0.2 0.2z m-4.3-2.1l0.1 0.8 0 0.3-0.1 0-0.1-0.3-0.1-0.3 0-0.7 0.2 0 0 0.2z m1.6 0l0 0.1 0.1 0.3 0 0.1-0.1 0.1-0.5 0.3-0.2-0.4 0.2-0.5 0.2-0.2 0.3 0.2z m-61.1-59l0.2 0.1 0.2 0.1 0.3 0.4-0.4 0-0.6-0.5-0.5-0.1 0.2-0.1 0.2 0 0.2 0 0.2 0.1z m-5.4-0.1l0.3-0.2 0.2 0.2 0.1 0.3-0.1 0.4 0 0.1-0.2 0.1-0.1 0.1-0.2 0.1-0.2-0.2 0-0.3 0.1-0.4 0.1-0.2z m24.2 80.1l0.3-0.2 3.1-3.2 0.3-0.4 0.1-0.4 0.1-0.4 0-0.4-0.1-0.5-0.1-0.5-0.2-0.4-0.3-0.4-0.4-0.3-2.1-1.1-0.5-0.4-1.3-1-1.1-1.3-0.4-0.3-0.4-0.3-1-0.5-1-0.3-10.7-2.2-0.8-0.4-2.8-2.3-0.7-0.7-0.7-0.8-2.1-3.2-0.4-0.3-0.4-0.2-0.5 0-0.2 0.2-0.1 0.2-0.2 0.5-0.1 0.1-0.1 0.2-0.5 0.1-0.6-0.1-2.6-0.8-1.1-0.1-0.7 0-0.4 0.1-1.6 0.9-1.2 0.7-0.7 0.3-0.3 0-0.2-0.1-0.2-0.2-0.2-0.3-0.1-0.3 0-0.5 0-0.3 0.4-1 0.1-0.5 0-0.4-0.1-0.3-0.4-0.6-0.5-0.6-0.5-0.6-0.9-1.1-0.2-0.4-0.1-0.5-0.3-2.1-0.2-0.5-0.3-0.4-0.2-0.2-0.3-0.2-2.3-0.9-0.4-0.2-0.2-0.2-0.2-0.3 0-0.5 0.2-0.6 0.3-0.4 0.3-0.3 1.2-0.8 0.2-0.3 0.1-0.3-0.2-0.6-0.4-1.4-0.1-0.5 0-0.6 0.1-2.3-0.1-0.8 0-0.1 0.1-0.1 0.3-0.2 0.2-0.4 0.1-0.1 0.6-0.3 1-0.8-0.5-0.5-0.1-0.1 0.1-0.2 0.2-0.1 0.5-0.3 0.2-0.2 0.4-0.5 0.2-0.1 0 0.1 0.3 0.7 0.1 0.5 0.7 1.5 0.4 1.1 0.3 0.5 0.4 0.3 0.3-0.8 0.1-0.4 0-0.5 0-0.1-0.2-0.3 0-0.1 0-0.7 0-0.2-0.2-0.3-0.4-0.5-0.1-0.2-0.1-0.3-0.5-0.9-0.2-0.7 0-0.7-0.1-0.2-0.3-0.7 0-0.4 0.4-4.5 0.2-0.7 0.2-0.2 0.2-0.3-0.1-0.5-0.1-0.6-0.2-0.4-0.5 0.3-0.7 0-0.6-0.1-0.5-0.3-0.3-0.4-0.4-0.6-0.2-0.6 0.1-0.6 0.3 0.2 0.2 0 0.2 0.1 0-0.2 0-0.2 0.1-0.2 0-0.1 0.5 0.3 0.3 0.3 0.6 0.6 0.4 0.7 0.3 0.2 0.4 0.2 0.3 0.1 0.2 0 0.1-0.1 0.3-0.5 0.2-0.4 0.4-1.7 0.2-0.5-0.3-0.7-1.5-1.8-0.1-0.2-0.1-0.3 0-0.3 0.2-0.2 1.2-0.4 0.3-0.4-0.1-0.3-0.1-0.3-0.1-0.4 0.1-0.5 0.4-0.7 0.3-0.4 0-0.2 0-0.4 0.1-0.2 0.2-0.2 0.2-0.2 0.3-0.1 0.2-0.1 0.4-0.2 0.9-0.1 0.4-0.2 0.2-0.7-0.1-0.7-0.2-0.8-0.1-0.8 0.1-0.4 0.1-0.5 0.3-0.4 0.3-0.2 0.2 0 0.5-0.1 0.2 0 0.2-0.1 1.3-0.6 0.5-0.3 0.3-0.3 0.2-0.3 0.2-2 0.2-0.7 0.5-0.5 0.8-0.1 0.4 0.3 0.1 0.4-0.1 0.9 0 0.9 0.1 0.3 0.3-0.2 0.1 0 0.2 0.3 0.2 0.3 0.3 0.3 0.4 0.2 0.6 0.1 0.3 0.2 0.2-0.1 0.1-0.2 0.1 0 0.5 0 0.3 0.1 0.3 0.2 0.3 0.3 0.2 0 0.3-0.4 0.6-0.6-0.2-0.5 0.3-0.9 0.9-1.3 0.4-0.5 0.1-0.1 0.2 0.1 0.2 0.2 0.2 0.1 0.3-0.1 0.1-0.1 0.1-0.5 0.2-0.2 0.1-0.1 0.5-0.1 0.1-0.1 0.2-0.3 0-0.3-0.1-1.2 0.1-0.3 0-0.1 0-0.1 0.2-0.2 0.1-0.2 0.1 0 0.1-0.4 0-0.4 0-0.8-0.1-0.7 0-0.4 0.2-0.3 0.2-0.1 0.5 0.1 0.1 0 0.2-0.1 0.5-0.5 0 0.6 0 0.3 0.2-0.1 0.4-0.4 0.2-0.2 0.4 0 1.8 0.4 0.4-0.1 1.1 0.3 0.5 0.3 0.4 0.6 1.7 0.8 1-0.5 0.4 0 0.9 0 0.3-0.1 0.5-0.3 0.4-0.4 0.2 0 0.2 0.1 0.1 0.1 0.1 0.3 0 0.3-0.1 0.2-0.2 0-0.5 0.2-0.1 0 0.1 0.2 0.1 0.2 0.1 0.2 0 0.2 0 0.1 0 0.2 0.1 0.2 0.4 0.4 0 0.2 0.2 0.3 1 0.8 0.3 0.2 0.8 0.2 0.9 0 5.8-0.7 0.4 0.1 0.2 0.9 0.3 0.4 0.4 0.1 0.4 0 0.3-0.2 0.5-0.5 0.3-0.1 0.4 0 1.3 0.5 0.5 0 0.3 0.1 0.1 0.1-0.1 0.1-1 0.7-1.9 0.9-1 0.1-2.1-0.7-0.3 0-0.2-0.1-0.1 0-0.3 0.1-2.4 1-1.3 0.4-0.5 0.3-0.4 0.2-1.2 0.3-0.8 0.3-0.3 0-0.2 0-0.2 0-0.2-0.1-0.8-0.2-0.6 0-0.3 0-0.4 0.1-0.3 0.1-0.8 0.5-0.2 0.2-0.3 0.2-0.3 0.5-0.2 0.3-0.2 0.6-0.1 0.2-0.2 0.2-0.2 0.1-1.1 0.5 1.1 1.1 0.2 0.4 0.4 0.3 0.2 0.1 0.5 0.1 0.3 0.1 0.1 0.1 0.1 0 0.2-0.1 0.1 0 0.1 0 0.1 0 0.1 0.2 0.1 0.3 0 1.1 0 0.2-0.2 0.5-0.2-0.1-0.5-0.2-0.2-0.1-0.5 0-0.8 0.3-0.4 0.1-0.4 0-0.3 0.1-0.3 0.1-0.3 0.3-0.2 0.4-0.1 0.1-0.2 0.1-0.2 0-0.7-0.2-0.3-0.1-0.6-0.4-0.3-0.2-0.3 0.1-0.7 0.3-1.2 0.1-0.3 0-0.3-0.2-0.1-0.1-0.1-0.3-0.1-0.1-0.1-0.1-0.6-0.1-0.1 0-0.1-0.2-0.1-0.1-0.1-0.1-0.3 0.1-0.3 0.1-0.2 0-0.4-0.2-0.6-0.6-0.4-0.2-3.5 0.1-0.3 0.1-1.6 0.7-0.3 0.1-0.3 0.1-0.3 0.2-0.2 0.3-0.2 0.2-0.5 0.4-0.8 0.8-1.2 1.7-1.1 1.3-0.5 0.7-0.1 0.2-0.1 0.7-0.1 0.2-0.3 0.4-0.1 0.4-0.1 0.9-0.2 0.9-0.2 0.4-0.2 0.4-0.7 0.5-0.1 0.2 0 0.2 0 0.5-0.1 0.9-0.1 0.5-0.2 0.3-0.1 0.4 0 0.5 0.4 2.5 0.1 0.4 0.6 0.7 0.1 0.5 0 0.2-0.2 0.4 0 0.2 0 0.2 0.2 0.4 0.3 2 0.3 0.8 3.1 4.6 0.2 0.2 0.9 0.7 0.5 0.1 0.4-0.2 0.4-0.4 0.4-0.2 0.5 0.1 0.3 0.3 0.2 0.4 0.2 0.4 0.2 0.1 0.2 0.1 0.4 0 0.2 0.1 0.2 0.2 0.2 0.5 1.3 1.9 0.1 0.2 0 0.2-0.1 0.2-0.1 0.2-0.1 0.2 0 0.1 0 0.3-0.1 0.5-0.1 0.3 0.2 0.2 0.9 1 0.2 0.4 0.2 0.8 0.2 0.5 0.2 0.4 0.3 0.2 1.2-0.5 0-0.2 1.4-0.3 0.5-0.1 0 0.1-0.1 0.7 0.1 0.1 0.3 0.1 0.4 0.1 0.5 0 1.3-0.1 0.4-0.1 0.2-0.1 0.2 0.1 0.5 0.5 0.2 0.1 0.8 0.1 0.6-0.3 0.5-0.5 0.7-1.1 0.2-0.4 0.1-0.7 0.2-0.9 0.1-0.4 0.2-0.2 0.3-0.3 0.4-0.3 0.3-0.1 0.2-0.2 0.2-0.3 0.3-0.6 0.5-0.7 1.1-0.9 1.1-1.7 0.5-0.6 0.9-0.9 0.3-0.2 0.4 0 0.9 0 0.1-0.1 0-0.2 0-0.2 0.1-0.2 0.1-0.1 0.5-0.1 0.2-0.1 0.2 0.1 0.2 0.1 0.1 0 0.1 0.1 0 1.2 0 0.3 0.6 0.4 0.2 0.3 0.1 0.1 0.2 0.1 1.7 0 0.8 0.1 0.9 0.2 0.7 0.1 0.8-0.2 0.7-0.4 0.4-0.1 0.5-0.1 0.4 0.1 0.4 0.1 0.4 0 0.5-0.3 0.2-0.4 0.2-0.7 0.2-0.7-0.1-0.4 0.7-0.6 0.3-0.1 4-0.1 0.8-0.1 0.7-0.1 1.4 0.4 0.8-0.1 0.1 0 0.1-0.1 0.1-0.1 0.2 0 0.3 0 0.4 0.3 0.5 0.2 0.3 0.1 0.4 0.2 0.4 0 1-0.4 2.5-0.2 0.3-0.1 0.3-0.1 0.3-0.3 0-0.1-1.2-0.3-0.1-0.1-0.2-0.2 0-0.1-0.3-0.1-1.8-0.1-0.2-0.1-0.3-0.1-0.2-0.2-0.2-0.2 0-0.2 0.4-0.1 0.2 0.2 0.3-0.1 0.6-0.4 0.1-0.1 0.1-0.1 0.1-0.1 0.3 0.2 0.1 0 0.2-0.1 0-0.1 1.8-0.1 0.4-0.1 0.2 0.1 0.4 0 0.3 0 0.3-0.1 0.2-0.2 0.3-0.5 0.2-0.1 0.3-0.1 3.2 0.3 0.7 0.3 1.3 0.7 1.3 0.4 0.2 0.3-0.2 0.2 0 0.1 0 0.1 0.2 0.2 0 0.1 0.1 0.2 0.1 0.1 0.2 0.1 0.2 0-0.1 0.4 0.3 0.5-0.3 0.7 0.1 0.8-0.2 0.4-0.5 0.5-0.2 0.3-0.2 1.8-0.1 0.4-0.6 0.7-0.9 0.2-0.8-0.1-0.6-0.4-0.5-0.8-0.2-0.2-0.1-0.1-0.9-0.7-0.1-0.2 0.2-0.5 0-0.2-0.1-0.3-0.2-0.2-0.5-0.4-0.4-0.2-0.7 0.9-0.4 0-0.6 0.3-1.9 0.1-0.8 0.2-0.7-0.2-0.5 0.5-0.9 1.9-0.1 0.3-0.5 0.5-0.1 0.2-0.1 0.2 0 0.1-0.1 0.2 0 0.3-0.2 0.1-0.2 0-0.2 0.1-0.6 0.4-0.3 0.4-0.2 0.9-0.2 0.2-0.8 0.4-0.3 0.3-0.8 1.2-0.4 0.3-0.2 0.1 0 0.2-0.1 0.2-0.2 0.4-0.1 0.1-1.5 1.3-0.4 0.7-0.3 0.2-1.2 0.7-1.5 1-0.6 0.6-0.4 0.1-0.2 0-0.2-0.2-0.4-0.2-0.3 0.1-0.8 0.4-0.4 0.1-0.2 0-0.4-0.2-0.2 0.1-0.1 0-0.1 0.1-0.1 0.2-0.1 0.1-0.6 0.4-0.4 0.1-0.2 0-0.5 0.2-0.3 0.1-0.8-0.2-0.1 0.4-0.2 0.1-0.3 0.2-0.2 0.1-0.2 0-0.3 0.2-0.1 0.4-0.2 0.7-0.5 1.2-0.4 0.5-0.4 0.6-0.5 0.4-0.6 0.2-0.7 0.1-1.2 0.1-0.2 0-0.3-0.1-0.1-0.2-0.1-0.1-0.4-0.5-0.1-0.2-0.2 0-0.1-0.1-0.6-0.2-0.3-0.4 0-0.3 0-0.2-0.5-0.2-0.9 0-0.2 0-0.2-0.4-0.1-0.1-0.7 0.1-0.3 0.7 0.1 0.6 0.8-0.2 0.1 0.3-0.1 0.4-0.2 0.5-0.1 0.4 0 0.2 0.2 0.1 0.1 0.2 0 0.9 0.2-0.1 0.2-0.2 0.1-0.2 0.1-0.2 0.1-0.2 0.1-0.3 0.1-0.3 0.3-0.1 0.2 0.3 0.5 1.1 0.6 0.4 0.2 0.4 0.2 0.3 0.5-0.1 0.4 0.5 0.4 1.5 0.4 0.6 0.8 0.3 0.9 0 0.8 0.1 0.7 0.6 0.6 0.6 1.1 0.9 0.5 0.6 0.3 0.8 0.2 0.4 0 0.4 0.2 0.3 0.9 0.9 0.7 1.1 0.3 0.7 0.6 0.8 0.2 0.5 0 0.4-0.1 0.9 0 0.2 0.9 1 0.5 0.4 0.3 0.1 0.7 0.1 0.2 0.1 0.1 0.1 0 0.2 0.2 0.1 0.2 0 0.1 0.2 0.1 0.3 0.1 0.4 0.1 0.4 0.3 0.2 0.8 0 0.4 0.1 0.4 0.2 0.5 0.7-0.4 0.8-0.4 0.7 0.1 0.8 0.2 0.1 0.5 0.3 1.4 1.4 0.2 0 0.3-0.1 0.2-0.2 0.2 0 0.1 0.2 0.1 0.3 0.1 0.1 0.3 0.2 0.2-0.2 0.1 0.1-0.1 0.2-0.1 0.3-0.1 0-0.3 0.1-0.2 0.2 0 0.1 0.1 0.3-0.1 0.1 0 0.3 0 0.2-0.1 0.1-0.3-0.1 0.1 0-0.1-0.1-0.2-0.1-0.2-0.1-0.1 0.1-0.1 0 0 0.1-0.5-0.4-0.4 0.4-0.9-1.2-1.7-1.3-0.4-0.2-0.3-0.2-0.4 0-0.3-0.1-1.1 0.1-0.4 0-4.8-1.9-0.7-0.2-2.2-0.1-1.4-0.2z m44.6-20.2l0.2 0.8 0.1 0.1-0.3-0.1-0.1 0.1-0.2 0.1-0.2 0.1-0.4-0.1-0.3-0.2-0.1-0.2-0.3-1.1-0.1-0.6 0.4-0.4 1.1 1.1 0.1 0.2 0.1 0.2z m-14.3-3.7l0.2 0.2 0.2 0.5 0 0.5-0.2 0.3-0.2 0.2-0.3 0.2-0.2 0.2-0.1 0.3-0.1 0.2-0.2 0.1-0.3 0-0.1-0.2 0.1-1 0.1-0.4 0.3-0.8 0-0.2 0.1-0.3 0.1-0.1 0.3 0.1 0.3 0.2z m7.3-9.9l0.4 0.1 0.3 0.1 0.3 0.2 0 0.4 0 0.4-0.3 0.7-0.1 0.4 0.1 0.7-0.1 0.1-0.1 0.3-0.5 0.5-0.8 0.7-0.1 0.1-0.4 0.1-0.2 0-0.3 0.2-0.6-0.3-0.4 0.2-0.1-0.7-0.1-0.4-0.4-0.1 0-0.1 0-0.2-0.1-0.3-0.1-0.1-0.3 0-0.2 0.1-0.1 0-0.2 0.2-0.4 0.7-0.2 0.9 0.1 1.8-0.1 0.4-0.1 0.2-0.2-0.1 0-0.4-0.1-0.3-0.3 0.1-0.7 0.5-0.2 0-0.1-0.2-0.1-0.2-0.7-0.2-0.1-0.1-0.1-0.2-0.1-0.2 0.1-0.2 0.1-0.1 0.3-0.1 0.9-0.5 0.1-0.7-0.4-2.6 0-0.6 0-0.2-0.1-0.1-0.1-0.2-0.1 0-0.2 0.5-0.3 0.2-0.3 0.1-0.2 0.2-0.5 0.9-0.1 0.1-0.3 0.2-0.1 0.3-0.3 0.6-0.3 0.6-0.4 0.5-1.5 1.3-0.5 0.3-0.4-0.1-1.2-2.8-0.1-0.9 0-0.8 0.2-0.9 0.3-0.8 1.3-1.8 0.3-0.1 0.4 0.1 0.7 0.2 0.3 0.1 0.2-0.1 0.4-0.4 0.3-0.1 0.9-0.1 0.7 0 0.1 0.1 0.2 0.1 0.1 0.2 0.3 0 0.2-0.1 0.1-0.1 0-0.3 0.2-0.2 0.2-0.1 0.1 0.1 0.1 0.1 0.2 0.1 0.9 1.3-0.2 0.2-0.2 0.2-0.1 0.1-0.3 0.1-0.1 0.1-0.1 0.2 0 0.5 0.1 0.3 0.1 0.2 0.2 0.1 0.2 0.2 0 0.3 0 0.6 0.1 0.3 0.4-0.3 0.4-0.5 0.5-0.9 0.1-0.1 0.2-0.1 0.1-0.1 0.3-0.4 0.2-0.6 0.2-0.3 0.2-0.1 0.4 0 0.2 0 0.1 0 0.1-0.1 0.1 0.2 0 0.2 0.1 0.2 0.3 0.2 0.1-0.1 0.1-0.3 0.3-0.1 0.2 0.1 0.4 0.4 0.3 0.1z m-32.6-17l0.8 0.5 0.2 0.2 0.1 0.4 0.1 0.2 0 0.3-0.1 0.3-0.3 0.2-0.3 0-0.1-0.1-0.5-0.4-0.3-0.2 0.3 0.5-0.1 0.2-0.2 0-0.3 0-0.3-0.3-0.2-0.1-0.9-0.1-0.2-0.1-0.2 0.1-0.5 1-0.2 0.2-0.4 0.1-0.3 0-0.3-0.1 0-0.3 0.2-0.3 0.6-0.9 0.2-0.2 0.2-0.2 0.7-0.3 0.1-0.1 0.2-0.5 0.5 0.4 0.4-0.1 0.5-0.2 0.6-0.1z m3.5-1.4l0.3 0 0.1 0.2 0.1 0.2 0 0.4-0.2 0.4-0.4 0.3-0.4 0-0.4-0.1-0.4 0.2-0.6 0-0.7-0.1-0.5-0.3-0.2-0.3-0.1-0.2 0.1-0.2 0.1-0.3 0.1-0.2 0.2-0.1 0.4 0.1 0.1 0.1 0.1 0 0.2 0 0-0.1 0-0.3 0.1-0.1 0.7 0 0.3 0.1 0.5 0.3 0.2 0 0.3 0z m3.7-1.7l0.1 0.1 0.3 0.1 0 0.1 0 0.2-0.1 0-0.2 0-0.1-0.2-0.1 0-0.2 0.1-0.7-0.3-0.4-0.2 0-0.2 0.2-0.4 0.4-0.3 0.3 0.2-0.3 0.5 0.3 0 0.2 0 0.2 0.1 0.1 0.2z m3 0.3l-0.1 0.4 0.1 0.4 0.1 0.5 0.2 0.2-0.2 0.2-0.4-0.5-0.6-1.3-0.6-0.4-0.1 0-0.3 0.1-0.1 0-0.1 0-0.3-0.4-0.4-0.3 0-0.1 0.1-0.2 0.2 0.1 0.5 0.2 0.1 0 0.1 0.2 0.2 0 0.8 0.3 0.3 0.1 0.3 0.2 0.2 0.3z m-15.7-1.6l-0.1-0.7 0.5-0.4 0.8 0 0.3 0.4-0.2 0.6-0.3 0.4-0.5 0.1-0.5-0.4z m35.4 29.5l0.2 0.1 0.1 0.2 0.1 0.3-0.1 0.2-0.2 0.1-0.4 0.3-0.2 0.1-0.4 0.7-0.4 0.3-0.4-0.1-0.2-0.3 0.2-0.4 1-1.1 0.5-0.3 0.1-0.1 0.1 0z m-24.2-25.5l-0.3 0.2-0.2-0.1-0.2-0.1-0.2 0-0.1 0.1 0 0.3-0.1 0.1-0.3-0.2-0.2-0.9 0-0.5 0.1-0.6 0.2-0.6 0.4-0.1 0.1 1.1 0.1 0.1 0.5 0.3 0.1 0.2 0.1 0.2 0.1 0.3-0.1 0.2z m28.9 24.1l0.2 0.2 0.1 0.3 0 0.3-0.1 0.2-0.1 0.4 0 0.3-0.1 0.3-0.3 0.2-0.2 0.1-0.3 0.1-0.2 0-0.1 0-0.2-0.1-0.3-0.2-0.1-0.1-0.1 0.1-0.2 0.1-0.2-0.1-0.1-0.2 0-0.1-0.2-0.5 0-0.4 0-0.2 0-0.3 0.1-0.1 0-0.1 0.1-0.2 0.1-0.1 0-0.2-0.1-0.1-0.1-0.1-0.1-0.1 0-0.2 0-0.1 0.1-0.2 0.2-0.4 0.2-0.3 0.2-0.1 0.2 0 0.1-0.1-0.1-0.4 0.1 0 0.2 0.1 0.2 0.2 0.3 1-0.1 0.2 0 0.1 0 0.4 0.2 0.4 0.3 0 0.2-0.1 0.2 0.1z"
                                id="IDST" name="Sulawesi Tengah">
                            </path>
                            <path data-tooltip-target="tooltip-IDMU"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#07410F"
                                d="M625.7 172.6l0.3 0.2 0.1 0.4 0 1-0.2-0.2-0.5-0.5-0.2-0.1-0.2 0-0.2-0.1-0.1-0.2 0.1-0.2 0.3-0.2 0.3-0.1 0.3 0z m59.7-11.7l0.2 0.6 0 0.1-0.4 0.1-0.2 0.1-0.4 0.3-0.2 0.1-0.7-0.2 0-0.5 0.4-0.4 0.4-0.1 0-0.1 0.1-0.1 0-0.1 0-0.1 0.2 0 0.1 0.2 0.2 0 0.2 0 0.1 0.1z m8.2-71.9l0.3 0 0.2 0 0.1 0.2 0 0.4-0.2 0.5-0.5 0-0.4-0.2-0.2-0.5 0.1-0.4 0.1-0.1 0.5 0.1z m8.1-2l0 0.2-0.5 1.2-0.3 0.2-0.2-0.2-0.2-0.4-0.1-0.4 0-0.2 0-0.2 0.1-0.2 0.2-0.2 0.1-0.3 0.1-0.2 0.1-0.1 0.3 0.1 0.4 0.7z m-42 94l0.1 0.4 0.2 0.4 0.1 0.3-0.3 0.4-0.6 0.3-0.6-0.3-0.6-0.6-0.4-0.6-0.1-0.6-0.1-1.3-0.1-0.6-0.2-0.3-0.5-0.4-0.2-0.1-0.1-0.3 0-1-0.2-0.5-0.3-0.5-0.2-0.6 0-0.7 0.1-0.3 0.2-0.4 0.5-0.6 0.3-0.2 0.1-0.1 0.2-0.1 0.2 0 0.2 0.1 0.6 0.5 0.2 0.2 0.1 0.2 0 0.2 0 0.6-0.4 1-0.1 0.6 0.1 0.9 1.7 3.6 0.1 0.4z m5.1-11.2l0.3 0 0 0.2-0.1 0.2-1.3 0.6-0.3 0-0.7 0-0.4 0-0.2 0.1-0.1 0.1-0.1 0.1-0.3 0-0.4-0.1-1.7 0.2-0.2 0-0.5 0.2-0.7 0-0.2 0-0.6 0.5-0.4 0.1-0.4-0.1-0.4-0.3-0.3-0.1-0.3 0-1.4 0.3-3.3-0.1-0.4 0.1-0.9 0.3-0.5 0-0.9 0-0.3 0.1-0.7 0.2 0.1-0.4 0-0.3 0-0.4-0.1-0.3-0.2-0.1-0.8-0.4-0.2 0.1-0.1 0.4-0.2 0-0.2 0-0.1-0.2-0.1-0.2 0-0.2 0-0.4 0.2-0.4 0.3-0.1 0.3-0.1 0-0.2 0.1-0.1 0.2-0.1 0.2-0.1 0.1 0.1 0.3 0.3 0.2 0.1 0.1 0 0.4-0.1 0.3-0.2 0.2-0.1 0.1 0.1 0 0.1 0 0.2 0.1 0.1 0.1 0 1.2-0.1 0.6 0 0.4 0.3 0.3-0.1 1.5 0.2 0.2 0 0.3-0.1 0.2-0.1 0.4-0.3 0.2 0 0.4 0.1 0.8 0.1 2.4-0.4 0.9 0 2.4 0.4 3.4 0.2 0.8 0.1z m-20-0.8l0.1 0.3 0 1.4-0.1 0.4-0.2 0-0.6-0.2-0.5 0-1.2 0.1-0.2 0-0.4-0.1-0.2 0-0.2 0-0.4 0.3-0.2 0.1-0.4 0-0.4-0.1-0.4 0-0.3 0.2-0.2 0.3 0 0.4-0.2 0.2-0.5 0-0.6-0.5-0.2 0-0.6 0-0.5-0.1-0.8-0.4-0.5 0-0.8 0.3-1.5 0.8-0.8 0.4-1.7 0.5-0.4 0.1-0.2 0.1-0.2 0-0.6 0-1.2 0.1-0.4 0-0.5-0.1-0.2-0.3-0.1-0.3-1.1-1.7-0.1-0.4 0-0.8 0.2-0.4 0.2-0.4 0.4-0.7 0-1 0.3-0.7 0.8-0.2 0.3-0.1 0.9-0.1 0.3-0.2 0.3-0.2 0.2 0 0 0.2 0 0.4 0.6-0.3 0.7-0.2 0.8 0 1.1 0.1 0.8 0.3 0.3 0.1 0.2 0.2 1.2 0 1.1 0.5 1.3 0.2 0.1 0 0.2-0.1 0.1 0 0.1 0 0.1 0.2 0.1 0 0.5 0.2 0.2 0 0.3 0.1 0.2 0.6 0.3 0.2 0-0.1 0.1 0 0-0.1 0.3 0.1 0.3 0.1 0.2 0 0.3-0.1-0.2-0.1-0.1 0 0.2-0.3 0.2-0.9 0.1-0.2 0.2 0.1 0.2 0 0.1 0.1 0.1 0.1 0.7 0.1 0.2 0.4 0 0.4-0.1 0.8 0.1 0.1 0.3 0 0.2 0 0.1-0.1 0-0.2 0.1-0.2 0.2-0.4 0.3-0.2 0.3-0.1 0.3 0.1 0.2 0.2 0.1 0.2-0.2 0.2-0.1 0.2-0.1 0.2 0.1 0 0.4-0.1 0.2 0z m55.9-3.7l0.3 0.9-0.1 0.6-0.5 0.5-0.7 0.3-0.8 0.1-2.3-0.6-0.4 0-0.8 0.2-0.4 0.1-3-0.1-0.4 0.1-0.3 0.2-0.2 0.2-0.2 0.1-1.6 0.2-0.7 0-0.7-0.3-1.2-0.6-1.1-1.1 0.1-0.4 0.3-0.8 0-0.3-0.1-0.3 0.1-0.3 0.3-0.3-0.2-0.4 0.1-0.3 0.2-0.4 0.1-0.3 0.1-0.5 0.1 0 0.5 0.3 0.4 0.4 0.1 0 0.2-0.1 0.3-0.5 0.1-0.1 0.1-0.3 2-1.4 0.2 0 1.6 0.3 0.6 0.2 0.4 0.3 0.2 0.3 0.2 0.4 0.4 0.3 0.5 0.2 0.4 0.1 0.2 0 0.3-0.2 0.2-0.1 0.3 0.1 0.4 0.4 0.2 0.1 1.5 1.1 0.4 0.5 0.2 0.2 0.2 0.1 0.5 0.2 0.2 0.1 0.1 0.1 0.2 0 0.2-0.1 0.1 0 0.3 0 0.1 0.2 0.2 0.4z m-9-7.5l0.2 0.4-0.1 0.3-0.2 0.3-0.3 0.2-0.4 0-1.1-0.6-0.8-0.1-0.4 0-0.2 0.2-0.1 0.3-0.3-0.1-0.4-0.2-0.3-0.1-0.1-0.1 0.3-0.4 0.5-0.6 0.3-0.2 0.3-0.1 0.3 0 1.3 0.4 0.3 0.3 0.9 0 0.3 0.1z m-7.7-9.3l0.4 0.7 0 0.3-0.8 0.3-0.2-0.1-0.1 0-0.2-0.3-0.1 0-0.6-0.1-0.7 0-0.5-0.2 0-0.8 0.2-0.4 0.3-0.4 0.1-0.3 0.1-0.8 0.2-0.3 0.2-0.1 0.6 0 0.2 0 0.1 0 0.1 0.1-0.3 0.3 0.1 0.3 0.3 0.2 0.1 0.2 0.1 0.1 0.3 0.4 0.1 0.1 0 0.2-0.1 0.4 0.1 0.2z m11.7 0.4l0.2 0.1 0 0.1-0.2 0.3 0 0.3-0.3 0.3-0.9 0.8-0.1 0.1-0.2 0.1-0.3 0-0.2 0-0.5 0.3-0.2 0.1-0.1-0.1-0.4-0.3-0.2-0.1-0.5-0.2-0.2 0-0.1-0.1 0-0.1-0.1-0.1-0.2-0.1-0.2-0.1 0-0.3 0.1-0.4 0-0.2-0.1-0.2-0.2-0.2-0.1-0.1-0.2-0.1-0.1 0.1-0.1 0.1-0.2 0-0.3 0.1-1.1 0.6-1.3 0.4-0.3 0-0.1-0.3 0-0.2-0.2-0.4-0.1-0.9 0.1-0.2 0.6-1.3 0-0.2-0.1 0-0.6-0.2-0.2-0.1-0.3 0-0.2-0.1 0-0.1-0.1-0.2 0-0.1-0.1-0.1-0.3 0-0.1-0.1-0.3-0.5-0.1-0.2-0.1-0.2-0.6-0.5-0.2-0.2-0.2-0.3 0-0.3 0-0.4 0.1-0.3 0.3-0.2 0.2-0.3 0.1-0.4 0-0.5 0-0.2-0.2-0.5 0.2 0 0.4-0.2 0.2 0 0.3 0 0.2 0.2 0.3 0.3 0.1 0.1 0.1 0.1 0.1 0.1 0.1 0.4 0.1 0.3 0.2 0.2 0.2 0 0.3-0.1 0.2-0.4 0.1-0.5 0.1-0.3 0.1-0.1 0.2-0.1 0.2-0.1 0-0.1 0.1-0.1 0-0.2 0.1-0.2 0.2-0.1 0.1 0.1 0 0.1 0.7 0.2 0.2 0.1 0.1 0.4 0.1 0.2 0.5 0.3 0.1 0.2 0 0.2 0.1 0.2 0.1 0.2 0.1 0.1 0.1 0.1 0.2-0.1 0.1 0 0.1 0.3 0.2 0.1 0.3 0.5 0.1 0.4-0.2 0.5-1.2 1.4-0.2 0.4-0.1 0.4 0.1 0.3 0.1 0.1 0.2 0.1 0.3 0 0.2 0.1 0.1 0.1 0 0.7-0.1 0.2 0.1 0.2 0.3 0.2 0.2 0 0.2-0.1 0.3-0.1 0.1-0.1 0.3-0.2 1.3 0 0.3 0 0.9 0.4 0.2 0.2 0 0.1 0.3 0.3 0.1 0.2 0 0.2 0.1 0 0.1 0z m-13-5.4l-0.4 0.5-0.3 0.1-0.4 0.1-1.2 0 0.1-0.1 0-0.1 0.1-0.1-0.4-0.2 0.1-0.2 0.3-0.1 0.1 0 0-0.3-0.1-0.2-0.1-0.3-0.1 0-0.3-0.1 0-0.2 0.2-0.5 0-0.5 0-0.2 0.1 0 0.1-0.1 0.1-0.1-0.1-0.4-0.1-0.5-0.1-0.5 0.2-0.2 0.1 0 0.5-0.2 0.2-0.1 0.3-0.1 0.5 0 0.2-0.1 0.2 0.1 0.1-0.1 0.1 0 0.2 0.1 0.1 0.1 0.1 0.3 0.2 0 0.6 0 0.1 0.1 0 0.2-0.1 0.1-0.1 0.2-0.1 0-0.4 0-0.1 0-0.1 0.3 0 0.3 0.2 0.3 0.2 0.2 0.1 0.2 0.1 0.3-0.1 0.3-0.3 0.2 0 0.3 0.1 0.5 0 0.2-0.2 0.3-0.1 0.4-0.1-0.1-0.2-0.1-0.1 0z m45.6-7l0.4 0.5 0.2 0.3 0.1 0.3-0.1 0.2-0.2 0.1-0.2 0.2-0.2 0-0.2 0-0.2-0.2-0.3-0.3-0.9-1.5-1.7-0.7 0-0.3 0-0.3 0-0.3-0.2-0.1-0.5-0.7-0.1-0.1-0.4-0.3-0.2-0.1-0.1-0.1-0.1-0.1 0.1-0.1 0.1-0.1 0.2 0.1 2.9 2.5 1.1 0.7 0.5 0.4z m-41.1-2.6l0 0.4 0 0.3-0.1 0-0.4-0.2 0-0.2-0.1-0.2 0.1-0.3-0.1 0-0.3-0.3-0.1 0.1 0 0.1-0.1 0.1-0.1 0.1-0.2-0.5 0-0.5 0.2-1.1 0.2-0.8 0.6 0.2 0.2-0.1 0 0.2-0.2 0.2 0.4 2.5z m-1.2-7.6l0.4 0.5-0.1 0.8-0.4 0.7-0.7-0.1-0.2-0.2-0.2-0.4 0-0.4 0-0.3 0.1-0.2 0.3-0.2 0.4-0.1 0.4-0.1z m-0.4-4.8l-0.1-0.2-0.2-0.3-0.1-0.3 0.3-0.7 0.2-1.2 0.2 0.1 0.2 0.1 0.1 0 0.2-0.2 0.1 0.1 0.1 0.1 0.1 0 0.1 0.1 0.1 0.3 0.1 0.4 0 0.5-0.1 0.3-0.2 0.3-0.5 0.4-0.4 0.3-0.2-0.1z m-0.2-3.2l-0.2 0.4-0.2 0.1-0.4 0.1-0.3-0.1-0.2-0.1-0.2-0.4-0.2-0.3 0-0.3 0.1-0.4 0.3-0.4 0.4-0.1 0.8 0.4 0.2 0.3 0.1 0.3-0.2 0.5z m5.9 19.7l0-0.5 0.3-0.8 0.1-0.4 0-2.3 0-0.2 0-0.3 0.2-0.4 0-0.2 0-0.5-0.3-0.5-0.1-0.4 0.1-0.9 0.6-2.3 0.1-0.3-0.1-0.4-0.1-0.3-0.2-0.2-0.2-0.1-0.5 0.1-0.1 0-0.9-0.8-0.1-0.1 0-0.1-0.1-0.1-0.4-0.2-0.1-0.2-0.1-0.1 0-0.2-0.1-0.6-0.1-1-0.1-0.2-0.1-0.2-0.2-0.1-0.1-0.1-0.2-0.2 0-0.2 0.1-0.9 0.2-1.2 0.1-0.9 0.2-0.5 0.6-0.4 0.4-0.5 0.2-0.6 0.1-0.3-0.2-0.5-0.7-0.3-0.8-0.1-0.6-0.2-0.2-0.4 0.1-0.3 0.2-0.4 0.1-0.3-0.1-0.2-0.1-0.4-0.1-0.1 0-0.1-0.2 0-0.1-0.1 0.1-0.3-0.1-0.1 0.1-0.2 0-0.2 0-0.2-0.2-0.2-0.2-0.1-0.1 0.1-0.2 0.2-0.1 0-0.4 0.1-0.3 0.1-0.2 0-0.1-0.4 0-0.3 0.1-0.2 0.1-0.1 0.2-0.3 0.1-0.2 0.1-0.2-0.1-0.4-0.1-0.3-0.2-0.2-0.2-0.3 0-0.4 0.1-0.4 0.6-0.9 0.6-0.8 0.4-1.3 0.8-1.1 0.3-0.8-0.2-0.6-0.2-0.5 0.1-0.5 0.6-0.8-0.2-0.3 0-0.2-0.1-0.1 0.1-0.3 0.2-0.1 0.2 0 0.1-0.1 0-0.2 0.1-0.2-0.1-0.2-0.2-0.1-0.1-0.1 0.1-0.1 0.2-0.3 0.2-0.7 1-1.7 0.4-0.6 0.5-0.8 0.2-0.4 1.2-0.9 0.4-0.7 1.8-1.9 0.7-0.5 0.1-0.2 0.1-0.3 0.2-0.4 0.4-0.3 0.4-0.1 0.3 0 0.3 0.2 0.4 0.1 0.8-0.5 0.2 0.2 0 0.5-0.1 0.4-0.5 0.8-0.2 0.3-0.2 0.2-0.1 0-0.1 0.2-0.2 0.2-0.4 0.2-0.1 0.2-0.1 0.5-0.2 0.7-0.2 0.4-0.2 0.1-0.4 0.1-0.3 0.1-0.3 0.2-0.2 0.2-0.2 0.3-0.1 0.6-0.1 0.6 0.1 0.5 0.5 0.4 1.3 0.1 0.3 0.2 0.2 0.3 0.8 0.7 0.2 0.4-0.2 1.5-0.1 0.2-0.1 0.1 0.1 0.3 0.1 0.1 0.2 0.2 0.1 0.1 0.1 0.3 0.2 0.8-0.1 0.4-0.3 1.1 0 0.5 0 0.6 0 0.2-0.1 0.1-0.1 0.1-0.2 0.1 0 0.2 0.1 0.4 0.3 0.7 0 0.2-0.2 0.1-0.5 0-0.1 0.1-0.1 0.1-0.2 0.5-0.2 0.2-0.4 0.4-0.2 0.4-0.4 0.8-0.1 0.2 0 0.1-0.1 0.1-0.2 0.1-0.2 0.1-0.5-0.1-0.2 0.1-1.6 1.3-1.6 0.9-0.7 0.6-0.3 0.9 0.1 0.4 0.2 0.3 0.2 0.4 0.2 0.2 0.3 0.2 0.6 0.3 0.4 0.3 0 0.1 0.2 0.4 0.2 0.1 0.1 0.1 0.2 0 0.2 0 0.5 0.3 0.4 0 0.4-0.1 0.3-0.1 0.5-0.3 0.6-0.5 0.4-0.4 0-0.3 0.1-1.7 0-0.4 0.1-0.3 1.2-1.5 0.4-0.3 0.4-0.3 0.4-0.1 0.4-0.1 1.3 0 0.4-0.2 0.3-0.4 0.3-0.5 0.1-0.3-0.2-0.4-0.2-0.4-0.4-0.1-0.9 0.2-0.3-0.1-0.1-0.4 0.3-0.4 0.7-0.5 0.2-0.4 0.4-0.7 0.3-0.4 0.3-0.3 0.9-0.5 0.3-0.3 0.4-0.2 0.8-0.3 0.4-0.2 0.1-0.2 0.1-0.4 0.2-0.1 0.1-0.1 0.5-0.1 0.4-0.4 0.4-0.1 0.5-0.1 0.4 0 0.1 0 0.1 0.1 0.1 0.1 0.2 0 0.2-0.1 0.2-0.1 0.2-0.4 0.3-0.1 1-0.2 0.9 0 1.4 0.2 0.1 0 0.1 0.2 0 0.2-0.1 0.1-0.5 0.4-0.2 0.4-0.1 0.4 0 0.7 0.1 0.2 0.1 0.1 0.4 0.3 0.2 0.2 0.3 0 0.1 0.2-0.1 0.2 0.1 0.3 0.1 0.5-0.1 0.5-0.1 0.2-0.4 0.1-0.1 0.4 0 0.8-0.2 1-0.1 0.5 0.2 1.3 0 0.3-0.1 0.3-0.1 0-0.3 0.2-0.1 0-0.3 0-0.3 0-0.1 0.2-1.6 0.9-0.3 0.2-0.1 0.2-0.2 0.1-1.1 0.4-0.5 0.4-0.2 0.2-0.4 0.1-0.3 0-1.8 0.5-0.3 0.1-0.1 0.3-0.1 0.5 0.1 0.4 0.1 0.2-0.1 0.1-0.3 0-0.4-0.2-0.2 0-0.3 0.1-0.3 0.2-0.1 0.4 0 0.4 0.1 0.3 0.3 0.3 0.7 0.6 0.5 0.6 0.4 0.3 0.6 0.2 0.4 0.3 0.2 0.1 0.7-0.1 0.5 0.1 0.1 0 0.2 0.2 0.3 0.3 0.2 0.2 0.2 0.1 0.7 0.1 0.3 0.1 0.7 0.3 0.3 0.1 0.2-0.1 0.4 0 0.2 0.1 0.3 0.1 0.2 0.1 0.3-0.2 0.2 0.3 0.1 0.2-0.1 0.6 0 0.1-0.1 0.1 0 0.2 0.2 0.2 0 0.2 0 0.2 0 1.6 0.1 0.7 0.3 0.3 1.1 0.2 0.2 0.1 1.1 0.1 0.5 0.4 0.6 0.7 0.4 0.6 0 0.3-0.8-0.7-0.3-0.1-0.2-0.1-2.7-0.7-0.4 0.1-0.4-0.3-0.6-0.2-0.6-0.1-0.6-0.1-0.6-0.1-0.5-0.4-0.7-0.8-0.3-0.2-0.2 0-0.6 0-0.4 0-0.5-0.1-0.3 0-1.3 0.2-0.6 0-0.6-0.5-0.5 0.2-0.4-0.3-0.4-0.4-0.3-0.3-1.6-0.1-0.3 0-0.5-0.2-1 0-0.4-0.2-0.4 0.3-0.3 0.3-0.3 0.3-0.3 1.6-0.2 0.4-0.1 0.2 0 0.5 0.5 0.5 0.1 0.4 0.2 2.1 0 0.3-0.2 0.3-0.3 0.3-0.1 0.3-0.1 0.4 0 0.9 0.1 0.8 0.3 0.6 0.6 1.1 0.4 1.2 0.3 0.6 0.1 0.9 0.1 0.4 0.2 0.4 0.5 0.6 0.1 0.3 0.1 0.4 0.2 1 0.1 0.3 0.8 1.3 0.3 0.8 0.6 0.5 0.2 0.3 1.8 3 1.1 1.1 1.1 0.9 0.1 0.2 0.5 0.6 0.3 0.3 0.7 0.3 0.3 0.2 0.1 0.3-0.2 0-0.5-0.3-0.7-0.2-1.7-0.1-0.4-0.1-0.3-0.1-0.2-0.2-0.2-0.4 0.1-0.2 0.3 0 0.3 0.1 0.1 0-0.4-0.7-0.9-0.6-3.1-1.1-0.3-0.2-0.2-0.4-1-2.4-1.2-1.7-0.5-1.4-0.3-0.3-0.4-0.5-0.2-0.1-0.1 0-1.1-0.6-0.7-0.5-0.4-0.1-0.3-0.2-0.4-0.5-0.3-0.6-0.1-0.4z m20.1-53.3l0.2 0.9-0.2 0.8-0.5 0.7-0.3 0.7 0 1.3-1.2 2.1-0.2 0.7-0.1 0.2-1.1 0.9-0.4 0.2-2.9 0.3-0.3 0.1-0.3 0.3-0.5 0.3-0.4 0.1 0.1-0.4 0.3-0.4-0.1-0.4-0.6-0.6-0.2-0.3 0.1-1.4-0.1-0.9-0.2-0.5-0.3-0.2-0.4-0.2 0.2-0.4 0.8-0.8 0.5-0.8 0.9-1.8 0.8-0.8 0.8-0.4 0.4-0.3 0.2-0.7 0.1-0.1 0.4-0.3 0.2-0.1 0.2 0.1 0.2 0.2 0.6 0.1 0.2-0.2 0.1-0.3 0.3-0.5 0.4-0.2 0.3 0.2 0.3 0.3 0.4 1 0.2 0.3 0.3 0.1 0.8 1.1z m-45.3 22.6l0.2 0.2-0.3 0.4 0 0.1-0.1 0.4-0.5-0.6-0.1-0.1-0.1-0.1 0.1-0.2 0.2-0.2 0.1-0.1 0.2 0.1 0.1 0.1 0.2 0z m39 46.1l0.8 0.1 0.1 0.3-0.1 0.3-0.3 0.2-0.4 0-0.1 0 0.1 0-0.2 0-0.3-0.1-0.3-0.2-0.1-0.3 0.1-0.3 0-0.2-0.5-0.3-0.1-0.2 0-0.1 0.1-0.1 0.2-0.1 0.2 0 0.1 0.2 0.1 0.2 0.1 0.2 0.4 0.2 0.1 0.2z"
                                id="IDMU" name="Maluku Utara">
                            </path>
                            <path data-tooltip-target="tooltip-IDKR"
                                d="M232.7 139.2l0.2 0 0.1 0.2 0 0.2 0 0.1-0.1 0.2-0.1 0.1-0.1 0-0.2 0-0.3 0.1-0.2 0.1-0.5-0.1-0.3-0.1-0.1-0.3 0.1-0.3 0.3-0.1 1.2-0.1z m-19.3-19.3l0.3 0.1 0 0.2 0 0.2 0 0.2-0.3 0.5-0.1 0.3-0.2 0.2-0.3-0.1-0.1-0.3 0.1-0.3 0.1-0.2 0.1-0.1 0.3-0.5 0.1-0.2z m21-1.9l0.8 0.1 0.3 0.1 0 0.3-0.2 0.2-0.2 0-0.6-0.1-0.3 0-0.3 0.1-0.6 0.3 0-0.5 0.3-0.3 0.3-0.1 0.5-0.1z m-17.8-0.8l0.7 0.5 0.3 0.3 0.2 0.4 0 0.3-0.3 0-0.2 0-0.1-0.2-0.2-0.3-0.4-0.7 0-0.3z m-4-1.6l0.2 0.2 0.1 0.3 0 0.3-0.2 0.2-0.2 0-0.3-0.1-0.2-0.1-0.1-0.2-0.1-0.1-0.3-0.2 0-0.1 0.9-0.2 0.2 0z m1.1 2l0.1 0.2 0 0.2 0 0.4-0.7-0.8-0.3-0.2-0.7-0.3-0.3-0.2 0-0.4 0.1 0.2 1.2 0.4 0.2 0.1 0.1 0.1 0.2 0.2 0.1 0.1z m5.9-1.3l0.9 0.2 0.7 0.4 0.5 0.7 0.4 0.6-0.1 0.3-0.1 0.1-0.2-0.1-0.2-0.1-0.4-0.6-0.1-0.2-0.7-0.3-0.1-0.1-0.1-0.2-0.5-0.6 0-0.1z m-6.5 2.2l0.3 0.2 0.1 0.2 0 0.2-0.6 1.2-0.4 0.5-0.5 0.2-0.4-0.2-0.2-0.4-0.2-0.4-0.2-0.2-0.7-1.1-0.1-0.4-0.1-0.4 0.1-0.2 0.2-0.5 0.1-0.6 0.2-0.3 0.4-0.1 0.3 0.2 0.1 0.3 0.2 0.4 0.2 0.3 0.6 0.2 0.2 0.2 0.4 0.7z m6.2-1.5l0.3 0.2 0.3 0.5 0.1 0.5 0 0.4-0.1 0.1-0.1 0-0.1-0.1-0.4-0.3-0.8-0.4-0.3-0.4-0.3-0.4-0.1-0.6 0.3-0.4 0.2 0.1 0.3 0.1 0.2 0.1 0.5 0.6z m2.8-2.9l0.2 0.2 0.1 0.2 0.2 0.3-0.1 0.3-0.1 0.1-0.3 0.1-0.2 0-0.2 0-0.2 0-1.1-0.6-0.2-0.2-0.2-0.3 0-0.2 0.1-0.2 0.3 0 0.3 0.2 0-0.2 0.1-0.4 0.3 0.4 0.3 0.1 0.7 0.2z m16.9-0.7l0.2 0.1 0.4 0.1 0.3 0.1-0.1 0.3 0.1 0.1 0.1 0.1 0.1 0.2 0 0.1-0.1 0.2-0.1 0.1-0.1 0.1-0.1 0-0.1-0.2-0.1-0.2 0-0.3 0-0.1-0.6-0.5 0.1-0.2z m54.7-0.1l0.4 0.2 0.3 0.2 0 0.1-0.5 0.6-0.3 0.2-0.2-0.1 0-0.1 0.1-0.1 0.1-0.1 0-0.2-0.1-0.1-0.2 0-0.2 0-0.1-0.2 0-0.2 0.2-0.1 0.2-0.1 0.3 0z m-81.5 0.5l0 0.1 0 0.1 0 0.1-0.1 0.1-0.3 0-0.3-0.1-0.6-0.3-0.4 0.2-0.3-0.3-0.5-0.9 0-0.2 0.1-0.4 0.2-0.4 0.2-0.1 0.1-0.1 0.4-0.2 0.2 0 0.2 0.1 0.1 0.1-0.1 0.2 0 0.3 0.1 0.4 0.1 0.3 0.1 0.2 0.1 0 0.3 0.1 0.1 0 0.1 0.1 0 0.1 0 0.1 0 0.1 0 0.1 0.1 0.1 0.1 0.1z m13.9-2.9l0.1 0.4 0 0.4-0.4 1.4-0.2 0-0.3-0.3 0 0.1 0 0.1 0 0.1 0.1 0.2-0.1 0.1-0.1 0.1-0.1 0.2-0.1 0.1 0 0.1 0 0.3-0.1 0.1-0.2-0.1-0.1 0-0.4 0.2-0.4-0.2-0.7-0.4-0.1 0-0.5 0.1-0.2-0.1-0.1 0-0.6-0.8-0.2-0.4-0.1-0.3 0.2-0.2 0.2 0 0.3 0.4 0.2 0 0.1-0.1 0-0.2-0.1-0.2-0.1-0.4 0-0.1 0-0.1 0.2-0.1 0.3-0.1 0.4 0.2 0.1 0 0.3-0.2 0.2-0.7 0.2-0.2 0.2 0.2 0.6 0.7 0.3 0.2 0.1-0.2 0-0.3-0.1-0.2-0.1-0.3 0.2-0.1 0.2 0 0.3 0 0.2 0.2 0.2 0.1 0.1 0.1 0.1 0.2z m10.1 1.2l0 0.4 0.2 0.9-0.3 0.5-0.1 0.2 0.1 0.4 0.1 0.6 0 0.1 0.1 0.1-0.1 0.2-0.1 0.2-0.3 0-0.3 0.1-0.1 0.1-0.1 0.2 0 0.3-0.2 0.9-0.7 0.1-1.6-0.6 0.1-0.3-0.1-0.3-0.3-0.3-0.4-0.2 0-0.1 0.5 0 0.2 0 0.1-0.1-0.1-0.2-0.2-0.1-0.5 0-0.4-0.1-0.2-0.2 0-0.2 0.2-0.2 0.7-0.1-0.1-0.2 0-0.2 0.1-0.3 0.1 0 0.2-0.2 0.1-0.1-0.2-0.1-0.1-0.1-0.2-0.2-0.1-0.1-0.3 0-0.2 0.1-0.9 0.5-0.2 0-0.5 0.1-0.2 0-0.2 0.3-0.3 0.1-0.6 0-0.2 0-0.5-0.3-0.1-0.4 0-0.4-0.2-0.4 0-0.3 0.5-0.3 0.9-0.4 0.3-0.1 0.1-0.1 0.2-0.3 0.1-0.2 0-0.2 0.1-0.1 0.3-0.1 0.4 0.1 0.2 0 0.1-0.2 0.1-0.3 0.3 0.1 0.4 0.2 0.8 0.2 0.7 0 0.5-0.2 0.7-0.4-0.1-0.2 0.2-0.1 0.2 0.1 0.1 0.4-0.1 0.7 0 0.4 0.3 0.3 0.9 0.5 0.2 0.1z m88-28.4l0.1 0.2 0 0.1-0.3 0.3-0.4 0.1-0.5 0.2-0.5 0-0.3-0.2 0.1-0.3 0.1-0.1 0.1-0.2-0.4-0.2-0.1 0-0.2 0.2-0.1 0-0.1 0-0.1-0.1-0.1-0.1 0-0.1 0-0.2 0.3-0.1 0.2-0.1 0.3 0.1 0.2 0.1 0.4 0.2 0.3 0.1 0.8 0 0.2 0.1z m-56.6-4.5l0 0.3-0.1 0.1 0 0.1-0.1-0.1-0.3-0.4-0.1-0.4-0.2-0.3-0.1-0.3 0.1-0.2 0.2 0 0.2 0.1 0.2 0.2 0.1 0.2 0.1 0.7z m51.4-4.2l0.2-0.6 0.5 0 0.4 0.4-0.3 0.6 0 0.2 0.2 0.8-0.1 0.3-0.1 0.1-0.4 0.1-0.2 0.1 0 0.1-0.2 0.3 0 0.1-0.3 0-0.2-0.2-0.4-0.3-0.3-0.2-0.1-0.1-0.1-0.2 0.1 0 0.4-0.2 0.3-0.3 0.3-0.3 0.2-0.2 0-0.3 0.1-0.2z m-20.5-0.8l0.1 0.4 0 0.1-0.9 0.2-0.2 0-0.2-0.1 0.1-0.6 0.4-0.2 0.5 0 0.2 0.2z m-39.7 0.3l0.3 0 0.6 0.2 0.2 0.1-0.2 0.3-0.1 0 0-0.2-0.1 0-0.5 1.5-0.2 0.1-0.2-0.2-0.2 0-0.1 0.2-0.9 0.3 0.1 0.2 0.1 0 0.1 0.1 0.2 0 0.2 0 0 0.2 0 0.1-0.1 0.1-0.2 0-0.2 0.1-0.3 0-0.2 0-0.2-0.2-0.1-0.2 0-0.2-0.1-0.3 0.1-0.2 0.2-0.5 0.1-0.4 0.2-0.5 0-0.2-0.2-0.2-0.4-0.3-0.2-0.2 0.2-0.1 0-0.3 0-0.3-0.1-0.2 0.3-0.2 0.1 0.4 0.1 0.1 0.4 0.2 0.1 0 0 0.4 0 0.3 0 0.2 0.3 0.1 0.2 0 0.3 0.1 0.1 0 0.1-0.1 0.1-0.1 0-0.1 0.1-0.1z m9.6-3.6l0 1.8-0.1 0-0.4-0.5-0.4 0.1-0.1-0.1-0.2-0.2-0.3-0.1 0.1-0.1 0-0.1 0-0.2 0.1-0.1-0.3-1 0.1-0.4 0.3 0 0.3 0 0.4 0.2 0.3 0.4 0.2 0.3z m-0.3-3.6l0.4-0.1 0.1 0.2-0.1 0.8 0.1 0.7-0.1 0.2-0.1 0.1-0.1 0 0-0.2 0-0.3-0.1 0-0.1-0.1-0.1 0.1 0 0.2 0.2 0.5 0.1 0.2 0.1 0.1-0.1 0.2-1-0.6 0.1 0 0-0.2 0-0.3 0.2-0.4 0.1-0.4 0.1-0.4 0.3-0.3z m42.1-10.2l0.2-0.2 0 0.2-0.4 1.1-0.1 0.2-0.8 1.1-0.2 0.3-0.1 0.3-0.1 0.6-0.1 0.2-0.3 0.2-0.3 0-0.7-0.1-0.3 0.1-0.3 0.1-0.5 0.3-0.2 0.1-0.2-0.1-0.7-0.4-0.7-0.3-0.2-0.1 0.5-0.6 0-0.2 0.1-0.3 0.1 0 0.2 0 0.1 0 0.4-0.1 0.1-0.3 0.1-0.3 0.2-0.1 0.3 0 0.2 0 0.3 0.1 0.2 0.3 0.6 0.6 0.3 0.2-0.1-0.3-0.3-0.9-0.1-0.1-0.2-0.3 0-0.1-0.2 0-0.6 0-0.5 0-1.5-0.6-0.7-0.1-0.2-0.1-0.1-0.2-0.2-0.2-0.3-0.6 0-0.2-0.1-0.3 0-0.2-0.2-0.1-0.1-0.1-0.1-0.1 0-0.1 0-0.5 0-0.2-0.2-0.1-0.1-0.1-0.1-0.1 0.1-0.2 0.2-0.2 0.5-0.6 0.2-0.1 0.1-0.1 0.2 0 0.2 0 0.1-0.1 0.3-0.4 0.1-0.1 0.2 0 1.5-1.5 0.2-0.5 0.3-0.3 0.3-0.3 0.3-0.2 0.3 0.3 0.2 0.4 0 1 0.1 0.6 0.3 0.3 0.7 0.5 1.1 1.4 0.6 0.4 0.1 0.1 0 0.3 0 0.5 0.1 0.3-0.2 0.2-0.3 0.2-0.2 0.2-0.1 0.4 0.2-0.1 0.1 0 0.4 0.3z m-7.8-17.8l0.2 0.1 0 0.1-0.1 0.2-0.1 0.2-0.1 0.7-0.1 0.3-0.3 0.2-0.4 0-0.2-0.1-0.2-0.1-0.1 0 0-0.1 0.1-0.1 0-0.1 0.3-0.2 0.3-0.2 0.2-0.2 0.1-0.2 0-0.1 0.1-0.2 0.2-0.1 0.1-0.1z m-68.3 102.4l0.8 1 0.2 0.3-0.2 0.4-0.4 0.3-0.7 0.6-0.2 0.4-0.1 0.9-0.2 0.4-0.7 0-0.6-0.5-0.5-0.3-0.5 0.8-0.2 0.7-0.2 0.2-0.3 0-0.3-1.6-0.2-0.7-0.1-0.3-0.3 0-1.1-1.1-0.1-0.3 0.2-0.3 0.3-0.6 0.1-0.2 0.6-0.5 0.2-0.3 0.2-0.3 0.1 0 0.1 0.3-0.2 0.8 0.1 0.5 0.1 0 0.1-0.4 0.1-0.4 0.1 0 0.5 0.3 0.6-0.4 1.1-1 0.4 0.3 0.1 0.1 0.5 0.2 0.1 0.1 0.1 0.1 0.2 0.3 0.2 0.2z m7.5-3.2l1.6 0.9-0.2 0.3-0.4-0.1-0.5-0.2-0.4-0.1-0.4 0.2 0.1 0.2 0.2 0.3 0.1 0.4-1.1-0.5-0.3 0-0.3-0.1-0.3-0.4-1.1-0.5-0.3-0.3-0.2-0.3-0.3-0.2-0.5-0.1-0.8 0-0.3 0.1-0.3 0.1-0.5 0.4-0.2 0-0.1 0-0.3-0.1-0.1 0.1-0.2 0.1-0.2 0.1-0.2 0.3-0.2 0.1-0.2 0-0.1-0.1-0.1-0.2-0.1-0.1-0.2-0.3-0.1-0.2-0.3 0-0.5-0.1-0.3 0-0.1-0.1-0.1-0.2 0-0.3 0.1-0.2 0-0.1 0.3-0.2 0.8-0.6 0.3-0.4 0.1-0.5 0.2-1.6 0.2-0.6 0.4 0.4 0.1-0.2 0.1-0.2 0-0.2 0.1 0.3 0.3 0.2 0.7 0.2 1.1 1 0.1 0.2-0.7 0.2 0 0.1 0.1 0.2 0.1 0.1 0.1 0.1 0.3-0.1 0.1-0.1 0.2 0 0.3 0.1 0.6 0.6 0.3 0.9 0.3 0.3 0.4 0.2 0.5-0.1 0.1-0.1 0-0.3 0.1-0.5 0.5-0.1 0.6 0.5 1 1.4z m-8.6-6.1l-0.2 0.1-0.1 0.1-0.2 0 0.2 0.3 0.1 0.2 0 0.3-0.2 0-0.3-0.5-1-0.9-0.2-0.5 0.2 0 0.1 0.1 0.3 0.1-0.1-0.1-0.3-0.8-0.1-0.2 0.1-0.2 0.1-0.1 0.1 0.1 0.2 0.2 0.2 0.3 1 1.3 0.1 0.2z m3.8 0l0.4 0.6-0.1 0.2-0.4-0.1-0.4-0.3-0.4-0.4-0.2-0.1-0.1-0.5-0.1-0.1-0.3 0.3-0.2-0.2-0.3-0.5-0.3-0.2 0-0.1 0-0.3-0.1-0.1-0.2 0-0.1 0-0.1 0-0.1-0.2-0.1-0.1-0.1-0.2 0-0.1-0.5-0.6-0.1-0.2-0.1-0.2 0.2 0.1 0.2 0.1 0.4 0.3 0-0.1 0.1-0.1 0.1 0 0.1 0.1 2.8 3z m-5.6-5.3l0.2 0.2 0.1 0.2 0 0.3-0.2 0.2-0.1 0-0.1 0-0.1-0.1 0-0.3-0.1-0.1-0.2 0-0.1-0.1-0.5-0.7-0.2-0.1 0.1 0 0.1-0.1 0.1 0 0.1 0 0.3 0.3 0.6 0.3z m-3.7-7.3l0.5 0.3 0.6 0.4 0.3 0.4-0.2 0.5-0.2-0.1-0.1-0.2-0.3-0.5-0.5-0.5-0.1-0.3z m1.3 0l-0.2 0.1-0.2 0-0.1 0-0.4-0.3-0.5 0-0.1-0.1-0.3-0.4-0.1-0.4 0.2-0.3 0.4-0.2 0.3 0.1 0.2 0 0.1-0.2 0.1-0.1 0.2 0 0.2 0.1 0.1 0.1 0 0.5 0 0.3 0.2 0.4 0.2 0.4-0.3 0z m-1.1-3.4l0.3 0.1 0.3 0.1 0.2 0.3-0.2 0.3-0.1 0.2-0.3 0.2-1 0.4-0.2 0-0.2-0.1-0.1-0.3-0.1-0.5-0.2-0.3-0.2-0.1-0.6-0.1-0.3-0.2 0.2-0.3-0.1-0.7 0.1-0.3 0.2-0.1 0.3 0.2 0.6 0.6 0.1 0.2 0.1 0.2 0.1 0.1 0.3 0.1 0.8 0z m9.8 2.6l0.4 0 0.2 0.2-0.1 0.3-0.2 0.2-0.1-0.2-0.2-0.3 0-0.2z m-1.3-1.9l0.1 0.2 0 0.1 0 0.2-0.1 0.1-0.1 0.1-0.2 0.1-0.2 0-0.1-0.1 0.1-0.1 0.1-0.3 0-0.4 0.2-0.1 0.2 0.2z"
                                id="IDKR" name="Kepulauan Riau">
                            </path>
                            <path data-tooltip-target="tooltip-IDRI"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#39B54A"
                                d="M200.2 128.1l0.3-0.3 0.6-0.2 0.6-0.1 0.3 0.2-0.4 0.2-0.6 0.3-0.6 0.1-0.2-0.2z m4.8-6.6l0.1 0.3 0 0.2 0 0.1-0.1 0.3-0.1 0.1-0.1-0.1-0.1-0.2-0.1-0.2-0.3-0.6 0-0.2-0.1-0.2 0-0.1 0-0.1 0.1-0.1 0.2 0.1 0.2 0.2 0.2 0.2 0.1 0.3z m0.7-3.4l0.1 0.3-0.1 0.4-0.2 0.5-0.2 0.2-0.2 0-0.1-0.2 0-0.2-0.1-0.2 0.1-0.1 0-0.2 0.1-0.1 0.2-0.2 0.1-0.1 0.1-0.1 0.2 0z m-55.4-34.8l1.3 3.9 0.5 0.9 0.6 0.7 1.4 1.5 1.1 0.9 1.1 0.5 1-0.1 2.4 1.7 0.5 0.2 0.4 0.4 0.1 0.1 0.3 0.3 0.3 0.5 0.3 0.6 0.1 0.5 0.1 0.6 0.2 0.6 0.4 0.4 0.4 0.2-0.1-0.3 0.1-0.4 0-0.4-0.2-0.5-0.2-0.3-0.2-0.5-0.2-0.9-0.4-0.9-1.2-1.5-0.4-0.9-0.1-1 0.3-0.8 0.5-0.6 0.9-0.3 0.4-0.1 2.9 0.2 0.1 0.2 0 0.8 0.2 0.4 2.3 1.5 2.3 1.9 0.3 0.5 0.2 0.4 0 0.4 0 0.9 0 0.4 0.5 1.1 0.5 1.7 0.4 0.8 0.6 0.5 1.4 0.6 0.6 0.2 0.8 0.3 0.5 0 1.6-0.3 0.7 0 0.8 0.2 0.6 0.3 4.8 4.1 1.9 1 0.5 0.6 0.2 0.9-0.1 0.7 0 0.5 0.1 0.3 0.4 0.1 0.3 0.2 0.2 0.4 0 0.3-0.1 1.6 0 0.7 0.3 0.9 0.6 0.8 1.6 1.3 2.1 2.2 0.7 0.6 0.9 0.5 0.5 0.1 0.4 0.1 0.8 0.1 0.4-0.1 0.7-0.2 0.3 0 2.3 0.4 1.9 0.1 0.8 0.3 0.7 0.7 2 2.3 0.6 0.8 0.2 0.9-0.4 0.6-0.7 0.4-1.5 0.7-0.8 0.6-0.5 0.2-0.7 0.2-2.3 1.1-0.3 0.2-0.3 0.2-1.4 0.3-0.3 0.2-0.2 0.1-0.1 0.1-0.4 0.7-0.2 0.1-0.6-0.1-0.3-0.2-0.7-0.8-0.3-0.1-0.6-0.1-0.4 0-0.1 0 0.1 0.2 0.2 0 0.5 0 0.2 0.1 0.1 0.1 0.2 0.2 0.4 0.5 0.5 0.5 0.7 0.2 0.7-0.3 0.1-0.2 0.2-0.2 0.1-0.2 0.2-0.1 0.5-0.2 0.2-0.1 0.3-0.2 0.9 0.1 0.4 0 1.1-0.5 1.4-0.2 0.3-0.1 1.4-0.9 0.4-0.1 0.3-0.1 1-1 0.3-0.2 0.5-0.1 0.5-0.2 0.4 0 0.4-0.1 0.3-0.4 0.4-0.9 0.4-0.3 1.2-0.2 0.5-0.3 0.6-0.4 0.5-0.1 0.5 0.1 0.7 0.3 1.1 0.7 1.2 0.9 0.9 1.2 0.4 1.3 0.2-0.4 0.2-0.2 0.2-0.1 0.2 0 0.2 0.1 0.2 0.1 0.5 0.2 0.4 0.3 0.4 0.3 0.2 0.3 0.4 0.8 0.8 4 0.1 0.3 0.1 0 0 0.3-0.2 0.3-0.2 0.1-0.3 0-0.4-0.1-1.7 0.2-0.1 0 0 0.4-0.2 0.1-0.2 0-0.2 0.1-0.1 0-0.2-0.1-0.2-0.2-0.2-0.3-0.2-0.2-0.1 0-0.2 0.1-0.1 0.1-0.1 0.1 0 0.2 0.2 0.1 0.1 0 0.1 0.1 0 0.2-0.1 0.2 0 0.2 0.1 0.4-0.2 0.2-0.3 0.1-0.3 0.1-0.7 0-0.3 0.1-0.1 0.2-0.1 0.6-0.3 0.4-0.5 0.4-0.6 0.3-2.2 0.4-0.6 0.4 0.3 0 0.6 0.1 0.3 0 0.3 0 0.7-0.3 0.3-0.1 0.5-0.1 0.7-0.4 0.6-0.1 0.3 0.4-0.2 0.4-0.7 0.7-0.2 0.6-0.2 0.4-0.6 0.2-1.2 0.2 0 0.2 0.6 0.2 0.4 0.1 0.4-0.1 0.2-0.1 1.1 0 0.2 0 0.2 0.1 0.1 0.1 0.2 0.2 0.2 0.1 0.5 0 0.7 0.5 0.2 0.3-0.2 0.3-0.3 0.4-0.6 0.3-0.6 0.2-1.9 0.4-0.3-0.2-0.3-0.4-0.3-0.8 0.1 1.3 0.1 0.2 0.5 0.3 0.1 0.2 0.1 0.5-0.2 0.6-0.3 0.5-0.4 0.3 0 0.2 0.3 0.2 0 0.3-0.4 0.2-0.4 0.1 0.2 0.3 0.4 0.3 0.4 0.2 0.8 0.2-0.2 0-6.5 0.5-2.8-0.2-0.8 0-2.2 0.6-0.3 0.1-0.2 0.2-0.3 0.3-0.7 0.9-0.2 0.2-0.6 0.4-0.2 0.1-0.1 0.2-0.1 0.2-0.3 0.6-0.2 0.3-0.1 0.1-0.2 0.1-0.6 0.4-0.1 0.2-0.3 1.1-0.3 0.3-0.4 0.1-1.8-0.4-0.4-0.1-0.3-0.2-0.2-0.3-0.1-0.2-0.2-0.1-0.2-0.1-0.5-0.1-0.1-0.1-0.1-0.1 0-0.1-0.1-0.2-0.2-0.3-1-0.9-0.1-0.1-0.2-0.5-0.1-0.3-0.2-0.1-0.2-0.1-0.8-0.2-0.2-0.1-0.2 0.1-0.3 0-0.6 0.3-0.3 0-1 0.2-1.1-0.1-0.2 0.1-0.2 0-0.2 0.1-0.1 0.1-0.4 0.3-0.4 0.4-0.2 0.2-0.1 0.1-0.1 0.3-0.2 0.4-0.2 0.2-0.1 0.1-0.2 0.1-2.2 0.8-0.2-0.4-0.1-0.2-0.1-0.1-0.1-0.2-0.2-0.1-0.2-0.1-1-0.3-1.9-0.4-1-0.3-0.7-0.5-1.2-1.2-2-1.2-1.9-1.7-3.8-4.5-0.8-1.4-0.5-0.1-0.7-0.4-1.7-1.1-0.6-1.2-0.4-0.6-0.2-0.2-0.1-0.3-0.1-0.7-0.1-0.3-0.6-1-0.1-0.4 0-0.3 0.1-0.1 0.1-0.1 0.1-0.1 0.2 0 1-0.1 0.2 0 0.2-0.1 0.1-0.1 0-0.2-0.1-1.2 0-0.5 0.3-1.7 0-0.3-0.1-0.3-0.1-0.3-0.1-0.2-0.2-0.3-0.6-0.5 0-0.1-0.1-0.1-0.1-0.1-0.1-0.1-0.2-0.1-0.1 0.1-0.1 0.1-0.1 0-0.1-0.1-0.9-0.8-0.4-0.4-0.8-0.5-1.5-0.6-0.8-1-0.4-0.4-0.3-0.1-0.4 0-0.6 0.1-0.3 0-0.2 0.1-0.1 0.1-0.1 0.3-0.2 0.2-0.6 0-2.1-0.8-0.7-1.5-0.2-0.1-0.4-0.5-0.2-0.2-0.5-1.6 0-0.2 0.1-0.2 0.1-0.2 0.5-0.3 0.1-0.2 0.1-0.1 0-0.2 0-0.1-0.2-0.3-0.5-0.4 0-0.5 0-0.4 0.1-0.3 0.1-0.3 0.1-0.2 0.2-0.2 0.1-0.1 0.1-0.1 0.1-0.2 0-0.2 0-0.9 0.1-1.3 0-0.4 0-0.3-0.2-0.4 0-0.3 0.1-0.2 0.2-0.9 0.1-0.4-0.1-0.3-0.1-0.3-0.1-0.2-0.2-0.2-0.2-0.1-0.9-0.5-0.1-0.2-0.1-0.1-0.1-0.2 0-0.8 0-0.2-0.1-0.2-0.2-0.2-0.9-0.8-0.1-0.1 0-0.1 0-0.2 0.1-0.1 0.1-0.2 0.2-0.1 0.4-0.3 3.9-1.7 0.3-0.2 0.6-0.2 1.3-0.8 0.2-0.2 0.2-0.2 0.1-0.3 0.1-0.4 0-0.4-0.2-0.5-0.8-1.7-0.4-1.3-0.2-0.3-0.2-0.2-0.8-0.6-0.2-0.2-0.1-0.3-0.1-0.5 0-0.8 0.2-0.7 0-0.1 0.3-0.8 0-0.6-0.1-2.1-0.3-1.2-0.3-0.9-0.1-0.6 0-0.8 0.3-2.8 0.4-1.1z m58.9 38.1l0.1 0.5 0.1 0.5-0.1 0.6-0.3 0.2-1.7 0.3-0.2 0.1-0.3 0.1-0.3-0.2-0.3-0.3-0.1-0.4 0-0.3 0.5-1.8 0.4-0.6 0.6-0.3 0.4 0.1 0.3 0.2 0.3 0.3 0.2 0.3 0.3 0.3 0.1 0.4z m-4.8-3.3l0.1 0.2 0 0.1 0.1 0.1-0.2 0.3-0.1 0.8-0.2 0.3-0.1 0.1-0.2 0.1-0.2 0-0.1-0.1-0.1 0-0.3-0.5-1.1-0.9-0.7-0.4-0.8-0.2-1.7 0.2-0.4-0.1-0.9-0.2-0.4 0-1.6 0.4-0.8 0.1-0.8-0.2-1-0.7-0.2-0.1-1-0.9 0-0.4 0.3-0.4 0.5-0.3 0.8-0.2 0.3-0.2 0-0.4-0.7-1.9 0-0.8 0.4-0.5 0.8-0.1 0.6 0.3 1 1.1 0.1 0.2 0.1 0.3-0.2 0.3-0.1 0.3 0.3 0.2 0.5 0.1 0.4 0 0.3 0 0.5-0.3 0.3-0.1 0.4 0 0.5 0.1 0.3 0.2 1 0.8 1.5 0.7 2.3 1.6 0.2 0.3 0.1 0.2 0.2 0.5z m1.5-2.6l0.8 0.5 0.2 0.4-0.2 0.4-0.8 0.5-0.8-0.1-2.6-1.7-0.9-0.8-0.3-0.2-0.7-0.2-0.3-0.1-0.3-0.1-0.3-0.2-0.2-0.3-0.2-0.2-0.4-0.1-1.2 0.1-0.4 0.1-0.4 0.3-0.4 0.1-0.5-0.1 0-0.2 0.3-0.4 0.6-0.7 0.3-0.3 0.3-0.9 0.3-0.3 0.8-0.3 0.9 0.1 1.7 0.6 1.6 0.8 1.4 1 0.8 0.8 0.9 1.5z m-12.9-6.2l0.1 0.4 0 0.5-0.6 1.9 0 0.4 0 0.5 0.3 1.1 0.1 0.5-0.1 0.2-0.1 0-0.2 0-0.2 0.1-0.6 0.5-0.1 0.1-0.6-0.2-0.8-0.5-1.3-1.5-0.3-0.6-0.2-0.3-0.1-0.3 0-0.5 0.1-0.9 0.1-0.7-0.1-0.3-0.3-0.4-0.2-0.4-0.2-0.4-0.1-0.3 0.1-0.2 0.2-0.4 0-0.2-0.1-0.8 0-0.4 0.1-0.3 0.3 0 0.5 0 0.7 0.1 0.6 0.5 1.1 1.2 1.5 1.1 0.3 0.3 0.1 0.2z m0.5-2.5l0.3 1.4-0.1 0.4-0.6 0.1-0.9-0.6-1.2-1.2-0.8-1-0.3-0.2-0.2 0-0.4-0.2-3-0.5-0.8-0.4-0.7-0.7-0.6-0.7-0.5-0.7 0.1-0.6 0.9-0.3 0.4 0.1 0.9 0.5 0.3 0.2 0.4 0.1 0.4 0.2 1.2 0.1 1.2 0.2 0.6 0 0.2 0 0.3 0.1 0.3 0.2 0.2 0.1 1.7 0.4 0.5 0.6 0.2 0.9 0 1.5z m-15.4-13.7l0.8 0.9 0.2 0.6 0.1 0.7-0.1 0.4-0.7 0.8-0.1 0.5 0.1 0.9-0.1 0.3-0.3 0.4-1 0.7-0.1 0.2-0.2 0.3-0.5 0.1-0.5 0.1-0.4 0-0.9-0.2-0.8-0.3-0.6-0.6-0.4-0.8-0.2-0.9-0.2-0.4-0.5-0.8 0-0.4 0.2-1.6 0.2-0.6 0.5-0.4 0.7-0.2 0.4 0.1 0.7 0.2 0.4 0 0.3-0.2 0.9-1 0.7-0.2 0.7 0.4 0.5 0.6 0.2 0.4z m39.4 46.1l0.5 0.2 0.4 0.4 0.2 0.4-0.2 0.5-0.2 0-0.7 0-0.3 0-0.5 0.3-0.3 0.1-0.1 0-0.5 0.3-0.3 0.1-0.1-0.1-0.3-0.1-0.2-0.1-0.2 0.1-0.5 0.1-1.1-0.4-0.5 0.1-0.1-0.7 0.5-0.9 0.8-0.9 0.7-0.4 0.3 0.1 1.1 0.2 0.2 0.1 0.2 0.3 0.4 0.1 0.8 0.2z"
                                id="IDRI" name="Riau">
                            </path>
                            <path data-tooltip-target="tooltip-IDGO"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#39B54A"
                                d="M566 124.7l0.2-0.5 0-0.2 0-1.1-0.1-0.3-0.1-0.2-0.1 0-0.1 0-0.1 0-0.2 0.1-0.1 0-0.1-0.1-0.3-0.1-0.5-0.1-0.2-0.1-0.4-0.3-0.2-0.4-1.1-1.1 1.1-0.5 0.2-0.1 0.2-0.2 0.1-0.2 0.2-0.6 0.2-0.3 0.3-0.5 0.3-0.2 0.2-0.2 0.8-0.5 0.3-0.1 0.4-0.1 0.3 0 0.6 0 0.8 0.2 0.2 0.1 0.2 0 0.2 0 0.3 0 0.8-0.3 1.2-0.3 0.4-0.2 0.5-0.3 1.3-0.4 2.4-1 0.3-0.1 0.1 0 0.2 0.1 0.3 0 2.1 0.7 1-0.1 1.9-0.9 1-0.7 0.1-0.1 0.5 0.3 0.3 0 0.2 0 0.3-0.1 0.3 0 0.1 0 0.2 0.1 0.1 0 0.2-0.2 0.1 0 0.3 0 0.9 0.2 0.4 0 0.9-0.2 0.3 0 0.6 0.5 0.8 0.3 0.8 0.2 1.1 0.1 0.5 0.1 0.3 0.3 0.2 0.3 0.1 0.2 0.5 0.3 0.7 0.2 0.2 0.2 0.1 0.1 0.1 0.1 0.2 0 0.2 0.1 0.1 0.3 0.4 0.2 0.5 0.4 0.4 0.1 0.8-0.6 0.3 0 0.3-0.2 0.4-0.9 0.1-0.1 0.2-0.2 0.1-0.1 0-0.4 0-0.2 0.2-0.1 0.4 0 0.3 0 1.3 0.5 0.5 0.1 0 0.2 0.5 0.8 0.5 0.3 0.2 0.1 0.9 0.5 0.3 0.2 0.1 0.1 0 0.2 0 0.5 0.5 1 0.2 0.2 0.3 0.2 0.6 0.4 0.4 0.6 2.3 1 0.4 0.5 0.4 0.6 0.3 1.3 0.1 0.6 0 0.6-0.2 0.7-0.4 1.2-0.3 0.5-0.2 0-0.8 0.2-0.3 0-1.9-0.2-0.7-0.2-0.2-0.1-0.2 0-0.1-0.1-0.1-0.3-0.1 0-0.2-0.2-0.4-0.7-0.1-0.1-0.4 0-0.1 0 0-0.1-0.6-0.9-0.8-1-0.3-0.4-0.2 0-0.2 0.3-0.5 0.2-1.1 0.2-2.9-0.2-1.8 0.2-0.9 0-0.2-0.1-0.4-0.6-0.2-0.1 0.1 0.6-0.1 0.2-0.2 0.1-0.4 0-0.3-0.1-0.2-0.2-0.3-0.1-0.3 0-4.8 0-0.2 0-0.4 0.2-0.2 0.1-1.5 0-0.2 0-0.2 0-0.3 0.2-0.1 0-0.4 0-0.8-0.2-1.3 0-0.4 0.1-0.3 0.4-0.4 0.2-1.8 0.2-1 0-0.8 0.2-0.3 0-0.2-0.1-0.9-1.4-0.3-0.3-0.5-0.1-0.3 0-0.6 0.1-0.2 0-0.2-0.1-0.2-0.2-0.1-0.2-0.2-0.2-0.1 0.3-0.1 0.1-0.3 0-0.4 0-0.2 0-0.2-0.1-0.1 0-0.2 0.3-0.1 0.2 0 0.3-0.1 0.2-0.3 0.1-0.3 0-0.3 0-0.2 0.1-0.2 0.1-0.3-0.2-0.3 0-0.3 0.1-0.7 0.1-0.4 0.1-0.2 0.1z"
                                id="IDGO" name="Gorontalo">
                            </path>
                            <path data-tooltip-target="tooltip-IDSA"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#39B54A"
                                d="M608 127.7l0.3-0.5 0.4-1.2 0.2-0.7 0-0.6-0.1-0.6-0.3-1.3-0.4-0.6-0.4-0.5-2.3-1-0.4-0.6-0.6-0.4-0.3-0.2-0.2-0.2-0.5-1 0-0.5 0-0.2-0.1-0.1-0.3-0.2-0.9-0.5-0.2-0.1-0.5-0.3-0.5-0.8 0-0.2 0.3 0 0.4-0.2 0.9 0.4 0.3-0.1-0.1-0.2-0.1-0.5 0.1-0.2 0.4 0.3 0.4 0.1 0.5-0.2 0.4 0.3 0.1 0.2 0 0.1 0.1 0.2 0.2 0.1 0.2 0.1 0.5 0 0.2-0.1 0.2 0 0.2-0.1 0.2-0.1 0.3 0 0.1 0 0.1 0.2 0.2 0 0.2-0.1 0.6 0.4 1.5 0.3 0.6 0.3 0.2 0.1 0.7-0.3 0.3-0.1 0.4 0.1 0.8 0.4 0.4 0.2 2.7 0.4 1.4-0.2 0.2 0 0.4 0.2 0.1 0 0.2-0.2 0.1-0.1-0.1-0.2-0.2-0.1 0.3-0.1 0.8-0.3 0.3-0.3 2.2-0.9 0.7-0.1 0.3-0.2 0.4-0.5 0.7-0.3 1.3-0.4 0.5-0.4 0.3-0.7 0.3-1.3 0.3-0.6 0.3-0.2 0.3-0.1 0.3-0.2 0.4 0 1.3 0 0.4 0 0.2-0.1 0.1-0.2 0.2-0.1 0.2 0 0.2 0.1 0.1 0.2 0.1 0.1 0.2 0.1 0.3-0.1 0.3-0.4 0.1-0.5 0-0.3-0.1-0.4-0.4-0.1-0.7 0.1-0.4-0.3 0-0.5 0.1-0.5 0.2-0.4 1.1-0.8 0.1-0.2 0.2-0.1 1.4 0.3 0.5-0.1 0.3-0.2 0.5-0.6 0.4-0.2 0.8-0.1 0.4-0.1 0.3-0.4-0.1-0.4-0.3-0.4-0.2-0.4 0.1-0.5 0.2-0.3 2-1.5 0.2-0.3 0-0.1 0.4 0.2 0.1-0.1 0-0.7 0-0.2 0.2-0.1 0.4-0.2 0.4-0.1 0.2 0.2 0 0.8 0.2 0.3 0.4 0.1 0.4 0 1.3-0.2 0.5 0.1 0.1 0.2-0.3 0.8 0.1 0.9 0.4 0.5 0.5 0.3 0.5 0.4 0.2 0.8-0.6 0.5-0.9 0.3-0.6 0.4-0.6 0.7-0.4 0.7-1.2 3.5-0.9 1.6-0.7 0.8-0.6 0.6-0.1 0.2-0.2 0.5-0.1 0.1-0.1 0.2-0.7 0.3-0.6 0.2-0.2 0.1-0.1 0.2-0.3 0.5-0.2 0.1-0.5 0.1-0.4 0.3-0.7 0.7-0.6 0.5-0.3 0.3-0.2 0.5-0.3 0.4 0 0.3 0 0.2-0.1 0.2-0.2 0.3-0.7 0.6-0.2 0.4-0.1 0.2-0.1 0.2 0.1 0.2 0.1 0.1 0.1 0.2 0 0.3-0.1 0.1-0.4 0-0.2 0-0.1 0.1-0.8 1.1-0.1 0.3 0.3 0.1 0 0.2-0.4 0.1-0.2 0.3-0.3 0.6-0.6-0.1-0.4 0.2-0.5 0.2-0.4 0.2-0.4 0.1-0.6 0.4-2.4 0.5-1 0.1-0.8-0.3-0.2 0.1-0.6 0.6-0.5-0.2-0.2 0-0.2 0.1-0.3 0.3-0.2 0-1.3 0.1-0.4 0.1-0.8 0.2-0.2 0-0.7 0-0.3 0.2-0.4 0.2-0.1 0-0.3-0.1-0.2-0.1-0.3 0-0.4 0-0.7 0.3-0.6 0.1-0.2 0.1-0.3 0.3-0.1 0-0.2-0.1-0.7-0.5-0.2-0.1-2.1-0.2-0.2 0.1z m36.4-24.6l0.1 0 0 0.4-0.1 0.6 0 0.6-0.1 0.1-0.3 0.3 0 0.1-0.2 0.7-0.3 0.2-0.7 0.2-0.6 0-0.3-0.3 0.1-0.2 0.2-0.1 0.4-0.1 0.9-0.4 0.9-2.1z m2.7-16.5l0.4 0.2 0.1 0.2-0.1 0.7-0.6 0.3-0.6-0.2-0.4-0.4-0.1-0.5 0.3-0.3 0.3-0.1 0.3 0 0.4 0.1z m0.2-8l0.2 0.2 0 0.3-0.2 0.3-0.5 0.4-0.2 0.1 0 0.2-0.1 0.3 0.1 0.3 0.2 0.3 0.1 0.2 0 0.3 0 0.2-0.2 0.1-0.4 0-0.2-0.2-0.1-0.4 0-0.4-0.1-0.3-0.2-0.6-0.1-0.3 0.1-0.3 0.3-0.7 0.2-0.2 0.3-0.2 0.3 0 0.3 0.1 0.2 0.3z m4.1-13.4l0.1 0.1 0.2 0.3 0 0.2 0 0.1-0.1 0.1-0.7 0.6-0.2 0-0.2 0-0.1-0.2 0-0.2-0.1-0.2-0.4-0.2-1-0.3-0.3-0.2-0.1-0.4 0.2-0.9 0.1-0.2 0-0.1 0-0.7 0-0.1-0.5-0.2-1-0.9-0.2-0.2-0.2-0.4-0.1-0.4 0-0.4 0.5-0.5 0.7 0.1 0.7 0.4 0.4 0.5 0.7 1.1 0.1 0.4 0 0.1 0 0.1 0 0.1 0 0.3 0.1 0.1 0.3 0.2 0.2 0.2 0.2 0.6 0.2 0.1 0.3 0.1 0.1 0 0 0.4 0.1 0.5z m21.6-7.6l0.8 0.1 0.6 0.4 0.4 0.6 0.2 0.3 0.3 0.4-0.4 0.3-0.5 0.3-0.9-0.9-0.6-1 0.1-0.5z m-1.7-2.6l0.9 1 0.2 0.2 0 0.4-0.2 0.4-0.3 0.6 0.2 0.8-0.4 0-0.1-0.9-0.2-0.8 0.1-0.7-0.4-0.4-0.4-0.3-0.1-0.5-0.1-0.7 0-0.3 0.5 0.3 0.3 0.9z m4.2-6.9l0.6 0.5 0.5 0.5-1.2 1.4-1.1 1 0 1.4 0 1-0.2 0.4-0.8 0.5-0.8-0.4-0.8 0.2-0.2-0.6 0.2-0.6 0.3-0.3 0.6-0.4 0.7-1.7 0.9-0.8-0.2-0.3-0.3-0.1-0.4-0.1-0.9-0.3-0.1-0.5 0.2-0.4-0.2-0.5-0.1-0.2 0-0.2-0.1-0.3 0-0.5 0.2-0.6 0.6-0.9 0.1-0.2 0-0.2 0-0.2-0.1-0.4-0.1-0.3 0.2-0.2 0.5-0.1 0.6 0 0.4 0.1 0.2 0.2 0.1 0.2 0 0.2 0.2 0.2 0.2 0.2 0.3 0 0.1 0 0.1 0.4 0.1 0.4-0.1 0.4-0.2 0.4-0.1 0.5-0.1 0.5 0.2 0.7z m-29.2 43.8l0.3-0.2 0 0.1 0 0.3-0.1 0.1-0.1 0-0.1 0-0.3 0.2-0.1 0-0.2 0.1-0.1 0.2-0.2 0.1-0.1 0-0.1-0.2 0-0.2 0.1-0.1 0.1-0.1 0.1-0.1 0.1 0 0-0.1-0.1-0.1 0-0.1 0-0.1 0.2 0 0.1 0.1 0.1 0 0.1 0.1 0.2 0 0.1 0z m23.7-68.2l0.2-0.1 0 0.2-0.1 0.1-0.1-0.2z m-28.1 74.5l0.1 0.2 0 0.2-0.4 0.5-0.1 0.1 0 0.2-0.1 0-0.1-0.2-0.1-0.2-0.1-0.2-0.1-0.4 0-0.3 0-0.2 0.1-0.2 0.1-0.1 0.2 0.2 0.2 0.2 0.2 0.2 0.1 0z m38.8-58.9l0.1 0.1 0.2 0.3-0.2 0.3-0.3-0.3 0-0.3 0.1-0.1 0.1 0z"
                                id="IDSA" name="Sulawesi Utara">
                            </path>
                            <path data-tooltip-target="tooltip-IDSR"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#6761C0"
                                d="M537.1 172.5l-0.9 1.8-0.2 0.3-0.3 0.2-0.2 0.1-0.2 0-0.3 0-0.2 0.1-2.1 1.9-0.3 0.3 0 0.4-0.1 1-0.1 0.3 0 0.3 0.1 0.2 0.2 0.1 0.4 0.2 0.3 0.1 0.7 0.6 0.2 0.3 0.2 0.3 0.1 0.2-0.1 0.4-0.3 0.5 0 0.2 0.1 0.2 0.2 0.3 0.1 0.2 0.1 0.3-0.1 0.5 0.1 0.8 0.7 0.9 0 0.2-0.1 0.4-0.1 0.3 0.1 0.2 0.1 0.1 0.2 0.1 0 0.2 0 0.1-0.1 0.3-0.3 0.2-0.7 0.4-1.3 0.4-0.5 0-0.8-0.2-0.4-0.1-0.3 0.1-0.6 0-0.3 0.2 0.5 0.9 0 0.2 0 0.3-0.1 0.4 0 0.4 0 0.4 0.1 0.3 1.3 3.1 0.5 0.7 0.2 0.3-0.1 0.2-0.2 0.1-0.9 0.2-0.4 0.2-0.4 0.2-0.7 0.5-0.3 0.1-0.3 0.1-0.2 0-0.3-0.1-0.2-0.1-0.2 0.1-0.2 0.1-0.1 0.2-0.1 0.2 0.1 0.3 0 0.2 0.5 0.5 0.2 0.2 0 0.1 0.1 0.8 0.1 0.7 0 0.3 0.4 1.1 0.2 1.2-0.1 0-0.4-0.2-0.2-0.1-0.5 0.1-0.6-0.3-0.6-0.4-0.5-0.2-0.7-0.1-0.2 0.1-0.2 0.1-0.1 0.2-0.8 0.6-0.3 0.2-0.4 0.1-0.3-0.1-0.3-0.1-0.4 0-0.3 0-0.5 0.4-0.4 0.1-1.4 0.1-0.6 0.3 0.2 0.7-0.3-0.1-0.2-0.3-0.2 0-0.2 0.1-0.2 0.5-0.2 0.1-0.3-0.2-0.2-0.4-0.7-2-0.4-0.7-0.2-0.4-0.1-0.4-0.1-0.4 0.1-0.4 0.1-0.3 0.1-0.4-0.4-0.7-0.2-1.3-0.1-0.4-0.1-0.2-0.2-0.1-0.2-0.1-0.2-0.2-0.1-0.2-0.1-0.2-0.1-0.4-0.1-0.2 0.1-0.2 0.3-0.3 0.1-0.1 0.2 0 0.5 0.2 0.2 0 0.3-0.1 0.1-0.3 0-1.6 0.2-0.5 0.3-0.4 0.1-0.3 0.1-0.5-0.1-0.3-0.1-0.2-0.2-0.1-0.2-0.1-0.5-0.2-0.4 0.1-0.8 0.3-0.1-0.4-0.2-0.8 0-0.5 0-0.2 0.3-0.4 0.1-0.2 0-0.9 0.1-0.3 0.2-0.5 0.2-0.3 0.4-0.2 0.3 0.1 0.3 0.3 0.3 0.2 0.5 0.1 0.4-0.2 0.9-0.6 0.4-0.4 0.5-0.2 0.2-0.2 0.1-0.2 0.2-0.7 0.3-0.4 0.4-0.2 0.3-0.1 1.1-0.8 0.1-0.3-0.1-1.2-0.1-0.5-0.1-2 0.1-0.2 0.1-0.2 0.1-0.3-0.2-0.3 0.8-1.1 0.2-0.5 0.6-2.2 0.4-0.6 0.6-0.3 0.5-0.1 0.3 0 0.3 0.1 0.3 0.1 0.2-0.2 0.2-0.5 0.2-1.7 0-0.3 0-0.1-0.1-0.1-0.2-0.2-0.3-0.3-0.1-0.3-0.4-1.8-0.1-0.8 0.1-0.4 0.4-0.8 0.1-0.4-0.5-1.3-0.1-0.2-0.2-1.7 0-0.1 0-0.1 0.1-0.2 0.1-0.2 0.5-0.4 0.1-0.2-0.1-0.4-0.3-0.9 0-0.7 0.3-0.7 0.4-0.5 0.5-0.4 0.1-0.2 0.2-0.2 0.2-0.3 0.2-0.1 0.4 0 0.2-0.3 0.2-0.3 0.2-0.8 0.3-0.7 0.1-1.1 0.2-0.4 0.2-0.2 0.1-0.3 0.2-0.8 0.2-0.4 0.2-0.2 0.6-0.3 0 0.1 0.1 0.8-0.1 2.3 0 0.6 0.1 0.5 0.4 1.4 0.2 0.6-0.1 0.3-0.2 0.3-1.2 0.8-0.3 0.3-0.3 0.4-0.2 0.6 0 0.5 0.2 0.3 0.2 0.2 0.4 0.2 2.3 0.9 0.3 0.2 0.2 0.2 0.3 0.4 0.2 0.5 0.3 2.1 0.1 0.5 0.2 0.4 0.9 1.1 0.5 0.6 0.5 0.6 0.4 0.6 0.1 0.3 0 0.4-0.1 0.5-0.4 1 0 0.3 0 0.5 0.1 0.3 0.2 0.3 0.2 0.2 0.2 0.1 0.3 0z"
                                id="IDSR" name="Sulawesi Barat">
                            </path>
                            <path data-tooltip-target="tooltip-IDJA"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#39B54A"
                                d="M179.1 154.4l2.2-0.8 0.2-0.1 0.1-0.1 0.2-0.2 0.2-0.4 0.1-0.3 0.1-0.1 0.2-0.2 0.4-0.4 0.4-0.3 0.1-0.1 0.2-0.1 0.2 0 0.2-0.1 1.1 0.1 1-0.2 0.3 0 0.6-0.3 0.3 0 0.2-0.1 0.2 0.1 0.8 0.2 0.2 0.1 0.2 0.1 0.1 0.3 0.2 0.5 0.1 0.1 1 0.9 0.2 0.3 0.1 0.2 0 0.1 0.1 0.1 0.1 0.1 0.5 0.1 0.2 0.1 0.2 0.1 0.1 0.2 0.2 0.3 0.3 0.2 0.4 0.1 1.8 0.4 0.4-0.1 0.3-0.3 0.3-1.1 0.1-0.2 0.6-0.4 0.2-0.1 0.1-0.1 0.2-0.3 0.3-0.6 0.1-0.2 0.1-0.2 0.2-0.1 0.6-0.4 0.2-0.2 0.7-0.9 0.3-0.3 0.2-0.2 0.3-0.1 2.2-0.6 0.8 0 2.8 0.2 6.5-0.5 0.2 0 0.2 0.1 0.3 0.1 0.1 0.2-0.1 0.3-0.3 0.3-0.1 0.3 0.8-0.2 0.5 0 0.4 0.3 0.2 0.2 0.3 0.7 0.2 0.2 0.1 0 0.2 0 0.1 0 0 0.1 0.1 0.1 0 0.1 0.2 0.1 0.1 0.2 0.1 0.1 0.5 0.2 0.1 0.2 0.1 0.2 0.1 0.1 0.7 0.1 0.3 0.2 0.5 0.5 0.3 0.1 0.4 0.1 0.4 0.1 0.2 0.2 0.2 0.3 0.4 0.7 0.1 0.3 0.2-0.9 0.4-0.3 0.4-0.3 0.4-0.2 0.9-0.2 0.2-0.1 1.3 0.7 0.4 0.2 0.3 0.1 1 0.1 0.4 0 1.3 0.7 0.4 0.1 0.8-0.3 0.2-0.1 1.1-0.3 1.2-0.1 0.1 0.2 0.5 1.7-0.2 1.3 0 0.8 0.2 0.6 0.1 0.2 0.6 0.6 0.1 0.2 0.1 1.3 0 3 0.2 0.8 0.3 0.9 0.7 1.4 0.3 0.9-0.3 0.2-0.1-0.1-0.3 0-0.2-0.1-0.6-0.4-0.5-0.4-0.4-0.1-0.2 0-0.2 0.2-0.1 0.1-0.2 0.2-0.5 1.4-0.2 0.2-0.3 0.2-1.7 0.5-1.3 0.1-0.9-0.1-3.3-0.8-0.8 0-0.6 0.1-7 3.4-0.3 0.3 0.2 0.3-0.2 2.5 0 0.6 0.2 0.4 0.1 0.2 0.3 0.2 0.1 0.1 0 0.1-0.1 0.1-0.2 0.2-0.3 0.1-0.4 0.1-0.7 0.1-0.2 0.1-0.1 0.2-0.1 0.2 0 0.2 0 0.2 0.2 0.9 0.1 0.5 0 0.2-0.1 0.1 0 0.1 0 0.1 0 0.2 0.1 0.1-0.1 0.1 0 0.1-0.2 0.1-0.2 0-0.4-0.2-2.3-2.2-0.1-0.3-0.2-0.5-0.3-0.7-0.2-0.3-0.3-0.2-0.3-0.1-0.3 0.2-0.4 0.8-0.4 0.4-0.1 0.5 0 0.2 0.1 0.3 0.2 0.2 0.2 0.2 0.1 0.3 0.1 0.3 0 0.2-0.1 0.2-0.3 0.2-0.8 0.3-0.4 0.1-0.5-0.2-1.1-0.4-0.6 0.2-0.5 0-0.7-0.2-0.6-0.1-0.6-0.2-0.4-0.1-0.2 0.1-0.2 0.2-0.2 0.3 0 0.4 0 0.2 0.1 0.2 0.2 0.2 0.1 0.1 0.1 0.3-0.1 0.2-1.4 2.1-0.2 0.3-0.4 0.3-0.3 0.2-0.2 0.1-0.2-0.1 0-0.1-0.1 0-0.4 0.4-0.4 0.2-0.9 0.5-0.3 0.3-0.2 0.3-0.1 0.2-0.2 0.2-0.3 0.2-1.2 0.1-0.3 0.1-0.3 0-0.4 0-0.4 0-0.5-0.2-0.5-0.2-0.9-0.6-1.1-0.2-0.7-0.6-0.5 0.9-1.1 0.7-0.4 0.2-0.8 0.1-0.2 0.2-0.8 0.8-0.2-0.2-0.5-0.1-0.3-0.1-0.5-0.3-0.6-0.3-0.3 0-0.1 0.1-0.4 0.1-0.2 0-0.2-0.1-0.4-0.5-0.3-0.2-0.5-0.1-0.3-0.1-1-0.6-0.8-0.5-0.6-0.7-0.4-0.7-0.7-0.6-0.2-0.5-0.1-0.2-0.3-0.3-0.6-0.2-0.3-0.2-0.2-0.3-0.5-2-0.3-0.5-0.1-0.3 0-0.1-0.1-0.1-0.2-0.2-0.4-0.2-0.4-0.4-0.2-0.2-0.2-0.1-0.1-0.1-0.3 0-1.7 1.2-0.7-2.4-0.8-1.9-0.3-0.5-0.2-0.2-0.6-0.5-0.3-0.4-0.3-0.5-0.6-1.1-0.3-1.1-0.2-1.1-0.1-2.1 0.8 0.2 0.3-0.1 0.3 0.1 0.4 0.3 0.4 0 3.5-0.5 0.3 0.2 0.6 0.1 0.3-0.1 0.3-0.2 0.5-0.8 0.3-0.4 0.8-0.7 1.6-1.3 0.5-0.4 0.2-0.4 0.2-0.6 0-0.2 0-0.1-0.2-0.2 0-0.2 0.2-0.5 0.1-0.3-0.4-1.1 0.1-0.6 0.1-0.4 0.2-0.2 0.1-0.1 0.2 0 0.2 0 0.7-0.1 0.5-0.3 0.4-0.3 0.5-0.6 0.2-0.4 0.2-0.4 0-0.3 0-0.1-0.1 0-0.1 0-0.1 0.1-0.2 0-0.4-0.2-0.2-0.2 0-0.4 0-0.5-0.1-0.4-0.2-0.5z"
                                id="IDJA" name="Jambi">
                            </path>
                            <path data-tooltip-target="tooltip-IDSS"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#07410F"
                                d="M185 188.9l0.8-0.8 0.2-0.2 0.8-0.1 0.4-0.2 1.1-0.7 0.5-0.9 0.7 0.6 1.1 0.2 0.9 0.6 0.5 0.2 0.5 0.2 0.4 0 0.4 0 0.3 0 0.3-0.1 1.2-0.1 0.3-0.2 0.2-0.2 0.1-0.2 0.2-0.3 0.3-0.3 0.9-0.5 0.4-0.2 0.4-0.4 0.1 0 0 0.1 0.2 0.1 0.2-0.1 0.3-0.2 0.4-0.3 0.2-0.3 1.4-2.1 0.1-0.2-0.1-0.3-0.1-0.1-0.2-0.2-0.1-0.2 0-0.2 0-0.4 0.2-0.3 0.2-0.2 0.2-0.1 0.4 0.1 0.6 0.2 0.6 0.1 0.7 0.2 0.5 0 0.6-0.2 1.1 0.4 0.5 0.2 0.4-0.1 0.8-0.3 0.3-0.2 0.1-0.2 0-0.2-0.1-0.3-0.1-0.3-0.2-0.2-0.2-0.2-0.1-0.3 0-0.2 0.1-0.5 0.4-0.4 0.4-0.8 0.3-0.2 0.3 0.1 0.3 0.2 0.2 0.3 0.3 0.7 0.2 0.5 0.1 0.3 2.3 2.2 0.4 0.2 0.2 0 0.2-0.1 0-0.1 0.1-0.1-0.1-0.1 0-0.2 0-0.1 0-0.1 0.1-0.1 0-0.2-0.1-0.5-0.2-0.9 0-0.2 0-0.2 0.1-0.2 0.1-0.2 0.2-0.1 0.7-0.1 0.4-0.1 0.3-0.1 0.2-0.2 0.1-0.1 0-0.1-0.1-0.1-0.3-0.2-0.1-0.2-0.2-0.4 0-0.6 0.2-2.5-0.2-0.3 0.3-0.3 7-3.4 0.6-0.1 0.8 0 3.3 0.8 0.9 0.1 1.3-0.1 1.7-0.5 0.3-0.2 0.2-0.2 0.5-1.4 0.2-0.2 0.1-0.1 0.2-0.2 0.2 0 0.4 0.1 0.5 0.4 0.6 0.4 0.2 0.1 0.3 0 0.1 0.1 0.3-0.2 0.1 0.1 0 0.4 0 0.3 0 0.2-0.4 0.5-0.1 0.3-0.4 0.7-0.1 0.4 0 0.3 0 0.3 0.2 0.5 0.4-0.3 0.2-1 0.2-0.3 0.6 0.1 0.4 0.4 0.4 0.4 0.3 0.2 0.3 0.2-0.1 0.6-0.3 0.6-0.3 0.3-0.1 0.1-0.2 0.2 0.1 0.2 0.3-0.1 0.3-0.1 0.4-0.6 0.3-0.2 0.1 0.4 0 0.4 0 0.4 0.3 0.2 0.1 0 0.1 0.1 0.1 0 0-0.1 0.1 0 0-0.1 0.2-0.1 0.1 0 0.3-0.4 0.9-0.3 0.8 0.2 0.7 0.6 0.5 0.9 0.2 0.9-0.2 0.7-0.3 0.7-0.6 1-1.4 1.6-0.3 0.2-0.3 0.1-0.9 0-0.2 0.1-0.3 0.3-0.7 0.5-0.3 0.2 1.4-0.6 0.6 0 0.4 0.8 0 0.8 0 0.5-0.3 0.7 0 0.9-0.1 0.3-0.2 0.2-0.3 0.2-0.4 0.1-0.4 0.1-0.2 0.1-0.6 0.4-0.6 0.6-0.4 0.5-0.3 0.7 0 0.8 0 0.1-0.1 0.2 0.3-0.3 0.3-0.4 0.3-0.5 0.1-0.4 0.1-0.3 0.3-0.3 0.6-0.4 1.4-0.7 0.6-0.3 0.3-0.6 0.4-1.3 0-0.4 0-0.9 0.1-0.3 0.2-0.4 0.7-0.6 0.3-0.4 0.2-0.8 0.4-0.3 0.4-0.1 0.3 0.2 0.2 0.4 0 0.5 0 0.4 0.4 0.3 0-0.5 0.2-0.3 0.4-0.1 0.4-0.1 0.4 0.2 0.3 0.2 0.3 0.3 0.3 0.2 0.1-0.1 0.5-0.1 0.2 0 0.2 0.1 0.3 0.3 0.1 0 0.4-0.1 1.3-0.5 0.4-0.1 0.5 0 0.4 0.1 0.8 0.4 0.4 0.1 1 0 1.7 0.3 0.9 0 0.5 0.1 0.3 0.1 0 0.2-0.1 0-0.1 0-0.1 0 0.2 0.2 0.3-0.1 0.3-0.3 0.3-0.1 0.3 0 0.3 0.1 0.2 0.3 0 0.6-0.1 0.4-0.3 0.8-0.1 0.4 0 0.5 0.1 0.4 0.1 0.5 0.2 0.4 0.2 0.3 0.3 0.3 0.4 0.3 0.6 0.2 0.4 0.2 0.2 0 0.5 0 0.2 0 0.2 0.1 0.3 0.7-0.1 2.7 0.4 0.8 0.6 0.6 0.8 0.4 0.8 0.1 0.2 0 0.4-0.1 0.2 0 0.3 0 0.3 0.2 0.2 0.1 0.3 0.1 0.2 0.2 0.4 0.6 0.1 0.7 0 1.6 0.1 0.8 0.1 0.2 0.3 0.5 0 0.2 0 0.2-0.1 0.4 0 0.2-0.2 0.3-1.3 0.6-0.7 0.6-0.6 0.7-0.6 0.8-0.4 0.9-1.2 4.4 0.1 0.8 0.5 0.6 1.6 1.2 0.4 0.6 0 0.7-0.3 0.8-1.3 1.9-0.2 0.6-0.1 0.7-0.5 1.4 0 0.3-0.8-0.4-0.5 0.1-0.3 0.2-0.8 0-0.2-0.2-0.1-0.4-0.1-0.2-0.2-0.1-0.4 0-0.2-0.1 0-0.3 0-0.1 0-0.2-0.2-0.2-0.1-0.1-0.2 0-0.3 0.1-0.1-0.1 0-0.2 0.1-0.4 0.1-0.1 0-0.2-0.1-0.2-0.1-0.1-0.1-0.3-0.1-0.2-0.2-0.3-0.2-0.2-0.2-0.2-0.2-0.4-0.2-0.1-0.2 0-0.1-0.1-0.1-0.1 0-0.1 0-0.2-0.2-0.3-0.2-0.2-0.5-0.2-0.7-0.1-0.2-0.2-0.3-0.6-0.3-0.1-0.2-0.1-0.2 0-0.3 0.1-0.1 0-0.2 0-0.2-0.2-0.2-0.5-0.1-0.2-0.2 0-0.1 0.1-0.1 0.1 0 0.2-0.1 0.2 0 0.2 0 0.1-0.1 0.1-0.1 0.1-0.1 0.1 0 0.1 0 0.3 0 0.2-0.3 0.7-0.1 0.1-0.2 0.3-0.2 0.2-0.3 0-0.2 0-0.3-0.1-0.2 0-0.2 0.1-0.3 0.4-0.2 0.1-0.3 0.1-0.2 0.1-0.1 0.2 0 0.2 0 0.4 0 0.2-0.1 0.1-0.3 0.4 0 0.1 0 0.1 0 0.1 0.2 0.2 0 0.2-0.1 0.1-0.6 0.3-0.2 0.2-0.2 0.2-0.1 0.3-0.1 0.3-0.1 0.2-0.3 0.2-0.3 0.2-0.1 0.3-0.7 0.3-1 0.2-0.8 0.3-0.9 0.2-3.3 1.5-1.4 0.3-1 0-0.5 0.1-1.2 0.6-0.5 0.3-0.6 0.6-0.2 0.2-1.8 0.7-0.2 0.6-0.1 0.5 0.1 0.6 0.2 1.4 0 0.3 0 0.3-0.2 0.3-0.1 0.2-0.1 0.1-0.3 0.2-0.1 0.1 0 0.4-0.1 0.1 0 0.1 0 0.1 0.2 0.2 0.2 0.1 0 0.1 0.1 0.5 0 0.2 0.1 0.2 0.4 0.3 0.1 0.2 0.2 0.2 0.1 0 0.1 0.1 0 0.2 0 0.2-0.1 0.2-0.2 0.6-0.4 0.3-0.1 0.1-0.2 0.1-0.2 0-0.6-0.1-0.7 0-1.1 0.8-1.5 0.3-0.6 0-0.6-0.1-0.7 0-1.1-0.2-0.8 0-0.3-0.1-0.2-0.1 0-0.2-0.1-0.2-0.1-0.2 0-0.2 0.1-0.2 0-0.2-0.1-0.2-0.1-0.1-0.2-0.1-0.3-0.1-1.1-0.6-0.2-0.4-0.2-0.2-0.4-0.2-0.1-0.2 0-0.2-0.1-0.3-0.4-1.8-0.2-0.3-0.1-0.2-0.3-0.6-0.6-0.7-0.1-0.4-0.2-0.5-0.1-1.7-0.1-0.3-0.1-0.3-0.3-0.1-0.2-0.1-0.9 0-0.3 0-0.5-0.2-0.9-0.6-1.1-0.1-0.7-0.2-0.9-0.5-0.9-0.2-0.5-0.3-0.4-0.2-0.1 0-0.3 0.1-0.3-0.5-0.1-1.6-0.1-0.4-0.5-1.2-0.2-0.7-0.1-0.1-0.1-0.1-0.2-0.1-0.2-0.2-0.2 0-0.2 0-0.2 0-0.5 0-0.4 0.1-0.3 0-0.4 0-0.3 0.2-0.9-0.7-0.2-0.1-0.4-0.1-0.7 0.2-0.3 0.1-0.2-0.1-0.9-0.4-0.4-0.2-0.3-0.2-0.4-0.7-0.3-0.3-0.7-0.4-0.2-0.3-0.3-0.3-0.2-0.3-0.5-0.3-0.1-0.3 0.5-0.1 0.6-0.2 0.3-0.1 2.4-2.2 0.4-0.3 0.4-0.2 0.5-0.3 0.2-0.2 0-0.3-0.1-0.3-0.2-0.2 0-0.2 0-0.2 0.2 0 0.5 0.2 0.3 0.1 0.2 0 0.3-0.1 0.2 0 0.5 0.1 0.3-0.4 0.2-1.6-0.1-0.5 0-0.5-0.1-0.2-0.1-0.2-0.1-0.1-0.2-0.2-0.3-0.1-0.5-0.1-0.4-0.1-1.1-0.2-0.3-0.1-1.1-0.7-0.2-0.3-0.2-0.6-0.1-0.1-0.2-0.1-0.4 0.1-0.4 0.3-0.8 0.6-0.7 0.6-0.2 0.2-0.2 0.1-0.4-0.1-0.5-0.4-0.2 0-0.2-0.1-0.2-0.2-0.3-0.3-0.3-0.3-0.2-0.2-0.2-0.3-0.2-0.2-0.3-0.2-0.2 0-0.1-0.2-0.1-0.1 0-0.1 0.1-0.1 0.1-0.1 0.1-0.1 0.1-0.2 0-0.7 0.2-0.3 0-0.2 0-0.2-0.1-0.2-0.2-0.2-0.3-0.2-0.5-0.5-1.3-0.4-0.2 0-0.1 0-0.2 0.1-0.2 0.2-0.1 0.1-0.2 0-0.3-0.1-0.4-0.3-0.2 0-0.2 0-0.2 0-0.2-0.2-0.6-0.7 0-0.2 0.1-0.1 0.4 0 0.1 0 0-0.1-0.1-0.5-0.1-0.2-0.1-0.2-0.4-0.3-0.9-0.8-0.2-0.2-0.3-0.7-0.2-0.3-0.2-0.2-0.5-0.4-0.4-0.5z"
                                id="IDSS" name="Sumatera Selatan">
                            </path>
                            <path data-tooltip-target="tooltip-IDLA"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#07410F"
                                d="M218.6 229l1.1 0.6 0.3 0.1 0.2 0.1 0.1 0.1 0.1 0.2 0 0.2-0.1 0.2 0 0.2 0.1 0.2 0.1 0.2 0 0.2 0.2 0.1 0.3 0.1 0.8 0 1.1 0.2 0.7 0 0.6 0.1 0.6 0 1.5-0.3 1.1-0.8 0.7 0 0.6 0.1 0.2 0 0.2-0.1 0.1-0.1 0.4-0.3 0.2-0.6 0.1-0.2 0-0.2 0-0.2-0.1-0.1-0.1 0-0.2-0.2-0.1-0.2-0.4-0.3-0.1-0.2 0-0.2-0.1-0.5 0-0.1-0.2-0.1-0.2-0.2 0-0.1 0-0.1 0.1-0.1 0-0.4 0.1-0.1 0.3-0.2 0.1-0.1 0.1-0.2 0.2-0.3 0-0.3 0-0.3-0.2-1.4-0.1-0.6 0.1-0.5 0.2-0.6 1.8-0.7 0.2-0.2 0.6-0.6 0.5-0.3 1.2-0.6 0.5-0.1 1 0 1.4-0.3 3.3-1.5 0.9-0.2 0.8-0.3 1-0.2 0.7-0.3 0.1-0.3 0.3-0.2 0.3-0.2 0.1-0.2 0.1-0.3 0.1-0.3 0.2-0.2 0.2-0.2 0.6-0.3 0.1-0.1 0-0.2-0.2-0.2 0-0.1 0-0.1 0-0.1 0.3-0.4 0.1-0.1 0-0.2 0-0.4 0-0.2 0.1-0.2 0.2-0.1 0.3-0.1 0.2-0.1 0.3-0.4 0.2-0.1 0.2 0 0.3 0.1 0.2 0 0.3 0 0.2-0.2 0.2-0.3 0.1-0.1 0.3-0.7 0-0.2 0-0.3 0-0.1 0.1-0.1 0.1-0.1 0.1-0.1 0-0.1 0-0.2 0.1-0.2 0-0.2 0.1-0.1 0.1-0.1 0.2 0 0.1 0.2 0.2 0.5 0.2 0.2 0.2 0 0.1 0 0.3-0.1 0.2 0 0.2 0.1 0.3 0.1 0.3 0.6 0.2 0.2 0.7 0.1 0.5 0.2 0.2 0.2 0.2 0.3 0 0.2 0 0.1 0.1 0.1 0.1 0.1 0.2 0 0.2 0.1 0.2 0.4 0.2 0.2 0.2 0.2 0.2 0.3 0.1 0.2 0.1 0.3 0.1 0.1 0.1 0.2 0 0.2-0.1 0.1-0.1 0.4 0 0.2 0.1 0.1 0.3-0.1 0.2 0 0.1 0.1 0.2 0.2 0 0.2 0 0.1 0 0.3 0.2 0.1 0.4 0 0.2 0.1 0.1 0.2 0.1 0.4 0.2 0.2 0.8 0 0.3-0.2 0.5-0.1 0.8 0.4-0.3 1.6 0 0.7 0.1 0.5 0.2 0.5 0.3 0.6 0.2 0.6 0 0.4 0.3 0.2 0.2 0.2 0.3 0.7 0-0.1 0.1 0 0.1 0.3-0.1 0.8 0.2 0.7-0.2 0.4-0.2 0.4-0.1 0.3 0.1 0.4 0.3 1-0.3 0.1-0.2 0.4-0.2 1.7-0.1 0.9 0.1 0.4 0.7 1.3 0.1 0.6-0.3 0.6-0.3 0.7-0.3 0.7-0.1 1.6 0.1 1.7 0 0.9-0.5 1.6-0.1 0.9 0.1 1.7-0.1 0.5-0.2 0.8 0.2 1.2 0 0.8-0.1 0.4-0.4 0.9-0.1 0.4-0.2 1.5-0.2 0.7-0.4 0.5-0.6 0.7-0.1 0.1-0.2-0.1 0-0.8-0.1-0.3-0.6-0.3-1.6-0.2-0.3-0.4-0.1-1.5-0.3-0.7-0.4-0.4-0.1 0.1-0.2 0.3-0.1 0-0.2 0-0.2-0.1-0.1-0.1-0.1-0.1-0.3-0.1-0.6-0.7-1-0.8-0.5-0.5-1.3-1.8-0.6-0.4-0.6 0.3 0 0.3 0.2 0.8-0.2 0.4 0 0.1-0.2 0.5 0 0.1-0.2 0.1-0.2 0-0.3-0.2-0.5 0.3 0 0.3 0.2 0.4 0.2 0.5 0 0.5 0 0.2 0.2 0.2 0.1 0.1 0.1 0.1-0.3 0.2-0.5 0.2-0.5 0.2 0.1 0.3 0.4 0.1 0.5 0.1 0.2 0.1-0.2 0.3-0.4 0.2-0.4 0.1-0.6 0-0.3-0.1-0.9-0.7-3.4-1.5-1.2-1-1-0.3-0.4-0.3-1.2-1.3-0.2-0.2-0.3-0.2-0.8-0.2-0.4-0.1-0.2-0.3-0.1 0 0 0.1 0.1 0.4-0.5 0-0.4 0-0.3 0.1-0.3 0.3-0.1 0.4 0.1 0.4 3 4.9 0.2 0.7 0.1 0.9 0.2 0.4 0.1 0.2-0.1 0.2-0.3 0-2.7 0-0.2-0.2 0.1-0.7 0-0.5-0.3-0.3-1-0.9-0.2-0.2-0.3-0.1-0.2-0.2-0.1-0.4-1.3-1.2-0.3-0.1-1.4-0.9-0.1-0.3 0.4-0.4-0.2-0.4-0.9-0.9-0.4-0.3-0.2-0.1-0.2 0-0.2 0-0.2-0.2-0.1-0.1-0.1-0.3-0.2-0.2-0.6-0.2-0.4-0.2-0.3-0.3-1.4-1.8-0.9-0.9-0.1-0.3 0.2-0.4 0.1-0.2-0.3-0.4-0.3-0.3-0.2-0.1-0.5 0-0.4 0-0.3-0.1-0.2-0.4 0.1-0.2 0.2-0.3 0.1-0.3 0-0.4 0-0.2-0.1-0.1-0.3-0.4-1.2-0.7-0.5-0.5-0.3-0.3-0.4 0-0.5 0-0.2-0.1-0.2-0.1 0-0.2 0.2-0.6-0.1-0.1-0.1-0.1-0.2-0.1-0.2-0.2-0.3 0-0.2 0-0.2 0.2-0.3 0.3-0.5-0.9-0.3-0.3-0.1 0 0.3-0.2 0.3-0.1 0.7-0.5 0.5-0.3 0.7-0.5 0.6-0.6z m21.1 18.9l0.2 0.3 0.1 0.2-0.1 0.6-0.1 0.1-0.4-0.1-0.6-0.5-0.2-0.3-0.1-0.2-0.1-0.2 0.2-0.2 0.2 0 0.4 0.2 0.4 0.1 0.1 0z"
                                id="IDLA" name="Lampung">
                            </path>
                            <path data-tooltip-target="tooltip-IDBE"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#07410F"
                                d="M170.5 179.3l1.7-1.2 0.3 0 0.1 0.1 0.2 0.1 0.2 0.2 0.4 0.4 0.4 0.2 0.2 0.2 0.1 0.1 0 0.1 0.1 0.3 0.3 0.5 0.5 2 0.2 0.3 0.3 0.2 0.6 0.2 0.3 0.3 0.1 0.2 0.2 0.5 0.7 0.6 0.4 0.7 0.6 0.7 0.8 0.5 1 0.6 0.3 0.1 0.5 0.1 0.3 0.2 0.4 0.5 0.2 0.1 0.2 0 0.4-0.1 0.1-0.1 0.3 0 0.6 0.3 0.5 0.3 0.3 0.1 0.5 0.1 0.2 0.2 0.4 0.5 0.5 0.4 0.2 0.2 0.2 0.3 0.3 0.7 0.2 0.2 0.9 0.8 0.4 0.3 0.1 0.2 0.1 0.2 0.1 0.5 0 0.1-0.1 0-0.4 0-0.1 0.1 0 0.2 0.6 0.7 0.2 0.2 0.2 0 0.2 0 0.2 0 0.4 0.3 0.3 0.1 0.2 0 0.1-0.1 0.2-0.2 0.2-0.1 0.1 0 0.2 0 1.3 0.4 0.5 0.5 0.3 0.2 0.2 0.2 0.1 0.2 0 0.2 0 0.2-0.2 0.3 0 0.7-0.1 0.2-0.1 0.1-0.1 0.1-0.1 0.1 0 0.1 0.1 0.1 0.1 0.2 0.2 0 0.3 0.2 0.2 0.2 0.2 0.3 0.2 0.2 0.3 0.3 0.3 0.3 0.2 0.2 0.2 0.1 0.2 0 0.5 0.4 0.4 0.1 0.2-0.1 0.2-0.2 0.7-0.6 0.8-0.6 0.4-0.3 0.4-0.1 0.2 0.1 0.1 0.1 0.2 0.6 0.2 0.3 1.1 0.7 0.3 0.1 1.1 0.2 0.4 0.1 0.5 0.1 0.3 0.1 0.2 0.2 0.1 0.1 0.1 0.2 0.1 0.2 0 0.5 0.1 0.5-0.2 1.6-0.3 0.4-0.5-0.1-0.2 0-0.3 0.1-0.2 0-0.3-0.1-0.5-0.2-0.2 0 0 0.2 0 0.2 0.2 0.2 0.1 0.3 0 0.3-0.2 0.2-0.5 0.3-0.4 0.2-0.4 0.3-2.4 2.2-0.3 0.1-0.6 0.2-0.5 0.1 0.1 0.3 0.5 0.3 0.2 0.3 0.3 0.3 0.2 0.3 0.7 0.4 0.3 0.3 0.4 0.7 0.3 0.2 0.4 0.2 0.9 0.4 0.2 0.1 0.3-0.1 0.7-0.2 0.4 0.1 0.2 0.1 0.9 0.7 0.3-0.2 0.4 0 0.3 0 0.4-0.1 0.5 0 0.2 0 0.2 0 0.2 0 0.2 0.2 0.2 0.1 0.1 0.1 0.1 0.1 0.2 0.7 0.5 1.2 0.1 0.4 0.1 1.6 0.3 0.5 0.3-0.1 0.1 0 0.4 0.2 0.5 0.3 0.9 0.2 0.9 0.5 0.7 0.2 1.1 0.1 0.9 0.6 0.5 0.2 0.3 0 0.9 0 0.2 0.1 0.3 0.1 0.1 0.3 0.1 0.3 0.1 1.7 0.2 0.5 0.1 0.4 0.6 0.7 0.3 0.6 0.1 0.2 0.2 0.3 0.4 1.8 0.1 0.3 0 0.2 0.1 0.2 0.4 0.2 0.2 0.2 0.2 0.4-0.6 0.6-0.7 0.5-0.5 0.3-0.7 0.5-0.3 0.1-0.3 0.2-0.4-0.1-0.1-0.1-0.5 0.1-0.1-0.1-0.1 0 0-0.1-0.1-0.1-0.2-0.1-0.3-0.3-0.2-0.2-0.2-0.1-0.2-0.1-0.3 0-0.2 0-0.3 0.1-0.2 0.1-0.3 0.1-0.2-0.1-0.1-0.1-0.3-1-0.1-0.1-0.2-0.2-0.4-0.2-0.3 0.3-0.3-0.2-0.2-0.3-0.3-0.8-0.3-0.4-2.3-1.9-2.4-1.5-2.5-1-0.4-0.3-0.3-0.8-0.2-0.4-3.5-2.9-3.4-2.4-3.2-2.5-0.5-0.3-0.6-0.4-0.4-0.5-0.1-0.7 0-0.3 0.4-0.6 0.1-0.4-0.1-0.4-0.6-0.7-0.2-0.3-0.1-0.2 0-0.2 0.1-0.2 0-0.1-0.2-0.2-0.1-0.2-0.1-0.2-0.1-0.3 0-0.7-0.1-0.4-0.3-0.3-3.1-1.8-3.7-2.6-4.7-3.4-0.5-0.5-0.6-0.9-0.4-0.3-2.8-4.7-0.3-0.8-1.6-2.9-0.5-0.6-0.7-0.5-1.7-0.8-0.8-0.5-0.7-0.6-1.5-2.1 1-0.9 1.9-1.3 0.3-0.2 1-0.3 0.4-0.2 0.9-0.6 0.6-0.1z m21.2 61.6l-0.1 0.2-0.3 0.3-0.4 0.2 0.1 0.2 0.2 0.3 0.2 0.2-0.3 0.1-0.9-0.2-0.1-0.1-0.1 0.1-0.1 0-0.2 0-0.2 0 0 0.1-0.2 0.5-0.3-0.3-0.3-0.6-0.2-0.3-2.3-1.8-0.6-0.3 1-0.9 0.5-0.2 0.5 0.1 0.6 0.3 0.2 0.1 0.4 0 0.3 0.1 0.2 0.2 0.4 0.4 1.2 0.4 0.5 0.3 0.3 0.6z"
                                id="IDBE" name="Bengkulu">
                            </path>
                            <path data-tooltip-target="tooltip-IDSB"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#39B54A"
                                d="M147.5 118.8l0.5 0.4 0.2 0.3 0 0.1 0 0.2-0.1 0.1-0.1 0.2-0.5 0.3-0.1 0.2-0.1 0.2 0 0.2 0.5 1.6 0.2 0.2 0.4 0.5 0.2 0.1 0.7 1.5 2.1 0.8 0.6 0 0.2-0.2 0.1-0.3 0.1-0.1 0.2-0.1 0.3 0 0.6-0.1 0.4 0 0.3 0.1 0.4 0.4 0.8 1 1.5 0.6 0.8 0.5 0.4 0.4 0.9 0.8 0.1 0.1 0.1 0 0.1-0.1 0.1-0.1 0.2 0.1 0.1 0.1 0.1 0.1 0.1 0.1 0 0.1 0.6 0.5 0.2 0.3 0.1 0.2 0.1 0.3 0.1 0.3 0 0.3-0.3 1.7 0 0.5 0.1 1.2 0 0.2-0.1 0.1-0.2 0.1-0.2 0-1 0.1-0.2 0-0.1 0.1-0.1 0.1-0.1 0.1 0 0.3 0.1 0.4 0.6 1 0.1 0.3 0.1 0.7 0.1 0.3 0.2 0.2 0.4 0.6 0.6 1.2 1.7 1.1 0.7 0.4 0.5 0.1 0.8 1.4 3.8 4.5 1.9 1.7 2 1.2 1.2 1.2 0.7 0.5 1 0.3 1.9 0.4 1 0.3 0.2 0.1 0.2 0.1 0.1 0.2 0.1 0.1 0.1 0.2 0.2 0.4 0.2 0.5 0.1 0.4 0 0.5 0 0.4 0.2 0.2 0.4 0.2 0.2 0 0.1-0.1 0.1 0 0.1 0 0 0.1 0 0.3-0.2 0.4-0.2 0.4-0.5 0.6-0.4 0.3-0.5 0.3-0.7 0.1-0.2 0-0.2 0-0.1 0.1-0.2 0.2-0.1 0.4-0.1 0.6 0.4 1.1-0.1 0.3-0.2 0.5 0 0.2 0.2 0.2 0 0.1 0 0.2-0.2 0.6-0.2 0.4-0.5 0.4-1.6 1.3-0.8 0.7-0.3 0.4-0.5 0.8-0.3 0.2-0.3 0.1-0.6-0.1-0.3-0.2-3.5 0.5-0.4 0-0.4-0.3-0.3-0.1-0.3 0.1-0.8-0.2 0.1 2.1 0.2 1.1 0.3 1.1 0.6 1.1 0.3 0.5 0.3 0.4 0.6 0.5 0.2 0.2 0.3 0.5 0.8 1.9 0.7 2.4-0.6 0.1-0.9 0.6-0.4 0.2-1 0.3-0.3 0.2-1.9 1.3-1 0.9-0.2-0.3-1.8-2.6-1.7-3.3-0.1-0.2-0.1-0.3 0.3-0.5 0.7-0.7 0.1-0.9-0.1-0.8-0.2-0.8-0.1-0.9-0.1-0.4-0.4-0.4-1.1-1.1-0.2-0.2-0.1-0.2-0.1-0.4-0.9-1.5-1-1.1-0.3-0.5-0.1-0.5-0.2-0.8-0.1-0.9-0.2-0.2-0.7-0.7-0.3-0.3 0.1-0.1 0.1-0.2 0-0.3-0.2-0.1 0-0.1 0.1-0.1 0.1-0.1-0.1-0.8-0.1-0.5-0.2-0.2-0.4-0.1-0.8-0.5-0.4-0.1-0.1-0.1-0.2-0.2-0.1-0.1-0.1 0.1-0.1 0.1-0.5 0.1-0.2-0.1-0.2-0.2 0.1-0.1 0.3-0.3 0.1-0.2 0.1-0.1 0-0.4-0.2-0.3-0.8-0.7-0.3 0.1-0.1-0.2 0.1-0.4 0-0.2 0.1-0.1 0.1 0 0.1-0.1 0-0.1 0-0.2-0.3-0.5 0.2 0 0.2-0.1 0.3 0.1 0.2 0 0-0.1 0.1-0.2-0.1-0.2 0-0.1-0.5 0-0.2-0.2-0.5-1.1-0.2-1.3-0.3-1-0.5-0.8-2.8-3-0.6-0.6-0.8-1.6-1.1-1.3-0.7-0.7-1.4-0.9-0.2-0.2-0.2-0.5-0.4-0.3-0.9-0.5-0.4-0.4-0.2-0.4-0.1-0.4 0-0.5 0-0.4-0.2-0.2-0.2-0.2-0.2-0.2-0.2-0.3-0.2-0.2 0-0.3-0.1-0.4 0.1-0.4 0.1-0.4 0.1-0.4-0.1-0.4-0.3-0.5-1.1-1-1.2-1.2-0.4-0.3-1.5-0.9-0.9-0.3-0.8-0.1-0.4 0-0.4 0-0.3-0.2-0.3-0.3-0.4-0.7-0.3-0.3-0.5-0.1-0.4 0.1-0.7 0.4-0.4 0-0.2 0-0.2 0-0.2-0.1-0.2-0.2-0.2-0.2-0.1 0-0.1 0-0.2 0-0.2 0-0.2-0.2 2.3-2.4 1.5-1.9 0.2-0.3 0.2-0.1 0.6-0.1 0.6-0.1 0.4 0 0.5-0.2 1.4-0.9 0.5-0.1 0.4 0 0.3 0.1 0.5 0.3 0.2 0 0.2 0.1 0.2 0 0.1 0.1 0.1 0.1 0.2 0.4 0.2 0.1 0.2 0.1 0.2 0.1 1.2 0 0.2 0 0.1 0.1 0.1 0.2 0.5 0.2 0.3 0 0.3-0.1 0.9-0.3 0.2-0.2 0.2-0.1 0.1-0.5 0.1-0.2 0-0.3 0-0.2-0.1-0.1-0.5-1-0.3-0.4-0.1-0.3-0.1-0.2-0.9-0.9-0.1-0.3-0.2-0.7-0.1-0.2-0.1-0.2-0.1-0.1-0.1-0.1-0.4-0.1-0.2-0.1-0.1-0.1-0.1-0.3-0.1-0.1-0.2-0.1-0.1-0.1-0.2-0.3-0.2-0.4 0-0.2 0.1-0.1 0.1 0 0.1 0 0.7 0.4 0.2 0.1 0.3 0 0.3 0.1 0.3-0.1 0.1 0 0.3-0.2 0.5 0.1 0.9 0.4 0.8 0.2 0.3 0.1 0.3 0.2 0.7 0.2 0.8 0.2 0.2 0.2 0.2 0.1 0.5 0.4 0.3 0.2 0.3 0.1 0.3 0.1 0.2-0.1 0.3 0 0.2-0.2z m6.6 76.8l0 0.4 0.2 0.2 0.4 0.5-0.1 0.1-0.5-0.1-0.2-0.3-0.1-0.5 0.3-0.3z m-2.1 1.2l0.2 0.6 0.3 0.5 0.8 1 0.3 0.5-0.4 0.4-0.2-0.2-0.4-0.4-0.2-0.2-0.2-0.1-0.5-0.2-0.1-0.1 0-0.1 0-0.4-0.1-0.1-0.1-0.1-0.1 0-0.1 0-0.4-0.3-0.2-0.2 0-0.3 0.2 0 0 0.1 0.1 0.1 0.1 0.1 0.1 0 0.1-0.1-0.1-0.2-0.2-0.3-0.1-0.4 0-0.2 0.1-0.3 0-0.2-1-1-0.3-0.1-0.4 0-0.2 0 0.1-0.4-0.2-0.1-0.6-0.8-0.1-0.2-0.1-0.2-0.3-0.4 0-0.2 0-0.3 0.2-0.2 0-0.2 0-0.5-0.4-1.3 0-0.5 0.2-0.3 0.8-0.3 0.2 0.1 0.2 0.1 0.1 0.2 0.4 0.5 0.2 0.1 0.1 0.1 0.2 0.1 1.1 1.2 0.6 0.4 0.6 1 1 1 0.1 0.4 0 0.3-0.1 0.3 0.2 0.4-0.1 0.5-0.1 0.4-0.4-0.1-0.2 0.1-0.2 0.1-0.2-0.1-0.2-0.1-0.4 0.3-0.1 0.2 0.2 0.1 0.2 0 0.1 0.2-0.1 0.1 0 0.2z m-3.8-9.7l0 0.3 0.1 0.3 0.1 0.3-0.1 0.3-0.2 0.1-0.6 0.1-0.3 0.2-0.1 0.2-0.1 0.5-0.2 0.2-0.4 0.2-0.5-0.1-0.5-0.2-0.3-0.1-0.1 0.2-0.1 0.3-0.2 0.1-0.3-0.1-0.2-0.3 0-0.7-0.1-0.4-0.3 0.1 0.1-0.5 0.2-1.1 0-0.6-0.1-0.4-0.2-0.3-0.4-0.1 0.2-0.3 0-0.1-0.2-0.3-0.1-0.5 0-0.1 0.1-0.7 0.2-0.4 0.2-0.2 0.4 0.1 0.2 0.3 0.1 0.3 0.2 0.1 1.1 1 0.4 0.5 0.2 0.1 0.7 0.2 0.3 0.2 0.1 0.4 0.1 0.2 0.5 0.4 0.1 0.3z m-7.6-7.9l0.5 0.8 0.2 0.4 0 0.4 0-0.1-0.1 0.2-0.1 0-0.2-0.1-0.1-0.4-0.2-0.1-0.5 0-0.2-0.1-0.2-0.1-0.1-0.2-0.2-0.2-0.3 0-0.4 0-0.3-0.1-0.3-0.3-0.2-0.3-0.3-0.2-0.5-0.2-0.7 0.1-0.1-0.1-0.1-0.2 0.2-0.2 0.1-0.2-0.2-0.2-0.2 0.1-0.1-0.1 0-0.2-0.2 0-0.1 0.2-0.2-0.2-0.2-0.6-0.5-0.5 0-0.2 0-0.3 0.2 0 0.2 0.1 0.3-0.1-0.1-0.2-0.2-0.4 0-0.8 0.3-0.6 0.6-0.3 0.7 0 0.2 0.2 0.2 0.3 0.2 0.3 0.4 0.1 0.2 0.1 0.2 0.4 0.1 0.8 0.3 0.6 1.1 1.6 0 0.1-0.1 0.2 0.1 0.1 0 0.1 0.2 0 0.5 0.4 0.2 0.2z m-10.9-13l0.3 0.3 0.1 0.7 0 0.6-0.4 0.4-0.2-1.4-0.2-0.3-0.5-0.7-0.3 0.1-0.1 0.1-0.1 0 0.2 0.2 0.7 1.6 0.2 0.8 0 0.3-0.3 0.1-0.2 0-0.5-0.2-0.5 0.1-0.3 0.1-0.4 0.1-0.2 0.2-0.3 0.2-0.4-0.1-2.3-1.2-0.5-0.5-1.2-0.5-0.3-0.2-0.8-1.1-0.1-0.1-0.2-0.1-0.1-0.1 0.2-0.7-0.4-0.8-3.2-4.6-0.3-0.2-0.1-0.1 0-0.1 0-0.2 0-0.1-0.3-0.7-0.2-0.1-0.2-0.5 0.1-0.4 0.5-0.8 0.4-0.8 0.1-0.5 0-0.4 0-0.9 0-0.5 0.2-0.3 0.2-0.2 0.3-0.1 0.4-0.1 0.3 0 0.3 0 0.6 0.2 0.4 0 0.3-0.1 0.5-0.4 0.3-0.1 0.8-0.2 0.3 0-0.1 0.4 0.5 0.1 0.4 0.4 0.1 0.5-0.1 0.4-0.1-0.2-0.2-0.1-0.1 0-0.3 0 0.2 0.3 0.2 0.2 0.1 0.3 0.1 0.4 0.1 0.3 0.3 0.2 0.3 0.2 0.2 0.2 0.2 0.3 0.2 0.7 0.2 0.2 0.3 0.3 0.2 0.2 0 0.2 0 0.3 0.1 0.1 0.1 0 0.4 0.4 0.1 0.2 0 0.2-0.1 0-0.2 0.2 0 0.2 0.1 0.1 0.4 0.1 0.1 0.3 0.2 0.7 0.4 0.7 0.6 0.4 0.4 0.5 0 0.8-0.2-0.1-0.5-0.4-0.1 0 0.1 0.4 0.3 0.4 0.7 0.7 0.1 0.1 0.2 0 0.1 0.1 0.1 0.3 0 0.5 0.1 0.3 0.2 0.2 0.2 0 0.4 0 0.2 0.1 0.2 0.3 0.1 0.4-0.1 0.3z"
                                id="IDSB" name="Sumatera Barat">
                            </path>
                            <path data-tooltip-target="tooltip-IDSU"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#39B54A"
                                d="M150.3 83.3l-0.4 1.1-0.3 2.8 0 0.8 0.1 0.6 0.3 0.9 0.3 1.2 0.1 2.1 0 0.6-0.3 0.8 0 0.1-0.2 0.7 0 0.8 0.1 0.5 0.1 0.3 0.2 0.2 0.8 0.6 0.2 0.2 0.2 0.3 0.4 1.3 0.8 1.7 0.2 0.5 0 0.4-0.1 0.4-0.1 0.3-0.2 0.2-0.2 0.2-1.3 0.8-0.6 0.2-0.3 0.2-3.9 1.7-0.4 0.3-0.2 0.1-0.1 0.2-0.1 0.1 0 0.2 0 0.1 0.1 0.1 0.9 0.8 0.2 0.2 0.1 0.2 0 0.2 0 0.8 0.1 0.2 0.1 0.1 0.1 0.2 0.9 0.5 0.2 0.1 0.2 0.2 0.1 0.2 0.1 0.3 0.1 0.3-0.1 0.4-0.2 0.9-0.1 0.2 0 0.3 0.2 0.4 0 0.3 0 0.4-0.1 1.3 0 0.9 0 0.2-0.1 0.2-0.1 0.1-0.1 0.1-0.2 0.2-0.1 0.2-0.1 0.3-0.1 0.3 0 0.4 0 0.5-0.2 0.2-0.3 0-0.2 0.1-0.3-0.1-0.3-0.1-0.3-0.2-0.5-0.4-0.2-0.1-0.2-0.2-0.8-0.2-0.7-0.2-0.3-0.2-0.3-0.1-0.8-0.2-0.9-0.4-0.5-0.1-0.3 0.2-0.1 0-0.3 0.1-0.3-0.1-0.3 0-0.2-0.1-0.7-0.4-0.1 0-0.1 0-0.1 0.1 0 0.2 0.2 0.4 0.2 0.3 0.1 0.1 0.2 0.1 0.1 0.1 0.1 0.3 0.1 0.1 0.2 0.1 0.4 0.1 0.1 0.1 0.1 0.1 0.1 0.2 0.1 0.2 0.2 0.7 0.1 0.3 0.9 0.9 0.1 0.2 0.1 0.3 0.3 0.4 0.5 1 0.1 0.1 0 0.2 0 0.3-0.1 0.2-0.1 0.5-0.2 0.1-0.2 0.2-0.9 0.3-0.3 0.1-0.3 0-0.5-0.2-0.1-0.2-0.1-0.1-0.2 0-1.2 0-0.2-0.1-0.2-0.1-0.2-0.1-0.2-0.4-0.1-0.1-0.1-0.1-0.2 0-0.2-0.1-0.2 0-0.5-0.3-0.3-0.1-0.4 0-0.5 0.1-1.4 0.9-0.5 0.2-0.4 0-0.6 0.1-0.6 0.1-0.2 0.1-0.2 0.3-1.5 1.9-2.3 2.4-0.2-0.1-0.1-0.1 0.1-0.2 0.2-0.3 0.1-0.2 0-0.4-0.1-0.3-0.4-0.1-0.4-0.1 0.4-0.9 0-0.4-0.1-1.5-0.1-0.4-0.2-0.3-0.2 0.1-0.1-0.3 0.2-0.9-0.1-0.5-0.2-0.4-0.3-0.2-0.5 0.3-0.2-0.6 0.2-1.8-0.2-0.7-0.7-0.9-0.1-0.1-0.4-0.1 0-0.3 0-0.8-0.1-0.7-1.1-3.9-1.3-3.1-0.3-0.5 0-0.2 0-0.2 0.1-0.3 0-0.2 0-0.2-0.9-0.8-0.2-0.3-0.2-0.8-0.1-0.4-0.1-0.4 0-0.1-0.2-0.1-0.2-0.1-0.2-0.1-0.1 0-0.1-0.2-0.1-0.4-0.2-0.4 0-0.1 0.3-0.1 0.1 0.1 0.2 0.1 0.1 0.1 0 0.2 0.1 0.2 0.3-0.2 0.4-0.8 0.2-0.2 0.4-0.4 0.1-0.2 0-0.7-0.1-0.4-0.2-0.1-0.4 0-0.1-0.2 0.1-0.2-0.1-0.4-0.2-0.4-0.2-0.3-0.7-0.5-0.2 0.1-0.1 0.1 0 0.3 0.1 0 0.2 0.2 0 0.1-0.1 0.2 0 0.1-0.2 0.2-0.4-0.2-0.6-0.6-1.7-2.4-0.8-1-1.8-1.1-0.3-0.1-0.4-0.1-0.4 0-0.4 0-0.3 0 0-0.1-0.1-0.3 0-0.1-0.1-0.1-0.2-0.1-0.4 0-0.5 0-0.3 0-0.2-0.2-0.1-0.5-0.2-0.3-0.7-0.4-1.1-1-1.1-0.6 0.5-2.4 0.1-0.3-0.2-0.8-0.3-0.7-0.1-0.5-0.2-0.1-0.2-0.1-0.2-0.1-0.1 0-0.2-0.3-0.4-1.4-0.2-0.9 0-0.3 0.1-0.2 0.1-0.4 0.1-0.2 0-0.3 0-0.2 0.4-0.2 0.2-0.2 0.1-0.2-0.1-0.1-0.2-0.4-0.2-0.6-0.1-0.4 0.1-0.3 0.1-0.2 0.1-0.2 0-0.3-0.2-0.3-0.2-0.1-0.4-0.1-0.3-0.1-0.2-0.2-0.5-0.8-0.2-0.1-0.4-0.1-0.3-0.1-0.2-0.2 0-0.1-0.1-0.3 0.1-0.8-0.3-1.6-0.1-0.3 0-0.1 0.1-0.1 0.1 0 0.3 0.1 0.2 0 0.2-0.1 0.1-0.7 0-0.2-0.1-0.2-0.5-0.7-0.1-0.2-0.1-0.4-0.1-0.2-0.1-0.2-0.1-0.1-0.3-0.3-0.2-0.2 0.2-0.2 0.3-0.1 1.3-0.3 0.4-0.3 0.3-0.6-0.2-0.6-0.2-0.1-0.8-0.5-0.1-0.3-0.2-0.2-0.1-0.3-0.1-0.3 0-0.2 0.2-0.3 0-0.2 0-0.2-0.4-0.3-0.1-0.2-0.1-0.5-0.1-0.2-0.1-0.1-0.2-0.1-0.1-0.1-0.3-0.2-0.1-0.3-0.3-1.1-0.2-0.4-0.6-0.8-0.1-0.3 0-0.2 0.2-0.2 0.1-0.1 0.1-0.1 1.6-1.3 0.3-0.5 0-0.2-0.1-0.2 0-0.4 0.1-0.6 0.4 0.3 0.2 0 0.2 0 0.1-0.2 0-0.2 0.2-0.2 0.2-0.2 0.6-0.4 0.3-0.4 0.1-0.3 0.1-0.3 0.1-0.4 0.1-0.4 0-0.2 0.2-0.8 0.2-0.7 0.2-0.9 0.2-0.2 0.2-0.2 0-0.2 0-0.2-0.2-0.3 0-0.2 0.2-0.1 0.6 0 0.2-0.1 0.3-0.1 0.2-0.4 0.1 0 0.7-0.2 0.2 0 1.5 0.1 0 1.5-0.1 0.2-0.4 0.3-0.9 0.3-0.2 0.1-0.1 0.2 0 0.3 0 0.7 0.4-0.5 0.3-0.2 0.4-0.1 0.1-0.1 0.3-0.4 0.1 0 0-0.1 0.8 1.8 0.1 0.2 1.1-0.2 0.4 0 0.5 0.2 0.7 0.4 0.4 0.1 0.3 0.1 0.4 0.7 0.2 0.2 0.3 0 0.4-0.1 0.3 0.1 0.2 0.7 0.2 0.3 0.3 0.2 0.3 0.1 1.3 0.4 0.5 0.8 0 0.8 0.2 0.6 1.7 1.6 2 0.9 1.2 0.2 0.4 0.2 0.6 0.5 0.3 0.1 0.6 0.1 0.4 0.3 0.5 0.5 1.6 0.7 1.8 1.3 1.9 1.5 0.3 0.2 0.7 0.1 0.3 0.2 0.4 0.4 0.5 0.3 0.2 0.2 0.2 0.5 0.1 0.3 0.5 0.5 0.6 0.5 0.6 0.3 1.9 0.5 0.6 0.3 0.4 0 0.3 0.2 0.6 1.2 1 0.9 0.4 0.5 0.1 0.7 0.6-0.1 0.4 0.4 0.4 0.4 0.5 0.3 0.5 0.3 0.2 0.7 0.2 2.2-0.1 0.3-0.1 0.3-0.2 0.2-0.2 0.3-0.1 0.4 0 0.1-0.2 0.3 0 0.2 0.1 0.1 0.2 0.1 0.1 0 0.2 0.1 0.1 0.2 0 0.1-0.1 0.1 0 0.1 0.5 0.7-0.1 0.2 0.1 0.1 0.1 0 0.1-0.1 0.1-0.2 0-0.1-0.1-0.1-0.1-0.2 0-0.6-0.1-0.2-0.6-0.3-0.1-0.2 0.2-0.3 0.7-0.2 0.7 0.1 0.4 0.7 0 0.3 0 0.5 0 0.3 0.2 0.6 0.1 0.3 0.1 0.4 0.3 0.5 0.3 0.3 0.2-0.2 0-0.3-0.3-0.7-0.1-0.3 0-0.8 0.1-0.4 0.2-0.3 0.2-0.3 0.3-0.2 0.4-0.1 0.5 0 0.2 0.1 0 0.1 0 0.2 0.1 0.2 0.1 0.1 0.4 0.2 0.1 0.1 0.1 0.1 0 0.5 0.1 0.2 0.2 0.3 0 0.1 0.1 0.2 0.5 0.3 0.2 0.1 0.1 0.1 0 0.2z m-35.8 59.6l0 0.3 0 0.2-0.2 0.3-0.1 0.2 0.2 0.2 0.1 0.3 0 0.3-0.1 0.3-0.1 0 0-0.1 0-0.1-0.1-0.1 0-0.1-0.2 0.2-0.1 0-0.1 0-0.2-0.1 0.2-0.2-0.1-0.2-0.3-0.1-0.3 0.1-0.1 0.3-0.1 0.3 0 0.4 0 0.1-0.6-0.2-1.5-0.8-0.8-0.2 0.2-0.1 0.2-0.1 0.1-0.1 0.2 0 0.3 0.2 0.2 0 0.1-0.3 0.4-1.2 0.1-0.4-0.1-0.9 0-0.4 0.1-0.2 0.4-0.5 0.2-0.2 0.2-0.1 0.1 0 0.2-0.1 0.1-0.1 0-0.2-0.2-0.6 0.2-0.3 0.3 0.1 0.2 0.2 0.8 1.4 0.3 0.7-0.2 0.5 0.2 0.3 0.1 0.4-0.1 0.4-0.1 0.3z m-0.5-5.9l0.4 0.8 0.7 0.8 0.5 0.7-0.1 0.8 0-0.1-0.1 0.2-0.1 0.2-0.1 0.2 0.1 0.2 0.1 0.3 0 0.3-0.2 0-0.5-1.3-2.1-3-0.3-0.5-0.6-1.3-0.4-0.6-0.2-0.2-0.3-0.1-0.3-0.2-0.1-0.2 0.2-0.1 0.4-0.2 0.7-0.1 0.9 0.4 0.7 0.8 0.5 1.1 0.2 1.1z m1.5-36.5l0.3 0.2 0.4 0.4 0.2 0.4-0.4 0.1-0.4 0.1-0.6 0-0.6-0.1-0.7-0.3-0.2 0-0.3-0.1-0.1-0.2-0.1-0.3 0.1-0.3 0.3-0.3 0.3-0.1 0.3 0.1 0.2 0.3 0.3 0.5 0.3 0.2 0.2-0.1 0.2-0.3 0.3-0.2z m-12.4 13.6l0.2 0.2-0.1 0.5-0.3 0.7 0-0.2-0.3 0.6-0.1 0.6 0.1 1.2 0 0.3-0.2 0.5-0.1 1.1-0.1 1.5-0.1 0.4-1 1.2-0.1 0.1-0.2-0.1-0.2-0.1-0.5-0.4-0.2 0.4-0.3 0-0.5-0.4 0 0.1-0.2 0.2-0.2 0-0.2-0.3-0.1-0.1-0.1-0.1-0.1 0 0.2-0.5-0.1-0.4-0.3-0.3-0.2-0.3 0-0.3 0-0.5-0.1-0.2-0.1-0.2-0.3-0.7-0.1-0.2-0.3-0.9-0.8-0.7-1.7-1.1 0.1-0.3-0.3-0.2-0.4-0.1-0.4 0-0.8 0-0.2-0.1 0.1-0.5-0.1-0.8-0.3-0.8-1-1.6-0.2-0.6 0-0.1-0.2-0.2-0.2-0.1-0.2-0.2-0.2-0.5-0.3-0.2 0-0.2-0.1-0.3-0.1-0.1-0.1-0.1-0.1-0.1-0.2-0.1-0.2-0.1-0.2-0.1-0.3-0.1-0.1-0.2-0.2-0.5-0.1-0.2-0.8-0.8-0.4-0.3-0.5-0.2-0.3 0.2-0.1-0.4 0.3-0.2 0.6-0.2 0.4 0 0.2 0.1 0.2 0.1 0.2 0.2 0.1 0.1 0.1-0.1 0.2 0 0.5 0.1 0.6-0.1 0.5-0.1 0.3-0.3 0.9-0.7 0.2-0.3 0.1-0.3-0.1-0.5 0.1-0.2 0.3-0.1 0.5 0.5 0.3 0.2 0.3-0.1 0.2-0.1 0.2 0.1 0.2 0.3 0 0.3 0.1 0.1 0.1 0 0.3 0 0.2 0 0.2 0 0.1 0 0 0.1 0.1 0.2 0 0.1 0.5 0.5 0.1 0.1 0.1 0.1 0.1 0.4 0.1 0.2 1.1 1 0.2 0.4 0.3 0.8 1.5 1.9 0.4 0.2 0.8 0.2 0.4 0.2 0.3 0.2 0.2 0.2 0.4 0.5 0.1 0.2 0.1 0.3 0.1 0.3 0.3 0.1 0.4 0 0.4 0.1 0.2 0.3 0.4 0.8 0.1 0.1z m12.3 16.6l0.8-0.3 0.7 0 1 0.1 0.8-0.1 0.5 0.1 0.5 0 0.8 0.1 0.6 0.4 0.3 0.7-0.2 0.4-0.8 0-0.8 0-0.7 0.3-0.7 0-0.8-0.2-0.6-0.1-0.9 0-0.7-0.1-0.2-0.4-0.1-0.7 0.5-0.2z"
                                id="IDSU" name="Sumatera Utara">
                            </path>
                            <path data-tooltip-target="tooltip-IDAC"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#39B54A"
                                d="M109.8 48.9l-1.5-0.1-0.2 0-0.7 0.2-0.1 0-0.2 0.4-0.3 0.1-0.2 0.1-0.6 0-0.2 0.1 0 0.2 0.2 0.3 0 0.2 0 0.2-0.2 0.2-0.2 0.2-0.2 0.9-0.2 0.7-0.2 0.8 0 0.2-0.1 0.4-0.1 0.4-0.1 0.3-0.1 0.3-0.3 0.4-0.6 0.4-0.2 0.2-0.2 0.2 0 0.2-0.1 0.2-0.2 0-0.2 0-0.4-0.3-0.1 0.6 0 0.4 0.1 0.2 0 0.2-0.3 0.5-1.6 1.3-0.1 0.1-0.1 0.1-0.2 0.2 0 0.2 0.1 0.3 0.6 0.8 0.2 0.4 0.3 1.1 0.1 0.3 0.3 0.2 0.1 0.1 0.2 0.1 0.1 0.1 0.1 0.2 0.1 0.5 0.1 0.2 0.4 0.3 0 0.2 0 0.2-0.2 0.3 0 0.2 0.1 0.3 0.1 0.3 0.2 0.2 0.1 0.3 0.8 0.5 0.2 0.1 0.2 0.6-0.3 0.6-0.4 0.3-1.3 0.3-0.3 0.1-0.2 0.2 0.2 0.2 0.3 0.3 0.1 0.1 0.1 0.2 0.1 0.2 0.1 0.4 0.1 0.2 0.5 0.7 0.1 0.2 0 0.2-0.1 0.7-0.2 0.1-0.2 0-0.3-0.1-0.1 0-0.1 0.1 0 0.1 0.1 0.3 0.3 1.6-0.1 0.8 0.1 0.3 0 0.1 0.2 0.2 0.3 0.1 0.4 0.1 0.2 0.1 0.5 0.8 0.2 0.2 0.3 0.1 0.4 0.1 0.2 0.1 0.2 0.3 0 0.3-0.1 0.2-0.1 0.2-0.1 0.3 0.1 0.4 0.2 0.6 0.2 0.4 0.1 0.1-0.1 0.2-0.2 0.2-0.4 0.2 0 0.2 0 0.3-0.1 0.2-0.1 0.4-0.1 0.2 0 0.3 0.2 0.9 0.4 1.4 0.2 0.3 0.1 0 0.2 0.1 0.2 0.1 0.2 0.1 0.1 0.5 0.3 0.7 0.2 0.8-0.1 0.3-0.5 2.4-0.2-0.1-2.1-1-0.5-0.5-0.5 0-1 0.4-0.3 0.1-0.3-0.1-0.4-0.3-0.3 0.1-0.1-0.1-0.2-0.1-0.1-0.1-0.2 0-0.3 0.1-0.3 0-0.2-0.2-0.8-1.3-0.6-0.6-0.2-0.3-0.1-0.4 0-2.3-0.3-2.8-0.7-3.5-0.1-0.4-0.2-0.1-0.3-0.1-0.9-0.2-1-0.5-0.4-0.1-0.4-0.1-0.4-0.1-0.3-0.3-1.5-1.8-0.3-0.6-0.3-0.6-0.3-1.7-0.3-0.7-0.6-0.5-0.7 0-0.4-0.1-0.2-0.2-0.2-0.2-2.9-5.1-0.3-0.5-1.6-1.1-0.3-0.6-0.3-0.6-0.1-0.4-0.3-0.1-0.1-0.1-0.5-0.2 0-0.2-0.2 0-0.2-0.1-0.2-0.1-0.6-0.4-0.4-0.1-3.9 0.1-0.8-0.2-0.8-0.5-1-0.9-3-4-1.3-1.3-0.1-0.1-0.1-0.3-0.1-0.2-0.1-0.1-0.4-0.1-0.1-0.1-0.2-0.1-0.2 0-0.2 0-0.1 0.1-0.1 0-0.3-0.2-0.9-1.1-0.3-0.2-0.4-0.1-0.4-0.1-2.1-2.4-1.8-1.7-0.1-0.3-1-0.8-0.6-0.9-1.4-1-0.8-0.9-0.4-0.2-0.4 0.1-0.2-0.1-0.1-0.2 0-0.1 0.2-0.2 0.1-0.1-0.1-0.1-0.1 0-0.1 0-0.1-0.1-0.6-0.4-0.2-0.3-0.5-1-0.4-0.5-0.2-0.2-0.4-0.2-0.1-0.2-0.2-0.2 0-0.1 0-0.1 0-0.2-0.1-0.3-0.3-0.5-0.1-0.4-0.3-0.5-0.1-0.5-0.6-1.5-0.2-0.4-0.3-0.3-0.2-0.3-0.1-0.4-0.2-0.2-0.4-0.1 0.4-0.6 0.1-0.4-0.2-0.4-0.4-0.4-0.3-0.2-0.2-0.2 0-0.2-0.1-0.3-0.1-0.3-0.1-0.2-0.2-0.1-0.5-0.1 0.2-0.3 0.3-0.4 0.2-0.3 0-0.3 0.3-0.4 0.1-0.4 0-0.3-0.1-0.2-0.3-0.5 0.3-0.2-0.2-0.3-0.3-0.3 0.1-0.3-0.5-0.6-0.1-0.2 0.3-0.6 0.2-0.1 0.3 0.1 0.3-0.1 0.2 0 0.1 0.1 0.2 0 0.2-0.1 0.3-0.3 0.2-0.1 0.4-0.3 0.2 0 0.3 0 0.2-0.1 0.9-0.6 0.3-0.1 0.4 0.1 0.5 0.5 0.4 0.2 0.1 0.2 0.2 0 0.2-0.1 0.3-0.3 0.8-0.1 0.7 0.1 3 0.9 1.5 1 0.3 0.1 0.4 0.1 0.3 0.1 0.1 0.4 0.2 0.9 0.5 0.7 2.5 2 0.6 0.3 0.8 0.3 3.2 0.5 0.3 0.1 0.8 0.4 0.3 0.1 0.9 0.2 0.5 0 0.4-0.2 0.3-0.2 0.4 0.1 0.4 0.3 0.4 0.1 0.8 0.1 1.6-0.2 0.7-0.2 2-0.7 0.9-0.4 0.4 0.1 0.9 0.3 0.2 0 0.3-0.1 1-0.1 1.2 0.4 0.8 0.3 0.7 0.5 0.8 0.3 0.3 0.5 0.2 0.2 0.4 0.1 0.6 0.2 0.9-0.2 4.5-1.9 0.6 0.2 2.7 3.3 3.3 2.7 0.8 0.4 0.4 0.3 0.3 0.3 1 1.6 0.1 0.4 0.2 1.6 0.2 0.6 0.5 0.9 0 0.2 0 0.5-0.2 0.5-0.1 0.4 0.1 0.1 0.6-0.1 0.2 0 0.2 0.3 0.1-0.3 0.1-0.1 0.3 0.2 0.1 0.1 0.1 0.1 0.1 0.1 0.1 0 0.2-0.1 0.2 0 0.5 0 0.4 0.3 0.3 0.3 0.2 0.4 0.1 0 0.1-0.1 0.1-0.1 0.1 0 0.3 0.2 0.4 0.6 0.3 0.2 0.2 0.3 0.2 0.1 0 0.2 0.1 1-0.3 1.4 0 0.1z m-22.1 44.2l-0.1 0.1-0.4 0.3-0.1 0.1 0.1 0.2-0.2 0.2-0.2-0.1-0.7-1.4 0.2 0.1 0.2-0.3 0.1-0.1 0.1-0.1 0.4-0.1 0.3 0.1 0.2 0.3 0.1 0.4 0 0.3z m-10-1.4l0.3 0.1 0.2 0.2 0.1 0.2-0.2 0.3-0.4 0.3-0.4 0.1-0.3-0.2 0-0.6 0.1-0.2 0.1-0.2 0.2 0 0.3 0z m13.6-0.4l0.1 0.4 0.1 0.5 0 0.4 0 0.5 0 0.2-0.1 0.1-0.1 0.1-0.2 0.1 0-0.3 0-0.2-0.3 0-0.2-0.2-0.1-0.4-0.2-0.3-0.9-0.9-0.2-0.2-0.3-0.3-2.1-0.8 0.1-0.1 0.3-0.1 0.9-0.2 0.1 0 0.1 0.1 0.1 0.1 0.1 0.3 0.4 0 0.2-0.1 0.3-0.2 0.2-0.1 0.4 0 0.3 0 0.2 0.2-0.2 0.2 0.5 0.5 0.3 0.1 0.1 0.2 0.1 0.4z m-16.8-5.3l-0.1 0.4 0.1 0.4 0 0.3-0.5 0 0.2 0-0.7 0.3-0.2 0.1-0.2 0-0.8-0.5-0.4 0.2-0.3 0-0.3-0.1-0.2-0.2 0.1-0.1 0.2-0.3 0.1-0.1-0.5-0.2-0.4-0.6-0.9-0.2-3.4-2.6-0.5-0.3-0.4-0.1-0.2 0-0.5 0-0.1-0.1-0.2-0.2-0.1 0-0.1 0.1 0 0.1-0.1 0.1-0.2 0-0.1 0.1-0.2 0-0.4-0.3-0.4-0.1-0.1-0.1-0.1-0.2 0-0.2-0.1-0.1-0.2-0.2-1.5 0-0.1-0.1 0.1-0.3 0.1-0.4-0.1-0.2-0.6-0.4 0.1-0.3-0.3-0.2-0.3-0.1 0.1-0.2 0-0.2-0.2-0.1-0.4 0.1-0.2-0.1-0.1-0.2 0-0.4 0.1-0.4 0.3-0.2 1.1 0 0.2-0.1 0.1-0.2-0.1-0.1-0.2-0.1 0-0.2 0.1-0.4 0-0.2 0.2-0.4 0.1-0.1 0.1-0.2 0.2 0.1 0.1 0.2 0.1 0.1 1.4 0.1 0.5 0.2 0 0.7-0.4-0.3-0.1 0.1 0 0.7 0.6-0.3 0.3 0.3 0.7 0.4 0.3 0.7 0.4 0.3 0.5 0.1 1.3 0.3 0.3 0.1 0.4 0.3 0.1 0.4-0.6 0.8 0 0.4 0.3-0.2 0.2 0 0.2 0.1 0.2 0.1 0.2 0.1 0.1 0 0-0.1 0-0.1-0.3-0.2-0.1-0.2 0.3 0 1.7 1.6 0.3 0.1 0.6 0.4 0.3 0 0.3 0.1 0.3 0.3 0.5 0.6 0.1 0.3 0.1 0.4 0.1 0.3 0.3 0.1 0.1-0.2 0-0.3 0-0.6 0.3 0.3 0.1 0 0.2-0.1 0.4 0.4 0.4 1.1 0.3 0.4z m-25.8-63.7l0.3 0.4-0.2 0-0.2 0-0.2 0.1-0.1 0.2-0.2-0.2-0.3 0-0.2 0-0.2-0.1 0-0.3 0.1-0.1 0.3-0.2 0.1-0.1 0.1-0.4 0.3 0.2 0.4 0.5z m-1.2-1.6l0.2 0.2 0.1 0.2 0 0.2-0.2 0.2-0.5-0.3-0.7 0.6-0.1-0.3 0-0.1 0.1-0.2-0.2 0-0.1-0.1 0.1-0.1 0.1-0.1 0-0.1-0.1-0.2 0-0.1 0.2-0.1 0-0.1-0.2-0.1-0.2 0-0.1 0-0.2 0.1-0.2-0.1 0-0.2 0.2-0.2 0.2-0.1 0.5 0.1 0.4 0.3 0.4 0.4 0.4 0.3-0.1-0.1z m4.5-3.7l0.2 0.2 0.6 0.9 0 0.7-0.2 0 0-0.2-0.1-0.1-0.3-0.1 0 0.6-0.1 0.2-0.2 0.1-0.4 0-0.3-0.1-0.3-0.2-0.3-0.2-0.1-0.3-0.2-0.4-0.1-0.3-0.4-0.3-0.2-0.3-0.2-0.3 0-0.2 0.5 0 0.2 0.1 0.2 0.2 0.3 0.5 0.2 0.3 0.3-0.1 0.2-0.2 0.1-0.3 0.2-0.2 0.4 0z"
                                id="IDAC" name="Aceh">
                            </path>
                            <path data-tooltip-target="tooltip-IDKT"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#39B54A"
                                d="M360.8 190.9l0.6-0.2 0.2-0.1 0.2-0.1 0.1-0.2 0.3-0.4 0.3-0.8 0.2-0.4 0.3-0.2 1.1-0.4 0.3-0.2 0.2-0.2 0.1-0.2 0.1-0.3 0.1-0.3-0.1-0.3-0.2-0.4-0.1-0.3-0.1-0.2-0.1-0.3-0.1-0.6 0-1.8 0-0.4 0.2-0.8 0-0.4-2.5-5.5-0.2-0.6-0.1-0.5-0.1-1.3 0-0.4 0.6-2.3 0.1-0.8 0-0.3 0-0.3 0.2-0.8-0.1-0.3-0.1-0.2-0.2-0.1-0.1-0.2 0-0.1 0.2-0.5 0-0.3-0.1-0.2-0.1-0.2-0.2 0-0.1 0-0.1 0-0.3 0.2-0.3 0.1-0.2-0.1-0.3-0.1-0.2-0.3-0.1-0.2-0.1-0.2 0.1-0.2 0.1-0.2 0.2-0.1 0.4-0.6 0.4-0.3 0.7-0.5 0.5-0.1 0.3 0 0.2 0 0.2 0.1 0.3 0 0.1 0 0.3 0.2 0.2 0 0.3-0.1 0.7-0.7 0.4-0.3 0.6-0.8 0.4-0.4 0.6-0.3 0.5-0.2 0.6-0.4 0.4-0.8 0.3-0.4 0.2-0.1 0.4-0.4 0.5-0.4 1.1-0.5 0.3-0.4 1.1-0.3 0.7-0.4 0.2-0.2 0.2-0.4 0-0.3-0.2-0.5 0-0.3 0-0.3 0.2-0.2 0.6-0.8 0.4-0.4 2-1.3 1.1-0.6 0.3 0 0.8-0.5 2.1-1.4 1.8-0.5 0.5-0.5 0.1-0.4 0.1-0.2 0.2-0.1 0.3 0 2.4 0 1 0.2 0.4 0 0.4 0 0.4 0.2 0.3 0 0.2-0.1 1.9-0.7 0.5-0.3 0.2-0.1 0.2 0.1 0.6 0.1 0.3 0 0.3 0 3.5-1.4 0.2-0.2 0.1-0.1 0.4-0.2 2-0.7 0.6-0.3 0.5-0.4 1.1-0.4 0.2 0 0.2-0.1 0.4 0.1 0.3 0.1 0.5-0.1 0.1-0.1 0.1-0.2 0.1-0.3 0.1 0 0.1-0.1 0.2 0 0.2-0.1 0.3-0.1 0.1-0.1 0.2 0 0.1 0.1 0.2 0.2 0.4 0.7 0.2 0.2 0.2 0.2 0.2 0.1 0.2 0.1 0.4 0 0.1-0.2 0.4-1 0.4-0.8 0-0.3 0-0.2-0.2-0.4-0.2-0.2-0.1-0.2-0.3-0.1-0.1-0.1-0.1-0.1-0.1-0.1 0.1-0.3 0-0.2 0.4-0.5 1.1-1.2 0.1-0.1 0.1 0 0.1-0.1 0.3-0.1 0.1 0 0.2 0 0.1-0.1 0.1-0.1 0.2-0.3 0.2-0.1 0.1-0.1 0.2 0 0.1-0.1 0.1-0.1 0.1-0.5 0.3-0.7 0.5-1 0.1-0.2 0-0.1 0-0.3-0.4-1.4 0-0.2 0-0.2 0-0.2-0.1-0.3-0.5-0.9-0.2-0.4-0.8-0.5-0.2-0.3-0.3-0.6-0.6-0.8 0.7-0.3 0.8-0.2 0.3-0.1 0.2-0.1 0.2 0 0.2 0.1 0.7 0.2 0.2 0 0.4 0 0.4 0 0.3 0 0.2-0.2 0.7-0.5 0.2-0.1 0.2 0 0.2-0.1 0.2-0.2 0.1-0.5 0-0.7 0-0.3 0.2-0.3 0.3-0.3 0.3-0.3 0.2-0.4 0.3-0.7 0.2-0.2 0.3-0.1 0.1-0.2 0.4-0.4 0.5-0.3 0.5-0.2 1-0.1 0.3-0.1 0.8-0.4 0.4 0 0.8-0.1 0.3-0.1 0.2-0.1 0.2-0.3 0.2-0.2 0.4-0.2 0.3 0 0.9 0 0.8-0.1 0.9 0.1 0.3 0 0.3 0.2 0.5 0.3 0.3 0.2 0.3 0.1 1.5 0.2 0.3 0.1 0.4 0.1 5.6-0.7 0.4-0.2 0.4-0.4 0.6-0.4 1-0.3 1-0.2 0.4-0.1 0.2-0.2 0.2-0.3 0.1-0.1 0.2-0.1 1.1 0 0.4 0 0.2 0.1 0.1 0.1 0.2 0.3 0.1 0.2 0.1 0 0.2 0.1 0.1 0.1 0.2 0.1 0.1 0.2 0.1 0.2 0.1 0.2 0.2 0.3 0.1 0.1 0.1 0.9 0.1 0.2 0.1 0.3 0.1 0.2 0 0.2 0 0.3-0.2 0.2-0.2 0.3-0.5 0.4-0.1 0.1-1.2 2.3-0.2 0.7-0.1 0.3 0 0.6 0.1 0.3 0.1 0.2 0.1 0.4 0.1 0.3 0 0.2 0 0.5 0 0.2 0.1 0.2 0.5 0.7 0.2 0.5 0.1 0.2 0 0.3 0.1 0.2-0.1 0.3-0.6 1.5-0.3 1-0.1 0.3 0 0.2 0.1 0.2 0.1 0.2 0 0.1 0.1 0.2-0.1 0.2 0 0.3 0 0.2 0.2 0.3 0.2 0 0.1-0.1 0.7-0.7 0.2-0.1 0.6-0.2 0.2-0.2 0.1-0.1 0.1-0.1 0.2-0.4 1.6-1.8 0.5-0.4 0.3 0 0.4 0 0.3-0.1 0.2 0 0.6 0.2 0.6 0.1 0.1 0 0.1 0.1 0 0.1 0 0.1-0.1 0.2-0.1 0.4-0.2 1.4-0.1 0.2-0.1 0.2-0.5 0.9-0.1 0.4-0.2 0.7 0 1.4 0 0.4 0.2 0.8 0.1 0.3 0.1 1 0.1 0.4 0.2 0.7 0.4 0.7 1 1.4 0.1 0.3 0.1 0.4 0 0.8 0.5 2.3 0.1 0.3 0.6 0.8 0.1 0.3 0.1 0.3-0.1 0.3 0.1 0.2 0.1 0.3 1 0.8 0.2 0.1 0.2 0.1 0.7 0.2 0.6 0.3 0.2 0 0.1 0 0.2 0.1 0.3 0.1 0.2 0.2 0.4 0.4 0.1 0.2 0.2 0.4 0.1 0.1 0.4 0.4 0.2 0.3 0.2 0.2 0.1 0.2 0.1 0 0.1 0 0.2 0 0.2-0.2 0.3-0.1 0.4-0.1 0.2 2.4-0.1 0.3-0.1 1-0.1 0.4-1 1.9-0.3 0.4-0.3 0.3-0.3 0.1-0.2 0-0.3-0.1 0.1-0.8 0-0.3-0.1-0.2-0.3 0-0.4 0.1-1.8 0.8-0.9 0.2-0.5 0-0.2 0.1-0.9 0.3-0.2 0.2-0.1 0.2-0.1 0.4-1.3 5.7-0.1 0.7 0.1 0.6 0.3 0.5 0.1 0.5-0.1 0.5-0.3 0.7-0.4 0.4-0.2 0.4 0 0.2 0.4 0.9-2.8 2.7-0.7 0.5-0.4 0.2-1 0.2-1.1 0.3-2.4 0.6-0.3 0.1-0.2 0.1 0 0.1 0 0.1 0 0.2 0 0.6 0 0.2 0.2 0.4 0.1 0.2 0.1 0.1 0.1 0.1 0 0.2 0 0.7 0 0.2-0.1 0.2-0.3 0.6-0.3 0.7 0 0.2-1 0.9-0.2 0.4-0.2 0.4-0.1 0.4-0.1 0.4 0 0.5-0.1 0.4-0.2 0.3-0.3 0.4-0.2 0.1-0.1 0.1-1.4 0.5-0.2 0.1-0.1 0.2 0.1 0.2-0.1 0.1-0.1 0.2-0.2 0.3-0.1 0.1-0.1 0.1-0.4 0.1-1.4 0.3-0.2 0-0.1 0.1-0.4 0.6-0.2 0.3-0.1 0.2-0.4 2-3.2 8.5-0.4-0.2-0.3-0.2-0.2-0.3 0-0.4 0.2-0.3 0.4-0.2 0.2-0.2 0.4-1.3 0.5-0.6 0.2-0.3 0.1-0.4-0.8 0.7-0.7 1.1-0.8 1.1-1.2 0.5-0.7-0.1-0.5-0.2-0.4-0.4-0.1-0.7 0.4-1.9-0.1-0.5-0.1 0.1-0.1 0.2-0.2 0.9 0 0.4-0.1 0.2-0.2 0.2-0.8 1.2-1.2 0.6-0.6 0.2-1.3 0.7-1.4 0.5-2 0.3-1.6-0.3-0.1-1.4 0.2-0.9 0.1-0.8 0-0.8-0.4-1.4-0.2-0.3-0.4-0.1-1.6 0-0.5 0.1-0.4 0.2-0.3 0.3-0.1 0.5-0.1 0.3-0.3 0.2-1.2 0.1-0.2-0.1-0.2-0.2 0-0.5-0.1-0.3-0.2-0.3-0.2-0.3-0.3-0.1 0.8 1.7 0.1 0.5-1-1.2-0.3-0.2-0.6-0.3-0.2-0.2-0.2-0.3-0.2-0.2-0.1-0.4-0.1-0.6-0.2-0.2-0.4-0.3-0.4-0.2-0.7-0.2-0.5-0.3-1.3-2.3 0 1.3-0.1 0.4-0.1 0.1-0.2 0.4-0.1 0.2-0.1 0-0.3 0-0.1 0.1-0.2 0.1-0.2 0.2-0.3 0.4-0.2 0.4 0.2 0.4 0.3 0.2 0.1 0.1 0.2 0.1 0.2 0.1 0.4 0 0.2 0.1 0 0.1-6.9 4.5-0.7 0.5-0.3 0.2-0.8-0.2-0.1 0.1 0 0.2-0.2 0.2-0.2 0-0.2 0.1-0.4-0.1-2.6-2-0.9-0.3-0.9-0.2-2 0.3-1.7 1.1-2.8 2.8-0.8 0.7-0.5 0.2-0.4 0-0.4-0.2-0.9-0.3-0.3-0.3 0-0.4 0.5-0.8 0.1-0.5 0.1-1.2 0-0.5-0.5-3.3 0-1 0.3-1.6-0.2-0.9-1.2-2.1-0.1-0.8 0-0.9-0.1-0.1-0.1 0-0.2-0.1 0-0.2 0-0.4 0.3-0.5 0.1-0.4-0.3 0.2-0.3 0.2-0.3 0.3-0.1 0.3 0.1 0.9 0.1 0.3-0.1 0.2-0.2 0.2-0.2 0.1-0.1 0.1 0 0.1-0.2 0.1 0 0.1-0.1 0.2 0.1 0.1 0.1 0.1 0.1 0 0.2 0.2 0.1 0.1 0.1 0 0 0.2 0 0.1-0.2 0-0.1 0-0.8 0.3-1.3 1-0.3 0.1-0.3 0-0.4-0.1-0.2-0.3 0-0.3-0.2-0.3-0.5-0.5-0.8-0.2-1.7-0.1-0.7 0-0.6 0.2-4.6 2.5-1.5 0.5-0.9 0.1-0.7-0.2-1.6-0.9-0.4-0.1-0.7 0-0.3-0.1 0-0.3 0.2-0.3 0.2-0.2 0.6-0.5 0.6-0.3 0.7-0.2 1.7-0.7 0.2 0-0.2-0.3z"
                                id="IDKT" name="Kalimantan Tengah">
                            </path>
                            <path data-tooltip-target="tooltip-IDKS"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#585858"
                                d="M427.1 201.8l3.2-8.5 0.4-2 0.1-0.2 0.2-0.3 0.4-0.6 0.1-0.1 0.2 0 1.4-0.3 0.4-0.1 0.1-0.1 0.1-0.1 0.2-0.3 0.1-0.2 0.1-0.1-0.1-0.2 0.1-0.2 0.2-0.1 1.4-0.5 0.1-0.1 0.2-0.1 0.3-0.4 0.2-0.3 0.1-0.4 0-0.5 0.1-0.4 0.1-0.4 0.2-0.4 0.2-0.4 1-0.9 0-0.2 0.3-0.7 0.3-0.6 0.1-0.2 0-0.2 0-0.7 0-0.2-0.1-0.1-0.1-0.1-0.1-0.2-0.2-0.4 0-0.2 0-0.6 0-0.2 0-0.1 0-0.1 0.2-0.1 0.3-0.1 2.4-0.6 1.1-0.3 1-0.2 0.4-0.2 0.7-0.5 2.8-2.7-0.4-0.9 0-0.2 0.2-0.4 0.4-0.4 0.3-0.7 0.1-0.5-0.1-0.5-0.3-0.5-0.1-0.6 0.1-0.7 1.3-5.7 0.1-0.4 0.1-0.2 0.2-0.2 0.9-0.3 0.2-0.1 0.5 0 0.9-0.2 1.8-0.8 0.4-0.1 0.3 0 0.1 0.2 0 0.3-0.1 0.8-0.5 0.1-0.3 0.1-0.2 0.2-0.4 0.4-0.8 1 0.9 0.1 0.3 0.1 0.3 0.1 0.1 0.3 0.1 0.6 0.1 0.3 0.1 0.3 0.4 0.4 0.1 0.2 0.1 0.4 0.1 0.5 0.8 2 0.1 2.4-0.1 0.4 0 0.2-0.1 0.4 0.1 0.3 0.2 0.6 0.3 0.3 0.3 0.2 0.6 0.1 0.2 0.1 0.2 0.2-0.2 0.9-0.2 1.4 0.1 0.4 0.5 1.4 0.2 1.2 0 0.1 0 0.2 0.2 0.3 0.1 0.1 0.1 0 0.5-0.1 0.2-0.1 0.1-0.2 0.1-0.3 0.1-0.1 0.4-0.1 0.2-0.2 0.4-0.3 0.2-0.1 0.2-0.1 0.6 0.3 0.4 0.1 1.7 0.1 0.6 0.1 4.6 0.3 1.5 0.3 2 0.6 0.1 0.1-0.7 2.9-0.4 0.8-0.7 0.2-0.2-0.3-0.1-0.4-0.1-0.4-0.4-0.2-0.5 0-0.2 0-0.1 0.1-0.2 0.2-0.1 0-0.1 0-0.2 0 0-0.1-0.1 0-0.7 0.1-0.2 0-0.2 0.1-0.1 0.2-0.1 0.2 0.1 0.1 0.3 0.1 0 0.4-0.5 0.8 0.3 0.2 0.6-1 0.5-0.2 0.3 0 0.2 0.3 0 0.3-0.4 0.9-0.1 0.4 0.1 3.4-0.1 0.7-0.3 0.7-0.3 0.6-1 1.2-0.5 0.4-0.3 0.1-0.3-0.2-0.2-0.3-0.1-0.9-0.1-0.2 0-0.1-0.2-0.2-0.3-0.1-0.2-0.1-0.2-0.3-0.1-0.4-0.1-0.5 0-0.4-0.1-0.2-0.1 0.1-0.1 0.1-0.1 0.2 0 0.1 0.1 0.4 0 0.2-0.2 0.4-0.2 0.4-0.2 0.4 0.3 0.5 0 0.2-0.1 0.2-0.2 0.2-0.1 0.2 0.1 0.2 0.2 0 0.3-0.2 0.5 0.2 0.2 0.2-0.1 0.3 0.3 0.4 0.2 0.2 1.3 0.9 0.2 0.3 0 0.3-0.9 0.2-0.8 0.3-0.3-0.1 0 0.3 0.4 0.7 0.1 0.5-0.2 0.5-0.2 0.1-0.4 0.1-0.5 0.2 0.1-0.3 0.1-0.2 0.2 0 0.2 0.1 0.1-0.1 0.1-0.2 0.1-0.3-0.3 0-0.6 0.2-0.3 0.2-0.2 0.3-0.3 0.9-1.2 2-0.3 0.8-0.2 1.8-0.2 0.8-0.4 0.5-0.4 0.1-1.3 0.1-0.5 0.1-0.4 0.2-0.8 0.7-0.7 0.6-3.5 1.6-5.3 2.1-5 2-3.7 1.7-3.2 2-1 0.2-0.8-0.2-0.3-0.8 0.1-0.8 0.4-1.5-0.4-1.8-0.2-1.4 0.2-3.4-0.3-0.9-1.2-1.5-0.3-0.8 0-0.9 0.6-2.5-0.5 0.2-0.3 0.2-0.2 0.3-0.3 2.1-0.2 0.2-0.5 0-0.8-0.3-0.8-0.5-1.2-0.5z m30.4 26.4l0.1 0.2 0 0.1 0.1 0-1 0.8-0.4 0.1-0.2-0.2 0.4-0.6 1.1-0.9 0 0.1-0.1 0.2 0 0.2z m10.9-27.2l0.1-0.4 0.3 0.1 0.3 0.6 0 0.7-0.4 1.5-0.2 1.1-0.1 0.7-0.1 0.4-0.1 0.2-0.3-0.4-0.8-1.2-0.1-0.3 0-0.3 0.1-0.4 0.5-1 0-0.4 0.2-0.2 0.5-0.5 0.1-0.2z m-1.9 6.4l0.2 0.1 0.3 0.2 0.1 0.1 0 0.2-0.2 0.2-0.2 0.5-0.2 0.3-0.2 0.3 0 0.5 0.1 0.3 0.2 0.5 0.1 0.3-0.1 0.2-0.2 0.1-0.2 0-0.2 0-0.2 0.2-0.1 0.1-0.1 0.2-0.2 0.1-0.3 0-0.2 0-0.1 0.1-0.1 0.1-0.1 0.1 0 0.3 0 0.1-0.1 0.1-0.3 0.1-0.1 0.1 0 0.1-0.2 0.2-0.3 0.3-0.2 0.1-0.4 0.1-0.2 0.1-0.3 0.5-0.2 0.1 0-0.3-0.1-0.3-0.3-0.1-0.2 0.2-0.2-0.4 0.1-0.4 0.1-0.5 0.1-0.4 0.1-0.1 0.2 0 0.2-0.1 0-0.2 0-0.2-0.3-0.3 0-0.1-0.1-0.4 0.2-1.2-0.1-0.5-0.2-0.2-0.4-0.4-0.4-0.6-0.1-0.3-0.1-1.4 0.1-0.5 0.4-1.2 0.2-1.4 0.1-0.3 0.9-1.6 0.4-1.3 0-0.2 0.1-0.1 0.7-0.3 0.2-0.1 1.2-1.1 0.3-0.1 0.2-0.1 0.1-0.2 0.1-0.1 0.2 0.3 0 0.2 0 0.3-0.1 0.2-0.2 1.9 0 0.8 0.6 0.8 0.3 0.3 0.2 0.4 0.1 0.3-0.9 0.4 0 0.3 0.1 0.4 0.2 0.3 0.1 0.4 0.1 0.3-0.1 0.9 0.1 0.5 0 0.2 0 0.7z"
                                id="IDKS" name="Kalimantan Selatan">
                            </path>
                            <path data-tooltip-target="tooltip-IDBA"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#585858"
                                d="M451.6 305.9l0.5 0.1 0.3 0.5 0.2 0.4 0.3 0.4 0.2 0.6-0.3 0.4-0.4 0.4-0.5-0.2-1.1-0.7-0.4-0.4-0.3-0.1-0.1-0.1 0.1-0.2 0.7-0.9 0.2-0.1 0.3 0 0.3-0.1z m1.4-7.6l0.7 0.6 0.7 0.5 0.5 0.7-0.3 0.8-0.2 0.2-0.6 0.6-0.4 0.2-0.5 0.5-0.2 0.2-1.4 0.1-0.2 0.1-0.1 0.4-0.4 0.3-2.6 1-0.9 0.5-0.6 0.7-0.4 0.8-0.3 0.3-0.5 0.2-0.3 0.1-0.2 0.4 0 0.4 0.3 0.4 0.2-0.1-0.1-0.1-0.2-0.3 0.4-0.2 0.1 0.4-0.1 0.9-0.1 0.3-0.3 0.2-0.4 0.1-0.3 0.1-0.4 0-0.5 0-0.4-0.1-0.4-0.3 0-0.3 0.4-0.3 0.9-0.4 0.2-0.3 0.3-0.4 0-0.5-0.1-0.4-0.1-0.1-0.4-0.7-0.1-0.1-0.2 0-0.1-0.1-0.6-0.5-0.3-0.3-0.1-0.2-0.1-0.3-0.4-0.3-0.7-0.5-1.4-1.2-0.5-0.4-2.6-1.2-0.8-0.2-2.3 0-0.7-0.2-0.6-0.5-0.5-0.6-1.6-2.3-0.4-1.9 0.1-0.5 0.6-0.2 0.5 0.1 0.2 0.2 0.2 0.2 0.3 0.3 0.3 0.1 0.3-0.1 0.5-0.3 0.3 0.2 0.4 0.1 0.8 0.1 0.4 0.1 3.2 1.1 0.7-0.2 1.9 0 0.7-0.2 0.8-0.6 1.4-1.4 0.8-0.3 0.4 0 0.4 0 0.4 0.2 0.3 0.2 0.4 0.2 1.3 0.3 3.3 1.4 0.6 0.4 0.6 0.6 1.1 1.3z"
                                id="IDBA" name="Bali">
                            </path>
                            <path
                                d="M280.7 191.8l0.2 0.4-0.5 0.9 0.1 0.4-0.6 0.2-0.1 0.1-0.9-0.3-0.3-0.1-0.8-0.7-0.7-0.2 0-0.2 0.2-0.2 0.1 0 0.1-0.4 0.1 0 0.4-0.4 0.4-0.2 0.4-0.1 0.3 0.3 0.3 0.1 1 0.2 0.3 0.2z m3.8-1.4l0 0.5-0.2 0.4-0.1 0.1-0.3-0.1-0.2-0.1-0.3-0.1-0.2-0.1-0.3-0.2 0.3-0.4 0.2-0.4 0.3-0.1 0-0.1 0.1-0.1 0.2-0.1 0.1 0.1 0.1 0.3 0.3 0.4z m5.9 0.2l0.1-0.4 0.5-0.3 0.6-0.2 0.5-0.1 0.2 0.1 0 0.3 0.1 0.1 0.1 0.2-0.2 0.4-0.2 0.5-0.4 0.3-0.7 0.2-0.3 0.4-0.3-0.1-0.6-0.7-0.5-0.4 0.1-0.2 0.4 0.2 0.3-0.2 0.3-0.1z m17.7-0.4l-0.1 0.3-0.2 0.3-0.1 0.2-0.1 0.2-0.2 0.5-0.8 1.1-0.2 0.5 0 0.2 0.1 0.3 0 0.2-0.1 0.2-0.1 0.3-0.1 0.2 0 0.1-0.1 0.1-0.1 0.2 0 0.2 0 0.1 0.4 0.3 0.1 0.2-0.5 0-0.7 0.3-0.4 0.1-0.4 0-0.4 0.1-0.2 0.2-0.1 0.4 0 0.7-0.2 0.1-0.6 0-0.4 0.1-0.4 0.1-0.3-0.1-0.2-0.4 0-0.9-0.1-0.4-0.4-0.4-1.1-0.9 0.1 0 0-0.1-0.1-0.2-0.1-0.2-0.2-0.2-0.2 0-0.1 0.1-0.3 0.1-0.3 0.1 0 0.3 0.3 0.5 0 0.8-0.5 0.4-1.3 0.6-1.3 0-0.5 0.7-0.6 0.2-0.5-0.3-0.2-0.4 0.2-0.6 0.7-0.9 0-0.1 0-0.1-0.1-0.1-0.1-0.1-0.1-0.1-0.5-0.5-0.1-0.1 0-0.3 0-0.2 0-0.2-0.1-0.2-0.1-0.2-0.1-0.2 0-0.3 0.1-0.2 0.4-0.4 0.1-0.2 0-0.7-0.1-0.1-0.3 0-0.5 0.2-0.2 0.1-0.1-0.3 0-0.2 0.2-0.2 0.2-0.2 0.3 0 0.4-0.3 0.1-0.5-0.1-0.6-0.2-0.6 0.2-0.1 0.4-0.2 0.2-0.2 0.1-0.2 0-1.3 0.3-1.9 0.3-0.5 0.8-0.2 0.3 0 0.6 0.2 0.3 0 0.3-0.2 0.6-0.4 0.3-0.1 0.3 0.5 0.7 0.3 0.7 0 0.4-0.1 1 0.2 0.3 0.2 0.2 0.2 0.4 1 0.1 0 0.1-0.5 0.2-0.3 0.2-0.1 0.7 0.2 0.1 0.1 0.2 0.4 0.1 0.1 0.3 0 0.3 0.3 0.2 0.3 0 0.3 0.4-0.2 0.3 0.1 1.4 1.6 0.2 0.7 0.3 0.7 0 0.4z m-30.1-5.7l0.9 0 0.3 0.1 0 0.3-0.1 0.1-0.1 0-0.2 0-0.2 0-0.7 0.4-0.2 0-0.3 0.1-0.4 0.3-0.9 1.4-1.2 3.4-0.2 0.8 0.2 0.6 0.7 0.5 0.2 0 0.3 0 0.2 0.1 0.2 0.2 0.1 0.1 0.1 0.2 0.3 0 0.4 0.2 0.1 0.3 0 0.3-0.1 0.3 0.1 0.3 0.1 0.1-0.1 0.2-0.2-0.1-0.1 0.1-0.2 0.2-0.3 0-0.1 0-0.1-0.1-0.2 0-0.3 0.2-0.1-0.1-0.1-0.1-0.1-0.1-1-0.2-0.6 0.1-0.1 0.5-0.2-0.1-0.1-0.1-0.4 0.3-0.3-0.2-0.2-0.5-0.1-0.4-0.1-0.2-0.2-0.2-0.4-0.3-0.2-0.2-0.2-0.5-0.2-0.2-0.4-0.1-0.9 0-0.4-0.1-1-0.9-4.1-1.5-0.4-0.1-1.4-0.1-0.3-0.2-1.3-2-0.3-0.9-0.1-0.9 0.2-0.8 0.4-0.9 0.3-0.8-0.3-0.9-0.7-0.4-0.7-0.3-0.6-0.5-0.2-0.9 0.1-0.6 0-0.2 0-0.2-0.2-0.3-0.1-0.4-0.2-0.4 0-0.2 0-0.6-0.1-0.6-0.1-0.3-0.2-0.1-0.3-0.2-0.3-0.1-1.2-0.2-0.1 0-0.2-0.2-0.1 0-0.1 0-0.2 0.1-0.1 0-0.6-0.1-0.2 0-0.3-0.3-0.3-0.5-0.2-0.2-0.5 0.3-1 0.3-0.4 0.2-0.4 0.3-0.2 0-0.4 0-1.3 0-1 0.3-0.1-0.1-0.1-0.1-0.4-0.6-0.1-0.2-0.8-0.3-0.3-0.1-0.7 0.1-0.3 0-0.3 0.2-0.4-0.7 0-0.8 0.2-0.8 0.3-0.6 0.6-0.4 2.3-0.8 1.5-1 0.5-0.8-0.1-0.9-0.8-0.5-0.4-0.3 0.2-0.1 0.1-0.1 0-0.2-0.1-0.4 0.1-0.2 0.2-0.1 0.2 0 0.2-0.1 0.1-0.2 0.1-0.3 0.1-0.1 0.1 0 0.2 0 0.2 0 0.8-0.9 0.2-0.1 0.9 0.1 0.4-0.1 0.2-0.1 0.1-0.2 0.3-0.2 0.5-0.1 0.4 0.3 0.1 0.5 0.1 0.5 0.1 0.4 0.4 0.4 0.5 0.3 0.6 0.2-0.2 0.3-0.8 0.7-0.1 0.3 0.3 0.3 0.4 0.4 0.2 0.1 0.4 0.2 0.3 0 0.2-0.1 0.4-0.1 0.1 0.1 0.2 0.4 0.1 0.1 0.1 0 0.6 0-0.2-0.4-0.3-0.4-0.6-0.6-0.2-0.4 0-0.4 0.2-0.7-0.1-0.1-0.3-0.5-0.1-0.2 0-0.3-0.1-0.2-0.1-0.3-0.1-0.3-0.2-0.2-0.3-0.2 0.5-0.1 1.8 0 0.5-0.2 0.8-0.5 0.4 0 0.4 0.1 0.1 0.2 0.1 0.3 0.3 0.3 0.1 0.1 0.2 0 0.5 0 0.1 0 0.9 0.7 0.2 0.1 0.1 0.2-0.1 0.2-0.2 0.2 0 0.3 0 0.8 0.1 0.2 0.1 0.2 0.2 0.1 0.1 0.1 0.1 0.2 0.1 0.3 0.1 0.2 0.1 0.1 0.2 0 0.1 0.2 0 0.1 0 0.3 0.1 0.2 0.2 0.1 0.2 0 0.2 0.1 0 0.2-0.1 0.2 0 0.2 1 1.2 0.1 0.2-0.1 0.2-0.2 1.3 0 0.8 0.7 3.4 1.3 3.4 0.5 0.9 0.6 0.7 0.7 0.6 0.3 0.2 0.5 0.2 0.4 0.1 0.2-0.2 0.3-0.1 2.2 0.8 2.6 0.4 1.3 0.5 0.4 0.1z"
                                id="IDBB" name="Bangka-Belitung">
                            </path>
                            <path data-tooltip-target="tooltip-IDKI"
                                class="transition-all hover:fill-primary hover:cursor-pointer" fill="#6761C0"
                                d="M425.1 105.3l2.9-1.2 0.4-0.1 0.5 0.1 0.4 0.2 1.5 1 0 0.1 0 0.4 0 0.2 1.5 0.3 1.5 0.3 0.3 0.6 0.5 0 0.1 0.6 0.3 0.2 0.6 0 0.3-0.6 0.2 0 0.1-0.2 0.2-0.4 0.3-0.5 0.6-0.2 0.4 0 0.9-0.1 0.3 0 1.1 0.3 0.3 0.6 0.1 0.3 0.9 0.2 0.2 0.4 0.3 0.6 0.4 0.6 0 0.8 0.2 0.7 0.7-0.1 0.5 0 0.7 0 0.6 0.1 0.2 0.2 0.3 0 0.3 0.1 0.7 0.2 0 0.1 0.5 0.3 0.3 0 0.5 0.3 0.3 0 0.7-0.4 0.2-0.3 0.1-0.6 0-0.5 0.5-0.6 0.7-0.1 0.9 0 0.5-0.2 0.9 0 0.9-0.6 0.1 0 0.5 0 0.6 0.2 0.4 0.9 0.6 0 0.3-0.5 0-0.6 0.8-0.6 0.1-0.4 0-0.2 0.3-0.1 0-0.3 0.3-0.8 0.3-0.5 0.5-0.1 0.1-0.5 0.3-0.1 0.3 0 0.6-0.5 0.8-0.4 0.3-0.3 0.5 0 0-0.3 0.6-0.3 0-0.8 0.3-0.9 0-0.3 0.1-0.3 0.3-0.1 0.8 0 0.4-0.3 0-0.2 0-0.6 0-0.4 0.2-0.2 0.3-0.6 0.1-0.3 0-0.3 0.2-0.9 0.1-0.6 0.2-0.7 0.1-0.5 0-0.4 0.2-0.3 0.3-0.8 0.4-0.9 0.3-0.6 1.1 0 0.9 0-0.3-1.1-1.2-0.6-0.3-1.2 0.9-0.4 1 0.4 1.8-0.4 0.5-0.8 0-0.6-0.3-0.6 0-0.6 0.1-1 0.6-0.2 1.1 0.2 0.6 0.6 0.6 0.6 0.9 0.3 0.7-0.5 1.6-1.5 1.3-0.3 1.1 0.2 0.4 0.9 1.2 0.3 0.2-0.9 0.3-0.9 0.4-0.5 0.6 0.3 0.8 0.2 1.2-0.6 0.7-0.6 0 0.7-0.4 0.5 0.4 0.4 0.9 0.2 0.8 0 0.4-0.3 0.8-0.3 0.4-1.1 0.6 0.2 0.5 1 0.4 0.2 0.3-0.6 0.7 0.3 0.6 0.4 0.4-0.7 0.6 0.3 0.8 0.1 0.7 0.8 0.3 0.4 0.3 0.8 0.3 0.6 0.9 1 0.8 0.2 0.3-0.6 0.4-0.6 0.9-0.2 1.1 0.2 0.3-0.6 1-0.5 0.1 0.2 0.1 0.1 0.4 0.9 0.2 0.4 0.2-0.4 0.4 0.3 0.3 0.6 0.3 0.6 0.1 0.6-0.2 0.3-0.7 0.8-0.2 0.2-1.4 0.4-0.4 0.1-0.3 0.4 0 0.4-0.1 0.4-0.4 0.3 0 0.3-0.6 0-1.1-0.3 0.3 0.4 0.8 0.4 0.3 0.4-0.8 0.2-0.7 0-0.6 0-0.8-0.2-0.2 0.1 0.2 0.2 0.2 0.2 0.8 0 0.3 0.1 0.3 0.2 0.2 0.3 0.2 0.2 0.3-0.2 0.1 0 0 0.9 0 0.4-0.2 0.2-0.1 0.1 0 0.3 0.1 0.2 0.1 0.1 0.2 0 0.1-0.1 0 0.1 0.2 0.2 0.2 0.3 0.2 0.4 0.2 0.3 0.4 0.2 0.4 0 0.3 0.2 0.3 0.2 0.3 0.1 0.5 0 0.2 0 0.1 0.2 0 0.3-0.1 0.2 0 0.1 0.2 0.2 1.4 1.6 1.2 0.4 1.7 1.4 0.8 0.4 0.8 0.2 0.3 0.2 0.5 0.5 0.4 0.1 0.2 0.1-0.1 0.3-0.3 0.2-0.1 0.2 0.1 0.1 0.2 0.1 0.5 0 0.2 0.1 0 0.2 0.1 0.5 0 0.1 0.2 0 0.2-0.1 0.3 0.1 0.7 0.4 0.2 0.1 0.9 0.1 0.6 0.3 1.2 1.4 0.8 0.3 0.3 0.2 0.5 0.5 0.5 0.5 0.1 0.4-0.1 0.1-0.1 0.1-0.1 0-0.1 0.2 0.7 0.3 0.2 0.2 0.3 0.4 0.6 1.2 0.3 0 0.2 0 0.2 0 0.1-0.1 0.2-0.3 0.2 0 0.4 0 1 0.4 0.3 0.2 0.1 0.2-0.1 0.2 0 0.3-0.1 0.2 0.1 0.1 0.1 0 0.1 0.2 0 0.2-0.2 0.3-0.6 0.5-0.3 0.5-0.3 0.2-1.5 0.6-0.3 0.3-0.2 0.5-0.2 0.2-0.3 0.2-0.3 0.1-0.3 0-0.2 0-0.2-0.1-0.4-0.2-0.5-0.2-0.2-0.1-0.4-0.2-0.5 0-0.5 0.1-1.1 0.5-0.1 0.1-0.2 0.1-0.2-0.1-0.2-0.1-0.2-0.1-0.4 0-0.8-0.4-0.9 0-0.2 0.1-0.2 0.3-0.1 0.1-0.3 0.1-0.1 0.1-0.3-0.1-0.3-0.3-0.1-0.3-0.3-0.2-0.3-0.2-2.6-0.3-1.2-0.3-0.6-0.4-0.5-0.4-0.5-0.5-0.3-0.6-0.5-1.3-0.3-0.5-0.3-0.2-0.8-0.4-0.1-0.2-0.1-0.1-0.2 0-0.3 0.1-0.1 0.1-0.1 0.2 0.1 0.2 0.1 0.3 0.7 0.8 0.1 0.1 0.7 1 0.1 0.3 0.1 0.8 0.2 0.3 0 0.1 0.2 0.2 0 0.1 0.2 0.1 0.2 0.3 0.1 0.2 0.1 0.3 0 0.5-0.1 0.4-0.2 0.2-0.3 0-0.2 0-0.2 0-0.2-0.2-0.2-0.3-0.2-0.2-0.1-0.1-0.2-0.1-0.2-0.1-0.3 0-0.2 0.1-0.2 0.1-0.1 0-0.1 0.1-0.7 0-0.4 0.1-0.3 0.2-0.5 0.3-0.9 1.1-0.3 0.5 0 1.2-0.2 0.3-0.4 0.4-0.2 0.2 0 0.2-0.2 0.5 0 0.1-1.1 1.3-0.2 0.4 0.1 0.2 0.2 0.5 0 0.2-0.1 0.2-0.3 0.2-0.2 0.1-0.2 0.1-0.3 0.3-0.3 0.8-0.8 1.2 0 0.2 0 0.1 0.1 0.1 0.1 0.1 0 0.4 0 0.4-0.2 0.2-0.5 0.5-0.1 0.2-0.1 0.2 0.1 0.3 0.1 0 0.2 0 0.2 0.1 0.1 0.1-0.2 0.2-0.4 0.2-0.2 0.1-0.1 0.2 0 0.1 0.1 0.1 0 0.2 0 0.2 0 0.2 0 0.2 0.2 0 0.2 0 0 0.1-0.1 0.3 0.2 0.1 0.2 0.1 0.1 0.2 0.2 0.3 0.1 0.4 0 0.3-0.1 0.1 0 0.1-0.2 0.3-0.1 0.2-0.3 0.2-0.1 0.1-0.1 0.1-0.3 0.8-0.1 0.3 0 0.8-0.2 0.4-0.4 0.7 0 0.4 0.2 0.4 0.3 0.5 0.3 0.5 0.2 0.1 0.2-0.1 0 0.3 0 0.5-0.1 0.3-0.4 0.5-0.2 0.3 0 0.2 0.1 0.4 0 0.4-0.2 0.4-0.3 0.4 0 0.1 0.7-0.3 2.4-1.7 0.4-0.2 0.3 0.1 0.2 0.4-0.2 0.2-0.2 0.1-0.2 0.3-0.1 0.1-0.7 0.2-0.2 0.1-0.1 0.3 0.7 0.1 0.2 0.2-0.1 0.8 0 0.3-0.3 0.3 0 0.1-0.1 0.1-0.6 0-0.2 0-0.1 0.1 0 0.2 0.3 0.1 0.4 0 0.2 0.2-0.1 0.3-0.2 0.2-0.3 0.2-0.1 0.2 0.2 0.3-0.2 0.1-0.2-0.1-0.6 0-0.3 0 0 0.2 0.1 0.1 0.2 0.1 0.4 0 1.1 0.3 0.5 0.1 0.3 0 0.1 0.2 0.1 0.3 0 0.3-0.1 0.2-0.1 0.1-0.6 0.1-0.3 0-0.1 0-0.1 0.1-0.3 0.2-0.1 0.1-1-0.3 0.1 0.6-0.7-0.2-0.2 0.5 0.1 0.5-0.2 0.2-0.3 0-0.3-0.1-0.5-0.5-0.2-0.2-0.1 0.3-0.2 0.5-0.3 0.4-0.2 0-0.1-0.1 0-0.3 0-0.6-0.1-0.1-0.5-0.5-0.4-0.2-0.3 0.4-0.2 0.6 0 0.5-0.1 0.5-0.3 0.3-0.8 0.5-0.6 0.6-2 2.8-0.5 0.3-0.1 0.5-0.1 0.4-0.1 0.4-0.3 0.3-0.5 0.2-0.5 0.2-2.1 0.5-0.4 0.1-0.2-0.1-0.1-0.3 0-0.5 0.2-0.4 0.1-0.1-0.3-0.2-0.1 0.1-0.1 0.2-0.2 0.3-0.1-0.3 0-0.6-0.1-0.3-0.8-0.9-0.1-0.5 0.3-1.2-0.3 0-0.2 0.4-0.2 0.5-0.1 1.1 0.1 0.2 0.6 0.6 0.1 0.3 0 0.1 0 0.1-0.1 0.2-0.3 0.3 0 0.1 0.8 0.2 0 0.1 0.1 0 0.1 0 0.1 0.1 0 0.1-0.1 0.1-0.2 0.4-0.2 0.3-0.1 0.2 0.1 0.9-0.1 0.4-0.4 0.2-0.4 0.1-2.2 0.8-0.8 0.5-0.6 0.7 0 0.9 0.1 0.3 0.2 0.2 0.1 0.3 0.1 0.3-0.1 0.5-0.4 0.3-0.4 0.2-1.8 0.5-0.7 0.5-0.9 0.3-0.4 0.1-1.1 0.9-0.2 0.3-0.6 0.3-0.2 0.2 0.4 0.3 0.4 0.1 0.5 0 0.4-0.2 0.2-0.2 0.1-0.1 0.2-0.1 0.4-0.1 0.1 0 0.2 0.1 0.1 0 0.1-0.2 0-0.1 0.5 0 0.4 0.1 0.4 0.2 0.1 0.3-0.3 0.6-0.4 0.5 0.8 0.7 0.3 0.5-0.4 0.9 0.3 1.3-0.1 0.4-0.4 0.5-0.2 0.2-1.4 0.3-0.4 0.3-0.5 0.4-0.4 0.5-0.2 0.3 0.2 0 0.9-0.4 0.7-0.2 0.3 0.3 0.1 0.8 0.4 0.2 0.5-0.1 1.2-0.6 0.4 0 0.2 0 0.1 0.2 0 0.3 0.2 0.3 0.2 0 0.2-0.2 0.4-0.2 0.3-0.1 0.1 0.2 0 0.6-0.6 2.8-0.1-0.1-2-0.6-1.5-0.3-4.6-0.3-0.6-0.1-1.7-0.1-0.4-0.1-0.6-0.3-0.2 0.1-0.2 0.1-0.4 0.3-0.2 0.2-0.4 0.1-0.1 0.1-0.1 0.3-0.1 0.2-0.2 0.1-0.5 0.1-0.1 0-0.1-0.1-0.2-0.3 0-0.2 0-0.1-0.2-1.2-0.5-1.4-0.1-0.4 0.2-1.4 0.2-0.9-0.2-0.2-0.2-0.1-0.6-0.1-0.3-0.2-0.3-0.3-0.2-0.6-0.1-0.3 0.1-0.4 0-0.2 0.1-0.4-0.1-2.4-0.8-2-0.1-0.5-0.1-0.4-0.1-0.2-0.4-0.4-0.1-0.3-0.1-0.3-0.1-0.6-0.1-0.3-0.3-0.1-0.3-0.1-0.9-0.1 0.8-1 0.4-0.4 0.2-0.2 0.3-0.1 0.5-0.1 0.3 0.1 0.2 0 0.3-0.1 0.3-0.3 0.3-0.4 1-1.9 0.1-0.4 0.1-1 0.1-0.3-0.2-2.4-0.4 0.1-0.3 0.1-0.2 0.2-0.2 0-0.1 0-0.1 0-0.1-0.2-0.2-0.2-0.2-0.3-0.4-0.4-0.1-0.1-0.2-0.4-0.1-0.2-0.4-0.4-0.2-0.2-0.3-0.1-0.2-0.1-0.1 0-0.2 0-0.6-0.3-0.7-0.2-0.2-0.1-0.2-0.1-1-0.8-0.1-0.3-0.1-0.2 0.1-0.3-0.1-0.3-0.1-0.3-0.6-0.8-0.1-0.3-0.5-2.3 0-0.8-0.1-0.4-0.1-0.3-1-1.4-0.4-0.7-0.2-0.7-0.1-0.4-0.1-1-0.1-0.3-0.2-0.8 0-0.4 0-1.4 0.2-0.7 0.1-0.4 0.5-0.9 0.1-0.2 0.1-0.2 0.2-1.4 0.1-0.4 0.1-0.2 0-0.1 0-0.1-0.1-0.1-0.1 0-0.6-0.1-0.6-0.2-0.2 0-0.3 0.1-0.4 0-0.3 0-0.5 0.4-1.6 1.8-0.2 0.4-0.1 0.1-0.1 0.1-0.2 0.2-0.6 0.2-0.2 0.1-0.7 0.7-0.1 0.1-0.2 0-0.2-0.3 0-0.2 0-0.3 0.1-0.2-0.1-0.2 0-0.1-0.1-0.2-0.1-0.2 0-0.2 0.1-0.3 0.3-1 0.6-1.5 0.1-0.3-0.1-0.2 0-0.3-0.1-0.2-0.2-0.5-0.5-0.7-0.1-0.2 0-0.2 0-0.5 0-0.2-0.1-0.3-0.1-0.4-0.1-0.2-0.1-0.3 0-0.6 0.1-0.3 0.2-0.7 1.2-2.3 0.1-0.1 0.5-0.4 0.2-0.3 0.2-0.2 0-0.3 0-0.2-0.1-0.2-0.1-0.3-0.1-0.2-0.1-0.9-0.1-0.1-0.2-0.3-0.1-0.2-0.1-0.2-0.1-0.2-0.2-0.1-0.1-0.1-0.2-0.1-0.1 0-0.1-0.2-0.2-0.3-0.1-0.1-0.2-0.1-0.4 0-1.1 0-0.2 0.1-0.1 0.1-0.2 0.3-0.2 0.2-0.4 0.1-1 0.2-1 0.3-0.6 0.4-0.4 0.4-0.4 0.2-5.6 0.7-0.4-0.1-0.3-0.1-1.5-0.2-0.3-0.1-0.3-0.2-0.5-0.3-0.3-0.2-0.3 0-0.9-0.1-0.8 0.1-0.9 0-0.3 0-0.4 0.2-0.2 0.2-0.2 0.3-0.2 0.1-0.3 0.1-0.8 0.1-0.4 0-0.8 0.4-0.3 0.1-1 0.1-0.5 0.2 0.2-0.7 0.1-0.2 0.3-0.3 0.2-0.2 0.4-0.2 0.2-0.1 0.5-0.7 0.7-0.8 0.2-0.3 0.1-0.5 0-0.5 0-0.3 0.2-0.4 0.2-0.4 0.1-0.4-0.1-0.4-0.1-0.2-0.1-0.2-0.2-0.1-0.2 0-0.2 0-0.4 0.2-0.2 0-0.1 0-0.1-0.1-0.1-0.2 0-0.2 0.1-0.4 0-0.2 0-0.3 0-0.2 0.1-0.2 0.3-0.3 0.3-0.2 1-0.4 0.6-0.5 0.2-0.1 0.3-0.2 0.2-0.1 1.9-1.6 0.2-0.2 0.5-0.2 0.5-0.5 0.2-0.1 0.2-0.1 0.2-0.2 0.1-0.3 0-0.4 0-0.4-0.1-0.3-0.2-0.4 0-0.3 0-0.3 0.3-1.6 0-0.3z"
                                id="IDKI" name="Kalimantan Timur">
                            </path>
                        </g>
                        <g id="points">
                            <circle class="-10.080985198323209|97.31095197695628" cx="90.9" cy="334.2"
                                id="0">
                            </circle>
                            <circle class="-3.347896021580144|120.29341250609936" cx="545.5" cy="200.1"
                                id="1">
                            </circle>
                            <circle class="5.068465449348689|138.6793809294138" cx="909.1" cy="33.4"
                                id="2">
                            </circle>
                        </g>
                        <g id="label_points">
                            <circle class="North Kalimantan" cx="467.7" cy="70" id="IDKU">
                                <div id="tooltip-IDKU" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Kalimantan Utara
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Nusa Tenggara Timur" cx="560.4" cy="306" id="IDNT">
                                <div id="tooltip-IDNT" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Nusa Tengara Timur
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Kalimantan Barat" cx="357" cy="139.9" id="IDKB">
                                <div id="tooltip-IDKB" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Kalimantan Barat
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Papua" cx="919.8" cy="213.1" id="IDPA">
                                <div id="tooltip-IDPA" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Papua
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Jawa Timur" cx="384.3" cy="284.9" id="IDJI">
                                <div id="tooltip-IDJI" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Jawa Timur
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Maluku" cx="728.9" cy="194.2" id="IDMA">
                                <div id="tooltip-IDMA" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Maluku
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Nusa Tenggara Barat" cx="487.1" cy="307.5" id="IDNB">
                                <div id="tooltip-IDNB" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Nusa Tenggara Barat
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Sulawesi Selatan" cx="538.9" cy="205.5" id="IDSN">
                                <div id="tooltip-IDSN" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Sulawesi Selatan
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Jawa Tengah" cx="338.4" cy="279.8" id="IDJT">
                                <div id="tooltip-IDJT" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Jawa Tengah
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Jawa Barat" cx="294.6" cy="270.4" id="IDJB">
                                <div id="tooltip-IDJB" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Jawa Barat
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Jakarta Raya" cx="279.6" cy="257" id="IDJK">
                                <div id="tooltip-IDJK" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Jakarta
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Banten" cx="265" cy="262" id="IDBT">
                                <div id="tooltip-IDBT" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Banten
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Yogyakarta" cx="350.1" cy="290.6" id="IDYO">
                                <div id="tooltip-IDYO" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Yogyakarta
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Sulawesi Tenggara" cx="572.9" cy="203.6" id="IDSG">
                                <div id="tooltip-IDSG" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Sulawesi Tenggara
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Papua Barat" cx="792.6" cy="160.1" id="IDPB">
                                <div id="tooltip-IDPB" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Papua Barat
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Sulawesi Tengah" cx="571.3" cy="161" id="IDST">
                                <div id="tooltip-IDST" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Sulawesi Tengah
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Maluku Utara" cx="693.2" cy="106" id="IDMU">
                                <div id="tooltip-IDMU" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Maluku
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Kepulauan Riau" cx="306.5" cy="55.3" id="IDKR">
                                <div id="tooltip-IDKR" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Kepulauan Riau
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Riau" cx="176.1" cy="125.2" id="IDRI">
                                <div id="tooltip-IDRI" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Riau
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Gorontalo" cx="586.7" cy="118.9" id="IDGO">
                                <div id="tooltip-IDGO" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Gorontalo
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Sulawesi Utara" cx="624.1" cy="120" id="IDSA">
                                <div id="tooltip-IDSA" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Sulawesi Utara
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Sulawesi Barat" cx="524.1" cy="190.8" id="IDSR">
                                <div id="tooltip-IDSR" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Sulawesi Barat
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Jambi" cx="199.1" cy="167.3" id="IDJA">
                                <div id="tooltip-IDJA" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Jambi
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Sumatera Selatan" cx="223" cy="204.1" id="IDSS">
                                <div id="tooltip-IDSS" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Sumatera Selatan
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Lampung" cx="243.9" cy="229.4" id="IDLA">
                                <div id="tooltip-IDLA" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Lampung
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Bengkulu" cx="193.8" cy="204.9" id="IDBE">
                                <div id="tooltip-IDBE" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Bengkulu
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Sumatera Barat" cx="160.4" cy="151.3" id="IDSB">
                                <div id="tooltip-IDSB" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Sumatera Barat
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Sumatera Utara" cx="126.7" cy="83.9" id="IDSU">
                                <div id="tooltip-IDSU" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Sumatera Utara
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Aceh" cx="82.9" cy="45.8" id="IDAC">
                                <div id="tooltip-IDAC" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Aceh
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Kalimantan Tengah" cx="410.5" cy="168.6" id="IDKT">
                                <div id="tooltip-IDKT" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Kalimantan Tengah
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Kalimantan Selatan" cx="448.7" cy="193.7" id="IDKS">
                                <div id="tooltip-IDKS" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Kalimantan Selatan
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Bali" cx="445.2" cy="299.8" id="IDBA">
                                <div id="tooltip-IDBA" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Bali
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Bangka-Belitung" cx="262.9" cy="178" id="IDBB">
                                <div id="tooltip-IDBB" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Bangka Belitung
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                            <circle class="Kalimantan Timur" cx="469.2" cy="125.4" id="IDKI">
                                <div id="tooltip-IDKI" role="tooltip"
                                    class="absolute invisible z-10 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                    Project Kalimantan Timur
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </circle>
                        </g>
                    </svg>
                </div>
                <div class="text-center w-full xl:text-left xl:max-w-lg">
                    @if (App::getLocale() == 'id')
                        <h2 class="text-secondary lg:text-lg font-poppins">
                            Portofolio kami
                        </h2>
                        <h3
                            class="mb-10 text-xl font-bold uppercase font-inter lg:text-3xl text-primary 2xl:leading-relaxed">
                            kami siap <span class="px-1 text-white bg-secondary">mendukung anda</span> di berbagai wilayah
                            indonesia hingga mancanegara
                        </h3>
                        <a href="/portofolio"
                            class="px-10 py-4 font-bold uppercase rounded-xl shadow-2xl drop-shadow-2xl transition-all text-primary bg-tombol hover:scale-105 hover:bg-primary hover:text-tombol font-poppins">
                            selengkapnya
                        </a>
                    @else
                        <h2 class="text-secondary lg:text-lg font-poppins">
                            Our Portfolio
                        </h2>
                        <h3
                            class="mb-10 text-xl font-bold uppercase font-inter lg:text-3xl text-primary 2xl:leading-relaxed">
                            we are ready to <span class="px-1 text-white bg-secondary">support you</span> in various
                            regions of indonesia to foreign countries
                        </h3>
                        <a href="/portofolio"
                            class="px-10 py-4 font-bold uppercase rounded-xl shadow-2xl drop-shadow-2xl transition-all text-primary bg-tombol hover:scale-105 hover:bg-primary hover:text-tombol font-poppins">
                            show more
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>
    {{-- end portofolio --}}

    {{-- informasi terbaru --}}
    <section id="informasi" class="h-auto bg-white">
        <div class="flex flex-col lg:flex-row">
            @foreach ($responselates as $item)
                <div class="w-full lg:w-[60%] 2xl:w-1/2 p-10">
                    <div class="max-w-screen-xl">
                        <img src="{{ $item['featured_media_src_url'] ?? 'default-image.jpg' }}" loading="lazy"
                            class="object-cover w-full h-full" alt="artikel rekanusa">
                        <div class="py-5 text-justify font-poppins 2xl:mb-5 2xl:text-base text-paragraph">
                            {!! $item['excerpt']['rendered'] ?? '<p>No excerpt available.</p>' !!}
                        </div>
                    </div>
                    <div class="text-end">
                        <a href="{{ $item['link'] ?? '#' }}" target="_blank"
                            class="px-10 py-4 font-bold uppercase rounded-xl shadow-2xl drop-shadow-2xl transition-all text-primary bg-tombol hover:scale-105 hover:bg-primary hover:text-tombol font-poppins">
                            @if (app()->getLocale() == 'en')
                                show more
                            @else
                                selengkapnya
                            @endif
                        </a>
                    </div>
                </div>
            @endforeach


            <div class="w-full lg:w-[40%] 2xl:w-1/2 py-10 px-5">
                <h4 class="mb-10 text-3xl font-bold uppercase font-inter text-primary">
                    @if (app()->getLocale() == 'en')
                        <span class="px-1 text-white bg-secondary">latest</span> Information
                    @else
                        Informasi <span class="px-1 text-white bg-secondary">Terbaru</span>
                    @endif
                </h4>
                <div class="flex flex-col">
                    @forelse ($responselimit as $item)
                        <a href="{{ $item['link'] }}" target="_blank">
                            <div
                                class="flex flex-col gap-4 justify-center items-center px-2 py-5 text-center transition-all cursor-pointer 2xl:items-start md:text-left md:flex-row md:justify-between group hover:bg-secondary">
                                <div class="w-full md:w-[40%]">
                                    <img src="{{ $item['featured_media_src_url'] }}" loading="lazy"
                                        class="object-cover w-full h-full rounded-xl" alt="artikel rekanusa">
                                </div>
                                <div class="w-full md:w-[60%]">
                                    <h5
                                        class="mb-2 font-semibold 2xl:text-xl font-inter text-primary group-hover:text-white">
                                        {{ $item['title']['rendered'] }}
                                    </h5>
                                    <div
                                        class="text-base text-justify line-clamp-3 lg:text-xs 2xl:text-base text-paragraph font-poppins group-hover:text-white">
                                        {!! $item['excerpt']['rendered'] !!}
                                    </div>
                                </div>
                            </div>
                        </a>
                    @empty
                        <p>Data artikel tidak ditemukan.</p>
                    @endforelse

                </div>
            </div>
        </div>
    </section>
    {{-- end informasi terbaru --}}

    {{-- section regazine --}}
    <section id="regazine" class="overflow-hidden h-auto bg-white">
        <div class="container p-6 mx-auto">
            <div class="container pb-10 mx-auto mt-5 text-center md:mt-20">
                <h2 class="text-3xl font-bold uppercase text-primary md:text-4xl lg:text-5xl font-inter">Regazine</h2>
            </div>
            <div class="flex justify-center sm:justify-between">
                @if ($regazine->count() > 0)
                    <div class="max-w-[300px] sm:max-w-xs xl:max-w-md 2xl:max-w-2xl">
                        <img loading="lazy" src="{{ $regazinelast->getFirstMediaUrl('regazine') }}"
                            class="object-contain w-full h-full" alt="regazine">
                    </div>
                @else
                    <div class="flex justify-center text-center">
                        Tidak ada Regazine
                    </div>
                @endif


                <div class="slider max-h-[400px] md:max-h-[500px] lg:max-h-[600px] 2xl:max-h-[900px] hidden sm:block">
                    <div class="space-y-5 slide-track">
                        @forelse ($regazine as $item)
                            <div class="slide">
                                <div class="max-w-60 xl:max-w-xs">
                                    <img loading="lazy" src="{{ $item->getFirstMediaUrl('regazine') }}"
                                        class="object-cover w-full h-full" alt="regazine">
                                </div>
                            </div>
                        @empty
                        @endforelse

                        @forelse ($regazine as $item)
                            <div class="slide">
                                <div class="max-w-60 xl:max-w-xs">
                                    <img loading="lazy" src="{{ $item->getFirstMediaUrl('regazine') }}"
                                        class="object-cover w-full h-full" alt="regazine">
                                </div>
                            </div>
                        @empty
                        @endforelse


                    </div>
                </div>

                <div class="slider2 max-h-[400px] md:max-h-[500px] lg:max-h-[600px] 2xl:max-h-[900px] hidden lg:block">
                    <div class="space-y-5 slide-track2">
                        @forelse ($regazine as $item)
                            <div class="slide">
                                <div class="max-w-60 xl:max-w-xs">
                                    <img loading="lazy" src="{{ $item->getFirstMediaUrl('regazine') }}"
                                        class="object-cover w-full h-full" alt="regazine">
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="flex justify-center p-6">
                <a href="/regazine"
                    class="px-10 py-4 font-bold uppercase rounded-xl shadow-2xl drop-shadow-2xl transition-all text-primary bg-tombol hover:scale-105 hover:bg-primary hover:text-tombol font-poppins">
                    {{ __('selengkapnya') }}
                </a>
            </div>
        </div>
    </section>
    {{-- end section regazine --}}

    {{-- section ksp --}}
    <section class="relative">

        <!-- Slider main container -->
        <div class="relative w-full testimoniSwiper h-[50vh] lg:h-[80vh] overflow-hidden">
            <div class="absolute top-0 right-0 z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[150px] lg:w-[250px] 2xl:w-[350px]"
                    viewBox="0 0 293 246" fill="none">
                    <path d="M0 0H370.5L302.5 246L0 0Z" fill="url(#paint0_linear_275_4514)" />
                    <defs>
                        <linearGradient id="paint0_linear_275_4514" x1="397" y1="112" x2="177.5"
                            y2="69.5001" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#272660" />
                            <stop offset="1" stop-color="#1EB185" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                @forelse ($testimoni as $item)
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="w-full h-full">
                            <img loading="lazy" src="{{ $item->getFirstMediaUrl('testimoni') }}"
                                class="object-cover w-full h-full" alt="testimoni">
                        </div>

                        <div
                            class="absolute top-0 left-0 z-10 w-full h-full font-poppins bg-gradient-to-r from-white to-[rgba(3,15,39,0)]">
                            <div class="container px-6 pt-30 mx-auto md:pt-32 md:pl-20 2xl:pt-40">
                                <div
                                    class="text-base md:text-2xl font-bold line-clamp-2 leading-relaxed uppercase text-primary lg:text-4xl lg:leading-relaxed 2xl:text-6xl 2xl:leading-relaxed font-inter">
                                    {{ $item->nama_project }}
                                </div>
                                <div class="lg:pr-52 lg:w-3/5">
                                    <div class="text-sm sm:text-lg font-poppins 2xl:text-xl">
                                        {!! $item->testimoni !!}
                                    </div>
                                    <div class="mt-5 font-bold uppercase text-primary font-poppins 2xl:text-lg">
                                        -{{ $item->nama }}
                                    </div>
                                    <div class="text-sm sm:text-lg font-poppins 2xl:text-xl">
                                        {{ $item->jabatan }}
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div
                            class="absolute z-10 lg:w-1/4 h-full italic transform left-6 md:left-10 lg:left-20 2xl:left-56 top-1/4 md:top-[35%] 2xl:top-[23%] font-poppins">

                        </div>
                    </div>
                @empty
                    <div class="container flex justify-center items-center p-6 mx-auto text-4xl">
                        <p class="text-center text-primary font-poppins">Tidak ada data</p>
                    </div>
                @endforelse
            </div>

            <!-- If we need navigation buttons -->
            <div class=".swiper-button-prev"></div>
            <div class=".swiper-button-next"></div>
        </div>
    </section>
    {{-- end ksp --}}
@endsection

@section('kaki')
    <script>
        // Banner Swiper
        const bannerSwiper = new Swiper('.bannerSwiper', {
            slidesPerView: 1,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            speed: 1000,
        });

        // Existing testimonial swiper
        const testimoniSwiper = new Swiper('.testimoniSwiper', {
            // Optional parameters
            slidesPerView: 1,
            GrabCursor: true,
            loop: true,
            autoplay: {
                delay: 3000,
            },
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
@endsection
