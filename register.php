<html>

<head>
  <title>
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <?php
  include 'navigation.php';
  ?>
</head>

<body>
  <div class="row register-form">
    <div class="col-md-8 offset-md-2">
      <form class="custom-form" action="registerresult.php" method="post">
        <h1>Register Form</h1>
        <div class="row form-group">
          <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Name </label></div>
          <div class="col-sm-6 input-column"><input class="form-control" type="text" name="name"></div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
          <div class="col-sm-6 input-column"><input class="form-control" type="email" name="email"></div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Password </label></div>
          <div class="col-sm-6 input-column"><input class="form-control" type="password" name="password720"></div>
        </div>
       
        <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="submit">Submit Form</button>
      </form>
    </div>
  </div>

  <!--css-->
  <style>
    .register-form form.custom-form {
      padding: 55px;
      box-sizing: border-box;
      background-color: #ffffff;
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
      font: bold 14px sans-serif;
      text-align: center;
      margin: 50px;
      color: #333;
    }

    @media (max-width:400px) {
      .register-form form.custom-form {
        padding: 55px 10px;
      }
    }

    .register-form .custom-form h1 {
      display: inline-block;
      color: #4c565e;
      font-size: 24px;
      font-weight: bold;
      padding: 0 10px 15px;
      margin-bottom: 60px;
      border-bottom: 2px solid rgb(108, 174, 224);
    }

    .register-form .custom-form .form-group {
      margin-bottom: 25px;
    }

    .register-form .custom-form .label-column {
      text-align: right;
      color: #5F5F5F;
    }

    @media (max-width:768px) {
      .register-form .custom-form .label-column {
        text-align: left;
      }
    }

    .register-form .custom-form .input-column {
      color: #5f5f5f;
      text-align: left;
    }

    .register-form .custom-form .input-column input {
      color: #5f5f5f;
      box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
      padding: 12px;
      border: 1px solid #dbdbdb;
      border-radius: 2px;
      height: 42px;
    }

    .register-form .custom-form .submit-button {
      border-radius: 2px;
      background: #6caee0;
      color: #ffffff;
      font-weight: bold;
      box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
      padding: 14px 22px;
      border: 0;
      margin: 30px;
      outline: none;
    }
  </style>

  <?php
  include 'footer.php';
  ?>
</body>

</html>