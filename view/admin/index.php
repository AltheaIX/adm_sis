<?php
include 'config.php';
error_reporting(0);
session_start();

if(!(isset($_SESSION['email']))){
    header("Location: ../../");
}
?>

<?php
include '../head.php';
include '../sidebar.php';
?>
		<!--header-->
		<header class="top-header">
			<nav class="navbar navbar-expand">
				<div class="left-topbar d-flex align-items-center">
					<a href="javascript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
					</a>
				</div>
				<div class="flex-grow-1 search-bar">
					<div class="input-group">
						 <button class="btn btn-search-back search-arrow-back" type="button"><i class="bx bx-arrow-back"></i></button>
						 <input type="text" class="form-control" placeholder="search" />
						 <button class="btn btn-search" type="button"><i class="lni lni-search-alt"></i></button>
					</div>
				</div>
				<div class="right-topbar ms-auto">
					<ul class="navbar-nav">
						<li class="nav-item search-btn-mobile">
							<a class="nav-link position-relative" href="javascript:;">	<i class="bx bx-search vertical-align-middle"></i>
							</a>
						</li>
						<li class="nav-item dropdown dropdown-lg">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javascript:;" data-bs-toggle="dropdown">	<span class="msg-count">6</span>
								<i class="bx bx-comment-detail vertical-align-middle"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a href="javascript:;">
									<div class="msg-header">
										<h6 class="msg-header-title">6 New</h6>
										<p class="msg-header-subtitle">Application Messages</p>
									</div>
								</a>
								<div class="header-message-list">
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="../../assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
													ago</span></h6>
												<p class="msg-info">The standard chunk of lorem</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="../../assets/images/avatars/avatar-2.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
													sec ago</span></h6>
												<p class="msg-info">Many desktop publishing packages</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="../../assets/images/avatars/avatar-3.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Oscar Garner <span class="msg-time float-end">8 min
													ago</span></h6>
												<p class="msg-info">Various versions have evolved over</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="../../assets/images/avatars/avatar-4.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
													min ago</span></h6>
												<p class="msg-info">Making this the first true generator</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="../../assets/images/avatars/avatar-5.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22 min
													ago</span></h6>
												<p class="msg-info">Duis aute irure dolor in reprehenderit</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="../../assets/images/avatars/avatar-6.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Cristina Jhons <span class="msg-time float-end">2 hrs
													ago</span></h6>
												<p class="msg-info">The passage is attributed to an unknown</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="../../assets/images/avatars/avatar-7.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">James Caviness <span class="msg-time float-end">4 hrs
													ago</span></h6>
												<p class="msg-info">The point of using Lorem</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="../../assets/images/avatars/avatar-8.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
													ago</span></h6>
												<p class="msg-info">It was popularised in the 1960s</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="../../assets/images/avatars/avatar-9.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">David Buckley <span class="msg-time float-end">2 hrs
													ago</span></h6>
												<p class="msg-info">Various versions have evolved over</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="../../assets/images/avatars/avatar-10.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Thomas Wheeler <span class="msg-time float-end">2 days
													ago</span></h6>
												<p class="msg-info">If you are going to use a passage</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="../../assets/images/avatars/avatar-11.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5 days
													ago</span></h6>
												<p class="msg-info">All the Lorem Ipsum generators</p>
											</div>
										</div>
									</a>
								</div>
								<a href="javascript:;">
									<div class="text-center msg-footer">View All Messages</div>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-lg">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javascript:;" data-bs-toggle="dropdown">	<i class="bx bx-bell vertical-align-middle"></i>
								<span class="msg-count">8</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a href="javascript:;">
									<div class="msg-header">
										<h6 class="msg-header-title">8 New</h6>
										<p class="msg-header-subtitle">Application Notifications</p>
									</div>
								</a>
								<div class="header-notifications-list">
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
													ago</span></h6>
												<p class="msg-info">5 new user registered</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
													ago</span></h6>
												<p class="msg-info">You have recived new orders</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="notify bg-light-shineblue text-shineblue"><i class="bx bx-file"></i>
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
													ago</span></h6>
												<p class="msg-info">The pdf files generated</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="notify bg-light-cyne text-cyne"><i class="bx bx-send"></i>
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
													ago</span></h6>
												<p class="msg-info">5.1 min avarage time response</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="notify bg-light-purple text-purple"><i class="bx bx-home-circle"></i>
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">New Product Approved <span
													class="msg-time float-end">2 hrs ago</span></h6>
												<p class="msg-info">Your new product has approved</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="notify bg-light-warning text-warning"><i class="bx bx-message-detail"></i>
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
													ago</span></h6>
												<p class="msg-info">New customer comments recived</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
													ago</span></h6>
												<p class="msg-info">Successfully shipped your item</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="notify bg-light-sinata text-sinata"><i class='bx bx-user-pin'></i>
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
													ago</span></h6>
												<p class="msg-info">24 new authors joined last week</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="notify bg-light-mehandi text-mehandi"><i class='bx bx-door-open'></i>
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
													ago</span></h6>
												<p class="msg-info">45% less alerts last 4 weeks</p>
											</div>
										</div>
									</a>
								</div>
								<a href="javascript:;">
									<div class="text-center msg-footer">View All Notifications</div>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-user-profile">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
								<div class="d-flex user-box align-items-center">
									<div class="user-info">
										<p class="user-name mb-0">Jessica Doe</p>
										<p class="designattion mb-0">Available</p>
									</div>
									<img src="../../assets/images/avatars/avatar-1.png" class="user-img" alt="user avatar">
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-end">	
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-user"></i><span>Profile</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-cog"></i><span>Settings</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-tachometer"></i><span>Dashboard</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-wallet"></i><span>Earnings</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-cloud-download"></i><span>Downloads</span></a>
								<div class="dropdown-divider mb-0"></div>	<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-power-off"></i><span>Logout</span></a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-language">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
								<div class="lang d-flex">
									<div><i class="flag-icon flag-icon-um"></i>
									</div>
									<div><span>En</span>
									</div>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-de"></i><span>German</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-fr"></i><span>French</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-um"></i><span>English</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-in"></i><span>Hindi</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-cn"></i><span>Chinese</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-ae"></i><span>Arabic</span></a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="row">
						<div class="col-12 col-lg-4">
							<div class="card radius-15 overflow-hidden">
								<div class="card-body">
									<div class="d-flex">
										<div>
											<p class="mb-0 font-weight-bold">Sessions</p>
											<h2 class="mb-0">501</h2>
										</div>
										<div class="ms-auto align-self-end">
											<p class="mb-0 font-14 text-primary"><i class='bx bxs-up-arrow-circle'></i>  <span>1.01% 31 days ago</span>
											</p>
										</div>
									</div>
									<div id="chart1"></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="card radius-15 overflow-hidden">
								<div class="card-body">
									<div class="d-flex">
										<div>
											<p class="mb-0 font-weight-bold">Visitors</p>
											<h2 class="mb-0">409</h2>
										</div>
										<div class="ms-auto align-self-end">
											<p class="mb-0 font-14 text-success"><i class='bx bxs-up-arrow-circle'></i>  <span>0.49% 31 days ago</span>
											</p>
										</div>
									</div>
									<div id="chart2"></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="card radius-15 overflow-hidden">
								<div class="card-body">
									<div class="d-flex">
										<div>
											<p class="mb-0 font-weight-bold">Page Views</p>
											<h2 class="mb-0">2,346</h2>
										</div>
										<div class="ms-auto align-self-end">
											<p class="mb-0 font-14 text-danger"><i class='bx bxs-down-arrow-circle'></i>  <span>130.68% 31 days ago</span>
											</p>
										</div>
									</div>
									<div id="chart3"></div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
					<div class="row">
						<div class="col-12 col-lg-8 d-flex">
							<div class="card radius-15 w-100">
								<div class="card-header border-bottom-0">
									<div class="d-flex align-items-center">
										<div>
											<h5 class="mb-lg-0">New VS Returning Visitors</h5>
										</div>
										<div class="ms-auto mb-2 mb-lg-0">
											<div class="btn-group-round">
												<div class="btn-group">
													<button type="button" class="btn btn-white">This Month</button>
													<button type="button" class="btn btn-white dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="javaScript:;">This Week</a>
														<a class="dropdown-item" href="javaScript:;">This Year</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div id="chart4"></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4 d-flex">
							<div class="card radius-15 w-100">
								<div class="card-body">
									<div class="d-lg-flex align-items-center">
										<div>
											<h5 class="mb-4">Devices of Visitors</h5>
										</div>
									</div>
									<div id="chart5"></div>
								</div>
								<ul class="list-group list-group-flush mb-0">
									<li class="list-group-item border-top d-flex justify-content-between align-items-center bg-transparent">Mobile<span class="badge bg-danger rounded-pill">25%</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Desktop<span class="badge bg-primary rounded-pill">65%</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Tablet<span class="badge bg-warning rounded-pill text-dark">10%</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!--end row-->
					<div class="row">
						<div class="col-12 col-lg-12 col-xl-6 d-flex">
							<div class="card radius-15 w-100">
								<div class="card-body">
                                    <div class="row row-cols-1 row-cols-md-3 g-3">
										<div class="col">
											<div class="card radius-15 mb-0 shadow-none border">
												<div class="card-body text-center">
													<div class="widgets-icons mx-auto rounded-circle bg-info text-white"><i class='bx bx-time'></i>
													</div>
													<h4 class="mb-0 font-weight-bold mt-3">2m 28s</h4>
													<p class="mb-0">Avg. Time on Site</p>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="card radius-15 mb-0 shadow-none border">
												<div class="card-body text-center">
													<div class="widgets-icons mx-auto bg-wall text-white rounded-circle"><i class='bx bx-bookmark-alt'></i>
													</div>
													<h4 class="mb-0 font-weight-bold mt-3">4.68</h4>
													<p class="mb-0">Pages/Session</p>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="card radius-15 mb-0 shadow-none border">
												<div class="card-body text-center">
													<div class="widgets-icons mx-auto bg-rose rounded-circle text-white"><i class='bx bx-bulb'></i>
													</div>
													<h4 class="mb-0 font-weight-bold mt-3">78%</h4>
													<p class="mb-0">New Sessions</p>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="card radius-15 mb-0 shadow-none border">
												<div class="card-body text-center">
													<div class="widgets-icons mx-auto rounded-circle bg-danger text-white"><i class='bx bx-line-chart'></i>
													</div>
													<h4 class="mb-0 font-weight-bold mt-3">23.4%</h4>
													<p class="mb-0">Bounce Rate</p>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="card radius-15 mb-0 shadow-none border">
												<div class="card-body text-center">
													<div class="widgets-icons mx-auto bg-primary rounded-circle text-white"><i class='bx bx-group'></i>
													</div>
													<h4 class="mb-0 font-weight-bold mt-3">4,286</h4>
													<p class="mb-0">New Users</p>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="card radius-15 mb-0 shadow-none border">
												<div class="card-body text-center">
													<div class="widgets-icons mx-auto bg-success text-white rounded-circle"><i class='bx bx-cloud-download'></i>
													</div>
													<h4 class="mb-0 font-weight-bold mt-3">78%</h4>
													<p class="mb-0">Downloads</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-12 col-xl-6 d-flex">
							<div class="card radius-15 w-100">
								<div class="card-body">
									<div class="d-lg-flex align-items-center mb-4">
										<div>
											<h5 class="mb-0">Social Media Traffic</h5>
										</div>
										<div class="ms-auto">
											<h3 class="mb-0"><span class="font-14">Total Visits:</span> 874</h3>
										</div>
									</div>
									<hr/>
									<div class="dashboard-social-list">
										<ul class="list-group list-group-flush">
											<li class="list-group-item d-flex align-items-center">
												<div class="d-flex align-items-center gap-2">
													<div class="widgets-social bg-youtube rounded-circle text-white"><i class='bx bxl-youtube'></i>
													</div>
													<div class="">
														<h6 class="mb-0">YouTube</h6>
													</div>
												</div>
												<div class="ms-auto">298</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="d-flex align-items-center gap-2">
													<div class="widgets-social bg-facebook rounded-circle text-white"><i class='bx bxl-facebook'></i>
													</div>
													<div class="">
														<h6 class="mb-0">Facebook</h6>
													</div>
												</div>
												<div class="ms-auto">324</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="d-flex align-items-center gap-2">
													<div class="widgets-social bg-linkedin rounded-circle text-white"><i class='bx bxl-linkedin'></i>
													</div>
													<div class="">
														<h6 class="mb-0">Linkedin</h6>
													</div>
												</div>
												<div class="ms-auto">127</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="d-flex align-items-center gap-2">
													<div class="widgets-social bg-twitter rounded-circle text-white"><i class='bx bxl-twitter'></i>
													</div>
													<div class="">
														<h6 class="mb-0">Twitter</h6>
													</div>
												</div>
												<div class="ms-auto">325</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="d-flex align-items-center gap-2">
													<div class="widgets-social bg-tumblr rounded-circle text-white"><i class='bx bxl-tumblr'></i>
													</div>
													<div class="">
														<h6 class="mb-0">Tumblr</h6>
													</div>
												</div>
												<div class="ms-auto">287</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="d-flex align-items-center gap-2">
													<div class="widgets-social bg-dribbble rounded-circle text-white"><i class='bx bxl-dribbble'></i>
													</div>
													<div class="">
														<h6 class="mb-0">Dribbble</h6>
													</div>
												</div>
												<div class="ms-auto">154</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
					<div class="row">
						<div class="col-12 col-lg-12 col-xl-8">
							<div class="card radius-15">
								<div class="card-body">
									<div class="card-title">
										<h5 class="mb-0">Geographic</h5>
									</div>
									<hr/>
									<div id="geographic-map"></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-12 col-xl-4">
							<div class="card radius-15">
								<div class="card-body">
									<div class="d-lg-flex align-items-center mb-4">
										<div>
											<h5 class="mb-0">Top countries</h5>
										</div>
										<div class="ms-auto">
											<h3 class="mb-0"><span class="font-14">Total Visits:</span> 9587</h3>
										</div>
									</div>
									<hr/>
									<div class="dashboard-top-countries">
										<ul class="list-group list-group-flush">
											<li class="list-group-item d-flex align-items-center">
												<div class="d-flex align-items-center gap-2">
													<div class="font-20"><i class="flag-icon flag-icon-in"></i>
													</div>
													<div class="">
														<h6 class="mb-0">India</h6>
													</div>
												</div>
												<div class="ms-auto">647</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="d-flex align-items-center gap-2">
													<div class="font-20"><i class="flag-icon flag-icon-us"></i>
													</div>
													<div class="media-body ml-2">
														<h6 class="mb-0">United States</h6>
													</div>
												</div>
												<div class="ms-auto">435</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="d-flex align-items-center gap-2">
													<div class="font-20"><i class="flag-icon flag-icon-vn"></i>
													</div>
													<div class="">
														<h6 class="mb-0">Vietnam</h6>
													</div>
												</div>
												<div class="ms-auto">287</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="d-flex align-items-center gap-2">
													<div class="font-20"><i class="flag-icon flag-icon-au"></i>
													</div>
													<div class="">
														<h6 class="mb-0">Australia</h6>
													</div>
												</div>
												<div class="ms-auto">432</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="d-flex align-items-center gap-2">
													<div class="font-20"><i class="flag-icon flag-icon-dz"></i>
													</div>
													<div class="">
														<h6 class="mb-0">Angola</h6>
													</div>
												</div>
												<div class="ms-auto">345</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="d-flex align-items-center gap-2">
													<div class="font-20"><i class="flag-icon flag-icon-ax"></i>
													</div>
													<div class="">
														<h6 class="mb-0">Aland Islands</h6>
													</div>
												</div>
												<div class="ms-auto">134</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="d-flex align-items-center gap-2">
													<div class="font-20"><i class="flag-icon flag-icon-ar"></i>
													</div>
													<div class="">
														<h6 class="mb-0">Argentina</h6>
													</div>
												</div>
												<div class="ms-auto">147</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="d-flex align-items-center gap-2">
													<div class="font-20"><i class="flag-icon flag-icon-be"></i>
													</div>
													<div class="">
														<h6 class="mb-0">Belgium</h6>
													</div>
												</div>
												<div class="ms-auto">210</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->

					<div class="row row-cols-1 row-cols-lg-3">
                      <div class="col d-flex">
						<div class="card radius-15 w-100">
							<div class="card-body">
								<div class="card-title">
									<h5 class="mb-0">Browser Statistics </h5>
								</div>
								<hr/>
								<div class="d-flex align-items-center gap-3">
									<div>
										<img src="../../assets/images/icons/chrome.png" width="35" height="35" alt="" />
									</div>
									<div class="">
										<h6 class="mb-0">587</h6>
										<p class="mb-0">Chrome</p>
									</div>
									<p class="mb-0 ms-auto">24.3%</p>
								</div>
								<hr/>
								<div class="d-flex align-items-center gap-3">
									<div>
										<img src="../../assets/images/icons/firefox.png" width="35" height="35" alt="" />
									</div>
									<div class="">
										<h6 class="mb-0">358</h6>
										<p class="mb-0">Firefox</p>
									</div>
									<p class="mb-0 ms-auto">12.3%</p>
								</div>
								<hr/>
								<div class="d-flex align-items-center gap-3">
									<div>
										<img src="../../assets/images/icons/edge.png" width="35" height="35" alt="" />
									</div>
									<div class="">
										<h6 class="mb-0">867</h6>
										<p class="mb-0">Edge</p>
									</div>
									<p class="mb-0 ms-auto">24.3%</p>
								</div>
								<hr/>
								<div class="d-flex align-items-center gap-3">
									<div>
										<img src="../../assets/images/icons/opera.png" width="35" height="35" alt="" />
									</div>
									<div class="">
										<h6 class="mb-0">752</h6>
										<p class="mb-0">Opera</p>
									</div>
									<p class="mb-0 ms-auto">27.3%</p>
								</div>
								<hr/>
								<div class="d-flex align-items-center gap-3">
									<div>
										<img src="../../assets/images/icons/safari.png" width="35" height="35" alt="" />
									</div>
									<div class="">
										<h6 class="mb-0">586</h6>
										<p class="mb-0">Safari</p>
									</div>
									<p class="mb-0 ms-auto">14.5%</p>
								</div>
							</div>
						</div>
					  </div>
					  <div class="col d-flex">
						<div class="card radius-15 w-100">
							<div class="card-body">
								<div class="card-title">
									<h5 class="mb-0">Traffic Sources </h5>
								</div>
								<hr/>
								<div class="table-responsive">
									<table class="table table-striped mb-0">
										<thead>
											<tr>
												<th>Source</th>
												<th>Visitors</th>
												<th>Bounce Rate</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>(direct)</td>
												<td>56</td>
												<td>10%</td>
											</tr>
											<tr>
												<td>google</td>
												<td>29</td>
												<td>12%</td>
											</tr>
											<tr>
												<td>linkedin.com</td>
												<td>68</td>
												<td>33%</td>
											</tr>
											<tr>
												<td>bing</td>
												<td>14</td>
												<td>24%</td>
											</tr>
											<tr>
												<td>facebook.com</td>
												<td>87</td>
												<td>22%</td>
											</tr>
											<tr>
												<td>twitter.com</td>
												<td>88</td>
												<td>43%</td>
											</tr>
											<tr>
												<td>other</td>
												<td>98</td>
												<td>27%</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col d-flex">
						<div class="card radius-15 w-100">
							<div class="card-body">
								<div class="card-title">
									<h5 class="mb-0">Visitors By Gender </h5>
								</div>
								<hr/>
								<div id="chart6"></div>
							</div>
						</div>
					 </div>
					</div><!--end row-->


					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h5 class="mb-0">Top pages by views </h5>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table mb-0">
									<thead class="thead-dark">
										<tr>
											<th>#</th>
											<th>Title</th>
											<th>Views</th>
											<th>Avg. Time</th>
											<th>Bounce Rate</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a href="https://themeforest.net/item/synadmin-bootstrap4-admin-template/29014766" target="_blank">https://themeforest.net/item/synadmin-bootstrap4-admin-template/29014766</a>
											</td>
											<td>660</td>
											<td>55s</td>
											<td>3.6%</td>
										</tr>
										<tr>
											<td>2</td>
											<td><a href="https://codervent.com/wipe-admin-dark/dashboard/v3" target="_blank">https://codervent.com/wipe-admin-dark/dashboard/v3</a>
											</td>
											<td>352</td>
											<td>16s</td>
											<td>8.4%</td>
										</tr>
										<tr>
											<td>3</td>
											<td><a href="https://themeforest.net/item/dashtreme-multipurpose-bootstrap4-admin-template/23059455" target="_blank">https://themeforest.net/item/dashtreme-multipurpose-bootstrap4-admin-template/23059455</a>
											</td>
											<td>101</td>
											<td>10s</td>
											<td>6.7%</td>
										</tr>
										<tr>
											<td>4</td>
											<td><a href="https://themeforest.net/item/rukada-responsive-bootstrap-4-admin-template/22820477" target="_blank">https://themeforest.net/item/rukada-responsive-bootstrap-4-admin-template/22820477</a>
											</td>
											<td>95</td>
											<td>57s</td>
											<td>5.2%</td>
										</tr>
										<tr>
											<td>5</td>
											<td><a href="https://codervent.com/rocker-angular/dashboard/v1" target="_blank">https://codervent.com/rocker-angular/dashboard/v1</a>
											</td>
											<td>102</td>
											<td>45s</td>
											<td>7.2%</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
<?php
include '../footer.php';
?>
	<!-- JavaScript -->
	
	<!-- Bootstrap JS -->
	<script src="../../assets/js/bootstrap.bundle.min.js"></script>

	<!--plugins-->
	<script src="../../assets/js/jquery.min.js"></script>
	<script src="../../assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="../../assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="../../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!-- Vector map JavaScript -->
	<script src="../../assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="../../assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="../../assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
	<script src="../../assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
	<script src="../../assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
	<script src="../../assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
	<script src="../../assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="../../assets/js/index.js"></script>
	<!-- App JS -->
	<script src="../../assets/js/app.js"></script>
	<script>
		new PerfectScrollbar('.dashboard-social-list');
		new PerfectScrollbar('.dashboard-top-countries');
	</script>
</body>

</html>