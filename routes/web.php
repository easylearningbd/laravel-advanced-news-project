<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RedirectIfAuthenticated;

use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\ReviewController;

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\NewsPostController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\PhotoGalleryController;
use App\Http\Controllers\Backend\VideoGalleryController;
use App\Http\Controllers\Backend\SeoSettingController;
use App\Http\Controllers\Backend\RoleController;
  
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'Index']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth'])->group(function() {

Route::get('/dashboard', [UserController::class, 'UserDashboard'])->name('dashboard');

Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');

Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');

Route::get('/change/password', [UserController::class, 'ChangePassword'])->name('change.password');

Route::post('/user/change/password', [UserController::class, 'UserChangePassword'])->name('user.change.password');

}); // End User Middleware 

require __DIR__.'/auth.php';




Route::middleware(['auth','role:admin'])->group(function() {


Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');

Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');

Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');

Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');

}); // End Admin Middleware 


Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->middleware(RedirectIfAuthenticated::class)->name('admin.login');

Route::get('/admin/logout/page', [AdminController::class, 'AdminLogoutPage'])->name('admin.logout.page'); 




Route::middleware(['auth','role:admin'])->group(function() {

// Category all Route
Route::controller(CategoryController::class)->group(function(){

    Route::get('/all/category','AllCategory')->name('all.category');
    Route::get('/add/category','AddCategory')->name('add.category');
    Route::post('/store/category','StoreCategory')->name('category.store');
    Route::get('/edit/category/{id}','EditCategory')->name('edit.category');
    Route::post('/update/category','UpdateCategory')->name('category.update');
    Route::get('/delete/category/{id}','DeleteCategory')->name('delete.category');

});


// SubCategory all Route
Route::controller(CategoryController::class)->group(function(){

    Route::get('/all/subcategory','AllSubCategory')->name('all.subcategory');
    Route::get('/add/subcategory','AddSubCategory')->name('add.subcategory');
    Route::post('/store/subcategory','StoreSubCategory')->name('subcategory.store');
    Route::get('/edit/subcategory/{id}','EditSubCategory')->name('edit.subcategory');
    Route::post('/update/subcategory','UpdateSubCategory')->name('subcategory.updated');
    Route::get('/delete/subcategory/{id}','DeleteSubCategory')->name('delete.subcategory');

     Route::get('/subcategory/ajax/{category_id}','GetSubCategory');



});


// Admin User all Route
Route::controller(AdminController::class)->group(function(){

    Route::get('/all/admin','AllAdmin')->name('all.admin');
    Route::get('/add/admin','AddAdmin')->name('add.admin');
    Route::post('/store/admin','StoreAdmin')->name('admin.store');
    Route::get('/edit/admin/{id}','EditAdmin')->name('edit.admin');
    Route::post('/update/admin','UpdateAdmin')->name('admin.update');
    Route::get('/delete/admin/{id}','DeleteAdmin')->name('delete.admin');

    Route::get('/inactive/admin/user/{id}','InactiveAdminUser')->name('inactive.admin.user');

    Route::get('/active/admin/user/{id}','ActiveAdminUser')->name('active.admin.user');

});



// News Post all Route
Route::controller(NewsPostController::class)->group(function(){

    Route::get('/all/news/post','AllNewsPost')->name('all.news.post');
    Route::get('/add/news/post','AddNewsPost')->name('add.news.post');

    Route::post('/store/news/post','StoreNewsPost')->name('store.news.post');
    Route::get('/edit/news/post/{id}','EditNewsPost')->name('edit.news.post');
    Route::post('/update/news/post','UpdateNewsPost')->name('update.news.post');
    Route::get('/delete/news/post/{id}','DeleteNewsPost')->name('delete.news.post');

    Route::get('/inactive/news/post/{id}','InactiveNewsPost')->name('inactive.news.post');
     Route::get('/active/news/post/{id}','ActiveNewsPost')->name('active.news.post');

});



// Banner all Route
Route::controller(BannerController::class)->group(function(){

    Route::get('/all/banners','AllBanners')->name('all.banners');
    Route::post('/update/banners','UpdateBanners')->name('update.banners');
   

});



// PhotoGallery all Route
Route::controller(PhotoGalleryController::class)->group(function(){

    Route::get('/all/photo/gallery','AllPhotoGallery')->name('all.photo.gallery');
    Route::get('/add/photo/gallery','AddPhotoGallery')->name('add.photo.gallery');
    Route::post('/store/photo/gallery','StorePhotoGallery')->name('store.photo.gallery');

    Route::get('/edit/photo/gallery/{id}','EditPhotoGallery')->name('edit.photo.gallery');

    Route::post('/update/photo/gallery','UpdatePhotoGallery')->name('update.photo.gallery');

    Route::get('/delete/photo/gallery/{id}','DeletePhotoGallery')->name('delete.photo.gallery');
     
   

});



// Video Gallery all Route
Route::controller(VideoGalleryController::class)->group(function(){

    Route::get('/all/video/gallery','AllVideoGallery')->name('all.video.gallery'); 

    Route::get('/add/video/gallery','AddVideoGallery')->name('add.video.gallery');

    Route::post('/store/video/gallery','StoreVideoGallery')->name('store.video.gallery');

     Route::get('/edit/video/gallery/{id}','EditVideoGallery')->name('edit.video.gallery');

     Route::post('/update/video/gallery','UpdateVideoGallery')->name('update.video.gallery');

     Route::get('/delete/video/gallery/{id}','DeleteVideoGallery')->name('delete.video.gallery');

     Route::get('/update/live/tv','UpdateLiveTv')->name('update.live.tv');
     Route::post('/update/live','UpdateLiveData')->name('update.live');

});



// Review all Route
Route::controller(ReviewController::class)->group(function(){

    Route::get('/pending/review','PendingReview')->name('pending.review');
    Route::get('/review/approve/{id}','ReviewApprove')->name('review.approve');
    Route::get('/approve/review','ApproveReview')->name('approve.review'); 
    Route::get('/delete/review/{id}','DeleteReview')->name('delete.review');
 
});


// Review all Route
Route::controller(SeoSettingController::class)->group(function(){

    Route::get('/seo/setting','SeoSiteSetting')->name('seo.setting');
    Route::post('/update/seo/setting','UpdateSeoSetting')->name('update.seo.setting');
 
});


// Permission all Route
Route::controller(RoleController::class)->group(function(){

    Route::get('/all/permission','AllPermission')->name('all.permission');
    Route::get('/add/permission','AddPermission')->name('add.permission');
    Route::post('/store/permission','StorePermission')->name('permission.store');
    Route::get('/edit/permission/{id}','EditPermission')->name('edit.permission');
    Route::post('/update/permission','UpdatePermission')->name('permission.update');
    Route::get('/delete/permission/{id}','DeletePermission')->name('delete.permission');
 
});


// Roles all Route
Route::controller(RoleController::class)->group(function(){

    Route::get('/all/roles','AllRoles')->name('all.roles');
    Route::get('/add/roles','AddRoles')->name('add.roles');
    Route::post('/store/roles','StoreRoles')->name('roles.store');
    Route::get('/edit/roles/{id}','EditRoles')->name('edit.roles');
    Route::post('/update/roles','UpdateRoles')->name('roles.update');
    Route::get('/delete/roles/{id}','DeleteRoles')->name('delete.roles');

    Route::get('/add/roles/permission','AddRolesPermission')->name('add.roles.permission');

    Route::post('/role/permission/store','RolePermisssionStore')->name('role.permission.store');

     Route::get('/all/roles/permission','AllRolesPermission')->name('all.roles.permission');

     Route::get('/admin/edit/roles/{id}','AdminEditRoles')->name('admin.edit.roles');

Route::get('/admin/delete/roles/{id}','AdminDeleteRoles')->name('admin.delete.roles');


     Route::post('/role/permission/update/{id}','RolePermissionUpdate')->name('role.permission.update');
 
});



 }); // End Admin Middleware 


/// Access for All 
Route::get('/news/details/{id}/{slug}', [IndexController::class, 'NewsDetails']);
Route::get('/news/category/{id}/{slug}', [IndexController::class, 'CatWiseNews']);
Route::get('/news/subcategory/{id}/{slug}', [IndexController::class, 'SubCatWiseNews']);

Route::get('/lang/change', [IndexController::class, 'Change'])->name('changeLang');

Route::post('/search', [IndexController::class, 'SearchByDate'])->name('search-by-date');

Route::post('/news', [IndexController::class, 'NewsSearch'])->name('news.search');

Route::get('/reporter/{id}', [IndexController::class, 'ReporterNews'])->name('reporter.all.news');

Route::post('/store/review', [ReviewController::class, 'StoreReview'])->name('store.review');


/// End Access for All 

