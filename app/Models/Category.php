<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['name', 'description', 'visible', 'state'];

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class, 'category_id');
    }

    public function blogs()
    {
        return $this->hasMany(Blogs::class, 'category_id');
    }
}
