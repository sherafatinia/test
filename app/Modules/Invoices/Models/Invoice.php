<?php

namespace App\Modules\Invoices\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasUuids;
    protected $primaryKey = 'id';
    public $incrementing = false;
    public function company() {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    public function products() {
        return $this->belongsToMany(Product::class, 'invoice_product_lines')->withPivot(['quantity']);
    }
}
