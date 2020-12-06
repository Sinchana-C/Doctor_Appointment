<?php 
 session_start();
 unset($_SESSION['admin_email']);
 unset($_SESSION['doctor_email']);
 unset($_SESSION['patient_email']);
 header('Location:login.php?con=5&status=send');
?>