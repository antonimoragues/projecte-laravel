<?php

namespace Database\Seeders;

use App\Models\Receta;
use Illuminate\Database\Seeder;

class RecetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Receta::insert([
            [
                'titulo' => 'Tortilla de patatas',
                'descripcion' => 'Clásica tortilla española con patatas y huevo.',
                'imagen_path' => '/images/recetas/tortilla.svg',
                'tiempo_minutos' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Gazpacho',
                'descripcion' => 'Sopa fría de tomate con verduras frescas.',
                'imagen_path' => '/images/recetas/gazpacho.svg',
                'tiempo_minutos' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Ensalada mediterránea',
                'descripcion' => 'Lechuga, tomate, aceitunas y queso feta.',
                'imagen_path' => '/images/recetas/ensalada.svg',
                'tiempo_minutos' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Paella',
                'descripcion' => 'Arroz con verduras, marisco y azafrán.',
                'imagen_path' => '/images/recetas/paella.svg',
                'tiempo_minutos' => 45,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Pasta al pesto',
                'descripcion' => 'Pasta con salsa de albahaca, piñones y queso.',
                'imagen_path' => '/images/recetas/pasta.svg',
                'tiempo_minutos' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Tarta de queso',
                'descripcion' => 'Postre cremoso con base de galleta.',
                'imagen_path' => '/images/recetas/tarta.svg',
                'tiempo_minutos' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
