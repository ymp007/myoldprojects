<?php

interface PrintInterface {
    public function print1($doc);
}


class Person implements PrintInterface {
    public function print1($doc){
        echo "aaa";
    }
}

interface Payment {
    public function pay();
}
class order {
    public function processorder(Payment $p){
        $p->pay();
    }
//    public function processorderstripe(Stripe $p){
//        $p->pay();
//    }
}

class Paypal implements Payment {
    public function pay(){

    }
}

class Stipe implements Payment {
    public function pay(){

    }
}

$o = new Order();
$po = new Paypal();
$o->processorder($po);