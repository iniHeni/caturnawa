<?php

namespace App\Observers;

use App\Models\day4edc;
use Illuminate\Support\Facades\DB;

class Day4edcObserver
{
    public function created(day4edc $day4edc): void
    {
        // Hitung peringkat data yang baru ditambahkan
        $rank = DB::table('day4edcs')
            ->where('ronde', $day4edc->ronde)
            ->where('total', '>', $day4edc->total)
            ->count() + 1;

        // Hitung VP berdasarkan peringkat
        $day4edc->vp = ($rank <= 3) ? 4 - $rank : 0;
        $day4edc->save();
    }

    public function updated(day4edc $day4edc): void
    {
        $this->recalculateVpForRondeAndSesi($day4edc->ronde);
    }

    public function deleted(day4edc $day4edc): void
    {
        $this->recalculateVpForRondeAndSesi($day4edc->ronde);
    }

    private function recalculateVpForRondeAndSesi($ronde)
    {
        $data = day4edc::where('ronde', $ronde)
                       ->orderBy('total', 'desc')
                       ->get();

        $data->each(function ($item, $key) {
            $item->vp = ($key < 3) ? 3 - $key : 0;
            $item->save();
        });
    }

}
