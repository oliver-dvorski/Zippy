<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('partials.favicon')

        {{-- OpenGraph --}}
        <meta property="og:site_name" content="{{ config('app.name') }}">
        <meta property="og:description" content="Anonymous file sharing simplified">
        <meta property="og:image" content="{{ url('splash.jpg') }}">
        <meta property="og:url" content="{{ url('/') }}">
        <meta property="og:type" content="website"/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ url('/css/app.css') }}">
        <title>{{ config('app.name') }}</title>

        <meta name="theme-color" content="{{ isset($theme) ? $theme : '#42afe3' }}">

        <script>
            window.appData = {
                url: <?php echo json_encode(env('APP_URL', 'http://localhost:8000')); ?>,
                csrf: <?php echo json_encode(csrf_token()); ?>
            }
        </script>

    </head>
    <body>

        <div class="page-content" id="app">
            @yield('content')
        </div>

        <footer class="footer">
            <div class="container">
                <div class="content has-text-centered">
                    <p>
                        &copy; {{ date('Y') }} <a href="https://dvorski.tech" target="_blank">Oliver Dvorski</a>. Puzzled? Try the <a href="{{ url('/about') }}">About</a> section.
                    </p>
                    <p>
                        Released under the
                        <a href="https://opensource.org/licenses/mit-license.php" target="_blank">MIT</a>
                        license
                    </p>
                    <p>
                        <a href="https://github.com/Musmula" target="_blank" class="icon">
                            <i class="fa fa-github"></i>
                        </a>

                        <a href="https://www.facebook.com/oliver.dvorski" target="_blank" class="icon">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="https://twitter.com/Musmula3" target="_blank" class="icon">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="https://plus.google.com/+OliverDvorski" target="_blank" class="icon">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </p>
                </div>
            </div>
        </footer>

        @yield('scripts')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
        <script src="{{ url('/js/app.js') }}"></script>
    </body>
</html>
