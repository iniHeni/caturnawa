<?php

namespace App\Observers;

use App\Models\day3kdbi;
use Illuminate\Support\Facades\DB;

class Day3kdbiObserver
{
    public function created(day3kdbi $day3kdbi): void
    {
        // Hitung peringkat data yang baru ditambahkan
        $rank = DB::table('day3kdbis')
            ->where('ronde', $day3kdbi->ronde)
            ->where('total', '>', $day3kdbi->total)
            ->count() + 1;

        // Hitung VP berdasarkan peringkat
        $day3kdbi->vp = ($rank <= 3) ? 4 - $rank : 0;
        $day3kdbi->save();
    }

    public function updated(day3kdbi $day3kdbi): void
    {
        $this->recalculateVpForRondeAndSesi($day3kdbi->ronde);
    }

    public function deleted(day3kdbi $day3kdbi): void
    {
        $this->recalculateVpForRondeAndSesi($day3kdbi->ronde);
    }

    private function recalculateVpForRondeAndSesi($ronde)
    {
        $data = day3kdbi::where('ronde', $ronde)
                       ->orderBy('total', 'desc')
                       ->get();

        $data->each(function ($item, $key) {
            $item->vp = ($key < 3) ? 3 - $key : 0;
            $item->save();
        });
    }
}
