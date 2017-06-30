<?php
/**
 * Created by PhpStorm.
 * User: TinSky
 * Date: 2017/6/28
 * Time: 15:10
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'title', 'sort', 'user','status',
    ];
}