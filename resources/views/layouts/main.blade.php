<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT. Kinarya Kompegriti Rekanusa</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <meta name="description"
        content="jasa Konsultan teknik yang melingkupi pekerjaan konsultasi perencana struktur sipil,mewujudkan bangunan yang memiliki legalitas sertifikat laik fungsi (SLF).">
    <meta name="author" content="Konsultan Teknik Sipil | PT. Kinarya Kompegriti Rekanusa">
    <meta name="keywords"
        content="slf, konsultan slf, audit struktur, sertifikat laik fungsi, PBG, Audit Struktur Bangunan, Audit Bangunan, Jasa Konsultan Bangunan, Jasa Konsultan Audit Bangunan, Jasa Audit Struktur">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="https://rekanusa.co.id/" />
    <meta name="google-site-verification" content="uifCysCiuZlf3A3tfy-NV8jMAQiyV-ZYDC3zyFIn3MA" />
    <meta property="og:site_name" content="PT. Kinarya Kompegriti Rekanusa"> <!-- website name -->
    <meta property="og:site" content="PT. Kinarya Kompegriti Rekanusa" /> <!-- website link -->
    <meta property="og:title" content="https://rekanusa.co.id/konsultan-sipil" />
    <!-- title shown in the actual     shared post -->
    <meta property="og:description"
        content="jasa Konsultan teknik yang melingkupi pekerjaan konsultasi perencana struktur sipil,mewujudkan bangunan yang memiliki legalitas sertifikat laik fungsi (SLF).">
    <!--    description shown in the actual shared post -->
    <meta property="og:image" content="http://www.rekanusa.co.id/images/peview.jpg">
    <!-- image link, make sure     it's jpg -->
    <meta property="og:url" content="http://www.rekanusa.co.id"> <!-- where do you want your post to link to -->
    <meta property="og:type" content="website">
    <meta property="keyword" content="slf, konsultan slf, audit struktur, sertifikat laik fungsi, slf bangunan">

    {{-- google analytics  --}}
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KPVW3M8');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169190979-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-169190979-1');
    </script>

    {{-- font family --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    @yield('kepala')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section id="header">
        <header class="font-bold font-montserrat">
            <nav class="fixed top-0 z-20 w-full bg-white border-gray-200 start-0">
                <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
                    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="{{ asset('img/general/logo.png') }}" class="h-10 md:h-14"
                            alt="Kinarya Kompegriti Rekanusa Logo" />
                    </a>
                    <button data-collapse-toggle="navbar-default" type="button"
                        class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg xl:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-default" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                    <div class="hidden w-full xl:block xl:w-auto" id="navbar-default">
                        <ul
                            class="flex flex-col p-4 mt-4 font-medium font-monserrat uppercase border border-gray-100 rounded-lg xl:p-0 bg-gray-50 xl:flex-row xl:space-x-8 rtl:space-x-reverse xl:mt-0 xl:border-0 xl:bg-white">
                            @if (app()->getLocale() == 'en')
                                <li>
                                    <a href="/"
                                        class="block py-2 px-3 text-white bg-secondary font-semibold rounded xl:bg-transparent xl:text-secondary xl:p-0
                                    aria-current="page">
                                        home
                                    </a>
                                </li>
                                <li>
                                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                        class="flex items-center justify-between w-full px-3 py-2 font-semibold uppercase rounded text-primary hover:bg-secondary hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-secondary xl:p-0">
                                        About Us
                                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownNavbar"
                                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-52">
                                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                            <li>
                                                <a href="/profile"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">
                                                    Company Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/direksi"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">
                                                    Board of Directors
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbar2"
                                        class="flex items-center justify-between w-full px-3 py-2 font-semibold uppercase rounded text-primary hover:bg-secondary hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-secondary xl:p-0">
                                        Our Services
                                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownNavbar2"
                                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-60">
                                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                            <li>
                                                <a href="/jasaslf"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">
                                                    Function-worthy Certificate
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/audit-struktur"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">
                                                    Structure Audit
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/audit-energy"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">
                                                    Energy Audit
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/pbg"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">
                                                    Building Approval </a>
                                            </li>
                                            <li>
                                                <a href="/bangunan"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">
                                                    Building Planning </a>
                                            </li>
                                            <li>
                                                <a href="/konstruksi"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">
                                                    Construction Management
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/ded"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">
                                                    DED Service
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="/portofolio"
                                        class="block px-3 py-2 font-semibold rounded text-primary hover:bg-secondary hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-secondary xl:p-0">
                                        portfolio
                                    </a>
                                </li>
                                <li>
                                    <button id="dropdownNavbarLink3" data-dropdown-toggle="dropdownNavbar3"
                                        class="flex items-center justify-between w-full px-3 py-2 font-semibold uppercase rounded text-primary hover:bg-secondary hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-secondary xl:p-0">
                                        Media
                                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownNavbar3"
                                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-60">
                                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                            <li>
                                                <a href="/regazine"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">Regazine</a>
                                            </li>
                                            <li>
                                                <a href="https://rekanusa.co.id/artikel/" target="_blank"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">
                                                    article
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @else
                                <li>
                                    <a href="/"
                                        class="block py-2 px-3 text-white bg-secondary font-semibold rounded xl:bg-transparent xl:text-secondary xl:p-0
                                    aria-current="page">
                                        beranda
                                    </a>
                                </li>
                                <li>
                                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                        class="flex items-center justify-between w-full px-3 py-2 font-semibold uppercase rounded text-primary hover:bg-secondary hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-secondary xl:p-0">
                                        tentang kami
                                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownNavbar"
                                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-52">
                                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                            <li>
                                                <a href="/profile"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">
                                                    profil perusahaan
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/direksi"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">
                                                    jajaran direksi
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbar2"
                                        class="flex items-center justify-between w-full px-3 py-2 font-semibold uppercase rounded text-primary hover:bg-secondary hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-secondary xl:p-0">
                                        layanan kami
                                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownNavbar2"
                                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-60">
                                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                            <li>
                                                <a href="/jasaslf"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">
                                                    jasa slf
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/audit-struktur"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">
                                                    audit struktur
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/audit-energy"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">
                                                    audit energi
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/pbg"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">
                                                    jasa pbg
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/bangunan"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">
                                                    perencanaan bangunan
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/konstruksi"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">
                                                    manajemen konstruksi
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/ded"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">
                                                    jasa ded
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="/portofolio"
                                        class="block px-3 py-2 font-semibold rounded text-primary hover:bg-secondary hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-secondary xl:p-0">
                                        Portofolio
                                    </a>
                                </li>
                                <li>
                                    <button id="dropdownNavbarLink3" data-dropdown-toggle="dropdownNavbar3"
                                        class="flex items-center justify-between w-full px-3 py-2 font-semibold uppercase rounded text-primary hover:bg-secondary hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-secondary xl:p-0">
                                        Media
                                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownNavbar3"
                                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-60">
                                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                            <li>
                                                <a href="/regazine"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">Regazine</a>
                                            </li>
                                            <li>
                                                <a href="https://rekanusa.co.id/artikel/" target="_blank"
                                                    class="block px-4 py-2 font-bold text-primary hover:bg-secondary hover:text-white hover:font-bold">
                                                    artikel
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @endif
                            <li>
                                <button type="button" aria-label="translate"
                                    data-dropdown-toggle="language-dropdown-menu"
                                    class="inline-flex px-3 font-semibold uppercase rounded-lg cursor-pointer text-abuabu hover:text-secondary text-primary hover:bg-transparent">
                                    @if (app()->getLocale() == 'en')
                                        <img src="{{ asset('img/general/en.webp') }}"
                                            class="w-5 h-5 rounded-full me-3" alt="English Flag">
                                        <p>English</p>
                                    @else
                                        <img src="{{ asset('img/general/id.webp') }}"
                                            class="w-5 h-5 rounded-full me-3" alt="Indonesia Flag">
                                        <p>Indonesia</p>
                                    @endif
                                </button>
                                <!-- Dropdown -->
                                <div class="z-50 hidden my-4 text-base font-semibold list-none bg-white divide-y divide-gray-100 rounded-lg shadow"
                                    id="language-dropdown-menu"
                                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(600px, 88px);"
                                    data-popper-placement="bottom">
                                    <ul class="py-2" role="none">
                                        @if (app()->getLocale() == 'en')
                                            <li>
                                                <a href="{{ url('/locale/id') }}"
                                                    class="block px-4 text-primary hover:bg-transparent hover:text-secondary"
                                                    role="menuitem">
                                                    <div class="inline-flex items-center">
                                                        <img src="{{ asset('img/general/id.webp') }}"
                                                            class="h-3.5 w-3.5 rounded-full me-3"
                                                            alt="Indonesia Flag">
                                                        Indonesia
                                                    </div>
                                                </a>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{ url('/locale/en') }}"
                                                    class="block px-4 text-primary hover:bg-transparent hover:text-secondary"
                                                    role="menuitem">
                                                    <div class="inline-flex items-center">
                                                        <img src="{{ asset('img/general/en.webp') }}"
                                                            class="h-3.5 w-3.5 rounded-full me-3" alt="English Flag">
                                                        English
                                                    </div>
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </header>
    </section>
    @yield('content')
    @include('layouts.footer')
