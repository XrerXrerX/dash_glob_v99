<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paito_pasaran extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['search'])) {
            return $query->where('pasaran_nama', 'like', '%' . $filters['search'] .  '%')
                ->orWhere('pasaran_text', 'like', '%' . $filters['search'] .  '%');
        }
    }
}
