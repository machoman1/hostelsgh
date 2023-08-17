<?php

use App\Models\Images;
use Illuminate\Support\Facades\Route;
use App\Models\Room;

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


Route::get('/', function () {
    $data = DB::select('select * from cities');
    $data_room = Room::all()->count();
    $data_logo = Images::all()->where('type','SystemLogo');
    
    return view('welcome',compact('data','data_room','data_logo'));
});
//Route::post('welcome/', [App\Http\Controllers\AllSearchController::class, 'welcome_page_search']);
Route::get('/welcome_search', [App\Http\Controllers\AllSearchController::class, 'welcome_page_search']); 
Route::get('/accomodation_search', [App\Http\Controllers\AllSearchController::class, 'accomodation_page_search']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//aboutUnihouse route
Route::get('/homepage', [App\Http\Controllers\AdminController::class, 'homepage'])->name('homepage');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'about'])->name('about');
Route::get('/housing', [App\Http\Controllers\AboutController::class, 'housing'])->name('housing');
Route::get('/accomodation', [App\Http\Controllers\AboutController::class, 'accomodation'])->name('accomodation');
Route::get('/manage_property', [App\Http\Controllers\AboutController::class, 'manage_property'])->name('manage_property');
Route::get('/get_in_touch', [App\Http\Controllers\AboutController::class, 'get_in_touch'])->name('get_in_touch');
Route::get('/gorvenance', [App\Http\Controllers\AboutController::class, 'gorvenance'])->name('gorvenance');


//advice route
Route::get('/advice', [App\Http\Controllers\AdviceController::class, 'advice'])->name('advice');
Route::get('/rate_landloard', [App\Http\Controllers\AdviceController::class, 'rate_landloard'])->name('rate_landloard');

//landloard route
Route::get('/landloard', [App\Http\Controllers\AllController::class, 'landloard'])->name('landloard');


//news route
Route::get('/news', [App\Http\Controllers\NewsController::class, 'news'])->name('news');
Route::get('news_modal/{id}', [App\Http\Controllers\NewsController::class, 'news_modal']); 

//complain route
Route::get('/complain', [App\Http\Controllers\ComplainController::class, 'complain'])->name('complain');
Route::get('view_complain/{id}', [App\Http\Controllers\AdminController::class, 'view_complain']);


//noticeboard route
Route::get('/noticeboard', [App\Http\Controllers\NoticeboardController::class, 'noticeboard'])->name('noticeboard');
Route::get('noticebord_modal/{id}', [App\Http\Controllers\NoticeboardController::class, 'noticebord_modal']); 
Route::get('/admin_add_notice', [App\Http\Controllers\AdminController::class, 'admin_add_notice']); 

//register_landloard route
Route::get('/register_landloard', [App\Http\Controllers\AllController::class, 'register_landloard'])->name('register_landloard');

//add_news route
Route::get('/add_news', [App\Http\Controllers\AdminController::class, 'add_news'])->name('add_news');

//register_event route
Route::get('/register_event', [App\Http\Controllers\AllController::class, 'register_event'])->name('register_event');

//register_students route
Route::get('/register_student', [App\Http\Controllers\AllController::class, 'register_student_page'])->name('register_student_page');
Route::post('api/fetch-uni', [App\Http\Controllers\AllController::class, 'fetchuni']);

//upcoming_events route
Route::get('/upcoming_event', [App\Http\Controllers\AllController::class, 'upcoming_event'])->name('upcoming_event');

//upcoming_events route
Route::get('/repair', [App\Http\Controllers\RepairController::class, 'repair'])->name('repair');

//enquiry route
Route::get('/general_enquiries', [App\Http\Controllers\EnquiryController::class, 'general_enquiries'])->name('general_enquiries');
Route::post('general_enquiries', [App\Http\Controllers\EnquiryController::class, 'save_enquiries']);

//enquiry route
Route::get('/homestay', [App\Http\Controllers\HomeStayController::class, 'homestay'])->name('homestay');


//save regsiters studente route
Route::post('register', [App\Http\Controllers\AllController::class, 'register_student']);
//save regsiters labndloard route
Route::post('register_landloard', [App\Http\Controllers\AllController::class, 'register_landloard_account']);
//save regsiters labndloard route
Route::post('register_event', [App\Http\Controllers\AllController::class, 'register_event_booker']);
//save complain route
Route::post('complain', [App\Http\Controllers\ComplainController::class, 'save_complain']);


//admin side
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin_login'])->name('admin_login');
Route::get('/admin_users', [App\Http\Controllers\AdminController::class, 'admin_users'])->name('cust.users');
Route::get('/admin_university', [App\Http\Controllers\AdminController::class, 'admin_university'])->name('cust.university');
Route::get('/admin_city', [App\Http\Controllers\AdminController::class, 'admin_city'])->name('cust.city');
Route::get('/admin_students', [App\Http\Controllers\StudentController::class, 'admin_students'])->name('cust.students');
Route::get('/admin_landlord', [App\Http\Controllers\LandloardController::class, 'admin_landlord'])->name('cust.admin_landlord');
Route::get('/admin_event_booker', [App\Http\Controllers\EventController::class, 'admin_event_booker'])->name('cust.event_booker');
Route::get('/admin_property', [App\Http\Controllers\PropertyController::class, 'admin_property'])->name('cust.admin_property');
Route::get('/admin_property_type', [App\Http\Controllers\PropertyController::class, 'admin_property_type'])->name('cust.admin_property_type');
Route::get('/admin_room', [App\Http\Controllers\RoomController::class, 'admin_room'])->name('cust.admin_room');
Route::get('/admin_permissions', [App\Http\Controllers\AdminController::class, 'admin_permissions'])->name('cust.permissions');
Route::get('/admin_news', [App\Http\Controllers\AdminController::class, 'admin_news'])->name('cust.admin_news');
Route::get('/admin_complain', [App\Http\Controllers\AdminController::class, 'admin_complain'])->name('cust.admin_complain');
Route::get('/admin_notice', [App\Http\Controllers\AdminController::class, 'admin_notice'])->name('cust.admin_notice');
Route::get('/admin_repair', [App\Http\Controllers\AdminController::class, 'admin_repair'])->name('cust.admin_repair');
Route::get('/admin_inquiry', [App\Http\Controllers\AdminController::class, 'admin_inquiry'])->name('cust.admin_inquiry');
Route::get('/admin_room_booking', [App\Http\Controllers\AdminController::class, 'admin_room_booking'])->name('cust.admin_room_booking');
Route::get('/admin_property_booking', [App\Http\Controllers\AdminController::class, 'admin_property_booking'])->name('cust.admin_property_booking');


//chnage pass
Route::get('admin_change_password/{id}', [App\Http\Controllers\AdminController::class, 'admin_change_pass']);
Route::post('admin_change_password/', [App\Http\Controllers\AdminController::class, 'update_admin_change_pass']);


//saving admin
Route::post('admin_university', [App\Http\Controllers\AdminController::class, 'save_university']);
Route::post('admin_city', [App\Http\Controllers\AdminController::class, 'save_city']);
Route::post('admin_property', [App\Http\Controllers\PropertyController::class, 'save_property']);
Route::post('admin_property_type', [App\Http\Controllers\PropertyController::class, 'save_property_type']);
Route::post('admin_room', [App\Http\Controllers\RoomController::class, 'save_room']);
Route::post('add_news', [App\Http\Controllers\AdminController::class, 'save_news']);
Route::post('admin_add_notice', [App\Http\Controllers\AdminController::class, 'admin_save_notice']);



//delete admin
Route::get('admin_university/{id}', [App\Http\Controllers\AdminController::class, 'delete_university']);
Route::get('admin_city/{id}', [App\Http\Controllers\AdminController::class, 'delete_city']);
Route::get('admin_students/{id}', [App\Http\Controllers\StudentController::class, 'delete_students']);
Route::get('admin_landlord/{id}', [App\Http\Controllers\LandloardController::class, 'delete_landlord']);
Route::get('admin_event_booker/{id}', [App\Http\Controllers\EventController::class, 'delete_event_booker']);
Route::get('admin_property/{id}', [App\Http\Controllers\PropertyController::class, 'delete_property']);
Route::get('admin_property_type/{id}', [App\Http\Controllers\PropertyController::class, 'delete_property_type']);
Route::get('admin_room/{id}', [App\Http\Controllers\RoomController::class, 'delete_room']);
Route::get('admin_news/{id}', [App\Http\Controllers\AdminController::class, 'delete_news']);
Route::get('admin_notice/{id}', [App\Http\Controllers\AdminController::class, 'delete_admin_notice']);
Route::get('admin_repair/{id}', [App\Http\Controllers\AdminController::class, 'delete_admin_repair']);



//view
Route::get('view_university/{id}', [App\Http\Controllers\AdminController::class, 'view_university']); 
Route::get('view_landlord/{id}', [App\Http\Controllers\LandloardController::class, 'view_landlord']); 
Route::get('view_event_booker/{id}', [App\Http\Controllers\EventController::class, 'view_event_booker']); 
Route::get('view_property/{id}', [App\Http\Controllers\PropertyController::class, 'view_property']); 
Route::get('view_room/{id}', [App\Http\Controllers\RoomController::class, 'view_room']); 
Route::get('admin_view_repair/{id}', [App\Http\Controllers\AdminController::class, 'admin_view_repair']); 
Route::get('admin_view_inquiry/{id}', [App\Http\Controllers\AdminController::class, 'admin_view_inquiry']); 


//update 
Route::get('edit_university/{id}', [App\Http\Controllers\AdminController::class, 'edit_university'])->name('edit_university');
Route::post('edit_university/', [App\Http\Controllers\AdminController::class, 'update_university']);

Route::get('edit_city/{id}', [App\Http\Controllers\AdminController::class, 'edit_city'])->name('edit_city');
Route::post('edit_city/', [App\Http\Controllers\AdminController::class, 'update_city']);

Route::get('edit_students/{id}', [App\Http\Controllers\StudentController::class, 'edit_students'])->name('edit_students');
Route::post('edit_students/', [App\Http\Controllers\StudentController::class, 'update_students']);

Route::get('edit_landlord/{id}', [App\Http\Controllers\LandloardController::class, 'edit_landlord'])->name('edit_landlord');
Route::post('edit_landlord/', [App\Http\Controllers\LandloardController::class, 'update_landlord']);

Route::get('edit_event_booker/{id}', [App\Http\Controllers\EventController::class, 'edit_event_booker'])->name('edit_event_booker');
Route::post('edit_event_booker/', [App\Http\Controllers\EventController::class, 'update_event_booker']);

Route::get('edit_property/{id}', [App\Http\Controllers\PropertyController::class, 'edit_property'])->name('edit_property');
Route::post('edit_property/', [App\Http\Controllers\PropertyController::class, 'update_property']);

Route::get('edit_property_type/{id}', [App\Http\Controllers\PropertyController::class, 'edit_property_type'])->name('edit_property_type');
Route::post('edit_property_type/', [App\Http\Controllers\PropertyController::class, 'update_property_type']);

Route::get('edit_room/{id}', [App\Http\Controllers\RoomController::class, 'edit_room'])->name('edit_room');
Route::post('edit_room/', [App\Http\Controllers\RoomController::class, 'update_room']);

Route::get('edit_permissions/{id}', [App\Http\Controllers\AdminController::class, 'edit_permissions'])->name('edit_permissions');
Route::post('edit_permissions/', [App\Http\Controllers\AdminController::class, 'update_permissions']);

Route::get('edit_news/{id}', [App\Http\Controllers\AdminController::class, 'edit_news'])->name('edit_news');
Route::post('edit_news/', [App\Http\Controllers\AdminController::class, 'update_news']);

Route::get('admin_edit_notice/{id}', [App\Http\Controllers\AdminController::class, 'admin_edit_notice']); 
Route::post('admin_edit_notice/', [App\Http\Controllers\AdminController::class, 'update_admin_notice']);

Route::get('edit_complain/{id}', [App\Http\Controllers\AdminController::class, 'edit_complain']); 
Route::post('edit_complain/', [App\Http\Controllers\AdminController::class, 'update_complain']);


//api


//lamdlord admin
Route::get('/land_lord', [App\Http\Controllers\LandloardController::class, 'land_lord'])->name('land_lord');

//chnage pass landlord
Route::get('landlord_change_password/{id}', [App\Http\Controllers\LandloardController::class, 'landlord_change_pass']);
Route::post('landlord_change_password/', [App\Http\Controllers\LandloardController::class, 'update_landlord_change_pass']);

Route::get('/landlord_students', [App\Http\Controllers\LandloardController::class, 'landlord_students'])->name('cust.landlord');
Route::get('/landlord_property', [App\Http\Controllers\LandloardController::class, 'landlord_property'])->name('cust.landlord_property');
Route::get('/landlord_room', [App\Http\Controllers\LandloardController::class, 'landlord_room'])->name('cust.landlord_room');


Route::get('landlord_view_property/{id}', [App\Http\Controllers\LandloardController::class, 'landlord_view_property']); 
Route::get('landlord_view_room/{id}', [App\Http\Controllers\LandloardController::class, 'landlord_view_room']); 


Route::get('landlord_edit_property/{id}', [App\Http\Controllers\LandloardController::class, 'landlord_edit_property'])->name('landlord_edit_property');
Route::get('landlord_edit_room/{id}', [App\Http\Controllers\LandloardController::class, 'landlord_edit_room'])->name('landlord_edit_room');

Route::get('/landlord_room_booking', [App\Http\Controllers\LandloardController::class, 'landlord_room_booking'])->name('cust.landlord_room_booking');
Route::get('/landlord_property_booking', [App\Http\Controllers\LandloardController::class, 'landlord_property_booking'])->name('cust.landlord_property_booking');


//no access
Route::get('landlord_students/{id}', [App\Http\Controllers\LandloardController::class, 'no_access']);
Route::get('landlord_property/{id}', [App\Http\Controllers\LandloardController::class, 'no_access_property_delete']);
Route::get('landlord_room/{id}', [App\Http\Controllers\LandloardController::class, 'no_access_room_delete']);


//students side
Route::get('/students', [App\Http\Controllers\StudentController::class, 'students'])->name('students');

//chnage pass student
Route::get('students_change_password/{id}', [App\Http\Controllers\StudentController::class, 'students_change_pass']);


Route::get('/students_notice', [App\Http\Controllers\StudentController::class, 'students_notice'])->name('cust.students_notice');
Route::get('/students_complain', [App\Http\Controllers\StudentController::class, 'students_complain'])->name('cust.students_complain');
Route::get('/students_repair', [App\Http\Controllers\StudentController::class, 'students_repair'])->name('cust.students_repair');

Route::get('/add_notice', [App\Http\Controllers\StudentController::class, 'add_notice'])->name('add_notice');
Route::post('add_notice', [App\Http\Controllers\StudentController::class, 'save_notice']);

Route::get('edit_notice/{id}', [App\Http\Controllers\StudentController::class, 'edit_notice']); 
Route::post('edit_notice/', [App\Http\Controllers\StudentController::class, 'update_students_notice']);

Route::get('students_notice/{id}', [App\Http\Controllers\StudentController::class, 'delete_students_notice']);

Route::post('repair', [App\Http\Controllers\RepairController::class, 'save_repair']);

Route::get('/student_room_booking', [App\Http\Controllers\StudentController::class, 'student_room_booking'])->name('cust.student_room_booking');
Route::get('/student_property_booking', [App\Http\Controllers\StudentController::class, 'student_property_booking'])->name('cust.student_property_booking');




//search and bookings
Route::get('whole_property_search/{id}', [App\Http\Controllers\AllSearchController::class, 'whole_property_search']);
Route::get('whole_room_search/{id}', [App\Http\Controllers\AllSearchController::class, 'whole_room_search']);
Route::post('whole_property_search/', [App\Http\Controllers\BookingsController::class, 'add_bookings']);
Route::post('whole_room_search/', [App\Http\Controllers\BookingsController::class, 'add_bookings_room']);




//content editor
Route::get('/content', [App\Http\Controllers\AdminContentEditorController::class, 'content'])->name('content');

//home page
Route::get('/home_Page_content', [App\Http\Controllers\AdminContentEditorController::class, 'home_page'])->name('cust.home_content');
Route::get('edit_home_page_content/{id}', [App\Http\Controllers\AdminContentEditorController::class, 'edit_home_page']);
Route::post('edit_home_page_content/', [App\Http\Controllers\AdminContentEditorController::class, 'update_home_page']);

//home page
Route::get('/homestay_page_content', [App\Http\Controllers\AdminContentEditorController::class, 'homestay_page'])->name('cust.homestay_content');
Route::get('edit_homestay_page_content/{id}', [App\Http\Controllers\AdminContentEditorController::class, 'edit_homestay_page']);
Route::post('edit_homestay_page_content/', [App\Http\Controllers\AdminContentEditorController::class, 'update_homestay_page']);

