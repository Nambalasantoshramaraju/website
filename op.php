 <?php 
 include "Data.php"; 
 if(isset($_GET['id'])){  
    $id=$_GET['id']; 
    $delete=mysqli_query($conn,"DELETE FROM `input data` WHERE `id`='$id'");
 }
    ?>
 <!DOCTYPE html>
 <table border=1> 
    <tr>  
        <th>serial number</th>
    <th>Gametype</th> 
    <th>Team1</th> 
    <th>Team2</th>  
    <th>operation</th>
</tr>

 <?php  
      $conn = mysqli_connect("localhost","root","","soccer");  
      $sql = "SELECT `id`, `Gametype`, `Team1`, `Team2` FROM `input data` WHERE 1"; 
      $team2=$conn->query($sql);      
      if($team2-> num_rows > 0){  
        while($row = $team2-> fetch_assoc()){          
        echo "<tr><td>".$row["id"]."</td><td>". $row["Gametype"]."</td><td>".$row["Team1"]."</td><td>".$row["Team2"]."</td><td>"."<a href='op.php?id=".$row['id']."'>DELETE"."</td></tr>";
}
}  
$conn->close(); 
?> 
</table>