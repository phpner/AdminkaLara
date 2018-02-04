<?php

namespace Phpner\Adminka\Models;

use Illuminate\Database\Eloquent\Model;

class Rules extends Model
{

    public $timestamps = false;
    public function users()
    {
       return $this->belongsToMany(\Phpner\Adminka\Models\Users::class,
           'users_roles',
           'rule_id',
           'user_id');
    }
}
