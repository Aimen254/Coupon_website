<?php
include('includes/header.php');
include('includes/sidebar.php');
include ('connection.php');
?>

<section role="main" class="content-body">


					<!-- start: page -->
					<div class="row bg-primary p-2">
                        <div class="col-md-6">
                            <h4 class="text-white">Setting</h4>
						</div>
                        <div class="col-md-3 ms-auto">
                          
						</div>
                    </div>




						  <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Company_Name </th>
                <th>Facebook_URL</th>
            
				<th>Action</th>

            </tr>
        </thead>
		<tbody>

												<?php

												$sql= "Select * from `setting` order by id desc";
												$result=mysqli_query($con,$sql);
												if($result){
												while( $row=mysqli_fetch_assoc($result)){
												$id=$row['id'];
                                    $Company_Name=$row['Company_Name'];
                                    $Facebook_URL=$row['Facebook_URL'];
                                
                                 
                            
													echo ' <tr>
													
												
												<th scope="row">'.$id.'</th>
												<td>'.$Company_Name.'</td>
												<td>'.$Facebook_URL.'</td>
												
										         	<td>
													<a href="update-setting.php?updateid='.$id.'" class="on-default edit-row text-primary"><i class="fas fa-pencil-alt"></i></a>
													
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