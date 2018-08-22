<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable =[
        'firstname','lastname','filename[]','address1','address2','area','city','state','zip','propertyname','rent','advance','type','for','description'
    ];

    public function getFeaturedAttribute($image1,$image2,$image3){
        return asset($image1,$image2,$image3);
    }
}
