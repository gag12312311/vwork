<?php 
	require_once("components/DBconn.php");
	$sql = "SELECT * FROM work_type";
	$result = $conn->query($sql);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ավելացնել հայտարարություն</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body {
			background: linear-gradient(-135deg, #60adff, white);
		}
		.parent {
		    width: 100%;
		    height: 100%;
		    position: absolute;
		    top: 0;
		    left: 0;
		    overflow: auto;
		}

		.block {
			background-color: white;
			border-radius: 20px;
		    width: 900px;
		    height: 600px;
		    position: absolute;
		    top: 50%;
		    left: 50%;
		    margin: -300px 0 0 -450px;
		    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		h2{
			text-align: center;
		}
		input[name="post_name"] {
			width: 700px;
			height: 35px;
			border-radius: 10px;
			border: none;
			background: linear-gradient(-135deg, #60adff, white);
		}
		textarea {
			margin-top: 10px;
			width: 700px;
			height: 300px;
			border-radius: 10px;
			border: none;
			background: linear-gradient(-135deg, #60adff, white);
		}

		select,input[type="tel"] {
			width: 200px;
			border: none;
			height: 30px;
			background-color: #60adff;
			border-radius: 10px;
		}
		select:hover{
			cursor: pointer;
		}
		input[type="submit"] {
			width: 300px;
			border: none;
			height: 50px;
			background-color: #57b846;
			border-radius: 10px;
			margin-top: 10px;
			cursor: pointer;
			color: white;
			font-size: 20px;
		}
		input[type="submit"]:hover {
			background-color: #212529;
		}


	</style>
</head>
<body>
	<div class="parent">
    	<div class="block">
    		<form action="components/addPost.php" method="post" style="text-align: center;margin-top: 50px;">
    			<h2>Ավելացնել հայտարարություն</h1>
    			<input type="text" name="post_name" placeholder="Վերնագիր" required>
    			<textarea name="full_name" placeholder="բովանդակություն" required></textarea>
    			<br>

    			<select name="type">
    				<?php  
    					if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
							   echo "<option value='" . $row['type'] ."'>" . $row['type'] ."</option>";
							}
							

    					}
    				 ?>
    			</select>
    			<input type="tel" name="tel_num" pattern="0[0-9]{2}-[0-9]{3}-[0-9]{3}" placeholder="հեռ. ֆորմատ - 0XX-XXX-XXX" title="հեռ.-ը պետք է լինի տվյալ ֆորմատի - 0XX-XXX-XXX" required>
    			<br>
    			<input type="submit" name="submit" value="Ավելացնել">
    		</form>

    	</div>
	</div>
	

</body>
</html>