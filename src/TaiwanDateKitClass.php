<?php

namespace Fan\Transfer;

use Fan\Transfer\TransferException;
use Illuminate\Support\Carbon;

class TaiwanDateKitClass
{
    public function TransToTW(string $date)
    {
        try {
            $carbonDate = Carbon::create($date);
            $minguoYear = $carbonDate->year - 1911;
            return "{$minguoYear}-" . $carbonDate->format('m-d');
        } catch (\Throwable $th) {
            throw new TransferException();
        }
    }

    public function TransToAD($date)
    {
        try {
            list($minguoYear, $month, $day) = explode('-', $date);
            $gregorianYear = $minguoYear + 1911;
            $gregorianDate = Carbon::createFromDate($gregorianYear, $month, $day);

            return $gregorianDate->toDateString();
        } catch (\Throwable $th) {
            throw new TransferException();
        }
    }
}
