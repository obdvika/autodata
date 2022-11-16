<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
            "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Jäsensivu | Autodata</title>
</head>
<body>
<h2>Tervetuloa Jäsensivulle.</h2>
<?php 
    switch($_SESSION['users_role']){
        case 'admin':
            include('admin_menu.php');
            break;
        case 'users':
            include('users_menu.php');
            break;
    }
?>
</body>
</html>
