<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class ExampleModel extends Eloquent {
    protected $table = 'vendeg';
    protected $primaryKey = 'vendeg_id';
    public $timestamps = true;
    protected $hidden = ['password'];
    protected $fillable = ['vezeteknev', 'keresztnev', 'email', 'telefon', 'password', 'token'];

    public function VendegInfo()
    {
        return $this->hasOne('VendegInfoModel', 'vendeg_id');
    }

    public function VendegCelok()
    {
        return $this->hasMany('VendegCelokModel', 'vendeg_id');
    }

    public function VendegAjanlat()
    {
        return $this->hasOne('VendegAjanlatModel', 'vendeg_id');
    }

    public function VendegForma()
    {
        return $this->hasMany('VendegFormaModel', 'vendeg_id');
    }
}