<?php

/**
 * Exemple per a M07.
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Model les imatges.
 *
**/

namespace Models;

use DateTime;

/**
 * Imatges
*/
class Reserves
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

        $stmt = $this->sql->query("SELECT r.id, r.ocupants, r.data_reserva, r.data_entrada, r.data_sortida, h.preu as 'preu', r.num_targeta, u.email as 'usuari', h.nom as 'habitacio' FROM reserva r LEFT JOIN habitacio h ON r.id_habitacio = h.id LEFT JOIN usuari u ON r.id_usuari = u.id;")->fetchAll();

        return $stmt;
    }

    public function add($ocupants, $data_reserva, $data_entrada, $data_sortida, $num_targeta, $id_usuari, $id_habitacio)
    {   

        $query = "insert into reserva (ocupants,data_reserva,data_entrada,data_sortida,num_targeta,id_usuari,id_habitacio) values (:ocupants, :data_reserva, :data_entrada, :data_sortida, :num_targeta, :id_usuari, :id_habitacio);";
        $stm = $this->sql->prepare($query);
        $stm->execute([":ocupants" => $ocupants, ":data_reserva" => $data_reserva, ":data_entrada" => $data_entrada, ":data_sortida" => $data_sortida, ":num_targeta" => $num_targeta, ":id_usuari" => $id_usuari, ":id_habitacio" => $id_habitacio]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }

    }

    public function get($id)
    {
        $query = "SELECT r.id, r.ocupants, r.data_reserva, r.data_entrada, r.data_sortida, h.preu as 'preu', r.num_targeta, h.nom as 'habitacio', id_usuari, id_habitacio FROM reserva r LEFT JOIN habitacio h ON r.id_habitacio = h.id WHERE r.id = :id;";
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':id' => $id]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        
        return $stm->fetch(\PDO::FETCH_ASSOC);
    }

    public function getByUserId($id_usuari) {
        $stmt = $this->sql->query("SELECT r.id, r.ocupants, r.data_reserva, r.data_entrada, r.data_sortida, h.preu as 'preu', r.num_targeta, h.nom as 'habitacio', r.id_habitacio, r.id_usuari FROM reserva r LEFT JOIN habitacio h ON r.id_habitacio = h.id WHERE id_usuari = $id_usuari;")->fetchAll();

        return $stmt;
    }

    public function update($id, $ocupants, $data_entrada, $data_sortida, $num_targeta, $id_usuari, $id_habitacio)
    {
        $query = "update reserva set ocupants = :ocupants, data_entrada = :data_entrada, data_sortida = :data_sortida, num_targeta = :num_targeta, id_usuari=:id_usuari, id_habitacio=:id_habitacio where id=:id;";
        $stm = $this->sql->prepare($query);
        $stm->execute([":ocupants" => $ocupants, ":data_entrada" => $data_entrada, ":data_sortida" => $data_sortida, ":num_targeta" => $num_targeta, ":id_usuari" => $id_usuari , ":id_habitacio" => $id_habitacio, ":id" => $id]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }

    public function delete($id)
    {
        $query = 'delete from reserva where id=:id;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':id' => $id]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }

    public function buscarDisponiblitat($data_entrada, $data_sortida, $ocupants)
    {
        $data_entrada = new DateTime($data_entrada);
        $data_sortida = new DateTime($data_sortida);
        $diff = $data_entrada->diff($data_sortida);
        $diff = intval($diff->format('%d'));

        $ndate = $data_entrada;
        $habitacions_plenes = array();
        
        //busquem les habitacions que estiguin en els dies que farem la reserva
        for ($i = 0; $i < $diff; $i++) {

            //fem un select de les reserves que coincideixen els dies de la reserva
            $stm1 = $this->sql->prepare("SELECT id_habitacio, count(id_habitacio) as 'ocupades' FROM reserva WHERE :sdate >= data_entrada AND :sdate <= data_sortida GROUP BY id_habitacio ");
            $sdate = $ndate->format('Y-m-d');
            $stm1->execute([':sdate' => $sdate]);

            //fem un bucle comprovant el total d'habitacions que disposem de cada tipus que ens coincideixen
            while ($habitacio_ocupada = $stm1->fetch(\PDO::FETCH_ASSOC)) {

                $stm2 = $this->sql->prepare("SELECT n_total FROM habitacio WHERE id = :id_habitacio");
                $stm2->execute([':id_habitacio' => $habitacio_ocupada["id_habitacio"]]);
                $result = $stm2->fetch(\PDO::FETCH_ASSOC);
                
                // si les habitacions ocupades d'aquest tipus son menys de les que tenim afegim el tipus d'habitacio a la llista de ocupades durant els dies de reserva
                if( $habitacio_ocupada['ocupades'] >= $result['n_total'] ) {
                    $habitacions_plenes[$habitacio_ocupada['id_habitacio']] = $habitacio_ocupada['id_habitacio'];
                }

            }
            $ndate->modify("+1 day");
        }

        $habitacions = array();

        //fem un select de tots els tipus d'habitacions i deprés li esborrarem les ocupades
        $stm1 = $this->sql->prepare("SELECT * FROM habitacio WHERE :ocupants <= max_ocupants");
        $stm1->execute([':ocupants' => $ocupants]);

        //guardem els resultats en un array
        while ($habitacio = $stm1->fetch(\PDO::FETCH_ASSOC)) {
            $habitacions[$habitacio["id"]] = $habitacio;
        }

        //esborrem del array d'habitacions les que estan plenes algun dels dies que teniem pensat fer la reserva
        for ($i = 0; $i < sizeof($habitacions); $i++) {
            if ($habitacions_plenes[$i]) {
                unset($habitacions[$i]);
            }
        }

        //retornem totes les habitacions
        return $habitacions;    

    }

}
