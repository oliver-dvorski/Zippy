@extends('layout')

@section('content')
    @component('partials.header', ['theme' => 'is-dark'])
        @slot('subtitle')
            About section
        @endslot
    @endcomponent

    <div class="section">
        <div class="container">
            <div class="content column is-half is-offset-one-quarter">
                {!! $markdown !!}
            </div>
        </div>
    </div>

@stop
