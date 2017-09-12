<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('partials.favicon')

        {{-- OpenGraph --}}
        <meta property="og:title" content="{{ config('app.name') }}">
        <meta property="og:description" content="Anonymous file sharing simplified">
        <meta property="og:image" content="{{ url('splash.jpg') }}">
        <meta property="og:url" content="{{ url('/') }}">
        <meta property="fb:app_id" content="{{ env('APP_ID') }}">

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <title>{{ config('app.name') }}</title>

        <meta name="theme-color" content="{{ isset($theme) ? $theme : '#4B83CD' }}">

        <script>
            window.appData = {
                url: <?php echo json_encode(env('APP_URL', 'http://localhost:8000')); ?>,
                csrf: <?php echo json_encode(csrf_token()); ?>
            }
        </script>

        @if (env('GA') !== null)
            @include('partials.googleAnalytics')
        @endif

    </head>
    <body>

        <div class="page-content" id="app">
            @yield('content')
        </div>

        <footer class="footer">
            <div class="container">
                <div class="content has-text-centered">
                    <p>
                        &copy; 2016 - {{ date('Y') }} Oliver Dvorski. <br>
                        Puzzled? Try the <a href="{{ url('/about') }}">About</a> section. <br>
                        Released under the <a href="https://opensource.org/licenses/mit-license.php" target="_blank">MIT</a> license
                    </p>
                    <p>
                        <a href="https://github.com/oliver-dvorski" target="_blank" class="icon is-medium">
                            <i class="icon-github"></i>
                        </a>

                        <a href="https://twitter.com/oliverdvorski" target="_blank" class="icon is-medium">
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="https://plus.google.com/+OliverDvorski" target="_blank" class="icon is-medium">
                            <i class="icon-gplus"></i>
                        </a>
                    </p>
                    <p>
                        Wanna buy the dev a cuppa coffee?
                    </p>
                    <p>
                        <a href="https://www.paypal.me/OliverDvorski" class="button" target="_blank">
                            <span class="icon is-small">
                                <i class="icon-paypal"></i>
                            </span>
                            <span>PayPal.Me</span>
                        </a>
                    </p>
                </div>
            </div>
        </footer>

        @yield('scripts')

        @if (env('SEO') !== null)
            @include('partials.seo')
        @endif

        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
