<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Syair extends Model
{

    use HasFactory, Sluggable;
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        // menggunkaan coalition
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nm_pasar', 'like', '%' . $search . '%')
                ->orWhere('datepost', 'like', '%' . $search . '%');
        });
    }

    public function pasaran()
    {
        return $this->belongsTo(Pasaran::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
