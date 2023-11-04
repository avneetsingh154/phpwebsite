<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
    <header class="head">
        <p><b id="tt">Hey this is is Avneet and Welcome to my  Website </b></p>
    </header>
    <div class="backphoto">
        <div class="empty">
            
        </div>
     <div >
        <button class="btn_1"></button>
       <a href="" target="_parent"><button class="button-20" >.................</button></a>
       <a href="" target="_parent"><button class="button-18" >.................</button></a>
       <a href="" target="_parent"><button class="button-19" >.................</button></a>
       <a href="" target="_parent"><button class="button-20" >.................</button></a>
       <a href="" target="_parent"><button class="button-21" >.................</button></a>
   </div>
   </div>
    
    <footer class="s">
        <p><b>Hitler Supremacy</b></p>
    </footer>
</body>
</html>

</body>
</html>