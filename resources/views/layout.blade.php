<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ url('/css/app.css') }}">
        <title>{{ config('app.name') }}</title>
    </head>
    <body>

        <div class="page-content">
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

                        <a href="https://facebook.com/oliver.dvorski" target="_blank" class="icon">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="https://twitter.com/Musmula3" target="_blank" class="icon">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="" target="_blank" class="icon">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </p>
                </div>
            </div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
        <script src="{{ url('/js/app.js') }}"></script>
    </body>
</html>
