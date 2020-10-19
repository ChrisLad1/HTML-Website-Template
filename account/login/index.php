
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FreeBoot.TO - Dashboard</title>
    <meta name="description" content="FreeBoot.TO - Powerful and Affordable Stress Testing">
	<meta name="author" content="StrikeREAD & FreeBoot">
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="https://i.imgur.com/m4fIt2q.png" sizes="152x152">
    <link rel="apple-touch-icon" href="https://i.imgur.com/qkCejmw.png" sizes="180x180">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css" id="theme-link">
	<link rel="stylesheet" href="css/themes/amethyst.css" id="theme-link">
    <link rel="stylesheet" href="css/themes.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
</head>

    <body>
        <div id="page-wrapper" class="page-loading">
            <div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
                <div id="sidebar">
                    <div id="sidebar-brand" class="themed-background">
                        <a href="index.php" class="sidebar-title">
                            <i class="fa fa-terminal"></i> 
                            <span class="sidebar-nav-mini-hide">
                            	<strong>FreeBoot.TO</strong>
                            </span>
                        </a>
                    </div>
                    <div id="sidebar-scroll">
                        <div class="sidebar-content">
                            <ul class="sidebar-nav">
                                <li>
                                   <a href="index.php"  class="active" >
                                   		<i class="fa fa-home sidebar-nav-icon"></i>
                                   		<span class="sidebar-nav-mini-hide">Dashboard</span>
                                 	</a>
                                </li>

                                <li class="sidebar-separator">
                                    <i class="fa fa-ellipsis-h"></i>
                                </li>

								<li>
                                 	<a href="stress.php"  >
                                    	<i class="fa fa-bolt sidebar-nav-icon"></i>
                                    	<span class="sidebar-nav-mini-hide">Attack Hub</span>
                                	</a>
                                </li>

                                <li>
                                    <a href="api_docs.php"  >
                                        <i class="fa fa-rocket sidebar-nav-icon"></i>
                                        <span class="sidebar-nav-mini-hide">API Documents</span>
                                    </a>
                                </li>

							    <li class="sidebar-separator">
 								    <i class="fa fa-ellipsis-h"></i>
 								</li>

								<li>
                                    <a href="tickets.php" >
                                    	<i class="fa fa-envelope sidebar-nav-icon"></i>
                                    	<span class="sidebar-nav-mini-hide">Support</span>
                                    </a>
                              	</li>
							   	<li>
                                    <a href="faq.php" >
                                    	<i class="fa fa-question-circle sidebar-nav-icon"></i>
                                    	<span class="sidebar-nav-mini-hide">FAQ</span>
                                    </a>
                           		</li>

								<li class="sidebar-separator">
									<i class="fa fa-ellipsis-h"></i>
								<li>
                                    <a href="purchase.php" >
                                    	<i class="fa fa-credit-card sidebar-nav-icon"></i>
                                    	<span class="sidebar-nav-mini-hide">Purchase</span>
                                    </a>
                             	</li>

							 	<li>
                                    <a href="giftcode.php" >
                                    	<i class="fa fa-credit-card sidebar-nav-icon"></i>
                                    	<span class="sidebar-nav-mini-hide">GiftCode Manager</span>
                                    </a>
                            	</li>

							
                            
							</ul>
                    	</div>
                    </div>

                     <div id="sidebar-extra-info" class="sidebar-content sidebar-nav-mini-hide">
						<div class="text-center">
                            <small>FreeBoot.TO v2.0</small><br>
                            <small>2017-2020 &copy; <a href="https://freeboot.to/booter" target="_blank">FreeBoot.TO</a></small>
                        </div>
                    </div>
                </div>
				<div id="main-container">
				<header class="navbar navbar-inverse navbar-fixed-top">

                	<ul class="nav navbar-nav-custom">
                        <li>
                            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');">
                                <i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
                                <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>
                            </a>
                        </li>

                        <li class="hidden-xs animation-fadeInQuick">
                           	<a href="">
                           		<strong>Dashboard</strong>
                           	</a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav-custom pull-right">
                        <li>
                            <a href="#" data-toggle="dropdown"><strong>FRJFEI9 - UserCP</strong> <span class="caret"></span> </a>
                                <ul class="dropdown-menu dropdown-menu-right">

                                    <li class="dropdown-header">
                                        <strong>FRJFEI9</strong>
                                    </li>
                                    <li>
                                        <a href="UserCP.php">
                                            <i class="fa fa-user fa-fw pull-right"></i>
                                           User CP
                                        </a>
                                    </li>
									<li>
                                        <a href="logout.php">
                                            <i class="fa fa-power-off fa-fw pull-right"></i>
                                           Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>	
            	</header>	
		<div id="page-content">
			
                       <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content widget-content-mini text-right clearfix">
                                        <div class="widget-icon pull-left themed-background-info">
                                            <i class="fa fa-fire text-light-op"></i>
                                        </div>
                                        <h2 class="widget-heading h3 text-info">
                                            <strong><span data-toggle="counter" data-to="18"></span> / ~<span data-toggle="counter" data-to="38"></span> </strong>
                                        </h2>
                                        <span class="text-muted">Running Tests</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content widget-content-mini text-right clearfix">
                                        <div class="widget-icon pull-left themed-background">
                                            <i class="fa fa-hdd-o text-light-op"></i>
                                        </div>
                                        <h2 class="widget-heading h3">
                                            <strong><span data-toggle="counter" data-to="11"></span></strong>
                                        </h2>
                                        <span class="text-muted">Servers Online</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content widget-content-mini text-right clearfix">
                                        <div class="widget-icon pull-left themed-background-danger">
                                            <i class="fa fa-heart text-light-op"></i>
                                        </div>
                                        <h2 class="widget-heading h3 text-danger">
                                            <strong><span data-toggle="counter" data-to="443923"></span></strong>
                                        </h2>
                                        <span class="text-muted">Users</span>
                                	</div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
						<div class="col-sm-6 col-lg-8">
							<div class="widget">
								<div class="widget-content widget-content-mini themed-background-dark text-light-op">
								<span class="pull-right text-muted">FreeBoot.TO</span>
								<i class="fa fa-send"></i> <b>Announcements</b>
								</div>
								<div class="widget-content">
									<div style="position: relative; width: auto" class="slimScrollDiv">
										<div id="stats">
											<table class="table table-striped">
												<tbody>
													<tr>
														<th><center>Title</center></th>
														<th><center>Content</center></th>
														<th><center>Date</center></th>
														<th><center>Author</center></th>
													</tr>
													<tr>

													</tr>
													
													<tr>
															<td><center>News</center></td>
															<td><center>Dear users, we decided to make our stress testing service even more privacy focused, once your attack expire it's permanently deleted from our servers within several seconds. Warm Regards</center></td>
															<td><center> 22/06/19</center></td>
															<td><center><span class="label label-success">admin</span></center></td>
													</tr>
													<tr>
															<td><center>FAQ</center></td>
															<td><center>FAQ has been added! Some of the most common questions are answered here. Take a look before opening a ticket. </center></td>
															<td><center> 20/01/18</center></td>
															<td><center><span class="label label-success">admin</span></center></td>
													</tr>												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="widget">
								<div class="widget-content widget-content-mini themed-background-dark text-light-op">
								<span class="pull-right text-muted">FreeBoot.TO</span>
								<i class="fa fa-user"></i> <b>Info</b>
								</div>

								<div class="widget-content">
									<table class="table table-striped table-vcenter">
																		<tbody>

										<tr>
											<td class="text-right"><strong>User ID</strong></td>
											<td><span class="label label-info">437614</span></td>
										</tr>

										<tr>
											<td class="text-right"><strong>Username</strong></td>
											<td><span class="label label-success">FRJFEI9</span></td>
										</tr>

										<tr>
											<td class="text-right" style="width: 50%;"><strong>Membership</strong></td>
											<td><span class="label label-info">Normal </span><a data-original-title="Upgrade" href="purchase.php" data-toggle="tooltip" title=""><i class="fa fa-chevron-up"></i></a></td>
										</tr>
										<tr>
											<td class="text-right"><strong>Membership Expiration</strong></td>
											<td><span class="label label-success">Never</span></td>
										</tr>
										<tr>
											<td class="text-right"><strong>Boot Time</strong></td>
																						<td><span class="label label-info">295 seconds</span></td>
																					</tr>
										<tr>
											<td class="text-right"><strong>Current Boots</strong></td>
																						<td><span class="label label-success">1 Current Boots</span></td>
																					</tr>
										<tr>
											<td class="text-right"><strong>Boot Power</strong> </td>
																						<td><span class="label label-info">~1-2 Gbps <small style="font-size: 70%;">(L4 UDP)</small></span></td>
																					</tr>
									</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
         </div>
       </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.js"></script>
<script src="js/plugins.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqBootstrapValidation/1.3.7/jqBootstrapValidation.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Nestable/2012-10-15/jquery.nestable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countto/1.2.0/jquery.countTo.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/retina.js/2.1.3/retina.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.1/bootstrap-slider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-placeholder/2.3.1/jquery.placeholder.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/1.2.5/jquery.easy-pie-chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.3/jquery.tagsinput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="js/app.js"></script>
<script src="js/pages/readyDashboard.js"></script>
<script>$(function(){ ReadyDashboard.init(); });</script>

    </body>
</html>