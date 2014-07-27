<?php
class Product extends Main{
    
    public $table1;
	public $db;
    
	function __construct()
	{
		/*
		 *__construct()
		 *類別同名的函式
		 *同時有兩個建構子，則以  __construct() 為優先，同類別名的函數將不會被執行
		 */
		$this->table1 = "tbl_product";
		$this->db = new MyDb();
	}
	
	function __destruct(){
		/*
		 *解構子會在
		 *1.程式執行到結尾
		 *2.程式exit
		 *3.物件被unset
		 *後被執行
		 *
		 *子類別要執行父類別的建解構子，就要特別叫用，使用 parent::
		 *parent::__construct();
		 *parent::__destruct();
		 */
		$this->close();
		//print_r($this->db);
	}
	
	function close()
	{
		$this->db->closeConnection();
	}
	
	function getProduct()
	{
		$sql = "select
				*
				from ".$this->table1;
				
		$rs = $this->db->execute2($sql);
		while($row = $rs->FetchRow())
		{
			$arr[] = $row;
		}
		return $arr;
	}
	
}
?>