<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tenants;

class Houses extends Model
{
    //
    public function tenant(){
      return $this->belongsTo(Tenants::class);
    }
}
