<?php

namespace App\Observers;

use App\Models\day2kdbi;
use Illuminate\Support\Facades\DB;

class Day2kdbiObserver
{
    public function created(day2kdbi $day2kdbi): void
    {
        // Hitung peringkat data yang baru ditambahkan
        $rank = DB::table('day2kdbis')
            ->where('ronde', $day2kdbi->ronde)
            ->where('sesi', $day2kdbi->sesi)
            ->where('room', $day2kdbi->room)
            ->where('total', '>', $day2kdbi->total)
            ->count() + 1;

        // Hitung VP berdasarkan peringkat
        $day2kdbi->vp = ($rank <= 3) ? 3 - $rank : 0;
        $day2kdbi->save();
    }

    public function updated(day2kdbi $day2kdbi): void
    {
        $this->recalculateVpForRondeAndSesi($day2kdbi->ronde, $day2kdbi->sesi, $day2kdbi->room);
    }

    public function deleted(day2kdbi $day2kdbi): void
    {
        $this->recalculateVpForRondeAndSesi($day2kdbi->ronde, $day2kdbi->sesi, $day2kdbi->room);
    }

    private function recalculateVpForRondeAndSesi($ronde, $sesi, $room)
    {
        $data = day2kdbi::where('ronde', $ronde)
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
