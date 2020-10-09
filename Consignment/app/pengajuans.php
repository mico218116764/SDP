<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengajuans extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'PENGAJUAN_ID';
    public $incrementing = false;
    protected $keyType = 'string';
}
