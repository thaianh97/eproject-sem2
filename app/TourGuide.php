<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourGuide extends Model
{
    //
    public function tourGuideAreas() {
        return $this->hasMany("App\TourGuideArea", "guide_id", "id");
    }
    public function transactionDetails() {
        return $this->hasMany("App\TransactionDetail", "guide_id", "id");
    }
    private static $cloudinary_link = 'https://res.cloudinary.com/dnby4zyda/image/upload/';
    private static $cloudinary_version = "v1598774970/";

    public function getSmallPhotoAttribute()
    {
        if ($this->avatar == null || strlen($this->avatar) == 0) {
            return 'https://thanhtra.com.vn/image/images/noimages.png';
        }
        $photo = explode(',', $this->avatar);
        return self::$cloudinary_link . 'w_100,c_scale/' . self::$cloudinary_version .$photo[0] . '.jpg';
    }

    public function getLargePhotoAttribute()
    {
        if ($this->avatar == null || strlen($this->avatar) == 0) {
            return 'https://thanhtra.com.vn/image/images/noimages.png';
        }
        $photo = explode(',', $this->avatar);
        return self::$cloudinary_link . $photo[0] . '.jpg';
    }

    public function getSmallPhotosAttribute()
    {
        if ($this->avatar == null || strlen($this->avatar) == 0) {
            return 'https://thanhtra.com.vn/image/images/noimages.png';
        }
        $list_photos = array();
        $photos = explode(',', $this->avatar);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_photos, self::$cloudinary_link . $p . '.jpg');
            }
        }
        return $list_photos;
    }

    public function getLargePhotosAttribute()
    {
        if ($this->avatar == null || strlen($this->avatar) == 0) {
            return 'https://thanhtra.com.vn/image/images/noimages.png';
        }
        $list_photos = array();
        $photos = explode(',', $this->avatar);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_photos, self::$cloudinary_link . $p . '.jpg');
            }
        }
        return $list_photos;
    }

    public function getPreviewPhotosAttribute()
    {
        if ($this->avatar == null || strlen($this->avatar) == 0) {
            return 'https://thanhtra.com.vn/image/images/noimages.png';
        }
        $list_photos = array();
        $photos = explode(',', $this->avatar);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_photos, self::$cloudinary_link . 'c_limit,h_60,w_90/' . $p . '.jpg');
            }
        }
        return $list_photos;
    }

    public function getPhotoIdsAttribute()
    {
        if ($this->avatar == null || strlen($this->avatar) == 0) {
            return 'https://thanhtra.com.vn/image/images/noimages.png';
        }
        $list_ids = array();
        $photos = explode(',', $this->avatar);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_ids, $p);
            }
        }
        return $list_ids;
    }
}
