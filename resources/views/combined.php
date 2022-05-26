$code = '<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Search Item</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="/items">Items</a></li>
      <li><a href="/grades">Grades</a></li>
      <li><a href="api/users">Users</a></li>
    </ul>
  </div> 
</div>
</nav>';

foreach (glob("*.php") as $sales) {
   $code.=file_get_contents("./$items");
}
file_put_contents("./combined.php",$code);