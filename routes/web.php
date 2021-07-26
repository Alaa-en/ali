<?php

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

Route::get('/index', function(){
    return view('index');
})->name('index');

             #####      Company    #####
Route::get('/companies', 'companyController@index')->name('companies.index');
Route::get('/companies/create', 'companyController@create')->name('companies.create');
Route::post('/companies/store', 'companyController@store')->name('companies.store');
Route::get('/companies/{id}/edit', 'companyController@edit')->name('companies.edit');
Route::put('/companies/{id}', 'companyController@update')->name('companies.update');
Route::delete('/companies/{id}', 'companyController@destroy')->name('companies.destroy');



#####      contractor    #####
Route::get('/contractors', 'contractorController@index')->name('contractors.index');
Route::get('/contractors/create', 'contractorController@create')->name('contractors.create');
Route::post('/contractors/store', 'contractorController@store')->name('contractors.store');
Route::get('/contractors/{id}/edit', 'contractorController@edit')->name('contractors.edit');
Route::put('/contractors/{id}', 'contractorController@update')->name('contractors.update');
Route::delete('/contractors/{id}', 'contractorController@destroy')->name('contractors.destroy');



#####      driveBoy    #####
Route::get('/driveboys', 'drivebBoyController@index')->name('driveboys.index');
Route::get('/driveboys/create', 'drivebBoyController@create')->name('driveboys.create');
Route::post('/driveboys/store', 'drivebBoyController@store')->name('driveboys.store');
Route::get('/driveboys/{id}/edit', 'drivebBoyController@edit')->name('driveboys.edit');
Route::put('/driveboys/{id}', 'drivebBoyController@update')->name('driveboys.update');
Route::delete('/driveboys/{id}', 'drivebBoyController@destroy')->name('driveboys.destroy');



#####      drivers    #####
Route::get('/drivers', 'driverController@index')->name('drivers.index');
Route::get('/drivers/create', 'driverController@create')->name('drivers.create');
Route::post('/drivers/store', 'driverController@store')->name('drivers.store');
Route::get('/drivers/{id}/edit', 'driverController@edit')->name('drivers.edit');
Route::put('/drivers/{id}', 'driverController@update')->name('drivers.update');
Route::delete('/drivers/{id}', 'driverController@destroy')->name('drivers.destroy');


#####     Places    #####
Route::get('/places', 'placeController@index')->name('places.index');
Route::get('/places/create', 'placeController@create')->name('places.create');
Route::post('/places/store', 'placeController@store')->name('places.store');
Route::get('/places/{id}/edit', 'placeController@edit')->name('places.edit');
Route::put('/places/{id}', 'placeController@update')->name('places.update');
Route::delete('/places/{id}', 'placeController@destroy')->name('places.destroy');



#####     navigations    #####
Route::get('/navigations', 'navigationController@index')->name('navigations.index');
Route::get('/navigations/create', 'navigationController@create')->name('navigations.create');
Route::post('/navigations/store', 'navigationController@store')->name('navigations.store');
Route::get('/navigations/{id}/edit', 'navigationController@edit')->name('navigations.edit');
Route::put('/navigations/{id}', 'navigationController@update')->name('navigations.update');
Route::delete('/navigations/{id}', 'navigationController@destroy')->name('navigations.destroy');



#####     payloads    #####
Route::get('/payloads', 'payloadController@index')->name('payloads.index');
Route::get('/payloads/create', 'payloadController@create')->name('payloads.create');
Route::post('/payloads/store', 'payloadController@store')->name('payloads.store');
Route::get('/payloads/{id}/edit', 'payloadController@edit')->name('payloads.edit');
Route::put('/payloads/{id}', 'payloadController@update')->name('payloads.update');
Route::delete('/payloads/{id}', 'payloadController@destroy')->name('payloads.destroy');


#####     carheads    #####
Route::get('/carheads', 'carheadController@index')->name('carheads.index');
Route::get('/carheads/create', 'carheadController@create')->name('carheads.create');
Route::post('/carheads/store', 'carheadController@store')->name('carheads.store');
Route::get('/carheads/{id}/edit', 'carheadController@edit')->name('carheads.edit');
Route::put('/carheads/{id}', 'carheadController@update')->name('carheads.update');
Route::delete('/carheads/{id}', 'carheadController@destroy')->name('carheads.destroy');



#####     trailers    #####
Route::get('/trailers', 'trailerController@index')->name('trailers.index');
Route::get('/trailers/create', 'trailerController@create')->name('trailers.create');
Route::post('/trailers/store', 'trailerController@store')->name('trailers.store');
Route::get('/trailers/{id}/edit', 'trailerController@edit')->name('trailers.edit');
Route::put('/trailers/{id}', 'trailerController@update')->name('trailers.update');
Route::delete('/trailers/{id}', 'trailerController@destroy')->name('trailers.destroy');

#####     users    #####
Route::get('/users', 'userController@index')->name('users.index');
Route::get('/users/create', 'userController@create')->name('users.create');
Route::post('/users/store', 'userController@store')->name('users.store');
Route::get('/users/{id}/edit', 'userController@edit')->name('users.edit');
Route::put('/users/{id}', 'userController@update')->name('users.update');
Route::delete('/users/{id}', 'userController@destroy')->name('users.destroy');


#####     shifts    #####
Route::get('/shifts', 'shiftController@index')->name('shifts.index');
Route::get('/shifts/create', 'shiftController@create')->name('shifts.create');
Route::post('/shifts/store', 'shiftController@store')->name('shifts.store');
Route::get('/shifts/{id}/edit', 'shiftController@edit')->name('shifts.edit');
Route::put('/shifts/{id}', 'shiftController@update')->name('shifts.update');
Route::delete('/shifts/{id}', 'shiftController@destroy')->name('shifts.destroy');




#####     maintenances    #####
Route::get('/maintenances', 'maintenanceController@index')->name('maintenances.index');
Route::get('/maintenances/create', 'maintenanceController@create')->name('maintenances.create');
Route::post('/maintenances/store', 'maintenanceController@store')->name('maintenances.store');
Route::get('/maintenances/{id}/edit', 'maintenanceController@edit')->name('maintenances.edit');
Route::put('/maintenances/{id}', 'maintenanceController@update')->name('maintenances.update');
Route::delete('/maintenances/{id}', 'maintenanceController@destroy')->name('maintenances.destroy');




#####     shiftAccounts    #####
Route::get('/shiftAccounts/{id}', 'shiftAccountController@index')->name('shiftAccounts.index');
Route::get('/shiftAccounts/create', 'shiftAccountController@create')->name('shiftAccounts.create');
Route::post('/shiftAccounts/store', 'shiftAccountController@store')->name('shiftAccounts.store');
Route::get('/shiftAccounts/{id}/edit', 'shiftAccountController@edit')->name('shiftAccounts.edit');
Route::put('/shiftAccounts/{id}', 'shiftAccountController@update')->name('shiftAccounts.update');
Route::delete('/shiftAccounts/{id}', 'shiftAccountController@destroy')->name('shiftAccounts.destroy');
