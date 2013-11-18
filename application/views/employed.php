<?php

    class employed {

        // constructor
        function __construct() {

        }
        // destructor
        function __destruct() {

        }
        /**
         * agregar nuevo usuario
         */
        public function Salvar($pname,$ppassword,$pcategoria,$pemail,$pimagen, $ppage,$pdb) {

        	$this->db = $pdb;
            $result = mysql_query("INSERT INTO `interprise`(`name`, `password`, `categoria`, `email`, `imagen`, `created_at`, `page`) 
                VALUES ('$pname','$ppassword','$pcategoria','$pemail','$pimagen', SYSDATE( ), '$ppage')");
            // check for successful store
            if ($result) {
                return true;
            } else {
                return false;
            }
            mysql_close($this->db);
        }

        public function login($email,$passw,$pdb){

            $this->db = $pdb;

            $result=mysql_query("SELECT COUNT(*) FROM `interprise` WHERE `email`='$email' AND `password`='$passw' "); 
            $count = mysql_fetch_row($result);
            /*como el usuario debe ser unico cuenta el numero de ocurrencias con esos datos*/
            if ($count[0]==0){
                return false;
            }else{
                return true;
            }
        }

        public function home($pdb){

            $table="";
            $this->db = $pdb;
            $result = mysql_query("SELECT * FROM `interprise` ");
            // check for successful store   
            $table.= "<table>"; 
            $table.= "<tr> 
                        <td>Id Pyme</td> 
                        <td>Name</td> 
                        <td>Categoria</td> 
                        <td>Email</td> 
                        <td>Imagen</td> 
                        <td>Fecha Creacion</td> 
                        <td>Page Web</td>
                    </tr>";
                                        
            while ($row = mysql_fetch_row($result)){

               $table.= "<tr> 
                    <td>$row[0]</td> 
                    <td>$row[1]</td> 
                    <td>$row[3]</td> 
                    <td>$row[4]</td> 
                    <td><img src=$row[5] width='100' height='100'></td>  
                    <td>$row[6]</td> 
                    <td><a href=$row[8]>$row[8]</a> 
                    </td> 
                </tr>";
            } 
            $table.= "</table>"; 
            return $table;
        }
    }

?>
