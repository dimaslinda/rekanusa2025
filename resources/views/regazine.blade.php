@extends('layouts.main')
@section('kepala')
    @php
        use Spatie\MediaLibrary\MediaCollections\Models\Media;
    @endphp
@endsection
@section('content')
    {{-- banner --}}
    <section id="banner"
        class="overflow-hidden relative mt-24 font-montserrat bg-[url('../../public/img/general/banner-portofolio.webp')] bg-no-repeat bg-cover bg-center">
        <div class="relative px-4 py-10 mx-auto max-w-screen-xl text-center lg:py-44">
            <div class="flex flex-col justify-center space-x-0 lg:flex-row">
                <div class="hidden relative w-full lg:block">
                    <div data-aos="fade-right" data-aos-offset="100" class="absolute max-w-md lg:right-10 lg:-top-10">
                        <img src="{{ $regazineLast->getFirstMediaUrl('regazine') }}" loading="lazy"
                            class="object-contain w-full h-full" alt="Regazine">
                    </div>
                </div>
                {{-- mobile --}}
                <div data-aos="fade-in" data-aos-offset="100"
                    class="flex relative justify-center items-center self-center mb-5 w-1/2 lg:mb-0 lg:hidden">
                    <div class="relative">
                        <img src="{{ $regazineLast->getFirstMediaUrl('regazine') }}" loading="lazy"
                            class="object-contain w-full h-full rounded-lg" alt="Regazine">
                    </div>
                </div>
                {{-- end mobile --}}
                <div data-aos="fade-left" data-aos-offset="100"
                    class="flex flex-col justify-center items-center self-center w-full lg:justify-start lg:items-start lg:self-start">
                    <h1
                        class="text-xl font-extrabold leading-normal text-center text-white uppercase lg:text-left md:text-4xl md:leading-normal lg:text-5xl lg:leading-normal 2xl:text-6xl 2xl:leading-normal font-montserrat">
                        Free Download
                    </h1>
                    <h2
                        class="text-xl font-extrabold tracking-normal leading-normal text-center text-white uppercase font-montserrat md:text-4xl md:leading-normal lg:text-5xl lg:leading-normal 2xl:text-6xl 2xl:leading-normal">
                        Regazine
                    </h2>
                    <p class="mb-5 font-extralight text-center text-white font-poppins lg:text-left">
                        Get Your dream home reference!
                    </p>
                    <div class="flex flex-col justify-center space-y-4 lg:justify-start sm:flex-row sm:space-y-0">
                        <a href="{{ $regazineLast->getFirstMediaUrl('regazinepdf') }}" download
                            class="justify-start items-center px-5 py-3 text-base font-bold text-center uppercase rounded-lg shadow-2xl drop-shadow-2xl transition-all md:inline-flex text-primary bg-tombol hover:bg-primary hover:text-tombol hover:scale-105 focus:ring-4 focus:ring-blue-300">
                            Download Regazine
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- end banner --}}

    {{-- section regazine --}}
    <section id="regazine" class="relative py-32">
        <div class="container mx-auto">
            <div data-aos="fade-down" data-aos-offset="100" class="flex flex-wrap gap-10 justify-center">
                @forelse ($regazine as $item)
                    @php
                        $media = Media::where('model_id', $item->id)->where('collection_name', 'regazine')->get();
                        $media2 = Media::where('model_id', $item->id)->where('collection_name', 'regazinepdf')->get();
                    @endphp
                    @foreach ($media as $m)
                        @foreach ($media2 as $m2)
                            <a href="{{ $m2->original_url }}"
                                class="transition-all delay-75 transform group hover:scale-110">
                                <div class="max-w-xs">
                                    <img src="{{ $m->original_url }}" class="object-contain w-full h-full rounded-xl"
                                        loading="lazy" alt="regazine">
                                </div>
                            </a>
                        @endforeach
                    @endforeach
                @empty
                    <div class="container justify-center p-6 mx-auto text-4xl text-center">
                        <h1>Regazine Tidak Ada</h1>
                    </div>
                @endforelse
            </div>
            {{-- pagination --}}
            <div class="container px-10 py-20 mx-auto lg:px-52 2xl:px-20">
                {{ $regazine->links('pagination::simple-tailwind') }}
            </div>
        </div>


    </section>
    {{-- end regazine --}}
@endsection
