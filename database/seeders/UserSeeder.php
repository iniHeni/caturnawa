<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Membuat pengguna baru
        User::create([
            'username' => 'admin',
            'password' => Hash::make('123456')
        ]);
    }
}
