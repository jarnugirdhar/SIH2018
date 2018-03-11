<html>
<head>
  <title>SIH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Login form container -->
    <form>
        <div class="container">
            <div class="form_container panel panel-default">
                <!-- Main buttons to change pages -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#">Employee</a></li>
                    <li><a href="#">Guest</a></li>
                    <li><a href="#">Special Guest</a></li>
                </ul>
                <!-- Email, Username field areas and buttons -->
                <div class="panel-body">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End of login form container -->
</body>
</html>