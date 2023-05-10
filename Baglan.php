<?php 

class Database { //Database adinda bir class olusturduk ama kullanmak icin onu bir degiskene atamak gerek
 


  public function __construct($host='localhost',$dbname='users',$username='root',$password=''){
    try {
      $this->host = $host; // bunu yapmamizin nedeni parametre olarak tanimladigimiz degerlerin yazdigimiz degerlerle eslesmesi
      $this->dbname = $dbname;
      $this->username = $username;
      $this->password = $password;
      $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->username,$this->password);
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo 'baglanilan veritabani :'.$this->dbname;
    } catch (PDOException $e) {
      echo 'Hata : '.$e->getMessage();
    }
  }
   
}

// veritabanini kullanmak istedigimizde sorgu yani prepare yaparken $db->db diye yazicaz cunku icerisindeki property olan yani ozellik olan
// db ozelligine ulasmamiz lazim

?>