@extends('layout')

@section('content')
    @include('partials.standardHeader')

    <section class="section home">
        <div class="container">
            <div class="column is-half is-offset-one-quarter">
                <div class="box">
                    <form action="/upload" class="dropzone" id="that-zone">
                        <input type="hidden" name="filePath" id="filePath">
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

                    @component('components.uploadTrigger', ['label' => 'Zip up', 'icon' => 'zip'])@endcomponent
                </form>

                <label class="help">Note: you can upload folders using drag and drop on your desktop devices</label>

            </div>
        </div>
    </section>

@stop
