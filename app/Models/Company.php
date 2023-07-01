<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//<a href='/posts/ccreate/{{$type->id}}'>+Folder</a>
class Company extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function sheets()   
    {
        return $this->hasMany(Sheet::class);  
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('type')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    public function getByCategory(int $limit_count = 5)
    {
        return $this->sheets()->with('company')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    protected $fillable = [
        'title',
        'type_id'
    ];
}
