<head>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Search Item</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="/items">Items</a></li>
      <li><a href="/sales">Sales</a></li>
      <li><a href="/grades">Grades</a></li>
      <li><a href="api/users">Users</a></li>
    </ul>
  </div>
</nav>
<div class="input-group">
  <div id="search-autocomplete" class="form-outline">
  </div>
</div>
</body>
<style>

  nav {
    position: absolute;
    top: 0;
    left: 0;
  }

</style>
 