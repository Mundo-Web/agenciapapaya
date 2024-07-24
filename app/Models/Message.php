<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'last_name' ,'full_name','document','job','business','total_personal', 'email', 'cellphone', 'source', 'address', 'total', 'garantie', 'service_product', 'message', 'client_width','client_height','client_latitude',
    'client_longitude', 'client_system', 'ip', 'device', 'is_read','comunication', 'status'];


}