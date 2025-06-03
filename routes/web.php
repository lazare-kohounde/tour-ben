<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController;

// Route côté client

Route::get('/', function () {return view('client.pages.index');})->name('accueilClient');
Route::get('/site_touristique', function(){ return view('client.pages.site_touristique');})->name(name: 'site_touristique');
Route::get('/services', function () {return view('client.pages.services');})->name('services');
//Route::get('/evenements', function () {return view('client.pages.evenements');})->name('evenements');
Route::get('/destination', function () {return view('client.pages.destination');})->name('destination');
Route::get('/tour', function () {return view('client.pages.tours');})->name('tour');
Route::get('/booking', function () {return view('client.pages.booking');})->name('booking');
Route::get('/gallery', function () {return view('client.pages.gallery');})->name('gallery');
Route::get('/guide', function () {return view('client.pages.guides');})->name('guides');
Route::get('/testimonial', function () {return view('client.pages.testimonial');})->name('testimonial');
Route::get('/contact', function () {return view('client.pages.contact');})->name('contact');

Route::get('/login', function () {return view('client.pages.connexion');})->name('connexion');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



// admin route 

Route::get('/log-admin', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/log-admin/organisateur', [AdminController::class, 'adminOrganisateur'])->name('admin.organisateur');
//Route::get('/log-admin/evenement', [AdminController::class, 'adminEvenement'])->name('admin.evenement');
// Route::get('/log-admin/evenement', [EvenementController::class, 'index'])->name('evenements.index');
// Route::get('/log-admin/evenement', [EvenementController::class, 'index'])->name('evenements.update');


Route::get('/log-admin/evenement', [EvenementController::class, 'index'])->name('evenements.index');
Route::post('/log-admin/evenements', [EvenementController::class, 'store'])->name('evenements.store');
Route::put('/log-admin/evenements/{id}', [EvenementController::class, 'update'])->name('evenements.update');
Route::delete('/log-admin/evenements/{id}', [EvenementController::class, 'destroy'])->name('evenements.destroy');


Route::get('/log-admin/site-touristique', [AdminController::class, 'adminSite'])->name('admin.site');
Route::get('/log-admin/reservation', [AdminController::class, 'adminReservation'])->name('admin.reservation');
// Route::post('/log-admin/evenementt', [EvenementController::class, 'store'])->name('evenements.store');
