<?php


namespace App;


class TimeFormatHelper
{
    public static function formatStringToSqlDate($stringDate) {
        //ex stingDate: 02/09/2020 day: 02 month: 09 year: 2020
        $day =  substr($stringDate, 0, 2); // -> 02
        $month = substr($stringDate, 3, 2); // ->09
        $year = substr($stringDate, 6); //2020

        $date = date_create($year . "/" . $month . "/" . $day);
        try {
            $dateFormatted = date_format($date,"Y-m-d H:i:s");
        } catch (\Exception $e){
            return null;
        }
        return $dateFormatted;
    }
}
