<?php
// $_REQUEST is a superglobal variable that is used to collect data after submitting an HTML form.
// https://localhost:8000?name=John
echo $_REQUEST['name'] ?? ''; // 

?>


<form method="post">
  <div>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
  </div>
  <div>
    <label for="age">Age:</label>
    <input type="text" name="age" id="age">
  </div>
  <input type="submit" name="submit" value="Submit">
</form>