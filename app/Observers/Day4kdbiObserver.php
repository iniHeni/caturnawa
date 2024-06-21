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
        // 1. Ambil data semua tim dengan total skor, diurutkan berdasarkan total descending
        $allTeams = DB::table('day4kdbis')
            ->select('team', 
            DB::raw('ROUND(AVG(skorindividu1), 0)::text as skorindividu1'), 
            DB::raw('ROUND(AVG(skorindividu2), 0)::text as skorindividu2'),
                    )
            ->where('ronde', $ronde)
            ->groupBy('team')
            ->get();
    
        // 2. Hitung total skor untuk setiap tim
        $allTeams = $allTeams->map(function ($row) {
            $row->total = round(($row->skorindividu1 + $row->skorindividu2) / 2);
            return $row;
        });
    
        // 3. Urutkan berdasarkan total skor descending
        $allTeams = $allTeams->sortByDesc('total')->values();
    
        // 4. Tentukan peringkat dan hitung VP
        $rank = 1;
        $previousTotal = null;
        foreach ($allTeams as $team) {
            if ($team->total != $previousTotal) { // Periksa jika total berubah
                $rank++;
            }
    
            // Update data VP untuk tim
            day4kdbi::where('team', $team->team)
            ->where('ronde', $ronde)
            ->update(['vp' => ($rank <= 3) ? 4 - $rank + 1 : 0]); // Perbaikan di sini
        
        $previousTotal = $team->total;
        }
    }

}
