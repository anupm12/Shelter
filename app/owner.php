<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable =[
        'firstname','lastname','image1','image2','image3','address1','address2','area','city','state','zip','propertyname','rent','advance','type','for','description','user_id','isowner'
    ];

    public function getFeaturedAttribute($image1,$image2,$image3){
        return asset($image1,$image2,$image3);
    }

    public function user()
    {
       return $this->belongsTo('App\User');
    }

    public function charges()
    {
        return $this->belongsTo('App\Charge2');
    }
}
