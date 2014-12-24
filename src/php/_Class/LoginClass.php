<?php

require_once '_Class/mysql_class.php';

class LoginClass
{
    private $conexao;

    public function __construct(){
        $this->conexao = new mySQLAdapter();
    }

    public function authUser($username, $password){
        $query =  "
                    select
                        count(*) as result
                    from
                        usuario
                    where
                        login = '$username'
                        and senha = md5('$password')
                  ";

        $resultSet = $this->conexao->sql_query($query);

        $count = 0;

        while ($row = mysql_fetch_assoc($resultSet)) {
            $count = $row['result'];
        }

        return $count;
    }
} 