<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectEvent extends Model
{
    public function responsible()
    {
        return $this->belongsTo(User::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function shift()
    {
        return $this->belongsTo(Shift::class);
    }
}
