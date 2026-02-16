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
            [
                'nombre'      => 'Silla Gamer DXRacer',
                'cantidad'    => 10,
                'precio'      => 449.99,
                'calidad'     => 'Premium',
                'descripcion' => 'Silla ergonomica con soporte lumbar ajustable, reposabrazos 4D y reclinable hasta 135 grados.',
            ],
            [
                'nombre'      => 'Impresora Canon Pixma',
                'cantidad'    => 18,
                'precio'      => 89.99,
                'calidad'     => 'Media',
                'descripcion' => 'Impresora de inyeccion de tinta con impresion a color, WiFi y compatible con AirPrint.',
            ],
            [
                'nombre'      => 'Tablet Samsung Galaxy Tab',
                'cantidad'    => 22,
                'precio'      => 329.99,
                'calidad'     => 'Alta',
                'descripcion' => 'Tablet de 10.5 pulgadas con pantalla AMOLED, 6GB RAM y 128GB de almacenamiento.',
            ],
            [
                'nombre'      => 'Router TP-Link AX',
                'cantidad'    => 45,
                'precio'      => 79.99,
                'calidad'     => 'Alta',
                'descripcion' => 'Router WiFi 6 con velocidad de hasta 1800 Mbps, cobertura de 120 m2 y 4 antenas.',
            ],
            [
                'nombre'      => 'Microfono Blue Yeti',
                'cantidad'    => 30,
                'precio'      => 129.99,
                'calidad'     => 'Alta',
                'descripcion' => 'Microfono USB de condensador con patron cardioide, ideal para podcasts y streaming.',
            ],
            [
                'nombre'      => 'Memoria RAM Corsair 16GB',
                'cantidad'    => 55,
                'precio'      => 64.99,
                'calidad'     => 'Alta',
                'descripcion' => 'Modulo DDR4 3200MHz CL16 con disipador de calor Vengeance LPX.',
            ],
            [
                'nombre'      => 'Tarjeta Grafica RTX',
                'cantidad'    => 8,
                'precio'      => 599.99,
                'calidad'     => 'Premium',
                'descripcion' => 'GPU con 8GB GDDR6, ray tracing en tiempo real y soporte para resoluciones 4K.',
            ],
            [
                'nombre'      => 'Fuente de Poder Corsair',
                'cantidad'    => 25,
                'precio'      => 109.99,
                'calidad'     => 'Alta',
                'descripcion' => 'Fuente ATX 650W con certificacion 80 Plus Gold, modular y ventilador silencioso.',
            ],
            [
                'nombre'      => 'Gabinete NZXT H510',
                'cantidad'    => 15,
                'precio'      => 84.99,
                'calidad'     => 'Alta',
                'descripcion' => 'Gabinete ATX mid-tower con panel lateral de vidrio templado y gestion de cables.',
            ],
            [
                'nombre'      => 'Alfombrilla Logitech G840',
                'cantidad'    => 70,
                'precio'      => 49.99,
                'calidad'     => 'Media',
                'descripcion' => 'Alfombrilla de escritorio XL con superficie optimizada para sensores de alto DPI.',
            ],
            [
                'nombre'      => 'Soporte para Monitor',
                'cantidad'    => 40,
                'precio'      => 29.99,
                'calidad'     => 'Baja',
                'descripcion' => 'Soporte articulado para monitor de hasta 27 pulgadas con ajuste de altura y rotacion.',
            ],
        ];

        foreach ($productos as $producto) {
            Producto::create($producto);
        }
    }
}
