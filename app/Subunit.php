<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subunit extends Model
{
    protected $table = "subunit";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','unit_id','namasubunit'];
    
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }


 
}
