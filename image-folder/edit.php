<?php include('conn.php');?>
<div class="main-content">
    <div class="wrapper">
        <h1>update</h1>

       <br><br>
<?php
//check whether the id is set or not
if(isset($_GET['id']))
{
	//get to the id and all other details

	// echo "get to data category";

	$id = $_GET['id'];
	//create sql query to get all other deail
	$sql2 = "SELECT * FROM information WHERE id=$id";
	//execute the query
	$res2 = mysqli_query($conn, $sql2);
	//count the rows to check whether the id is valid or not
	$count = mysqli_num_rows($res2);
	if($count==1)
	{
		//get all data
		$row = mysqli_fetch_assoc($res2);
		 $id = $row['id'];
		 $full_name = $row['full_name'];
		 $telephone = $row['telephone'];
	

	}
	else
	{
	
		header('location:manage.php');

	}
	}


?>

                  


       <!---add category from start-->
       <form action="" method="POST" enctype="multipart/form-data">

        <table class="tbl-30">
            <tr>
                <td>fulname:</td>
                <td>
                    <input type="text" name="full_name" placeholder="fulname" value="<?php echo $full_name;?>">
                </td>
            </tr>
            <tr>
                <td>telephone:</td>
                <td>
                    <input type="text" name="telephone" placeholder="telephone" value="<?php echo $telephone;?>">
                </td>
            </tr>
          
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="add" class="btn-secondary">
                </td>
            </tr>

            
        </table>
        

       </form>
<?php
if(isset($_POST['submit']))
{
	//echo "button clicked";
	//get all the value from to update
    //$id = $_POST['id'];
    $full_name = $_POST['full_name'];
	$telephone = $_POST['telephone'];

	//create a sql query to update
	$sql = "
	UPDATE information SET
	full_name = '$full_name',
	telephone = '$telephone'
	WHERE id='$id'
	";
	//execute the query
	$res = mysqli_query($conn, $sql);

	//check whethere the query execute seccfully or not
	if($res==TRUE)
	{
		//echo "update seccessfuly!";
		
		header('location:manage.php');
	}
	else{
		header('location:manage.php');
			}
}


?>





   </div>
</div>
