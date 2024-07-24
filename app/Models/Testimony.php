<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    use HasFactory;
    protected $fillable=['name', 'email', 'ocupation' ,'testimonie', 'url_image_antes' , 'name_image_antes' , 'url_image_posterior', 'name_image_posterior' ,'visible','status'];
}