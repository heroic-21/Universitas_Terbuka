<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Tailfox - Admin & Dashboard Template</title>
        <meta  name="viewport"  content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta  content="Tailwind Multipurpose Admin & Dashboard Template"  name="description"/>
        <meta content="" name="Mannatthemes" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico" />

        <!-- Css -->
        <!-- Main Css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/icons.css">
        <link rel="stylesheet" href="assets/css/tailwind.css">

    </head>
    
    <body data-layout-mode="light"  data-sidebar-size="default" data-theme-layout="vertical" class="bg-gray-100 dark:bg-gray-900 bg-[url('../images/bg-body.png')] dark:bg-[url('../images/bg-body-2.png')]">
    

        <div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
            <div class="w-full  m-auto bg-white dark:bg-slate-800/60 rounded shadow-lg ring-2 ring-slate-300/50 dark:ring-slate-700/50 lg:max-w-md">
                <div class="text-center p-6 bg-white rounded-t">
                    <a href="index.html"><img src="assets/landing/images/LOGOSALUT.png" alt="" class="w-auto h-14 mx-auto mb-2"></a>
                    <h3 class="font-semibold text-slate-800/60 text-xl mb-1">Login Dengan Akun Google Admin</h3>
                    <p class="text-xs text-slate-800/60">Sign in to continue to Admin</p>
                </div>

                <div>
                    <a href="{{ route('google.login') }}"
                    class="flex items-center justify-center w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-red-500 rounded hover:bg-red-600 focus:outline-none focus:bg-red-600">
                        <i class="fab fa-google mr-2"></i> Login dengan Google
                    </a>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPTS -->
        <script src="assets/libs/@popperjs/core/umd/popper.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/components.js"></script>

        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>