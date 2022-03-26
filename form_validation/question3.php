<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="./styles.css">

</head>

<body>
  <?php
  $timeErr = "";
  $time = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["time"])) {
      $timeErr = "* time is required";
    } else {
      $time = test_input($_POST["time"]);
    }
  }

  function test_input($data)
  {
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
            <label>Time: </label>
            <input type="text" name="time" required />
            <span class="error"><?php echo  $timeErr; ?></span>

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
      $val = preg_match("/^(0?[1-9]|1[0-2])(?::([0-5]?\d))?(?::([0-5]?\d))?\s?((?:A|P)\.?M\.?)|
(?:[01]\d|2[0123]):(?:[012345]\d):(?:[012345]\d)?$/im", $time);




      if ($val == 1) {
        echo "Match: " . $time;
      }
      if ($val == 0) {
        echo "NoT match: " . $time;
      }


      ?>
    </div>
  </div>


</body>

</html>