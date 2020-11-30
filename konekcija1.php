<?php class Model {

   private $s="s";
   private $server="127.0.0.1";
   private $username="root";
   private $password="";
   private $dp="fizikalne_terapije";
   private $conn;
    
   public function __construct(){
    try{
    $this->conn = new mysqli($this->server,$this->username,
    $this->password,$this->dp);
    } catch(Exception $e){
    echo "Nije povezano" .$e->getMessage();
    }
}

    public function fetch(){
		$data=null;
		$query="SELECT * FROM fizikalne_terapije ft join tip t on t.tipID=ft.tipID join fizioterapeut f on f.fizioterapeutID=ft.fizioterapeutID";
		
		if($sql=$this->conn->query($query)){
		while($row=mysqli_fetch_assoc($sql)){
		$data[]=$row;
		}
  }
  return $data;
}

	public  function prikazID($id)
    {
		$data=null;
        $query = "SELECT * FROM fizikalne_terapije ft join tip t on ft.tipID=t.tipID join fizioterapeut f on ft.fizioterapeutID=f.fizioterapeutID WHERE fizioterapijeID='$id'";
        if($sql=$this->conn->query($query)){
		    while($row=$sql->fetch_assoc()){
				$data=$row;
		}
	}
	return $data;
        
  }
  
}

?>