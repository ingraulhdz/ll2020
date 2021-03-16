
<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TicketController;


//ticket routes

Route::get('tickets', [TicketController::class, 'index'])->name('tickets.index')->middleware('permission:tickets.index');
Route::get('tickets/create', [TicketController::class, 'create'])->name('tickets.create')->middleware('permission:tickets.create');
Route::post('tickets', [TicketController::class, 'store'])->name('tickets.store')->middleware('permission:tickets.create');
Route::get('tickets/{ticket}/edit', [TicketController::class, 'edit'])->name('tickets.edit')->middleware('permission:tickets.edit');
Route::put('tickets/{ticket}', [TicketController::class, 'update'])->name('tickets.update')->middleware('permission:tickets.edit');
Route::get('tickets/{ticket}', [TicketController::class, 'show'])->name('tickets.show')->middleware('permission:tickets.show');
Route::delete('tickets/{ticket}', [TicketController::class, 'destroy'])->name('tickets.destroy')->middleware('permission:tickets.delete');
Route::delete('tickets/delete/{ticket}', [TicketController::class, 'delete'])->name('tickets.delete')->middleware('permission:tickets.delete');
Route::get('tickets/restore/{ticket}', [TicketController::class, 'restore'])->name('tickets.restore')->middleware('permission:tickets.delete');