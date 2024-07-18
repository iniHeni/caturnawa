<?php

namespace App\Observers;

use App\Models\day3edc;
use Illuminate\Support\Facades\DB;

class Day3edcObserver
{
    public function created(day3edc $day3edc): void
    {
        // Hitung peringkat data yang baru ditambahkan
        $rank = DB::table('day3edcs')
            ->where('ronde', $day3edc->ronde)
            ->where('room',  $day3edc->room)
            ->where('total', '>', $day3edc->total)
            ->count() + 1;

        // Hitung VP berdasarkan peringkat
        $day3edc->vp = ($rank <= 3) ? 3 - $rank : 0;
        $day3edc->save();
    }

    public function updated(day3edc $day3edc): void
    {
        $this->recalculateVpForRondeAndSesi($day3edc->ronde, $day3edc->room);
    }

    public function deleted(day3edc $day3edc): void
    {
        $this->recalculateVpForRondeAndSesi($day3edc->ronde, $day3edc->room);
    }

    private function recalculateVpForRondeAndSesi($ronde, $room)
    {
        $data = day3edc::where('ronde', $ronde)
                        ->where('room', $room)
                       ->orderBy('total', 'desc')
                       ->get();

        $data->each(function ($item, $key) {
            $item->vp = ($key < 3) ? 3 - $key : 0;
            $item->save();
        });
    }
}
