<?php
if (file_exists('conn/DbConn.php')) {
	include_once 'conn/DbConn.php';
}else {
	include_once '../conn/DbConn.php';
}



/**
 * 
 * @author sky
 *
 */


class Manager{
	//删除用户
	public static function delUserById($id){
		$sql="delete from manager where id='{$id}'";
		$conn=DbConn::getInstance();
		$re=$conn->add($sql);
		return $re;
	}
	
	
	
	
	//查询用户列表
	public static function getUserList(){
		$sql="select id,userName,userType,remark from manager";
		$conn=DbConn::getInstance();
		$re=$conn->queryAll($sql);
		return $re;
	}
	
	
	
	public static function checkLogin($userName,$password){
		$sql="select * from manager where userName='{$userName}' and password='{$password}'";
		$conn=DbConn::getInstance();
		$re=$conn->queryOne($sql);
		return $re;
		
		
		
	}
	
	public static function adduser($userName,$password,$userType,$remark){
  $sql="insert manager(userName,password,userType,remark)values('{$userName}','{$password}','{$userType}','{$remark}')";
  $conn=DbConn::getInstance();
  $re=$conn->add($sql);
  return $re;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}//end of class

?>