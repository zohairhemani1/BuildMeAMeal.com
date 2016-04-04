<?php

	include 'DB.php';
	
	$query = "SELECT * FROM recepies LIMIT 50 ";
	$result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="../../assets/ico/favicon.ico">
<title>:: BuildMEaMeal.com::</title>

<!-- Bootstrap core CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
  <div class='masthead'>
    <center>
      <!-- <img class="img-responsive" src="http://fajjemobile.info/mxlead/img/logo.png"/> -->
      <h2 class='text-muted'>BuildMeAMeal.com - Administrative Panel</h2>
      <h5 class='text-muted'>Make meals anytime, anywhere!</h5>
    </center>
    <div >
      <nav id='myNavbar' class='navbar navbar-default' role='navigation'> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class='container'>
          <div class='navbar-header'>
            <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'> <span class='sr-only'>Toggle navigation</span> <span class='icon-bar'></span> <span class='icon-bar'></span> <span class='icon-bar'></span> </button>
            <a class='navbar-brand' href='#'>BuildMeAMeal</a> </div>
          <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
            <ul class='nav navbar-nav'>
              <li><a href='index.php'>Home</a></li>
              <li><a href='http://fajjemobile.info/buildmeameal.com/dashboard/recipies.html'>Add New Recipe</a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse --> 
        </div>
      </nav>
    </div>
  </div>
  <div style="margin-bottom:20px;margin-top:20px"> 
    <script>
function link(){
	window.location.href = "data/add"
	}


function resets(){
	location.reload();
	}
	

	function deleteConfirm(id)
	{
		var result = confirm("Want to delete?");
		
		return result;
		
	}	
	
	
	
</script>
    <form name="search-form" id="search-form" class="form-inline" role="form" enctype="multipart/form-data" method="post" action="">
      <div class="form-group">
        <label class="sr-only" for="searchTerm">Search Term</label>
        <input type="text" class="form-control" id="searchTerm" name= "searchTerm" placeholder="Enter Search Term">
      </div>
      <button type="submit" class="btn btn-success">Search</button>
      <button type="button" onclick="resets()" class="btn btn-primary">Reset</button>
    </form>
  </div>
  <div class="table-responsive">
    <form name="deleteForm" action="" method="post">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="small">#</th>
            <th>Name</th>
            <th> ingredients</th>
            <!-- <th>Action</th> -->
          	
          </tr>
        </thead>
        <tbody>
       
          
          
<?php

	
	
	while($row = mysqli_fetch_array($result)){
		$recID =  $row['recid'];
		$recName =  $row['recname'];
		echo"<tr>";
	
	 echo"<td>${recID}</td>";
			echo"<td>${recName}</td>";
            echo"<td><a href='update.php?recid=${recID}'<button type='button' class='btn btn-primary btn-lg btn-block' id='button1'>UPDATE</button></a> <a href='delete.php?recid=${recID}' onClick='return deleteConfirm(30);'><button type='button' class='btn btn-default btn-lg btn-block' id='button2'>DELETE</button></a></td>
          </tr>";
		
	}
?>	

             
           </tboby>
		  </table>
	</form>
	

          
          
          
           
    
  </div>
  <div class="footer">
    <p>&copy; SilverSages Studio 2014</p>
  </div>
</div>

<!-- /container --> 

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>
