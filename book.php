<html>
<head>

	<title>M HELP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
</head>


<body>

         
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">M.Help<span></span></a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					
					
					<li class="nav-item"><a href="index.php" class="nav-link"><span>Home</span></a></li>
					
					
					
					
			</div>
		</div>
	</nav>


		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">TIPS.</span>
					
					<p>How you overcame it</p>
				</div>
			</div>

			<div class="row block-9">
				<div class="col-md-8">
					<form action="booksin.php" class="bg-light p-4 p-md-5 contact-form">
						<div class="row">

                            

							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Title"  name="title" id="Title">
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Author" name="Author" id="Subject">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea name="book" id="Story" cols="30" rows="7" class="form-control" placeholder="book recomendation"  ></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" value="SUBMIT" name= "Submit" class="btn btn-primary py-3 px-5">
								</div>
							</div>
						</div>
					</form>
					
				</div>

				<div class="col-md-4 d-flex pl-md-5">
					<div class="row">
						<div class="dbox w-100 d-flex">
										<div class="icon d-flex align-items-center justify-content-center">

							<img class="img-fluid" src="images/st.jpg" alt="Survivor tips">

							</div><br>
							<div class="image">
								<p>Recommended books.</p>
							</div>
						</div>
						
                      

						<div class="col-md-12">


							<?php


/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "m_help");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 


// Attempt select query execution
$sql = "SELECT * FROM book";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){



        echo "<table >";
            echo "<tr>";
                
                
                echo "<th>Name</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
               
                echo "<td>" . $row['book'] . "</td>";
           
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);




?>


								


							</div>
					</div>
					<!-- <div id="map" class="map"></div> -->
				</div>
			</div>
		</div>

	



</body>

</html>