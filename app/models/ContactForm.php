<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $fillable=[
        'message',
        'name',
        'email',
        'subject'
    ];

    public function payments(){
        return $this->hasMany('App.models.Payment');
    }
}
