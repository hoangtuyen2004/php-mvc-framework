<?php 
namespace MVC;

class Model {
    protected $PDO = NULL;
    protected $sql = "";
    protected $sta = NULL;
    public function __construct() {
        $host = DBHOST;
        $dbname = DBNAME;
        $dbcharset = DBCHARSET;
        $dbuser = DBUSER;
        $dbpass = DBPASS;
        try {
            $this->PDO = new \PDO("mysql:host=$host;dbname=$dbname;charset=$dbcharset",$dbuser,$dbpass);
        } catch (\PDOException $mes) {
            die($mes->getMessage());
        }
    }

    public function GetAll() {
        $this->sta = $this->PDO->prepare($this->sql);
        $this->sta->execute();
        return $this->sta->fetchAll();
    }

    public function GetOne() {
        $this->sta = $this->PDO->prepare($this->sql);
        $this->sta->execute();
        return $this->sta->fetch();
    }
    //Đặt lại lệnh truy vấn
    public function setQuery($sql) {
        $this->sql = $sql;
    }
    public function Execute($options=array()) {
        $this->sta = $this->PDO->prepare($this->sql);
        if($options) {  //If have $options then system will be tranmission parameters
            for($i=0;$i<count($options);$i++) {
                $this->sta->bindParam($i+1,$options[$i]);
            }
        }
        $this->sta->execute();
        return $this->sta;
    }

    public function __destruct() {
        $this->PDO = NULL;
        $this->sta = NULL;
            
    }
}
?>