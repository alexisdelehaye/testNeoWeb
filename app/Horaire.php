<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horaire extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'horaires';

    public $incrementing = false;

    /**
     * Champs autorisés à l'édition.
     *
     * @var array
     */
    protected $fillable = ['Jour', 'Crénaux'];

    // accès au restaurant depuis ces horaires
    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant', 'restaurants_id');
    }


}
