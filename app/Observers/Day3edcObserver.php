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
            ->where('total', '>', $day3edc->total)
            ->count() + 1;

        // Hitung VP berdasarkan peringkat
        $day3edc->vp = ($rank <= 3) ? 4 - $rank : 0;
        $day3edc->save();
    }

    public function updated(day3edc $day3edc): void
    {
        $this->recalculateVpForRondeAndSesi($day3edc->ronde);
    }

    public function deleted(day3edc $day3edc): void
    {
        $this->recalculateVpForRondeAndSesi($day3edc->ronde);
    }

    private function recalculateVpForRondeAndSesi($ronde)
    {
        $data = day3edc::where('ronde', $ronde)
                       ->orderBy('total', 'desc')
                       ->get();

        $data->each(function ($item, $key) {
            $item->vp = ($key < 3) ? 3 - $key : 0;
            $item->save();
        });
    }
}
