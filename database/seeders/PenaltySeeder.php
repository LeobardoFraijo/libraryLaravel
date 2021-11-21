<?php

namespace Database\Seeders;

use App\Models\Penalty;
use App\Models\PenaltyStatus;
use App\Models\PenaltyType;
use Illuminate\Database\Seeder;

class PenaltySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //adding penalty statuses
        $penaltyStatus = new PenaltyStatus();
        $penaltyStatus->name = "Adeudo";
        $penaltyStatus->save();

        $penaltyStatus2 = new PenaltyStatus();
        $penaltyStatus2->name = "Pagado";
        $penaltyStatus2->save();

        $penaltyStatus3 = new PenaltyStatus();
        $penaltyStatus3->name = "Abonado";
        $penaltyStatus3->save();

        //adding penalty types
        $penaltyType = new PenaltyType();
        $penaltyType->name = "Retraso";
        $penaltyType->description = "Usuario final con retraso, esta penalización
                                    se genera en automático";
        $penaltyType->save();

        $penaltyType2 = new PenaltyType();
        $penaltyType2->name = "Libro dañado";
        $penaltyType2->description = "Usuario entregó el libro dañado";
        $penaltyType2->save();

        $penaltyType3 = new PenaltyType();
        $penaltyType3->name = "Libro extraviado";
        $penaltyType3->description = "Usuario extravió el libro";
        $penaltyType3->save();

        //creating 10 penalties
        Penalty::factory()->count(10)->create();
    }
}
