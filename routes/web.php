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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('test/import', 'TestLaravelExcelController@import');

Route::get('test/spk', 'TestWeightedProductController@index');
Route::post('test/spk/submit', 'TestWeightedProductController@store')->name('test.spk.post');


//percobaan
Auth::routes();
// Auth::routes(["register" => false]);
// Auth::routes(["except" => "register"]);

// Route::get('/home', 'HomeController@index');
// Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');


//User
Route::resource('pengunjung', "pengunjungController");
Route::get('/Pengunjung/{motor}', 'PengunjungController@showMotor')->name('user.show.motor');
Route::post('/detailMotorSPK', 'pengunjungController@detailMotor')->name('user.detailMotorSPK');

Route::get('/', 'UserController@index')->name('user.dashboard');
Route::get('/cariMotor', 'UserController@cariMotor')->name('user.cariMotor');
Route::get('/merek/motor/{id}', 'UserController@merekMotor');

Route::post('/detailMotor', 'UserController@detailMotor')->name('user.detailMotor');
Route::post('/detailMotorAnggaran/{motor}', 'UserController@detailMotor2')->name('user.detailMotor2');
Route::post('/anggaranMotor', 'UserController@anggaranMotor')->name('user.anggaranMotor');

Route::get('/dealerMotor', 'UserController@dealerMotor')->name('user.dealerMotor');
Route::get('/detailDealer/{dealer}', 'UserController@detailDealer')->name('user.detailDealer');

Route::get('/detailPromo/{promo}', 'UserController@detailPromo')->name('user.detailPromo');

Route::get('/infoSPK', 'UserController@infoSPK')->name('user.infoSPK');
Route::get('/SPK-Nama', 'UserController@spk')->name('user.spk');
Route::get('/SPK-Pilih', 'UserController@spk2')->name('user.spk2');
Route::get('/hasil-SPK', 'UserController@hasilSPK')->name('user.spk.hasil');

Route::post('/detailPromo/{promo}/komentar', 'UserController@komentar')->name('user.komentar');


//super Admin
Route::prefix('superAdmin')->group(function () {

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    Route::get('/', 'Super_Admin\HomeController@index')->name('admin.dashboard');

    Route::get('chart', 'Super_Admin\HomeController@chart');

    Route::get('/userAdminPusat', 'Super_Admin\PusatController@userAdminPusat')->name('admin.pusat');
    Route::post('/userAdminPusat', 'Super_Admin\PusatController@store')->name('admin.pusat.store');
    Route::get('/{user}/editUserAdminPusat', 'Super_Admin\PusatController@editUserAdminPusat')->name('admin.pusat.edit');
    Route::post('/{user}/editUserAdminPusat', 'Super_Admin\PusatController@updateUserAdminPusat')->name('admin.pusat.update');
    Route::get('/{user}/deleteUserAdminPusat', 'Super_Admin\PusatController@destroy')->name('admin.pusat.delete');

    Route::get('/merek', 'Super_Admin\MerekController@merek')->name('admin.merek');
    Route::post('/merek', 'Super_Admin\MerekController@store')->name('admin.merek.store');
    Route::get('/{merek}/editMerek', 'Super_Admin\MerekController@editMerek')->name('admin.merek.edit');
    Route::post('/{merek}/editMerek', 'Super_Admin\MerekController@updateMerek')->name('admin.merek.update');
    Route::get('/{merek}/deleteMerek', 'Super_Admin\MerekController@destroy')->name('admin.merek.delete');

    Route::get('/jenis', 'Super_Admin\JenisController@jenis')->name('admin.jenis');
    Route::post('/jenis', 'Super_Admin\JenisController@store')->name('admin.jenis.store');
    Route::get('/{jenis}/editJenis', 'Super_Admin\JenisController@editJenis')->name('admin.jenis.edit');
    Route::post('/{jenis}/editJenis', 'Super_Admin\JenisController@updateJenis')->name('admin.jenis.update');
    Route::get('/{jenis}/deleteJenis', 'Super_Admin\JenisController@destroy')->name('admin.jenis.delete');

    Route::get('/nilai', 'Super_Admin\NilaiController@nilai')->name('admin.nilai');
    Route::post('/nilai', 'Super_Admin\NilaiController@store')->name('admin.nilai.store');
    Route::get('/{nilai}/editNilai', 'Super_Admin\NilaiController@editNilai')->name('admin.nilai.edit');
    Route::post('/{nilai}/editNilai', 'Super_Admin\NilaiController@updateNilai')->name('admin.nilai.update');
    Route::get('/{nilai}/deleteNilai', 'Super_Admin\NilaiController@destroy')->name('admin.nilai.delete');

    Route::get('/kriteria', 'Super_Admin\KriteriaController@kriteria')->name('admin.kriteria');
    Route::post('/kriteria', 'Super_Admin\KriteriaController@store')->name('admin.kriteria.store');
    Route::get('/{kriteria}/editkriteria', 'Super_Admin\KriteriaController@editKriteria')->name('admin.kriteria.edit');
    Route::post('/{kriteria}/editKriteria', 'Super_Admin\KriteriaController@updateKriteria')->name('admin.kriteria.update');
    Route::get('/{kriteria}/deleteKriteria', 'Super_Admin\KriteriaController@destroy')->name('admin.kriteria.delete');

    Route::get('/alternatif', 'Super_Admin\AlternatifController@alternatif')->name('admin.alternatif');
    Route::post('/alternatif', 'Super_Admin\AlternatifController@store')->name('admin.kriteria.store');

    Route::get('/bobot', 'Super_Admin\BobotController@bobot')->name('admin.bobot');
    Route::post('/bobot', 'Super_Admin\BobotController@store')->name('admin.bobot.store');
    Route::get('/editBobot', 'Super_Admin\BobotController@editBobot')->name('admin.bobot.edit');
    Route::post('/{bobot}/editBobot', 'Super_Admin\BobotController@updateBobot')->name('admin.bobot.update');
    Route::get('/{bobot}/deleteBobot', 'Super_Admin\BobotController@destroy')->name('admin.bobot.delete');

    Route::get('/perangkingan', 'Super_Admin\PerangkinganController@perangkingan')->name('admin.perangkingan');
    Route::post('/perangkingan', 'Super_Admin\PerangkinganController@store')->name('admin.perangkingan.store');

//     Route::get('/pengunjung','Super_Admin\PengunjungController@pengunjung')->name('admin.pengunjung');
//     Route::post('/pengunjung', 'Super_Admin\PengunjungController@store')->name('admin.pengunjung.store');

    // Password Reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});
Route::resource('superAdmin/pengunjung', "PengunjungAdminController");

//Pusat
Route::prefix('pusat')->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('pusat.login');
    Route::post('/login', 'Auth\LoginController@login')->name('pusat.login.submit');
    Route::get('/logout', 'Auth\LoginController@logout')->name('pusat.logout');

    Route::get('/', 'Admin_Pusat\ProfileController@profilePusat')->name('pusat.profile');
    Route::get('/{user}/editPofilePusat', 'Admin_Pusat\ProfileController@editProfilePusat')->name('pusat.profile.edit');
    Route::post('/{user}/editPofilePusat', 'Admin_Pusat\ProfileController@updateProfilePusat')->name('pusat.profile.update');

    Route::get('/userAdminDealer', 'Admin_Pusat\DealerController@userAdminDealer')->name('pusat.dealer');
    Route::post('/userAdminDealer', 'Admin_Pusat\DealerController@store')->name('pusat.dealer.store');
    Route::get('/{dealer}/editUserAdminDealer', 'Admin_Pusat\DealerController@editUserAdminDealer')->name('pusat.dealer.edit');
    Route::post('/{dealer}/editUserAdminDealer', 'Admin_Pusat\DealerController@updateUserAdminDealer')->name('pusat.dealer.update');
    Route::get('/{dealer}/deleteUserAdminDealer', 'Admin_Pusat\DealerController@destroy')->name('pusat.dealer.delete');


    Route::get('/dataMotor', 'Admin_Pusat\MotorController@dataMotor')->name('pusat.motor');
    Route::post('/dataMotor', 'Admin_Pusat\MotorController@store')->name('pusat.motor.store');
    Route::get('/{motor}/editDataMotor', 'Admin_Pusat\MotorController@editDataMotor')->name('pusat.motor.edit');
    Route::post('/{motor}/editDataMotor', 'Admin_Pusat\MotorController@updateDataMotor')->name('pusat.motor.update');
    Route::get('/{motor}/deleteDataMotor', 'Admin_Pusat\MotorController@destroy')->name('pusat.motor.delete');

});


//dealer
Route::prefix('dealer')->group(function () {
    Route::get('/login', 'Auth\DealerLoginController@showLoginForm')->name('dealer.login');
    Route::post('/login', 'Auth\DealerLoginController@login')->name('dealer.login.submit');
    Route::get('/logout', 'Auth\DealerLoginController@logout')->name('dealer.logout');

    Route::get('/', 'Admin_Dealer\ProfileController@profileDealer')->name('dealer.profile');
    Route::get('/{dealer}/editPofileDealer', 'Admin_Dealer\ProfileController@editProfileDealer')->name('dealer.profile.edit');
    Route::post('/{dealer}/editPofileDealer', 'Admin_Dealer\ProfileController@updateProfileDealer')->name('dealer.profile.update');

    Route::get('/promo', 'Admin_Dealer\PromoController@promo')->name('dealer.promo');
    Route::post('/promo', 'Admin_Dealer\PromoController@store')->name('dealer.promo.store');
    Route::get('/{promo}/editPromo', 'Admin_Dealer\PromoController@editPromo')->name('dealer.promo.edit');
    Route::post('/{promo}/editPromo', 'Admin_Dealer\PromoController@updatePromo')->name('dealer.promo.update');
    Route::get('/{promo}/deletePromo', 'Admin_Dealer\PromoController@destroy')->name('dealer.promo.delete');

//    Route::get('/rangking','Admin_Dealer\RangkingController@rangking')->name('dealer.rangking');
//    Route::post('/rangking','Admin_Dealer\RangkingController@store')->name('dealer.rangking.store');
//    Route::get('/{alternatif}/editRangking','Admin_Dealer\RangkingController@editRangking')->name('dealer.rangking.edit');
//    Route::post('/{alternatif}/editRangking','Admin_Dealer\RangkingController@updateRangking')->name('dealer.rangking.update');
//    Route::get('/{alternatif}/deleteRangking','Admin_Dealer\RangkingController@destroy')->name('dealer.rangking.delete');

    Route::get('/komentar', 'Admin_Dealer\KomentarController@komentar')->name('dealer.komentar');
    Route::post('/komentar', 'Admin_Dealer\KomentarController@store')->name('dealer.komentar.store');
    Route::get('/{promo}/editKomentar', 'Admin_Dealer\KomentarController@editKomentar')->name('dealer.komentar.edit');
    Route::post('/{promo}/editKomentar', 'Admin_Dealer\KomentarController@updateKomentar')->name('dealer.komentar.update');
    Route::get('/{komentar}/deleteKomentar', 'Admin_Dealer\KomentarController@destroy')->name('dealer.komentar.delete');

    // Password Reset routes
    Route::post('/password/email', 'Auth\DealerForgotPasswordController@sendResetLinkEmail')->name('dealer.password.email');
    Route::get('/password/reset', 'Auth\DealerForgotPasswordController@showLinkRequestForm')->name('dealer.password.request');
    Route::post('/password/reset', 'Auth\DealerResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\DealerResetPasswordController@showResetForm')->name('dealer.password.reset');
});

