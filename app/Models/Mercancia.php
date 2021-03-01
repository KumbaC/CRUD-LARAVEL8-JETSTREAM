<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mercancia extends Model
{
    use HasFactory;

    public function getRouteKeyName(){
        return 'slug';
     }

    //Relación uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
  //$user->load('mercancias');
