
<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryExpenseController;


//categoryexpense routes

Route::get('categoryexpenses', [CategoryExpenseController::class, 'index'])->name('categoryexpenses.index')->middleware('permission:categoryexpenses.index');
Route::get('categoryexpenses/create', [CategoryExpenseController::class, 'create'])->name('categoryexpenses.create')->middleware('permission:categoryexpenses.create');
Route::post('categoryexpenses', [CategoryExpenseController::class, 'store'])->name('categoryexpenses.store')->middleware('permission:categoryexpenses.create');
Route::get('categoryexpenses/{categoryexpense}/edit', [CategoryExpenseController::class, 'edit'])->name('categoryexpenses.edit')->middleware('permission:categoryexpenses.edit');
Route::put('categoryexpenses/{categoryexpense}', [CategoryExpenseController::class, 'update'])->name('categoryexpenses.update')->middleware('permission:categoryexpenses.edit');
Route::get('categoryexpenses/{categoryexpense}', [CategoryExpenseController::class, 'show'])->name('categoryexpenses.show')->middleware('permission:categoryexpenses.show');
Route::delete('categoryexpenses/{categoryexpense}', [CategoryExpenseController::class, 'destroy'])->name('categoryexpenses.destroy')->middleware('permission:categoryexpenses.delete');
Route::delete('categoryexpenses/delete/{categoryexpense}', [CategoryExpenseController::class, 'delete'])->name('categoryexpenses.delete')->middleware('permission:categoryexpenses.delete');
Route::get('categoryexpenses/restore/{categoryexpense}', [CategoryExpenseController::class, 'restore'])->name('categoryexpenses.restore')->middleware('permission:categoryexpenses.delete');