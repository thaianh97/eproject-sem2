<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    public function tourGuides() {
        return $this->belongsTo("App\TourGuide", "guide_id", "id");
    }

    public function transaction() {
        return $this->belongsTo("App\Transaction", "transaction_id", "id");
    }
}
