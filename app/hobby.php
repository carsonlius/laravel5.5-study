<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class hobby extends Authenticatable
{
    protected $fillable =['hobby', 'user_id'];

    public function  archive()
    {
        $this->date_time = date('Y-m-d');
    }

    public function hobby()
    {
        return $this->hobby;
    }

}
