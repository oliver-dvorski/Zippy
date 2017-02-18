@extends('layout')

@section('content')

    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Goat
                </h1>
                <h2 class="subtitle">
                    A thing by <a href="https://dvorski.tech" target="_blank">Oliver Dvorski</a>
                </h2>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="column is-half is-offset-one-quarter">
                <div class="box">
                    <form action="/upload" class="dropzone" id="that-zone">
                        <div class="dz-message needsclick">
                            <h2>Drop files here or click to upload.</h2>
                            <br>
                            <span class="note needsclick">
                                Max: 50Mb
                            </span>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>

                <div class="has-text-centered">
                    <a href="#" class="button is-primary is-large">
                        <span>Convert to zip</span>
                        <span class="icon is-small">
                            <i class="fa fa-file-archive-o"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

@stop
