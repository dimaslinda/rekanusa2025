@extends('layouts.main')
@section('content')
    {{-- banner --}}
    <section id="banner"
        class="relative mt-24 uppercase bg-[url('../../public/img/general/banner-profile.webp')] bg-no-repeat bg-cover bg-center">
        <div class="relative max-w-screen-xl px-4 py-10 mx-auto text-center lg:py-24">
            <h1
                class="mb-4 text-xl font-monserrat font-extrabold leading-relaxed tracking-normal text-center text-white md:text-4xl md:leading-relaxed lg:text-5xl lg:leading-relaxed 2xl:text-6xl 2xl:leading-relaxed">
                @if (app()->getLocale() == 'en')
                    company profile
                @else
                    profil perusahaan
                @endif
            </h1>
        </div>
    </section>
    {{-- end banner --}}

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
                            Company Profile <span class="font-extrabold text-white bg-secondary">PT. Kinarya <br> kompegriti
                                rekanusa</span>
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
                    <img src="{{ asset('img/general/person.webp') }}" class="w-full h-full object-contain" loading="lazy"
                        alt="profile rekanusa">
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

    {{-- visi misi --}}
    <section id="visimisi"
        class="relative overflow-hidden hidden lg:block bg-[url('../../public/img/general/bg-visi.webp')] bg-no-repeat bg-cover bg-center">
        <div class="absolute bottom-0 left-0">
            <img src="{{ asset('img/general/person-3.webp') }}" class="w-[55%] 2xl:w-[70%]" loading="lazy"
                alt="profile rekanusa">
        </div>
        <div class="container p-6 mx-auto">
            <div class="flex justify-end">
                <div class="max-w-lg lg:max-w-md xl:max-w-xl 2xl:max-w-3xl float-right">
                    <div class="flex flex-col justify-center py-10">
                        @if (app()->getLocale() == 'en')
                            <h2
                                class="mb-10 text-xl font-extrabold leading-relaxed tracking-normal underline uppercase font-inter text-primary md:text-2xl md:leading-relaxed 2xl:pl-52 2xl:text-4xl 2xl:leading-relaxed underline-offset-[20px] decoration-secondary">
                                vision and mission
                            </h2>
                            <h3 class="mb-5 font-bold capitalize text-justify font-poppins text-secondary 2xl:text-2xl">
                                vision
                            </h3>
                            <div class="mb-5 text-justify font-poppins text-paragraph 2xl:text-xl">
                                To be a company that provides fast, precise and competitive solutions for the community and
                                the nation through the works produced.
                            </div>

                            <h3 class="mb-5 font-bold capitalize text-justify font-poppins text-secondary 2xl:text-2xl">
                                Mission
                            </h3>
                            <div class="text-justify font-poppins text-paragraph 2xl:text-xl">
                                <ul class="pl-5 list-disc">
                                    <li class="mb-2">
                                        Always strive to be a learner in their field, and keep up with the changing times by
                                        opening and accepting all input, in order to maintain the quality of products and
                                        services in order to present the best products to customers.
                                    </li>
                                    <li class="mb-2">
                                        Committed to continuously innovating and developing knowledge, applying new
                                        technologies and generating creative ideas in providing high quality products and
                                        services and meeting customer needs well.
                                    </li>
                                    <li>
                                        Creating a good working environment that is able to support employees in developing
                                        their competencies and capacities so as to achieve company goals.
                                    </li>
                                </ul>
                            </div>
                        @else
                            <h2
                                class="mb-10 text-xl font-extrabold leading-relaxed tracking-normal underline uppercase font-inter text-primary md:text-2xl md:leading-relaxed 2xl:pl-52 2xl:text-4xl 2xl:leading-relaxed underline-offset-[20px] decoration-secondary">
                                visi dan misi
                            </h2>
                            <h3 class="mb-5 font-bold capitalize text-justify font-poppins text-secondary 2xl:text-2xl">
                                visi
                            </h3>
                            <div class="mb-5 text-justify font-poppins text-paragraph 2xl:text-xl">
                                Menjadi perusahaan yang memberikan solusi yang cepat, tepat dan kompetitif bagi masyarakat
                                dan bangsa melalui karya-karya yang dihasilkan.
                            </div>

                            <h3 class="mb-5 font-bold capitalize text-justify font-poppins text-secondary 2xl:text-2xl">
                                misi
                            </h3>
                            <div class="text-justify font-poppins text-paragraph 2xl:text-xl">
                                <ul class="pl-5 list-disc">
                                    <li class="mb-2">
                                        Selalu berupaya untuk menjadi pembelajar dalam bidangnya, serta mengikuti perubahan
                                        zaman dengan cara membuka dan menerima semua masukan, demi menjaga kualitas produk
                                        dan jasa agar dapat menyajikan produk terbaik kepada pelanggan
                                    </li>
                                    <li class="mb-2">
                                        Berkomitmen untuk terus berinovasi dan mengembangkan pengetahuan, menerapkan
                                        teknologi baru dan melahirkan gagasan kreatif dalam menyediakan produk dan jasa yang
                                        berkualitas tinggi serta memenuhi kebutuhan pelanggan dengan baik.
                                    </li>
                                    <li>
                                        Menciptakan lingkungan kerja yang baik yang mampu mendukung karyawan dalam
                                        mengembangkan kompetensi dan kapasitasnya sehingga tercapainya tujuan perusahaan.
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="visimisi" class="relative block lg:hidden">
        <div class="relative flex flex-col min-h-52">
            <div
                class="overflow-hidden bg-[url('../../public/img/general/bg-portofolio.webp')] bg-cover bg-no-repeat bg-center">
                <img src="{{ asset('img/general/person-3.webp') }}" class="w-full h-full object-contain" loading="lazy"
                    alt="profile rekanusa">
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="absolute -bottom-1" viewBox="0 0 1440 320">
                <path fill="#ffff" fill-opacity="1" d="M0,192L1440,0L1440,320L0,320Z"></path>
            </svg>
        </div>
        <div class="relative max-w-screen-xl px-4 bg-white">
            <h2
                class="mb-10 text-2xl font-extrabold leading-relaxed tracking-normal text-center uppercase sm:text-3xl sm:tracking-normal sm:leading-relaxed font-inter text-primary underline underline-offset-[10px] decoration-secondary">
                {{ __('VISI DAN MISI') }}
            </h2>
            <h3 class="px-6 mb-5 font-bold text-justify font-poppins text-secondary 2xl:pl-52 2xl:text-2xl">
                {{ __('Visi') }}
            </h3>
            <div class="px-6 mb-5 text-justify font-poppins text-paragraph 2xl:pl-52 2xl:text-xl">
                {{ __('Menjadi perusahaan yang memberikan solusi yang cepat, tepat dan kompetitif bagi masyarakat dan bangsa melalui karya-karya yang dihasilkan.') }}
            </div>

            <h3 class="px-6 mb-5 font-bold text-justify font-poppins text-secondary 2xl:pl-52 2xl:text-2xl">
                {{ __('Misi') }}
            </h3>
            <div class="px-6 mb-10 text-wrap font-poppins text-paragraph 2xl:pl-52 2xl:text-xl">
                <ul class="pl-5 list-disc">
                    <li class="mb-2">
                        {{ __('Selalu berupaya untuk menjadi pembelajar dalam bidangnya, serta mengikuti perubahan zaman dengan cara membuka dan menerima semua masukan, demi menjaga kualitas produk dan jasa agar dapat menyajikan produk terbaik kepada pelanggan') }}
                    </li>
                    <li class="mb-2">
                        {{ __('Berkomitmen untuk terus berinovasi dan mengembangkan pengetahuan, menerapkan teknologi baru dan melahirkan gagasan kreatif dalam menyediakan produk dan jasa yang berkualitas tinggi serta memenuhi kebutuhan pelanggan dengan baik.') }}
                    </li>
                    <li>
                        {{ __('Menciptakan lingkungan kerja yang baik yang mampu mendukung karyawan dalam mengembangkan kompetensi dan kapasitasnya sehingga tercapainya tujuan perusahaan.') }}
                    </li>
                </ul>
            </div>
        </div>
    </section>
    {{-- end visi misi --}}

    {{-- legal --}}
    <section id="legal" class="relative">
        <div class="container p-6 mx-auto">
            <h2 class="pt-10 text-2xl font-bold text-center uppercase text-primary md:text-4xl font-inter">
                @if (App::getLocale() == 'id')
                    legal
                @else
                    legality
                @endif
            </h2>
            <p class="my-5 text-sm text-center text-paragraph font-poppin md:text-base lg:px-24 2xl:text-xl">
                {{ __('Perizinan kami lengkap dan telah memenuhi semua persyaratan yang diperlukan.') }}
            </p>

        </div>
        <div class="flex flex-wrap justify-center w-full gap-5">
            <div class="max-w-sm 2xl:max-w-xs">
                <img loading="lazy" src="{{ asset('img/legal/1.webp') }}" class="object-cover w-full h-full"
                    alt="Legal">
            </div>
            <div class="max-w-sm 2xl:max-w-xs">
                <img loading="lazy" src="{{ asset('img/legal/2.webp') }}" class="object-cover w-full h-full"
                    alt="Legal">
            </div>
            <div class="max-w-sm 2xl:max-w-xs">
                <img loading="lazy" src="{{ asset('img/legal/3.webp') }}" class="object-cover w-full h-full"
                    alt="Legal">
            </div>
            <div class="max-w-sm 2xl:max-w-xs">
                <img loading="lazy" src="{{ asset('img/legal/4.webp') }}" class="object-cover w-full h-full"
                    alt="Legal">
            </div>
            <div class="max-w-sm 2xl:max-w-xs">
                <img loading="lazy" src="{{ asset('img/legal/5.webp') }}" class="object-cover w-full h-full"
                    alt="Legal">
            </div>
        </div>
    </section>
    {{-- end legal --}}

    {{-- section sertifikasi --}}
    <section id="sertifikasi" class="relative">
        <div class="container p-6 mx-auto">
            @if (App::getLocale() == 'id')
                <h2 class="pt-10 text-2xl font-bold text-center uppercase text-primary md:text-4xl font-inter">
                    sertifikasi
                </h2>
                <p class="my-5 text-sm text-center text-paragraph font-poppin md:text-base lg:px-24 2xl:text-xl">
                    Tim kami telah memiliki pengalaman dan sertifikasi yang dibutuhkan untuk menyelesaikan pekerjaan sesuai
                    dengan kebutuhan Anda.}
                </p>
            @else
                <h2 class="pt-10 text-2xl font-bold text-center uppercase text-primary md:text-4xl font-inter">
                    Certification
                </h2>
                <p class="my-5 text-sm text-center text-paragraph font-poppin md:text-base lg:px-24 2xl:text-xl">
                    Our team has the experience and certifications needed to get the job done according to your needs.
                </p>
            @endif

        </div>

        <div class="flex flex-wrap justify-center w-full gap-5 mb-10">
            <div class="max-w-xs">
                <img loading="lazy" src="{{ asset('img/certificate/1.webp') }}" class="object-cover w-full h-full"
                    alt="Legal">
            </div>
            <div class="max-w-xs">
                <img loading="lazy" src="{{ asset('img/certificate/2.webp') }}" class="object-cover w-full h-full"
                    alt="Legal">
            </div>
            <div class="max-w-xs">
                <img loading="lazy" src="{{ asset('img/certificate/3.webp') }}" class="object-cover w-full h-full"
                    alt="Legal">
            </div>

        </div>
        <div class="flex flex-wrap justify-center w-full gap-5 mb-10">
            <div class="max-w-xs">
                <img loading="lazy" src="{{ asset('img/certificate/4.webp') }}" class="object-cover w-full h-full"
                    alt="Legal">
            </div>
            <div class="max-w-xs">
                <img loading="lazy" src="{{ asset('img/certificate/6.webp') }}" class="object-cover w-full h-full"
                    alt="Legal">
            </div>
        </div>

        <div class="flex flex-wrap justify-center w-full gap-5 mb-10">
            <div class="max-w-xs">
                <img loading="lazy" src="{{ asset('img/certificate/7.webp') }}" class="object-cover w-full h-full"
                    alt="Legal">
            </div>
            <div class="max-w-xs">
                <img loading="lazy" src="{{ asset('img/certificate/8.webp') }}" class="object-cover w-full h-full"
                    alt="Legal">
            </div>
            <div class="max-w-xs">
                <img loading="lazy" src="{{ asset('img/certificate/9.webp') }}" class="object-cover w-full h-full"
                    alt="Legal">
            </div>
            <div class="max-w-xs">
                <img loading="lazy" src="{{ asset('img/certificate/10.webp') }}" class="object-cover w-full h-full"
                    alt="Legal">
            </div>
        </div>

        <div class="flex flex-wrap justify-center w-full gap-5 mb-10">
            <div class="max-w-xs">
                <img loading="lazy" src="{{ asset('img/certificate/11.webp') }}" class="object-cover w-full h-full"
                    alt="Legal">
            </div>
            <div class="max-w-xs">
                <img loading="lazy" src="{{ asset('img/certificate/12.webp') }}" class="object-cover w-full h-full"
                    alt="Legal">
            </div>
        </div>


    </section>
    {{-- end sertifikasi --}}
@endsection
