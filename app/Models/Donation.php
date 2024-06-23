<?php

namespace App\Models;

use Carbon\Carbon;
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

    public function getAmountRupiahAttribute()
    {
        return 'Rp '.number_format($this->amount);
    }

    public function getDateTimeAttribute()
    {
        $date = Carbon::parse($this->created_at)->isoFormat('dddd, D MMMM Y');
        $time = Carbon::parse($this->time)->format('H:i');

        return $date.' | '.$time.' WIB';
    }
}
