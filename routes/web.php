<?php

use App\Livewire\{AddEditPeople, Home, Payments, Peoples, PeopleView, Rooms};
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('rooms', Rooms::class)->name('rooms');
Route::get('peoples', Peoples::class)->name('peoples');
Route::get('peoples-add', AddEditPeople::class)->name('add-people');
Route::get('peoples-edit/{id}', AddEditPeople::class)->name('edit-people');
Route::get('peoples-view/{id}', PeopleView::class)->name('view-people');
Route::get('payments', Payments::class)->name('payments');
