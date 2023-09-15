<?php
include('includes/header.php');
include('includes/sidebar.php');
include ('connection.php');


?>		

<section role="main" class="content-body">
					

					<!-- start: page -->
					<div class="row bg-primary p-2">
                        <div class="col-md-6">
                            <h4 class="text-white">List Page</h4>
						</div>
                        <div class="col-md-3 ms-auto">
                            <a href="add-static.php">
							<button class="btn bg-success text-white ms-auto" type="submit">Add New</button>
							</a>
						</div>
                    </div>

					<table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>page_title</th>
                            
                            
						
							<th>Action</th>
							
                            
                        </tr>
                    </thead>
                    <tbody>
                     
									<?php
                     						 $sql= "Select * from `add_static`";
                      							$result=mysqli_query($con,$sql);
													if($result){
													while( $row=mysqli_fetch_assoc($result)){
													$id=$row['id'];
													$page_title=$row['page_title'];
												
												
													
													
														echo ' <tr>
													<th scope="row">'.$id.'</th>
													<td>'.$page_title.'</td>
												
													
														
													</td>
													<td>
													<a href="update_static.php?updateid='.$id.'" class="on-default edit-row text-primary"><i class="fas fa-pencil-alt"></i></a>
													
												   </td>
														</tr>';

     										 }
     												}
     
     
    			 								?>
										<!-- <a href="delete_static.php?deleteid='.$id.'" class="on-default remove-row text-primary"><i class="far fa-trash-alt"></i></a> -->
									</tbody>
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