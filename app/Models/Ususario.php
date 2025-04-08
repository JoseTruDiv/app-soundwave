<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ususario extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'email_user';
    public $timestamps = true;
    protected $fillable = ['name_user','email_user','password_user'];
    protected $guarded = ['id_user'];
}
