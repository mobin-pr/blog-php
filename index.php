<!-- MOBIN -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>add post</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Antic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="asset/style.css">
    <style type="text/css">
  
    </style>
</head>

<body>
    <!-- Start: Header Dark -->
    <div>
        <div class="header-dark">
            <nav class="navbar navbar-dark navbar-expand-lg navigation-clean-search">
                <div class="container"><a class="navbar-brand" style="font-family: Antic, sans-serif;" href="#">MOBIN NET </a>
                <a href="http://mobin-mobin.ss0.ir/posts.php" class="btn btn-primary" type="button" style="font-family: Antic, sans-serif;">all post</a></div>
            </nav>
        </div>
    </div>
    <!-- End: Header Dark -->
    <!-- Start: Contact Form Clean -->
    <div class="contact-clean">
        <form method="POST" action="index.php"  name="myforms" >
            <h2 class="text-center" style="font-family: Antic, sans-serif;">Comment on me !</h2>
            <div class="form-group"><textarea class="form-control" id="message" name="message" placeholder="Message" rows="14"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit" onclick="Check();" style="font-family: Antic, sans-serif;">send </button></div>
        </form>
    </div>

</body>
<script type="text/javascript">

	function Check() {
		if (document.querySelector("#message").value == "" ){
       	 	alert("Field is empty ! ");
       	 	return false;
    	}
	}

</script>
<?php

$name = $_POST['message'];

$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
$sql = "insert into users(message) values ('$name')";

$run = mysqli_query($conn,$sql);
if($run == true){
	
}

?>
</html>




