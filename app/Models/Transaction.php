<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transaction';

    protected $fillable = [
        'id',
        'trans_code',
        'trans_date',
        'cust_name',
        'total_room_price',
        'total_extra_charge',
        'final_total',
    ];
}
