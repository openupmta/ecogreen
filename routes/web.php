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


use Illuminate\Support\Facades\Auth;
use App\models\shipping;
use App\models\commitment;



use Illuminate\Http\Request;
Route::get('/', function () {
    return view('pages.index');
})->name('trang-chu');
Route::get('/gioi-thieu', function () {
    return view('pages.gioithieu');
})->name('gioi-thieu');
Route::get('/tu-van-suc-khoe.html','client\AdvisoryController@GetAdvisory')->name('tu-van-suc-khoe');
Route::post('/tu-van-suc-khoe.html','client\AdvisoryController@PostAdvisory');
Route::get('/san-pham', function () {
    return view('pages.sanpham');
})->name('san-pham');

Route::get('/khuyen-mai','client\PromotionController@GetPromotion')->name('khuyen-mai');
Route::post('/khuyen-mai','client\PromotionController@PostPromotion')->name('khuyen-mai');

Route::get('/tu-van', function () {
    return view('pages.tuvan-suckhoe');
})->name('tu-van');

// Route::get('/khuyen-mai', function () {
//     return view('pages.khuyen-mai');
// });
Route::get('/chu-de-suc-khoe', function () {
    return view('pages.chude-suckhoe');
})->name('chu-de-suc-khoe');

Route::get('/dang-nhap', function () {
    return view('pages.dang-nhap');
})->name('dang-nhap');

Route::get('/dang-ky', function () {
    return view('pages.dang-ky');
})->name('dang-ky');

Route::get('/chi-tiet-san-pham', function () {
    $shipping=shipping::all();
    $commitment=commitment::all();
    return view('pages.chitiet-sanpham',['shipping'=>$shipping,'commitment'=>$commitment]);
})->name('chi-tiet-san-pham');
Route::get('/chi-tiet-san-pham-1', function () {
    return view('pages.chitiet-sanpham-1');
});
Route::get('/chi-tiet-san-pham-2', function () {
    return view('pages.chitiet-sanpham-2');
});


Route::get('login','admins\LoginController@GetLogin')->middleware('CheckLogout');
Route::post('login','admins\LoginController@PostLogin');


Route::group(['prefix' => 'admin','middleware'=>'CheckLogin'], function ()
{
    Route::get('/','admins\IndexController@GetIndex');
    Route::get('logout','admins\LoginController@Logout')->name('logout');


    Route::prefix('form')->group(function(){
        Route::get('index','FormController@index')->name('form.index');
        Route::get('create','FormController@create')->name('form.add');
    });
    //khuyến mại
    Route::prefix('promotion')->group(function(){
        Route::get('','admins\PromotionController@List');
        Route::get('add','admins\PromotionController@AddPromotion');
        Route::post('add','admins\PromotionController@PostAddPromotion');
        Route::get('edit/{id}','admins\PromotionController@EditPromotion');
        Route::post('edit/{id}','admins\PromotionController@PostEditPromotion');
        Route::get('delete/{id}','admins\PromotionController@DeletePromotion');
    });

    Route::prefix('expert')->group(function(){
        Route::get('','admins\ExpertController@List');
        Route::get('add','admins\ExpertController@AddExpert');
        Route::post('add','admins\ExpertController@PostAddExpert');
        Route::get('edit/{id}','admins\ExpertController@EditExpert');
        Route::post('edit/{id}','admins\ExpertController@PostEditExpert');
        Route::get('delete/{id}','admins\ExpertController@DeleteExpert');
    });

    Route::prefix('catepromotion')->group(function(){
        Route::get('','admins\CatepromotionController@List');
        Route::get('processed','admins\CatepromotionController@ListProcessed');
    });

    Route::prefix('question')->group(function(){
        Route::get('','admins\QuestionController@List');
        Route::get('delete','admins\QuestionController@Delete');
        Route::get('list','admins\QuestionController@ListAnswer');
        Route::get('answer/{id}','admins\QuestionController@GetAnswer');
        Route::post('answer/{id}','admins\QuestionController@PostAnswer');
        
        
    });

    Route::prefix('commitment')->group(function(){
        Route::get('','admins\CommitmentController@List')->name('danhsachcommitment');
        Route::get('add','admins\CommitmentController@AddCommitment')->name('addcommitment');
        Route::post('add','admins\CommitmentController@PostCommitment')->name('addcommitment');
        Route::get('edit/{id}','admins\CommitmentController@EditCommitment')->name('editcommitment');
        Route::post('edit/{id}','admins\CommitmentController@PostEditCommitment')->name('editcommitment');
        Route::get('delete/{id}','admins\CommitmentController@DeleteCommitment')->name('deletecommitment');
    });
    Route::prefix('introduce')->group(function(){
       Route::get('','IntroduceController@index');
       Route::get('add','IntroduceController@create');
       Route::post('postadd','IntroduceController@store');
       Route::get('edit/{id}','IntroduceController@edit');
       Route::post('postedit/{id}','IntroduceController@update');
       Route::get('delete/{id}','IntroduceController@delete');
       Route::get('anhien/{id}','IntroduceController@anhien');


    });

    Route::prefix('shipping')->group(function(){
        Route::get('','admins\ShipppingController@List')->name('danhsachshipping');
        Route::get('add','admins\ShipppingController@AddShipping')->name('addshipping');
        Route::post('add','admins\ShipppingController@PostShipping')->name('addshipping');
        Route::get('edit/{id}','admins\ShipppingController@EditShipping')->name('editshipping');
        Route::post('edit/{id}','admins\ShipppingController@PostEditShipping')->name('editshipping');
        Route::get('delete/{id}','admins\ShipppingController@DeleteShipping')->name('deleteshipping');
    });

});
