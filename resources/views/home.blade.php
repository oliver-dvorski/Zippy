@extends('layout')

@section('content')
    @include('partials.standardHeader')

    <section class="section home">
        <div class="container">
            <div class="column is-half is-offset-one-quarter">
                <div class="box">
                    <form action="/upload" class="dropzone" id="that-zone">
                        <div class="dz-message needsclick">
                            <h2>Drop files here or click to upload</h2>
                            <br>
                            <span class="note needsclick">
                                Max: 50Mb/file
                            </span>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>

                <form action="{{ url('/zip/' . Session::get('hash')) }}" method="POST" id="form">
                    {{ csrf_field() }}

                    <div class="field has-addons password-conrol">
                        <div class="control is-grouped is-expanded">
                            <input type="password" name="password" class="input is-large" placeholder="Password (optional)">
                        </div>
                            <div class="control">
                                <button class="button is-primary is-large" 
                                        :class="{ 'is-loading' : dropzoneProcessing }" 
                                        onclick="document.querySelector('#form').submit()" 
                                        title="Convert the uploaded files to a .zip archive"
                                        :disabled="dropzoneProcessing">
                                    <span>Zip up</span>
                                    <span class="icon is-small">
                                        <i class="zip-icon"></i>
                                    </span>
                                </button>
                            </div>
                    </div>
                </form>

            </div>
        </div>
    </section>

@stop
