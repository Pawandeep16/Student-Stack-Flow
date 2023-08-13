<?php
   require("RegisterConnectionMysql.php");
  
    $sql = "select * from Query_Table";
    
    $result = ($link->query($sql));
    //declare array to store the data of database
    $row = []; 

  
    if ($result->num_rows > 0) 
    {
        // fetch all data from db into array 
        $row = $result->fetch_all(MYSQLI_ASSOC);  
    }  
   

?>

<!DOCTYPE html>
<html>
<style>
    body{
        /* background-color:red; */
        display:flex;
        align-items:center;
        /* justify-content:center; */
        flex-direction:column;
        height: 100vh
    }
    td,th {
        border: 1px solid black;
        padding: 10px;
        margin: 5px;
        text-align: center;
    }
</style>
  
<body>
    <?php
               if(!empty($row))
               foreach($row as $rows)
              { 
            ?>
           <div style="background-color:#9ffcab; margin-top:10; min-width:60%; padding:10px 20px;border-radius:10px;cursor:pointer; display:flex;align-items:center;justify-content:space-between">
             <div style="flex:0.9">
                <div>
                <h1><?php echo $rows['topic_title']; ?></h1>
            </div>
            <p style="color:rgba(0,0,0,0.7);"><?php echo $rows['topic_owner']; ?></p>
            <a href="DOReply.html" style="color:rgba(0,0,0,0.7);font-size:15px;">reply?</a>
             </div>
             <a href="replyShow.php?title=How can i add function inside the function?">Show all replies</a>
           </div>
            <?php } ?>
            <!-- href='page2.php?id=2489&user=tom' -->
    <!-- <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Owner</th>
                <th>Title</th>
                <th>Post Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
               if(!empty($row))
               foreach($row as $rows)
              { 
            ?>
            <tr>
                 <td><?php echo $rows['query_id']; ?></td>
                <td><?php echo $rows['topic_owner']; ?></td>
                <td><?php echo $rows['topic_title']; ?></td>
                <td><?php echo $rows['post_text']; ?></td>
                 <td><a href="DOReply.html">Reply</a><a href="replyShow.php">Show Reply</a>  
                </td>
            </tr>
            <?php } ?>
        </tbody>    
    </table> -->
</body>
</html>
  
<?php   
    mysqli_close($link);
?>