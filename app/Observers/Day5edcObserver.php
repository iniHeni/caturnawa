<?php

namespace App\Observers;

use App\Models\day5edc;
use Illuminate\Support\Facades\DB;

class Day5edcObserver
{
    public function created(day5edc $day5edc): void
    {
        // Hitung peringkat data yang baru ditambahkan
        $rank = DB::table('day5edcs')
            ->where('ronde', $day5edc->ronde)
            ->where('total', '>', $day5edc->total)
            ->count() + 1;

        // Hitung VP berdasarkan peringkat
        $day5edc->vp = ($rank <= 3) ? 4 - $rank : 0;
        $day5edc->save();
    }

    public function updated(day5edc $day5edc): void
    {
        $this->recalculateVpForRondeAndSesi($day5edc->ronde);
    }

    public function deleted(day5edc $day5edc): void
    {
        $this->recalculateVpForRondeAndSesi($day5edc->ronde);
    }

    private function recalculateVpForRondeAndSesi($ronde)
    {
        $data = day5edc::where('ronde', $ronde)
                       ->orderBy('total', 'desc')
                       ->get();

        $data->each(function ($item, $key) {
            $item->vp = ($key < 3) ? 3 - $key : 0;
            $item->save();
        });
    }
}
