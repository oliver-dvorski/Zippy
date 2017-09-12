@extends('layout')

@section('content')
    @include('partials.standardHeader')

    <section class="section home">
        <div class="container">
            <div class="column is-half is-offset-one-quarter">
                <div class="tabs">
                    <ul>
                        <li>
                            <a href="{{ url('/') }}">
                                <span class="icon is-small"><i class="icon-doc"></i></span>
                                <span>Upload files</span>
                            </a>
                        </li>
                        <li class="is-active">
                            <a>
                                <span class="icon is-small"><i class="icon-doc-text"></i></span>
                                <span>Transfer text note</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <form action="{{ route('note.store') }}" id="form" method="POST">
                    {{ csrf_field() }}
                    @if ($errors->has('note'))
                        <label class="help is-danger">{{ $errors->first('note') }}</label>
                    @endif
                    <textarea placeholder="Note..." name="note" rows="8" class="textarea box"></textarea>
                    @component('components.uploadTrigger', ['label' => 'Share', 'icon' => 'export'])@endcomponent
                </form>
            </div>
        </div>
    </section>

@stop
