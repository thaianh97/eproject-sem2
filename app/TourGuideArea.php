<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourGuideArea extends Model
{
    //
    public function tourGuides()
    {
        return $this->belongsTo("App\TourGuide", "guide_id", "id");
    }
}
