<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $fillable = ['start_hour',
    'start_city',
    'start_address',
    'finish_hour',
    'finish_city',
    'finish_address',
    'price',
    'available_seats',
    'preferences',
    'driver',
    'id_driver'];
}
