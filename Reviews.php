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
class Reviews{
	
	//删除评论
	public static function delReviewsById($id){
		$sql="delete from reviews where id={$id}";
		$conn=DbConn::getInstance();
		$re=$conn->add($sql);
		return $re;
	}
	
	
	
	
	public static function addReview($articleId,$face,$body,$userName){
		//返回受影响到行数
		$sql="insert reviews(articleId,face,body,userName)values('{$articleId}','{$face}','{$body}','{$userName}')";
		$conn=DbConn::getInstance();
		$re=$conn->add($sql);
		return $re;		
	}
	//根据articleId查评论
	public static function getReviews($articleId){
		$sql="select * from reviews where articleId={$articleId}";
		$conn=DbConn::getInstance();
		$re=$conn->queryAll($sql);
		return $re;
	}
	
	
	
	
	
	
}







?>