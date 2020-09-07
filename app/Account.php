<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
    public function customer() {
        return $this->hasOne("App\Customer", "account_id", "id");
    }
}
