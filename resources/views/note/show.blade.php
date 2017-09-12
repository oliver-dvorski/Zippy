@extends('layout')

@section('content')
    @include('partials.standardHeader')

    <section class="section home">
        <div class="container">
            <div class="column is-half is-offset-one-quarter">
                <div class="box">
                    <div class="content">
                        <p id="content">
                            {!! nl2br(e($note->content)) !!}
                        </p>
                    </div>
                </div>
                <div class="field has-addons has-flex-centered">
                    <div class="control">
                        <a @click.prevent="copyFromId('content')" class="button" title="Copy note to clipboard">
                            <span class="icon">
                                <i class="icon-clipboard"></i>
                            </span>
                            <span>Copy note to clipboard</span>
                        </a>
                    </div>
                    <div class="control">
                        <a @click.prevent="copy('{{ route('note.show', compact('note')) }}')" class="button" title="Copy this url to clipboard">
                            <span class="icon">
                                <i class="icon-clipboard"></i>
                            </span>
                            <span>Copy this url to clipboard</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
