<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'email',
        'amount',
        'objective',
        'note',
        'status',
        'snap_token',
    ];
}
