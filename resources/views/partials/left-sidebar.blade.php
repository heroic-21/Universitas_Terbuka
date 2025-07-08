<div class="leftbar-tab min-w-[260px] z-[99] duration-300 print:hidden">
    <div class="flex w-[60px] bg-iconbar dark:bg-slate-800 py-4 items-center fixed top-0 z-[99]
      rounded-[100px] m-4 flex-col h-[calc(100%-30px)]">
        <a href="index.html" class="block text-center logo">
            <span>
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm
            h-8">
            </span>
        </a>

        <div class="icon-body max-h-full w-full overflow-hidden">
            <div class="relative h-full">
            </div>
        </div>
        <div class="flex flex-col items-center mt-auto bg-iconbar dark:bg-slate-800 shrink-0">
            <a href="">
                <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" alt="" class="rounded-full w-8 h-8">
            </a>
        </div>
    </div>
    <div
        class="main-menu-inner h-full w-[200px] my-4  fixed top-0 z-[99] left-[calc(60px+16px)] rtl:right-[calc(60px+16px)] rtl:left-0 rounded-lg transition delay-150 duration-300 ease-in-out">
        <div class="main-menu-inner-logo">
            <div class="flex items-center">
                <a href="index.html" class="leading-[60px]">
                    <img src="{{ asset('assets/images/logo-2.png') }}" alt=""
                        class="inline-block dark:hidden h-[15px] ltr:ml-4 rtl:ml-0 rtl:mr-4">
                    <img src="{{ asset('assets/images/logo.png') }}" alt=""
                        class=" hidden dark:inline-block h-[15px] ltr:ml-4 rtl:ml-0 rtl:mr-4">
                </a>
                <div class="ltr:mr-2 ltr:lg:mr-4 rtl:mr-0 rtl:ml-2 rtl:lg:mr-0 rtl:lg:ml-4 ml-auto block xl:hidden">
                    <button id="toggle-menu-hide-2" class="button-menu-mobile-2 flex rounded-full md:mr-0 relative">
                        <i class="ti ti-chevrons-left top-icon text-3xl"></i>
                    </button>
                </div>
            </div>
            <div class="menu-body h-[calc(100vh-60px)] p-4" data-simplebar>
                <div class="title-box mb-3">
                    <h6 class="text-sm font-medium uppercase text-slate-400">Menu</h6>
                </div>
                <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                    <li class="nav-item relative block">
                        <a href="{{ route('mahasiswa.index') }}"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Data Mahasiswa
                        </a>
                    </li>
                    <li class="nav-item relative block">
                        <a href="{{ route('agama.index') }}"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Agama
                        </a>
                    </li>
                    <li class="nav-item relative block">
                        <a href="{{ route('pendidikan.index') }}"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Program Pendidikan
                        </a>
                    </li>
                    <li class="nav-item relative block">
                        <a href="{{ route('jurusan.index') }}"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Jurusan
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
