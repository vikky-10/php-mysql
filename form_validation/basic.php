<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
   <link rel="stylesheet" href="./style.css">

</head>
<body>
  <?php
$nameErr = $emailErr = $subjectErr = $messageErr = "";
$name = $email = $phone = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "* Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "* Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["phone"])) {
    $phone = "";
  } else {
    $phone = test_input($_POST["subject"]);
  }

  if (empty($_POST["message"])) {
    $messageErr = "* Message is required";
  } else {
    $message = test_input($_POST["message"]);
  }

  if (empty($_POST["subject"])) {
    $subjectErr = "* Subject is required";
  } else {
    $subject = test_input($_POST["subject"]);
  }

  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>
<div class="shade">
		<div class="blackboard">
				<div class="form">
          <form method="post">
						<p>
								<label>Name: </label>
								<input type="text" name="name" required />
                <span class="error"><?php echo  $nameErr;?></span>

						</p>
						<p>
								<label>Email: </label>
								<input type="text"  name="email" required />
                <span class="error"><?php echo  $emailErr;?></span>

						</p>
						<p>
								<label>Phone: </label>
								<input type="tel" name="phone" />
                
						</p>
						<p>
								<label>Subject: </label>
								<input type="text" name="subject" />
                <span class="error"><?php echo  $subjectErr;?></span>

						</p>
						<p>
								<label>Message: </label>
								<textarea name="message"></textarea>
                <span class="error"><?php echo $messageErr;?></span>

						</p>
						<p class="wipeout">
								<input type="submit" value="Send" />
						</p>
          </form>
				</div>
		</div>
    <div class="center">
    <?php
   
   
echo "<h1>Output🚀🚀</h1>";
echo "<h2>🎯 Name: {$name}</h2>"."<br>";
"<br>";
echo "<h2>🎯 Email: {$email} </h2> " . "<br>";
"<br>";
echo "<h2>🎯 Phone: {$phone}</h2> "   . "<br>";
"<br>";
echo "<h2>🎯 Subject: {$subject} </h2> "  . "<br>";
"<br>";
echo "<h2>🎯 Message: {$message}</h2> " ;


?>
</div>
</div>


</body>
</html>