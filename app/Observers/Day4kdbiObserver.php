<?php

namespace App\Observers;

use App\Models\day4kdbi;
use Illuminate\Support\Facades\DB;

class Day4kdbiObserver
{
    public function created(day4kdbi $day4kdbi): void
    {
        // Hitung peringkat data yang baru ditambahkan
        $rank = DB::table('day4kdbis')
            ->where('ronde', $day4kdbi->ronde)
            ->where('total', '>', $day4kdbi->total)
            ->count() + 1;

        // Hitung VP berdasarkan peringkat
        $day4kdbi->vp = ($rank <= 3) ? 4 - $rank : 0;
        $day4kdbi->save();
    }

    public function updated(day4kdbi $day4kdbi): void
    {
        $this->recalculateVpForRondeAndSesi($day4kdbi->ronde);
    }

    public function deleted(day4kdbi $day4kdbi): void
    {
        $this->recalculateVpForRondeAndSesi($day4kdbi->ronde);
    }

    private function recalculateVpForRondeAndSesi($ronde)
    {
        $data = day4kdbi::where('ronde', $ronde)
                       ->orderBy('total', 'desc')
                       ->get();

        $data->each(function ($item, $key) {
            $item->vp = ($key < 3) ? 3 - $key : 0;
            $item->save();
        });
    }

}
