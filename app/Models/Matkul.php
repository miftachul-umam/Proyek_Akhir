<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkuls';    
    
    protected $dates = [
    
    ];
    protected $primaryKey = "kode_matkul";
    public $timestamps = false;
    
    protected $appends = ['resource_url'];
    protected $KeyType = "string";
    public $incrementing = false;

    protected $fillable=["kode_matkul", "matkul", "sks", "dosen_pengampu", "kelas", "hari", "jam", "created_at", "update_at"];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/matkuls/'.$this->getKey());
    }
}
