@extends('layout')

@section('content')
    @include('partials.standardHeader')

    <section class="section home">
        <div class="container">
            <div class="column is-4 is-offset-4">
                <h2 class="title">This note is password protected</h2>
                <form action="{{ route('note.checkPassword', compact('note')) }}" method="POST">
                    {{ csrf_field() }}
                    <div class="field has-addons">
                        <p class="control is-expanded">
                            <input type="password" name="password" class="input">
                        </p>
                        <p class="control">
                            <button class="button is-primary">OK</button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

@stop
