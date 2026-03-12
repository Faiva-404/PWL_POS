<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; //mendefinisikan nama tabel
    protected $primaryKey = 'user_id'; //mendefinisikan primary key
    public $timestamps = false;
    protected $fillable = ['level_id', 'username', 'nama', 'password']; //mendefinisikan field yang dapat diisi
}
