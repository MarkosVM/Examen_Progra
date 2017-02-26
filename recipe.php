<?php

	require  'medoo.php';
 
    $database = new medoo([
        // required
        'database_type' => 'mysql',
        'database_name' => 'examen',
        'server' => 'localhost',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8'
    ]);
       
if($_GET){
            $data = $database->select("tb_recipes", [
                "recipe_name",
                "recipe_prep_time",
                "recipe_cook_time",
                "recipe_serves",
                "recipe_description",
                "recipe_image"
            ],[
                "id_recipe" => $_GET["id_recipe"]
            ]);
        }
?>

<html>
    <head>
        <title>Recipe</title>
    </head>
    <body>
	      <?php 

        echo "<h3>".$data[0]["recipe_name"]."</h3>
		<p>".$data[0]["recipe_prep_time"]."</p>
		<p>".$data[0]["recipe_cook_time"]."</p>
		<p>".$data[0]["recipe_serves"]."</p>
		<p>".$data[0]["recipe_description"]."</p>
		<img src='./imgs/".$data[0]["recipe_image"]."'>
		
		<br>";
                
                ?>
				
		<a href="index.php">Back</a>
		
    </body>
</html>




