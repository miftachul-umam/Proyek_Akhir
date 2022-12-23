<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosens';    
    
    protected $dates = [
    
    ];
    protected $primaryKey = "nidn";
    public $timestamps = false;
    
    protected $appends = ['resource_url'];
    protected $KeyType = "string";
    public $incrementing = false;

    protected $fillable=["nidn", "nama_dosen", "alamat", "kota", "matkul_yang_diampu","jurusan", "created_at", "update_at"];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/dosens/'.$this->getKey());
    }
}
