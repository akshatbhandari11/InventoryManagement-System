
<?php
  require_once('includes/load.php');
?>
<?php

if(isset($_POST['query'])){

    // Collect post variables
    $query = $_POST['query'];

    $sql = "$query;";
    //echo $sql;
    // Execute the query
    if($db->query($sql) == true){
        // echo "Successfully inserted";
        echo '<script>alert("Query Successfull")</script>';
        //$_SESSION['add'] = "Successfull";
        //header("location:",'http://localhost/inventorySystem_PHP/queryBox.php');
        // Flag for successful insertion
    }
    else{
        echo "ERROR: $sql <br> $db->error";
        //$_SESSION['add'] = "Query Failure";
        //header("location:",'http://localhost/inventorySystem_PHP/queryBox.php');
    }
    
    // Close the database connection
}
?>
<style>
.container{
        max-width: 80%; 
        padding: 34px; 
        margin: auto;
        }
</style>
<?php include_once('layouts/header.php'); ?>
<div class="container">
        <h1>Query Box</h1>
        <p>Enter any SQL query OTHER THAN INSERT</p>
        <form action="queryBox.php" method="post">
            <textarea id="query" name="query" rows="8" cols="50">
            </textarea>
            <button class="submitBtn">Submit</button> 
            <br/>
        </form>
    </div>
</div>