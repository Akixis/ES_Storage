<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sheet extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'text',
    ];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
