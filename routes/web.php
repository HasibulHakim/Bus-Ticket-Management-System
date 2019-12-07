<?php



// backend

Route::get('/admin/index','AdminController@index')-> name('dashboard_home');
Route::get('/admin/users','AdminController@users')-> name('users_info');
Route::get('/admin/users/edit/{id}','AdminController@edit')-> name('edit_user');
Route::post('/admin/users/update','AdminController@update')-> name('update_user');
Route::get('/admin/users/delete/{id}','AdminController@delete')-> name('udelete_user');



// Bus Insert form
Route::get('/admin/bus_insert_form','BusController@bus')->name('buses');
// Bus Insert
Route::post('/admin/bus_insert','BusController@insert_bus')->name('bus_insert');
// Bus view
Route::get('/admin/bus_view','BusController@bus_view')->name('view_bus');

// Date Insert form
Route::get('/admin/date_insert_form','BusController@journey_date')->name('journey_date');
// Date Insert
Route::post('/admin/date_insert','BusController@insert_date')->name('date_insert');
// Date View
Route::get('/admin/date_view','BusController@date_view')->name('date_view');
// Time Insert form
Route::get('/admin/time','BusController@time')->name('time');
//Time Insert
Route::post('/admin/time/insert','BusController@time_insert')->name('time_insert');
//Time View
Route::get('/admin/time/view','BusController@time_view')->name('time_view');
//Form
Route::get('/admin/form','BusController@form')->name('form');
//Form Insert
Route::post('/admin/form/insert','BusController@form_insert')->name('form_insert');
//Form View
Route::get('/admin/form/view','BusController@form_view')->name('form_view');
//To
Route::get('/admin/to','BusController@to')->name('to');
//To Insert
Route::post('/admin/to/insert','BusController@to_insert')->name('to_insert');
//To View
Route::get('/admin/to/view','BusController@to_view')->name('to_view');
//Bus Type
Route::get('/admin/bus_type','BusController@bus_type')->name('bus_type');
//Bus Type Insert
Route::post('/admin/bus_type/insert','BusController@bus_type_insert')->name('bus_type_insert');
//Bus Type View
Route::get('/admin/bus_type/view','BusController@bus_type_view')->name('bus_type_view');
//Terminal Index
Route::get('/admin/terminal','BusController@terminal')->name('terminal');
//Terminal Insert
Route::post('/admin/terminal/insert','BusController@terminal_insert')->name('terminal_insert');
//Terminal view
Route::get('/admin/terminal/view','BusController@terminal_view')->name('terminal_view');
//Price Index
Route::get('/admin/price','BusController@price')->name('price');
//Price Insert
Route::post('/admin/price/insert','BusController@price_insert')->name('price_insert');
//Price View
Route::get('/admin/price/view','BusController@price_view')->name('price_view');


//Bus_info_Detail
Route::get('/admin/businfo','BusController@bus_info')->name('bus_info');
//Bus_Info_Detail_Insert
Route::post('/admin/businfo/insert','BusController@bus_info_insert')->name('bus_info_insert');
//Bus_Info_Detail_View
Route::get('/admin/businfo/view','BusController@bus_info_view')->name('bus_info_view');
// Edit Bus info
Route::get('/admin/businfo/view/edit/{id}','BusController@edit_businfo')->name('businfo_edit');
// Update Bus info
Route::post('/admin/businfo/view/update','BusController@update_businfo')->name('businfo_update');
//Delete Bus Info
Route::get('/admin/businfo/view/delete/{id}','BusController@delete_businfo')->name('businfo_delete');



//Bus Name Edit
Route::get('/admin/bus_name_info/index','BusController@bus_name_info_index')->name('index');
// Bus name edit
Route::get('/admin/bus_name_info/edit/{id}','BusController@edit_bus_name_info')->name('bus_name_info_edit');
// Bus name update
Route::post('/admin/bus_name_info/update','BusController@update_bus_name_info')->name('bus_name_info_update');
//Bus name delete
Route::get('/admin/bus_name_info/delete/{id}','BusController@delete_bus')->name('bus_delete');
// Date index edit
Route::get('/admin/date_info/index','BusController@date_info_index')->name('index_date_info');
//Date edit
Route::get('/admin/date_info/edit/{id}','BusController@edit_date_info')->name('date_info_edit');
//Date Update
Route::post('/admin/date_info/update','BusController@update_date_info')->name('date_info_update');
//Date delete
Route::get('/admin/date_info/delete/{id}','BusController@delete_date_info')->name('date_info_delete');
//Form Edit
Route::get('/admin/form_info/edit/{id}','BusController@edit_form_info')->name('form_info_edit');
//Form Update
Route::post('/admin/form_info/update','BusController@update_form_info')->name('form_info_update');
//Form Delete
Route::get('/admin/form_info/delete/{id}','BusController@delete_form_info')->name('form_info_delete');
//Time Edit
Route::get('/admin/time_info/edit/{id}','BusController@edit_time_info')->name('time_info_edit');
//Time Update
Route::post('/admin/time_info/update','BusController@update_time_info')->name('time_info_update');
//Time delete
Route::get('/admin/time_info/delete/{id}','BusController@delete_time_info')->name('time_info_delete');
//To Edit
Route::get('/admin/to_info/edit/{id}','BusController@edit_to_info')->name('to_info_edit');
//To Update
Route::post('/admin/to_info/update','BusController@update_to_info')->name('to_info_update');
//To delete
Route::get('/admin/to_info/delete/{id}','BusController@delete_to_info')->name('to_info_delete');
//Bus Type Edit
Route::get('/admin/bus_type/edit/{id}','BusController@edit_bus_type')->name('bus_type_edit');
//Bus type Update
Route::post('/admin/bus_type/update','BusController@update_bus_type')->name('bus_type_update');
//Bus type delete
Route::get('/admin/bus_type/delete/{id}','BusController@delete_bus_type')->name('bus_type_delete');
//Terminal Edit
Route::get('/admin/terminal_info/edit/{id}','BusController@edit_terminal_info')->name('terminal_info_edit');
//Terminal Update
Route::post('/admin/terminal_info/update','BusController@update_terminal_info')->name('terminal_info_update');
//Terminal delete
Route::get('/admin/terminal_info/delete/{id}','BusController@delete_terminal_info')->name('terminal_info_delete');
//Price Edit
Route::get('/admin/price_info/edit/{id}','BusController@edit_price_info')->name('price_info_edit');
//Price Update
Route::post('/admin/price_info/update','BusController@update_price_info')->name('price_info_update');
//Price Delete
Route::get('/admin/price_info/delete/{id}','BusController@delete_price_info')->name('price_info_delete');




// BUs seat view
Route::get('/user/bus_seat/view/{id}','BusSeatController@bus_seat_view')->name('view_bus_seat');






// Bus List view customer
Route::get('/user/bus_list/view','BusController@bus_list_view')->name('view_bus_list');

//Bus List search
Route::post('/search','BusController@bus_search')->name('search_bus');




//ticket booking
Route::post('/user/ticket_booking','BookingController@ticket_booking')->name('book_ticket');
//ticket booking view
Route::get('/user/ticket_booking/view','BookingController@ticket_booking_view')->name('view_ticket_booking');

// book ticket
Route::post('/user/book_ticket','BookingController@ticket_book')->name('ticket_book');







// Register Stoppage
Route::get('/admin/register_stoppage/index','BusController@register_stoppage_index')->name('register_stoppage_index');
//Register stoppage insert
Route::post('/admin/register_stoppage/insert','BusController@register_stoppage_insert')->name('register_stoppage_insert');
//Register stoppage view
Route::get('/admin/register_stoppage/view','BusController@register_stoppage_view')->name('register_stoppage_view');




//Total Seat index
Route::get('/admin/total_seat','BusController@total_seat')->name('total_seat');
//Total Seat insert
Route::post('/admin/total_seat/insert','BusController@total_seat_insert')->name('total_seat_insert');
//Ttal Seat View
Route::get('/admin/total_seat/view','BusController@total_seat_view')->name('total_seat_view');
//total seat edit
Route::get('/admin/total_seat/edit/{id}','BusController@edit_total_seat')->name('total_seat_edit');
//totalseat update
Route::post('/admin/total_seat/update','BusController@update_total_seat')->name('total_seat_update');
//total seat delete
Route::get('/admin/total_seat/delete/{id}','BusController@delete_total_seat')->name('total_seat_delete');










// stripe
Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');

Route::get('/', function () {
    return view('home.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
