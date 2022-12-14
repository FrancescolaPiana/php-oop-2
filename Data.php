<?php
$prodotti = [];

$ogg1 = new Cibo(1, "Purina Friskies Crocchette Cane", 28.49, "Manzo e Cereali", 12, "28/12/2026", "./img/prodotto1.jpg", new Category("Dog"));
$ogg2 = new Cibo(2, "Brekkies Cibo Per Gatti", 10.99, "Tonno, Salmone e Verdure", 3.5, "30/11/2025", "./img/prodotto2.jpg", new Category("Cat"));
$ogg3 = new Giochi(3, "Nobleza - Corda Giocattolo per Cani", 11.00, "./img/prodotto3.jpg", new Category("Dog"));
$ogg4 = new Giochi(4, "Fairwin Giochi Gatto Interattivo Palla", 20.99, "./img/prodotto4.jpg", new Category("Cat"));

array_push($prodotti, $ogg1, $ogg2, $ogg3, $ogg4);