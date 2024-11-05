<?php

   

    function izracunajDostavu($cena, $grad)
    {
        $dostava = [
            "Subotica" => 220,
            "Pancevo" => 10,
            "Sarajevo" => 292,
            "Split" => 799,
            "Cacak" => 125
        ];

        $gradPostoji = array_key_exists($grad, $dostava);
        
        if($gradPostoji)
        {
            $cenaDostave = 0;
            $udaljenost = $dostava[$grad];
            
            if($udaljenost <= 100)
            {
                $cenaDostave = 200;
            }
            else if($udaljenost > 100 && $udaljenost <= 200)
            {
                $cenaDostave = 350;
            }
            else{
                $cenaDostave = 500;
            }
        }
        else{
            die("Nazalost ne vrsimo dostavu za uneti grad...");
        }

        $ukupnaCena = $cena + $cenaDostave;

        return $ukupnaCena;

    }

    $dostavaSubotica = izracunajDostavu(2000, "Subotica");
    $dostavaSplit = izracunajDostavu(2000, "Split");
    $dostavaSarajevo = izracunajDostavu(2000, "Sarajevo");
    $dostavaPancevo = izracunajDostavu(2000, "Pancevo");
    $dostavaCacak = izracunajDostavu(2000, "Cacak");

    echo $dostavaSubotica."<br>";
    echo $dostavaSplit."<br>";
    echo $dostavaSarajevo."<br>";
    echo $dostavaPancevo."<br>";
    echo $dostavaCacak."<br>";
    



?>