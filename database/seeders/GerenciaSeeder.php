<?php

namespace Database\Seeders;

use App\Models\gerencia;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GerenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar datos en la tabla 'gerencias'
      
        // Puedes agregar más gerencias según sea necesario
        gerencia::create([
            'nombre_gerencia' => 'Gerencia de Calidad',
        ]);
        gerencia::create([
            'nombre_gerencia' => 'Gerencia General',
        ]);
        gerencia::create([
            'nombre_gerencia' => 'Gerencia de Finanzas',
        ]);
        gerencia::create([
            'nombre_gerencia' => 'Gerencia de Recursos Humanos',
        ]);
        gerencia::create([
            'nombre_gerencia' => 'Gerencia de Operaciones',
        ]);
        gerencia::create([
            'nombre_gerencia' => 'Gerencia de Marketing',
        ]);
        gerencia::create([
            'nombre_gerencia' => 'Gerencia de Ventas',
        ]);
        gerencia::create([
            'nombre_gerencia' => 'Gerencia de Tecnología',
        ]);
        gerencia::create([
            'nombre_gerencia' => 'Gerencia de Proyectos',
        ]);
    }
}
