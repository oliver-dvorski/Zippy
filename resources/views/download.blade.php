@extends('layout')

@section('content')
    @include('partials.standardHeader')

    <section class="download section">
        <main class="grid">
            <section class="info">
                <main>
                    <h2 class="title">Your archive is ready!</h2>
                    <h3 class="subtitle">It will be deleted {{ $timeRemaining }}</h3>
                </main>

                <section class="fields">
                    <p>Here's the link to this download page:</p>
                    <div class="field has-addons">
                        <div class="control is-expanded">
                            <input type="text" disabled class="input is-fullwidth is-large" value="{{ url($fileUrl) }}">
                        </div>
                        <div class="control">
                            <a @click.prevent="copy('{{ url($fileUrl) }}')" class="button is-large" title="Copy to clipboard">
                                <span class="icon">
                                    <i class="icon-clipboard"></i>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="field has-addons">
                        <div class="control is-expanded">
                            <a  href="{{ url('/' . $fileUrl . '/download') }}" class="is-fullwidth button is-medium is-primary"
                                @if ($hasPassword)
                                @click.prevent="showPasswordModal = true"
                                @endif
                                title="Download archive"
                            >
                                <span class="icon is-small">
                                    <span class="icon-download"></span>
                                </span>
                                <span class="is-hidden-mobile">Download</span>
                            </a>
                        </div>

                        <div class="control is-expanded">
                            <a href="{{ url('/') }}" class="control is-fullwidth button is-medium" title="Upload new files to a new archive">
                                <span class="icon is-small">
                                    <span class="icon-upload"></span>
                                </span>
                                <span class="is-hidden-mobile">New upload</span>
                            </a>
                        </div>
                    </div>
                </section>

            </section>
            <aside>
                <qr url="{{ url($fileUrl) }}"></qr>
            </aside>
        </main>
    </section>

    @include('partials.clipboardNotification')

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
