<?php
class DBConClass{
	protected $db;

	public function __construct(){
        $this->dbConnect();
	}

	private function dbConnect() {
		try{
			// MySQL PDO 객체 생성
			$this->db = new PDO(_DSN, _DBUSER, _DBPASS);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
		} catch(PDOException $ex){
			die("오류 : ".$ex->getMessage());
		}
	}
}
?>
