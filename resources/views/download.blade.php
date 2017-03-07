@extends('layout')

@section('content')
    @include('partials.standardHeader')

    <div class="container">
        <div class="section has-text-centered">
            <h1 class="title is-2">Your archive is ready!</h1>
            <p>
                <qr url="{{ url($fileUrl) }}"></qr>
            </p>
            <p class="control has-addons has-text-centered has-flex-centered">
                <input type="text" disabled class="input is-large has-addons" value="{{ url($fileUrl) }}">
                <a @click.prevent="copy('{{ url($fileUrl) }}')" class="button is-large" title="Copy to clipboard">
                    <span class="icon">
                        <i class="clipboard-icon"></i>
                    </span>
                </a>
            </p>
            <br>
            <a href="{{ url('/' . $fileUrl . '/download') }}" class="button is-medium is-primary"
                @if ($hasPassword)
                    @click.prevent="showPasswordModal = true"
                @endif
                title="Download archive" 
            >
                <span class="icon is-small">
                    <span class="download-icon"></span>
                </span>
                <span>Download</span>
            </a>

            <a href="{{ url('/') }}" class="button is-medium" title="Upload new files to a new archive">
                <span class="icon is-small">
                    <span class="upload-icon"></span>
                </span>
                <span>Upload</span>
            </a>
        </div>
    </div>

    <notification v-if="showClipboardNotification" @close="showClipboardNotification = false" type="success">
        URL copied to clipboard
    </notification>
    
    @if ($hasPassword)
        <password-modal v-show="showPasswordModal" download-route="{{ url($fileUrl) }}" @close="showPasswordModal = false"></password-modal>
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
