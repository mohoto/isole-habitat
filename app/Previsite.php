<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Previsite extends Model
{
    protected $table = 'previsites';

    public function dateFormatted(){
        $format = 'd-m-Y';
        $format = $format . ' ' . 'h:i';
        return $this->created_at->format($format);
    }
}
