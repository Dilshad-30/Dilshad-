<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<title>Group Chat</title>
	<style>
		 body{ 
			font-family: "Sofia", sans-serif;
            background-image: url("2000540.jpg");
            background-size: 100%;
             }
		input, textarea {
			display: block;
			width: 300px;
			font-size: 18px;
			margin: 7px 0px;
		}
		label {
			display: block;
			padding: 2px 0px;
		}
	</style>
</head>
<body>
	<h1> Group Chat </h1>
	
    <form method="post" action="Send_C.php">
    	<label>Name:</label>
    	<input type="text" 
    	       name="name">
    
    	<label>Chat:</label>
    	<textarea name="chat"></textarea>

    	<input type="submit" 
    	       name="btn">
    </form>
	<p><a href="chat_list.php">Click to Back</a></p>

</body>
</html>