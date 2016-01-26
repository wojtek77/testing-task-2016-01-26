<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use \Venturecraft\Revisionable\RevisionableTrait;
    
    protected static function boot()
    {
        return parent::boot();
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vehicles';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'registration_number', 'engine_capacity', 'mileage_counter', 'last_oil_change'];

}
