<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sheet extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'title',
        'text',
        'category_id',
        'company_id',
        'favo'
    ];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    function getPaginateByLimit(int $limit_count = 10)
    {
        return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
