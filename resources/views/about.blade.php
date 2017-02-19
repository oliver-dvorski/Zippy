@extends('layout')

@section('content')
    @component('partials.header')
        @slot('theme')
            is-dark
        @endslot
        @slot('subtitle')
            About section
        @endslot
    @endcomponent

    <Notification v-show="showNotifcation" type="info" :timer="false" @close="showNotifcation = false">
        This is a render of the current readme file from the <a href="https://github.com/Musmula/Zippy" target="_blank" class="link-invert">Github repo</a>.
    </Notification>

    <div class="section">
        <div class="container">
            <div class="content column is-half is-offset-one-quarter">
                {!! $markdown !!}
            </div>
        </div>
    </div>

@stop
