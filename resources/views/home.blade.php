@vite(['resources/js/app.js', 'resources/css/app.css'])

<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.title-meta-landing')
</head>

<body>

    @include('partials.navbar-landing', [
        'menu_position' => 'sticky',
        'menu_item1' => 'home',
        'menu_item2' => 'about',
        'menu_item3' => 'Services',
        'menu_item4' => 'portfolio',
        'menu_item5' => 'faq',
        'menu_item6' => 'blog',
        'menu_item7' => 'contact',
        'btn_text' => 'Download',
        'btn_icon' => 'download-cloud',
    ])

    <!-- Hero Section Start -->
    <section id="home" class="bg-cover bg-no-repeat" style="background-image: url('{{ asset('assets-landing/images/other/bg-lines-1.svg') }}')">
        <div class="grid xl:grid-cols-5 grid-cols-1 items-center relative">
            <div class="relative xl:col-span-2 p-6 xl:p-0 xl:-me-24 xl:mt-0 -mt-24 z-10 order-2 xl:order-none">
                <div class="max-w-xl mx-auto xl:ms-auto xl:me-0 rounded-xl bg-default-100 dark:bg-default-50">
                    <div class="p-6">
                        <!-- Swiper -->
                        <div class="swiper mySwiper2 relative h-[400px] xl:h-[260px]">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="flex-col flex items-start justify-end xl:h-full">
                                        <span class="text-base font-medium uppercase tracking-wider text-default-800">Digital agency</span>
                                        <h2 class="md:text-4xl/snug text-3xl font-semibold text-default-950 mt-6">Beyond a Design Agency</h2>
                                        <p class="md:w-3/4 text-base text-default-800 font-medium mt-5 mb-7">Their ability to understand our vision and translate it into a comprehensive marketing strategy is truly exceptional.</p>
                                        <a href="#" class="inline-flex items-center justify-center gap-2 border border-default-200 text-default-950 py-2 px-6 rounded-md hover:bg-primary hover:text-white transition-all duration-500">Get Solution
                                            <i data-lucide="arrow-up-right" class="h-6 w-6"></i>
                                        </a>
                                    </div>
                                </div><!-- swiper-slide End-->

                                <div class="swiper-slide">
                                    <div class="flex-col flex items-start justify-end xl:h-full">
                                        <span class="text-base font-medium uppercase tracking-wider text-default-800">Digital agency</span>
                                        <h2 class="md:text-4xl/snug text-3xl font-semibold text-default-950 mt-6">Beyond a Design Agency</h2>
                                        <p class="md:w-3/4 text-base text-default-800 font-medium mt-5 mb-7">Their ability to understand our vision and translate it into a comprehensive marketing strategy is truly exceptional.</p>
                                        <a href="#" class="inline-flex items-center justify-center gap-2 border border-default-200 text-default-950 py-2 px-6 rounded-md hover:bg-primary hover:text-white transition-all duration-500">Get Solution
                                            <i data-lucide="arrow-up-right" class="h-6 w-6"></i>
                                        </a>
                                    </div>
                                </div><!-- swiper-slide End-->

                                <div class="swiper-slide">
                                    <div class="flex-col flex items-start justify-end xl:h-full">
                                        <span class="text-base font-medium uppercase tracking-wider text-default-800">Digital agency</span>
                                        <h2 class="md:text-4xl/snug text-3xl font-semibold text-default-950 mt-6">Beyond a Design Agency</h2>
                                        <p class="md:w-3/4 text-base text-default-800 font-medium mt-5 mb-7">Their ability to understand our vision and translate it into a comprehensive marketing strategy is truly exceptional.</p>
                                        <a href="#" class="inline-flex items-center justify-center gap-2 border border-default-200 text-default-950 py-2 px-6 rounded-md hover:bg-primary hover:text-white transition-all duration-500">Get Solution
                                            <i data-lucide="arrow-up-right" class="h-6 w-6"></i>
                                        </a>
                                    </div>
                                </div><!-- swiper-slide End-->
                            </div>
                        </div><!-- Swiper End-->
                    </div>
                </div>
            </div><!-- col-span-2 End-->

            <div class="xl:col-span-3 order-1 xl:order-none">
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide relative">
                            <img src="assets-landing/images/landing/agency/img-1.jpg" class="h-full w-full" />
                            <div class="absolute inset-0 bg-black/25"></div>
                        </div><!-- swiper-slide End-->

                        <div class="swiper-slide relative">
                            <img src="assets-landing/images/landing/agency/img-2.jpg" class="h-full w-full" />
                            <div class="absolute inset-0 bg-black/25"></div>
                        </div><!-- swiper-slide End-->

                        <div class="swiper-slide relative">
                            <img src="assets-landing/images/landing/agency/img-3.jpg" class="h-full w-full" />
                            <div class="absolute inset-0 bg-black/25"></div>
                        </div><!-- swiper-slide End-->
                    </div>
                </div><!-- Swiper End-->
            </div><!-- col-span-3 End-->
        </div><!-- grid End-->
    </section>
    <!-- Hero end -->

    <!-- Start marq -->
    <section class="lg:pb-10">
        <div class="relative gap-28 m-auto flex overflow-hidden border border-default-200 py-6">
            <div class="marquee__group gap-28 flex items-center justify-around flex-shrink-0 min-w-full">
                <div class="py-2">
                    <h2 class="text-4xl font-medium text-default-950">UI-UX Experience</h2>
                </div>
                <div class="py-2">
                    <h2 class="text-4xl font-medium text-default-950">Web Development</h2>
                </div>
                <div class="py-2">
                    <h2 class="text-4xl font-medium text-default-950">Digital Marketing</h2>
                </div>
                <div class="py-2">
                    <h2 class="text-4xl font-medium text-default-950">Product Design</h2>
                </div>
                <div class="py-2">
                    <h2 class="text-4xl font-medium text-default-950">Mobile Solutions</h2>
                </div>
            </div><!-- marquee__group End-->

            <div aria-hidden="true" class="marquee__group gap-28 flex items-center justify-around flex-shrink-0 min-w-full">
                <div class="py-2">
                    <h2 class="text-4xl font-medium text-default-950">UI-UX Experience</h2>
                </div>
                <div class="py-2">
                    <h2 class="text-4xl font-medium text-default-950">Web Development</h2>
                </div>
                <div class="py-2">
                    <h2 class="text-4xl font-medium text-default-950">Digital Marketing</h2>
                </div>
                <div class="py-2">
                    <h2 class="text-4xl font-medium text-default-950">Product Design</h2>
                </div>
                <div class="py-2">
                    <h2 class="text-4xl font-medium text-default-950">Mobile Solutions</h2>
                </div>
            </div><!-- marquee__group End-->
        </div><!-- flex End -->
    </section>
    <!-- End marq Section -->

    <!-- Start about -->
    <section id="about" class="lg:py-20 py-10">
        <div class="container">
            <div class="flex items-end justify-between mb-10">
                <div class="max-w-2xl mx-auto text-center">
                    <span class="py-1 px-3 rounded-md text-xs font-medium uppercase tracking-wider border border-default-300 text-default-950">About</span>
                    <h2 class="text-4xl font-medium capitalize text-default-950 my-4">Our Team of Dedicated Digital Professionals.</h2>
                    <!-- <p class="text-base font-medium text-default-800">There are many variations of passages of passages of lorem lpsum available but the majority have suffered alteration in some form by inject rated humour or randomised this like.</p> -->
                </div>
            </div><!-- flex End-->

            <div class="grid md:grid-cols-2 grid-cols-1 gap-x-10 gap-y-10">
                <div class="grid sm:grid-cols-2 gap-6 items-center">
                    <div class="space-y-6">
                        <div>
                            <img src="assets-landing/images/landing/agency/img-3.jpg" alt="" class="max-w-full h-auto rounded-lg">
                        </div>
                        <div>
                            <img src="assets-landing/images/landing/agency/img-4.jpg" alt="" class="max-w-full h-auto rounded-lg">
                        </div>
                    </div>
                    <div>
                        <img src="assets-landing/images/landing/agency/img-5.jpg" alt="" class="max-w-full h-auto rounded-lg">
                    </div>
                </div><!-- grid End-->

                <div>
                    <h2 class="text-3xl font-medium text-default-950">The Best of Product Your Business</h2>
                    <div class="flex items-center justify-center gap-6 mt-10">
                        <div>
                            <i data-lucide="component" class="h-14 w-14 text-default-950"></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-medium text-default-950">High Standerd</h2>
                            <p class="text-base font-medium text-default-800 mt-4">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div><!-- flex End-->

                    <div class="flex items-center justify-center gap-6 my-10">
                        <div>
                            <i data-lucide="layers" class="h-14 w-14 text-default-950"></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-medium text-default-950">Ease of Communication</h2>
                            <p class="text-base font-medium text-default-800 mt-4">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div><!-- flex End-->

                    <a href="#" class="inline-flex items-center justify-center gap-2 border border-default-200 text-default-950 py-2 px-6 rounded-md hover:bg-primary hover:text-white transition-all duration-500">View All Our News
                        <i data-lucide="arrow-up-right" class="h-6 w-6"></i>
                    </a>
                </div><!-- col End-->
            </div><!-- grid End-->
        </div>
    </section>
    <!-- End about -->

    <!-- Start Services -->
    <section id="Services" class="lg:py-20 py-10">
        <div class="container">
            <div class="flex items-end justify-between mb-10">
                <div class="max-w-2xl mx-auto text-center">
                    <span class="py-1 px-3 rounded-md text-xs font-medium uppercase tracking-wider border border-default-300 text-default-950">Services</span>
                    <h2 class="text-4xl font-medium capitalize text-default-950 my-4">Our Services</h2>
                    <p class="text-base text-default-800 font-medium">Lorem ipsum dummy text are usually use print and website industy.</p>
                </div>
            </div><!-- flex End-->

            <div class="grid lg:grid-cols-3 grid-cols-1 items-center rounded-md overflow-hidden bg-default-100 dark:bg-default-50 divide-y lg:divide-y-0 lg:divide-x divide-default-200">
                <div class="group">
                    <div class="sm:p-10 p-8">
                        <span>
                            <i data-lucide="component" class="h-14 w-14 text-default-950"></i>
                        </span>
                        <h2 class="text-2xl text-default-950 font-medium mb-4 mt-8">Developer</h2>
                        <p class="text-base text-default-800 mb-6">Lorem ipsum dummy text are usually use in these section. Lorem ipsum dummy text are used in this design</p>
                        <a href="javascript:void(0);" class="text-default-950 text-lg font-medium">Read More
                            <i data-lucide="move-right" class="group-hover:opacity-100 opacity-0 w-6 h-6 inline-block transition-all duration-500 group-hover:translate-x-2 will-change-transform"></i>
                        </a>
                    </div>
                </div><!-- end col -->

                <div class="group">
                    <div class="sm:p-10 p-8">
                        <span>
                            <i data-lucide="layers" class="h-14 w-14 text-default-950"></i>
                        </span>
                        <h2 class="text-2xl text-default-950 font-medium mb-4 mt-8">Digital Product Design</h2>
                        <p class="text-base text-default-800 mb-6">Lorem ipsum dummy text are usually use in these section. Lorem ipsum dummy text are used in this design</p>
                        <a href="javascript:void(0);" class="text-default-950 text-lg font-medium">Read More
                            <i data-lucide="move-right" class="group-hover:opacity-100 opacity-0 w-6 h-6 inline-block transition-all duration-500 group-hover:translate-x-2 will-change-transform"></i>
                        </a>
                    </div>
                </div><!-- end col -->

                <div class="group">
                    <div class="sm:p-10 p-8">
                        <span>
                            <i data-lucide="layout-grid" class="h-14 w-14 text-default-950"></i>
                        </span>
                        <h2 class="text-2xl text-default-950 font-medium mb-4 mt-8">Branding & Design</h2>
                        <p class="text-base text-default-800 mb-6">Lorem ipsum dummy text are usually use in these section. Lorem ipsum dummy text are used in this design</p>
                        <a href="javascript:void(0);" class="text-default-950 text-lg font-medium">Read More
                            <i data-lucide="move-right" class="group-hover:opacity-100 opacity-0 w-6 h-6 inline-block transition-all duration-500 group-hover:translate-x-2 will-change-transform"></i>
                        </a>
                    </div>
                </div><!-- end col -->
            </div><!-- grid End-->
        </div><!-- container End-->
    </section>
    <!-- End Services -->

    <!-- Start Protfolio -->
    <section id="portfolio" class="pt-20">
        <div class="flex items-end justify-between mb-10">
            <div class="max-w-2xl mx-auto text-center">
                <span class="py-1 px-3 rounded-md text-xs font-medium uppercase tracking-wider border border-default-300 text-default-950">Our Portfolio</span>
                <h2 class="text-4xl font-medium capitalize text-default-950 my-4">Selected Projects.</h2>
            </div>
        </div><!-- flex End -->

        <div>
            <!--Start Swiper -->
            <div id="auth_swiper" class="swiper relative">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="relative group rounded-3xl overflow-hidden">
                            <img src="assets-landing/images/landing/agency/img-6.jpg" class="w-full h-[800px] rounded-3xl" alt="">
                            <div class="absolute inset-0 bg-black/60"></div>
                            <div class="absolute inset-x-0 top-1/2 opacity-0 group-hover:opacity-100 transition-all duration-700">
                                <div class="text-center">
                                    <h5 class="inline-block text-xl font-medium text-white bg-black py-1 px-3 mb-1">Web Design</h5> <br>
                                    <h2 class="inline-block text-2xl font-medium text-white bg-black py-1 px-3">Branding Process</h2>
                                </div>
                            </div>
                        </div>
                    </div><!-- swiper-slide End -->

                    <div class="swiper-slide">
                        <div class="relative group rounded-3xl overflow-hidden">
                            <img src="assets-landing/images/landing/agency/img-7.jpg" class="w-full h-[800px] rounded-3xl" alt="">
                            <div class="absolute inset-0 bg-black/60"></div>
                            <div class="absolute inset-x-0 top-1/2 opacity-0 group-hover:opacity-100 transition-all duration-700">
                                <div class="text-center">
                                    <h5 class="inline-block text-xl font-medium text-white bg-black py-1 px-3 mb-1">Web Design</h5> <br>
                                    <h2 class="inline-block text-2xl font-medium text-white bg-black py-1 px-3">Digital Platform</h2>
                                </div>
                            </div>
                        </div>
                    </div><!-- swiper-slide End -->

                    <div class="swiper-slide">
                        <div class="relative group rounded-3xl overflow-hidden">
                            <img src="assets-landing/images/landing/agency/img-8.jpg" class="w-full h-[800px] rounded-3xl" alt="">
                            <div class="absolute inset-0 bg-black/60"></div>
                            <div class="absolute inset-x-0 top-1/2 opacity-0 group-hover:opacity-100 transition-all duration-700">
                                <div class="text-center">
                                    <h5 class="inline-block text-xl font-medium text-white bg-black py-1 px-3 mb-1">Brand</h5> <br>
                                    <h2 class="inline-block text-2xl font-medium text-white bg-black py-1 px-3">Coder Studio</h2>
                                </div>
                            </div>
                        </div>
                    </div><!-- swiper-slide End -->

                    <div class="swiper-slide">
                        <div class="relative group rounded-3xl overflow-hidden">
                            <img src="assets-landing/images/landing/agency/img-9.jpg" class="w-full h-[800px] rounded-3xl" alt="">
                            <div class="absolute inset-0 bg-black/60"></div>
                            <div class="absolute inset-x-0 top-1/2 opacity-0 group-hover:opacity-100 transition-all duration-700">
                                <div class="text-center">
                                    <h5 class="inline-block text-xl font-medium text-white bg-black py-1 px-3 mb-1">Web Design</h5> <br>
                                    <h2 class="inline-block text-2xl font-medium text-white bg-black py-1 px-3">New Gadgets</h2>
                                </div>
                            </div>
                        </div>
                    </div><!-- swiper-slide End -->
                </div>
            </div><!--End Swiper -->
        </div>
    </section>
    <!-- End Protfolio -->

    <!-- Start Services -->
    <section id="serice" class="py-10">
        <div class="container">
            <div class="flex items-end justify-between mb-10">
                <div class="max-w-2xl mx-auto text-center">
                    <span class="py-1 px-3 rounded-md text-xs font-medium uppercase tracking-wider border border-default-300 text-default-950">Serices</span>
                    <p class="text-lg text-default-800 font-medium mt-5">We help you to go online and increase your conversion rate Better design for your digital products.</p>
                </div>
            </div><!-- flex End-->

            <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 items-center">
                <div class="relative overflow-hidden -z-10">
                    <img src="assets-landing/images/landing/agency/img-10.jpg" class="rounded-md h-full w-full" alt="">
                    <div class="absolute inset-0 rounded-md bg-black/40"></div>
                </div><!-- col End-->

                <div class="lg:-ms-20">
                    <div class="divide-y divide-default-200 bg-default-50 rounded-md shadow">
                        <div class="p-6 flex flex-wrap sm:flex-nowrap items-center gap-6">
                            <div>
                                <div class="h-12 w-12 rounded-md flex items-center justify-center transition-all duration-500 text-xl border border-default-200 text-default-950 hover:text-primary bg-white/5 hover:bg-white">01</div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-medium text-default-950">Graphic Design</h3>
                                <p class="text-base font-medium text-default-800 mt-3"> Donec venenatis vulputate lorem. Morbi nec metus. Phasellus blandit leo ut odio.</p>
                            </div>
                        </div><!-- flex End-->

                        <div class="p-6 flex flex-wrap sm:flex-nowrap items-center gap-6">
                            <div>
                                <div class="h-12 w-12 rounded-md flex items-center justify-center transition-all duration-500 text-xl border border-default-200 text-default-950 hover:text-primary bg-white/5 hover:bg-white">02</div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-medium text-default-950">Web Design</h3>
                                <p class="text-base font-medium text-default-800 mt-3"> Suspendisse enim turpis, dictum sed, iaculis a, condimentum nec, nisi. Praesent nec nisl a purus blandit viverra.</p>
                            </div>
                        </div><!-- flex End-->

                        <div class="p-6 flex flex-wrap sm:flex-nowrap items-center gap-6">
                            <div>
                                <div class="h-12 w-12 rounded-md flex items-center justify-center transition-all duration-500 text-xl border border-default-200 text-default-950 hover:text-primary bg-white/5 hover:bg-white">03</div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-medium text-default-950">Digital Marketing</h3>
                                <p class="text-base font-medium text-default-800 mt-3"> Vestibulum rutrum, mi nec elementum vehicula, eros quam gravida nisl, id fringilla neque ante vel mi.</p>
                            </div>
                        </div><!-- flex End-->
                    </div>
                </div><!-- col End-->
            </div><!-- grid End-->
        </div><!-- container End-->
    </section>
    <!-- End Services -->

    <!-- Start Faq -->
    <section id="faq" class="py-20">
        <div class="container">
            <div class="flex items-end justify-between mb-10">
                <div class="max-w-2xl mx-auto text-center">
                    <span class="py-1 px-3 rounded-md text-xs font-medium uppercase tracking-wider border border-default-300 text-default-950">Our FAQ</span>
                    <h2 class="text-3xl font-medium capitalize text-default-950 my-4">Watch the creative process behind our digital marketing journey!</h2>
                </div>
            </div><!-- flex End-->

            <div class="relative">
                <div class="hidden lg:block">
                    <div class="before:w-24 before:h-24 before:absolute before:-top-10 before:-start-10 before:-z-10 before:rotate-180 before:bg-[url('../images/landing/agency/dot.svg')] after:w-24 after:h-24 after:absolute after:-bottom-10 after:-end-10 after:-z-10 after:bg-[url('../images/landing/agency/dot.svg')]"></div>
                </div>

                <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 items-center">
                    <div class="lg:pb-20">
                        <div class="hs-accordion-group space-y-4">
                            <div class="hs-accordion border border-default-200 bg-default-50  rounded-lg overflow-hidden active" id="faq-1">
                                <button class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-default-950 transition-all" aria-controls="faq-accordion-1">
                                    <h5 class="text-base font-semibold flex">
                                        What is web design, and why is it important?
                                    </h5>
                                    <i data-lucide="chevron-up" class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                                </button>
                                <div id="faq-accordion-1" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-1">
                                    <div class="px-6 pb-4 pt-0">
                                        <p class="text-default-600 text-sm font-medium">Web design is the process of creating the visual and functional elements of a website.</p>
                                    </div>
                                </div>
                            </div><!-- col End-->

                            <div class="hs-accordion border border-default-200 bg-default-50  rounded-lg overflow-hidden" id="faq-2">
                                <button class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-default-950 transition-all" aria-controls="faq-2">
                                    <h5 class="text-base font-semibold flex">
                                        Are these projects real or concepts?
                                    </h5>
                                    <i data-lucide="chevron-up" class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                                </button>
                                <div id="faq-2" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-2">
                                    <div class="px-6 pb-4 pt-0">
                                        <p class="text-default-600 text-sm font-medium">The projects featured in my portfolio are a mix of real-world projects I've completed and conceptual designs that showcase my creative thinking and design skills.</p>
                                    </div>
                                </div>
                            </div><!-- col End-->

                            <div class="hs-accordion border border-default-200 bg-default-50  rounded-lg overflow-hidden" id="faq-3">
                                <button class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-default-950 transition-all" aria-controls="faq-3">
                                    <h5 class="text-base font-semibold flex">
                                        How often is the portfolio updated?
                                    </h5>
                                    <i data-lucide="chevron-up" class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                                </button>
                                <div id="faq-3" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-3">
                                    <div class="px-6 pb-4 pt-0">
                                        <p class="text-default-600 text-sm font-medium">I strive to keep my portfolio up-to-date with my latest work and projects. I regularly update it to reflect my evolving skills and design philosophy.</p>
                                    </div>
                                </div>
                            </div><!-- col End-->

                            <div class="hs-accordion border border-default-200 bg-default-50  rounded-lg overflow-hidden" id="faq-2">
                                <button class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-default-950 transition-all" aria-controls="faq-2">
                                    <h5 class="text-base font-semibold flex">
                                        Can I leave feedback or comments on the portfolio projects?
                                    </h5>
                                    <i data-lucide="chevron-up" class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                                </button>
                                <div id="faq-2" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-2">
                                    <div class="px-6 pb-4 pt-0">
                                        <p class="text-default-600 text-sm font-medium">At the moment, I don't have a comments section on the portfolio pages. However, I welcome feedback and inquiries.</p>
                                    </div>
                                </div>
                            </div><!-- col End-->
                        </div>
                    </div><!-- col End-->

                    <div>
                        <div class="-z-10 relative">
                            <img src="assets-landing/images/landing/agency/img-11.jpg" class="lg:h-72 h-full rounded-md" alt="">
                        </div>
                        <div class="-mt-28 xl:block hidden text-end">
                            <div class="inline-block bg-default-100 dark:bg-default-50 p-2 rounded-md ms-auto text-end">
                                <img src="assets-landing/images/landing/agency/img-12.jpg" class="ms-auto rounded" alt="">
                            </div>
                        </div>
                    </div><!-- col End-->
                </div><!-- grid End-->
            </div>
        </div><!-- container End-->
    </section>
    <!-- End faq -->

    <!-- Start Blog -->
    <section id="blog" class="lg:py-20 py-10">
        <div class="container">
            <div class="flex items-end justify-between mb-10">
                <div class="max-w-2xl mx-auto text-center">
                    <span class="py-1 px-3 rounded-md text-xs font-medium uppercase tracking-wider border border-default-300 text-default-950">Our Blog</span>
                    <h2 class="text-3xl font-medium capitalize text-default-950 my-4">Latest from our blog</h2>
                    <p class="text-base font-medium text-default-800">In this guide, we're going to share the essential SEO ranking factors you need to dominate search. By the end of this post, you'll have a well-optimized site</p>
                </div>
            </div><!-- flex End-->

            <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                <div class="rounded-lg border border-default-200 overflow-hidden">
                    <div class="p-6 group">
                        <div class="relative rounded-md overflow-hidden">
                            <img src="assets-landing/images/landing/agency/img-13.jpg" class="rounded-md" alt="">
                            <div class="absolute inset-0 bg-black/40"></div>
                        </div>

                        <div class="flex gap-5 mt-6">
                            <div>
                                <h2 class="text-3xl font-medium text-default-950">06</h2>
                                <p class="text-lg font-medium uppercase text-default-800">Sep</p>
                            </div>
                            <div>
                                <h2 class="text-2xl font-medium text-default-950">Brilliant minds.</h2>
                                <p class="text-base font-medium text-default-800 mt-3 mb-5">Lorem ipsum dolor sit amet, proin gravida nibh vel velit auctor aliquet. Aenean sollictudin, lorem quis bibendum auctor...</p>
                                <a href="javascript:void(0);" class="text-default-950 text-lg font-medium">Read More
                                    <i data-lucide="move-right" class="group-hover:opacity-100 opacity-0 w-6 h-6 inline-block transition-all duration-500 group-hover:translate-x-2 will-change-transform"></i>
                                </a>
                            </div>
                        </div><!-- flex End -->
                    </div>
                </div><!-- col End -->

                <div class="rounded-lg border border-default-200 overflow-hidden">
                    <div class="p-6 group">
                        <div class="relative rounded-md overflow-hidden">
                            <img src="assets-landing/images/landing/agency/img-14.jpg" class="rounded-md" alt="">
                            <div class="absolute inset-0 bg-black/40"></div>
                        </div>

                        <div class="flex gap-5 mt-6">
                            <div>
                                <h2 class="text-3xl font-medium text-default-950">05</h2>
                                <p class="text-lg font-medium uppercase text-default-800">Sep</p>
                            </div>
                            <div>
                                <h2 class="text-2xl font-medium text-default-950">Digital Marketing.</h2>
                                <p class="text-base font-medium text-default-800 mt-3 mb-5">Lorem ipsum dolor sit amet, proin gravida nibh vel velit auctor aliquet. Aenean sollictudin, lorem quis bibendum auctor...</p>
                                <a href="javascript:void(0);" class="text-default-950 text-lg font-medium">Read More
                                    <i data-lucide="move-right" class="group-hover:opacity-100 opacity-0 w-6 h-6 inline-block transition-all duration-500 group-hover:translate-x-2 will-change-transform"></i>
                                </a>
                            </div>
                        </div><!-- flex End -->
                    </div>
                </div><!-- col End -->

                <div class="rounded-lg border border-default-200 overflow-hidden">
                    <div class="p-6 group">
                        <div class="relative rounded-md overflow-hidden">
                            <img src="assets-landing/images/landing/agency/img-15.jpg" class="rounded-md" alt="">
                            <div class="absolute inset-0 bg-black/40"></div>
                        </div>

                        <div class="flex gap-5 mt-6">
                            <div>
                                <h2 class="text-3xl font-medium text-default-950">04</h2>
                                <p class="text-lg font-medium uppercase text-default-800">Sep</p>
                            </div>
                            <div>
                                <h2 class="text-2xl font-medium text-default-950">Good thinking.</h2>
                                <p class="text-base font-medium text-default-800 mt-3 mb-5">Lorem ipsum dolor sit amet, proin gravida nibh vel velit auctor aliquet. Aenean sollictudin, lorem quis bibendum auctor...</p>
                                <a href="javascript:void(0);" class="text-default-950 text-lg font-medium">Read More
                                    <i data-lucide="move-right" class="group-hover:opacity-100 opacity-0 w-6 h-6 inline-block transition-all duration-500 group-hover:translate-x-2 will-change-transform"></i>
                                </a>
                            </div>
                        </div><!-- flex End -->
                    </div>
                </div><!-- col End -->
            </div><!-- Grid End -->
        </div><!-- container End-->
    </section>
    <!-- End Blog -->

    <!-- Start Contact -->
    <section id="contact" class="lg:py-20 py-10">
        <div class="container">
            <div class="flex flex-wrap items-center justify-around gap-6">
                <div class="text-center">
                    <div class="h-20 w-20 rounded-md border border-default-200 text-default-950 bg-white/5 mx-auto flex items-center justify-center">
                        <i data-lucide="phone" class="h-10 w-10"></i>
                    </div>
                    <h4 class="text-xl font-medium text-default-950 mt-5">Call Me</h4>
                    <p class="text-base font-normal text-default-800 mt-1">+0088 66956 66</p>
                </div><!-- col End -->

                <div class="text-center">
                    <div class="h-20 w-20 rounded-md border border-default-200 text-default-950 bg-white/5 mx-auto flex items-center justify-center">
                        <i data-lucide="mail" class="h-10 w-10"></i>
                    </div>
                    <h4 class="text-xl font-medium text-default-950 mt-5">Email me</h4>
                    <p class="text-base font-normal text-default-800 mt-1">Dgnr@gmail.com</p>
                </div><!-- col End -->

                <div class="text-center">
                    <div class="h-20 w-20 rounded-md border border-default-200 text-default-950 bg-white/5 mx-auto flex items-center justify-center">
                        <i data-lucide="line-chart" class="h-10 w-10"></i>
                    </div>
                    <h4 class="text-xl font-medium text-default-950 mt-5">Flow Me</h4>
                    <p class="text-base font-normal text-default-800 mt-1">Facebook.com/drng</p>
                </div><!-- col End -->

                <div class="text-center">
                    <div class="h-20 w-20 rounded-md border border-default-200 text-default-950 bg-white/5 mx-auto flex items-center justify-center">
                        <i data-lucide="save" class="h-10 w-10"></i>
                    </div>
                    <h4 class="text-xl font-medium text-default-950 mt-5">My Work</h4>
                    <p class="text-base font-normal text-default-800 mt-1">Coderthemes.com</p>
                </div><!-- col End -->
            </div><!-- flex End -->
        </div><!-- container End -->
    </section>
    <!-- End Contact -->

    @include('partials.footer-landing')

    @include('partials.back-to-top')

    @include('partials.footer-scripts')

</body>

</html>
