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

Route::get('/dashboard/payments', 'DashboardController@getPayments')->name('dashboard.payments');
Route::get('/dashboard/payments/{search}', 'DashboardController@getPaymentsSearch')->name('dashboard.payments.search');

Route::get('/dashboard/packages', 'DashboardController@getPackages')->name('dashboard.packages');
Route::post('/dashboard/packages/store', 'DashboardController@storePackage')->name('dashboard.packages.store');
Route::post('/dashboard/packages/{id}/update', 'DashboardController@updatePackage')->name('dashboard.packages.update');

Route::get('/dashboard/questions', 'QuestionController@getQuestions')->name('dashboard.questions');
Route::get('/dashboard/questions/{search}', 'QuestionController@getQuestionsSearch')->name('dashboard.questions.search');
Route::get('/dashboard/questions/topic/{id}', 'QuestionController@getQuestionsTopicBased')->name('dashboard.questionstopicbased');
Route::get('/dashboard/questions/tag/{id}', 'QuestionController@getQuestionsTagBased')->name('dashboard.questionstagbased');
Route::post('/dashboard/questions/store', 'QuestionController@storeQuestion')->name('dashboard.questions.store');
Route::post('/dashboard/questions/excel/store', 'QuestionController@storeExcelQuestion')->name('dashboard.questions.excel.store');
Route::post('/dashboard/questions/{id}/update', 'QuestionController@updateQuestion')->name('dashboard.questions.update');
Route::get('/dashboard/questions/{id}/delete', 'QuestionController@deleteQuestion')->name('dashboard.questions.delete');
Route::get('/dashboard/questions/{id}/send-notification', 'QuestionController@sendNotificationQuestion')->name('dashboard.questions.sendnotification');

Route::post('/dashboard/questions/topic/store', 'QuestionController@storeQuestionsTopic')->name('dashboard.questions.topic.store');
Route::post('/dashboard/questions/topic/{id}/update', 'QuestionController@updateQuestionsTopic')->name('dashboard.questions.topic.update');
Route::get('/dashboard/questions/topic/{id}/delete', 'QuestionController@deleteQuestionsTopic')->name('dashboard.questions.topic.delete');

Route::post('/dashboard/questions/tag/store', 'QuestionController@storeQuestionsTag')->name('dashboard.questions.tag.store');
Route::post('/dashboard/questions/tag/{id}/update', 'QuestionController@updateQuestionsTag')->name('dashboard.questions.tag.update');
Route::get('/dashboard/questions/tag/{id}/delete', 'QuestionController@deleteQuestionsTag')->name('dashboard.questions.tag.delete');

Route::get('/dashboard/reported/questions', 'QuestionController@getReportedQuestions')->name('dashboard.questions.reported');
Route::get('/dashboard/reported/questions/{search}', 'QuestionController@getReportedQuestionsSearch')->name('dashboard.questions.reported.search');
Route::get('/dashboard/reported/questions/{id}/delete', 'QuestionController@deleteReportedQuestionsSearch')->name('dashboard.questions.reported.delete');
Route::get('/dashboard/change/topic/questions', 'QuestionController@getChangeTopicQuestions')->name('dashboard.questions.changetopic');
Route::get('/dashboard/change/topic/questions/{search}', 'QuestionController@getChangeTopicQuestionsSearch')->name('dashboard.questions.changetopicsearch');
Route::get('/dashboard/change/topic/questions/topicbased/{id}', 'QuestionController@getChangeTopicQuestionsTopicBased')->name('dashboard.questions.changetopicbased');
Route::post('/dashboard/change/topic/questions/{id}/update', 'QuestionController@postChangeTopicQuestions')->name('dashboard.questions.updatechangetopicbased');

Route::get('/dashboard/exams', 'ExamController@getExams')->name('dashboard.exams');
Route::get('/dashboard/exams/{search}', 'ExamController@getExamsSearch')->name('dashboard.exams.search');
Route::get('/dashboard/exams/meritlist/{exam_id}', 'ExamController@getExamMeritList')->name('dashboard.exams.getmeritlist');
Route::post('/dashboard/exams/store', 'ExamController@storeExam')->name('dashboard.exams.store');
Route::post('/dashboard/exams/{id}/update', 'ExamController@updateExam')->name('dashboard.exams.update');
Route::post('/dashboard/exams/{id}/copy', 'ExamController@copyExam')->name('dashboard.exams.copy');
Route::get('/dashboard/exams/{id}/delete', 'ExamController@deleteExam')->name('dashboard.exams.delete');
Route::get('/dashboard/exams/add/question/{id}', 'ExamController@addQuestionToExam')->name('dashboard.exams.add.question');
Route::post('/dashboard/exams/clear/questions', 'ExamController@clearExamQuestions')->name('dashboard.exams.question.clear');
Route::get('/dashboard/exams/add/question/bank/all/{id}', 'ExamController@addQuestionToExamAll')->name('dashboard.exams.add.question.all');
Route::get('/dashboard/exams/add/question/from/other/questions/{id}', 'ExamController@addQuestionFromOthers')->name('dashboard.exams.add.question.from.others');
Route::post('/dashboard/exams/store/question/from/other/questions/{id}', 'ExamController@storeQuestionFromOthers')->name('dashboard.exams.question.from.others.store');
Route::get('/dashboard/exams/add/question/bank/topic/{topic_id}/{id}', 'ExamController@addQuestionToExamTopic')->name('dashboard.exams.add.question.topic');
Route::get('/dashboard/exams/add/question/bank/search/{id}/{search}', 'ExamController@addQuestionToExamSearch')->name('dashboard.exams.add.question.search');
Route::post('/dashboard/exams/add/question/store', 'ExamController@storeExamQuestion')->name('dashboard.exams.question.store');
Route::get('/dashboard/exams/remove/question/{exam_id}/{question_id}', 'ExamController@removeExamQuestion')->name('dashboard.exams.question.remove');
Route::post('/dashboard/exams/add/question/tags', 'ExamController@storeTagExamQuestion')->name('dashboard.exams.question.tags');
Route::post('/dashboard/exams/add/question/automatic', 'ExamController@automaticeExamQuestionSet')->name('dashboard.exams.question.auto');

Route::post('/dashboard/exams/category/store', 'ExamController@storeExamCategory')->name('dashboard.exams.category.store');
Route::post('/dashboard/exams/category/{id}/update', 'ExamController@updateExamCategory')->name('dashboard.exams.category.update');
Route::get('/dashboard/exams/category/{id}/delete', 'ExamController@deleteExamCategory')->name('dashboard.exams.category.delete');

Route::get('/dashboard/exams/meritlist/{course_id}/{exam_id}', 'ExamController@getMeritList')->name('dashboard.exams.meritlist');

Route::get('/dashboard/courses', 'CourseController@getCourses')->name('dashboard.courses');
Route::post('/dashboard/courses/store', 'CourseController@storeCourse')->name('dashboard.courses.store');
Route::post('/dashboard/courses/{id}/update', 'CourseController@updateCourse')->name('dashboard.courses.update');
Route::post('/dashboard/courses/exams/dates/{id}/update', 'CourseController@updateExamDatesCourse')->name('dashboard.courses.exam.dates.update');
Route::get('/dashboard/courses/{id}/delete', 'CourseController@deleteCourse')->name('dashboard.courses.delete');
Route::get('/dashboard/courses/add/exam/{id}', 'CourseController@addExamToCourse')->name('dashboard.courses.add.exam');
Route::post('/dashboard/courses/add/exam/store', 'CourseController@storeCourseExam')->name('dashboard.courses.exam.store');

Route::get('/dashboard/materials', 'MaterialController@getMaterials')->name('dashboard.materials');
Route::post('/dashboard/materials/store', 'MaterialController@storeMaterial')->name('dashboard.materials.store');
Route::post('/dashboard/materials/{id}/update', 'MaterialController@updateMaterial')->name('dashboard.materials.update');
Route::get('/dashboard/materials/{id}/delete', 'MaterialController@deleteMaterial')->name('dashboard.materials.delete');

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
// Route::post('/dashboard/products/category/store', 'DashboardController@storeProductCategory')->name('dashboard.products.productcategory.store');
// Route::post('/dashboard/products/category/{id}/update', 'DashboardController@updateProductCategory')->name('dashboard.products.productcategory.update');