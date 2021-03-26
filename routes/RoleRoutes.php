
<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;


//role routes

Route::get('roles', [RoleController::class, 'index'])->name('roles.index')->middleware('permission:roles.index');
Route::get('roles/create', [RoleController::class, 'create'])->name('roles.create')->middleware('permission:roles.create');
Route::post('roles', [RoleController::class, 'store'])->name('roles.store')->middleware('permission:roles.create');
Route::get('roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit')->middleware('permission:roles.edit');
Route::put('roles/{role}', [RoleController::class, 'update'])->name('roles.update')->middleware('permission:roles.edit');
Route::get('roles/{role}', [RoleController::class, 'show'])->name('roles.show')->middleware('permission:roles.show');
Route::delete('roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy')->middleware('permission:roles.delete');
Route::delete('roles/delete/{role}', [RoleController::class, 'delete'])->name('roles.delete')->middleware('permission:roles.delete');
Route::get('roles/restore/{role}', [RoleController::class, 'restore'])->name('roles.restore')->middleware('permission:roles.delete');