<?php namespace Eduweb2\lvslib;


use Illuminate\Database\Eloquent\Model;
use Eduweb2\lvslib\Klas;

class Leerling extends Model
{
    protected $table = 'leerling';

    public function klas() {
        return $this->belongsTo("Eduweb2\lvslib\Klas");
    }
}
