@extends('layouts.main')
@section('kepala')
    {{-- swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection
@section('content')
    {{-- banner --}}
    <section id="banner" class="overflow-hidden relative uppercase font-monserrat">
        <div>
            <div class="object-cover absolute inset-0 w-full h-full">
                <img loading="eager" class="object-cover inset-0 w-full h-full" loading="eager"
                    src="{{ asset('img/general/banner-konstruksi.webp') }}" alt="banner rekanusa">
            </div>
            <img loading="eager" class="object-cover absolute inset-0 w-full h-full mix-blend-normal"
                src="{{ asset('img/general/bg-hijau.png') }}" loading="eager" alt="bg hijau rekanusa">
        </div>
        <div class="container relative px-4 py-24 mx-auto text-center max-w-screen lg:pl-20 lg:text-left md:py-52 lg:py-56">
            <h1
                class="mb-4 text-xl font-extrabold tracking-normal leading-relaxed text-white md:text-4xl md:leading-relaxed lg:text-5xl lg:leading-relaxed 2xl:text-6xl 2xl:leading-relaxed">
                @if (app()->getLocale() == 'en')
                    build together, manage <br class="hidden lg:block">
                    professionally: we are the <span class="p-2 bg-primary">trusted</span> <br class="hidden lg:block">
                    <span class="p-2 bg-primary">solution</span> for your construction
                @else
                    Membangun Bersama, Mengelola <br class="hidden lg:block">
                    dengan Profesional: Kami Adalah <br class="hidden lg:block">
                    Solusi Terpercaya untuk <br class="hidden lg:block">
                    <span class="p-2 bg-primary">konstruksi</span> anda
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
        class="relative hidden min-h-[70vh] lg:block bg-[url('../../public/img/general/bg-tentang-konstruksi.webp')] bg-no-repeat bg-cover bg-center">
        <div class="container mx-auto p-6">
            <div class="flex justify-end items-center self-center pt-25">
                <div class="max-w-xl">
                    @if (app()->getLocale() == 'en')
                        <div
                            class="text-xl font-normal capitalize tracking-wide text-secondary font-poppins 2xl:text-2xl 2xl:tracking-wide">
                            About MK
                        </div>
                        <div class="w-10 h-1 mb-5 bg-secondary"></div>
                        <h2
                            class="mb-10 text-2xl font-bold leading-normal font-poppins 2xl:text-4xl 2xl:leading-normal text-primary">
                            What is construction management
                        </h2>
                        <div class="text-base text-justify mb-5 lg:text-lg text-paragraph font-poppins">
                            Imagine a magnificent development project, such as skyscrapers or toll roads.
                            Behind the splendor, there is a complex process that involves many people and various sources
                            Power.This is where the role of construction management, a discipline that ensures smooth and
                            the success of the project.
                        </div>
                        <div class="text-base text-justify lg:text-lg text-paragraph font-poppins">
                            Construction management is a complex and dynamic scientific discipline.Expertise is needed
                            and experience to manage various aspects of construction projects.With management
                            right, the construction project can run smoothly and produce quality buildings
                            tall.
                        </div>
                    @else
                        <div
                            class="text-xl font-normal capitalize tracking-wide text-secondary font-poppins 2xl:text-2xl 2xl:tracking-wide">
                            Tentang MK
                        </div>
                        <div class="w-10 h-1 mb-5 bg-secondary"></div>
                        <h2
                            class="mb-10 text-2xl font-bold leading-normal font-poppins 2xl:text-4xl 2xl:leading-normal text-primary">
                            Apa itu Manajemen Konstruksi
                        </h2>
                        <div class="text-base text-justify mb-5 lg:text-lg text-paragraph font-poppins">
                            Bayangkan sebuah proyek pembangunan yang megah, seperti gedung pencakar langit atau jalan tol.
                            Di balik kemegahan itu, ada proses kompleks yang melibatkan banyak orang dan berbagai sumber
                            daya. Di sinilah peran manajemen konstruksi, sebuah disiplin ilmu yang memastikan kelancaran dan
                            keberhasilan proyek tersebut.
                        </div>
                        <div class="text-base text-justify lg:text-lg text-paragraph font-poppins">
                            Manajemen konstruksi adalah sebuah disiplin ilmu yang kompleks dan dinamis. Diperlukan keahlian
                            dan pengalaman untuk mengelola berbagai aspek dalam proyek konstruksi. Dengan manajemen yang
                            tepat, proyek konstruksi dapat berjalan lancar dan menghasilkan bangunan yang berkualitas
                            tinggi.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    {{-- mobile --}}
    <section id="tentang"
        class="relative block lg:hidden bg-[url('../../public/img/general/service-konstruksi.webp')] bg-no-repeat bg-cover bg-blend-overlay bg-white/60 h-auto">
        <div class="px-6 py-10 md:py-32 md:px-20">
            @if (app()->getLocale() == 'en')
                <div
                    class="text-xl font-normal capitalize tracking-wide text-secondary font-poppins 2xl:text-2xl 2xl:tracking-wide">
                    About MK
                </div>
                <div class="w-10 h-1 mb-5 bg-secondary"></div>
                <h2
                    class="mb-10 text-2xl font-bold leading-normal font-poppins 2xl:text-4xl 2xl:leading-normal text-primary">
                    What is construction management
                </h2>
                <div class="text-base text-justify mb-5 lg:text-lg text-paragraph font-poppins">
                    Imagine a magnificent development project, such as skyscrapers or toll roads.
                    Behind the splendor, there is a complex process that involves many people and various sources
                    Power.This is where the role of construction management, a discipline that ensures smooth and
                    the success of the project.
                </div>
                <div class="text-base text-justify lg:text-lg text-paragraph font-poppins">
                    Construction management is a complex and dynamic scientific discipline.Expertise is needed
                    and experience to manage various aspects of construction projects.With management
                    right, the construction project can run smoothly and produce quality buildings
                    tall.
                </div>
            @else
                <div
                    class="text-xl font-normal capitalize tracking-wide text-secondary font-poppins 2xl:text-2xl 2xl:tracking-wide">
                    Tentang MK
                </div>
                <div class="w-10 h-1 mb-5 bg-secondary"></div>
                <h2
                    class="mb-10 text-2xl font-bold leading-normal font-poppins 2xl:text-4xl 2xl:leading-normal text-primary">
                    Apa itu Manajemen Konstruksi
                </h2>
                <div class="text-base text-justify mb-5 lg:text-lg text-paragraph font-poppins">
                    Bayangkan sebuah proyek pembangunan yang megah, seperti gedung pencakar langit atau jalan tol. Di balik
                    kemegahan itu, ada proses kompleks yang melibatkan banyak orang dan berbagai sumber daya. Di sinilah
                    peran manajemen konstruksi, sebuah disiplin ilmu yang memastikan kelancaran dan keberhasilan proyek
                    tersebut.
                </div>
                <div class="text-base text-justify lg:text-lg text-paragraph font-poppins">
                    Manajemen konstruksi adalah sebuah disiplin ilmu yang kompleks dan dinamis. Diperlukan keahlian dan
                    pengalaman untuk mengelola berbagai aspek dalam proyek konstruksi. Dengan manajemen yang tepat, proyek
                    konstruksi dapat berjalan lancar dan menghasilkan bangunan yang berkualitas tinggi.
                </div>
            @endif
        </div>
    </section>
    {{-- end tentang slf --}}

    {{-- section alasan --}}
    <section id="alasan"
        class="relative bg-[url('../../public/img/general/bg-alasan-konstruksi.webp')] bg-no-repeat bg-cover h-auto">
        <div class="container px-6 py-20 mx-auto lg:px-60 2xl:py-32 2xl:px-96">
            <div class="flex flex-col justify-center">
                @if (app()->getLocale() == 'en')
                    <div
                        class="mb-10 text-xl font-bold text-center uppercase md:text-left text-primary font-inter lg:text-2xl lg:leading-normal 2xl:text-4xl 2xl:leading-normal">
                        <span class="px-1 text-white bg-secondary">5 Reasons</span>
                        Why Construction Management is Important for
                        <span class="px-1 text-white bg-secondary">your business</span> or <span
                            class="px-1 text-white bg-secondary">property</span> ?
                    </div>
                    <ul class="pl-5 font-bold list-decimal text-paragraph font-poppins">
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Save the cost and time of careful planning
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Avoid mistakes and waste in the future.Efficient procurement, get
                                material and labor at the best price.
                            </p>
                        </li>
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Improve the quality and safety of strict monitoring
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Ensure construction work according to specifications and standards.Control
                                quality, conduct tests and inspections to ensure material and work quality.
                            </p>
                        </li>
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Reducing risk of identification and risk mitigation
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Identify potential risk and take steps to prevent it.Management
                                Effective contracts, ensure that all parties understand their rights and obligations.
                            </p>
                        </li>
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Increase client satisfaction clear communication
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Keep clients informed about project progress.Solution on time,
                                Complete the project according to the schedule and budget.
                            </p>
                        </li>
                        <li class="pl-2 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Improve business reputation to complete the project successfully
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Build trust and credibility with clients and partners.Maintain high standards,
                                Being known as a professional and trusted company.Increase asset value,
                                Increase your property value.
                            </p>
                        </li>
                    </ul>
                @else
                    <div
                        class="mb-10 text-xl font-bold text-center uppercase md:text-left text-primary font-inter lg:text-2xl lg:leading-normal 2xl:text-4xl 2xl:leading-normal">
                        <span class="px-1 text-white bg-secondary">5 Alasan</span>
                        Mengapa Manajemen Konstruksi penting untuk
                        <span class="px-1 text-white bg-secondary">bisnis</span> atau <span
                            class="px-1 text-white bg-secondary">properti anda</span> ?
                    </div>
                    <ul class="pl-5 font-bold list-decimal text-paragraph font-poppins">
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Menghemat Biaya dan Waktu Perencanaan yang matang
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Menghindari kesalahan dan pemborosan di kemudian hari. Pengadaan yang efisien, Mendapatkan
                                material dan tenaga kerja dengan harga terbaik.
                            </p>
                        </li>
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Meningkatkan Kualitas dan Keamanan Pemantauan yang ketat
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Memastikan pekerjaan konstruksi sesuai dengan spesifikasi dan standar. Pengendalian
                                kualitas, Melakukan tes dan inspeksi untuk memastikan kualitas material dan pekerjaan.
                            </p>
                        </li>
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Mengurangi RisikoIdentifikasi dan mitigasi risiko
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Mengidentifikasi potensi risiko dan mengambil langkah-langkah untuk mencegahnya. Manajemen
                                kontrak yang efektif, Memastikan semua pihak memahami hak dan kewajiban mereka.
                            </p>
                        </li>
                        <li class="pl-2 mb-5 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Meningkatkan Kepuasan Klien Komunikasi yang jelas
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Menjaga klien tetap terinformasi tentang kemajuan proyek. Penyelesaian tepat waktu,
                                Menyelesaikan proyek sesuai dengan jadwal dan anggaran.
                            </p>
                        </li>
                        <li class="pl-2 md:pl-10">
                            <h4 class="mb-4 text-xl italic capitalize">
                                Meningkatkan Reputasi Bisnis Menyelesaikan proyek dengan sukses
                            </h4>
                            <p class="font-normal leading-normal text-justify">
                                Membangun kepercayaan dan kredibilitas dengan klien dan mitra. Menjaga standar yang tinggi,
                                Menjadi dikenal sebagai perusahaan yang profesional dan terpercaya. Meningkatkan nilai aset,
                                Meningkatkan nilai properti Anda.
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
                        Requirements for submitting construction management
                    @else
                        Syarat Pengajuan Manajemen Kontruksi
                    @endif
                </h2>
            </div>

            <div class="flex flex-col gap-5 px-10 lg:px-32 lg:flex-row">
                <div class="flex flex-col w-full gap-5 lg:w-1/2">
                    <div class="w-full p-10 text-center rounded-lg shadow-2xl drop-shadow-2xl">
                        <h3 class="text-[#1E1E1E] font-semibold font-poppins text-2xl">
                            @if (app()->getLocale() == 'en')
                                Qualification Requirements:
                            @else
                                Syarat Kualifikasi:
                            @endif
                        </h3>
                    </div>
                    <div class="w-full h-full px-10 py-10 rounded-lg shadow-2xl md:px-20 drop-shadow-2xl">
                        <ul class="space-y-2 list-disc text-paragraph font-poppins">
                            @if (app()->getLocale() == 'en')
                                <li>
                                    Have a valid and registered business entity.
                                </li>
                                <li>
                                    Have experience in the field of construction management.
                                </li>
                                <li>
                                    Have a professional and experienced team.
                                </li>
                                <li>
                                    Have the required certificates and permits.
                                </li>
                                <li>
                                    Has a good reputation and a positive track record.
                                </li>
                            @else
                                <li>
                                    Memiliki badan usaha yang sah dan terdaftar.
                                </li>
                                <li>
                                    Memiliki pengalaman dalam bidang manajemen konstruksi.
                                </li>
                                <li>
                                    Memiliki tim yang profesional dan berpengalaman.
                                </li>
                                <li>
                                    Memiliki sertifikat dan izin yang diperlukan.
                                </li>
                                <li>
                                    Memiliki reputasi yang baik dan track record yang positif.
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-5 lg:w-1/2">
                    <div class="w-full p-10 text-center rounded-lg shadow-2xl drop-shadow-2xl">
                        <h3 class="text-[#1E1E1E] font-semibold font-poppins text-2xl">
                            @if (app()->getLocale() == 'en')
                                Technical Requirements:
                            @else
                                Syarat Teknis:
                            @endif
                        </h3>
                    </div>
                    <div class="w-full h-full px-10 py-10 shadow-2xl md:px-20 drop-shadow-2xl">
                        <ul class="space-y-2 list-disc text-paragraph font-poppins">
                            @if (app()->getLocale() == 'en')
                                <li>
                                    Has standard construction management methodology and procedures.
                                </li>
                                <li>
                                    Has an effective cost control system and time.
                                </li>
                                <li>
                                    Have a good communication and reporting system.
                                </li>
                                <li>
                                    Have the ability to solve problems and overcome risk.
                                </li>
                            @else
                                <li>
                                    Memiliki metodologi dan prosedur manajemen konstruksi yang baku.
                                </li>
                                <li>
                                    Memiliki sistem pengendalian biaya dan waktu yang efektif.
                                </li>
                                <li>
                                    Memiliki sistem komunikasi dan pelaporan yang baik.
                                </li>
                                <li>
                                    Memiliki kemampuan untuk menyelesaikan masalah dan mengatasi risiko.
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
                            Immediately consult your construction management now!
                        </div>
                        <div class="mb-5 font-semibold font-poppins">
                            Find the best way to adjust your construction now.Don't miss this opportunity!
                        </div>
                    @else
                        <div
                            class="mb-2 text-xl font-bold leading-normal uppercase lg:leading-normal lg:text-3xl text-secondary font-poppins">
                            Segera konsultasikan Manajemen Kontruksi Anda sekarang!
                        </div>
                        <div class="mb-5 font-semibold font-poppins">
                            Temukan cara terbaik untuk mengatur kontruksi Anda sekarang. Jangan lewatkan kesempatan ini!
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
        class="relative lg:min-h-[90vh] bg-white lg:bg-[url('../../public/img/general/bg-perolehan-konstruksi.webp')] bg-no-repeat bg-cover bg-center">

        <div
            class="relative h-full lg:max-w-screen-lg 2xl:max-w-screen-xl lg:min-h-[90vh] px-4 py-24 text-left lg:pl-20 2xl:py-32">
            <h2
                class="mb-4 text-xl font-extrabold leading-relaxed tracking-normal text-center lg:text-left font-poppins text-primary md:text-2xl md:leading-relaxed 2xl:pl-32 2xl:text-4xl 2xl:leading-relaxed">
                @if (app()->getLocale() == 'en')
                    Construction management process
                @else
                    Proses Perolehan Manajemen Kontruksi
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
                                <span class="capitalize">1. planning and preparation determine the scope
                                    project</span>
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
                                        Set the objectives, requirements, and project restrictions.
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
                                <span class="capitalize">2. Contractor selection receives and evaluates proposals</span>
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
                                        Receive proposals from prospective contractors and evaluate them based on criteria
                                        which has been set.
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
                                <span class="capitalize">3. the signing of the contract to make a contract</span>
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
                                        Prepare a contract containing all the requirements and agreement between the project
                                        owner
                                        and contractors.
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
                                <span class="capitalize">4. the contractor mobilization held an initial meeting</span>
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
                                        Conduct an initial meeting with a contractor to discuss work plans and schedules
                                        project.
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
                                <span class="capitalize">5. supervision and control conduct supervision</span>
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
                                        Monitor the progress of the project and ensure compliance with the contract.
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
                                <span class="capitalize">6. closure of project receipt projects</span>
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
                                        Conduct final inspection and receive projects from the contractor.
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
                                <span class="capitalize">1. perencanaan dan persiapan menentukan ruang lingkup
                                    proyek</span>
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
                                        Menetapkan tujuan, persyaratan, dan batasan proyek.
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
                                <span class="capitalize">2. Seleksi kontraktor menerima dan mengevaluasi proposal</span>
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
                                        Menerima proposal dari calon kontraktor dan mengevaluasinya berdasarkan kriteria
                                        yang telah ditetapkan.
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
                                <span class="capitalize">3. penandatanganan kontrak membuat kontrak</span>
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
                                        Menyusun kontrak yang berisi semua persyaratan dan kesepakatan antara pemilik proyek
                                        dan kontraktor.
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
                                <span class="capitalize">4. mobilisasi kontraktor melakukan rapat awal</span>
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
                                        Melakukan rapat awal dengan kontraktor untuk membahas rencana kerja dan jadwal
                                        proyek.
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
                                <span class="capitalize">5. pengawasan dan pengendalian melakukan pengawasan</span>
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
                                        Memantau kemajuan proyek dan memastikan kepatuhan terhadap kontrak.
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
                                <span class="capitalize">6. penutupan proyek penerimaan proyek</span>
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
                                        Melakukan inspeksi akhir dan menerima proyek dari kontraktor.
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
