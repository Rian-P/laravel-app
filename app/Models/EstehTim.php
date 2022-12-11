<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstehTim extends Model
{
    use HasFactory;

    protected $table = 'esteh_tim';
    protected $primaryKey = 'id';

    protected $fillable = ['nama', 'jabatan', 'pendidikan','image'];

}
