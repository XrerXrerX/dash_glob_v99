<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebPromosi extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters) 
    {
        if(isset($filters['search'])) {
            return $query->where('deskripsi', 'like', '%' . $filters['search'] .  '%')
                        ->orWhere('website', 'like', '%' . $filters['search'] .  '%')
                        ->orWhere('website_url', 'like', '%' . $filters['search'] .  '%')
            ;
        }
    }
    
}
