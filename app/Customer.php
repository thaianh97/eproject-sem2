<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function account() {
        return $this->belongsTo("App\Account", "account_id", "id");
    }

    public function transactions() {
        return $this->hasMany("App\Transaction", "", "id");
    }

}
