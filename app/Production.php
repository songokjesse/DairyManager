<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'productions';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['amount', 'animal_id', 'user_id','MilkingSession'];

    public function animal()
    {
        return $this->belongsTo('App\Animal');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
