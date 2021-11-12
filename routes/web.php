<?php

use App\Http\Livewire\Productos\Createteclado;
use App\Http\Livewire\Productos\Deleteteclados;
use App\Http\Livewire\Productos\Indexteclado;
use App\Models\Teclado;
use Illuminate\Support\Facades\Route;



Route::get('/venta',Indexteclado::class)->name('productos');
Route::get('/venta/create',Createteclado::class)->name('crear');
Route::get('/venta/{producto}/delete',Deleteteclados::class)->name('delete');
