<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charge2 extends Model
{
    protected $fillable =[
        'amount','description','currency','source','user_id','o_id','propertyname','username'
    ];

    public function owners()
    {
        return $this->belongsTo('App\owner');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }
}
