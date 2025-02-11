<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use App\Models\HomeView;
use App\Models\ServiceView;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeView::updateOrCreate([
            'id' => 1
        ], [
            'titleHero' => 'titulo',

        ]);

        AboutUs::updateOrCreate([
            'id' => 1
        ], [
            'title' => 'titulo',

        ]);

        ServiceView::updateOrCreate([
            'id' => 1
        ], [
            'titulo' => 'titulo',

        ]);
    }
}
