<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiment_values_con extends Model
{
    protected $table = 'experiments_values_con';

    public function value()
    {
        return $this->belongsTo('App\Value');
    }
}
