<?php
	if (isset ($_POST['sbmt']))
    {
        header ('Location:success.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-container">
    <h2 class="form-title">REGISTRATION FORM</h2>
    <form id="registrationForm" novalidate>
      <div class="form-group">
        <label>First Name</label>
        <input type="text" id="firstName" required>
        <span class="error-msg"></span>
      </div>

      <div class="form-group">
        <label>Middle Initial (optional)</label>
        <input type="text" id="middleInitial" maxlength="1">
      </div>

      <div class="form-group">
        <label>Last Name</label>
        <input type="text" id="lastName" required>
        <span class="error-msg"></span>
      </div>

      <div class="form-group">
        <label>Contact No. (09xxxxxxxxx)</label>
        <input type="text" id="contact" placeholder="09xxxxxxxxx" required>
        <span class="error-msg"></span>
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" id="email" required>
        <span class="error-msg"></span>
      </div>

      <div class="form-group">
        <label>Course</label>
        <input type="text" id="course" required>
        <span class="error-msg"></span>
      </div>

      <div class="form-group">
        <label>Batch</label>
        <input type="text" id="batch" required>
        <span class="error-msg"></span>
      </div>

      <div class="form-group">
        <label>ID No. (2023-33-103)</label>
        <input type="text" id="idNo" placeholder="" required>
        <span class="error-msg"></span>
      </div>

      <button type="submit" class="register-btn">Register</button>
    </form>
  </div>

   <input type="sumbit" name="sbmt" class="register">

  <script src="script.js"></script>
</body>
</html>

