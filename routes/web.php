<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UploadController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\Admin\DosensController;
use App\Http\Controllers\Admin\MatkulsController;
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

Route::get('/', function () {
    return view('welcome');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('embohs')->name('embohs/')->group(static function() {
            Route::get('/',                                             'EmbohsController@index')->name('index');
            Route::get('/create',                                       'EmbohsController@create')->name('create');
            Route::post('/',                                            'EmbohsController@store')->name('store');
            Route::get('/{emboh}/edit',                                 'EmbohsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'EmbohsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{emboh}',                                     'EmbohsController@update')->name('update');
            Route::delete('/{emboh}',                                   'EmbohsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('mahasiswas')->name('mahasiswas/')->group(static function() {
            Route::get('/',                                             'MahasiswasController@index')->name('index');
            Route::get('/create',                                       'MahasiswasController@create')->name('create');
            Route::post('/',                                            'MahasiswasController@store')->name('store');
            Route::get('/{mahasiswa}/edit',                             'MahasiswasController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'MahasiswasController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{mahasiswa}',                                 'MahasiswasController@update')->name('update');
            Route::delete('/{mahasiswa}',                               'MahasiswasController@destroy')->name('destroy');
            
        });
    });
});

Route::get('/upload', [UploadController::class,'upload']);
Route::post('/upload/proses', [UploadController::class,'proses_upload']);

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('events')->name('events/')->group(static function() {
            Route::get('/',                                             'EventsController@index')->name('index');
            Route::get('/create',                                       'EventsController@create')->name('create');
            Route::post('/',                                            'EventsController@store')->name('store');
            Route::get('/{event}/edit',                                 'EventsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'EventsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{event}',                                     'EventsController@update')->name('update');
            Route::delete('/{event}',                                   'EventsController@destroy')->name('destroy');
        });
    });
});
Route::get('/admin/fullcalender', function () {
    return view('fullcalender');
});
Route::get('fullcalender', [FullCalenderController::class, 'index']);
Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('dosens')->name('dosens/')->group(static function() {
            Route::get('/',                                             'DosensController@index')->name('index');
            Route::get('/create',                                       'DosensController@create')->name('create');
            Route::post('/',                                            'DosensController@store')->name('store');
            Route::get('/{dosen}/edit',                                 'DosensController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'DosensController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{dosen}',                                     'DosensController@update')->name('update');
            Route::delete('/{dosen}',                                   'DosensController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('matkuls')->name('matkuls/')->group(static function() {
            Route::get('/',                                             'MatkulsController@index')->name('index');
            Route::get('/create',                                       'MatkulsController@create')->name('create');
            Route::post('/',                                            'MatkulsController@store')->name('store');
            Route::get('/{matkul}/edit',                                'MatkulsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'MatkulsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{matkul}',                                    'MatkulsController@update')->name('update');
            Route::delete('/{matkul}',                                  'MatkulsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('pengajars')->name('pengajars/')->group(static function() {
            Route::get('/',                                             'PengajarController@index')->name('index');
            Route::get('/create',                                       'PengajarController@create')->name('create');
            Route::post('/',                                            'PengajarController@store')->name('store');
            Route::get('/{pengajar}/edit',                              'PengajarController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PengajarController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{pengajar}',                                  'PengajarController@update')->name('update');
            Route::delete('/{pengajar}',                                'PengajarController@destroy')->name('destroy');
        });
    });
});