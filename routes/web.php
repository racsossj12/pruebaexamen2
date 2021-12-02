<?php

use App\Http\Livewire\Productos\Createteclado;
use App\Http\Livewire\Productos\Deleteteclados;
use App\Http\Livewire\Productos\Indexteclado;
use App\Http\Livewire\Productos\Verteclado;
use App\Http\Livewire\Users\Crearusuario;
use App\Http\Livewire\Users\Indexusuario;
use App\Models\Teclado;
use Illuminate\Support\Facades\Route;



Route::get('/venta',Indexteclado::class)->name('productos');
Route::get('/venta/create',Createteclado::class)->name('crear');
Route::get('/venta/{producto}/delete',Deleteteclados::class)->name('delete');
Route::get('/venta/{producto}/see',Verteclado::class)->name('see');
Route::get('/usuario/crear',Crearusuario::class)->name('crearU');
Route::get('/usuario',Indexusuario::class)->name('usuarios');
