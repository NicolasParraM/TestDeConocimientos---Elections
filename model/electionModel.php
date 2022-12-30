<?php

    require_once ("conexion.php");


    class Election extends Conexion{
        private $intID;
        private $intYear;
        private $intVoteCount;
        private $strPParty;
        private $intCounty;

        public function __construct()
        {          
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->connect();
        }

        public function getCounty() {
          $sql = "SELECT * FROM county";
          $execute = $this->conexion->query($sql);
          $request = $execute->fetchAll(PDO::FETCH_ASSOC);
          return $request;
      }
          public function getAll() {
            $sql = "SELECT * FROM election";
            $execute = $this->conexion->query($sql);
            $request = $execute->fetchAll(PDO::FETCH_ASSOC);
            return $request;
        }

        public function getEnum(){
            $query = 'SHOW COLUMNS FROM election WHERE field = "political_party"';
            $execute = $this->conexion->query($query);
            $row = $execute->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        }

        
        public function insert( int $year, int $voteCount, string $pparty, string $county){
            $this->intYear = $year;
            $this->intVoteCount = $voteCount;
            $this->strPParty = $pparty;
            $this->intCounty = $county;
          
            try {
              $sql = "INSERT INTO election( year, vote_count, political_party, code_county_id) VALUES(?,?,?,?)";
              $insert = $this->conexion->prepare($sql);
              $arrayName = array($this->intYear, $this->intVoteCount, $this->strPParty, $this->intCounty);
              $resinsert = $insert->execute($arrayName);
              
              if ($resinsert) {
                echo "ok";
              } else {
                echo "Error al insertar el producto en la base de datos";
              }
            } catch (PDOException $e) {
              echo "Error:". "<br>" . $e;
            }
          }
    }

?>