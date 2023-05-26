<?php include('conn.php');?>
<div class="main-content">
    <div class="wrapper">
        <h1>add category</h1>

       <br><br>
   
       <br><br>

       <!---add category from start-->
       <form action="" method="POST" enctype="multipart/form-data">

        <table class="tbl-30">
            <tr>
                <td>fulname:</td>
                <td>
                    <input type="text" name="full_name" placeholder="fulname">
                </td>
            </tr>
            <tr>
                <td>telephone:</td>
                <td>
                    <input type="text" name="telephone" placeholder="telephone">
                </td>
            </tr>
          
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="add" class="btn-secondary">
                </td>
            </tr>
            
        </table>
        

       </form>
       <!---add category from end-->
       <?php
       //check whether submit button
       if(isset($_POST['submit']))
       {
        //echo "clicked";
        $full_name = $_POST['full_name'];
         $telephone = $_POST['telephone'];

       

        $sql = "INSERT INTO information (full_name,telephone) VALUES('$full_name','$telephone')";
        $result = mysqli_query($conn,$sql) ;  
       if($result)
            {
               echo 'data inserted seccessfully';
            }
            else{
                die(mysqli_error($conn));
            }
            header("location:manage.php");


              }?>

        

            



           



   

   </div>
</div>
