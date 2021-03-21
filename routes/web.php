

<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProjectController;


// use App\Http\Controllers\ProjectController;

//  use App\Http\Controllers\MemberController;
//  use App\Http\Controllers\DonationController;
// use App\Http\Controllers\AccountController;
// use App\Http\Controllers\InvestmentController;
// use App\Http\Controllers\TicketController;

Route::get('/', function () {
    return view('webpage.welcome');
});
Route::get('/mitest', [ProjectController::class, 'mitest'])->name('mitest');

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');


Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
Route::resource('permissions', PermissionController::class);
Route::resource('products', ProductController::class);


Route::middleware(['auth'])->group(function () {
   //routes with auth 


   require __DIR__ . '/ProjectRoutes.php';
   require __DIR__ . '/MemberRoutes.php';
   require __DIR__ . '/DonationRoutes.php';
   require __DIR__ . '/ProjectRoutes.php';
   require __DIR__ . '/InvestmentRoutes.php';
   require __DIR__ . '/AccountRoutes.php';
   require __DIR__ . '/TicketRoutes.php';
   require __DIR__ . '/CategoryExpenseRoutes.php';
   require __DIR__ . '/Activity_logRoutes.php';
   


});



Route::get('/getDataDashboard', [ProjectController::class, 'getDataDashboard'])->name('getDataDashboard');

Route::get('/getDataDashboardById', [ProjectController::class, 'getDataDashboardById'])->name('getDataDashboardById');

Route::view('charts.html', '/charts');


Route::get('/bk', function () {
    return back();
});
Route::view('index.html', '/sb-admin/index');
