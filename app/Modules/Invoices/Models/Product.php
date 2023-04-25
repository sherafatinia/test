<?php

namespace App\Modules\Invoices\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasUuids;
    protected $primaryKey = 'id';
    public $incrementing = false;
}
