<?php

use App\Models\Album;
use App\Models\Singer;
use App\Models\Song;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $songs = Song::with('singers')->get();
    return view('home', compact('songs'));
});

Route::get('/songs/{id}', function ($songId) {
    $song = Song::find($songId);
    return view('song', compact('song'));
});

Route::get('/singers/{id}', function ($singerID) {
    $singer = Singer::find($singerID);
    return view('singer', compact('singer'));
});

Route::get('/albums/{id}', function ($albumID) {
    $album = Album::find($albumID);
    return view('album', compact('album'));
});

Route::fallback(function () {
    return "404";
});
