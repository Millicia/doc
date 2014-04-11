<?php
require("sql_commands.class.php");
  class admin extends sql_commands
   {
	   
	 // adding products
	 
	function add_pro($name,$price,$descrip,$category)
	{
		$msg;
		
		$this->db=Connect::connect();
		
		$query="insert into products values(null,'".$name."','".$price."','".$descrip."','".$category."')";
		$result=$this->db->query($query);
		$msg=mysqli_insert_id($this->db);
		
		return $msg;
	}
	//vewing products
	
	function view_pro($name,$price)
	{
		
		$msg;
		
		$this->db=Connect::connect();
		
		$query="select * from products where pro_name='".$name."'";
		$result=$this->db->query($query);
		$num_rows=$result->num_rows;
		
		if($num_rows >0)
		{
			$msg= $num_rows;
			
			
		}
		else
		{

			echo' product does not exist';
		}
	
	return $msg;
	}
	
	function select_all_products()
	{
		$msg="";
		$this->db=Connect::connect();
		$query="select pro_id, pro_name,pro_price from products";
		$result=$this->db->query($query);	
		$num_row=$result->num_rows;
		if($num_row>0)
		{
			for($a=0; $a<$num_row; $a++)
			{
				$rows=$result->fetch_assoc();
				$id=$rows['pro_id'];
				$pro=$rows['pro_name'];
				$price=$rows['pro_price'];
				
				$msg.=$id." ".$pro." "."<a href='editpro.php?edit=$id'>Edit</a>"." "."<a href='indexAdmin.php?delete=$id'>Delete</a>"."<br/>";
			}
		}
		return $msg;
	}
	
	function delete($id)
	{
		$this->db=Connect::connect();
		$query="delete from products where pro_id='".$id."'";
		$result=$this->db->query($query);		
	}
	
	function select_for_editing($id)
	{
		$arr_product="";
		$this->db=Connect::connect();
		$query="select * from products where pro_id='".$id."'";
		$result=$this->db->query($query);	
		$num_row=$result->num_rows;
		if($num_row>0)
		{
			for($a=0; $a<$num_row; $a++)
			{
				$rows=$result->fetch_assoc();
				$arr_product[0]=$rows['pro_name'];
				$arr_product[1]=$rows['pro_price'];
				$arr_product[2]=$rows['pro_details'];
				$arr_product[3]=$rows['pro_cat'];
				
				$arr_product[4]=$rows['pro_id'];
				       
				
			}
		}
		return $arr_product;
	}
	
	function edit_pro($name,$price,$descrip,$category,$id)
	{
	
		$this->db=Connect::connect();
		$query="update products set pro_name='".$name."',pro_price='".$price."',pro_details='".$descrip."',pro_cat='".$category."' where pro_id='$id' LIMIT 1";
		$result=$this->db->query($query);
		$msg=mysqli_insert_id($this->db);	
		
	}
	
	
	
	function view_specific_product($id)
	{
		$this->db=Connect::connect();
		$display="";
		$query="select * from products where pro_id='".$id."'";
		$result=$this->db->query($query);	
		$num_row=$result->num_rows;
		if($num_row>0)
		{
			for($a=0; $a<$num_row; $a++)
			{
				$rows=$result->fetch_assoc();
				$product=$rows['pro_name'];
				$price=$rows['pro_price'];
				$details=$rows['pro_details'];
				$category=$rows['pro_cat'];
				 
				$display=$product."<br/></br/>".$price."<br/></br/>".$details."<br/></br/>".$category."<br/></br/>";  
				
			}
		}
		return $display;	
	}
	   
  }





?>