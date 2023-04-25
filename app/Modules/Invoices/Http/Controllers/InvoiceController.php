<?php

namespace App\Modules\Invoices\Http\Controllers;

use App\Infrastructure\Controller;
use App\Modules\Invoices\Models\Invoice;

class InvoiceController extends Controller {
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoices::index')->with('invoices', $invoices);
    }

    public function show($id)
    {
        $invoice = Invoice::with('company', 'products')->where('id', intval($id))->first();
        return view('invoices::show')->with('invoice', $invoice);
    }

    public function approve($id)
    {
        Invoice::where('id', $id)->update([
            'status' => 'approved'
        ]);
        return redirect()->back();
    }

    public function reject($id)
    {
        Invoice::where('id', $id)->update([
            'status' => 'rejected'
        ]);
        return redirect()->back();
    }
}
