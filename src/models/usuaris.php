<?php

namespace Models;


class Usuaris
{

    private $sql;

    /**
     * Constructor de la classe imatges amb PDO
     *
     * @param array $config
     */
    public function __construct($config)
    {   
        $dbHost = $config['host'];
        $dbName = $config['dbname'];
        $dsn = "mysql:host={$dbHost};dbname={$dbName};charset=utf8";
        $usuari = $config['user'];
        $clau = $config['pass'];

        try {
            $this->sql = new \PDO($dsn, $usuari, $clau);
            echo "<script>console.log('Connected to the database succefully')</script>";
        } catch (\PDOException $e) {
            die('Ha fallat la connexió: ' . $e->getMessage() . " $usuari");
        }
    }

    /**
     * get et retorna la imatge amb l'id
     *
     * @param int $id
     * @return array imatge amb ["titol", "url"]
     */
    public function getAll()
    {   

        $stmt = $this->sql->query("SELECT id, nom, cognoms, email, password, data_naixament, rol FROM usuari;")->fetchAll();

        return $stmt;
    }

    public function add($nom, $cognoms, $email, $password, $data_naixament, $rol)
    {   

        $query = "insert into usuari (nom,cognoms,email,password,data_naixament,rol) values (:nom, :cognoms, :email, :password, :data_naixament, :rol);";
        $stm = $this->sql->prepare($query);
        $stm->execute([":nom" => $nom, ":cognoms" => $cognoms, ":email" => $email, ":password" => $password, ":data_naixament" => $data_naixament, ":rol" => $rol]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }

    }

    public function get($id)
    {
        $query = 'select id, nom, cognoms, email, password, data_naixament, rol from usuari where id=:id;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':id' => $id]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        
        return $stm->fetch(\PDO::FETCH_ASSOC);
    }

    public function update($id, $nom, $cognoms, $email, $password, $data_naixament, $rol)
    {
        $query = "update usuari set nom = :nom, cognoms = :cognoms, email = :email, password = :password, data_naixament = :data_naixament, rol = :rol where id=:id;";
        $stm = $this->sql->prepare($query);
        $stm->execute([":nom" => $nom, ":cognoms" => $cognoms, ":email" => $email, ":password" => $password, ":data_naixament" => $data_naixament, ":rol" => $rol , ":id" => $id]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }

    public function delete($id)
    {
        $query = 'delete from usuari where id=:id;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':id' => $id]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }

    public function getByEmail($email)
    {   
        $query = 'select * from usuari where email=:email;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':email' => $email]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        
        return $stm->fetch(\PDO::FETCH_ASSOC);
    }

}
