<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $competencies = [
            'Choose a competency',
            'Operator Pengambilan Contoh Air',
            'Operator Pengambilan Contoh Limbah',
            'Operator Pengambilan Contoh Udara',
            'Petugas Pengambilan Contoh Uji Air',
            'Penanggungjawab Pengendalian Pencemaran Air',
            'Penanggungjawab Pengendalian Pencemaran Udara',
            'Penanggungjawab Operasional Pengolahan Air Limbah',
            'Penanggungjawab Operasional Instalasi Pengendalian Pencemaran Udara',
            'Pengoperasian Instalasi Pengelolaan Limbah B3',
            'Pemantauan & Analisis Pengelolaan Limbah B3',
            'Penanganan dan Tanggap Darurat Bahan Kimia (Chemical Safety)',
            'Ahli Muda K3 Kimia',
            'Penerapan K3 di Laboratorium',
            'Ahli Muda Hygiene Industri',
            'Ahli Madya Hygiene Industri',
        ];

        $competencyData = array_map(function ($competency) {
            return [
                'name' => $competency,
                'description' => null,
            ];
        }, $competencies);

        DB::table('competence')->insert($competencyData);
    }
}
