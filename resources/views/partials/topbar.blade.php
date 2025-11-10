<div class="fixed ltr:left-0 ltr:right-4 rtl:right-0 rtl:left-4 print:hidden z-50">
    <nav id="topbar" class="topbar border-gray-200  relative ltr:ml-0 rtl:ml-0 ltr:lg:ml-0  rtl:lg:mr-0   ltr:xl:ml-[calc(260px+32px)]  rtl:xl:mr-[calc(260px+32px)] duration-300
     block ">
        <div class="mx-0 flex max-w-full flex-wrap items-center lg:mx-auto">
            <div class="ltr:mr-2 ltr:lg:mr-4 rtl:mr-0 rtl:ml-2 rtl:lg:mr-0 rtl:lg:ml-4 ml-4 xl:ml-0">
                <button id="toggle-menu-hide" class="button-menu-mobile flex rounded-full md:mr-0 relative">
                    <i class="ti ti-chevrons-left text-3xl  top-icon"></i>
                </button>
            </div>
            <div class="order-1 ltr:ml-auto rtl:ml-0 rtl:mr-auto flex items-center md:order-2">

                <div class="ltr:mr-2 ltr:lg:mr-4 rtl:mr-0 rtl:ml-2 rtl:lg:mr-0 rtl:lg:ml-4">
                    <button id="toggle-theme" class="flex rounded-full md:mr-0 relative">
                        <i class="ti ti-moon text-3xl top-icon"></i>
                    </button>
                </div>
                <div class="mr-2 lg:mr-0 dropdown relative">
                    <button type="button" class="dropdown-toggle flex items-center rounded-full text-sm
            focus:bg-none focus:ring-0 dark:focus:ring-0 md:mr-0" id="user-profile" aria-expanded="false"
                        data-dropdown-toggle="navUserdata">
                        <img class="h-8 w-8 rounded-full" src="{{ asset('assets/images/users/user-1.png') }}" alt="user photo" />
                        <span class="ltr:ml-2 rtl:ml-0 rtl:mr-2 hidden text-left xl:block">
                            <span class="block font-medium text-slate-600 dark:text-gray-400">UT Bagansiapiapi</span>
                            <span class="-mt-1 block text-xs text-slate-500 dark:text-gray-500">Admin</span>
                        </span>
                    </button>

                    <div class="dropdown-menu dropdown-menu-right z-50 my-1 hidden list-none
            divide-y divide-gray-100 rounded border-slate-700 md:border-white
            text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800" id="navUserdata">
                        <div class="py-3 px-4">
                            <span class="block text-sm font-medium text-gray-900 dark:text-white">SALUT</span>
                            <span class="block truncate text-sm font-normal text-gray-500
                dark:text-gray-400">Negeri Seribu Kubah</span>
                        </div>
                        <ul class="py-1" aria-labelledby="navUserdata">
                            <li>
                                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                    @csrf
                                    <button type="submit"
                                        class="w-full text-left block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50
                                        dark:text-gray-200 dark:hover:bg-gray-900/20 dark:hover:text-white">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
