<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        $productos = [
            [
                'nombre'      => 'Laptop HP Pavilion',
                'cantidad'    => 15,
                'precio'      => 899.99,
                'calidad'     => 'Alta',
                'descripcion' => 'Laptop de 15.6 pulgadas con procesador Intel Core i5, 8GB RAM y 512GB SSD.',
            ],
            [
                'nombre'      => 'Monitor Samsung 24"',
                'cantidad'    => 30,
                'precio'      => 249.99,
                'calidad'     => 'Alta',
                'descripcion' => 'Monitor Full HD 1080p con panel IPS y tiempo de respuesta de 5ms.',
            ],
            [
                'nombre'      => 'Teclado Mecanico Redragon',
                'cantidad'    => 50,
                'precio'      => 59.99,
                'calidad'     => 'Media',
                'descripcion' => 'Teclado mecanico RGB con switches azules, ideal para gaming y escritura.',
            ],
            [
                'nombre'      => 'Mouse Logitech MX Master 3',
                'cantidad'    => 40,
                'precio'      => 99.99,
                'calidad'     => 'Alta',
                'descripcion' => 'Mouse inalambrico ergonomico con scroll rapido y 4000 DPI.',
            ],
            [
                'nombre'      => 'Auriculares Sony WH-1000XM4',
                'cantidad'    => 20,
                'precio'      => 349.99,
                'calidad'     => 'Premium',
                'descripcion' => 'Auriculares con cancelacion de ruido activa y hasta 30 horas de bateria.',
            ],
            [
                'nombre'      => 'Webcam Logitech C920',
                'cantidad'    => 25,
                'precio'      => 79.99,
                'calidad'     => 'Media',
                'descripcion' => 'Camara web Full HD 1080p con microfono incorporado para videollamadas.',
            ],
            [
                'nombre'      => 'Disco Duro Externo Seagate 1TB',
                'cantidad'    => 35,
                'precio'      => 54.99,
                'calidad'     => 'Media',
                'descripcion' => 'Almacenamiento portatil USB 3.0 con capacidad de 1 terabyte.',
            ],
            [
                'nombre'      => 'Hub USB-C 7 en 1',
                'cantidad'    => 60,
                'precio'      => 34.99,
                'calidad'     => 'Baja',
                'descripcion' => 'Adaptador multipuerto con HDMI 4K, 3x USB-A, SD, MicroSD y USB-C PD.',
            ],
        ];

        foreach ($productos as $producto) {
            Producto::create($producto);
        }
    }
}
