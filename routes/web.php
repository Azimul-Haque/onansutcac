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


Route::get('/dashboard/teams', 'DashboardController@getTeams')->name('dashboard.teams');
Route::post('/dashboard/teams/store', 'DashboardController@storeTeam')->name('dashboard.teams.store');
Route::post('/dashboard/teams/{id}/update', 'DashboardController@updateTeam')->name('dashboard.teams.update');
Route::get('/dashboard/teams/{id}/delete', 'DashboardController@deleteTeam')->name('dashboard.teams.delete');

Route::get('/dashboard/products', 'DashboardController@getProducts')->name('dashboard.products');
Route::post('/dashboard/products/store', 'DashboardController@storeProduct')->name('dashboard.products.store');
Route::post('/dashboard/products/{id}/update', 'DashboardController@updateProduct')->name('dashboard.products.update');
Route::get('/dashboard/products/{id}/delete', 'DashboardController@deleteProduct')->name('dashboard.products.delete');

Route::get('/dashboard/markets', 'DashboardController@getMarkets')->name('dashboard.markets');
Route::post('/dashboard/markets/store', 'DashboardController@storeMarket')->name('dashboard.markets.store');
Route::post('/dashboard/markets/{id}/update', 'DashboardController@updateMarket')->name('dashboard.markets.update');
Route::get('/dashboard/markets/{id}/delete', 'DashboardController@deleteMarket')->name('dashboard.markets.delete');

Route::get('/dashboard/news', 'DashboardController@getNews')->name('dashboard.news');
Route::post('/dashboard/news/store', 'DashboardController@storeNews')->name('dashboard.news.store');
Route::post('/dashboard/news/{id}/update', 'DashboardController@updateNews')->name('dashboard.news.update');
Route::get('/dashboard/news/{id}/delete', 'DashboardController@deleteNews')->name('dashboard.news.delete');
Route::post('/dashboard/news/category/store', 'DashboardController@storeNewsCategory')->name('dashboard.newscategories.store');
Route::post('/dashboard/news/category/{id}/update', 'DashboardController@updateNewsCategory')->name('dashboard.newscategories.update');
Route::get('/dashboard/news/category/{id}/delete', 'DashboardController@deleteNewsCategory')->name('dashboard.newscategories.delete');

// --- Events Routes ---
Route::get('/dashboard/events', [DashboardController::class, 'getEvents'])->name('dashboard.events');
Route::post('/dashboard/events/store', [DashboardController::class, 'storeEvent'])->name('dashboard.events.store');
Route::post('/dashboard/events/{id}/update', [DashboardController::class, 'updateEvent'])->name('dashboard.events.update');
Route::get('/dashboard/events/{id}/delete', [DashboardController::class, 'deleteEvent'])->name('dashboard.events.delete');

// --- Success Stories Routes ---
Route::get('/dashboard/success-stories', [DashboardController::class, 'getSuccessStories'])->name('dashboard.success-stories');
Route::post('/dashboard/success-stories/store', [DashboardController::class, 'storeSuccessStory'])->name('dashboard.success-stories.store');
Route::post('/dashboard/success-stories/{id}/update', [DashboardController::class, 'updateSuccessStory'])->name('dashboard.success-stories.update');
Route::get('/dashboard/success-stories/{id}/delete', [DashboardController::class, 'deleteSuccessStory'])->name('dashboard.success-stories.delete');

// --- Clients Routes ---
Route::get('/dashboard/clients', [DashboardController::class, 'getClients'])->name('dashboard.clients');
Route::post('/dashboard/clients/store', [DashboardController::class, 'storeClient'])->name('dashboard.clients.store');
Route::post('/dashboard/clients/{id}/update', [DashboardController::class, 'updateClient'])->name('dashboard.clients.update');
Route::get('/dashboard/clients/{id}/delete', [DashboardController::class, 'deleteClient'])->name('dashboard.clients.delete');

// --- Testimonials Routes ---
Route::get('/dashboard/testimonials', [DashboardController::class, 'getTestimonials'])->name('dashboard.testimonials');
Route::post('/dashboard/testimonials/store', [DashboardController::class, 'storeTestimonial'])->name('dashboard.testimonials.store');
Route::post('/dashboard/testimonials/{id}/update', [DashboardController::class, 'updateTestimonial'])->name('dashboard.testimonials.update');
Route::get('/dashboard/testimonials/{id}/delete', [DashboardController::class, 'deleteTestimonial'])->name('dashboard.testimonials.delete');

// --- Information Center Routes ---
Route::get('/dashboard/information-center', [DashboardController::class, 'getInformationCenter'])->name('dashboard.information-center');
Route::post('/dashboard/information-center/store', [DashboardController::class, 'storeInformationCenter'])->name('dashboard.information-center.store');
Route::post('/dashboard/information-center/{id}/update', [DashboardController::class, 'updateInformationCenter'])->name('dashboard.information-center.update');
Route::get('/dashboard/information-center/{id}/delete', [DashboardController::class, 'deleteInformationCenter'])->name('dashboard.information-center.delete');

// --- Help Center Routes ---
Route::get('/dashboard/help-center', [DashboardController::class, 'getHelpCenter'])->name('dashboard.help-center');
Route::post('/dashboard/help-center/store', [DashboardController::class, 'storeHelpCenter'])->name('dashboard.help-center.store');
Route::post('/dashboard/help-center/{id}/update', [DashboardController::class, 'updateHelpCenter'])->name('dashboard.help-center.update');
Route::get('/dashboard/help-center/{id}/delete', [DashboardController::class, 'deleteHelpCenter'])->name('dashboard.help-center.delete');

// --- Statistics Routes ---
Route::get('/dashboard/statistics', [DashboardController::class, 'getStatistics'])->name('dashboard.statistics');
Route::post('/dashboard/statistics/store', [DashboardController::class, 'storeStatistic'])->name('dashboard.statistics.store');
Route::post('/dashboard/statistics/{id}/update', [DashboardController::class, 'updateStatistic'])->name('dashboard.statistics.update');
Route::get('/dashboard/statistics/{id}/delete', [DashboardController::class, 'deleteStatistic'])->name('dashboard.statistics.delete');

// --- Meta Data Routes ---
Route::get('/dashboard/meta-data', [DashboardController::class, 'getMetaData'])->name('dashboard.meta-data');
Route::post('/dashboard/meta-data/store', [DashboardController::class, 'storeMetaData'])->name('dashboard.meta-data.store');
Route::post('/dashboard/meta-data/{id}/update', [DashboardController::class, 'updateMetaData'])->name('dashboard.meta-data.update');
Route::get('/dashboard/meta-data/{id}/delete', [DashboardController::class, 'deleteMetaData'])->name('dashboard.meta-data.delete');

// --- About Data Routes ---
Route::get('/dashboard/about-data', [DashboardController::class, 'getAboutData'])->name('dashboard.about-data');
Route::post('/dashboard/about-data/store', [DashboardController::class, 'storeAboutData'])->name('dashboard.about-data.store');
Route::post('/dashboard/about-data/{id}/update', [DashboardController::class, 'updateAboutData'])->name('dashboard.about-data.update');
Route::get('/dashboard/about-data/{id}/delete', [DashboardController::class, 'deleteAboutData'])->name('dashboard.about-data.delete');

















Route::get('/dashboard/messages', 'DashboardController@getMessages')->name('dashboard.messages');
Route::post('/dashboard/messages/{id}/update', 'DashboardController@updateMessage')->name('dashboard.messages.update');
Route::get('/dashboard/messages/delete/{id}', 'DashboardController@deleteMessage')->name('dashboard.messages.delete');