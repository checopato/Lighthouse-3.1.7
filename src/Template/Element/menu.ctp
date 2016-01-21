    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bootstrap theme</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><?php echo $this->Html->link('Home',['controller' => 'pages' , 'action' => 'home'])  ?></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Users <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('User List',['controller' => 'users' , 'action' => 'index'])  ?></li>
                <li><?php echo $this->Html->link('Create User',['controller' => 'users' , 'action' => 'add'])  ?></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ports <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Ports List',['controller' => 'ports' , 'action' => 'index'])  ?></li>
                <li><?php echo $this->Html->link('Create Port',['controller' => 'ports' , 'action' => 'add'])  ?></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Terminals</li>
                <li><?php echo $this->Html->link('Terminals List',['controller' => 'terminals' , 'action' => 'index'])  ?></li>
                <li><?php echo $this->Html->link('Add Terminal',['controller' => 'terminals' , 'action' => 'add'])  ?></li>
              </ul>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Third Parties <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">Charterer</li>
                <li><?php echo $this->Html->link('Charterer List',['controller' => 'charterers' , 'action' => 'index'])  ?></li>
                <li><?php echo $this->Html->link('Create Charterer',['controller' => 'charterers' , 'action' => 'add'])  ?></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Shipowners</li>
                <li><?php echo $this->Html->link('Shipowners List',['controller' => 'shipowners' , 'action' => 'index'])  ?></li>
                <li><?php echo $this->Html->link('New Shipowner',['controller' => 'shipowners' , 'action' => 'add'])  ?></li>
              </ul>


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>