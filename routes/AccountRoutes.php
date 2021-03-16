
<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;


//account routes

Route::get('accounts', [AccountController::class, 'index'])->name('accounts.index')->middleware('permission:accounts.index');
Route::get('accounts/create', [AccountController::class, 'create'])->name('accounts.create')->middleware('permission:accounts.create');
Route::post('accounts', [AccountController::class, 'store'])->name('accounts.store')->middleware('permission:accounts.create');
Route::get('accounts/{account}/edit', [AccountController::class, 'edit'])->name('accounts.edit')->middleware('permission:accounts.edit');
Route::put('accounts/{account}', [AccountController::class, 'update'])->name('accounts.update')->middleware('permission:accounts.edit');
Route::get('accounts/{account}', [AccountController::class, 'show'])->name('accounts.show')->middleware('permission:accounts.show');
Route::delete('accounts/{account}', [AccountController::class, 'destroy'])->name('accounts.destroy')->middleware('permission:accounts.delete');
Route::delete('accounts/delete/{account}', [AccountController::class, 'delete'])->name('accounts.delete')->middleware('permission:accounts.delete');
Route::get('accounts/restore/{account}', [AccountController::class, 'restore'])->name('accounts.restore')->middleware('permission:accounts.delete');