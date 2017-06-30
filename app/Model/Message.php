<?php
/**
 * Created by PhpStorm.
 * User: TinSky
 * Date: 2017/6/28
 * Time: 20:03
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable =[
        'title','type_id','content','remarks','media_id','admin_id','status_id'
    ];

    public function type()
    {
        return $this->hasOne('App\Model\MessageStatus');
    }

    public function status()
    {
        return $this->hasOne('App\Model\MessageType');
    }

    public function media()
    {
        return $this->hasOne('App\Model\Media');
    }

    public function user()
    {
        return $this->hasOne('App\Admin');
    }
}