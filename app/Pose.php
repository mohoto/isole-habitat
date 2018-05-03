<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pose extends Model
{
    protected $table = 'poses';

    public function societe_client(){
        return $this->belongsTo(SocieteClient::class);
    }
}
