<?php
namespace App\Modules\Invoices\Http;

use App\Modules\Invoices\Http\Controllers\InvoiceController;
use App\Modules\Invoices\Models\Invoice;
use Illuminate\Support\Facades\Route;

Route::group([], function() {
    Route::get('invoices', [InvoiceController::class, 'index']);
    Route::get('invoices/{id}', [InvoiceController::class, 'show']);
    Route::get('approve/{id}', [InvoiceController::class, 'approve']);
    Route::get('reject/{id}', [InvoiceController::class, 'reject']);
});
