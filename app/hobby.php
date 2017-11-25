<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hobby extends Model
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
