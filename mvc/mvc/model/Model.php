<?php

class Model {
        public $conn;
        public $url = 'localhost';
        public $username='root';
        public $password='';
        public $db = 'Adds';

    function __construct(){
        $this->conn = mysqli_connect($this->url, $this->username, $this->password);
        mysqli_select_db($this->conn, $this->db);
        mysql_query($this->conn, "SET NAMES 'UTF-8'");
    }

    public function getlogin(){
        
        $conn = mysqli_connect($url,$username,$password,$db);

        if(!$conn){
            die('Could not Connect My Sql:' .mysql_error());
        }

        if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
            $username = $_POST['username'];
            $password= $_POST['password'];

            $sql_select = "SELECT * FROM customer WHERE name='$username'";
            
            $res = mysqli_query( $conn , $sql_select);
            
            $fecth_data = mysqli_fetch_array($res);
            
            if( $fecth_data["name"] == $username){
                $fecth_password = $fecth_data["password"];
                if($fecth_password == $password){
                    return 'login';
                } else{
                    return 'Unknown username. Check again or try your email address.';
                }
                
            }
            
        }

    
    }
}

?>