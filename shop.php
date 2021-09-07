<?php
/*
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online;
ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario;
ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
*/

class Eshop {
    private $name;
    private $website;
    private $indirizzo;
    private $partitaIva;

    private $products = [];
    private $customers = [];

    //constructor
    function __construct (string $name, string $website, int $partitaIva){
        $this->name = $name;
        $this->website = $website;
        $this->partitaIva = $partitaIva;
    }

    //set
    function setAddress ( $indirizzo) {
        $this->indirizzo=$indirizzo;
    }

    //get
    function getName() {
        return $this->name;
    }

    function getWebsite() {
        return $this->website;
    }

    function getIndiizzo() {
        return $this->indirizzo;
    }

    function getPartitaIva() {
        return $this->partitaIva;
    }

    //change
    function changeWebsite($website){
        $this->website = $website;
    }

    function changePartitaIva ($partitaIva){
        $this->partitaIva = $partitaIva;
    }

    //product
    function addProduct ($product) {
        $this->producs[] = $product;
    }

    function removeProduct ($product) {
        
    }

    function addCustomer ($customer) {
        $this->customers[] = $customer;
    }
};

class Product {
    protected $category;
    protected $id;
    protected $name;
    protected $price = 0;
    protected $availability = 0;

    function changePrice (int $price){
        $this->price = $price;
    }

    function setAvailable (int $pieces){
        $this->availability = $pieces;
    }

    function showProduct() {
        echo "Nome: $this->name <br>";
        echo "Categoria: $this->category  <br>";
        echo "Prezzo: $this->price <br>";
        echo "Disponibilità: $this->availability <br> <hr>";

    }
}

class Supplement extends Product {    

    function __construct (string $name, int $id, int $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = 'Supplements';
    }

}

class Food extends Product {

    private $weight;

    function __construct (string $name, int $id, int $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = 'Food';
    }
}

class Beauty extends Product {

    function __construct (string $name, int $id, int $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = 'Beauty';
    }
}

class Customer {
    private $id;
}

$eshop1 = new Eshop ('Il super Bio', 'www.ilsuperbio.it', 23948123);


$supplement1 = new Supplement ('Superfood: Integratore di Melograno', 984039281, 30);
$supplement2 = new Supplement ('Superfood: Integratore di Bergamotto', 984039282, 32);
$supplement3 = new Supplement ('Superfood: Integratore di Pompelmo', 984039283, 34);

$supplement1->setAvailable(5);
$supplement2->setAvailable(4);
$supplement3->setAvailable(10);
$supplement1->showProduct();

$food1 = new Food ('Crackers Integrali Segale Bio Plus', 4932845, 3 );
$food2 = new Food ('Crackers Integrali Avena Bio Plus', 4932846, 4 );
$food3 = new Food ('Crackers Integrali Farro Bio Plus', 4932847, 3 );

$food1->setAvailable(5);
$food2->setAvailable(10);
$food3->setAvailable(8);


$food1->showProduct();

$eshop1->addProduct($supplement1);
$eshop1->addProduct($supplement2);
$eshop1->addProduct($food1);
$eshop1->addProduct($food2);

var_dump($eshop1);



