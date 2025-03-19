@extends('layouts.main')
@section('content')
{{-- banner --}}
<section id="banner" class="relative mt-24 uppercase bg-[url('../../public/img/general/banner-profile.webp')] bg-no-repeat bg-cover bg-center">
    <div class="relative max-w-screen-xl px-4 py-10 mx-auto text-center lg:py-24">
        <h1
            class="mb-4 text-xl font-monserrat font-extrabold leading-relaxed tracking-normal text-center text-white md:text-4xl md:leading-relaxed lg:text-5xl lg:leading-relaxed 2xl:text-6xl 2xl:leading-relaxed">
            @if (app()->getLocale() == 'en')
                board of directors
            @else
                jajaran direksi
            @endif
        </h1>
    </div>
</section>
{{-- end banner --}}

{{-- section jajaran direksi --}}
<section id="egy" class="relative min-h-[70vh] hidden overflow-hidden lg:block bg-[url('../../public/img/general/bg-egy.webp')] bg-no-repeat bg-cover bg-center">
    <div class="container mx-auto h-full pt-25">
        <div class="flex justify-end items-center h-full">
            <div class="max-w-xl p-6">
                <div class="flex flex-col justify-center">
                    <h2 class="mb-2 text-xl font-extrabold leading-relaxed tracking-normal uppercase font-inter text-primary md:text-2xl md:leading-relaxed 2xl:text-4xl 2xl:leading-relaxed">
                        Muhammad Egy Bagus Putra
                    </h2>
                    @if (app()->getLocale() == 'en')
                    <h3 class="mb-10 text-justify capitalize font-poppins text-primary 2xl:text-2xl">
                        chief director
                    </h3>
                    <div class="mb-5 text-justify font-poppins text-paragraph 2xl:text-xl">
                        Indonesian Citizen, domiciled in Bogor, Indonesia. Experienced Bachelor Degree in Civil Engineering.
                    </div>
                    <div class="mb-5 text-justify font-poppins text-paragraph 2xl:text-xl">
                        Served as President Director of PT. Kinarya Kompegriti Rekanusa based on the Decree of the appointment of the Board of Directors No.002/SK-DIR/XI/2017 as well as part of the shareholders of PT. Kinarya Kompegriti Partners.
                    </div>
                    @else
                    <h3 class="mb-10 text-justify capitalize font-poppins text-primary 2xl:text-2xl">
                        direktur utama
                    </h3>
                    <div class="mb-5 text-justify font-poppins text-paragraph 2xl:text-xl">
                        Warga Negara Indonesia, berdomisili di Bogor, Indonesia. Berpengalaman sebagai Sarjana Teknik Sipil.
                    </div>
                    <div class="mb-5 text-justify font-poppins text-paragraph 2xl:text-xl">
                        Menjabat sebagai Direktur Utama PT. Kinarya Kompegriti Rekanusa berdasarkan Surat Keputusan Pengangkatan Direksi No.002/SK-DIR/XI/2017 sekaligus sebagai bagian dari pemegang saham PT. Kinarya Kompegriti Rekanusa.
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
{{-- mobile --}}
<section id="egy" class="relative block lg:hidden">
    <div class="relative h-[40vh] ez:h-[50vh] sm:h-[70vh] bg-[url('../../public/img/general/egy-mobile.webp')] bg-no-repeat bg-center bg-cover">
        <div class="absolute -bottom-10 ez3:-bottom-20 sm:-bottom-0 w-[70%] ez2:w-[55%] sm:w-[50%] left-1/2 -translate-x-1/2">
            <img src="{{ asset('img/general/egy.webp') }}" loading="lazy" class="object-cover mix-blend-normal" alt="profile rekanusa">
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="absolute -bottom-1" viewBox="0 0 1440 320">
            <path fill="#ffff" fill-opacity="1" d="M0,192L1440,0L1440,320L0,320Z"></path>
        </svg>
    </div>
    <div class="relative max-w-screen-xl px-4 pb-24 bg-white">
        <h2 data-aos="fade-right"
            class="mb-2 text-xl font-extrabold leading-relaxed tracking-normal uppercase font-inter text-primary md:text-2xl md:leading-relaxed 2xl:pl-52 2xl:text-4xl 2xl:leading-relaxed">
            Muhammad Egy Bagus Putra
        </h2>
        @if (App()->getLocale() == 'en')
            <h3 data-aos="fade-right" class="mb-5 text-justify capitalize font-poppins text-primary 2xl:pl-52 2xl:text-2xl">
                chief director
            </h3>
            <div data-aos="fade-right" class="mb-5 text-justify font-poppins text-paragraph 2xl:pl-52 2xl:text-xl">
                Indonesian Citizen, domiciled in Bogor, Indonesia. Experienced Bachelor Degree in Civil Engineering.
            </div>
            <div data-aos="fade-right" class="mb-5 text-justify font-poppins text-paragraph 2xl:pl-52 2xl:text-xl">
                Served as President Director of PT. Kinarya Kompegriti Rekanusa based on the Decree of the appointment of the Board of Directors No.002/SK-DIR/XI/2017 as well as part of the shareholders of PT. Kinarya Kompegriti Partners.
            </div>
        @else
            <h3 data-aos="fade-right" class="mb-5 text-justify capitalize font-poppins text-primary 2xl:pl-52 2xl:text-2xl">
                direktur Utama
            </h3>
            <div data-aos="fade-right" class="mb-5 text-justify font-poppins text-paragraph 2xl:pl-52 2xl:text-xl">
                Warga Negara Indonesia, berdomisili di Bogor, Indonesia. Berpengalaman sebagai Sarjana Teknik Sipil.
            </div>
            <div data-aos="fade-right" class="mb-5 text-justify font-poppins text-paragraph 2xl:pl-52 2xl:text-xl">
                Menjabat sebagai Direktur Utama PT. Kinarya Kompegriti Rekanusa berdasarkan Surat Keputusan Pengangkatan Direksi No.002/SK-DIR/XI/2017 sekaligus sebagai bagian dari pemegang saham PT. Kinarya Kompegriti Rekanusa.
            </div>
        @endif
    </div>

</section>
{{-- end mobile --}}
{{-- end section jajaran direksi --}}
@endsection
