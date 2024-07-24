<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'url_image', 'name_image', 'status', 'visible', 'link', 'extracto', 'name_beneficio1','description_beneficio1', 'name_beneficio2', 'description_beneficio2', 'name_beneficio3', 'description_beneficio3', 'name_beneficio4', 'description_beneficio4'];
}