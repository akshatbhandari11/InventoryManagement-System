<?php
  require_once('includes/load.php');
?>

<?php
if(isset($_POST['query'])){

    // Collect post variables
    $query = $_POST['query'];

    $sql = "$query;";
    // echo $sql;
    $res =$db->query($sql);
    // Execute the query
    if($db->query($sql) == true){
        echo("<br><br><br><br>");
        echo("<table class='container' style=width:60%>");
        $first_row = true;
        while ($row = mysqli_fetch_assoc($res)) {
        if ($first_row) {
            $first_row = false;
            // Output header row from keys.
            echo '<tr class="tbl-header"">';
            foreach($row as $key => $field) {
                echo '<th style=padding:10px>' . htmlspecialchars($key) . '</th>';
            }
            echo '</tr>';
        }
    echo '<tr class="tbl-row">';
    foreach($row as $key => $field) {
        echo '<td style=padding:10px>' . htmlspecialchars($field) . '</td>';
    }
    echo '</tr>';
}
echo("</table>");
    }
    else{
        echo "ERROR: $sql <br> $conn->error";
    }
    

}
?>

<link href='https://fonts.googleapis.com/css?family=Bebas Neue' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
    <?php include "style.css" ?> 
    <?php include "Pages/All.css" ?> 

        .container{
        max-width: 80%; 
        padding: 34px; 
        margin: auto;
        }
		
</style>
<!-- <div class="container" style="float:left; width:50%; "> -->
<?php include_once('layouts/header.php'); ?>
<div class="container">
        <h1>SELECT Query Box</h1>
        <p>Only Select SQL query</p>
        <form action="SelectQueryBox.php" method="post">
            <textarea id="query" name="query" rows="8" cols="50">
            </textarea>
            <button class="submitBtn">Submit</button> 
            <br/>
        </form>
    </div>
    <!-- <div style="float:right; width:50%;margin-top:150px">
		<img style="width:100%" src="images/emp.jpg" />
	</div> -->
</div>