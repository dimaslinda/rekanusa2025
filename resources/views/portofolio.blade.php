@extends('layouts.main')
@section('kepala')
    {{-- swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @php
        use Spatie\MediaLibrary\MediaCollections\Models\Media;
    @endphp
@endsection
@section('content')
    {{-- banner --}}
    <section id="banner"
        class="relative hidden lg:block mt-24 uppercase bg-[url('../../public/img/general/banner-portofolio.webp')] bg-no-repeat bg-cover bg-center">
        <div class="container relative z-10 p-6 py-20 mx-auto sm:py-32">
            <div id="myBtnContainer" class="container mx-auto max-w-5xl text-white">
                <div class="flex gap-5 flex-wrap justify-center space">
                    @if ($kategori->count() > 0)
                        <button
                            class="px-10 cursor-pointer py-3 rounded-full border-2 btn active hover:bg-primary hover:font-bold hover:text-white hover:border-primary"
                            onclick="filterSelection('all')">
                            All Portofolio
                        </button>
                    @endif
                    @forelse ($kategori as $item)
                        <button
                            class="px-10 py-3 cursor-pointer rounded-full border-2 btn hover:bg-primary hover:font-bold hover:text-white hover:border-primary"
                            onclick="filterSelection('{{ $item->name }}')">
                            {{ $item->name }}
                        </button>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <section
        class="lg:hidden h-auto bg-[url('../../public/img/general/banner-portofolio.webp')] bg-cover bg-no-repeat bg-center mt-24">

        <div class="h-full">
            <div class="font-bold text-center text-white uppercase font-league">
                <div id="myBtnContainer" class="flex flex-wrap gap-6 justify-center items-center py-4 md:py-8">
                    @if ($kategori->count() > 0)
                        <button
                            class="px-5 py-1 rounded-full border-2 sm:px-10 sm:py-3 btn hover:bg-primary hover:font-bold hover:text-white hover:border-primary"
                            onclick="filterSelection('all')">
                            All Portofolio
                        </button>
                    @endif
                    @forelse ($kategori as $item)
                        <button
                            class="px-5 py-1 rounded-full border-2 sm:px-10 sm:py-3 btn hover:bg-primary hover:font-bold hover:text-white hover:border-primary"
                            onclick="filterSelection('{{ $item->name }}')">
                            {{ $item->name }}
                        </button>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    {{-- end banner --}}

    {{-- portofolio --}}
    <section class="min-h-[60vh]">
        <div class="container flex flex-col justify-center py-20 mx-auto">
            <div
                class="container grid grid-cols-1 gap-2 mx-auto md:p-6 sm:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 lg:gap-5">

                @forelse ($portofolio as $item)
                    <div data-modal-target="default-modal-{{ $item->id }}"
                        data-modal-toggle ="default-modal-{{ $item->id }}"
                        class="max-h-[500px] w-80 hover:rounded-lg hover:shadow-2xl hover:drop-shadow-2xl hover:scale-105 hover:cursor-pointer group transition-all ease-in-out duration-300 kolom {{ $item->kategoris->pluck('name')->implode(' ') }}">
                        <div class="h-72 bg-center bg-no-repeat bg-cover group-hover:rounded-t-lg"
                            style="background-image: url('{{ $item->getFirstMediaUrl('portofolio') }}')">
                        </div>
                        <div class="px-6 py-4">
                            <div class="flex flex-col gap-1">
                                <div class="text-xl font-bold font-inter line-clamp-2">
                                    {{ $item->judul }}
                                </div>
                                <div class="text-lg font-inter">
                                    {!! $item->alamat !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main modal -->
                    <div id="default-modal-{{ $item->id }}" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-6xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative p-10 bg-white rounded-lg shadow">
                                <button type="button"
                                    class="inline-flex cursor-pointer absolute justify-center top-2 right-2 items-center w-8 h-8 text-sm font-bold text-primary bg-transparent rounded-lg hover:bg-secondary hover:text-white ms-auto"
                                    data-modal-hide="default-modal-{{ $item->id }}">
                                    <svg class="h-2 w- sm:w-5 sm:h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <!-- Modal body -->
                                <div class="space-y-5 lg:space-y-0">
                                    <div id="mySwiper-{{ $item->id }}"
                                        style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                        class="swiper mySwiper2">
                                        <div class="swiper-wrapper">
                                            @php
                                                $collection = Media::all()
                                                    ->where('model_id', $item->id)
                                                    ->where('collection_name', 'another_portofolio')
                                                    ->take(6);
                                            @endphp
                                            @foreach ($collection as $thumb)
                                                <div class="swiper-slide">
                                                    <div class="max-h-[600px]">
                                                        <img src="{{ $thumb->original_url }}"
                                                            class="object-contain w-full h-full" alt="audit">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div
                                            class="hidden absolute left-5 top-1/2 z-10 justify-between -translate-y-1/2 sm:flex group">
                                            <div class="swiper-desain-prev cursor-pointer">
                                                <div
                                                    class="flex justify-center items-center self-center w-20 h-20 text-2xl rounded-full shadow-2xl opacity-50 drop-shadow-2xl bg-primary group-hover:opacity-100">
                                                    <div>
                                                        <svg class="w-6 h-6 text-white" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 8 14">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="hidden absolute right-5 top-1/2 z-10 justify-between -translate-y-1/2 sm:flex group">
                                            <div class="swiper-desain-next cursor-pointer">
                                                <div
                                                    class="flex justify-center items-center self-center w-20 h-20 text-2xl rounded-full shadow-2xl opacity-50 drop-shadow-2xl bg-primary group-hover:opacity-100">
                                                    <svg class="w-6 h-6 text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 8 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="mySwipers-{{ $item->id }}" thumbsSlider=""
                                        class="swiper mySwipers mt-5 max-w-[900px]">
                                        <div class="pb-5 swiper-wrapper">
                                            @foreach ($collection as $nav)
                                                <div class="swiper-slide">
                                                    <div class="h-20 sm:h-32 lg:h-40">
                                                        <img src="{{ $nav->original_url }}"
                                                            class="object-contain w-full h-full" alt="audit">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-xl font-bold uppercase md:text-3xl text-abu">
                                            {{ $item->judul }}
                                        </div>
                                        <div class="text-base uppercase md:text-xl text-abu">
                                            {!! $item->alamat !!}
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end main modal --}}
                @empty
                @endforelse

            </div>
            {{-- pagination --}}
            <div class="container px-10 py-20 mx-auto lg:px-52 2xl:px-20">
                {{ $portofolio->links('pagination::simple-tailwind') }}
            </div>
        </div>
    </section>
    {{-- end portofolio --}}

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
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                    alt="logo superindo">
                <img src="{{ asset('img/logo/olx.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                    alt="logo superindo">
                <img src="{{ asset('img/logo/shell.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy" alt="logo shell">
                <img src="{{ asset('img/logo/djp.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy" alt="logo djp">
                <img src="{{ asset('img/logo/property.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                    alt="logo telkom property">
                <img src="{{ asset('img/logo/Shoetown.webp') }}"
                    class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                    alt="logo Shoetown">
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
            </div>
        </div>
    </section>
    {{-- end mitra kami --}}
@endsection
@section('kaki')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        filterSelection("all")

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("kolom");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                removeClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) addClass(x[i], "show");
            }
        }

        function addClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function removeClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            })
        }
    </script>

    <script>
        var thisSwiper = [];
        $('.mySwipers').each(function(i) {
            var this_ID = $(this).attr('id');

            thisSwiper[i] = new Swiper('#' + this_ID, {
                // loop: true,
                spaceBetween: 10,
                slidesPerView: 3,
                freeMode: true,
                watchSlidesProgress: true,
            });

        });
        var thisSwiper2 = [];
        $('.mySwiper2').each(function(i) {
            var this_ID = $(this).attr('id');

            thisSwiper2[i] = new Swiper('#' + this_ID, {
                // loop: true,
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-desain-next",
                    prevEl: ".swiper-desain-prev",
                },
                autoplay: {
                    delay: 3000,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                },
                thumbs: {
                    swiper: thisSwiper[i],
                }
            })
        })
    </script>
@endsection
