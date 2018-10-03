<?php

namespace App;

use App\Houses;
use Illuminate\Database\Eloquent\Model;

class Tenants extends Model
{
    //
    public function house(){
      return $this->belongsTo(Houses::class);
    }
}
