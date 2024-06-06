<?php

namespace App\Http\Controllers;

use App\Models\spcpenyisihan;
use App\Models\spcsemifinal;
use App\Models\spcfinal;
use Illuminate\Support\Facades\DB;

class leaderboard extends Controller
{
    public function index()
    {
        $leaderboard = DB::table('spcpenyisihan')
            ->select('spcpenyisihan.nama_peserta', DB::raw('spcpenyisihan.total_skor + COALESCE(semifinal.total_skor, 0) + COALESCE(final.total_skor, 0) as total_skor_gabungan'))
            ->leftJoin('semifinal', 'penyisihan.nama_peserta', '=', 'semifinal.nama_peserta')
            ->leftJoin('final', 'penyisihan.nama_peserta', '=', 'final.nama_peserta')
            ->orderByDesc('total_skor_gabungan')
            ->get();

        return view('leaderboard', ['leaderboard' => $leaderboard]);
    }
}
