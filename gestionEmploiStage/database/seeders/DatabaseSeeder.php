<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Apprenant;
use Illuminate\Database\Seeder;
use Database\Seeders\StageSeeder;
use Database\Seeders\FiliereSeeder;
use Database\Seeders\PromotionSeeder;
use Database\Seeders\EntrepriseSeeder;
use Database\Seeders\DepartementSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PromotionSeeder::class);
        $this->call(DepartementSeeder::class);
        $this->call(FiliereSeeder::class);
        $this->call(EntrepriseSeeder::class);
        Apprenant::factory(50)->create();
        $this->call(StageSeeder::class);
        User::factory(10)->create();
    }
}
