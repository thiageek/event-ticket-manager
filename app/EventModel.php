<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    protected $fillable = ['name', 'date', 'place', 'description', 'finish', 'tickets', 'price'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'event';
}
