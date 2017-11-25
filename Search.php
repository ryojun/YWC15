<?php

$Search = $_POST["Search"];

$Str1 = str_replace(" ", "", $Search);

?>




<?php    header ('Content-type: text/html; charset=utf-8');

     
      
      
 
   
  
        $ch = curl_init(); 

        // set url สำหรับดึงข้อมูล 
        curl_setopt($ch, CURLOPT_URL, "https://ywc15.ywc.in.th/api/interview"); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // ตัวแปร $output เก็บข้อมูลทั้งหมดที่ดึงมา 
        $output = curl_exec($ch); 
     
   

        // ปิดการเชื่อต่อ
        curl_close($ch);    
		
		$data = json_decode($output, true);

		
		
		
        
        
                
          


?>



<html lang="en">
<head>
  <title>Bootstrap Example</title>
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

	
	
      
	
	
	
	
    </div>
    <div class="col-sm-4"> 
    
	<h4>
<?php

		
		foreach($data as $x){
			if($x['firstName'] == $Search){
				echo "รหัส : ";
				echo $x['interviewRef'];
				echo '<br>';
				echo "ชื่อ : ";
				echo $x['firstName'];
				echo ' ';
				echo $x['lastName'];
				echo '<br>';
				echo "สาขา : ";
				echo $x['major'];
				echo '<br>';
				
			}
			elseif($x['firstName'].$x['lastName'] == $Str1){
				echo "รหัส : ";
				echo $x['interviewRef'];
				echo '<br>';
				echo "ชื่อ : ";
				echo $x['firstName'];
				echo ' ';
				echo $x['lastName'];
				echo '<br>';
				echo "สาขา : ";
				echo $x['major'];
				echo '<br>';
				
			}
			
			
		}
	  
			
			
	?>  
	</h4>
    </div>
    <div class="col-sm-4">
	
	
	
	
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <button onclick="window.location.href= 'index.php'" type="button" class="btn btn-danger">ย้อนกลับ</button>
</footer>





</body>
</html>



