<?php 

function form(){
	session_start();
	echo   "<form method='POST' action='db_ins.php'>
			<input type='text' name='user_name' placeholder='Your Name..'>
			<input type='text' name='phone'placeholder='Your Phone..'>
			<input type='text' name='group' placeholder='Group..'>
			<input type='submit' name='submit' value='Submit'>";
}