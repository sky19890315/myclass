<?php
header("content-type:text/html;charset=utf-8");
include_once 'application/core/DbConn.php';

//所有模型的父类
/**
 * 
 * @author sky
 *
 */
class Model{
	public $tableName=NULL;
	public $where=NULL;
	public $order=NULL;
	public $limit =NULL;
	//设置条件
	public function where($where){
		$this->where =$where;
		//把对象返回到M函数里
		return $this;
	}
	//设置排序
	public function order($order){
		$this->order =$order;
		return $this;
	}
	//设置分页
	public function limit($limit){
		$this->limit =$limit ;
		return $this;
	}
	
	
	
	
	//查询 返回数组

	public function select(){
		$sql="select * from  {$this->tableName}  ";
		if ($this->where != NULL) {
			//不能少了空格
			$sql .= " where {$this->where}";
			
		}
		if ($this->order != NULL) {
			$sql .="  oder {$this->order}";
		}
		//不要少了限定条件
		if ($this->limit !=NULL) {
			$sql .="  limit  {$this->limit}";
			
		}
		
		$conn=DbConn::getInstance();
		$re=$conn->queryAll($sql);
		return $re;
	}
	
	//查询一条记录 返回一维数组
	public function find(){
	$sql="select * from  {$this->tableName}";	
	if ($this->where !=NULL) {
		$sql .="  where   {$this->where}";
	}	
		$conn=DbConn::getInstance();
		$re=$conn->queryOne($sql);
		return $re;
		//如果没有写where 条件则返回表中的第一条
		
	}
	
	//添加记录
	public function insert($date){
		//字段名字符串
		$str1= "";
		//值到字符串
		$str2 ="";
		foreach ($date as $k=>$v){
		$str1 .="{$k},";
		$str2 .="'{$v}',";
								}
								
		$str1=rtrim($str1,",");
		$str2=rtrim($str2,",");
	
		$sql="insert {$this->tableName}  ({$str1}) values ({$str2});";
		$conn=DbConn::getInstance();
		$result=$conn->add($sql);
		return $result;
		
	}
	
	
	//修改记录
	public function update($date){		
		//值到字符串
		$str =NULL;	
		foreach($date as $k=>$v){			
		//最好将逗号两边都留空格
		 $str .="{$k}='{$v}',";	
		}//end of foreach
		//注意 截取不能放在遍历里面 会导致严重到错误！！！！！！！！！！！！！！！
		$str=rtrim($str,",");
	$sql="update {$this->tableName} set {$str}";
	if ($this->where !=NULL) {
		$sql .="   where  {$this->where};";
	/* 注意将SQL语句拼装好 */
		$conn=DbConn::getInstance();
		$result=$conn->add($sql);
		return $result;
	}
		
	}
	//删除记录
	public function delete(){
		$sql="delete from {$this->tableName}";
		if ($this->where != NULL) {
			$sql .="  where {$this->where}";
			$conn=DbConn::getInstance();
			$result=$conn->add($sql);
			return $result;
		}
	}//end of delete
	
	//count查询 分页
	public function count(){
		$sql="select count(*) from {$this->tableName}";
		
		if ($this->where != NULL) {
			$sql .="   where {$this->where}";}		
			//注意if的结位置			
		$conn=DbConn::getInstance();	
			$re=$conn->queryOne($sql);
			return $re[0];
		
	}//end of count
	
	//sum查询
	public function sum($fieldName){
	
		$sql="select sum({$fieldName}) from ($this->tableName)";
		if ($this->where !=NULL) {
			$sql .="   where{$this->where}";
			$conn=DbConn::getInstance();
			$re=$conn->queryOne($sql);
			return $re[0];		}
	
	}//end of sum
	
	//avg查询
	public function avg(){
	
		$sql="select avg({$fieldName}) from ($this->tableName)";
		if ($this->where !=NULL) {
			$sql .="   where{$this->where}";
			$conn=DbConn::getInstance();
			$re=$conn->queryOne($sql);
			return $re[0];		}
	
	}//end of avg
	
	//max查询
	public function max(){
		$sql="select max({$fieldName}) from ($this->tableName)";
		if ($this->where !=NULL) {
			$sql .="   where{$this->where}";
			$conn=DbConn::getInstance();
			$re=$conn->queryOne($sql);
			return $re[0];		}
	
	
	}//end of max
	
	
	//min查询
	public function min(){
	
		$sql="select min({$fieldName}) from ($this->tableName)";
		if ($this->where !=NULL) {
			$sql .="   where{$this->where}";
			$conn=DbConn::getInstance();
			$re=$conn->queryOne($sql);
			return $re[0];			}
	
	}//end of min
	
	//分页查询
	
	public function limitPage($currentPage,$pageSize=15 ){
		$start=($currentPage-1)*$pageSize;
		$sql="select * from  {$this->tableName}  limit {$start},{$pageSize} ";
	
		
		$conn=DbConn::getInstance();
		$re=$conn->queryAll($sql);
		return $re;
		
		
		
		
	}
	/**
	 * @sunkeyi
	 */
	//执行SQL语句
	public function queryAll($sql){
		$conn=DbConn::getInstance();
		$re=$conn->queryAll($sql);
		return $re;
		
	}
	
	//执行SQL语句
	public function queryOne($sql){
		$conn=DbConn::getInstance();
		$re=$conn->queryOne($sql);
		return $re;
	
	}
/* 执行 */	
	//执行SQL语句
	public function exec($sql){
		$conn=DbConn::getInstance();
		$re=$conn->add($sql);
		return $re;
	
	}
	
	
	
}//end of class










?>