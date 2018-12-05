<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientForm extends Model
{
    protected $table = 'client_forms';

    protected $fillable = ['type_habitation', 'type_chauffage', 'isolation_garage', 'isolation_caves', 'surface', 'code_postal', 'civilite', 'type_bail,', 'nom', 'telephone',
    ];

    public function dateFormatted(){
        $format = 'd-m-Y';
        $format = $format . ' ' . 'h:i';
        return $this->created_at->format($format);
    }
}
