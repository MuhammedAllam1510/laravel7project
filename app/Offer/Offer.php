<?php

namespace App\Offer;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
        protected $fillable = ['FirstName_ar', 'FirstName_en' , 'LastName_ar' , 'LastName_en' , 'photo'];
        protected $hidden = ['created_at', 'updated_at'];

}
