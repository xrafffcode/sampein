<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    protected $fillable = [
        'people_id', 'content', 'status'
    ];

    public function people()
    {
        return $this->belongsTo(People::class);
    }
}
