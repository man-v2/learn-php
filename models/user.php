<?php
require_once("db.php");

class User {
	public $id;
	public $name;
	public $mobile;
	public $startTime;
	public $endTime;
	public $status;

	public function __toString(){
		return 'book'
			.$this->id.','
			.$this->name.','
			.$this->mobile.','
			.$this->startTime.','
			.$this->endTime.','
			.$this->status;
	}	
}
/*
class UserManager{

	public static function getUserById($id){
		try{
			echo "getUserById:".$id;
			//$dbHandler = getDBHandler();
			
			$sql = "select * from user as u where u.id= ?;";
			$stmt = $dbHandler-> prepare($sql);
			$stmt->bindParam(1,$id);
			$stmt->execute();
			if($row = $stmt->fetch()){
				$user = new User();
				$user->id = $row['id'];
				$user->name = $row['name'];
				$user->mobile = $row['mobile'];
				$user->startTime = $row['start_time'];
				$user->endTime = $row['end_time'];
				$user->status = $row['status'];

				return $user;
			}else{
				throw new Exception( "获得书籍失败:没有找到");
			}
			
		}catch(Exception $e){
			printf "获取用户信息失败".$e->.getMessage()."</br>";
			return false;
		}
	}
}
*/
?>