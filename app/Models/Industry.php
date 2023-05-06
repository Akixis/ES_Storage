<?php

namespace App\Models;
use App\Models\Industry;
use App\Models\Type;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;
    public function getByCategory(int $limit_count = 5)
    {
        return $this->types()->with('industry')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    public function types()   
    {
        return $this->hasMany(Type::class);  
    }
    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }
}
