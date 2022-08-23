<?php

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


use App\Http\Controllers\ViewsController;
Route::get('/', [ViewsController::class, 'index'])->name('index');
Route::get('/gioi-thieu', [ViewsController::class, 'Gioithieu'])->name('gioi-thieu');
Route::get('/tien-ich', [ViewsController::class, 'TienIch'])->name('tien-ich');
Route::get('/mat-bang', [ViewsController::class, 'MatBang'])->name('mat-bang');
Route::get('/can-ho-mau', [ViewsController::class, 'CanHoMau'])->name('can-ho-mau');


Route::get('/lien-he', [ViewsController::class, 'LienHe'])->name('lien-he');




use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;

Route::get('/tin-tuc', [NewsController::class, 'news'])->name('tin-tuc');
Route::get('/tin-tuc-chi-tiet/{id}', [NewsController::class, 'newspaper'])->name('tin-tuc-chi-tiet');
Route::get('/thu-vien', [NewsController::class, 'ThuVien'])->name('thu-vien');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'default'])->name('dashboard');
    Route::get('/login', [AdminController::class, 'index'])->name('login')->middleware(CheckLogged::class);
    Route::post('/custom-login', [AdminController::class, 'customLogin'])->name('login.custom');
    Route::get('/registration', [AdminController::class, 'registration'])->name('register-user')->middleware(CheckLogged::class);
    Route::post('/custom-registration', [AdminController::class, 'customRegistration'])->name('register.custom');
    Route::get('/signout', [AdminController::class, 'signOut'])->name('signout');

    Route::get('/listing', [NewsController::class, 'listing'])->name('listing')->middleware(AdminRole::class);
    Route::post('/delete', [NewsController::class, 'delete'])->name('delete')->middleware(AdminRole::class);
    Route::get('/input-new', [NewsController::class, 'new'])->name('input-new')->middleware(AdminRole::class);
    Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('edit')->middleware(AdminRole::class);
    Route::post('/update/{id}',[NewsController::class, 'update'])->name('update');

    Route::post('/storeNew', [NewsController::class, 'storeNew'])->name('storeNew');
    Route::post('/libStore', [NewsController::class, 'libStore'])->name('libStore');




});
