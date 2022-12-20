<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $appends = ['resource_url'];
    public $incrementing = false;

    protected $fillable = [
        'title', 'start', 'end'
    ];

    public function getResourceUrlAttribute()
    {
        return url('/admin/events/'.$this->getKey());
    }
}
