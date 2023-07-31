<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title >Pagina Inicial</title>
  </head>
  <body style="background-color: bisque;">
  <?php
  include 'navbar.php';
  include 'bootstrap.html';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$quiz = $_POST['teste'];
    switch ($quiz) {
        case 1:
            ?>
            <form method="post" action="quiz.php">
                <h3 style="text-align: center; color: darkcyan;">Teste de conhecimentos sobre php</h3>
            <label for="q1">Select an option:</label>
            <select name="q1" id="options">
                <option value="op1">Option 1</option>
                <option value="op2">Option 2</option>
                <option value="op3">Option 3</option>
                <option value="op4">Option 4</option>
                <option value="op5">Option 5</option>
            </select>
        <br>
        <label for="q2">Select an option:</label>
            <select name="q2" id="options">
                <option value="op1">Option 1</option>
                <option value="op2">Option 2</option>
                <option value="op3">Option 3</option>
                <option value="op4">Option 4</option>
                <option value="op5">Option 5</option>
            </select>
        <br>
        <label for="q3">Select an option:</label>
            <select name="q3" id="options">
                <option value="op1">Option 1</option>
                <option value="op2">Option 2</option>
                <option value="op3">Option 3</option>
                <option value="op4">Option 4</option>
                <option value="op5">Option 5</option>
            </select>
        <br>
        <label for="q4">Select an option:</label>
            <select name="q4" id="options">
                <option value="op1">Option 1</option>
                <option value="op2">Option 2</option>
                <option value="op3">Option 3</option>
                <option value="op4">Option 4</option>
                <option value="op5">Option 5</option>
            </select>
        <br>
        <label for="q5">Select an option:</label>
            <select name="q5" id="options">
                <option value="op1">Option 1</option>
                <option value="op2">Option 2</option>
                <option value="op3">Option 3</option>
                <option value="op4">Option 4</option>
                <option value="op5">Option 5</option>
            </select>
        <br>
        <input type="submit" value="Submit">
    </form>
    <?php
            break;
        case 2:
            # code...
            
        break;
        case 3:
            # code...
        break;
        
        default:
            # code...
            break;
    }
}
?>
    <br>
    <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <div class="form-check">
         
      </div>
    </div>
  </body>
  <style>
    
  </style>
</html>
