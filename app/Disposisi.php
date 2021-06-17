<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    public function mail()
    {
    	return $this->belongsTo('App\Mail', 'mail_id');
    }

    public function type_mail()
    {
    	return $this->belongsTo('App\Type_mail', 'mail_typeid');
    }
    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
}
