<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about-us', [HomeController::class, 'about_us'])->name('about-us');
Route::get('donation', [HomeController::class, 'donation'])->name('donation');
Route::get('our-story', [HomeController::class, 'our_story'])->name('our-story');
Route::get('privacy-policy', [HomeController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('contact-us', [HomeController::class, 'contact_us'])->name('contact-us');
Route::get('our-mission', [HomeController::class, 'our_mission'])->name('our-mission');
Route::get('supporting-young-cancer-survivors', [HomeController::class, 'supporting_young_cancer_survivors'])->name('supporting-young-cancer-survivors');
Route::get('top-journal-articles', [HomeController::class, 'top_journal_articles'])->name('top-journal-articles');
Route::get('survivors-profile', [HomeController::class, 'survivors_profile'])->name('survivors-profile');
Route::get('journals-and-latest-research', [HomeController::class, 'journals_and_latest_research'])->name('journals-and-latest-research');
Route::get('pushing-boundaries-the-latest-research-in-psychiatry', [HomeController::class, 'pushing_boundaries_the_latest_research_in_psychiatry'])->name('pushing-boundaries-the-latest-research-in-psychiatry');
Route::get('contact-mental-health-expert', [HomeController::class, 'contact_mental_health_expert'])->name('contact-mental-health-expert');
Route::get('faq', [HomeController::class, 'faq'])->name('faq');
Route::get('search', [HomeController::class, 'search'])->name('search');
Route::get('search-hospital', [HomeController::class, 'search_hospital'])->name('search.hospital');
Route::post('inquiry-contact', [HomeController::class, 'inquiry_contact'])->name('inquiry.contact');




// Admin Controllers
// Auth::routes();

Route::group(['middleware' => ['checkuser']], function () {

    Route::prefix('dashboard')->group(function() {

    Route::get('', [AdminController::class, 'index'])->name('dashboard.home');
    Route::get('/web-cms/home', [AdminController::class, 'cms_home'])->name('web-cms.home');
    Route::post('/update-cms', [AdminController::class, 'update_cms'])->name('update-cms');
    Route::get('/web-cms/about-us', [AdminController::class, 'cms_about'])->name('web-cms.about-us');
    Route::get('/web-cms/our-story', [AdminController::class, 'cms_our_story'])->name('web-cms.our-story');
    Route::get('/web-cms/our-mission', [AdminController::class, 'cms_our_mission'])->name('web-cms.our-mission');
    Route::get('/web-cms/privacy-policy', [AdminController::class, 'cms_privacy_policy'])->name('web-cms.privacy-policy');
    Route::get('/web-cms/survivors-profile', [AdminController::class, 'cms_survivors_profile'])->name('web-cms.survivors-profile');
    Route::get('/web-cms/contact-mental-health-expert', [AdminController::class, 'cms_contact_mental_health_expert'])->name('web-cms.contact-mental-health-expert');
    Route::get('/web-cms/latest-research-in-psychiatry', [AdminController::class, 'cms_latest_research_in_psychiatry'])->name('web-cms.latest-research-in-psychiatry');
    Route::get('/web-cms/top-journal-articles', [AdminController::class, 'cms_top_journal_articles'])->name('web-cms.top-journal-articles');
    Route::get('/web-cms/journals-latest-research', [AdminController::class, 'cms_journals_and_latest_research'])->name('web-cms.journals-latest-research');
    Route::get('/web-cms/contact-us', [AdminController::class, 'cms_contact_us'])->name('web-cms.contact-us');
    Route::get('/web-cms/donation', [AdminController::class, 'cms_donation'])->name('web-cms.donation');

    Route::get('/hospital/add', [AdminController::class, 'add_hospital'])->name('hospital.add');
    Route::post('/hospital/store', [AdminController::class, 'add_hospital_post'])->name('hospital.store');
    Route::get('/hospital/view', [AdminController::class, 'view_hospital'])->name('hospital.view');
    Route::get('/hospital/edit/{id}', [AdminController::class, 'update_hospital'])->name('hospital.update');
    Route::post('/hospital/update/{id}', [AdminController::class, 'update_hospital_post'])->name('hospital.update.store');
    Route::get('/hospital/delete/{id}', [AdminController::class, 'delete_hospital'])->name('hospital.delete');

    Route::get('/blog/add', [AdminController::class, 'add_blog'])->name('blog.add');
    Route::post('/blog/store', [AdminController::class, 'add_blog_post'])->name('blog.store');
    Route::get('/blog/view', [AdminController::class, 'view_blog'])->name('blog.view');
    Route::get('/blog/edit/{id}', [AdminController::class, 'update_blog'])->name('blog.update');
    Route::post('/blog/update/{id}', [AdminController::class, 'update_blog_post'])->name('blog.update.store');
    Route::get('/blog/delete/{id}', [AdminController::class, 'delete_blog'])->name('blog.delete');

    Route::get('/inquiry-contact/view', [AdminController::class, 'view_inquiry_contact'])->name('inquiry-contact.view');
    Route::get('inquiry-contact/delete/{id}', [AdminController::class, 'delete_inquiry_contact'])->name('inquiry-contact.delete');


    // Route::get('/article/add', [AdminController::class, 'add_article'])->name('article.add');
    // Route::post('/article/store', [AdminController::class, 'add_article_post'])->name('article.store');
    // Route::get('/article/view', [AdminController::class, 'view_article'])->name('article.view');
    // Route::get('/article/edit/{id}', [AdminController::class, 'update_article'])->name('article.update');
    // Route::post('/article/update/{id}', [AdminController::class, 'update_article_post'])->name('article.update.store');
    // Route::get('/article/delete/{id}', [AdminController::class, 'delete_article'])->name('article.delete');

    Route::get('website_logo', [AdminController::class, 'website_logo'])->name('website_logo');
    Route::get('/config/add', [AdminController::class, 'config_form'])->name('config.add');

});
});

// AuthController Routes

Route::group(['middleware' => ['isalreadylogin']], function () {

Route::get('register', [AuthController::class, 'register_form'])->name('register.form');
Route::post('register-post', [AuthController::class, 'register'])->name('register.post');
Route::get('login', [AuthController::class, 'login_form'])->name('login.form');
Route::post('login-post', [AuthController::class, 'login'])->name('login.post');
});

Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('change_password', [AuthController::class, 'change_password_form'])->name('change_password');
Route::post('change_password', [AuthController::class, 'change_password'])->name('change_password');
Route::get('profile_update', [AuthController::class, 'profile_update_form'])->name('profile.update');
Route::post('profile_update', [AuthController::class, 'profile_update'])->name('profile.update.store');

