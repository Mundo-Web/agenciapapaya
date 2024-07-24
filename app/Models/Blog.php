<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [ 'category_id', 'title', 'description', 'url_image', 'name_image', 'status', 'visible'];

    
    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}

