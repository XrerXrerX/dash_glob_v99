<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebTableWebsite extends Model
{
    use HasFactory;
    protected $table = 'data_website';
    public $incrementing = true;
    protected $guarded = ['id'];
}
