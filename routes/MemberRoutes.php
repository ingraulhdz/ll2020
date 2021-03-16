
<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MemberController;


//member routes

Route::get('members', [MemberController::class, 'index'])->name('members.index')->middleware('permission:members.index');
Route::get('members/create', [MemberController::class, 'create'])->name('members.create')->middleware('permission:members.create');
Route::post('members', [MemberController::class, 'store'])->name('members.store')->middleware('permission:members.create');
Route::get('members/{member}/edit', [MemberController::class, 'edit'])->name('members.edit')->middleware('permission:members.edit');
Route::put('members/{member}', [MemberController::class, 'update'])->name('members.update')->middleware('permission:members.edit');
Route::get('members/{member}', [MemberController::class, 'show'])->name('members.show')->middleware('permission:members.show');
Route::delete('members/{member}', [MemberController::class, 'destroy'])->name('members.destroy')->middleware('permission:members.delete');
Route::delete('members/delete/{member}', [MemberController::class, 'delete'])->name('members.delete')->middleware('permission:members.delete');
Route::get('members/restore/{member}', [MemberController::class, 'restore'])->name('members.restore')->middleware('permission:members.delete');