@extends('layouts.main')
@section('kepala')
    {{-- swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    {{-- Schema.org Structured Data --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Layanan Audit Struktur Bangunan",
        "description": "Layanan profesional untuk mengoptimalkan keamanan dan kinerja bangunan dengan audit struktur berkualitas. Kami menyediakan layanan audit struktur yang komprehensif untuk memastikan keamanan bangunan Anda.",
        "provider": {
            "@type": "Organization",
            "name": "PT. Kinarya Kompegriti Rekanusa",
            "url": "https://rekanusa.co.id",
            "logo": "{{ asset('img/general/logo.png') }}",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+62-813-8080-1113",
                "contactType": "customer service",
                "availableLanguage": ["Indonesian", "English"]
            },
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "ID",
                "addressLocality": "Jakarta",
                "addressRegion": "DKI Jakarta"
            }
        },
        "areaServed": {
            "@type": "Country",
            "name": "Indonesia"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Layanan Audit Struktur",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Audit Struktur Bangunan",
                        "description": "Pemeriksaan dan evaluasi struktur bangunan untuk keamanan"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Evaluasi Kinerja Bangunan",
                        "description": "Penilaian kinerja dan keamanan struktur bangunan"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Konsultasi Keamanan Struktur",
                        "description": "Konsultasi profesional untuk optimalisasi keamanan struktur"
                    }
                }
            ]
        },
        "serviceType": "Structural Audit",
        "category": "Construction Safety Services"
    }
    </script>
    
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "name": "Audit Struktur Professional Services",
        "description": "Layanan profesional audit struktur untuk mengoptimalkan keamanan dan kinerja bangunan dengan standar kualitas tinggi dan tenaga ahli berpengalaman.",
        "provider": {
            "@type": "Organization",
            "name": "PT. Kinarya Kompegriti Rekanusa",
            "url": "https://rekanusa.co.id"
        },
        "areaServed": "Indonesia",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Structural Audit Services Catalog",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "ProfessionalService",
                        "name": "Building Safety Assessment",
                        "description": "Penilaian keamanan bangunan profesional"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "ProfessionalService",
                        "name": "Structural Performance Evaluation",
                        "description": "Evaluasi kinerja struktur bangunan"
                    }
                }
            ]
        },
        "openingHours": "Mo-Fr 08:00-17:00",
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "-6.2088",
            "longitude": "106.8456"
        },
        "priceRange": "$$",
        "serviceArea": {
            "@type": "Country",
            "name": "Indonesia"
        }
    }
    </script>
@endsection
@section('content')
    {{-- banner --}}
    <section id="banner" class="overflow-hidden relative uppercase font-monserrat">
        <div>
            <div class="object-cover absolute inset-0 w-full h-full">
                <img loading="eager" class="object-cover inset-0 w-full h-full" loading="eager"
                    src="{{ asset('img/general/banner-struktur.webp') }}" alt="banner rekanusa">
            </div>
            <img loading="eager" class="object-cover absolute inset-0 w-full h-full mix-blend-normal"
                src="{{ asset('img/general/bg-hijau.png') }}" loading="eager" alt="bg hijau rekanusa">
        </div>
        <div class="container relative px-4 py-24 mx-auto text-center max-w-screen lg:pl-20 lg:text-left md:py-52 lg:py-56">
            <h1
                class="mb-4 text-xl font-extrabold tracking-normal leading-relaxed text-white md:text-4xl md:leading-relaxed lg:text-5xl lg:leading-relaxed 2xl:text-6xl 2xl:leading-relaxed">
                @if (app()->getLocale() == 'en')
                    optimize the safety and <br class="hidden lg:block"> performance of your building with <br
                        class="hidden lg:block"> a <span class="p-2 bg-primary">structure audit</span> <br
                        class="hidden lg:block">
                @else
                    Optimalkan keamanan dan kinerja <br class="hidden lg:block">
                    bangunan anda dengan <br class="hidden lg:block">
                    <span class="p-2 bg-primary">audit struktur</span>
                    berkualitas
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

    {{-- tentang audit --}}
    <section id="tentang"
        class="relative hidden min-h-[70vh] lg:block bg-[url('../../public/img/general/bg-tentang-audit.webp')] bg-no-repeat bg-cover bg-center">
        <div class="container mx-auto p-6">
            <div class="flex justify-end items-center self-center pt-25">
                <div class="max-w-xl">
                    @if (app()->getLocale() == 'en')
                        <div
                            class="text-xl font-normal capitalize tracking-wide text-secondary font-poppins 2xl:text-2xl 2xl:tracking-wide">
                            About Structure Audit
                        </div>
                        <div class="w-10 h-1 mb-5 bg-secondary"></div>
                        <h2
                            class="mb-10 text-2xl font-bold leading-normal font-poppins 2xl:text-4xl 2xl:leading-normal text-primary">
                            What is Structure Audit
                        </h2>
                        <div class="text-base mb-5 text-justify lg:text-lg text-paragraph font-poppins">
                            A structural audit or what is commonly called a structural feasibility test is a health check as
                            well as the overall performance of the building like a doctor to his patient.This is done to
                            ensure that the building and all existing supports are safe and have no risks.
                        </div>
                        <div class="text-base text-justify lg:text-lg text-paragraph font-poppins">
                            Next is to analyze and then suggest appropriate repairs and carry out the necessary
                            reinforcement measures so that the building has good performance throughout its service life.
                        </div>
                    @else
                        <div
                            class="text-xl font-normal capitalize tracking-wide text-secondary font-poppins 2xl:text-2xl 2xl:tracking-wide">
                            Tentang Audit Struktur
                        </div>
                        <div class="w-10 h-1 mb-5 bg-secondary"></div>
                        <h2
                            class="mb-10 text-2xl font-bold leading-normal font-poppins 2xl:text-4xl 2xl:leading-normal text-primary">
                            Apa itu Audit Struktur
                        </h2>
                        <div class="text-base mb-5 text-justify lg:text-lg text-paragraph font-poppins">
                            Audit Struktur atau yang biasa disebut uji kelayakan struktur merupakan sebuah pemeriksaan
                            kesehatan juga kinerja bangunan secara keseluruhan layaknya seorang dokter pada pada
                            pasiennya.Hal ini dilakukan untuk memastikan bangunan serta segala pendukung yang ada aman dan
                            tidak memiliki resiko.
                        </div>
                        <div class="text-base text-justify lg:text-lg text-paragraph font-poppins">
                            Selanjutnya yaitu melakukan analisa lalu menyarankan perbaikan yang tepat serta menjalankan
                            langkah-langkah perkuatan yang diperlukan supaya bangunan tersebut memiliki performa yang baik
                            sepanjang masa layanannya.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    {{-- mobile --}}
    <section id="tentang"
        class="relative block lg:hidden bg-[url('../../public/img/general/service-audit.webp')] bg-no-repeat bg-cover bg-center bg-blend-overlay bg-white/60 h-auto">
        <div class="px-6 py-10 md:py-32 md:px-20">
            @if (app()->getLocale() == 'en')
                <div class="text-xl font-normal tracking-wide text-secondary font-poppins 2xl:text-2xl 2xl:tracking-wide">
                    About Structure Audit
                </div>
                <div class="w-10 h-1 mb-5 bg-secondary"></div>
                <h2 class="mb-10 text-2xl font-bold font-poppins 2xl:text-4xl text-primary">
                    What is Structure Audit
                </h2>
                <div class="text-base mb-5 text-justify lg:text-lg text-paragraph font-poppins">
                    A structural audit or what is commonly called a structural feasibility test is a health check as well as
                    the overall performance of the building like a doctor to his patient.This is done to ensure that the
                    building and all existing supports are safe and have no risks.
                </div>
                <div class="text-base text-justify lg:text-lg text-paragraph font-poppins">
                    Next is to analyze and then suggest appropriate repairs and carry out the necessary reinforcement
                    measures so that the building has good performance throughout its service life.
                </div>
            @else
                <div class="text-xl font-normal tracking-wide text-secondary font-poppins 2xl:text-2xl 2xl:tracking-wide">
                    Tentang Audit Struktur
                </div>
                <div class="w-10 h-1 mb-5 bg-secondary"></div>
                <h2 class="mb-10 text-2xl font-bold font-poppins 2xl:text-4xl text-primary">
                    Apa itu Audit Struktur
                </h2>
                <div class="text-base mb-5 text-justify lg:text-lg text-paragraph font-poppins">
                    Audit Struktur atau yang biasa disebut uji kelayakan struktur merupakan sebuah pemeriksaan kesehatan
                    juga kinerja bangunan secara keseluruhan layaknya seorang dokter pada pada pasiennya.Hal ini dilakukan
                    untuk memastikan bangunan serta segala pendukung yang ada aman dan tidak memiliki resiko.
                </div>
                <div class="text-base text-justify lg:text-lg text-paragraph font-poppins">
                    Selanjutnya yaitu melakukan analisa lalu menyarankan perbaikan yang tepat serta menjalankan
                    langkah-langkah perkuatan yang diperlukan supaya bangunan tersebut memiliki performa yang baik sepanjang
                    masa layanannya.
                </div>
            @endif
        </div>
    </section>
    {{-- end tentang audit --}}

    {{-- section alasan --}}
    <section id="alasan"
        class="relative bg-[url('../../public/img/general/bg-alasan-audit.webp')] bg-no-repeat bg-cover h-auto">
        <div class="container px-6 py-20 mx-auto lg:px-60 2xl:py-32 2xl:px-96">
            <div class="flex flex-col justify-center">
                @if (app()->getLocale() == 'en')
                    <div
                        class="mb-10 text-xl font-bold text-center uppercase md:text-left text-primary font-inter lg:text-2xl lg:leading-normal 2xl:text-4xl 2xl:leading-normal">
                        <span class="px-1 text-white bg-secondary">5 Reasons</span>
                        WHY STRUCTURE AUDIT ARE IMPORTANT FOR
                        <span class="px-1 text-white bg-secondary">your business</span> or <span
                            class="px-1 text-white bg-secondary">property</span> ?
                    </div>
                    <ul class="pl-5 font-bold list-decimal text-paragraph font-poppins">
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Occupant and User Safety
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                A structural audit ensures that buildings are safe to occupy and use. This can help prevent
                                fatal accidents due to building collapse.
                            </p>
                        </li>
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Maintaining Asset Value
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Structurally sound buildings have a higher asset value. A structural audit can help you
                                maintain the value of your assets and increase the chances of selling or renting the
                                property at a higher price.
                            </p>
                        </li>
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Prevent breakdowns and costly repairs
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                A structural audit can help you identify potential structural problems as early as possible.
                                This allows you to make repairs at a lower cost and prevent more severe damage in the
                                future.
                            </p>
                        </li>
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                meet legal and regulatory requirements
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                In some regions, structure audits are required by law or regulation. By conducting a
                                structural audit, you can ensure that you are compliant with the applicable regulations.
                            </p>
                        </li>
                        <li class="pl-2 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Improving Resident and User Satisfaction
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Occupants and users will feel safer and more comfortable in a structurally sound building.
                                This can increase their satisfaction level and help you retain customers or employees.
                            </p>
                        </li>
                    </ul>
                @else
                    <div
                        class="mb-10 text-xl font-bold text-center uppercase md:text-left text-primary font-inter lg:text-2xl lg:leading-normal 2xl:text-4xl 2xl:leading-normal">
                        <span class="px-1 text-white bg-secondary">5 Alasan</span>
                        Mengapa Audit Struktur penting untuk
                        <span class="px-1 text-white bg-secondary">bisnis</span> atau <span
                            class="px-1 text-white bg-secondary">properti anda</span> ?
                    </div>
                    <ul class="pl-5 font-bold list-decimal text-paragraph font-poppins">
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Keselamatan Penghuni dan Pengguna
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Audit struktur memastikan bahwa bangunan aman untuk ditempati dan digunakan. Hal ini dapat
                                membantu mencegah terjadinya kecelakaan fatal akibat runtuhnya bangunan.
                            </p>
                        </li>
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Menjaga Nilai Aset
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Bangunan dengan struktur yang baik memiliki nilai aset yang lebih tinggi. Audit struktur
                                dapat membantu Anda menjaga nilai aset Anda dan meningkatkan peluang untuk menjual atau
                                menyewakan properti dengan harga yang lebih tinggi.
                            </p>
                        </li>
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Mencegah Kerusakan dan Biaya Perbaikan yang Mahal
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Audit struktur dapat membantu Anda mengidentifikasi potensi masalah struktur sedini mungkin.
                                Hal ini memungkinkan Anda untuk melakukan perbaikan dengan biaya yang lebih rendah dan
                                mencegah kerusakan yang lebih parah di masa depan.
                            </p>
                        </li>
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Memenuhi Persyaratan Hukum dan Regulasi
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Di beberapa daerah, audit struktur diwajibkan oleh undang-undang atau regulasi. Dengan
                                melakukan audit struktur, Anda dapat memastikan bahwa Anda patuh terhadap peraturan yang
                                berlaku
                            </p>
                        </li>
                        <li class="pl-2 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Meningkatkan Kepuasan Penghuni dan Pengguna
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Penghuni dan pengguna akan merasa lebih aman dan nyaman berada di bangunan dengan struktur
                                yang baik. Hal ini dapat meningkatkan tingkat kepuasan mereka dan membantu Anda
                                mempertahankan pelanggan atau karyawan
                            </p>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </section>
    {{-- end alasan --}}

    {{-- section syarat --}}
    <section id="syarat" class="relative">
        <div class="container py-32 mx-auto">
            <div class="text-center">
                <h2 class="mb-10 text-2xl font-bold uppercase text-primary md:text-4xl font-poppins">
                    @if (app()->getLocale() == 'en')
                        Some signs of a building that needs a <br class="hidden lg:block"> structural audit:
                    @else
                        Beberapa tanda bangunan yang perlu <br class="hidden lg:block"> di audit struktur :
                    @endif
                </h2>
            </div>

            <div class="flex flex-col gap-5 px-10 lg:px-32 lg:flex-row">
                <div class="flex flex-col w-full gap-5 lg:w-1/2">
                    <div class="w-full p-10 text-center rounded-lg shadow-2xl drop-shadow-2xl">
                        <h3 class="text-[#1E1E1E] font-semibold font-poppins text-2xl">
                            @if (app()->getLocale() == 'en')
                                Visual signs
                            @else
                                Tanda-tanda visual
                            @endif
                        </h3>
                    </div>
                    <div class="w-full h-full px-10 py-10 rounded-lg shadow-2xl md:px-20 drop-shadow-2xl">
                        <ul class="space-y-2 list-disc text-paragraph font-poppins">
                            @if (app()->getLocale() == 'en')
                                <li>
                                    Cracks in the building walls
                                </li>
                                <li>
                                    Deformation or changes in the building structure
                                </li>
                                <li>
                                    Damage to structural elements
                                </li>
                                <li>
                                    Old buildings that have fallen into disrepair
                                </li>
                            @else
                                <li>
                                    Adanya retakan pada dinding bangunan
                                </li>
                                <li>
                                    Deformasi atau adanya perubahan pada struktur bangunan
                                </li>
                                <li>
                                    Adanya kerusakan pada elemen struktur
                                </li>
                                <li>
                                    Bangunan lama yang sudah beropresi
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-5 lg:w-1/2">
                    <div class="w-full p-10 text-center rounded-lg shadow-2xl drop-shadow-2xl">
                        <h3 class="text-[#1E1E1E] font-semibold font-poppins text-2xl">
                            @if (app()->getLocale() == 'en')
                                Functional signs
                            @else
                                Tanda-tanda fungsional
                            @endif
                        </h3>
                    </div>
                    <div class="w-full h-full px-10 py-10 shadow-2xl md:px-20 drop-shadow-2xl">
                        <ul class="space-y-2 list-disc text-paragraph font-poppins">
                            @if (app()->getLocale() == 'en')
                                <li>
                                    Excessive vibration of the building when there are strong winds or earthquakes
                                </li>
                                <li>
                                    Decline of the building as a whole or in certain parts
                                </li>
                                <li>
                                    Doors and windows that are jammed or difficult to open/close may indicate deformation of
                                    the building structure
                                </li>
                                <li>
                                    Excessive noise from the building structure, such as creaking or rubbing, may indicate a
                                    problem with the building structure
                                </li>
                            @else
                                <li>
                                    Getaran yang berlebihan pada bangunan ketika ada angin kencang atau gempa bumi
                                </li>
                                <li>
                                    Penurunan bangunan secara keseluruhan atau pada bagian tertentu
                                </li>
                                <li>
                                    Pintu dan jendela yang macet atau sulit dibuka/ditutup dapat menandakan adanya deformasi
                                    pada struktur bangunan
                                </li>
                                <li>
                                    Kebisingan yang berlebihan dari struktur bangunan, seperti derit atau gesekan, dapat
                                    menandakan adanya masalah pada struktur bangunan
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end syarat --}}

    {{-- section konsultasi --}}
    <section id="konsultasi" class="relative">
        <div class="container mx-auto">
            <div class="flex flex-col-reverse md:flex-row">
                <div class="w-full py-20 pl-6 lg:px-20 2xl:px-32">
                    @if (app()->getLocale() == 'en')
                        <div
                            class="mb-2 text-xl font-bold leading-normal uppercase lg:leading-normal lg:text-3xl text-secondary font-poppins">
                            Consult your STRUCTURE audit now!
                        </div>
                        <div class="mb-5 font-semibold font-poppins">
                            Find the best way to inspect your building and get the best deal. Don't miss this opportunity!
                        </div>
                    @else
                        <div
                            class="mb-2 text-xl font-bold leading-normal uppercase lg:leading-normal lg:text-3xl text-secondary font-poppins">
                            segera konsultasikan audit struktur anda sekarang!
                        </div>
                        <div class="mb-5 font-semibold font-poppins">
                            Temukan cara terbaik untuk memeriksa bangunan anda dan dapatkan penawaran terbaik. Jangan
                            lewatkan kesempatan ini!
                        </div>
                    @endif
                    <div class="flex w-full">
                        <a href="https://wa.me/6281380801113" target="_blank"
                            class="flex items-center self-center justify-center w-3/4 px-5 py-3 space-x-2 text-center transition-all rounded-full bg-secondary group hover:scale-105 hover:drop-shadow-2xl hover:shadow-2xl hover:shadow-secondary">
                            <div class="text-xl font-semibold text-white uppercase lg:text-3xl">
                                @if (app()->getLocale() == 'en')
                                    Consult Now
                                @else
                                    Konsultasi Sekarang
                                @endif
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 pt-1" viewBox="0,0,256,256">
                                <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8,8)">
                                        <path
                                            d="M24.50391,7.50391c-2.25781,-2.25781 -5.25781,-3.50391 -8.45312,-3.50391c-6.58594,0 -11.94922,5.35938 -11.94922,11.94531c-0.00391,2.10547 0.54688,4.16016 1.59375,5.97266l-1.69531,6.19141l6.33594,-1.66406c1.74219,0.95313 3.71094,1.45313 5.71094,1.45703h0.00391c6.58594,0 11.94531,-5.35937 11.94922,-11.94922c0,-3.19141 -1.24219,-6.19141 -3.49609,-8.44922zM16.05078,25.88281h-0.00391c-1.78125,0 -3.53125,-0.48047 -5.05469,-1.38281l-0.36328,-0.21484l-3.76172,0.98438l1.00391,-3.66406l-0.23437,-0.375c-0.99609,-1.58203 -1.51953,-3.41016 -1.51953,-5.28516c0,-5.47266 4.45703,-9.92578 9.9375,-9.92578c2.65234,0 5.14453,1.03516 7.01953,2.91016c1.875,1.87891 2.90625,4.37109 2.90625,7.02344c0,5.47656 -4.45703,9.92969 -9.92969,9.92969zM21.49609,18.44531c-0.29687,-0.14844 -1.76562,-0.87109 -2.03906,-0.96875c-0.27344,-0.10156 -0.47266,-0.14844 -0.67187,0.14844c-0.19922,0.30078 -0.76953,0.97266 -0.94531,1.17188c-0.17187,0.19531 -0.34766,0.22266 -0.64453,0.07422c-0.30078,-0.14844 -1.26172,-0.46484 -2.40234,-1.48437c-0.88672,-0.78906 -1.48828,-1.76953 -1.66016,-2.06641c-0.17578,-0.30078 -0.01953,-0.46094 0.12891,-0.60937c0.13672,-0.13281 0.30078,-0.34766 0.44922,-0.52344c0.14844,-0.17187 0.19922,-0.29687 0.30078,-0.49609c0.09766,-0.19922 0.04688,-0.375 -0.02734,-0.52344c-0.07422,-0.14844 -0.67187,-1.62109 -0.92187,-2.21875c-0.24219,-0.58203 -0.48828,-0.5 -0.67187,-0.51172c-0.17187,-0.00781 -0.37109,-0.00781 -0.57031,-0.00781c-0.19922,0 -0.52344,0.07422 -0.79687,0.375c-0.27344,0.29688 -1.04297,1.01953 -1.04297,2.48828c0,1.46875 1.07031,2.89063 1.21875,3.08984c0.14844,0.19531 2.10547,3.21094 5.10156,4.50391c0.71094,0.30859 1.26563,0.49219 1.69922,0.62891c0.71484,0.22656 1.36719,0.19531 1.88281,0.12109c0.57422,-0.08594 1.76563,-0.72266 2.01563,-1.42187c0.24609,-0.69531 0.24609,-1.29297 0.17188,-1.41797c-0.07422,-0.125 -0.27344,-0.19922 -0.57422,-0.35156z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex items-center justify-center w-full">
                    <img loading="lazy" src="{{ asset('img/general/konsultasi.webp') }}" alt="konsultasi">
                </div>
            </div>
        </div>
    </section>
    {{-- end konsultasi --}}

    {{-- section perolehan --}}
    <section id="profil"
        class="relative lg:min-h-[90vh] bg-white lg:bg-[url('../../public/img/general/bg-perolehan-audit.webp')] bg-no-repeat bg-cover bg-center">

        <div
            class="relative h-full lg:max-w-screen-lg 2xl:max-w-screen-xl lg:min-h-[90vh] px-4 py-24 text-left lg:pl-20 2xl:py-32">
            <h2
                class="mb-4 text-xl font-extrabold leading-relaxed tracking-normal text-center lg:text-left font-poppins text-primary md:text-2xl md:leading-relaxed 2xl:pl-32 2xl:text-4xl 2xl:leading-relaxed">
                @if (app()->getLocale() == 'en')
                    Building Structure Audit Process
                @else
                    Proses Audit Struktur Bangunan
                @endif
            </h2>
            <div class="w-full lg:w-1/2 text-paragraph font-poppins 2xl:pl-32 2xl:w-3/4 2xl:text-xl">

                @if (app()->getLocale() == 'en')
                    <div id="accordion-color" data-accordion="collapse"
                        data-active-classes="bg-secondary text-white font-medium">
                        <h2 id="accordion-color-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full gap-3 p-5 font-bold text-paragraph rtl:text-right rounded-t-xl hover:bg-secondary hover:text-white"
                                data-accordion-target="#accordion-color-body-1" aria-expanded="true"
                                aria-controls="accordion-color-body-1">
                                <span class="capitalize">1. preliminary preparation</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                            <div class="p-5 border-2 border-t-0 rounded-b-xl border-secondary">
                                <ul class="px-5 space-y-3 text-justify text-paragraph font-poppin">
                                    <li>
                                        The building owner or manager applies for a structural audit and will conduct an
                                        initial survey to review the condition of the building and determine the scope of
                                        the audit.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- batas --}}
                        <h2 id="accordion-color-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full gap-3 p-5 font-bold text-paragraph rtl:text-right rounded-t-xl hover:bg-secondary hover:text-white"
                                data-accordion-target="#accordion-color-body-2" aria-expanded="false"
                                aria-controls="accordion-color-body-2">
                                <span class="capitalize">2. Data collection</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                            <div class="p-5 border-2 border-t-0 rounded-b-xl border-secondary">
                                <ul class="px-5 space-y-3 text-justify text-paragraph font-poppin">
                                    <li>
                                        Next will enter the data collection stage about the building to be audited.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- batas --}}
                        <h2 id="accordion-color-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full gap-3 p-5 font-bold text-paragraph rtl:text-right rounded-t-xl hover:bg-secondary hover:text-white"
                                data-accordion-target="#accordion-color-body-3" aria-expanded="false"
                                aria-controls="accordion-color-body-3">
                                <span class="capitalize">3. visual inspection</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                            <div class="p-5 border-2 border-t-0 rounded-b-xl border-secondary">
                                <ul class="px-5 space-y-3 text-justify text-paragraph font-poppin">
                                    <li>
                                        After data collection is complete, the next process is to conduct a visual
                                        inspection of the building structure
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- batas --}}
                        <h2 id="accordion-color-heading-4">
                            <button type="button"
                                class="flex items-center justify-between w-full gap-3 p-5 font-bold text-paragraph rtl:text-right rounded-t-xl hover:bg-secondary hover:text-white"
                                data-accordion-target="#accordion-color-body-4" aria-expanded="false"
                                aria-controls="accordion-color-body-4">
                                <span class="capitalize">4. non-destructive testing</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-4">
                            <div class="p-5 border-2 border-t-0 rounded-b-xl border-secondary">
                                <ul class="px-5 space-y-3 text-justify text-paragraph font-poppin">
                                    <li>
                                        What is meant by conducting a non-destructive test is a testing method where it aims
                                        to evaluate the structure of the building, the method must be carried out without
                                        making damage to the object being tested, the test is usually called the UPV Test
                                        (Ultrasonic Pulse Velocity).
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- batas --}}
                        <h2 id="accordion-color-heading-5">
                            <button type="button"
                                class="flex items-center justify-between w-full gap-3 p-5 font-bold text-paragraph rtl:text-right rounded-t-xl hover:bg-secondary hover:text-white"
                                data-accordion-target="#accordion-color-body-5" aria-expanded="false"
                                aria-controls="accordion-color-body-5">
                                <span class="capitalize">5. data analysis</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-5" class="hidden" aria-labelledby="accordion-color-heading-5">
                            <div class="p-5 border-2 border-t-0 rounded-b-xl border-secondary">
                                <ul class="px-5 space-y-3 text-justify text-paragraph font-poppin">
                                    <li>
                                        Next, analyze the data collected to determine the condition of the building
                                        structure, calculate the capacity of the building structure and predict the
                                        possibility of structural damage.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- batas --}}

                        <h2 id="accordion-color-heading-6">
                            <button type="button"
                                class="flex items-center justify-between w-full gap-3 p-5 font-bold text-paragraph rtl:text-right rounded-t-xl hover:bg-secondary hover:text-white"
                                data-accordion-target="#accordion-color-body-6" aria-expanded="false"
                                aria-controls="accordion-color-body-6">
                                <span class="capitalize">6. report preparation</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-6" class="hidden" aria-labelledby="accordion-color-heading-6">
                            <div class="p-5 border-2 border-t-0 rounded-b-xl border-secondary">
                                <ul class="px-5 space-y-3 text-justify text-paragraph font-poppin">
                                    <li>
                                        Create a report that contains the results of the structural audit, conclusions and
                                        recommendations for repairs and estimated repair costs.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- batas --}}

                        <h2 id="accordion-color-heading-7">
                            <button type="button"
                                class="flex items-center justify-between w-full gap-3 p-5 font-bold text-paragraph rtl:text-right rounded-t-xl hover:bg-secondary hover:text-white"
                                data-accordion-target="#accordion-color-body-7" aria-expanded="false"
                                aria-controls="accordion-color-body-7">
                                <span class="capitalize">7. Follow-up</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-7" class="hidden" aria-labelledby="accordion-color-heading-7">
                            <div class="p-5 border-2 border-t-0 rounded-b-xl border-secondary">
                                <ul class="px-5 space-y-3 text-justify text-paragraph font-poppin">
                                    <li>
                                        The building owner or manager will follow up the recommendations given in the
                                        structural audit report.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- batas --}}
                    </div>
                @else
                    <div id="accordion-color" data-accordion="collapse"
                        data-active-classes="bg-secondary text-white font-medium">
                        <h2 id="accordion-color-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full gap-3 p-5 font-bold text-paragraph rtl:text-right rounded-t-xl hover:bg-secondary hover:text-white"
                                data-accordion-target="#accordion-color-body-1" aria-expanded="true"
                                aria-controls="accordion-color-body-1">
                                <span class="capitalize">1. persiapan awal</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                            <div class="p-5 border-2 border-t-0 rounded-b-xl border-secondary">
                                <ul class="px-5 space-y-3 text-justify text-paragraph font-poppin">
                                    <li>
                                        Pemilik bangunan atau pengelola gedung mengajukan permohonan audit struktur serta
                                        akan akan melakukan survei awal untuk meninjau kondisi bangunan dan menentukan
                                        lingkup audit.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- batas --}}
                        <h2 id="accordion-color-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full gap-3 p-5 font-bold text-paragraph rtl:text-right rounded-t-xl hover:bg-secondary hover:text-white"
                                data-accordion-target="#accordion-color-body-2" aria-expanded="false"
                                aria-controls="accordion-color-body-2">
                                <span class="capitalize">2. pengumpulan data</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                            <div class="p-5 border-2 border-t-0 rounded-b-xl border-secondary">
                                <ul class="px-5 space-y-3 text-justify text-paragraph font-poppin">
                                    <li>
                                        Selanjutnya akan masuk ke tahap pengumpulan data tentang bangunan yang akan di audit
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- batas --}}
                        <h2 id="accordion-color-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full gap-3 p-5 font-bold text-paragraph rtl:text-right rounded-t-xl hover:bg-secondary hover:text-white"
                                data-accordion-target="#accordion-color-body-3" aria-expanded="false"
                                aria-controls="accordion-color-body-3">
                                <span class="capitalize">3. pemeriksaan visual</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                            <div class="p-5 border-2 border-t-0 rounded-b-xl border-secondary">
                                <ul class="px-5 space-y-3 text-justify text-paragraph font-poppin">
                                    <li>
                                        Setelah pengumpulan data selesai, proses selanjutnya melakukan pemeriksaan visual
                                        terhadap struktur bangunan
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- batas --}}
                        <h2 id="accordion-color-heading-4">
                            <button type="button"
                                class="flex items-center justify-between w-full gap-3 p-5 font-bold text-paragraph rtl:text-right rounded-t-xl hover:bg-secondary hover:text-white"
                                data-accordion-target="#accordion-color-body-4" aria-expanded="false"
                                aria-controls="accordion-color-body-4">
                                <span class="capitalize">4. pengujian non-destruktif</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-4">
                            <div class="p-5 border-2 border-t-0 rounded-b-xl border-secondary">
                                <ul class="px-5 space-y-3 text-justify text-paragraph font-poppin">
                                    <li>
                                        Yang dimaksud dengan melakukan non-destructive test adalah sebuah metode pengujian
                                        dimana hal ini bertujuan untuk melakukan evaluasi struktur bangunan, metode tersebut
                                        harus dilakukan tanpa membuat kerusakan object yang sedang diuji, pengujian tersebut
                                        biasanya disebut dengan UPV Test (Ultrasonic Pulse Velocity).
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- batas --}}
                        <h2 id="accordion-color-heading-5">
                            <button type="button"
                                class="flex items-center justify-between w-full gap-3 p-5 font-bold text-paragraph rtl:text-right rounded-t-xl hover:bg-secondary hover:text-white"
                                data-accordion-target="#accordion-color-body-5" aria-expanded="false"
                                aria-controls="accordion-color-body-5">
                                <span class="capitalize">5. analisis data</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-5" class="hidden" aria-labelledby="accordion-color-heading-5">
                            <div class="p-5 border-2 border-t-0 rounded-b-xl border-secondary">
                                <ul class="px-5 space-y-3 text-justify text-paragraph font-poppin">
                                    <li>
                                        Selanjutnya menganalisis data yang dikumpulkan untuk Menentukan kondisi struktur
                                        bangunan, Menghitung kapasitas struktur bangunan serta Memprediksi kemungkinan
                                        terjadinya kerusakan struktur
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- batas --}}

                        <h2 id="accordion-color-heading-6">
                            <button type="button"
                                class="flex items-center justify-between w-full gap-3 p-5 font-bold text-paragraph rtl:text-right rounded-t-xl hover:bg-secondary hover:text-white"
                                data-accordion-target="#accordion-color-body-6" aria-expanded="false"
                                aria-controls="accordion-color-body-6">
                                <span class="capitalize">6. pembuatan laporan</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-6" class="hidden" aria-labelledby="accordion-color-heading-6">
                            <div class="p-5 border-2 border-t-0 rounded-b-xl border-secondary">
                                <ul class="px-5 space-y-3 text-justify text-paragraph font-poppin">
                                    <li>
                                        membuat laporan yang berisi Hasil audit struktur, Kesimpulan dan rekomendasi untuk
                                        perbaikan dan Perkiraan biaya perbaikan
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- batas --}}

                        <h2 id="accordion-color-heading-7">
                            <button type="button"
                                class="flex items-center justify-between w-full gap-3 p-5 font-bold text-paragraph rtl:text-right rounded-t-xl hover:bg-secondary hover:text-white"
                                data-accordion-target="#accordion-color-body-7" aria-expanded="false"
                                aria-controls="accordion-color-body-7">
                                <span class="capitalize">7. tindak lanjut</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-7" class="hidden" aria-labelledby="accordion-color-heading-7">
                            <div class="p-5 border-2 border-t-0 rounded-b-xl border-secondary">
                                <ul class="px-5 space-y-3 text-justify text-paragraph font-poppin">
                                    <li>
                                        Pemilik bangunan atau pengelola gedung akan menindaklanjuti rekomendasi yang
                                        diberikan dalam laporan audit struktur.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- batas --}}
                    </div>
                @endif

            </div>
        </div>

    </section>
    {{-- end perolehan --}}

    {{-- section ksp --}}
    <section class="relative">

        <!-- Slider main container -->
        <div class="relative w-full swiper h-[50vh] lg:h-[80vh] overflow-hidden">
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper', {
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
