<section class="hero {{ $theme }}">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-mobile">
                <div class="column is-3 has-text-right">
                    <a href="{{ url('/') }}"><img src="logo-w.svg" alt="logo" id="logo"></a>
                </div>
                <div class="column">
                    <h1 class="title">
                        <a href="{{ url('/') }}">
                            {{ $title = config('app.name') }}
                        </a>
                    </h1>
                    <h2 class="subtitle">
                        {{ $subtitle }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>