<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('partials.favicon')
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ url('/css/app.css') }}">
        <title>{{ config('app.name') }}</title>

        <script>
            window.appUrl = <?php echo json_encode(env('APP_URL', 'http://localhost:8000')); ?>
        </script>

    </head>
    <body>

        <div class="page-content" id="app">
            <section class="hero is-primary">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">
                            <a href="{{ url('/') }}">Goat</a>
                        </h1>
                        <h2 class="subtitle">
                            A thing by <a href="https://dvorski.tech" target="_blank">Oliver Dvorski</a>
                        </h2>
                    </div>
                </div>
            </section>

            @yield('content')
        </div>

        <footer class="footer">
            <div class="container">
                <div class="content has-text-centered">
                    <p>
                        &copy; {{ date('Y') }} <a href="https://dvorski.tech" target="_blank">Oliver Dvorski</a>
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
