@extends('layouts.app')

@section('mainContent')
<h1 class=" text-center">Characters Cads</h1>
<div class="container">
    <div class="row">
        @foreach ($table_character as $character)
           <div class="card col-4">
            <div class="card-body">
                <p class="fs-4 card-title">{{$character->name}}</p>
                <p class="card-text">{{$character->level}} lv.</p>
                <p class="card-text">race: {{$character->race}}</p>
                <p class="card-text">lifepoint: {{$character->lifepoint}}</p>
                <p class="card-text">{{$character->strenght}} <i class="fa-solid fa-dumbbell"></i></p>
                <p class="card-text">{{$character->agility}} <i class="fa-solid fa-person-running-fast"></i></p>
                <p class="card-text">weapon: {{$character->main_weapon}}</p>

            </div>
        </div>
        @endforeach

    </div>

    <a class="text-center" href="{{ route('home') }}">Back to home</a>
</div>




@endsection
