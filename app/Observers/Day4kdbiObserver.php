<?php

namespace App\Observers;

use App\Models\day4kdbi;
use Illuminate\Support\Facades\DB;

class Day4kdbiObserver
{
    public function created(day4kdbi $day4kdbi): void
    {
        $this->recalculateVpForRondeAndSesi($day4kdbi->ronde); // Langsung panggil recalculateVpForRondeAndSesi
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
       
        $allTeams = DB::table('day4kdbis')
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

       
        day4kdbi::where('team', $team->team)
        ->where('ronde', $ronde)
        ->update(['vp' => ($rank <= 4) ? 4 - $rank + 1 : 0]); 
    
    $previousTotal = $team->total;
    }
}
}
