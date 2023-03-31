<!DOCTYPE html>
<html>

<head>
    <title>Choose Your Option</title>
</head>

<body>
    <h1>Choose Your Option</h1>
    <form>
        <label><input type="radio" name="option" value="option1">Option 1</label><br>
        <label><input type="radio" name="option" value="option2">Option 2</label><br>
        <label><input type="radio" name="option" value="option3">Option 3</label><br>
        <input type="submit" value="Submit">
    </form>

    <?php
      echo "This script is being executed!";
      if(isset($_GET['option'])) {
        $selectedOption = $_GET['option'];
        if($selectedOption == 'option1') {
          echo "<p>You selected Option 1: Ice Cream Date!</p>";
        }
        else if($selectedOption == 'option2') {
          echo "<p>You selected Option 2: Visit me at Work on Saturday!</p>";
        }
        else if($selectedOption == 'option3') {
          echo "<p>You selected Option 3: Mall Date/Shopping!</p>";
        }
      }
    ?>
</body>

</html>