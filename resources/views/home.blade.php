@extends('layout')

@section('content')
    @component('partials.header')
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

                <form action="{{ url('/zip/' . Session::get('hash')) }}" method="POST">
                    {{ csrf_field() }}

                    <div class="control password-conrol is-grouped has-addons">
                        <input type="password" name="password" class="input is-large is-expanded" placeholder="Password">
                        
                        <div class="has-text-centered">
                            <button type="submit" class="button is-primary is-large">
                                <span>Zip up</span>
                                <span class="icon is-small">
                                    <i class="fa fa-file-archive-o"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>

@stop
