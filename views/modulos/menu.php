<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../html/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../html/dist/img/usuario_brayan.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <input type="hidden" id="usu_idx" value="<?php echo $_SESSION["id"]; ?>">
          <a href="#" class="d-block"><?php echo $_SESSION["nombre"]." ".$_SESSION["apellido_paterno"];?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
     


			<!-- SidebarSearch Form -->
			<div class="form-inline">
				<div class="input-group" data-widget="sidebar-search">
					<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-sidebar">
							<i class="fas fa-search fa-fw"></i>
						</button>
					</div>
				</div>
			</div>

			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<!-- Add icons to the links using the .nav-icon class
							 with font-awesome or any other icon font library -->
					<li class="nav-item menu-open">
						<a href="#" class="nav-link active">
							<i class="nav-icon fas fa-tachometer-alt"></i>
							<p>
								Dashboard
								<i class="right fas fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="./index.html" class="nav-link active">
									<i class="far fa-circle nav-icon"></i>
									<p>Dashboard v1</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./index2.html" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Dashboard v2</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./index3.html" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Dashboard v3</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="pages/widgets.html" class="nav-link">
							<i class="nav-icon fas fa-th"></i>
							<p>
								Widgets
								<span class="right badge badge-danger">New</span>
							</p>
						</a>
					</li>
					<!-- <li class="nav-item">

					</li> -->
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-edit"></i>
							<p>
								Menú
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="estudios.php" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Estudios</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="experiencia.php" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Experiencia</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="informacion_personal.php" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Informacion Personal</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="socialMedia.php" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Redes</p>
								</a>
							</li>
						</ul>
					</li>

			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>