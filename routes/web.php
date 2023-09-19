

<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;


// use App\Http\Controllers\ProjectController;

//  use App\Http\Controllers\MemberController;
//  use App\Http\Controllers\DonationController;
// use App\Http\Controllers\AccountController;
// use App\Http\Controllers\InvestmentController;
// use App\Http\Controllers\TicketController;


Route::view('/rifa', '/webpage/rifa');

Route::view('/en', '/webpage/en');
// Route::get('/', function () {
//     return view('webpage.welcome');
// });

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

Route::get('/mitest', [ProjectController::class, 'mitest'])->name('mitest');

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');




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
   require __DIR__ . '/UserRoutes.php';
   require __DIR__ . '/RoleRoutes.php';
   require __DIR__ . '/PermissionRoute.php';
   require __DIR__ . '/RegistroRoutes.php';
   


});



Route::get('/getDataDashboard', [ProjectController::class, 'getDataDashboard'])->name('getDataDashboard');

Route::get('/getDataDashboardById', [ProjectController::class, 'getDataDashboardById'])->name('getDataDashboardById');

Route::view('charts.html', '/charts');


Route::get('/bk', function () {
    return back();
});


Route::get('/db', [ProjectController::class, 'index'])->name('index');
