<html>
<head>
  <title>CS Desktop Notification</title>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script type="text/javascript">Notification.requestPermission();</script>
</head>
<body>
<div class="container">
  <div class="row">

    <div class="col-md-6 col-md-offset-3">
      <h4 style="border-bottom: 1px solid #c5c5c5;">
        <i class="glyphicon glyphicon-user">
        </i>
      Phone ID
      </h4>
      <div style="padding: 20px;" id="form-olvidado">
        <form accept-charset="UTF-8" role="form" id="login-form" action="session.php" method="post">
          <fieldset>
            <div class="form-group input-group">
          <span class="input-group-addon glyphicon glyphicon-user">
          </span>
              <input class="form-control" placeholder="Pseudo" name="user" type="text" required="" autofocus="">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block" name="connexion" value="Connexion">
                Access
              </button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>