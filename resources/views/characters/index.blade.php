@extends('layouts.app')

@section('mainContent')
<h1 class=" text-center">Characters Cads</h1>
<div class="container">
    <div class="row">
        <div class="card col-4">
            <div class="card-body">
                <p class="fs-4 card-title">Card title</p>
                <p class="fs-5 card-subtitle mb-2 text-muted">name: </p>
                <p class="card-text"> lv.</p>
                <p class="card-text">race: </p>
                <p class="card-text">lifepoint: </p>
                <p class="card-text"> <i class="fa-solid fa-dumbbell"></i></p>
                <p class="card-text"> <i class="fa-solid fa-person-running-fast"></i></p>

            </div>
        </div>
    </div>

    <a class="text-center" href="{{ route('home') }}">Back to home</a>
</div>




@endsection
