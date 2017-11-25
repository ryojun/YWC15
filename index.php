

<?php    header ('Content-type: text/html; charset=utf-8');

     
      
      
 
   
  
        $ch = curl_init(); 

        
        curl_setopt($ch, CURLOPT_URL, "https://ywc15.ywc.in.th/api/interview"); 

        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

         
        $output = curl_exec($ch); 
     
   

        
        curl_close($ch);    
		
		$data = json_decode($output, true);

		
		
		
        
        
                
          


?>



<html lang="en">
<head>
  <title>YWC#15</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
	
	.jumbotron {
      background-color: #f4511e;
      color: #fff;
	}
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">YOUNG WEBMASTER CAMP</a>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    

    
    <div class="carousel-inner" role="listbox">
      
	  
	  
	  
	  
	  <div class="jumbotron text-center">
  <h1>YWC#15</h1> 
  <p>ประกาศผลผู้ผ่านเข้ารอบสัมภาษณ์</p> 
  <form class="form-inline" action ="Search.php" method="POST">
    <div class="input-group">
	
	
      <input type="text" name="Search" class="form-control" size="50" placeholder="Search" >
      <div class="input-group-btn">
        <button type="submit" class="btn btn-danger">Enter</button>
		
		
      </div>
    </div>
  </form>
</div>
	  
	  
	  
	  
	  
	  
    </div>


  
<div class="container text-center">    

  <div class="row">
    <div class="col-sm-4">

	
	
	
	
	<div class="well">
	<h3>กำหนดสาขา</h3>
	</div>
      <div class="well">
	  
		<button type="button" id="Btn" value="0" onclick="myFunction('0')" class="btn btn-primary">Web Content</button><br><br>
		<button type="button" id="Btn" value="1" onclick="myFunction('1')" class="btn btn-primary">Web Design</button><br><br>
		<button type="button" id="Btn" value="2" onclick="myFunction('2')" class="btn btn-primary">Web Marketing</button><br><br>
		<button type="button" id="Btn" value="3" onclick="myFunction('3')" class="btn btn-primary">Web Programming</button><br><br>
	  
      </div>
      
	
	
	
	
	
	
    </div>
    <div class="col-sm-4"> 
      
	    <h3>รายชื่อผู้ผ่านเข้ารอบ</h3>
	  




	
      <?php
		error_reporting(~E_NOTICE );
		$test = $_GET['uid'];
		
			switch ($test) {
		case 0:
		
		
		
		foreach($data as $index=>$x){
				if(substr($x['interviewRef'],0,2) == "CT"){
					$CT[$index] = $x['interviewRef'];
				}
			}
			
			sort($CT);

			for($x = 0; $x < count($CT); $x++) {
				echo $CT[$x];
				
				foreach($data as $i){
			if($i['interviewRef'] == $CT[$x]){
				echo '_';
				echo $i['firstName'];
				echo ' ';
				echo $i['lastName'];
				echo '<br>';
			}
			
			}
				
			}
		
		
			break;
			
			
		case 1:
		
		
		
		foreach($data as $index=>$x){
				if(substr($x['interviewRef'],0,2) == "DS"){
					$DS[$index] = $x['interviewRef'];
				}
			}
			
			sort($DS);

			for($x = 0; $x < count($DS); $x++) {
				echo $DS[$x];
				
				foreach($data as $i){
			if($i['interviewRef'] == $DS[$x]){
				echo '_';
				echo $i['firstName'];
				echo ' ';
				echo $i['lastName'];
				echo '<br>';
			}
			
			}
				
			}
		
		
			break;
		case 2:
		
		
		
		
		foreach($data as $index=>$x){
				if(substr($x['interviewRef'],0,2) == "MK"){
					$MK[$index] = $x['interviewRef'];
				}
			}
			
			sort($MK);

			for($x = 0; $x < count($MK); $x++) {
				echo $MK[$x];
				
				foreach($data as $i){
			if($i['interviewRef'] == $MK[$x]){
				echo '_';
				echo $i['firstName'];
				echo ' ';
				echo $i['lastName'];
				echo '<br>';
			}
			
			}
				
			}
		
		
			break;
			
		case 3:
		
		
		
		foreach($data as $index=>$x){
				if(substr($x['interviewRef'],0,2) == "PG"){
					$PG[$index] = $x['interviewRef'];
				}
			}
			
			sort($PG);

			for($x = 0; $x < count($PG); $x++) {
				echo $PG[$x];
				
				foreach($data as $i){
			if($i['interviewRef'] == $PG[$x]){
				echo '_';
				echo $i['firstName'];
				echo ' ';
				echo $i['lastName'];
				echo '<br>';
			}
			
			}
				
			}
		
		
			break;
			}
			
			
			
			
			
			
			
			
		
	  ?>
	  





	  
	  
    </div>
    <div class="col-sm-4">
	
	
	
	
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>



<script>
function myFunction(index) {
    var x = document.getElementById("Btn").value;
	window.location.href="code.php?uid="+index;
}
</script>


</body>
</html>



