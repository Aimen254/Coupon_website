<?php
session_start();
require('includes/functions.php');

authenticate();




include('includes/header.php');
include('includes/sidebar.php');
include ('connection.php');




?>

<section role="main" class="content-body">
					<!-- start: page -->
					<div class="row text-center">
						<div class="col-md-3">
							<section class="card card-featured-left card-featured-quaternary mb-4">
								<div class="card-body">
									<div class="widget-summary">
										<div class="widget-summary-col widget-summary-col-icon">
											<div class="summary-icon bg-quaternary">
												<i class="fas fa-user"></i>
											</div>
										</div>
									
										<div class="widget-summary-col">
											<div class="summary">
												<div class="info">
												<strong class="amount">
														<?php
														$dash_category_query="SELECT * FROM subscribers";
														$dash_category_query_run =mysqli_query($con,$dash_category_query);

														if($category_total=mysqli_num_rows($dash_category_query_run)){
															echo '<strong class="amount">'.$category_total.'</strong>';
														}else
														{
															echo '<strong class="amount">No Record found</strong>';
														}
														?>
														</strong>

												</div>
												<h4 class="title">Subscribers</h4>
											</div>
										</div>
										                

									</div>
								</div>
							</section>
							</div>

						<div class="col-md-3">
							<section class="card card-featured-left card-featured-primary mb-4">
								<div class="card-body">
									<div class="widget-summary">
										<div class="widget-summary-col widget-summary-col-icon">
											<div class="summary-icon bg-primary">
												<i class="fas fa-life-ring"></i>
											</div>
										</div>
										<div class="widget-summary-col">
											<div class="summary">
												<div class="info">
												<strong class="amount">
														<?php
														$dash_category_query="SELECT * FROM coupon";
														$dash_category_query_run =mysqli_query($con,$dash_category_query);

														if($category_total=mysqli_num_rows($dash_category_query_run)){
															echo '<strong class="amount">'.$category_total.'</strong>';
														}else
														{
															echo '<strong class="amount">No Record found</strong>';
														}
														?>
														</strong>
												</div>
												<h4 class="title">Coupons</h4>
											</div>
										</div>
									</div>
								</div>
							</section>
							</div>

							<div class="col-md-3">
								<section class="card card-featured-left card-featured-tertiary mb-4">
									<div class="card-body">
										<div class="widget-summary">
											<div class="widget-summary-col widget-summary-col-icon">
												<div class="summary-icon bg-tertiary">
													<i class="fas fa-shopping-cart"></i>
												</div>
											</div>
											<div class="widget-summary-col">
												<div class="summary">
													<div class="info">
													<strong class="amount">
														<?php
														$dash_category_query="SELECT * FROM add_store";
														$dash_category_query_run =mysqli_query($con,$dash_category_query);

														if($category_total=mysqli_num_rows($dash_category_query_run)){
															echo '<strong class="amount">'.$category_total.'</strong>';
														}else
														{
															echo '<strong class="amount">No Record found</strong>';
														}
														?>
														</strong>
													</div>
													<h4 class="title">Stores</h4>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
					</div>

					
					<!-- end: page -->
				</section>
			

<?php
include('includes/footer.php');
?>