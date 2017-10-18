<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Aj</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/angular.min.js"></script>
<script src="js/angular-route.js"></script>
<script src="js/app.js"></script>
</head>

<body ng-app="myApp">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#/!">Home</a></li>
      <li><a href="#!allposts">All Posts</a></li>
<!--       <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li> -->
    </ul>
  </div>
</nav>

<div ng-view></div>

</body>
</html>
