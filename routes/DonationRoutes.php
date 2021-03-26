
<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DonationController;


//donation routes
Route::get('monitor', [DonationController::class, 'monitor'])->name('monitor');

Route::get('donations', [DonationController::class, 'index'])->name('donations.index')->middleware('permission:donations.index');
Route::get('donations/create', [DonationController::class, 'create'])->name('donations.create')->middleware('permission:donations.create');
Route::post('donations', [DonationController::class, 'store'])->name('donations.store')->middleware('permission:donations.create');
Route::get('donations/{donation}/edit', [DonationController::class, 'edit'])->name('donations.edit')->middleware('permission:donations.edit');
Route::put('donations/{donation}', [DonationController::class, 'update'])->name('donations.update')->middleware('permission:donations.edit');
Route::get('donations/{donation}', [DonationController::class, 'show'])->name('donations.show')->middleware('permission:donations.show');
Route::delete('donations/{donation}', [DonationController::class, 'destroy'])->name('donations.destroy')->middleware('permission:donations.delete');
Route::delete('donations/delete/{donation}', [DonationController::class, 'delete'])->name('donations.delete')->middleware('permission:donations.delete');
Route::get('donations/restore/{donation}', [DonationController::class, 'restore'])->name('donations.restore')->middleware('permission:donations.delete');