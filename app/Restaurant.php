<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'restaurants';

    public $incrementing = false;

    /**
     * Champs autorisés à l'édition.
     *
     * @var array
     */
    protected $fillable = ['name'];

    // accès aux horaires du restaurant via son id
    public function horaires()
    {
        return $this->hasMany('App\Horaire', 'restaurants_id');
    }

}
