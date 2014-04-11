<?php
require("adminInterface.class.php");
class add_product extends admin
{
	
	function add($name,$price,$descrip,$category)
	{
		$obj=new admin();
		$id=0;
		if(isset($name)&&isset($price)&&isset($descrip)&&isset($category))
		{
			$id=$obj->add_pro($name,$price,$descrip,$category);	
		}
		else
		{
			$id= "Fields not proparly filled <a href='.php'>Click Here</a>";	
			exit;
		}
		return $id;
	}
	function all()
	{
		$obj=new admin();
		return $obj->select_all_products();
	}
	
	function del($id)
	{
		$obj=new admin();
		$obj->delete($id);
		$pic_del=("images/$id.jpg");		
		
		if(file_exists($pic_del))
		{
			unlink($pic_del);	
		}
	}
	
	function return_for_edit($id)
	{
		$arr="";
		$obj=new sql_commands();
		$arr=$obj->select_for_editing($id);
		return $arr;
	}
	function edit($name,$price,$descrip,$category,$id)
	{
		$obj=new admin();
		$obj->select_for_editing($id);
		$obj->edit_pro($name,$price,$descrip,$category,$id);
	}
	
}


?>