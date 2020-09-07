<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    public function transactionDetails() {
        return $this->hasMany("App\TransactionDetail", "", "id");
    }

    public function customer() {
        return $this->belongsTo("App\Customer", "customer_id", "id");
    }
}
