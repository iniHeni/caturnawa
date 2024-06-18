<?php

namespace App\Observers;

use App\Models\day5kdbi;
use Illuminate\Support\Facades\DB;

class Day5kdbiObserver
{
    public function created(day5kdbi $day5kdbi): void
    {
        // Hitung peringkat data yang baru ditambahkan
        $rank = DB::table('day5kdbis')
            ->where('ronde', $day5kdbi->ronde)
            ->where('total', '>', $day5kdbi->total)
            ->count() + 1;

        // Hitung VP berdasarkan peringkat
        $day5kdbi->vp = ($rank <= 3) ? 4 - $rank : 0;
        $day5kdbi->save();
    }

    public function updated(day5kdbi $day5kdbi): void
    {
        $this->recalculateVpForRondeAndSesi($day5kdbi->ronde);
    }

    public function deleted(day5kdbi $day5kdbi): void
    {
        $this->recalculateVpForRondeAndSesi($day5kdbi->ronde);
    }

    private function recalculateVpForRondeAndSesi($ronde)
    {
        $data = day5kdbi::where('ronde', $ronde)
                       ->orderBy('total', 'desc')
                       ->get();

        $data->each(function ($item, $key) {
            $item->vp = ($key < 3) ? 3 - $key : 0;
            $item->save();
        });
    }
}
