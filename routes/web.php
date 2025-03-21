<?php

use App\Http\Controllers\NamaControler;
use Illuminate\Support\Facades\Route;

Route::get('/', [NamaControler::class, 'index']);
Route::get('/Index', [NamaControler::class, 'index'])->name('Index');
Route:: get('/tambahData',[NamaControler::class, "create"]) ->name ("tambahData");
Route:: get('/editData',[NamaControler::class, "edit"]) ->name ("editData");
Route:: get('/destroyData',[NamaControler::class, "destroy"]) ->name ("destroyed");
Route:: get('/tampilData',[NamaControler::class, "show"]) ->name ("showData");