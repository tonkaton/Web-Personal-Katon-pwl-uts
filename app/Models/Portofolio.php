<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'p_name',
        'p_title',
        'p_description',
        'p_img',
    ];
}
