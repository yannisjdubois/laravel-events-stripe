<?php

namespace App;

use App\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    //
    use HasFactory;

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }





}
