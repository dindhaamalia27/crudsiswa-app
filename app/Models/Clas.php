<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
    protected $table = "Clases";

    protected $guarded =[];

    public function users (){
        return $this->hasMany(User::clases, 'clas_id');
    }
}
