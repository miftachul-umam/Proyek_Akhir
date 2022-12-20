<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswas';    
    
    protected $dates = [
    
    ];
    protected $primaryKey = "nim";
    public $timestamps = false;
    
    protected $appends = ['resource_url'];
    protected $KeyType = "string";
    public $incrementing = false;

    protected $fillable=["nim", "nama", "umur", "alamat", "kota", "jurusan", "kelas", "created_at", "update_at"];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/mahasiswas/'.$this->getKey());
    }
}
