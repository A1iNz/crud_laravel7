<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    public $timestamps = false;
    protected $fillable =['id','nama','kls','no_abs','tgl'];
}
