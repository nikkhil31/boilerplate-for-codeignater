<div class="sidebar-scroll">
	<div id="sidebar" class="nav-collapse collapse">
		<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
		 <div class="navbar-inverse">
			<form class="navbar-search visible-phone">
				 <input type="text" class="search-query" placeholder="Search" />
			</form>
		 </div>
		 <!-- END RESPONSIVE QUICK SEARCH FORM -->
		 <!-- BEGIN SIDEBAR MENU -->
		<ul class="sidebar-menu">

			
			<li class="sub-menu <?=active($this->segment,'dashboard')?>">

				<a href="javascript:;" class="">
					<i class="icon-book"></i>
					<span>Dashboard</span>
					<span class="arrow"></span>
				</a>

				<ul class="sub">
					<li class="sub-menu"><a class="" href="<?=site_url('dashboard')?>">Dashboard</a></li>
				</ul>

			</li>

			

			<li class="sub-menu <?=active($this->segment,'page')?>">

				<a href="javascript:;" class="">
					<i class="icon-book"></i>
					<span>Manage CMS</span>
					<span class="arrow"></span>
				</a>

				<ul class="sub">
					<li class="sub-menu"><a class="" href="<?=site_url('page/mgmt')?>">Manage CMS</a></li>
				</ul>

			</li>


			


			

			<li class="sub-menu <?=active($this->segment,'slideshow')?>">

				<a href="javascript:;" class="">
					<i class="icon-book"></i>
					<span>Manage Slideshow</span>
					<span class="arrow"></span>
				</a>

				<ul class="sub">
					<li class="sub-menu"><a class="" href="<?=site_url('slideshow/mgmt')?>">Manage Slideshow</a></li>
				</ul>

			</li>




			

			

			


			

			

			<li class="sub-menu <?=active($this->segment,'general')?>">

				<a href="javascript:;" class="">
					<i class="icon-book"></i>
					<span>Manage General</span>
					<span class="arrow"></span>
				</a>

				<ul class="sub">
					<li class="sub-menu"><a class="" href="<?=site_url('general/edit')?>">Manage General</a></li>
					<li class="sub-menu"><a class="" href="<?=site_url('general/newpass')?>">Change Password</a></li>
				</ul>

			</li>

			
			
		
			<li class="sub-menu" >

				<a href="javascript:;" class="">
					<i class="icon-book"></i>
					<span>Sign out</span>
					<span class="arrow"></span>
				</a>

				<ul class="sub">
					<li class="active"><a class="" href="<?=site_url('sign-out')?>">Sign out</a></li>
				</ul>

			</li>

		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
</div>