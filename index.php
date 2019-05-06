<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up | Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<div class="container" style="margin-top: 65px;">
    <div class="sign-up">
    <h3>Please Sign Up</h3>
    <p class="pre" ">Lorem Ipsum dummies</p>
        <form action="includes/signup.php" method="post">
            <div class="form-group">
                <!--<label>First Name</label>-->
                <input type="text" class="form-control" name="fname" id="" placeholder="First Name*" required>
                <!--<label>Last Name</label>-->
                <input type="text" class="form-control" name="lname" id="" placeholder="Last Name">
                <!--<label>Email address</label>-->
                <input type="email" class="form-control" name="mail" id="" placeholder="Your E-mail*" required>
            </div>
            <small>* Required!</small><br>
            <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
               <br> <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
</body>
</html>