<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //use HasApiTokens, HasFactory, Notifiable;
    protected $connection = 'mysql_other';
}
