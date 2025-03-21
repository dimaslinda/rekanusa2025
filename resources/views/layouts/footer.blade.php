{{-- footer --}}
<section id="footer" class="mt-auto font-poppins">
    <footer class="bg-[#030f27] shadow antialiased">
        <a href="https://wa.me/6281380801113"
            class="fixed z-[100] bottom-20 right-5 hover:animate-bounce md:animatecss md:animatecss-fadeIn"
            target="_blank">
            <img src="{{ asset('img/general/wa.webp') }}" alt="Logo Whatsapp">
        </a>
        <div class="container p-4 mx-auto">
            <div class="w-full max-w-screen-xl p-4 mx-auto md:py-8">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <div class="flex justify-center mx-auto">
                        <div class="grid justify-between grid-cols-1 gap-6 sm:grid-cols-2 lg:flex lg:flex-row">
                            <div class="lg:max-w-[30%]">
                                <h2 class="mb-6 underline underline-offset-8">
                                    <img src="{{ asset('img/general/logo-putih.png') }}" class="w-3/4"
                                        alt="logo rekanusa">
                                </h2>
                                <ul class="text-gray-600 dark:text-gray-400">
                                    <li class="mb-4">
                                        <div class="text-white">
                                            {{ __('Hubungi Kami Untuk Mendapatkan SLF Gratis Konsultasi.') }}
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="lg:max-w-[30%]">
                                <h2 class="mb-6 text-sm font-semibold text-[#fdbe33] underline underline-offset-8">
                                    {{ __('Informasi Kontak') }}
                                </h2>
                                <ul class="text-gray-600 dark:text-gray-400">
                                    <li class="mb-2">
                                        <div class="text-white">
                                            <i class="mr-1 fa fa-map-marker-alt"></i> Jl. Meruyung Raya Jl. Tupai Raya
                                            PGA No.01, RT.01/RW.07, Meruyung, Kec. Limo, Kota Depok, Jawa Barat 16532
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="text-white"><i class="mr-1 fa fa-envelope"></i>
                                            egy.bagus@rekanusa.co.id</div>
                                    </li>
                                    <li>
                                        <div class="flex gap-2 text-white">
                                            <i class="fa fa-phone-alt"></i>
                                            <div class="flex flex-col">
                                                <div>
                                                    +62 813-8080-1113
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="lg:max-w-[30%]">
                                <h2 class="mb-6 text-sm font-semibold text-[#fdbe33] underline underline-offset-8">
                                    {{ __('Sosial Media') }}
                                </h2>
                                <ul
                                    class="flex flex-row gap-3 font-medium text-gray-600 dark:text-gray-400 lg:justify-between">
                                    <a href="https://www.facebook.com/PT-Kinarya-Kompegriti-Rekanusa-103244125241983"
                                        target="_blank"
                                        class="text-white group hover:text-[#030f27] transition-all transform ease-in-out delay-75 duration-75">
                                        <li
                                            class="border-2 rounded-full w-10 h-10 py-1.5 px-3 group-hover:bg-[#fdbe33] group-hover:border-[#030f27]">
                                            <i class="fab fa-facebook-f"></i>
                                        </li>
                                    </a>
                                    <a href="https://www.youtube.com/channel/UCANa1f9qaHiBLl99354fg1A" target="_blank"
                                        class="text-white group hover:text-[#030f27] transition-all transform ease-in-out delay-75 duration-75">
                                        <li
                                            class="border-2 rounded-full w-10 h-10 py-1.5 px-2 group-hover:bg-[#fdbe33] group-hover:border-[#030f27]">
                                            <i class="fab fa-youtube"></i>
                                        </li>
                                    </a>
                                    <a href="https://www.instagram.com/rekanusa_konsultan/" target="_blank"
                                        class="text-white group hover:text-[#030f27] transition-all transform ease-in-out delay-75 duration-75">
                                        <li
                                            class="border-2 rounded-full w-10 h-10 py-1.5 px-2.5 group-hover:bg-[#fdbe33] group-hover:border-[#030f27]">
                                            <i class="fab fa-instagram"></i>
                                        </li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-[#fdbe33] sm:mx-auto lg:my-8" />
                <span class="block text-sm text-[#fdbe33] sm:text-center"><span class="text-white">©
                        {{ date('Y') }}</span> <a href="https://rekanusa.co.id/"
                        class="transition-all duration-100 ease-in-out delay-75 transform hover:text-white hover:font-bold">PT.
                        Kinarya Kompegriti Rekanusa</a>. <span class="antialiased text-white">All Rights
                        Reserved.</span></span>
            </div>
        </div>
    </footer>
</section>
{{-- script --}}

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
<script>
    AOS.init();
</script>
@yield('kaki')
</body>

</html>
