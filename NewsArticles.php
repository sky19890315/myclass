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
class NewsArticles{
	//查询新闻并分页
	public static function getNewsInfo($currentPage,$keyword,$searchType){
		//每页显示6条结果
	$pageSize = 6;
	//起始查询条件为当期请求页减1乘以每页显示到条数
	//如第一页就是从0开始查
	//第二页就是从第6条开始查
	$start = ($currentPage-1)*$pageSize;
	//设置初始值
	$totalRow=0;
	$totalPage=0;
	//查询新闻总数
	$sql2="select count(*) from newsArticles";		
	$sql1="select * from newsArticles a inner join newsTypes b on a.typeId=b.typeId order by articleId limit {$start},{$pageSize}";
	//if语句成立 下面到新值将覆盖上面到变量值 相当于if esle语句
	if ($keyword != NULL) {
		$sql2="select count(*) from newsArticles where {$searchType} like '%{$keyword}%' ";
		$sql1="select * from newsArticles a inner join newsTypes b on a.typeId=b.typeId and {$searchType} like '%{$keyword}%' order by articleId limit {$start},{$pageSize}";
	}//end of if
	$conn=DbConn::getInstance();
	//先后查询顺序没影响
	$re2=$conn->queryOne($sql2);
	$totalRow =$re2["0"];

	/* 总页数 */
	//总分页书等于总行数除以每页显示到条数  取整
	$totalPage=ceil($totalRow/$pageSize);
	/* 返回两个值 数组 */
	$re1=$conn->queryAll($sql1);
	return $arr=array($re1,$totalPage);
}
	//根据articleId删除新闻 20161219
	//先删除评论再删除新闻
	public static function delNewsById($articleId){
		$sql1="delete from reviews where articleId={$articleId}";
		$sql2="delete from newsArticles where articleId={$articleId}";
		$conn=DbConn::getInstance();
		$re=$conn->add($sql1);
		$re=$conn->add($sql2);
		return $re;		
		
	}

	
	
	
	
	//添加新闻
	public static function addNews($content,$title,$typeId,$userName,$writer,$source,$imagepath){
		$sql="insert newsArticles (content,title,typeId,userName,writer,source,imagepath)
		values('{$content}','{$title}','{$typeId}','{$userName}','{$writer}','{$source}','{$imagepath}')";
		$conn=DbConn::getInstance();
		$re=$conn->add($sql);
		return $re;
	}
	
	public static function getHotNews(){
		$sql="select * from newsTypes a inner join newsArticles b on a.typeId=b.typeId
				order by hints desc limit 0,6";
		$conn=DbConn::getInstance();
		$re=$conn->queryAll($sql);
		return $re;
		}
	public static function getCount(){
		$sql="select count(*) from newsArticles";
		$conn=DbConn::getInstance();
		$arr=$conn->queryOne($sql);
		$re=$arr;
		return $re["count(*)"];
	}	
		//根据新闻分类得到新闻
		public static function getnewsTwo($typeId){
			 $sql="select * from newsArticles where typeId={$typeId} order by dateandtime desc limit 0,2" ;
				$conn=DbConn::getInstance();
				$re=$conn->queryAll($sql);
				return $re;
				
		}
	//根据新闻类型得到新闻
	public static function getNewsByTypeId($typeId){
		$sql="select * from newsArticles where typeId={$typeId}";
		$conn=DbConn::getInstance();
		$re=$conn->queryAll($sql);
		return $re;
	
	
	
	
	
	}
	/* 搜索新闻 */	
	public static function searchNews($searchType,$keyword){
		$sql="select * from newsArticles where {$searchType} like '%{$keyword}%'";
		$conn=DbConn::getInstance();
		$re=$conn->queryAll($sql);
		return $re;
		
		
		
	}
		
//根据articleId得到新闻
	public static function getNewsById($articleId){
		$sql="select * from newsArticles a inner join newsTypes b on a.typeId=b.typeId and articleId={$articleId}";
		$conn=DbConn::getInstance();
		$re=$conn->queryOne($sql);
		return $re;
		
		
		
	}
		
	
	//增加新闻点击量
	public static function addHints($articleId){
		$sql="update newsArticles set hints=hints+1 where articleId={$articleId}";
		$conn=DbConn::getInstance();
		$re=$conn->add($sql);
		return $re;
		
		
	}
	
	
	
	
	
	
	
	
	
}//end of class 






?>
