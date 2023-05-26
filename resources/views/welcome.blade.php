@extends('layouts.app')


@section('mainContent')
    <div class="container">
        <h1>Hello</h1>

        <a href="{{route('characters.index')}}">Go to cards list</a>
    </div>
@endsection
