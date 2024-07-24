<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\General;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        General::create([
            'title1' => 'Explora un Nuevo Horizonte de Salud con el Dr. Kewin',
            'description' => 'Descubre soluciones.',
            'address' => 'Av. Aramburu 1506',
            'inside' => 'Oficina 404 - Piso 4',
            'district' => 'Miraflores',
            'schedule' => "De Lunes a Viernes de 9:00am a 6:00pm y Sábados de 9:00am a 1:00pm",
            'city' => 'Lima',
            'country' => 'Perú',
            'cellphone' => '555-555-123' ,
            'office_phone' => '5555-1025' ,
            'email' => 'usuario@mundoweb.pe',
            'facebook' => 'www.facebook.com',
            'instagram' => 'www.instagram.com',
            'youtube' => 'www.youtube.com',
            'twitter' => 'www.twitter.com',
            'linkedin' => 'www.linkedin.com',
            'tiktok' => 'www.tiktok.com',
            'whatsapp' => '555-555-123' ,
            'form_email' => 'usuario@mundoweb.pe',
            'business_hours' => 'horas',
            'mensaje_whatsapp' => 'Hola estamos atentos a lo que ud desee',
            'title2' => 'https://www.youtube.com/watch?v=k2PcGFCi08Y'
        ]);
    }
}