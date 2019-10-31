<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    public function parent()
    {
        return $this->belongsTo('App\Family', 'parent_id')->where('parent_id', 0)->with('parent');
    }

    public function children()
    {
        return $this->hasMany('App\Family', 'parent_id')->with('children');
    }
}
