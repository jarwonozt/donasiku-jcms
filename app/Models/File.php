<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class File extends Model
{
    use HasFactory, Searchable;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'upload_by', 'id');
    }

    public function toSearchableArray()
    {
        return [
            'name' => $this->name
        ];
    }
}
