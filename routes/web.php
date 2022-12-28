<?php

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\EmploiController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\CategoryComponent;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',  function(){
    return view('index');
});


Route::get('/home/Emploi', [HomeController::class, 'index'])->name('home.job');
Route::get('/store/index', [HomeController::class, 'store_job'])->name('store.job');
Route::get('/locale/job', [HomeController::class, 'filterJoblocale'])->name('job.locale');
Route::get('/international/job', [HomeController::class, 'filter_job_internationale'])->name('job.internationale');
Route::get('/job/{id}', [HomeController::class, 'show'])->name('job.category');
Route::get('/detail/job/{slug}', [HomeController::class, 'detailJob'])->name('detail.job');
Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard');
Route::get('/category/add', [EmploiController::class, 'create'])->name('job.add');
Route::post('/job/post', [EmploiController::class, 'store'])->name('job.store');
Route::get('/category/index-vieuwIndex2FactorHash', CategoryComponent::class)->name('category.index');

