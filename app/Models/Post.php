<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'body',
        'categoly_id'
    ];
    
    public function categoly()
    {
        return $this->belongsTo(Categoly::class, 'categoly_id');
    }

    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('categoly')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}