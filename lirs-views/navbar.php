<?php
	
	function HtmlNavBar(){
		?>
	
	<nav class="navbar navbar-default">
  <div class="container">
    <div class="col-md-12">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">LIRS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servizi <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">demo</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>

        <li><a href="#">Internet</a></li>
        <li><a href="#">Sviluppo Software</a></li>
             </ul>
    </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>	
		
		<?php
	}
	
	?>