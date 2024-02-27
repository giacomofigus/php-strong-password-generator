<?php
    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeri = '0123456789';
    $caratteriSpeciali = '!@#$%^&*()-_';

    // SHUFFLE SINGOLI
    $caratteriMescolati = str_shuffle($caratteri);
    $numeriMescolati = str_shuffle($numeri);
    $caratterispecialiMescolati = str_shuffle($caratteriSpeciali);

    // SHUFFLE COMPOSTI DA 2
    $caratterinumeriMescolati = str_shuffle($caratteri . $numeri);
    $caratteriEspecialiMescolati = str_shuffle($caratteri . $caratteriSpeciali);
    $numeriCaratteriSpecialiMescolati = str_shuffle($numeri . $caratteriSpeciali);

    // SHUFFLE DA 3
    $AllcaratteriMescolati = str_shuffle($numeri . $caratteriSpeciali . $caratteriMescolati);

    // LUNGHEZZA INSERITA 
    $lunghezza = $_GET["lunghezza"];

    $passwordGenerata = '';

    for($i = 0; $i < $lunghezza; $i++ ){
        $passwordGenerata .= $AllcaratteriMescolati[$i];  
    }