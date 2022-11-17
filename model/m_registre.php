<?php

    function email_search($email)
    {

        $connect = pg_connect("host=127.0.0.1 port=5432 dbname=tdiw-g10
                    user=tdiw-g10 password=xgcy1xf7") or die ("Could not connect to server\n");
        $sql = "SELECT id FROM usuari WHERE email=$1";
        $params = [$email];
        $result = pg_query_params($connect, $sql, $params) or die("Cannot execute query:");
        //var_dump(pg_fetch_all($result));
        return pg_fetch_all($result) == false;
    }

    function signUp()
    {
        $connect = pg_connect("host=127.0.0.1 port=5432 dbname=tdiw-g10
                    user=tdiw-g10 password=xgcy1xf7") or die ("Could not connect to server\n");
        $signup = 'n';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $nom = $_POST['nom'];
            $cognom = $_POST['cognom'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $email = $_POST['email'];
            $ciutat = $_POST['ciutat'];
            $direccio = $_POST['direccio'];
            $postal_code = $_POST['postal'];
            $var = email_search($email);
            //var_dump($var);
            if($var)
            {
                $sql = "INSERT INTO usuari (id, nom, cognom, contrasenya, email, poblacio, direccio, codi_postal) values (DEFAULT,$1,$2,$3,$4,$5,$6,$7)";
                $params = [$nom,$cognom,$password,$email,$ciutat,$direccio,$postal_code];
                pg_query_params($connect, $sql, $params) or die("Cannot execute query:");
                $signup = 'correct';
                echo "USUARI REGISTRAT CORRECTAMENT";
            }
            else{
                echo "USUARI JA REGISTRAT";
            }
        }

        return $signup;
    }

?>