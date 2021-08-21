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

Route::get('/login', function () {
    return view("login.index");
});

Route::get('/check', function () {
    return redirect('/login');
});

Route::get('/dashboard',function ()
{
    return view('user.dashboard');
});

Route::get('/list','UserController@getusers') ;

Route::post('/login','UserController@login')->middleware('acscheck') ;

Route::get('/test', function () {
    return view('test');
});
// serach router
Route::get('/search',function ()
{
    return view('search');
}); 
Route::post('/search','UserController@searchuser');
Route::get('/login','LoginController@check');
Route::post('/login','LoginController@check');

Route::get('/register','UserController@initreg');
Route::post('/register','UserController@addUser');

Route::get('user/details/{id}','UserController@details');
Route::get('user/delete/{id}','UserController@delete');
Route::get('user/update/{id}','UserController@update');
Route::post('user/update/{id}','UserController@edit');


// Manager's Route 




Route::get('/manager/login', function () {
    return view('mngr.login');

});
Route::post('/manager/login','ManagerController@verify');

Route::get('/mgrlogout','ManagerController@logout');


Route::get('/manager/register', function () {
    return view('mngr.register');
});
Route::post('/manager/register','ManagerController@createUser');


Route::get('/home', function () {
    return view('mngr.primarydashboard');
});





 Route::group(['middleware' => ['sessionChecking']], function () {

    //----------------------------Manager Check start here-----------------------------------------------

    Route::get('/manager/logout','ManagerController@logout');

    Route::get('/manager/dashboard',function ()
    {
        return view('mngr.dashboard');
    }); 
    Route::get('/manager/printfinancial','financialPdfPrintManager@index');

    Route::get('/mgruserlist', function () {
        return view('mngr.userlist');
    });
    Route::get('/manager/addclient', function () {
        return view('mngr.addclient');
    });
    Route::post('/manager/addclient','ManagerController@addClient');
    
    Route::get('/manager/clientlist','ManagerController@getAllClient');

    Route::get('/manager/blockclient/{id}','ManagerController@blockDetails');

   

    Route::post('manager/blockclient/{id}','ManagerController@blockClient');
    
    Route::get('/manager/addemployee', function () {
        return view('mngr.addemployee');
    });
    Route::post('/manager/addemployee','ManagerController@addEmployee');
    Route::get('/manager/application','ManagerController@getAllReq');
    Route::get('/manager/employee','ManagerController@getAllEmployee');

    
    Route::get('/manager/viewreport','ManagerController@getReport');

   
    
    Route::get('/manager/transactions','ManagerController@getAllTrans');
    Route::get('/manager/employee/salary','ManagerController@getAllSalary');
    Route::get('/manager/employee/reportingtime','ManagerController@getReportingTime');
    Route::get('/manager/clients','clientlistpdfproducer@index');

    Route::get('/manager/financial','ManagerController@getFinancial');

    Route::get('/manager/deal', function () {
        return view('mngr.deal');
    });
    
    Route::post('/manager/deal','ManagerController@addDeal');

    Route::get('/manager/currency', function () {
        return view('mngr.currency');
    });
    
    Route::get('/manager/report', function () {
        return view('mngr.report');
    });
    Route::get('/manager/officials', function () {
        return view('mngr.officials');
    });
    
    Route::get('/manager/meeting/add', function () {
        return view('mngr.meeting.addmeeting');
    });
    Route::post('/manager/meeting/add','ManagerController@addMeeting');

    Route::get('/manager/meeting/list','ManagerController@getAllMeeting');
    Route::get('/manager/dashboard/profile','ManagerController@getProfile');

    Route::get('/manager/bug/add', function () {
        return view('mngr.bug.addBugReport');
    });
    Route::post('/manager/bug/add','ManagerController@addBugReport');


    Route::get('/seminar', function () {
        return view('mngr.seminar');
    });
    //-------------------------Manager check Ends Here--------------------------------------
});

