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
            ->where('room', $day1kdbi->room)
            ->where('total', '>', $day1kdbi->total)
            ->count() + 1;

        // Hitung VP berdasarkan peringkat
        $day1kdbi->vp = ($rank <= 3) ? 3 - $rank : 0;
        $day1kdbi->save();
    }
    public function updated(day1kdbi $day1kdbi): void
    {
        $this->recalculateVpForRondeAndSesi($day1kdbi->ronde, $day1kdbi->sesi, $day1kdbi->room);
    }
    public function deleted(day1kdbi $day1kdbi): void
    {
        $this->recalculateVpForRondeAndSesi($day1kdbi->ronde, $day1kdbi->sesi, $day1kdbi->room);
    }

    private function recalculateVpForRondeAndSesi($ronde, $sesi, $room)
    {
        $data = day1kdbi::where('ronde', $ronde)
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
