@extends('layout')

@section('content')

    <section class="section">
        <div class="container">
            <div class="column is-half is-offset-one-quarter">
                <div class="box">
                    <form action="/upload" class="dropzone" id="that-zone">
                        <div class="dz-message needsclick">
                            <h2>Drop files here or click to upload</h2>
                            <br>
                            <span class="note needsclick">
                                Max: 50Mb
                            </span>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>

                <div class="has-text-centered">
                    <a href="{{ url('/zip/' . Session::get('hash')) }}" class="button is-primary is-large">
                        <span>Zip up</span>
                        <span class="icon is-small">
                            <i class="fa fa-file-archive-o"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

@stop
