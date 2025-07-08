<!-- Main Navigation Menu -->
<header id="navbar" class="{{ $menu_position }} inset-x-0 top-0 z-60 transition-all duration-500 py-4 flex items-center [&.nav-sticky]:bg-white/90 [&.nav-sticky]:backdrop-blur-3xl [&.nav-sticky]:shadow-md dark:[&.nav-sticky]:bg-default-50/80">
    <div class="container">
        <div class="flex items-center justify-between gap-4">
            <div class="shrink">
                <!-- Navbar Brand Logo -->
                <a href="home.html">
                    <img src="assets-landing/images/logo-dark.png" alt="logo" class="h-10 flex dark:hidden">
                    <img src="assets-landing/images/logo-light.png" alt="logo" class="h-10 hidden dark:flex">
                </a>
            </div>

            <!-- Nevigation Menu -->
            <ul class="menu lg:flex items-center justify-center hidden relative mx-auto grow">
                @isset($menu_item1)
                <li class="menu-item text-default-800 mx-2 transition-all duration-300 hover:text-primary [&.active]:text-primary">
                    <a class="inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 rounded-full capitalize" href="#{{ $menu_item1 }}">{{ $menu_item1 }}</a>
                </li>
                @endisset

                <li class="menu-item text-default-800 mx-2 transition-all duration-300 hover:text-primary [&.active]:text-primary">
                    <a class="inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 rounded-full capitalize" href="#{{ $menu_item2 }}">{{ $menu_item2 }}</a>
                </li>

                @isset($menu_item3)
                <li class="menu-item text-default-800 mx-2 transition-all duration-300 hover:text-primary [&.active]:text-primary">
                    <a class="inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 rounded-full capitalize" href="#{{ $menu_item3 }}">{{ $menu_item3 }}</a>
                </li>
                @endisset

                @isset($menu_item4)
                <li class="menu-item text-default-800 mx-2 transition-all duration-300 hover:text-primary [&.active]:text-primary">
                    <a class="inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 rounded-full capitalize" href="#{{ $menu_item4 }}">{{ $menu_item4 }}</a>
                </li>
                @endisset

                @isset($menu_item5)
                <li class="menu-item text-default-800 mx-2 transition-all duration-300 hover:text-primary [&.active]:text-primary">
                    <a class="inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 rounded-full capitalize" href="#{{ $menu_item5 }}">{{ $menu_item5 }}</a>
                </li>
                @endisset

                @isset($menu_item6)
                <li class="menu-item text-default-800 mx-2 transition-all duration-300 hover:text-primary [&.active]:text-primary">
                    <a class="inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 rounded-full capitalize" href="#{{ $menu_item6 }}">{{ $menu_item6 }}</a>
                </li>
                @endisset

                @isset($menu_item7)
                <li class="menu-item text-default-800 mx-2 transition-all duration-300 hover:text-primary [&.active]:text-primary">
                    <a class="inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 rounded-full capitalize" href="#{{ $menu_item7 }}">{{ $menu_item7 }}</a>
                </li>
                @endisset

                @isset($menu_item8)
                <li class="menu-item text-default-800 mx-2 transition-all duration-300 hover:text-primary [&.active]:text-primary">
                    <a class="inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 rounded-full capitalize" href="#{{ $menu_item8 }}">{{ $menu_item8 }}</a>
                </li>
                @endisset
            </ul>

            @isset($btn_text)
            <div class="ms-auto shrink inline-flex gap-2">
                <a href="#" class="py-1.5 px-6 inline-flex items-center gap-2 rounded-full text-base text-white bg-primary hover:bg-primary-700 transition-all duration-500">
                    @isset($btn_icon)
                    <i data-lucide="{{ $btn_icon }}" class="h-4 w-4 fill-white/40"></i>
                    @endisset
                    <span class="hidden sm:block">{{ $btn_text }}</span>
                </a>
                <!-- Mobile Menu Toggle Button -->
                <button class="lg:hidden inline-block" data-hs-overlay="#mobile-menu">
                    <i data-lucide="menu" class="w-7 h-7 text-default-600 hover:text-default-900"></i>
                </button>
            </div>
            @endisset
        </div>
    </div>
</header>

<!-- Mobile Menu (Sidebar Menu) -->
<div id="mobile-menu" class="hs-overlay hs-overlay-open:translate-x-0 hidden -translate-x-full fixed top-0 bottom-0 left-0 transition-all transform h-screen max-w-[270px] w-full z-[61] border-r border-default-200 bg-white dark:bg-default-50" tabindex="-1">
    <div class="flex justify-center items-center border-b border-dashed border-default-200 h-16 transition-all duration-300">
        <a href="home.html">
            <img src="assets-landing/images/logo-dark.png" alt="logo" class="h-10 flex dark:hidden">
            <img src="assets-landing/images/logo-light.png" alt="logo" class="h-10 hidden dark:flex">
        </a>
    </div>
    <div class="h-[calc(100%-4rem)] overflow-y-auto">
        <nav class="hs-accordion-group p-4 w-full h-full flex flex-col flex-wrap">
            <ul class="space-y-1">
                @isset($menu_item1)
                <li class="text-sm font-medium text-default-900 rounded capitalize transition-all duration-300 hover:bg-default-100 hover:text-primary [&.active]:bg-default-100 [&.active]:text-primary">
                    <a class="block w-full py-2.5 px-4" href="#{{ $menu_item1 }}">{{ $menu_item1 }}</a>
                </li>
                @endisset

                @isset($menu_item2)
                <li class="text-sm font-medium text-default-900 rounded capitalize transition-all duration-300 hover:bg-default-100 hover:text-primary [&.active]:bg-default-100 [&.active]:text-primary">
                    <a class="block w-full py-2.5 px-4" href="#{{ $menu_item2 }}">{{ $menu_item2 }}</a>
                </li>
                @endisset

                @isset($menu_item3)
                <li class="text-sm font-medium text-default-900 rounded capitalize transition-all duration-300 hover:bg-default-100 hover:text-primary [&.active]:bg-default-100 [&.active]:text-primary">
                    <a class="block w-full py-2.5 px-4" href="#{{ $menu_item3 }}">{{ $menu_item3 }}</a>
                </li>
                @endisset

                @isset($menu_item4)
                <li class="text-sm font-medium text-default-900 rounded capitalize transition-all duration-300 hover:bg-default-100 hover:text-primary [&.active]:bg-default-100 [&.active]:text-primary">
                    <a class="block w-full py-2.5 px-4" href="#{{ $menu_item4 }}">{{ $menu_item4 }}</a>
                </li>
                @endisset

                @isset($menu_item5)
                <li class="text-sm font-medium text-default-900 rounded capitalize transition-all duration-300 hover:bg-default-100 hover:text-primary [&.active]:bg-default-100 [&.active]:text-primary">
                    <a class="block w-full py-2.5 px-4" href="#{{ $menu_item5 }}">{{ $menu_item5 }}</a>
                </li>
                @endisset

                @isset($menu_item6)
                <li class="text-sm font-medium text-default-900 rounded capitalize transition-all duration-300 hover:bg-default-100 hover:text-primary [&.active]:bg-default-100 [&.active]:text-primary">
                    <a class="block w-full py-2.5 px-4" href="#{{ $menu_item6 }}">{{ $menu_item6 }}</a>
                </li>
                @endisset

                @isset($menu_item7)
                <li class="text-sm font-medium text-default-900 rounded capitalize transition-all duration-300 hover:bg-default-100 hover:text-primary [&.active]:bg-default-100 [&.active]:text-primary">
                    <a class="block w-full py-2.5 px-4" href="#{{ $menu_item7 }}">{{ $menu_item7 }}</a>
                </li>
                @endisset

                @isset($menu_item8)
                <li class="text-sm font-medium text-default-900 rounded capitalize transition-all duration-300 hover:bg-default-100 hover:text-primary [&.active]:bg-default-100 [&.active]:text-primary">
                    <a class="block w-full py-2.5 px-4" href="#{{ $menu_item8 }}">{{ $menu_item8 }}</a>
                </li>
                @endisset
            </ul>
        </nav>
    </div>
</div>
