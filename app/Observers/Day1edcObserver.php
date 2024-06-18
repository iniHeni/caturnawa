<?php

namespace App\Observers;

use App\Models\day1edc;
use Illuminate\Support\Facades\DB;

class Day1edcObserver

{
    public function created(day1edc $day1edc): void
    {
        // Hitung peringkat data yang baru ditambahkan
        $rank = DB::table('day1edcs')
            ->where('ronde', $day1edc->ronde)
            ->where('sesi', $day1edc->sesi)
            ->where('total', '>', $day1edc->total)
            ->count() + 1;

        // Hitung VP berdasarkan peringkat
        $day1edc->vp = ($rank <= 3) ? 4 - $rank : 0;
        $day1edc->save();
    }

    public function updated(day1edc $day1edc): void
    {
        $this->recalculateVpForRondeAndSesi($day1edc->ronde, $day1edc->sesi);
    }

    public function deleted(day1edc $day1edc): void
    {
        $this->recalculateVpForRondeAndSesi($day1edc->ronde, $day1edc->sesi);
    }

    private function recalculateVpForRondeAndSesi($ronde, $sesi)
    {
        $data = day1edc::where('ronde', $ronde)
                       ->where('sesi', $sesi)
                       ->orderBy('total', 'desc')
                       ->get();

        $data->each(function ($item, $key) {
            $item->vp = ($key < 3) ? 3 - $key : 0;
            $item->save();
        });
    }
}
