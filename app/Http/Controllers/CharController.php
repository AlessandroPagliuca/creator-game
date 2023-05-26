<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharController extends Controller
{
    public function index(){
        $table_character = Character::all();

        return view('characters.index', compact('table_character'));
    }
}
