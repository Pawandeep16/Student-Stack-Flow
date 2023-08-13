<?php
   require("RegisterConnectionMysql.php");
   $sql = "select * from Query_Data_Table";
    $result1 = ($link->query($sql));
    $row1 =[];
// echo "Welcome to ". htmlspecialchars($_GET['username']). "!";
  
     if ($result1->num_rows > 0) 
    {
        // fetch all data from db into array 
        $row1 = $result1->fetch_all(MYSQLI_ASSOC);  
    }  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Replies</title>
</head>
<style>
    td,th {
        border: 1px solid black;
        padding: 10px;
        margin: 5px;
        text-align: center;
    }
</style>
<body>

<h3 style="background-color:#3B4045;color:#6BBBF7;font-weight:400;padding:10px 20px">New! OverflowAI: Where Student Come Together</h3>
 <div style="margin-left:20px">
    <h1 style="font-weight:400"><?php echo htmlspecialchars($_GET['title']); ?></h1>
    <div style="display:flex;align-items;center;gap:20px">
        <p>Asked 7 years, 4 months ago</p>
        <p>Modified 3 months ago</p>
        <p>Viewed 3.6m times</p>
    </div>
 </div>

<table>
        <thead>
            <tr>
                
                <th>Owner</th>
                <th>Post Reply</th>
           
            </tr>
        </thead>

<tbody>
            <?php
               if(!empty($row1))
               foreach($row1 as $rows)
              { 
            ?>
            <tr>
                 <td><?php echo $rows['post_owner']; ?></td>
                <td><?php echo $rows['post_text']; ?></td>
                
            </tr>
            <?php } ?>
        </tbody> 
          </table>
</body>
</html>