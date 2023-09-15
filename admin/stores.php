<?php
include('includes/header.php');
include('includes/sidebar.php');
include ('connection.php');
?>

<section role="main" class="content-body">


					<!-- start: page -->
					<div class="row bg-primary p-2">
                        <div class="col-md-6">
                            <h4 class="text-white">Stores List</h4>
						</div>
                        <div class="col-md-3 ms-auto">
                            <a href="add-store.php"><button class="btn bg-success text-white ms-auto" type="submit">Add New</button></a>
						</div>
                    </div>




						  <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Store Name</th>
                <th>Category</th>
                <th>Status</th>
                <th>PPC</th>
				<th>Added Date</th>
                <th>Test Tracking</th>
				<th>Action</th>

            </tr>
        </thead>
		<tbody>

												<?php

												$sql= "Select * from `add_store` order by id desc";
												$result=mysqli_query($con,$sql);
												if($result){
												while( $row=mysqli_fetch_assoc($result)){
												$id=$row['id'];
												$store_name=$row['store_name'];
												$select_category=$row['select_category'];
												$select_status=$row['select_status'];
												$ppc=$row['ppc'];
												$Added_Date=$row['Added_Date'];
												$tracking_link=$row['tracking_link'];
													echo ' <tr>
													
												
												<th scope="row">'.$id.'</th>
												<td>'.$store_name.'</td>
												<td>'.$select_category.'</td>
													<td>'.$select_status.'</td>
													<td>'.$ppc.'</td>
													<td>'.$Added_Date.'</td>
													<td>'.$tracking_link.'</td>
										         	<td>
													<a href="update_stores.php?updateid='.$id.'" class="on-default edit-row text-primary"><i class="fas fa-pencil-alt"></i></a>
													<a href="delete_stores.php?deleteid='.$id.'" class="on-default remove-row text-primary"><i class="far fa-trash-alt"></i></a>
												   </td>
													</tr>';

												}
											}

												?>

										</tbody>
										<!-- <th><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" /></th> -->




    </table>
								</div>
							</div>

						</div>
					</div>
					<!-- end: page -->
				</section>
			</div>

		</section>

        <?php
include('includes/footer.php');
?>