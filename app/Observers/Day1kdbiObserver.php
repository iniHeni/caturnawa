<?php

namespace App\Observers;

use App\Models\day1kdbi;
use Illuminate\Support\Facades\DB;

class Day1kdbiObserver
{
    /**
     * Handle the day1kdbi "created" event.
     */
    public function created(day1kdbi $day1kdbi): void
    {
        $rank = DB::table('day1kdbis')
            ->where('ronde', $day1kdbi->ronde)
            ->where('sesi', $day1kdbi->sesi)
            ->where('total', '>', $day1kdbi->total)
            ->count() + 1;

        // Hitung VP berdasarkan peringkat
        $day1kdbi->vp = ($rank <= 3) ? 4 - $rank : 0;
        $day1kdbi->save();
    }
    public function updated(day1kdbi $day1kdbi): void
    {
        $this->recalculateVpForRondeAndSesi($day1kdbi->ronde, $day1kdbi->sesi);
    }
    public function deleted(day1kdbi $day1kdbi): void
    {
        $this->recalculateVpForRondeAndSesi($day1kdbi->ronde, $day1kdbi->sesi);
    }

    private function recalculateVpForRondeAndSesi($ronde, $sesi)
    {
        $data = day1kdbi::where('ronde', $ronde)
                       ->where('sesi', $sesi)
                       ->orderBy('total', 'desc')
                       ->get();

        $data->each(function ($item, $key) {
            $item->vp = ($key < 3) ? 3 - $key : 0;
            $item->save();
        });
    }
}
