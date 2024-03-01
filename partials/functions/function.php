<?php

    function generaPassword($lunghezza){
        $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numeri = '0123456789';
        $simboli = '!@#$%^&*()-_';
    
        $caratteriDisponibili = '';
        
        if(isset($_GET["lettere"])){
            $caratteriDisponibili .= $caratteri;
        }
        if(isset($_GET["numeri"])){
            $caratteriDisponibili .= $numeri;
        }
        if(isset($_GET["simboli"])){
            $caratteriDisponibili .= $simboli;
        }
    
        $caratteriMescolati = str_shuffle($caratteriDisponibili);
        $lunghezzaCaratteri = strlen($caratteriDisponibili);
        $passwordGenerata = '';
    
        for($i = 0; $i < $lunghezza; $i++){
            $carattereCasuale = $caratteriMescolati[rand(0, $lunghezzaCaratteri - 1)];
            $passwordGenerata .= $carattereCasuale;
        }
    
        return $passwordGenerata;
    }   
