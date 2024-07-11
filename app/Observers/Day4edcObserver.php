<?php

namespace App\Observers;

use App\Models\day4edc;
use Illuminate\Support\Facades\DB;

class Day4edcObserver
{
    public function created(day4edc $day4edc): void
{
    $this->recalculateVpForRondeAndSesi($day4edc->ronde); // Langsung panggil recalculateVpForRondeAndSesi
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
    
    $allTeams = DB::table('day4edcs')
        ->select('team', 
        DB::raw('AVG(skorindividu1) as skorindividu1'), 
        DB::raw('AVG(skorindividu2) as skorindividu2'),
                )
        ->where('ronde', $ronde)
        ->groupBy('team')
        ->get();

    
    $allTeams = $allTeams->map(function ($row) {
        $row->skorindividu1 = number_format($row->skorindividu1, 1, '.', '');
        $row->skorindividu2 = number_format($row->skorindividu2, 1, '.', '');
        $row->total = number_format(($row->skorindividu1 + $row->skorindividu2) / 2, 1, '.', '');
        return $row;
    });

   
    $allTeams = $allTeams->sortByDesc('total')->values();

   
    $rank = 1;
    $previousTotal = null;
    foreach ($allTeams as $team) {
        if ($team->total != $previousTotal) { 
            $rank++;
        }

        
        day4edc::where('team', $team->team)
        ->where('ronde', $ronde)
        ->update(['vp' => ($rank <= 4) ? 4 - $rank + 1 : 0]); // Perbaikan di sini
    
    $previousTotal = $team->total;
    }
}
}
