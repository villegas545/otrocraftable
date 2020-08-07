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

Route::get('/', function () {
    return view('welcome');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
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
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('tablas')->name('tablas/')->group(static function() {
            Route::get('/',                                             'TablaController@index')->name('index');
            Route::get('/create',                                       'TablaController@create')->name('create');
            Route::post('/',                                            'TablaController@store')->name('store');
            Route::get('/{tabla}/edit',                                 'TablaController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'TablaController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{tabla}',                                     'TablaController@update')->name('update');
            Route::delete('/{tabla}',                                   'TablaController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('productos')->name('productos/')->group(static function() {
            Route::get('/',                                             'ProductosController@index')->name('index');
            Route::get('/create',                                       'ProductosController@create')->name('create');
            Route::post('/',                                            'ProductosController@store')->name('store');
            Route::get('/{producto}/edit',                              'ProductosController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ProductosController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{producto}',                                  'ProductosController@update')->name('update');
            Route::delete('/{producto}',                                'ProductosController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('alumnos')->name('alumnos/')->group(static function() {
            Route::get('/',                                             'AlumnosController@index')->name('index');
            Route::get('/create',                                       'AlumnosController@create')->name('create');
            Route::post('/',                                            'AlumnosController@store')->name('store');
            Route::get('/{alumno}/edit',                                'AlumnosController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'AlumnosController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{alumno}',                                    'AlumnosController@update')->name('update');
            Route::delete('/{alumno}',                                  'AlumnosController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('antunas')->name('antunas/')->group(static function() {
            Route::get('/',                                             'AntunaController@index')->name('index');
            Route::get('/create',                                       'AntunaController@create')->name('create');
            Route::post('/',                                            'AntunaController@store')->name('store');
            Route::get('/{antuna}/edit',                                'AntunaController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'AntunaController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{antuna}',                                    'AntunaController@update')->name('update');
            Route::delete('/{antuna}',                                  'AntunaController@destroy')->name('destroy');
        });
    });
});