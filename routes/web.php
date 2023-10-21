<?php

use App\Http\Controllers\ApkBoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ApkNotifikasiController;
use App\Http\Controllers\ApkContactController;
use App\Http\Controllers\ApkLinkController;
use App\Http\Controllers\ApkSettingController;
use App\Http\Controllers\PaitoPasaranController;
use App\Http\Controllers\PaitoResultController;
use App\Http\Controllers\ApkPemberitahuanController;
use App\Http\Controllers\SyairCrudController;
use App\Http\Controllers\SyairTitleController;
use App\Http\Controllers\WebPromosiController;
use App\Http\Controllers\SliderBannerController;
use App\Http\Controllers\VipMemberController;
use App\Http\Controllers\RtpController;
use App\Http\Controllers\WebTableWebsiteController;
use App\Http\Controllers\WebJadwalPoolsController;
use App\Http\Controllers\WebMediaSliderController;
use App\Http\Controllers\WebMediaNewsController;
use App\Http\Controllers\WebMediaEventController;
use App\Http\Controllers\WebMediaStreamController;
use App\Http\Controllers\WebMediaLivestreamController;
use App\Http\Controllers\WebMediaPanduanController;
use App\Http\Controllers\WebMediaGalleryFotoController;
use App\Http\Controllers\WebMediaGalleryVideoController;
use App\Http\Controllers\LinkPgaController;
use App\Http\Controllers\HadiahController;
use App\Http\Controllers\WebContactl21Controller;
use App\Http\Controllers\BannermodalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\MobilenoticeController;
use App\Http\Controllers\WebPromosiOfficialController;
use App\Http\Controllers\FrontController;
use App\Models\Notes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


Route::get('/', function () {

    // if (Auth::check()) {
    //     return redirect()->intended('/superadmin');
    // }

    return redirect()->intended('/');
});

Route::get('/', [FrontController::class, 'index']);
Route::get('/rtp', [FrontController::class, 'rtp']);
Route::get('/paito/{pasaran?}', [FrontController::class, 'paito']);
Route::post('/paito/{pasaran?}', [FrontController::class, 'paitopost']);
Route::get('/paitohari/{hari}/{pasaran}', [FrontController::class, 'paitohari']);
Route::post('/paitohari/{hari}/{pasaran}', [FrontController::class, 'paitoharipost']);
Route::get('/tototools', [FrontController::class, 'tototools']);
Route::get('/demo/{id}', [FrontController::class, 'demo']);
Route::get('/promo', [FrontController::class, 'promo']);
Route::get('/listpools', [FrontController::class, 'listpools']);
Route::get('/gallery', [FrontController::class, 'gallery']);
Route::get('/about', [FrontController::class, 'about']);
Route::get('/contact', [FrontController::class, 'contact']);
Route::get('/games', [FrontController::class, 'games']);
Route::get('/linkalternatif/{website}', [FrontController::class, 'linkalternatif']);



Route::get('/superadmin', function () {
    return view('index', [
        'title' => 'superadmin',
    ]);
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('/komponen/dashboard', [
        'title' => 'superadmin',
    ]);
})->middleware('auth');
// ->Middleware(['auth', 'superadmin']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->Middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->Middleware('auth');

Route::get('/topnav', function () {
    $totalnote = Notes::count();
    return view('komponen.top_nav', [
        'totalnote' => $totalnote
    ]);
})->name('topnav');


Route::get('/sidenav', function () {
    return view('komponen.side_nav');
})->name('sidenav');

Route::get('/codebox', function () {
    return view('komponen.code_box');
})->name('codebox');

Route::get('/codetable', function () {
    return view('komponen.code_table');
})->name('codetable');

Route::get('/codeform', function () {
    return view('komponen.code_form');
})->name('codeform');

Route::get('/codemodal', function () {
    return view('komponen.code_modal');
})->name('codemodal');

Route::get('/codebutton', function () {
    return view('komponen.code_button');
})->name('codebutton');

Route::get('/codecard', function () {
    return view('komponen.code_card');
})->name('codecard');

Route::get('/codeother', function () {
    return view('komponen.code_other');
})->name('codeother');

Route::get('/codetest', function () {
    return view('komponen.loader');
})->name('codetest');

Route::get('/notesview', function () {
    return view('komponen.notes');
})->name('notesview');


Route::middleware('auth')->group(function () {
    /*================================================  PAITO  ============================================= */
    /*-- Table Syair --*/
    Route::get('/syair/tablesyair', [SyairCrudController::class, 'index']);
    Route::get('/syair/tablesyair/add', [SyairCrudController::class, 'create']);
    Route::get('/syair/tablesyair/edit/{id}', [SyairCrudController::class, 'edit']);
    Route::post('/syair/tablesyair/store', [SyairCrudController::class, 'store']);
    Route::post('/syair/tablesyair/update', [SyairCrudController::class, 'update']);
    Route::delete('/syair/tablesyair/delete', [SyairCrudController::class, 'destroy']);
    Route::get('syair/checkSlug', [SyairCrudController::class, 'checkSlug']);
    Route::get('/syair/tablesyair/view/{id}', [SyairCrudController::class, 'views']);

    /*-- Table Syair --*/
    Route::get('/syair/titlebody', [SyairTitleController::class, 'index']);
    Route::get('/syair/titlebody/edit/{id}', [SyairTitleController::class, 'edit']);
    Route::get('/syair/titlebody/view/{id}', [SyairTitleController::class, 'views']);
    Route::post('/syair/titlebody/update', [SyairTitleController::class, 'update']);


    /*================================================  PAITO  ============================================= */
    /*-- Pasaran --*/
    Route::get('/paito/pasaran', [PaitoPasaranController::class, 'index']);
    Route::get('/paito/pasaran/add', [PaitoPasaranController::class, 'create']);
    Route::get('/paito/pasaran/edit/{id}', [PaitoPasaranController::class, 'edit']);
    Route::post('/paito/pasaran/store', [PaitoPasaranController::class, 'store']);
    Route::post('/paito/pasaran/update', [PaitoPasaranController::class, 'update']);
    Route::delete('/paito/pasaran/delete', [PaitoPasaranController::class, 'destroy']);
    Route::get('/paito/pasaran/view/{id}', [PaitoPasaranController::class, 'views']);

    /*-- Result --*/
    Route::get('/paito/result', [PaitoResultController::class, 'index']);
    Route::get('/paito/result/add', [PaitoResultController::class, 'create']);
    Route::get('/paito/result/edit/{id}', [PaitoResultController::class, 'edit']);
    Route::post('/paito/result/store', [PaitoResultController::class, 'store']);
    Route::post('/paito/result/update', [PaitoResultController::class, 'update']);
    Route::delete('/paito/result/delete', [PaitoResultController::class, 'destroy']);
    Route::get('/paito/result/view/{id}', [PaitoResultController::class, 'views']);

    /*================================================  APK  =============================================== */
    /*-- Notifikasi --*/
    Route::get('/apk/notifikasi', [ApkNotifikasiController::class, 'index']);
    Route::get('/apk/notifikasi/edit/{id}', [ApkNotifikasiController::class, 'edit']);
    Route::post('/apk/notifikasi/push', [ApkNotifikasiController::class, 'push']);

    /*-- Contact --*/
    Route::get('/apk/contact', [ApkContactController::class, 'index']);
    // Route::get('/apk/contact/edit/{id}', function () {
    //     return 'test';
    // });
    Route::get('/apk/contact/edit/{id}', [ApkContactController::class, 'edit']);
    Route::get('/apk/contact/view/{id}', [ApkContactController::class, 'views']);
    Route::post('/apk/contact/update', [ApkContactController::class, 'update'])->name('contact.update');

    /*-- Link --*/
    Route::get('/apk/link', [ApkLinkController::class, 'index']);
    Route::get('/apk/link/edit/{id}', [ApkLinkController::class, 'edit']);
    Route::get('/apk/link/view/{id}', [ApkLinkController::class, 'views']);
    Route::post('/apk/link/update', [ApkLinkController::class, 'update']);

    /*-- Contact --*/
    Route::get('/apk/setting', [ApkSettingController::class, 'index']);
    Route::get('/apk/setting/edit/{id}', [ApkSettingController::class, 'edit']);
    Route::get('/apk/setting/view/{id}', [ApkSettingController::class, 'views']);
    Route::post('/apk/setting/update', [ApkSettingController::class, 'update'])->name('contact.update');

    /*-- Pemberitahuan --*/
    Route::get('/apk/pemberitahuan', [ApkPemberitahuanController::class, 'index'])->Middleware(['auth', 'apk2']);
    Route::get('/apk/pemberitahuan/edit/{id}', [ApkPemberitahuanController::class, 'edit']);
    Route::get('/apk/pemberitahuan/view/{id}', [ApkPemberitahuanController::class, 'views']);
    Route::post('/apk/pemberitahuan/update', [ApkPemberitahuanController::class, 'update']);
    Route::get('/apk/pemberitahuan/add', [ApkPemberitahuanController::class, 'create']);
    Route::post('/apk/pemberitahuan/store', [ApkPemberitahuanController::class, 'store']);
    Route::delete('/apk/pemberitahuan/delete', [ApkPemberitahuanController::class, 'destroy']);

    /*-- Bo --*/
    Route::get('/apk/bo', [ApkBoController::class, 'index']);
    Route::get('/apk/bo/add', [ApkBoController::class, 'create']);
    Route::get('/apk/bo/edit/{id}', [ApkBoController::class, 'edit']);
    Route::get('/apk/bo/view/{id}', [ApkBoController::class, 'views']);
    Route::post('/apk/bo/store', [ApkBoController::class, 'store']);
    Route::post('/apk/bo/update', [ApkBoController::class, 'update']);
    Route::delete('/apk/bo/delete', [ApkBoController::class, 'destroy']);

    /*================================================  WEBSITE  =============================================== */
    /*-- Promosi Official Website --*/
    Route::get('/web/promosiofficial', [WebPromosiOfficialController::class, 'index']);
    Route::get('/web/promosiofficial/add', [WebPromosiOfficialController::class, 'create']);
    Route::get('/web/promosiofficial/edit/{id}', [WebPromosiOfficialController::class, 'edit']);
    Route::get('/web/promosiofficial/view/{id}', [WebPromosiOfficialController::class, 'views']);
    Route::post('/web/promosiofficial/store', [WebPromosiOfficialController::class, 'store']);
    Route::post('/web/promosiofficial/update', [WebPromosiOfficialController::class, 'update']);
    Route::delete('/web/promosiofficial/delete', [WebPromosiOfficialController::class, 'destroy']);

    /*-- Table Website --*/
    Route::get('/web/tablewebsite', [WebTableWebsiteController::class, 'index']);
    Route::get('/web/tablewebsite/add', [WebTableWebsiteController::class, 'create']);
    Route::get('/web/tablewebsite/edit/{id}', [WebTableWebsiteController::class, 'edit']);
    Route::post('/web/tablewebsite/store', [WebTableWebsiteController::class, 'store']);
    Route::post('/web/tablewebsite/update', [WebTableWebsiteController::class, 'update']);
    Route::delete('/web/tablewebsite/delete', [WebTableWebsiteController::class, 'destroy']);
    Route::get('/web/tablewebsite/view/{id}', [WebTableWebsiteController::class, 'views']);
    Route::get('/web/tablewebsite/viewtable/', [WebTableWebsiteController::class, 'viewtable']);

    /*-- Table Jadwal Pools --*/
    Route::get('/web/jadwalpools', [WebJadwalPoolsController::class, 'index']);
    Route::get('/web/jadwalpools/add', [WebJadwalPoolsController::class, 'create']);
    Route::get('/web/jadwalpools/edit/{id}', [WebJadwalPoolsController::class, 'edit']);
    Route::post('/web/jadwalpools/store', [WebJadwalPoolsController::class, 'store']);
    Route::post('/web/jadwalpools/update', [WebJadwalPoolsController::class, 'update']);
    Route::delete('/web/jadwalpools/delete', [WebJadwalPoolsController::class, 'destroy']);
    Route::get('/web/jadwalpools/view/{id}', [WebJadwalPoolsController::class, 'views']);

    /*-- Media Slider --*/
    Route::get('/web/mediaslider', [WebMediaSliderController::class, 'index']);
    Route::get('/web/mediaslider/add', [WebMediaSliderController::class, 'create']);
    Route::get('/web/mediaslider/edit/{id}', [WebMediaSliderController::class, 'edit']);
    Route::post('/web/mediaslider/store', [WebMediaSliderController::class, 'store']);
    Route::post('/web/mediaslider/update', [WebMediaSliderController::class, 'update']);
    Route::delete('/web/mediaslider/delete', [WebMediaSliderController::class, 'destroy']);
    Route::get('/web/mediaslider/view/{id}', [WebMediaSliderController::class, 'views']);

    /*-- Media News --*/
    Route::get('/web/medianews', [WebMediaNewsController::class, 'index']);
    Route::get('/web/medianews/add', [WebMediaNewsController::class, 'create']);
    Route::get('/web/medianews/edit/{id}', [WebMediaNewsController::class, 'edit']);
    Route::post('/web/medianews/store', [WebMediaNewsController::class, 'store']);
    Route::post('/web/medianews/update', [WebMediaNewsController::class, 'update']);
    Route::delete('/web/medianews/delete', [WebMediaNewsController::class, 'destroy']);
    Route::get('/web/medianews/view/{id}', [WebMediaNewsController::class, 'views']);

    /*-- Media Event --*/
    Route::get('/web/mediaevent', [WebMediaEventController::class, 'index']);
    Route::get('/web/mediaevent/add', [WebMediaEventController::class, 'create']);
    Route::get('/web/mediaevent/edit/{id}', [WebMediaEventController::class, 'edit']);
    Route::post('/web/mediaevent/store', [WebMediaEventController::class, 'store']);
    Route::post('/web/mediaevent/update', [WebMediaEventController::class, 'update']);
    Route::delete('/web/mediaevent/delete', [WebMediaEventController::class, 'destroy']);
    Route::get('/web/mediaevent/view/{id}', [WebMediaEventController::class, 'views']);

    /*-- Media Stream --*/
    Route::get('/web/mediastream', [WebMediaStreamController::class, 'index']);
    Route::get('/web/mediastream/add', [WebMediaStreamController::class, 'create']);
    Route::get('/web/mediastream/edit/{id}', [WebMediaStreamController::class, 'edit']);
    Route::post('/web/mediastream/store', [WebMediaStreamController::class, 'store']);
    Route::post('/web/mediastream/update', [WebMediaStreamController::class, 'update']);
    Route::delete('/web/mediastream/delete', [WebMediaStreamController::class, 'destroy']);
    Route::get('/web/mediastream/view/{id}', [WebMediaStreamController::class, 'views']);

    /*-- Media Livestream --*/
    Route::get('/web/medialivestream', [WebMediaLivestreamController::class, 'index']);
    Route::get('/web/medialivestream/add', [WebMediaLivestreamController::class, 'create']);
    Route::get('/web/medialivestream/edit/{id}', [WebMediaLivestreamController::class, 'edit']);
    Route::post('/web/medialivestream/store', [WebMediaLivestreamController::class, 'store']);
    Route::post('/web/medialivestream/update', [WebMediaLivestreamController::class, 'update']);
    Route::delete('/web/medialivestream/delete', [WebMediaLivestreamController::class, 'destroy']);
    Route::get('/web/medialivestream/view/{id}', [WebMediaLivestreamController::class, 'views']);

    /*-- Media Panduan --*/
    Route::get('/web/mediapanduan', [WebMediaPanduanController::class, 'index']);
    Route::get('/web/mediapanduan/add', [WebMediaPanduanController::class, 'create']);
    Route::get('/web/mediapanduan/edit/{id}', [WebMediaPanduanController::class, 'edit']);
    Route::post('/web/mediapanduan/store', [WebMediaPanduanController::class, 'store']);
    Route::post('/web/mediapanduan/update', [WebMediaPanduanController::class, 'update']);
    Route::delete('/web/mediapanduan/delete', [WebMediaPanduanController::class, 'destroy']);
    Route::get('/web/mediapanduan/view/{id}', [WebMediaPanduanController::class, 'views']);

    /*-- Media Gallery Foto --*/
    Route::get('/web/mediagalleryfoto', [WebMediaGalleryFotoController::class, 'index']);
    Route::get('/web/mediagalleryfoto/add', [WebMediaGalleryFotoController::class, 'create']);
    Route::get('/web/mediagalleryfoto/edit/{id}', [WebMediaGalleryFotoController::class, 'edit']);
    Route::post('/web/mediagalleryfoto/store', [WebMediaGalleryFotoController::class, 'store']);
    Route::post('/web/mediagalleryfoto/update', [WebMediaGalleryFotoController::class, 'update']);
    Route::delete('/web/mediagalleryfoto/delete', [WebMediaGalleryFotoController::class, 'destroy']);
    Route::get('/web/mediagalleryfoto/view/{id}', [WebMediaGalleryFotoController::class, 'views']);

    /*-- Media Gallery Video --*/
    Route::get('/web/mediagalleryvideo', [WebMediaGalleryVideoController::class, 'index']);
    Route::get('/web/mediagalleryvideo/add', [WebMediaGalleryVideoController::class, 'create']);
    Route::get('/web/mediagalleryvideo/edit/{id}', [WebMediaGalleryVideoController::class, 'edit']);
    Route::post('/web/mediagalleryvideo/store', [WebMediaGalleryVideoController::class, 'store']);
    Route::post('/web/mediagalleryvideo/update', [WebMediaGalleryVideoController::class, 'update']);
    Route::delete('/web/mediagalleryvideo/delete', [WebMediaGalleryVideoController::class, 'destroy']);
    Route::get('/web/mediagalleryvideo/view/{id}', [WebMediaGalleryVideoController::class, 'views']);

    Route::get('/web/hadiah/{bo}', [HadiahController::class, 'index']);
    Route::get('/web/hadiah/edit/{id}', [HadiahController::class, 'edit']);
    Route::post('/web/hadiah/update', [HadiahController::class, 'update']);

    /*-- Media ContactL21 --*/
    Route::get('/web/contactl21', [WebContactl21Controller::class, 'index']);
    Route::get('/web/contactl21/add', [WebContactl21Controller::class, 'create']);
    Route::get('/web/contactl21/edit/{id}', [WebContactl21Controller::class, 'edit']);
    Route::post('/web/contactl21/store', [WebContactl21Controller::class, 'store']);
    Route::post('/web/contactl21/update', [WebContactl21Controller::class, 'update']);
    Route::delete('/web/contactl21/delete', [WebContactl21Controller::class, 'destroy']);
    Route::get('/web/contactl21/view/{id}', [WebContactl21Controller::class, 'views']);

    /*================================================  SLIDER  =============================================== */
    /*-- Banner --*/
    Route::get('/slider/banner', [SliderBannerController::class, 'index']);
    Route::get('/slider/banner/edit/{id}', [SliderBannerController::class, 'edit']);

    Route::get('/slider/banner/add', [SliderBannerController::class, 'create']);
    Route::post('/slider/banner/store', [SliderBannerController::class, 'store']);
    Route::get('/slider/banner/edit/{id}', [SliderBannerController::class, 'edit']);
    Route::get('/slider/banner/view/{id}', [SliderBannerController::class, 'views']);
    Route::post('/slider/banner/update', [SliderBannerController::class, 'update']);
    Route::delete('/slider/banner/delete', [SliderBannerController::class, 'destroy']);

    /*================================================  VIP  =============================================== */
    /*-- VIP MEMBER --*/
    Route::get('/vip/member/{bo}', [VipMemberController::class, 'index']);
    Route::get('/vip/member/{bo}/add', [VipMemberController::class, 'create']);
    Route::post('/vip/member/{bo}/store', [VipMemberController::class, 'store']);
    Route::get('/vip/member/{bo}/edit/{id}', [VipMemberController::class, 'edit']);
    Route::get('/vip/member/{bo}/view/{id}', [VipMemberController::class, 'views']);
    Route::post('/vip/member/{bo}/update', [VipMemberController::class, 'update']);
    Route::delete('/vip/member/{bo}/delete', [VipMemberController::class, 'destroy']);

    /*================================================  Link PGA  =============================================== */
    /*-- Link PGA --*/
    Route::get('/link/pga/{bo}', [LinkPgaController::class, 'index']);
    Route::get('/link/pga/{bo}/add', [LinkPgaController::class, 'create']);
    Route::post('/link/pga/{bo}/store', [LinkPgaController::class, 'store']);
    Route::get('/link/pga/{bo}/edit/{id}', [LinkPgaController::class, 'edit']);
    Route::get('/link/pga/{bo}/view/{id}', [LinkPgaController::class, 'views']);
    Route::post('/link/pga/{bo}/update', [LinkPgaController::class, 'update']);
    Route::delete('/link/pga/{bo}/delete', [LinkPgaController::class, 'destroy']);

    /*================================================  Banner Modal  =============================================== */
    /*-- Banner Modal --*/
    Route::get('/bannermodal', [BannermodalController::class, 'index']);
    Route::get('/bannermodal/add', [BannermodalController::class, 'create']);
    Route::post('/bannermodal/store', [BannermodalController::class, 'store']);
    Route::get('/bannermodal/edit/{id}', [BannermodalController::class, 'edit']);
    Route::get('/bannermodal/view/{id}', [BannermodalController::class, 'views']);
    Route::post('/bannermodal/update', [BannermodalController::class, 'update']);
    Route::delete('/bannermodal/delete', [BannermodalController::class, 'destroy']);

    /*================================================  Banner Modal  =============================================== */
    /*-- Banner Modal --*/
    Route::get('/mobilenotice', [MobilenoticeController::class, 'index']);
    Route::get('/mobilenotice/add', [MobilenoticeController::class, 'create']);
    Route::post('/mobilenotice/store', [MobilenoticeController::class, 'store']);
    Route::get('/mobilenotice/edit/{id}', [MobilenoticeController::class, 'edit']);
    Route::get('/mobilenotice/view/{id}', [MobilenoticeController::class, 'views']);
    Route::post('/mobilenotice/update', [MobilenoticeController::class, 'update']);
    Route::delete('/mobilenotice/delete', [MobilenoticeController::class, 'destroy']);

    /*================================================  RTP  =============================================== */
    /*-- RTP --*/
    Route::get('/rtp/{divisi}', [RtpController::class, 'index']);
    Route::get('/rtp/{divisi}/add', [RtpController::class, 'create']);
    Route::post('/rtp/{divisi}/store', [RtpController::class, 'store']);
    Route::get('/rtp/{divisi}/edit/{id}', [RtpController::class, 'edit']);
    Route::post('/rtp/{divisi}/update', [RtpController::class, 'update']);
    Route::delete('/rtp/{divisi}/delete', [RtpController::class, 'destroy']);
    Route::get('/rtp/{divisi}/view/{id}', [RtpController::class, 'views']);

    /*-- Promosi --*/
    Route::get('/web/promosi', [WebPromosiController::class, 'index']);
    Route::get('/web/promosi/add', [WebPromosiController::class, 'create']);
    Route::get('/web/promosi/edit/{id}', [WebPromosiController::class, 'edit']);
    Route::get('/web/promosi/view/{id}', [WebPromosiController::class, 'views']);
    Route::post('/web/promosi/store', [WebPromosiController::class, 'store']);
    Route::post('/web/promosi/update', [WebPromosiController::class, 'update']);
    Route::delete('/web/promosi/delete', [WebPromosiController::class, 'destroy']);

    //profile
    Route::get('/profile', [UserController::class, 'profile']);
    Route::post('/profile/update/', [UserController::class, 'updateProfile']);

    //Notes
    Route::get('/notes', [NotesController::class, 'index']);
    Route::get('/notes/add', [NotesController::class, 'create']);
    Route::get('/notes/edit/{id}', [NotesController::class, 'edit']);
    Route::post('/notes/store', [NotesController::class, 'store']);
    Route::post('/notes/update', [NotesController::class, 'update']);
    Route::delete('/notes/delete', [NotesController::class, 'destroy']);
    Route::get('/notes/view/{id}', [NotesController::class, 'views']);

    // Route::post('/syair/tablesyair/update', [SyairCrudController::class, 'update']);

    // Route::get('syair/checkSlug', [SyairCrudController::class, 'checkSlug'])->Middleware(['auth', 'syair']);
    // 


    Route::get('/test', function (Request $request) {
        $token = $request->session()->token();

        return view('rtp.test');
    });
});
