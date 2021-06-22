 
<html>
<body>

<form  method="get">
Name: <input type="text" name="name">
Email: <input type="text" name="email">
<input type="submit">
</form>


</body>
</html>    <?php 
        echo "Votre nom est " . $_GET["name"] ; 
        echo "Votre email est " . $_GET["email"];
    ?>