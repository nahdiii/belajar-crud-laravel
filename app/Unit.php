<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = "unit";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','namaunit'];

    public function subunit()
    {
        return $this->hasMany(Subunit::class);
    }
    
}
