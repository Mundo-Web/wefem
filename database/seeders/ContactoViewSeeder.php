<?php

namespace Database\Seeders;

use App\Models\ContactoView;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactoViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactoView::updateOrCreate([
            'id' => 1
        ], [

            'titleSection' => 'Contacto',
        ]);
    }
}
