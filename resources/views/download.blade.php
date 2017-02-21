@extends('layout')

@section('content')
    @include('partials.standardHeader')
        
    <span style="display: none" id="fileUrl">{{ $url }}</span>
    <div class="container">
        <div class="column is-half is-offset-one-quarter">
            <div class="section has-text-centered">
                <h1 class="title">Your archive is ready!</h1>
                <canvas id="qrcode"></canvas>
                <br>
                <p>Direct link: <a href="{{ url($url) }}">{{ url($url) }}</a></p>
                <br>
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
