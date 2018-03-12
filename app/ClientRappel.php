<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientRappel extends Model
{
    protected $table = 'rappelWeb';

    public function dateFormatted(){
        $format = 'd-m-Y';
        $format = $format . ' ' . 'h:i';
        return $this->created_at->format($format);
    }
}
