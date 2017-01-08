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
class NewsTypes{
	//添加新闻分类
	public static function addNewsType($typeName){
		$sql="insert newsTypes (typeName)values('{$typeName}')";
		$conn=DbConn::getInstance();
		$re=$conn->add($sql);
		return $re;
		
		
	}
	
	//获得新闻分类
	public static function getNewsTypes(){
		$sql="select * from newsTypes";
		$conn=DbConn::getInstance();
		$re=$conn->queryAll($sql);
		return $re;
	}
	//根据typeId得到一条新闻分类
	public static function getNewsTypesById($typeId){
		$sql="select * from newsTypes where typeId={$typeId}";
		$conn=DbConn::getInstance();
		$re=$conn->queryOne($sql);
		return $re;
		
		
		
	}
	
	
}








?>