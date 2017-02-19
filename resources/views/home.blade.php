@extends('layout')

@section('content')
    @component('partials.header')
        @slot('theme')
            is-primary
        @endslot
        @slot('subtitle')
            A thing by <a href="https://dvorski.tech" target="_blank">Oliver Dvorski</a>
        @endslot
    @endcomponent
            
    <section class="section home">
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

                <form action="{{ url('/zip/' . Session::get('hash')) }}" method="POST" id="form">
                    {{ csrf_field() }}

                    <div class="control password-conrol is-grouped has-addons">
                        <input type="password" name="password" class="input is-large is-expanded" placeholder="Password">
                        
                        {{-- Firefox is a bit wee so we can't use damn buttons with icons --}}
                        <div class="button is-primary is-large" onclick="document.querySelector('#form').submit()">
                            <span>Zip up</span>
                            <span class="icon is-small">
                                <i class="fa fa-file-archive-o"></i>
                            </span>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>

@stop
