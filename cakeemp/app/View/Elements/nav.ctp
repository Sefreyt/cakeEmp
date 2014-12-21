
<?php if(!Configure::read('Application.maintenance')){?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>           
		<?php echo $this->Html->link(
			Configure::read('Application.name'),
			AuthComponent::user('id') ? "/home" : "/"
			, array('class' => 'navbar-brand')) ?>          
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">

		<?php if(AuthComponent::user('id')){?>
			<ul class="nav navbar-nav side-nav">				
				<li class="dropdown <?php echo $this->params->params['controller'] == 'documents' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=""></i> <?php echo __('Document')?> <b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot?>documents"><i class="fa fa-list"></i> <?php echo __('List')?></a></li>
						<li><a href="<?php echo $this->params->webroot?>documents/add"><i class="fa fa-plus"></i><?php echo __('Add new document')?></a></li>
					</ul>
				</li>
                                <li class="dropdown <?php echo $this->params->params['controller'] == 'employes' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=""></i> <?php echo __('Employe')?> <b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot?>employes"><i class="fa fa-list"></i> <?php echo __('List')?></a></li>
						<li><a href="<?php echo $this->params->webroot?>employes/add"><i class="fa fa-plus"></i><?php echo __('Add new employe')?></a></li>
					</ul>
				</li>
                                <li class="dropdown <?php echo $this->params->params['controller'] == 'postes' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=""></i> <?php echo __('Poste')?> <b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot?>postes"><i class="fa fa-list"></i> <?php echo __('List')?></a></li>
						<li><a href="<?php echo $this->params->webroot?>postes/add"><i class="fa fa-plus"></i> <?php echo __('Add new poste')?></a></li>
					</ul>
				</li>
                                <li class="dropdown <?php echo $this->params->params['controller'] == 'users' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> <?php echo __('Users')?> <b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot?>users"><i class="fa fa-list"></i> <?php echo __('List')?></a></li>
						<li><a href="<?php echo $this->params->webroot?>users/add"><i class="fa fa-plus"></i> <?php echo __('Register new user')?></a></li>
					</ul>
				</li>
                       
<!--				<li><a href="tables.html"><i class="fa fa-list"></i> Activity</a></li>-->
			</ul>
		<?php } ?>



		<?php if(AuthComponent::user('id')){?>

		<ul class="nav navbar-nav navbar-right navbar-user">
			<li class="dropdown user-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo AuthComponent::user('username')?> <b
						class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo $this->params->webroot?>me"><i class="fa fa-user"></i> <?php echo __('Profile')?></a></li>
					<li><a href="<?php echo $this->params->webroot?>me/edit"><i class="fa fa-gear"></i> <?php echo __('Settings')?></a></li>
					<li class="divider"></li>
					<li><a href="<?php echo $this->params->webroot?>logout"><i class="fa fa-power-off"></i> <?php echo __('Log out')?></a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?php echo $this->I18n->flagSwitcher(array(
    'class' => 'languages',
    'id' => 'language-switcher'
));?>logout"><i class="fa fa-power-off"></i> <?php echo __('Langue')?></a></li>
                                       
				</ul>
			</li>
		</ul>
		<?php }?>
	</div>
	<!-- /.navbar-collapse -->
</nav>
<?php } ?>