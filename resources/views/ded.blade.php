@extends('layouts.main')
@section('kepala')
    {{-- swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    {{-- Schema.org Structured Data --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Layanan DED (Detail Engineering Design)",
        "description": "Layanan profesional untuk merancang konsep desain bangunan dengan tenaga ahli professional. Kami menyediakan layanan DED yang komprehensif untuk berbagai jenis proyek konstruksi.",
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
            "name": "Layanan DED",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Detail Engineering Design",
                        "description": "Perancangan detail teknik untuk proyek konstruksi"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Konsep Desain Bangunan",
                        "description": "Perancangan konsep desain bangunan profesional"
                    }
                }
            ]
        },
        "serviceType": "Engineering Design",
        "category": "Construction Services"
    }
    </script>
    
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "name": "DED Professional Services",
        "description": "Layanan profesional Detail Engineering Design dengan tenaga ahli berpengalaman untuk merancang konsep desain bangunan yang berkualitas.",
        "provider": {
            "@type": "Organization",
            "name": "PT. Kinarya Kompegriti Rekanusa",
            "url": "https://rekanusa.co.id"
        },
        "areaServed": "Indonesia",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "DED Services Catalog",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "ProfessionalService",
                        "name": "Building Design Consultation",
                        "description": "Konsultasi desain bangunan profesional"
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
                    src="{{ asset('img/general/banner-ded.webp') }}" alt="banner rekanusa">
            </div>
            <img loading="eager" class="object-cover absolute inset-0 w-full h-full mix-blend-normal"
                src="{{ asset('img/general/bg-hijau.png') }}" loading="eager" alt="bg hijau rekanusa">
        </div>
        <div class="container relative px-4 py-24 mx-auto text-center max-w-screen lg:pl-20 lg:text-left md:py-52 lg:py-56">
            <h1
                class="mb-4 text-xl font-extrabold tracking-normal leading-relaxed text-white md:text-4xl md:leading-relaxed lg:text-5xl lg:leading-relaxed 2xl:text-6xl 2xl:leading-relaxed">
                @if (app()->getLocale() == 'en')
                    design your <span class="p-2 bg-primary">building design</span> <br class="hidden lg:block">
                    concept, with professional <br class="hidden lg:block">
                    experts
                @else
                    Rancang <span class="p-2 bg-primary">konsep desain</span> <br class="hidden lg:block">
                    bangunan anda, dengan tenaga <br class="hidden lg:block">
                    ahli professional
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

    {{-- tentang slf --}}
    <section id="tentang"
        class="relative hidden min-h-[70vh] lg:block bg-[url('../../public/img/general/bg-tentang-ded.webp')] bg-no-repeat bg-cover bg-center">
        <div class="container mx-auto p-6">
            <div class="flex justify-end items-center self-center pt-25">
                <div class="max-w-xl">
                    @if (app()->getLocale() == 'en')
                        <div
                            class="text-xl font-normal capitalize tracking-wide text-secondary font-poppins 2xl:text-2xl 2xl:tracking-wide">
                            About DED
                        </div>
                        <div class="w-10 h-1 mb-5 bg-secondary"></div>
                        <h2
                            class="mb-10 text-2xl font-bold leading-normal font-poppins 2xl:text-4xl 2xl:leading-normal text-primary">
                            What is the Working Details / Detail Engineering Design (DED)?
                        </h2>
                        <div class="text-base text-justify mb-5 lg:text-lg text-paragraph font-poppins">
                            Working drawings are technical drawings used in the construction, architecture, and
                            Engineering to describe in detail various aspects of a project or construction.
                            Working drawings function as a guide for professionals such as architects, engineers, craftsmen,
                            and contractors to carry out the project accurately and in accordance with the desired design.
                        </div>
                        <div class="text-base text-justify lg:text-lg text-paragraph font-poppins">
                            Detail Engineering Design (DED) or Detailed Engineering Design is the stage in the engineering
                            process
                            or design where the design concept is more abstract or commonly developed into a plan
                            very detailed technical and ready to be implemented.DED generally occurs after
                            Conceptual Planning Stage and Basic Planning.
                        </div>
                    @else
                        <div
                            class="text-xl font-normal capitalize tracking-wide text-secondary font-poppins 2xl:text-2xl 2xl:tracking-wide">
                            Tentang DED
                        </div>
                        <div class="w-10 h-1 mb-5 bg-secondary"></div>
                        <h2
                            class="mb-10 text-2xl font-bold leading-normal font-poppins 2xl:text-4xl 2xl:leading-normal text-primary">
                            Apa itu Gambar Kerja / Detail Engineering Design (DED) ?
                        </h2>
                        <div class="text-base text-justify mb-5 lg:text-lg text-paragraph font-poppins">
                            Gambar kerja adalah gambar teknis yang digunakan dalam industri konstruksi, arsitektur, dan
                            rekayasa untuk menggambarkan dengan detail berbagai aspek dari suatu proyek atau konstruksi.
                            Gambar kerja berfungsi sebagai panduan bagi para profesional seperti arsitek, insinyur, tukang,
                            dan kontraktor untuk melaksanakan proyek dengan akurat dan sesuai dengan desain yang diinginkan.
                        </div>
                        <div class="text-base text-justify lg:text-lg text-paragraph font-poppins">
                            Detail Engineering Design (DED) atau Rancangan Teknik Detil adalah tahap dalam proses rekayasa
                            atau desain di mana konsep desain yang lebih abstrak atau umum dikembangkan menjadi rencana
                            teknis yang sangat terperinci dan siap untuk diimplementasikan. DED umumnya terjadi setelah
                            tahap perencanaan konseptual dan perencanaan dasar.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    {{-- mobile --}}
    <section id="tentang"
        class="relative block lg:hidden bg-[url('../../public/img/general/service-pbg.webp')] bg-no-repeat bg-cover bg-blend-overlay bg-white/60 h-auto">
        <div class="px-6 py-10 md:py-32 md:px-20">
            @if (app()->getLocale() == 'en')
                <div
                    class="text-xl font-normal capitalize tracking-wide text-secondary font-poppins 2xl:text-2xl 2xl:tracking-wide">
                    About DED
                </div>
                <div class="w-10 h-1 mb-5 bg-secondary"></div>
                <h2
                    class="mb-10 text-2xl font-bold leading-normal font-poppins 2xl:text-4xl 2xl:leading-normal text-primary">
                    What is the Working Details / Detail Engineering Design (DED)?
                </h2>
                <div class="text-base text-justify mb-5 lg:text-lg text-paragraph font-poppins">
                    Working drawings are technical drawings used in the construction, architecture, and
                    Engineering to describe in detail various aspects of a project or construction.
                    Working drawings function as a guide for professionals such as architects, engineers, craftsmen,
                    and contractors to carry out the project accurately and in accordance with the desired design.
                </div>
                <div class="text-base text-justify lg:text-lg text-paragraph font-poppins">
                    Detail Engineering Design (DED) or Detailed Engineering Design is the stage in the engineering
                    process
                    or design where the design concept is more abstract or commonly developed into a plan
                    very detailed technical and ready to be implemented.DED generally occurs after
                    Conceptual Planning Stage and Basic Planning.
                </div>
            @else
                <div class="text-xl font-normal tracking-wide text-secondary font-poppins 2xl:text-2xl 2xl:tracking-wide">
                    Tentang DED
                </div>
                <div class="w-10 h-1 mb-5 bg-secondary"></div>
                <h2 class="mb-10 text-2xl font-bold font-poppins 2xl:text-4xl text-primary">
                    Apa itu Gambar Kerja / Detail Engineering Design (DED) ?
                </h2>
                <div class="text-base text-justify mb-5 lg:text-lg text-paragraph font-poppins">
                    Gambar kerja adalah gambar teknis yang digunakan dalam industri konstruksi, arsitektur, dan rekayasa
                    untuk menggambarkan dengan detail berbagai aspek dari suatu proyek atau konstruksi. Gambar kerja
                    berfungsi sebagai panduan bagi para profesional seperti arsitek, insinyur, tukang, dan kontraktor untuk
                    melaksanakan proyek dengan akurat dan sesuai dengan desain yang diinginkan.
                </div>
                <div class="text-base text-justify lg:text-lg text-paragraph font-poppins">
                    Detail Engineering Design (DED) atau Rancangan Teknik Detil adalah tahap dalam proses rekayasa atau
                    desain di mana konsep desain yang lebih abstrak atau umum dikembangkan menjadi rencana teknis yang
                    sangat terperinci dan siap untuk diimplementasikan. DED umumnya terjadi setelah tahap perencanaan
                    konseptual dan perencanaan dasar.
                </div>
            @endif
        </div>
    </section>
    {{-- end tentang slf --}}

    {{-- section alasan --}}
    <section id="alasan"
        class="relative bg-[url('../../public/img/general/bg-alasan-ded.webp')] bg-no-repeat bg-cover h-auto">
        <div class="container px-6 py-20 mx-auto lg:px-60 2xl:py-32 2xl:px-96">
            <div class="flex flex-col justify-center">
                @if (app()->getLocale() == 'en')
                    <div
                        class="mb-10 text-xl font-bold text-center uppercase md:text-left text-primary font-inter lg:text-2xl lg:leading-normal 2xl:text-4xl 2xl:leading-normal">
                        <span class="px-1 text-white bg-secondary">5 Reasons</span>
                        Why DED services are important for
                        <span class="px-1 text-white bg-secondary">your business</span> or <span
                            class="px-1 text-white bg-secondary">property</span> ?
                    </div>
                    <ul class="pl-5 font-bold list-decimal text-paragraph font-poppins">
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Precision in the implementation of construction
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Detailed working drawings allow contractors and builders to understand
                                clearly the desired specifications and layout.This reduces the risk of error
                                or interpretation that can affect the quality and success of construction projects.
                            </p>
                        </li>
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Efficiency in the construction process
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                With the right engineering design details, the construction process can run more smoothly
                                and efficient.Workers will have a clear guide about the steps
                                must be taken, the material needed, and the layout that must be followed, so
                                reduce the possibility of delay and increase productivity.
                            </p>
                        </li>
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Reduce additional costs
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                With a good working image, you can identify potential problems or errors
                                before construction begins.This makes it possible to make improvements or changes
                                before becoming a greater problem, which can save possible additional costs
                                required for later improvement.
                            </p>
                        </li>
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Higher customer satisfaction
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Accurate engineering design details help ensure that the construction project
                                completed according to customer expectations.By giving what results are in accordance with
                                what
                                What customers want, you can strengthen your business reputation and improve
                                Customer satisfaction, which can lead to re -purchase or recommendations to people
                                other.
                            </p>
                        </li>
                        <li class="pl-2 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Conformity with regulations and standards
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Complete and detailed working drawings ensure that your construction project complies with
                                All rules, standards, and building codes that apply.This is not only important for
                                safety and building quality, but also to ensure that you are not subject to sanctions
                                or legal issues due to regulation violations.
                            </p>
                        </li>
                    </ul>
                @else
                    <div
                        class="mb-10 text-xl font-bold text-center uppercase md:text-left text-primary font-inter lg:text-2xl lg:leading-normal 2xl:text-4xl 2xl:leading-normal">
                        <span class="px-1 text-white bg-secondary">5 Alasan</span>
                        Mengapa Jasa DED penting untuk
                        <span class="px-1 text-white bg-secondary">bisnis</span> atau <span
                            class="px-1 text-white bg-secondary">properti anda</span> ?
                    </div>
                    <ul class="pl-5 font-bold list-decimal text-paragraph font-poppins">
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Presisi dalam Pelaksanaan Konstruksi
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Gambar kerja yang terperinci memungkinkan para kontraktor dan pembangun untuk memahami
                                dengan jelas spesifikasi dan tata letak yang diinginkan. Hal ini mengurangi risiko kesalahan
                                atau penafsiran yang dapat mempengaruhi kualitas dan keberhasilan proyek konstruksi.
                            </p>
                        </li>
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Efisiensi dalam Proses Konstruksi
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Dengan Detail Engineering Design yang tepat, proses konstruksi dapat berjalan lebih lancar
                                dan efisien. Para pekerja akan memiliki panduan yang jelas tentang langkah-langkah yang
                                harus diambil, material yang diperlukan, dan tata letak yang harus diikuti, sehingga
                                mengurangi kemungkinan penundaan dan meningkatkan produktivitas.
                            </p>
                        </li>
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Mengurangi Biaya Tambahan
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Dengan gambar kerja yang baik, Anda dapat mengidentifikasi potensi masalah atau kesalahan
                                sebelum konstruksi dimulai. Hal ini memungkinkan untuk melakukan perbaikan atau perubahan
                                sebelum menjadi masalah yang lebih besar, yang dapat menghemat biaya tambahan yang mungkin
                                diperlukan untuk perbaikan di kemudian hari.
                            </p>
                        </li>
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Kepuasan Pelanggan yang Lebih Tinggi
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Detail Engineering Design yang akurat membantu memastikan bahwa proyek konstruksi
                                diselesaikan sesuai dengan harapan pelanggan. Dengan memberikan hasil yang sesuai dengan apa
                                yang diinginkan pelanggan, Anda dapat memperkuat reputasi bisnis Anda dan meningkatkan
                                kepuasan pelanggan, yang dapat berujung pada pembelian ulang atau rekomendasi kepada orang
                                lain.
                            </p>
                        </li>
                        <li class="pl-2 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Kesesuaian dengan Peraturan dan Standar
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Gambar kerja yang lengkap dan terperinci memastikan bahwa proyek konstruksi Anda mematuhi
                                semua peraturan, standar, dan kode bangunan yang berlaku. Ini tidak hanya penting untuk
                                keamanan dan kualitas bangunan, tetapi juga untuk memastikan bahwa Anda tidak terkena sanksi
                                atau masalah hukum karena pelanggaran regulasi.
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
                        Requirements for submitting DED
                    @else
                        Syarat Pengajuan DED
                    @endif
                </h2>
            </div>

            <div class="flex flex-col gap-5 px-10 lg:px-32 lg:flex-row">
                <div class="flex flex-col w-full gap-5 lg:w-1/2">
                    <div class="w-full p-10 text-center rounded-lg shadow-2xl drop-shadow-2xl">
                        <h3 class="text-[#1E1E1E] font-semibold font-poppins text-2xl">
                            @if (app()->getLocale() == 'en')
                                Administrative Requirements
                            @else
                                Persyaratan Administratif
                            @endif
                        </h3>
                    </div>
                    <div class="w-full h-full px-10 py-10 rounded-lg shadow-2xl md:px-20 drop-shadow-2xl">
                        <ul class="space-y-2 list-disc text-paragraph font-poppins">
                            @if (app()->getLocale() == 'en')
                                <li>
                                    DED request letter addressed to the authorized authorities, such as
                                    related agencies or project owners.
                                </li>
                                <li>
                                    Power of Attorney (if represented by someone else)
                                </li>
                                <li>
                                    Photocopy of the applicant's KTP/SIM
                                </li>
                                <li>
                                    Photocopy of Petitioner's NPWP
                                </li>
                                <li>
                                    Trading Business License (SIUP) and Company Registration Certificate (TDP) for the
                                    company
                                    Consultants who make DED
                                </li>
                                <li>
                                    Proof of payment of registration fee (if any)
                                </li>
                            @else
                                <li>
                                    Surat permohonan DED yang ditujukan kepada pihak berwenang yang berkepentingan, seperti
                                    dinas terkait atau pemilik proyek.
                                </li>
                                <li>
                                    Surat kuasa (jika diwakilkan oleh orang lain)
                                </li>
                                <li>
                                    Fotokopi KTP/SIM pemohon
                                </li>
                                <li>
                                    Fotokopi NPWP pemohon
                                </li>
                                <li>
                                    Surat Izin Usaha Perdagangan (SIUP) dan Tanda Daftar Perusahaan (TDP) bagi perusahaan
                                    konsultan yang membuat DED
                                </li>
                                <li>
                                    Bukti pembayaran biaya pendaftaran (jika ada)
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-5 lg:w-1/2">
                    <div class="w-full p-10 text-center rounded-lg shadow-2xl drop-shadow-2xl">
                        <h3 class="text-[#1E1E1E] font-semibold font-poppins text-2xl">
                            @if (app()->getLocale() == 'en')
                                Technical Requirements
                            @else
                                Persyaratan Teknis
                            @endif
                        </h3>
                    </div>
                    <div class="w-full h-full px-10 py-10 shadow-2xl md:px-20 drop-shadow-2xl">
                        <ul class="space-y-2 list-disc text-paragraph font-poppins">
                            @if (app()->getLocale() == 'en')
                                <li>
                                    Images of building plans that have been approved by relevant agencies, such as the Tata
                                    Office
                                    ruang atau dinas perizinan.
                                </li>
                                <li>
                                    Laporan Detail Engineering Design (DED) yang memuat:Penjelasan mengenai proyek Deskripsi
                                    desain Analisis struktur dan fondasi Analisis instalasi mekanikal dan elektrikal Rencana
                                    Cost Budget (RAB) Project Implementation Schedule
                                </li>
                                <li>
                                    Complete and detailed working drawings, including: image plans.
                                    Detailed Pictures of Building Materials Specifications
                                </li>
                                <li>
                                    A statement letter from the planning consultant stating that DED has been made
                                    accordingly
                                    with applicable provisions.
                                </li>
                            @else
                                <li>
                                    Gambar rencana bangunan yang telah disetujui oleh instansi terkait, seperti dinas tata
                                    ruang atau dinas perizinan.
                                </li>
                                <li>
                                    Laporan Detail Engineering Design (DED) yang memuat:Penjelasan mengenai proyek Deskripsi
                                    desain Analisis struktur dan fondasi Analisis instalasi mekanikal dan elektrikal Rencana
                                    anggaran biaya (RAB) Jadwal pelaksanaan proyek
                                </li>
                                <li>
                                    Gambar kerja yang lengkap dan detail, meliputi:Gambar denah Gambar tampak Gambar
                                    potongan Gambar detail Spesifikasi bahan bangunan
                                </li>
                                <li>
                                    Surat pernyataan dari konsultan perencana yang menyatakan bahwa DED telah dibuat sesuai
                                    dengan ketentuan yang berlaku.
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
                            Immediately consult your energy audit now!
                        </div>
                        <div class="mb-5 font-semibold font-poppins">
                            Find a choice of building drawings concept according to your dreams!
                        </div>
                    @else
                        <div
                            class="mb-2 text-xl font-bold leading-normal uppercase lg:leading-normal lg:text-3xl text-secondary font-poppins">
                            Segera konsultasikan audit energi Anda sekarang!
                        </div>
                        <div class="mb-5 font-semibold font-poppins">
                            Temukan Pilihan Konsep Gambar Kerja Bangunan Sesuai Impian Anda!
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
        class="relative lg:min-h-[90vh] bg-white lg:bg-[url('../../public/img/general/bg-perolehan-ded.webp')] bg-no-repeat bg-cover bg-center">

        <div
            class="relative h-full lg:max-w-screen-lg 2xl:max-w-screen-xl lg:min-h-[90vh] px-4 py-24 text-left lg:pl-20 2xl:py-32">
            <h2
                class="mb-4 text-xl font-extrabold leading-relaxed tracking-normal text-center lg:text-left font-poppins text-primary md:text-2xl md:leading-relaxed 2xl:pl-32 2xl:text-4xl 2xl:leading-relaxed">
                @if (app()->getLocale() == 'en')
                    DED acquisition process
                @else
                    Proses Perolehan DED
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
                                <span class="capitalize">1. Pre-contract</span>
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
                                        Consultant selection: Project owner or related agency selects a consultant
                                        Planners who are experienced and have qualifications to make DED.
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
                                <span class="capitalize">2. data collection</span>
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
                                        Planning Consultants Conduct data collection needed for making DEDs,
                                        such as project location data, land conditions data, applicable regulatory data, and
                                        Other data.
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
                                <span class="capitalize">3. DED Making</span>
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
                                        Planning Consultants make DED containing: explanation of the description project
                                        design of structural analysis and foundation of mechanical and electrical
                                        installation analysis
                                        Cost Budget Plan (RAB) Complete and Complete Working Drawing Project Implementation
                                        Schedule
                                        Details
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
                                <span class="capitalize">4. DED Review and Approval</span>
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
                                        The DED that has been made by the planner consultant is reviewed by the appointed
                                        expert team
                                        by the project owner or related agency.
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
                                <span class="capitalize">5. DED submission</span>
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
                                        The planner consultant submits the DED final to the project owner or agency
                                        related.
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
                                <span class="capitalize">1. pra-kontrak</span>
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
                                        Pemilihan konsultan: Pemilik proyek atau instansi terkait memilih konsultan
                                        perencana yang berpengalaman dan memiliki kualifikasi untuk membuat DED.
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
                                        Konsultan perencana melakukan pengumpulan data yang diperlukan untuk pembuatan DED,
                                        seperti data lokasi proyek, data kondisi tanah, data peraturan yang berlaku, dan
                                        data lainnya.
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
                                <span class="capitalize">3. pembuatan DED</span>
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
                                        Konsultan perencana membuat DED yang memuat:Penjelasan mengenai proyek Deskripsi
                                        desain Analisis struktur dan fondasi Analisis instalasi mekanikal dan elektrikal
                                        Rencana anggaran biaya (RAB) Jadwal pelaksanaan proyek Gambar kerja yang lengkap dan
                                        detail
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
                                <span class="capitalize">4. review dan persetujuan DED</span>
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
                                        DED yang telah dibuat oleh konsultan perencana direview oleh tim ahli yang ditunjuk
                                        oleh pemilik proyek atau instansi terkait.
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
                                <span class="capitalize">5. penyerahan DED</span>
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
                                        Konsultan perencana menyerahkan DED final kepada pemilik proyek atau instansi
                                        terkait.
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
