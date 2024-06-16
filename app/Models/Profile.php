<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable= [
        'web_name','logo','desc_web','email_cont','nohp','instagram','user_id',
    ];
    protected $table = 'profiles';
    protected $primaryKey = 'id_profile';
}