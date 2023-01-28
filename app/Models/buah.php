<?php

namespace App\Models;

use Illuminate\Databae\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class buah extends Eloquent
{

    protected $connection = 'mongodb';
    protected $collection = 'buah';

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

        'nama', 'jenis', 'berat', 'harga'

    ];
}
