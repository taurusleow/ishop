<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    /**
     * 
     * @author Leow Soon Kuan
     *
     */

    use HasFactory;

    protected $fillable = [
        'id', 'customerID', 'customerEmail', 'balance', 'updated_at', 'created_at'
    ];
}
