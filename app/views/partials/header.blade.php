<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo URL::route("home");?>"><span class="nav-icon glyphicon glyphicon-home"></span>Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#"><span class="nav-icon glyphicon glyphicon-star"></span> Notification</a>
                    </li>
                    <li>
                        <a href="#"><span class="nav-icon glyphicon glyphicon-star"></span>Discover</a>
                    </li>
                    <li>
                        <a href="#"><span class="nav-icon glyphicon glyphicon-user"></span>Me</a>
                    </li>
                </ul>
        <ul class="nav navbar-nav navbar-right">
        <!-- Search form -->
        <li> 
        <form class="navbar-form navbar-left" role="search">
          <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Twitter">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
           </div>
       </form>
      </li>
     
        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Direct messages"><span class="glyphicon glyphicon-envelope"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class=" glyphicon glyphicon-cog" ></span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
          <li><a href="#">Edit profile</a></li>
            <li><a href="#">Lists</a></li>
             <li class="divider"></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Keyboard shortcuts</a></li>
            <li class="divider"></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Sign out</a></li>
          </ul>
        </li>
      </ul>
            </div>
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
