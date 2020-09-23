<?php 
    require('./database.php');

    if(isset($_POST['delete'])){ //CLICK BUTTON
        $deleteId = $_POST['deleteId'];

        $queryDelete = "DELETE FROM accounts WHERE id=$deleteId";
        $sqlDelete = mysqli_query($connection, $queryDelete);

        echo '<script>alert("Successfully deleted!")</script>'; //MESSAGE ALLERT
        echo '<script>window.location.href = "/PHP_CRUD_Tutorial/index.php"</script>'; //REDIRECT TO index.php
    } else{
        echo '<script>window.location.href = "/PHP_CRUD_Tutorial/index.php"</script>';
    }
?>