<?php
namespace MyApp\Data;
require_once realpath("src/Data/database.php");
class controller{
            private $db;
                
            public function __construct(){
                $this->db= new Database();
            }
            public function insertItem($value){
                $checked = "NO";
                $iQuery = "INSERT INTO td_list(title,completed) Values('$value', '$checked')";
                $qResult = $this->db->insert($iQuery);
            }
            public function retrieveAllItem(){
                $sQuery = "SELECT * FROM td_list";
                $qResult = $this->db->select($sQuery);
                if($qResult){
                    return $qResult;
                }
            }



        
}