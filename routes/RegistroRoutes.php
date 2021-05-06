
<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistroController;


//registro routes

Route::get('registros', [RegistroController::class, 'index'])->name('registros.index')->middleware('permission:registros.index');
Route::get('registros/create', [RegistroController::class, 'create'])->name('registros.create')->middleware('permission:registros.create');
Route::post('registros', [RegistroController::class, 'store'])->name('registros.store')->middleware('permission:registros.create');
Route::get('registros/{registro}/edit', [RegistroController::class, 'edit'])->name('registros.edit')->middleware('permission:registros.edit');
Route::put('registros/{registro}', [RegistroController::class, 'update'])->name('registros.update')->middleware('permission:registros.edit');
Route::get('registros/{registro}', [RegistroController::class, 'show'])->name('registros.show')->middleware('permission:registros.show');
Route::delete('registros/{registro}', [RegistroController::class, 'destroy'])->name('registros.destroy')->middleware('permission:registros.delete');
Route::delete('registros/delete/{registro}', [RegistroController::class, 'delete'])->name('registros.delete')->middleware('permission:registros.delete');
Route::get('registros/restore/{registro}', [RegistroController::class, 'restore'])->name('registros.restore')->middleware('permission:registros.delete');