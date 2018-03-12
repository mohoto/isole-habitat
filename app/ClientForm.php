<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientForm extends Model
{
    protected $table = 'client_forms';

    public function dateFormatted(){
        $format = 'd-m-Y';
        $format = $format . ' ' . 'h:i';
        return $this->created_at->format($format);
    }
}
