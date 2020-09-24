<?php
		include('dbcon.php');
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		/* student */
			$query = mysqli_query($con,"SELECT * FROM student WHERE username='$username' AND password='$password'")or die(mysqli_error());
			//$result = mysqli_query($query)or die(mysqli_error());
			$num_row = mysqli_num_rows($query);
			$row = mysqli_fetch_array($query);
			
		/* teacher */
		$query_teacher = mysqli_query($con,"SELECT * FROM teacher WHERE username='$username' AND password='$password'")or die(mysqli_error());
		$num_row_teacher = mysqli_num_rows($query_teacher);
		$row_teahcer = mysqli_fetch_array($query_teacher);
		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['student_id'];
		echo 'true_student';	
		}else if ($num_row_teacher > 0){
		$_SESSION['id']=$row_teahcer['teacher_id'];
		echo 'true';
		
		 }else{ 
				echo 'false';
		}	
				
		?>