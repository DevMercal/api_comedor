<?php

namespace Database\Seeders;

use App\Models\metodoPago;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetodoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Insertar datos en la tabla 'metodo_pagos'
        metodoPago::create([
            'metodo_pago' => 'Efectivo',
        ]);
        metodoPago::create([
            'metodo_pago' => 'Pago Móvil',
        ]);
        metodoPago::create([
            'metodo_pago' => 'Transferencia Bancaria',
        ]);
        metodoPago::create([
            'metodo_pago' => 'Biopago'
        ]);
    }
}
