<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dump(Project::query()->get()->toArray());

    return view('welcome');
});
