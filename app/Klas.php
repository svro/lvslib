<?php namespace Eduweb2\lvslib;


use Illuminate\Database\Eloquent\Model;
use Eduweb2\lvslib\Leerling;


class Klas extends Model
{
    protected $table = 'klas';

    public function leerlingen()
    {
        return $this->hasMany('Eduweb2\lvslib\Leerling');
    }
}
