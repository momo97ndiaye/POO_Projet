<?php 
    interface IModel{
        public static function insert():int;
        public static function update():int;
        public static function delete():int;
        public static function findAll():array;
        public static function findById():object|null;      
        public static function findBy(string $sql,array $data=null,$single=false):object|null|array;      
    }
?>