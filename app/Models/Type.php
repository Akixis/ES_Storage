<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }
    public function companies()   
    {
        return $this->hasMany(Company::class);  
    }
    protected $fillable = [
        'industry_id'
    ];
    function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('industry')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
