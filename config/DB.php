<?php
    class DB{
        public static function conectar(){
            $url_pg="pgsql: host=localhost; port=5433; dbname=tecsoluciones";
            $user_pg="postgres";
            $password_pg="123";

            $cn=new PDO($url_pg, $user_pg, $password_pg);
            return $cn;

        }

    }
?>