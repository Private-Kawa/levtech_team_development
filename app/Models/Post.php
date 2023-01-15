<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'comment',
        'user_id',
        'handmake',
        'price',
        'age',
        'relationship',
        'image_url', //追加
    ];

    public function getPaginateByLimit(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
   
    
  public function users(){
       return $this->belongsToMany(User::class);
    }  
}
