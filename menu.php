<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <title>Project</title>
    <link rel="stylesheet" type="text/css" href="menu.css">
</head>



<body>
		 
        
            <ul>
                <li><a href="php_side.php" <?php if ($curpage == 'php_side.php') { echo 'class="active"'; } ?>>FORSIDE</a></li>     
                <li><a href="om_mig.php"<?php if ($curpage == 'om_mig.php') { echo 'class="active"'; } ?>>OM MIG</a></li>
                <li><a href="passion.php"<?php if ($curpage == 'passion.php') { echo 'class="active"'; } ?>>MIN PASSION</a></li>
                <li><a href="work.php"<?php if ($curpage == 'work.php') { echo 'class="active"'; } ?>>SKOLEARBEJDE</a></li>
                <li><a href="contact.php"<?php if ($curpage == 'contact.php') { echo 'class="active"'; } ?>>KONTAKT</a></li>
            </ul>
        
        
  <!--PHP statement der kun viser class-active HVIS man er på siden. -->      
  
 </body>
</html>