<!DOCTYPE html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AGENCIES</title>
<link href="css/pet_about.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <?php
    $con = mysqli_connect("localhost","root","","agencies");
    if(!$con)
    {
        die.("Connection failed!!".$con->connect_error);
    }
 
    $result = mysqli_query($con,"SELECT * FROM pet_ngo");
    if($result)
    {
        while($row = mysqli_fetch_array($result))
        {
            echo "<div class='big_one'><h4>NAME: ".$row['NAME']."</h4><p>ABOUT THEM: ".$row['DESCRIPTION']."</p><p>CERTIFICATION ID: ".$row['ID']."</p><p> CONTACT: <ul><li>PHONE: ".$row['PHONE']."</li><li>EMAIL: ".$row['EMAIL']."</li></ul></p></div><br>";
        }
    }
    else {echo "0 results";}
    $con->close();
    ?>
	
</body>
</html>
