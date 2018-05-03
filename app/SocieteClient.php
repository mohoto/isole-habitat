<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocieteClient extends Model
{
    protected $table = 'societe_clients';

    public function PoseSocieteClient()
    {
        return $this->hasMany(Pose::class);
    }
}
