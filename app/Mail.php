<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{

	protected $table = 'mails';


    public function type_mail()
    {
    	return $this->belongsTo('App\Type_mail', 'mail_typeid');
    }
      public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
      public function users()
    {
    	return $this->belongsTo('App\Mail');
    }
}
