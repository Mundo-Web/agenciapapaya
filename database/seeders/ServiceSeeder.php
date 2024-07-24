<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $title = ['Problema en la Vesícula', 'Presencia de Hernias', 'Problema de Obesidad', 'Balón Gástrico', 'Cinta Gástrica', 'Problema Induvicales'];

        $desc = ['Conoce las causas de los problemas de vesícula y obtén la mejor atención por parte del Dr. Kewin y su equipo de especialistas para evitar problemas de salud en un futuro.', 'Una hernia no tratada tiempo puede perjudicarte en tus actividades diarias. Nosotros te ofrecemos una atención especializada y el tratamiento más avanzado para recuperar tu mejor versión.', 'Combatir la obesidad es esencial para mejorar la salud y el bienestar. En nuestro servicio, ofrecemos soluciones efectivas y personalizadas para la gestión del peso y el estilo de vida saludable.', 'Confía en el Dr. Kewin, especialista en balón gástrico, para recibir la mejor atención y asesoramiento de calidad. Nuestro equipo de especialistas te brinda el mejor cuidado para ayudarte a alcanzar tus objetivos de pérdida de peso de manera segura y efectiva.', 'Descubre la efectividad del tratamiento para la obesidad con la cinta gástrica, una opción segura y probada que ofrece nuestro equipo de especialistas para hacer de tu vida más saludable y sencilla.', 'Lucha contra los problemas individuales con nuestra atención personalizada. Nos comprometemos a ofrecerte soluciones efectivas para superar tus desafíos personales.'];

    
        for ($i = 0; $i <= 5; $i++) {
            Service::create([
                'title' => $title[$i],
                'extracto' => $desc[$i],
                'url_image' => 'https://picsum.photos/id/'. $i * 33 .'/50',
                'status' => 1,
                /* 'name_beneficio1' => null,
                'description_beneficio1' => null,
                'name_beneficio2' => null,
                'description_beneficio2' => null,
                'name_beneficio3' => null,
                'description_beneficio3' => null,
                'name_beneficio4' => null,
                'description_beneficio4' => null, */
            ]);
        }
        
    }
}