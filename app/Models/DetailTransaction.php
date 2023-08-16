<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    use HasFactory;

    protected $table = 'transaction_detail';

    protected $fillable = [
        'id',
        'trans_id',
        'room_id',
        'days',
        'sub_total_room',
        'extra_charge',
    ];
}
