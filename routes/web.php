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

Route::get('/', 'IndexController@index')->name('index.index');
Route::get('/contact', 'IndexController@getContact')->name('index.get-contact');
Route::get('/about-us', 'IndexController@getAboutUs')->name('index.get-about-us');
Route::get('/terms-and-conditions', 'IndexController@termsAndConditions')->name('index.terms-and-conditions');
Route::get('/privacy-policy', 'IndexController@privacyPolicy')->name('index.privacy-policy');
Route::get('/products', 'IndexController@getProducts')->name('index.products');
Route::get('/products/{id}', 'IndexController@getProduct')->name('index.singleproduct');
Route::get('/markets', 'IndexController@getMarkets')->name('index.markets');
Route::get('/markets/{id}', 'IndexController@getMarket')->name('index.singlemarket');
Route::get('/regional-offices', 'IndexController@getRegionalOffices')->name('index.regional-offices');
Route::get('/regional-offices/{id}', 'IndexController@getRegionalOffice')->name('index.single-regional-office');
Route::get('/news', 'IndexController@getNews')->name('index.news');
Route::get('/news/{slug}', 'IndexController@getSingleNews')->name('index.single-news');
Route::get('/help-center', 'IndexController@getHelpCenter')->name('index.help-center');
Route::get('/sitemap', 'IndexController@getSitemap')->name('index.sitemap');

Route::get('/events', 'IndexController@getEvents')->name('index.events');
Route::get('/success-stories', 'IndexController@getSuccessStories')->name('index.success-stories');
Route::get('/success-stories/{slug}', 'IndexController@getSingleSuccessStory')->name('index.single-success-story');
Route::get('/academia', 'IndexController@getAcademia')->name('index.academia');
Route::get('/information-center', 'IndexController@getInformationCenter')->name('index.information-center');
Route::get('/testimonials', 'IndexController@getTestimonials')->name('index.testimonials');

// blog
Route::get('/blogs', 'BlogController@index')->name('blogs.index');
// Route::resource('blogs','BlogController');
Route::get('blog/{slug}',['as' => 'blog.single', 'uses' => 'BlogController@getBlogPost']);
Route::get('blog/author/{id}',['as' => 'blogger.profile', 'uses' => 'BlogController@getBloggerProfile']);
Route::get('/like/{blog_id}',['as' => 'blog.like', 'uses' => 'BlogController@likeBlogAPI']);
Route::get('/check/like/{blog_id}',['as' => 'blog.checklike', 'uses' => 'BlogController@checkLikeAPI']);
Route::get('/blogs/category/{name}',['as' => 'blog.categorywise', 'uses' => 'BlogController@getCategoryWise']);
Route::get('/blogs/archive/{date}',['as' => 'blog.monthwise', 'uses' => 'BlogController@getMonthWise']);

// PDFs
Route::get('/single/exam/pdf/{softtoken}/{examid}', 'IndexController@getExamSolvePDF')->name('index.single.exam.solve.pdf');

// Clear Route
Route::get('/clear', ['as'=>'clear','uses'=>'IndexController@clear']);



// Auth::routes();
Auth::routes(['register' => false]);

Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
Route::get('/dashboard/clear/query/cache', 'DashboardController@clearQueryCache')->name('dashboard.clearquerycache');

Route::get('/dashboard/users', 'DashboardController@getUsers')->name('dashboard.users');
Route::get('/dashboard/users/{search}', 'DashboardController@getUsersSearch')->name('dashboard.users.search');
Route::post('/dashboard/users/store', 'DashboardController@storeUser')->name('dashboard.users.store');
Route::post('/dashboard/users/{id}/update', 'DashboardController@updateUser')->name('dashboard.users.update');
Route::get('/dashboard/users/{id}/delete', 'DashboardController@deleteUser')->name('dashboard.users.delete');
Route::post('/dashboard/users/{id}/single/notification', 'DashboardController@sendSingleNotification')->name('dashboard.users.singlenotification');
Route::post('/dashboard/users/{id}/single/sms', 'DashboardController@sendSingleSMS')->name('dashboard.users.singlesms');


Route::get('/dashboard/messages', 'DashboardController@getMessages')->name('dashboard.messages');
Route::post('/dashboard/messages/{id}/update', 'DashboardController@updateMessage')->name('dashboard.messages.update');
Route::get('/dashboard/messages/delete/{id}', 'DashboardController@deleteMessage')->name('dashboard.messages.delete');



Route::get('/dashboard/notifications', 'DashboardController@getNotifications')->name('dashboard.notifications');
Route::post('/dashboard/notifications/send', 'DashboardController@sendNotification')->name('dashboard.notifications.send');
Route::get('/dashboard/notifications/delete/{id}', 'DashboardController@deleteNotification')->name('dashboard.notifications.delete');
Route::post('/dashboard/notifications/send/again', 'DashboardController@sendAgainNotification')->name('dashboard.notifications.sendagain');

Route::get('/dashboard/blogs', 'DashboardController@getBlogs')->name('dashboard.blogs');
Route::get('/dashboard/blogs/{search}', 'DashboardController@getBlogsSearch')->name('dashboard.blogs.search');
Route::post('/dashboard/blogs/store', 'DashboardController@storeBlog')->name('dashboard.blogs.store');
Route::post('/dashboard/blogs/{id}/update', 'DashboardController@updateBlog')->name('dashboard.blogs.update');
Route::get('/dashboard/blogs/{id}/delete', 'DashboardController@deleteBlog')->name('dashboard.blogs.delete');
Route::post('/dashboard/blogs/category/store', 'DashboardController@storeBlogCategory')->name('dashboard.blogs.blogcategory.store');
Route::post('/dashboard/blogs/category/{id}/update', 'DashboardController@updateBlogCategory')->name('dashboard.blogs.blogcategory.update');



// test html question data
// Route::get('/single/exam/pdf/{softtoken}/{examid}', 'DashboardController@getExamSolvePDF')->name('index.single.exam.solve.pdf');

// COMPONENTS
Route::get('/dashboard/components', 'DashboardController@getComponents')->name('dashboard.components');


Route::get('/dashboard/products', 'DashboardController@getProducts')->name('dashboard.products');
Route::get('/dashboard/products/{search}', 'DashboardController@getProductsSearch')->name('dashboard.products.search');
Route::post('/dashboard/products/store', 'DashboardController@storeProduct')->name('dashboard.products.store');
Route::post('/dashboard/products/{id}/update', 'DashboardController@updateProduct')->name('dashboard.products.update');
Route::get('/dashboard/products/{id}/delete', 'DashboardController@deleteProduct')->name('dashboard.products.delete');

Route::get('/dashboard/products', 'DashboardController@getProducts')->name('dashboard.products');
Route::get('/dashboard/products/{search}', 'DashboardController@getProductsSearch')->name('dashboard.products.search');
Route::post('/dashboard/products/store', 'DashboardController@storeProduct')->name('dashboard.products.store');
Route::post('/dashboard/products/{id}/update', 'DashboardController@updateProduct')->name('dashboard.products.update');
Route::get('/dashboard/products/{id}/delete', 'DashboardController@deleteProduct')->name('dashboard.products.delete');