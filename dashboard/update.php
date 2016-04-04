<?php
	include 'DB.php';
	$recid = $_GET['recid'];
	$result = mysqli_query($con,$query);
	$query = "SELECT * FROM recepies r,ingredients i where r.recid= i.recid and r.recid = '${recid}' LIMIT 50 ";
	
	if($_POST)
	{

		$recname = $_POST['recname'];
		$method = $_POST['method'];
		$ing1 = $_POST['ing1'];
		$ing2 = $_POST['ing2'];
		$ing3 = $_POST['ing3'];
		$ing4 = $_POST['ing4'];
		$ing5 = $_POST['ing5'];
		$ing6 = $_POST['ing6'];
		$ing7 = $_POST['ing7'];
		$ing8 = $_POST['ing8'];
		$ing9 = $_POST['ing9'];
		$ing10 = $_POST['ing10'];
		$ing11 = $_POST['ing11'];
		$ing12 = $_POST['ing12'];
		$ing13 = $_POST['ing13'];
		$ing14 = $_POST['ing14'];
		$ing15 = $_POST['ing15'];
		$ing16 = $_POST['ing16'];
		$ing17 = $_POST['ing17'];
		$ing18 = $_POST['ing18'];
		$ing19 = $_POST['ing19'];
		$ing20 = $_POST['ing20'];
		$ing21 = $_POST['ing21'];
		$ing22 = $_POST['ing22'];
		$ing23 = $_POST['ing23'];
		$ing24 = $_POST['ing24'];

	include 'rec_image.php';

		$query  = "UPDATE recepies JOIN ingredients ON recepies.recid = ingredients.recid JOIN rec_images ON recepies.recid = rec_images.rec_id SET img_name = '$imageName',recname ='$recname', method= '$method', ing1 = '$ing1', ing2 = '$ing2', ing3 = '$ing3', ing4 = '$ing4', ing5 = '$ing5', ing6 = '$ing6', ing7 = '$ing7', ing8 = '$ing8', ing9 = '$ing9', ing10 = '$ing10', ing11 = '$ing11', ing12 = '$ing12', ing13 = '$ing13', ing14 = '$ing14', ing15 = '$ing15', ing16 = '$ing16', ing17 = '$ing17', ing18 = '$ing18', ing19 = '$ing19', ing20 = '$ing20', ing21 = '$ing21', ing22 = '$ing22', ing23 = '$ing23', ing24 = '$ing24' where recepies.recid = $recid";
		$result = mysqli_query($con,$query);

	}
	else
	{
	$query = "SELECT * FROM recepies r,ingredients  i where r.recid= i.recid and r.recid = ${recid} LIMIT 50 ";
	$result = mysqli_query($con,$query);

	
    $row = mysqli_fetch_assoc($result);
	$recname = $row['recname'];
	$method = $row['method'];
		$ing1 = $row['ing1'];
	$ing2 = $row['ing2'];
	$ing3 = $row['ing3'];
	$ing4 = $row['ing4'];
	$ing5 = $row['ing5'];
	$ing6 = $row['ing6'];
	$ing7 = $row['ing7'];
	$ing8 = $row['ing8'];
	$ing9 = $row['ing9'];
	$ing10 = $row['ing10'];
	$ing11 = $row['ing11'];
	$ing12 = $row['ing12'];
	$ing13 = $row['ing13'];
	$ing14 = $row['ing14'];
	$ing15 = $row['ing15'];
	$ing16 = $row['ing16'];
	$ing17 = $row['ing17'];
	$ing18 = $row['ing18'];
	$ing19 = $row['ing19'];
	$ing20 = $row['ing20'];
	$ing21 = $row['ing21'];
	$ing22 = $row['ing22'];
	$ing23 = $row['ing23'];
	$ing24 = $row['ing24'];
	}
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
  <div class='masthead'>
    <center>
      <img class="img-responsive" src="http://fajjemobile.info/mxlead/img/logo.png"/>
      <h2 class='text-muted'>BUILD ME A MEAL - Administrative Panel</h2>
      <h5 class='text-muted'>build me a meal</h5>
    </center>
    <div >
      <nav id='myNavbar' class='navbar navbar-default' role='navigation'> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class='container'>
          <div class='navbar-header'>
            <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'> <span class='sr-only'>Toggle navigation</span> <span class='icon-bar'></span> <span class='icon-bar'></span> <span class='icon-bar'></span> </button>
            <a class='navbar-brand' href='#'>BUILDMEAMEAL</a> </div>
          <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
            <ul class='nav navbar-nav'>
              <li><a href='http://fajjemobile.info/mxlead/'>Home</a></li>
              <li><a href='#'>Recipes</a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse --> 
        </div>
      </nav>
    </div>
  </div>
  <div id="box">
<form id="box1" class="form-horizontal" role="form" action="update.php" method="post" enctype="multipart/form-data">
  <div class="list-group">
  <p class="list-group-item disabled">
    <font size="3px">Insert Recipes</font>
  </p>  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" >Recipe Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" value= "<?php echo "$recname" ;?>" name="recname" />
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" >Method</label>
    <div class="col-sm-10">
      <textarea   class="form-control" id="inputEmail3" class="method" placeholder="" name="method" > <?php echo "$method";?> 
    </textarea>
      </div>
  </div>
	 <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing1" value= "<?php echo "$ing1";?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing2" value= "<?php echo "$ing2" ?>"/>
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing3" value= "<?php echo "$ing3" ?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing4" value= "<?php echo "$ing4" ?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing5"  value= "<?php echo "$ing5" ?>"/>
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing6" value= "<?php echo "$ing6" ?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing7" value= "<?php echo "$ing7" ?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing8" value= "<?php echo "$ing8" ?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing9" value= "<?php echo "$ing9" ?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing10" value= "<?php echo "$ing10" ?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing11" value= "<?php echo "$ing11" ?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing12" value= "<?php echo "$ing12" ?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing13" value= "<?php echo "$ing13" ?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing14" value ="<?php echo "$ing14" ?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing15" value ="<?php echo "$ing15" ?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing16" value = "<?php echo "$ing16" ?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing17" value = "<?php echo "$ing17" ?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing18" value = "<?php echo "$ing18" ?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing19" value = "<?php echo "$ing19" ?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing20" value = "<?php echo "$ing20" ?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing21" value = "<?php echo "$ing21" ?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing22" value = "<?php echo "$ing22" ?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing23" value = "<?php echo "$ing23" ?>" />
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ingredient</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="ing24" value = "<?php echo "$ing24" ?>" />
    </div>
  </div>
  <div class="form-group" id="image">
 <label for="file">Recepie Image</label>
<input type="file" name="file" id="file" ><br>
</div>

  <button type="submit" class="btn btn-default" id="button" formaction="" formmethod="post">Post</button>


</body>
</html>