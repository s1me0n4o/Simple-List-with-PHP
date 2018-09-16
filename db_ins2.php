<?php 
function user_insert(){
include('db_con.php');
	
	$user = $_POST['user_name'];
	$phone = $_POST['phone'];
	$group = $_POST['group'];

	$db->beginTransaction();

	$db_stm = $db->prepare('insert into users(user_name, phone, grp) values(:user_name, :phone, :group)');

	$db_stm->bindParam('user_name', $user);
	$db_stm->bindParam('phone', $phone);
	$db_stm->bindParam('group', $group);

	try{

		$db_stm->execute();
		$db->commit();

	echo "User has been added successfully!";
	header("Location: ./index.php");

	} catch(PDOException $e){
		$db->rollBack();
		echo $e->getMessage();
	}
}
