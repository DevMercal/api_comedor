<?php

namespace Database\Seeders;

use App\Models\empleados;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class EmpleadosSeeder extends Seeder
{

    public function run(): void
    {
        $json = File::get('database/data/nominaTecn.json');
        $data = json_decode($json, true);
        foreach ($data as $obj) {
            empleados::create([
                'nombre_completo' => $obj['nombreCompleto'],
                'cedula' => $obj['cedula'],
                'id_gerencia' => $obj['idGerencia'],
                'estado' => $obj['estado'],
                'tipo_empleado' => $obj['tipoEmpleado'],
                'cargo' => $obj['cargo']
            ]);
        }
    }
}
