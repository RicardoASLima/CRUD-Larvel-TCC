<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelTcc extends Model
{
    //use HasFactory;
    protected $table='book';
    protected $fillable=['title', 'id_user', 'pages', 'price'];

    public function relUsers() {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }
}
