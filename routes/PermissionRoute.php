
<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PermissionController;


//permission routes

Route::get('permissions', [PermissionController::class, 'index'])->name('permissions.index')->middleware('permission:permissions.index');
Route::get('permissions/create', [PermissionController::class, 'create'])->name('permissions.create')->middleware('permission:permissions.create');
Route::post('permissions', [PermissionController::class, 'store'])->name('permissions.store')->middleware('permission:permissions.create');
Route::get('permissions/{permission}/edit', [PermissionController::class, 'edit'])->name('permissions.edit')->middleware('permission:permissions.edit');
Route::put('permissions/{permission}', [PermissionController::class, 'update'])->name('permissions.update')->middleware('permission:permissions.edit');
Route::get('permissions/{permission}', [PermissionController::class, 'show'])->name('permissions.show')->middleware('permission:permissions.show');
Route::delete('permissions/{permission}', [PermissionController::class, 'destroy'])->name('permissions.destroy')->middleware('permission:permissions.delete');
Route::delete('permissions/delete/{permission}', [PermissionController::class, 'delete'])->name('permissions.delete')->middleware('permission:permissions.delete');
Route::get('permissions/restore/{permission}', [PermissionController::class, 'restore'])->name('permissions.restore')->middleware('permission:permissions.delete');