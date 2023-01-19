<?php 

    class A{

        public static function who(){
            echo __CLASS__;
        }

        public static function test(){
            //self:: hanya bisa terpakai oleh parentnya, kalau static:: bisa turun ke child classnya
            static::who();
        }

    }

    class B extends A {
        public static function who(){
            echo __CLASS__;
        }
    }

    B::test();

?>