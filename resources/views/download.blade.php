@extends('layout')

@section('scripts')
    <script src="{{ url('/js/qrcode.js') }}"></script>
@stop

@section('content')

    <span style="display: none" id="fileUrl">{{ $url }}</span>

    <div class="container">
        <div class="column is-half is-offset-one-quarter">
            <div class="box has-text-centered">
                <div id="qrcode"></div>

                <a href="{{ url('/' . $url . '/download') }}" class="button is-medium is-primary">
                    <span class="icon is-small">
                        <span class="fa fa-download"></span>
                    </span>
                    <span>Download</span>
                </a>

                <a href="{{ url('/') }}" class="button is-medium">
                    <span class="icon is-small">
                        <span class="fa fa-upload"></span>
                    </span>
                    <span>Upload</span>
                </a>
            </div>
        </div>
    </div>

@stop
