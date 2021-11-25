<?php

namespace Database\Seeders;

use App\Models\BookOrder;
use App\Models\OrderStatus;
use Illuminate\Database\Seeder;

class BookOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order_status = new OrderStatus();
        $order_status->name = "activo";
        $order_status->description = "El alumno aún tiene los libros en su posesion";
        $order_status->save();

        $order_status2 = new OrderStatus();
        $order_status2->name = "inactivo";
        $order_status2->description = "El alumno ya devolvió los libros";
        $order_status2->save();

        $order_status3 = new OrderStatus();
        $order_status3->name = "retrasado";
        $order_status3->description = "El alumno no devolvió los libros en la fecha acordada";
        $order_status3->save();

        $order_status4 = new OrderStatus();
        $order_status4->name = "adeudo";
        $order_status4->description = "El alumno devolvió los libros después de la fecha acordad";
        $order_status4->save();

        $bookOrders = BookOrder::factory()->count(10)->create();

        //every bookOrder may have 1, 2, or 3 copies

        $usedCopiesArray = [];
        foreach($bookOrders as $bookOrder){
            $percentage = rand(1, 10);
            $conditional = 0;
            if($percentage <= 2){
                while($conditional == 0){
                    $copy = rand(1, 100);
                    if(in_array($copy, $usedCopiesArray) == false){
                        $bookOrder->copies()->attach($copy);              
                        $usedCopiesArray[] = $copy; 
                        $conditional = 1;      
                    }
                }
                  
            }elseif($percentage <= 6 && $percentage > 2){
                while($conditional == 0){
                    $copy = rand(1, 100);
                    $copy2 = rand(1, 100);
                    if(in_array($copy, $usedCopiesArray) == false && in_array($copy2, $usedCopiesArray) == false){
                        $bookOrder->copies()->attach([
                            $copy,
                            $copy2
                        ]);            
                        $usedCopiesArray[] = $copy; 
                        $usedCopiesArray[] = $copy2;
                        $conditional = 1;      
                    }
                }               
                
            }elseif($percentage <= 10 && $percentage > 6){
                while($conditional == 0){
                    $copy = rand(1, 100);
                    $copy2 = rand(1, 100);
                    $copy3 = rand(1, 100);
                    if(in_array($copy, $usedCopiesArray) == false && in_array($copy2, $usedCopiesArray) == false && in_array($copy3, $usedCopiesArray) == false){
                        $bookOrder->copies()->attach([
                            $copy,
                            $copy2,
                            $copy3
                        ]);            
                        $usedCopiesArray[] = $copy; 
                        $usedCopiesArray[] = $copy2;
                        $usedCopiesArray[] = $copy3;
                        $conditional = 1;      
                    }
                }
            }            
        }
    }
}
