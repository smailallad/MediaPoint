<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Seeder;

class ProduitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produit =new Produit();
        $produit->nom = "Pc Portable dell";
        $produit->prix_ht = 25;
        $produit->description = "Pc Portable";
        $produit->photo_principale = "p1.jpeg";
        $produit->save();

        $produit =new Produit();
        $produit->nom = "Pc Portable HP";
        $produit->prix_ht = 20;
        $produit->description = "Pc Portable";
        $produit->photo_principale = "p2.jpeg";
        $produit->save();

        $produit =new Produit();
        $produit->nom = "Pc Portable Lenovo";
        $produit->prix_ht = 35;
        $produit->description = "Pc Portable";
        $produit->photo_principale = "p3.jpeg";
        $produit->save();
    }
}
