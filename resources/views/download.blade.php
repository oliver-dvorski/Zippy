@extends('layout')

@section('scripts')
    <script src="{{ url('/js/qrcode.js') }}"></script>
@stop

@section('content')
    @component('partials.header')
        @slot('theme')
            is-primary
        @endslot
        @slot('subtitle')
            A thing by <a href="https://dvorski.tech" target="_blank">Oliver Dvorski</a>
        @endslot
    @endcomponent
        
    <span style="display: none" id="fileUrl">{{ $url }}</span>
    <div class="container">
        <div class="column is-half is-offset-one-quarter">
            <div class="section has-text-centered">
                <div id="qrcode"></div>

                <a href="{{ url('/' . $url . '/download') }}" class="button is-medium is-primary"
                    @if ($hasPassword)
                        @click.prevent="showPasswordModal = true"
                    @endif
                >
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
    
    @if ($hasPassword)
        <password-modal v-show="showPasswordModal" @close="showPasswordModal = false"></password-modal>
    @endif

    @if (Session::get('error'))
        <notification @close="showNotifcation = false" v-show="showNotifcation" type="danger">
            {{ Session::get('error') }}
        </notification>
    @endif

    @if (Session::get('success'))
        <notification @close="showNotifcation = false" v-show="showNotifcation" type="success">
            {{ Session::get('success') }}
        </notification>
    @endif

@stop
