<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\carbon;

class blog extends Model
{
    use HasFactory;

    protected $table = 'blog';
    protected $fillable = [
        'image',
        'date',
        'jobs',
        'title',
        'description',
        'reading',
    ];

    public function getFromDateAttribute() {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('d-m-Y');
    }
}
