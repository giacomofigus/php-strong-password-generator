<?php

    function generaPassword($lunghezza){
        $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numeri = '0123456789';
        $simboli = '!@#$%^&*()-_';
    
        // SHUFFLE SINGOLI
        $caratteriMescolati = str_shuffle($caratteri);
        $numeriMescolati = str_shuffle($numeri);
        $simboliMescolati = str_shuffle($simboli);
    
        // SHUFFLE COMPOSTI DA 2
        $caratterinumeriMescolati = str_shuffle($caratteri . $numeri);
        $caratteriEspecialiMescolati = str_shuffle($caratteri . $simboli);
        $numerisimboliMescolati = str_shuffle($numeri . $simboli);
    
        // SHUFFLE DA 3
        $AllcaratteriMescolati = str_shuffle($numeri . $simboli . $caratteriMescolati);
        
        $lunghezza = $_GET["lunghezza"];

        // CHECK OPZIONI SELEZIONATE
        $lettere_selezionate = isset($_GET["lettere"]);
        $numeri_selezionati = isset($_GET["numeri"]);
        $simboli_selezionati = isset($_GET["simboli"]);

        $passwordGenerata = '';
    
        for($i = 0; $i < $lunghezza; $i++ ){
            
            if($numeri_selezionati && $simboli_selezionati && $lettere_selezionate){
                // Tutte le opzioni
                $passwordGenerata .= $AllcaratteriMescolati[$i];
            }elseif($numeri_selezionati && $simboli_selezionati){
                // Numeri e simboli
                $passwordGenerata .= $numerisimboliMescolati[$i];
            } elseif($lettere_selezionate && $simboli_selezionati){
                // Lettere e simboli
                $passwordGenerata .= $caratteriEspecialiMescolati[$i];
            } elseif($lettere_selezionate && $numeri_selezionati){
                // Lettere e numeri
                $passwordGenerata .= $caratterinumeriMescolati[$i];
            } elseif($lettere_selezionate){
                // Lettere 
                $passwordGenerata .= $caratteriMescolati[$i];
            } elseif($numeri_selezionati){
                // Numeri
                $passwordGenerata .= $numeriMescolati[$i];
            } elseif($simboli_selezionati){
                // Simboli
                $passwordGenerata .= $simboliMescolati[$i];
            }

        }    
        return $passwordGenerata;
    }   
