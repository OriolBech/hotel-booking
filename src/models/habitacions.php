<?php

/**
 * 
 * @author: Oriol Bech.
 * @author: Adrián Pons.

 *
 * Model per Habitacions.
 *
**/

namespace Models;

/**
 * Imatges
*/
class Habitacions
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

        $stmt = $this->sql->query("SELECT id, nom, preu, m2, serveis, max_ocupants, n_total, descripcio FROM habitacio;")->fetchAll();

        return $stmt;
    }

    public function add($nom, $preu, $m2, $serveis, $max_ocupants, $n_total, $descripcio)
    {   

        $query = "insert into habitacio (nom,preu,m2,serveis,max_ocupants,n_total,descripcio) values (:nom, :preu, :m2, :serveis, :max_ocupants, :n_total, :descripcio);";
        $stm = $this->sql->prepare($query);
        $stm->execute([":nom" => $nom, ":preu" => $preu, ":m2" => $m2, "serveis" => $serveis, "max_ocupants" => $max_ocupants, "n_total" => $n_total, "descripcio" => $descripcio]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }

    }

    public function get($id)
    {
        $query = 'select id, nom, preu, m2, serveis, max_ocupants, n_total, descripcio from habitacio where id=:id;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':id' => $id]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        
        return $stm->fetch(\PDO::FETCH_ASSOC);
    }

    public function update($id, $nom, $preu, $m2, $serveis, $max_ocupants, $n_total, $descripcio)
    {
        $query = "update habitacio set nom = :nom, preu = :preu, m2 = :m2, serveis = :serveis, max_ocupants = :max_ocupants, n_total = :n_total, descripcio = :descripcio where id=:id;";
        $stm = $this->sql->prepare($query);
        $stm->execute([":nom" => $nom, ":preu" => $preu, ":m2" => $m2, ":serveis" => $serveis, ":max_ocupants" => $max_ocupants, ":n_total" => $n_total ,":id" => $id, ":descripcio" => $descripcio]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }

    public function delete($id)
    {
        $query = 'delete from habitacio where id=:id;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':id' => $id]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }

}
