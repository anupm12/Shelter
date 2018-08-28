<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charge2 extends Model
{
    protected $fillable =[
        'amount','description','currency','source'
    ];
}
