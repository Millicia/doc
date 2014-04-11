<?php
require("connect_to_mysql.class.php");
class sql_commands extends Connect
{
		private $db;
	//admin login	
	function login($username,$password)		
	{
		$this->db=Connect::connect();
		
		$id=0;
		
		$query="select * from adminlogin where username='$username' and password='$password' LIMIT 1";
		$result=$this->db->query($query);	
		$num_row=$result->num_rows;
		if($num_row==1)
		{
			for($a=0; $a<$num_row; $a++)
			{
				$rows=$result->fetch_assoc();
				$id=$rows['id'];
			}
		}
		return $id;
	}
	//registering user
	function addUser($name,$Lname,$username,$email,$pass,$rpass,$cell)
	{
		$info;
		
		if(isset($name) && isset($Lname) && isset($username) && isset($email) && isset($pass) && isset($rpass) && isset($cell))
		{
		    $this->db=Connect::connect();
			$query="insert into register values(null,'$name','$Lname','$username','$email','$pass','$rpass','$cell')";
		    $result=$this->db->query($query);
		    $msg=mysqli_insert_id($this->db);
			
		}
	}
	//user login
	
	function userlogin($username,$password)		
	{
		$this->db=Connect::connect();
		
		$id=0;
		
		$query="select * from register where username='$username' and password='$password' LIMIT 1";
		$result=$this->db->query($query);	
		$num_row=$result->num_rows;
		if($num_row==1)
		{
			for($a=0; $a<$num_row; $a++)
			{
				$rows=$result->fetch_assoc();
				$id=$rows['id'];
			}
			
		}
		return $id;
	}
	
	/*
	function add_pro($name,$price)
	{
		$msg;
		
		$this->db=Connect::connect();
		
		$query="select * from products where product_name='$name'";
		$result=$this->db->query($query);
		$num_rows=$result->num_rows;
		if($num_rows >0)
		{
			$msg= $num_rows;
			
			
		}
		else
		{

		$query="insert into products values(null,'$name','$price')";
		$result=$this->db->query($query);
		$msg=mysqli_insert_id($this->db);	
		}
	
	return $msg;
	}
	
	function select_all_products()
	{
		$msg="";
		$this->db=Connect::connect();
		$query="select id, product_name,date_added from products";
		$result=$this->db->query($query);	
		$num_row=$result->num_rows;
		if($num_row>0)
		{
			for($a=0; $a<$num_row; $a++)
			{
				$rows=$result->fetch_assoc();
				$id=$rows['id'];
				$pro=$rows['product_name'];
				$date=$rows['date_added'];
				
				$msg.=$date." ".$id." ".$pro." "."<a href='edit.php?edit=$id'>Edit</a>"." "."<a href='Inventory.php?delete=$id'>Delete</a>"."<br/>";
			}
		}
		return $msg;
	}
	
	/*function delete($id)
	{
		$this->db=Connect::connect();
		$query="delete from products where id='$id'";
		$result=$this->db->query($query);		
	}
	
	function select_for_editing($id)
	{
		$arr_product="";
		$this->db=Connect::connect();
		$query="select * from products where id='$id'";
		$result=$this->db->query($query);	
		$num_row=$result->num_rows;
		if($num_row>0)
		{
			for($a=0; $a<$num_row; $a++)
			{
				$rows=$result->fetch_assoc();
				$arr_product[0]=$rows['product_name'];
				$arr_product[1]=$rows['price'];
				$arr_product[2]=$rows['details_text'];
				$arr_product[3]=$rows['category'];
				$arr_product[4]=$rows['subcategory'];
				$arr_product[5]=$rows['id'];
				       
				
			}
		}
		return $arr_product;
	}
	function edit_rec($name,$price,$descrip,$category,$subcategory,$id)
	{
	
		$this->db=Connect::connect();
		$query="update products set product_name='$name',price='$price',details_text='$descrip',category='$category',subcategory='$subcategory' where id='$id'";
		$result=$this->db->query($query);	
		
	}*/
	
	
	/*
	function view_specific_product($id)
	{
		$this->db=Connect::connect();
		$display="";
		$query="select * from products where id='$id'";
		$result=$this->db->query($query);	
		$num_row=$result->num_rows;
		if($num_row>0)
		{
			for($a=0; $a<$num_row; $a++)
			{
				$rows=$result->fetch_assoc();
				$product=$rows['product_name'];
				$price=$rows['price'];
				$details=$rows['details_text'];
				$category=$rows['category'];
				$subcategory=$rows['subcategory'];  
				$display=$product."<br/></br/>".$price."<br/></br/>".$details."<br/></br/>".$category."<br/></br/>".$subcategory;  
				
			}
		}
		return $display;	
	}
	
	function shopping_cart($id)
	{
		$this->db=Connect::connect();
		$output="";
		$query="select * from products where id=$id";
		$result=$this->db->query($query);	
		$num_row=$result->num_rows;
		if($num_row>0)
		{
			for($a=0; $a<$num_row; $a++)
			{
				$rows=$result->fetch_assoc();
				$product=$rows['product_name'];
				$price=$rows['price'];
				$details=$rows['details_text'];
				$category=$rows['category'];
				$subcategory=$rows['subcategory']; 
				
				$output.="<tr>";
				$output.="<td><a href=./product.php?id=$id>$product</a><br/><img src=\"proImages/$id.jpg\" alt=\"$product\" width=\"40\" height=\"52\" border=\"1\" </td>";
				$output.="<td>".$details."</td>";
				$output.="<td>".$price."</td>";
				$output.="<td>".$category."</td>";
				$output.="<td>".$subcategory."</td>";
						
				
			}
		}
		return $output;
	}
	function total_cost($id,$value)
	{
		$this->db=Connect::connect();
		$output="";
		$subtotal="";
		$total="";
		$query="select * from products where id=$id";
		$result=$this->db->query($query);	
		$num_row=$result->num_rows;
		if($num_row>0)
		{
			for($a=0; $a<$num_row; $a++)
			{
				$rows=$result->fetch_assoc();
				$price=$rows['price'];
				$subtotal=$value*$price;
			}
			//$total+=$subtotal;
		}
		return $subtotal;
	}
*/

}


?>