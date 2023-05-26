<?php include('conn.php');?>

<div class="main-content">
  <div class="wrapper">
    <h1>manage category</h1>



    <br/> <br/>
      
       
      <!---Button to add admin-->
      <a href="add.php" class="btn-primary">add category</a>
      <br/> <br/><br/>
        <table class="tbl-full" border="2">
          <tr>
                <th>S.N</th>
                <th>fullname</th>
                <th>telephone</th>
                 <th>add</th>
                 <th>upadat</th>
                 <th>delete</th>
                
               </tr>
                <?php
               //QUERY TO GET ALL CATEGORY FROM DATABASE
                $sql = "SELECT * FROM information";
                //execute query
                $res = mysqli_query($conn, $sql);
                 $sn=1;
                //$count rows
               // $count = mysqli_num_rows($res);
                if (mysqli_num_rows($res) > 0) {
               
                  while($row=mysqli_fetch_assoc($res))
                  {
                    $id = $row['id'];
                    $full_name = $row['full_name'];
                    $telephone = $row['telephone'];
                    

                    ?>
                     <tr colspan="2">
                <td><?php echo $sn++;?></td>
                <td><?php echo $full_name;?></td>
                 <td><?php echo $telephone;?></td>
                 <td>
                  <a href="add.php?id=<?php echo $id;?>"> add </a>
                </td>
                 
                <td>
                  <a href="edit.php?id=<?php echo $id;?>"> edit </a>
                </td>

                <td>
                  <a href="delete.php?id=<?php echo $id;?>"> delete </a>
                </td>

                




              
                    
                 
                 </tr> 

                    <?php
                  }
                }
              ?>

              
                
                
        </table>

  </div>
</div>

  </div>
</div>