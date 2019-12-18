<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    // An episode is related to a serie
    public function serie() {
        return $this->belongsTo("App\Serie", "serie_id");
    }
    function seen() {
        return $this->belongsToMany("App\User", 'seen');
    }


}
