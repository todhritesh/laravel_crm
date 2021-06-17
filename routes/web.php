<?php

use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;

route :: get('/' ,[DetailController::class,"home"])->name('home');
route :: post('/' ,[DetailController::class,"store"])->name('store');
route :: get('/delete/{id}' ,[DetailController::class,"delete"])->name('delete');
