<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vouchers extends Model
{
    use HasFactory;

    protected $fillable = [
        'voucherCode',
        'voucherDesc',
        'quantity',
        'discountRate',
        'startDate',
        'endDate',
        'status',
    ];
}
