<?php

class Connection
{
    public static function make($configs)
    {
        try{
            //return new PDO('mysql:host=localhost;dbname=mytodo', 'root', '1234');
            return new PDO(
                $configs['connection'].
                ';dbname='.$configs['name'],
                $configs['user'],
                $configs['password'],
                $configs['options']
            );
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}

// $connection =  new Conection();
// $connection->make();

//Connection::make();