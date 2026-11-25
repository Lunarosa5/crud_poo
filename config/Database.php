<?php
class Database
{
    private static $conn;
    // $conn = connection

    // static serve para conseguir usar tal método sem instanciar a classe

    public static function conectar()
    {
        // se eu mesmo nao estiver instanciando o atributo $conn
        if (!self::$conn) {

            // eu vou mesmo irei instanciar 
            self::$conn = new PDO(
                "pgsql:host=192.168.10.59;port=5432;dbname=musicas_crud",
                "musicas_crud",
                "musicas_crud",
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        }
        return self::$conn;
    }
}
