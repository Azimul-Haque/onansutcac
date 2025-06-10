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

Route::post('/payment/proceed', 'IndexController@paymentProceed')->name('index.payment.proceed');
Route::get('/payment/cancel', 'IndexController@paymentCancel')->name('index.payment.cancel');
Route::get('/payment/failed', 'IndexController@paymentFailed')->name('index.payment.failed');
Route::get('/payment/fail', 'IndexController@paymentFailed')->name('index.payment.failed');
Route::post('/payment/success', 'IndexController@paymentSuccess')->name('index.payment.success');
Route::post('/payment/app/confirm', 'IndexController@paymentSuccessApp')->name('index.payment.success.app');
Route::get('/payment/app/cancel', 'IndexController@paymentCancelApp')->name('index.payment.cancel.app');
Route::get('/check/ip', 'IndexController@checkIP')->name('index.check.ip');

// Hospital
Route::get('/dashboard/hospitals', 'HospitalController@index')->name('dashboard.hospitals');
Route::get('/dashboard/hospitals/{search}', 'HospitalController@indexSearch')->name('dashboard.hospitals.search');
Route::post('/dashboard/hospitals/store', 'HospitalController@storeHospital')->name('dashboard.hospitals.store');
Route::post('/dashboard/hospitals/{id}/update', 'HospitalController@updateHospital')->name('dashboard.hospitals.update');
Route::get('/dashboard/hospitals/{id}/delete', 'HospitalController@deleteHospital')->name('dashboard.hospitals.delete');

// Doctors
Route::get('/dashboard/doctors', 'DoctorController@index')->name('dashboard.doctors');
Route::get('/dashboard/doctors/{search}', 'DoctorController@indexSearch')->name('dashboard.doctors.search');
Route::post('/dashboard/doctors/store', 'DoctorController@storeDoctor')->name('dashboard.doctors.store');
Route::post('/dashboard/doctors/{id}/update', 'DoctorController@updateDoctor')->name('dashboard.doctors.update');
Route::get('/dashboard/doctors/{id}/delete', 'DoctorController@deleteDoctor')->name('dashboard.doctors.delete');
Route::post('/dashboard/doctors/departments/store', 'DoctorController@storeDoctorDept')->name('dashboard.doctorsdept.store');
Route::post('/dashboard/doctors/departments/{id}/update', 'DoctorController@updateDoctorDept')->name('dashboard.doctorsdept.update');
Route::post('/dashboard/doctors/symptom/store', 'DoctorController@storeDoctorSymp')->name('dashboard.doctorssymp.store');
Route::post('/dashboard/doctors/symptom/{id}/update', 'DoctorController@updateDoctorSymp')->name('dashboard.doctorssymp.update');
Route::get('/dashboard/doctors/{doctor_id}/appoinments/list/{date}', 'DoctorController@doctorSerialIndex')->name('dashboard.doctorserialindex');
Route::post('/dashboard/doctors/{doctor_id}/appoinments/cancel/{date}', 'DoctorController@doctorSerialCancelSingle')->name('dashboard.doctorserialcancelsingle');
Route::post('/dashboard/doctors/{doctor_id}/appoinments/cancel/{date}/all', 'DoctorController@doctorSerialCancelALL')->name('dashboard.doctorserialcancelall');
Route::get('/dashboard/doctors/appoinments/pdf/{doctor_id}/{date}', 'DoctorController@getDoctorSerialPDF')->name('dashboard.getdoctorserialpdf');
Route::post('/dashboard/doctors/{doctor_id}/appoinments/add/{date}/manually', 'DoctorController@addDoctorSerialManually')->name('dashboard.adddoctorserialmanually');
Route::post('/dashboard/doctors/appoinments/delete/{serial_id}', 'DoctorController@deleteDoctorSerial')->name('dashboard.deletedoctorserial');

// Blood Donors
Route::get('/dashboard/blooddonors', 'BlooddonorController@index')->name('dashboard.blooddonors');
Route::get('/dashboard/blooddonors/{search}', 'BlooddonorController@indexSearch')->name('dashboard.blooddonors.search');
Route::post('/dashboard/blooddonors/store', 'BlooddonorController@storeBloodDonor')->name('dashboard.blooddonors.store');
Route::post('/dashboard/blooddonors/{id}/update', 'BlooddonorController@updateBloodDonor')->name('dashboard.blooddonors.update');
Route::get('/dashboard/blooddonors/{id}/delete', 'BlooddonorController@deleteBloodDonor')->name('dashboard.blooddonors.delete');
Route::get('/dashboard/blooddonors/{id}/members', 'BlooddonorController@getBloodDonorMembers')->name('dashboard.blooddonormembers');
Route::get('/dashboard/blooddonors/{id}/members/{search}', 'BlooddonorController@bloodDonorMemberSearch')->name('dashboard.blooddonormembers.search');
Route::post('/dashboard/blooddonors/member/store', 'BlooddonorController@storeBloodDonorMember')->name('dashboard.blooddonormembers.store');
Route::post('/dashboard/blooddonors/member/{id}/update', 'BlooddonorController@updateBloodDonorMember')->name('dashboard.blooddonormembers.update');
Route::get('/dashboard/blooddonors/member/{blooddonor_id}/{member_id}/delete', 'BlooddonorController@deleteBloodDonorMember')->name('dashboard.blooddonormembers.delete');

// Ambulances
Route::get('/dashboard/ambulances', 'AmbulanceController@index')->name('dashboard.ambulances');
Route::get('/dashboard/ambulances/{search}', 'AmbulanceController@indexSearch')->name('dashboard.ambulances.search');
Route::post('/dashboard/ambulances/store', 'AmbulanceController@storeAmbulance')->name('dashboard.ambulances.store');
Route::post('/dashboard/ambulances/{id}/update', 'AmbulanceController@updateAmbulance')->name('dashboard.ambulances.update');
Route::get('/dashboard/ambulances/{id}/delete', 'AmbulanceController@deleteAmbulance')->name('dashboard.ambulances.delete');

// Esheba
Route::get('/dashboard/eshebas', 'EshebaController@index')->name('dashboard.eshebas');
Route::get('/dashboard/eshebas/{search}', 'EshebaController@indexSearch')->name('dashboard.eshebas.search');
Route::post('/dashboard/eshebas/store', 'EshebaController@storeEsheba')->name('dashboard.eshebas.store');
Route::post('/dashboard/eshebas/{id}/update', 'EshebaController@updateEsheba')->name('dashboard.eshebas.update');
Route::get('/dashboard/eshebas/{id}/delete', 'EshebaController@deleteEsheba')->name('dashboard.eshebas.delete');

// Admins
Route::get('/dashboard/admins', 'AdminandothersController@index')->name('dashboard.admins');
Route::get('/dashboard/admins/{district_id}', 'AdminandothersController@indexSingle')->name('dashboard.admins.districtwise');
Route::get('/dashboard/admins/{district_id}/{search}', 'AdminandothersController@indexSearch')->name('dashboard.admins.districtwise.search');
Route::post('/dashboard/admins/{district_id}/store', 'AdminandothersController@storeAdmin')->name('dashboard.admins.store');
Route::post('/dashboard/admins/{district_id}/{id}/update', 'AdminandothersController@updateAdmin')->name('dashboard.admins.update');
Route::get('/dashboard/admins/{district_id}/{id}/delete', 'AdminandothersController@deleteAdmin')->name('dashboard.admins.delete');

// Police
Route::get('/dashboard/police', 'AdminandothersController@policeIndex')->name('dashboard.police');
Route::get('/dashboard/police/{district_id}', 'AdminandothersController@policeIndexSingle')->name('dashboard.police.districtwise');
Route::get('/dashboard/police/{district_id}/{search}', 'AdminandothersController@policeIndexSearch')->name('dashboard.police.districtwise.search');
Route::post('/dashboard/police/{district_id}/store', 'AdminandothersController@storePolice')->name('dashboard.police.store');
Route::post('/dashboard/police/{district_id}/{id}/update', 'AdminandothersController@updatePolice')->name('dashboard.police.update');
Route::get('/dashboard/police/{district_id}/{id}/delete', 'AdminandothersController@deletePolice')->name('dashboard.police.delete');

// Fireservices
Route::get('/dashboard/fireservices', 'AdminandothersController@fireserviceIndex')->name('dashboard.fireservices');
Route::get('/dashboard/fireservices/{district_id}', 'AdminandothersController@fireserviceIndexSingle')->name('dashboard.fireservices.districtwise');
Route::get('/dashboard/fireservices/{district_id}/{search}', 'AdminandothersController@fireserviceIndexSearch')->name('dashboard.fireservices.districtwise.search');
Route::post('/dashboard/fireservices/{district_id}/store', 'AdminandothersController@storeFireservice')->name('dashboard.fireservices.store');
Route::post('/dashboard/fireservices/{district_id}/{id}/update', 'AdminandothersController@updateFireservice')->name('dashboard.fireservices.update');
Route::get('/dashboard/fireservices/{district_id}/{id}/delete', 'AdminandothersController@deleteFireservice')->name('dashboard.fireservices.delete');

// Lawyers
Route::get('/dashboard/lawyers', 'AdminandothersController@lawyerIndex')->name('dashboard.lawyers');
Route::get('/dashboard/lawyers/{district_id}', 'AdminandothersController@lawyerIndexSingle')->name('dashboard.lawyers.districtwise');
Route::get('/dashboard/lawyers/{district_id}/{search}', 'AdminandothersController@lawyerIndexSearch')->name('dashboard.lawyers.districtwise.search');
Route::post('/dashboard/lawyers/{district_id}/store', 'AdminandothersController@storeLawyer')->name('dashboard.lawyers.store');
Route::post('/dashboard/lawyers/{district_id}/{id}/update', 'AdminandothersController@updateLawyer')->name('dashboard.lawyers.update');
Route::get('/dashboard/lawyers/{district_id}/{id}/delete', 'AdminandothersController@deleteLawyer')->name('dashboard.lawyers.delete');

// Rent-a-Car
Route::get('/dashboard/rentacars', 'AdminandothersController@rentacarIndex')->name('dashboard.rentacars');
Route::get('/dashboard/rentacars/{district_id}', 'AdminandothersController@rentacarIndexSingle')->name('dashboard.rentacars.districtwise');
Route::get('/dashboard/rentacars/{district_id}/{search}', 'AdminandothersController@rentacarIndexSearch')->name('dashboard.rentacars.districtwise.search');
Route::post('/dashboard/rentacars/{district_id}/store', 'AdminandothersController@storeRentacar')->name('dashboard.rentacars.store');
Route::post('/dashboard/rentacars/{district_id}/{id}/update', 'AdminandothersController@updateRentacar')->name('dashboard.rentacars.update');
Route::get('/dashboard/rentacars/{district_id}/{id}/delete', 'AdminandothersController@deleteRentacar')->name('dashboard.rentacars.delete');

// Newspapers
Route::get('/dashboard/newspapers', 'AdminandothersController@newspaperIndex')->name('dashboard.newspapers');
Route::get('/dashboard/newspapers/{search}', 'AdminandothersController@newspaperIndexSearch')->name('dashboard.newspapers.search');
Route::post('/dashboard/newspapers/store', 'AdminandothersController@storeNewspaper')->name('dashboard.newspapers.store');
Route::post('/dashboard/newspapers/{id}/update', 'AdminandothersController@updateNewspaper')->name('dashboard.newspapers.update');
Route::get('/dashboard/newspapers/{id}/delete', 'AdminandothersController@deleteNewspaper')->name('dashboard.newspapers.delete');

// Coaching
Route::get('/dashboard/coachings', 'AdminandothersController@coachingIndex')->name('dashboard.coachings');
Route::get('/dashboard/coachings/{district_id}', 'AdminandothersController@coachingIndexSingle')->name('dashboard.coachings.districtwise');
Route::get('/dashboard/coachingsforeditor', 'AdminandothersController@coachingIndexSingleForEditor')->name('dashboard.coachings.singleforeditor');
Route::get('/dashboard/coachings/{district_id}/{search}', 'AdminandothersController@coachingIndexSearch')->name('dashboard.coachings.districtwise.search');
Route::post('/dashboard/coachings/{district_id}/store', 'AdminandothersController@storeCoaching')->name('dashboard.coachings.store');
Route::post('/dashboard/coachings/{district_id}/{id}/update', 'AdminandothersController@updateCoaching')->name('dashboard.coachings.update');
Route::get('/dashboard/coachings/{district_id}/{id}/delete', 'AdminandothersController@deleteCoaching')->name('dashboard.coachings.delete');

// Lawyers
Route::get('/dashboard/journalists', 'AdminandothersController@journalistIndex')->name('dashboard.journalists');
Route::get('/dashboard/journalists/{district_id}', 'AdminandothersController@journalistIndexSingle')->name('dashboard.journalists.districtwise');
Route::get('/dashboard/journalists/{district_id}/{search}', 'AdminandothersController@journalistIndexSearch')->name('dashboard.journalists.districtwise.search');
Route::post('/dashboard/journalists/{district_id}/store', 'AdminandothersController@storejournalist')->name('dashboard.journalists.store');
Route::post('/dashboard/journalists/{district_id}/{id}/update', 'AdminandothersController@updateJournalist')->name('dashboard.journalists.update');
Route::get('/dashboard/journalists/{district_id}/{id}/delete', 'AdminandothersController@deleteJournalist')->name('dashboard.journalists.delete');

// RAB
Route::get('/dashboard/rabs', 'AdminandothersController@rabIndex')->name('dashboard.rabs');
Route::post('/dashboard/rabs/battalion/store', 'AdminandothersController@storeRabbattalion')->name('dashboard.rabbattalions.store');
Route::post('/dashboard/rabs/battalion/{id}/update', 'AdminandothersController@updateRabbattalion')->name('dashboard.rabbattalions.update');
Route::get('/dashboard/rabs/battalion/details/{id}', 'AdminandothersController@detailsRabbattalion')->name('dashboard.rabbattalions.details');
Route::get('/dashboard/rabs/battalion/details/{id}/{search}', 'AdminandothersController@detailsRabbattalionSearch')->name('dashboard.rabbattalions.details.search');
Route::post('/dashboard/rabs/battalion/details/{battalion_id}/store', 'AdminandothersController@storeDetailsRabbattalion')->name('dashboard.rabbattalionsdetails.store');
Route::post('/dashboard/rabs/battalion/details/{battalion_id}/{id}/update', 'AdminandothersController@updateDetailsRabbattalion')->name('dashboard.rabbattalionsdetails.update');
Route::post('/dashboard/rabs/battalion/district/{district_id}/update', 'AdminandothersController@updateDistrictRabbattalion')->name('dashboard.districtrabbattalions.update');


// Bus
Route::get('/dashboard/buses', 'AdminandothersController@busIndex')->name('dashboard.buses');
Route::get('/dashboard/buses/{district_id}', 'AdminandothersController@busIndexSingle')->name('dashboard.buses.districtwise');
Route::get('/dashboard/buses/{district_id}/{search}', 'AdminandothersController@busIndexSearch')->name('dashboard.buses.districtwise.search');
Route::post('/dashboard/buses/{district_id}/store', 'AdminandothersController@storeBus')->name('dashboard.buses.store');
Route::post('/dashboard/buses/{district_id}/{id}/update', 'AdminandothersController@updateBus')->name('dashboard.buses.update');
Route::get('/dashboard/buses/{district_id}/{id}/delete', 'AdminandothersController@deleteBus')->name('dashboard.buses.delete');
Route::post('/dashboard/bus/counter/store', 'AdminandothersController@storeBusCounter')->name('dashboard.buses.addcounter');
Route::post('/dashboard/bus/counter/{id}/update', 'AdminandothersController@updateBusCounter')->name('dashboard.buses.updatecounter');






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

// Payment Routes for bKash
Route::get('bkash/production/test', 'BkashController@prodTest')->name('bkash-prod-test');
Route::post('bkash/production/test/payment', 'BkashController@prodPaymentTest')->name('bkash-prod-test-payment');
Route::get('bkash/production/final/payment/{amount}/{mobile}/{package_id}', 'BkashController@prodPayment')->name('bkash-prod-final-payment');
Route::post('bkash/get-token', 'BkashController@getToken')->name('bkash-get-token');
Route::post('bkash/create-payment', 'BkashController@createPayment')->name('bkash-create-payment');
Route::post('bkash/execute-payment', 'BkashController@executePayment')->name('bkash-execute-payment');
Route::get('bkash/query-payment', 'BkashController@queryPayment')->name('bkash-query-payment');
Route::post('bkash/success', 'BkashController@bkashSuccess')->name('bkash-success');
Route::get('bkash/cancel/page', 'BkashController@bkashCancelPage')->name('bkash-cancel-page');
Route::get('bkash/success/page', 'BkashController@bkashSuccessPage')->name('bkash-success-page');
Route::get('bkash/failed/page', 'BkashController@bkashFailedPage')->name('bkash-failed-page');

Route::get('bkash/cancel/page/web', 'BkashController@bkashCancelPageWeb')->name('bkash-cancel-page-web');
Route::get('bkash/success/page/web', 'BkashController@bkashSuccessPageWeb')->name('bkash-success-page-web');
Route::get('bkash/failed/page/web', 'BkashController@bkashFailedPageWeb')->name('bkash-failed-page-web');
// Payment Routes for bKash

// Auth::routes();
Auth::routes(['register' => false]);

Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
Route::get('/dashboard/clear/query/cache', 'DashboardController@clearQueryCache')->name('dashboard.clearquerycache');

Route::get('/dashboard/users', 'DashboardController@getUsers')->name('dashboard.users');
Route::get('/dashboard/users/sort', 'DashboardController@getUsersSort')->name('dashboard.userssort');
Route::get('/dashboard/users/expired', 'DashboardController@getExpiredUsers')->name('dashboard.expiredusers');
Route::post('/dashboard/users/expired/send/sms', 'DashboardController@sendExpiredSMS')->name('dashboard.users.expired.sms');
Route::get('/dashboard/users/{search}', 'DashboardController@getUsersSearch')->name('dashboard.users.search');
Route::get('/dashboard/users/{id}/single', 'DashboardController@getUser')->name('dashboard.users.single');
Route::get('/dashboard/users/{id}/single/otherpage', 'DashboardController@getUserWithOtherPage')->name('dashboard.users.singleother');
Route::post('/dashboard/users/store', 'DashboardController@storeUser')->name('dashboard.users.store');
Route::post('/dashboard/users/{id}/update', 'DashboardController@updateUser')->name('dashboard.users.update');
Route::post('/dashboard/users/bulk/package/update', 'DashboardController@updateBulkPackageDate')->name('dashboard.users.bulk.package.update');
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