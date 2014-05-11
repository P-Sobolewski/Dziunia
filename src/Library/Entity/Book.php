<?php

class Book {
    private $title;
    
    
    public function olaboga()
    {
        echo 'olaboga';
    }
    
    public function __construct($title) {
        $this->title = $title;
    }
    
    public function wyswietlMiTytulKsiazko()
    {
        print_r($this->title);
    }
}

$kolekcjaKsiazek = array();

$kolekcjaKsiazek[] = new Book('Jedynka');
$kolekcjaKsiazek[] = new Book('Dwojka');
$kolekcjaKsiazek[] = new Book('Trojka');
$kolekcjaKsiazek[] = new Book('Czworka');

foreach ($kolekcjaKsiazek as $ksiazka) {
    $ksiazka->wyswietlMiTytulKsiazko();
    $ksiazka->wyswietlMiTytulKsiazko();
}