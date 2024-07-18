<?php

namespace App\Observers;

use App\Models\day2edc;
use Illuminate\Support\Facades\DB;

class Day2edcObserver
{
    public function created(day2edc $day2edc): void
    {
        // Hitung peringkat data yang baru ditambahkan
        $rank = DB::table('day2edcs')
            ->where('ronde', $day2edc->ronde)
            ->where('sesi', $day2edc->sesi)
            ->where('room', $day2edc->room)
            ->where('total', '>', $day2edc->total)
            ->count() + 1;

        // Hitung VP berdasarkan peringkat
        $day2edc->vp = ($rank <= 3) ? 3 - $rank : 0;
        $day2edc->save();
    }

    public function updated(day2edc $day2edc): void
    {
        $this->recalculateVpForRondeAndSesi($day2edc->ronde, $day2edc->sesi, $day2edc->room);
    }

    public function deleted(day2edc $day2edc): void
    {
        $this->recalculateVpForRondeAndSesi($day2edc->ronde, $day2edc->sesi, $day2edc->room);
    }

    private function recalculateVpForRondeAndSesi($ronde, $sesi, $room)
    {
        $data = day2edc::where('ronde', $ronde, $room)
                       ->where('sesi', $sesi)
                       ->where('room', $room)
                       ->orderBy('total', 'desc')
                       ->get();

        $data->each(function ($item, $key) {
            $item->vp = ($key < 3) ? 3 - $key : 0;
            $item->save();
        });
    }
}
