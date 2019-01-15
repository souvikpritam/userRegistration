 <!--Form -->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="form">
				<form method="post" action="process/update_user.php" enctype="multipart/form-data">
					<div class="form-attributes">
						<p>First Name:</p>
						<input type="text" name="first_name" value="" placeholder="" />
						<div class="error_msg">
							<?php if(isset($error_msg['first_name'])) {
								echo $error_msg['first_name'];
							} ?>
						</div>	
					</div>
					<div class="form-attributes">
						<p>Last Name:</p>
						<input type="text" name="last_name" value="" placeholder="" />
						<div class="error_msg">
							<?php if(isset($error_msg['last_name'])) {
								echo $error_msg['last_name'];
							} ?>
						</div>	
					</div>
					<div class="form-attributes">
						<p>Email:</p>
						<input type="email" name="email" value="" placeholder="" />
						<div class="error_msg">
							<?php if(isset($error_msg['email'])) {
								echo $error_msg['email'];
							} ?>
						</div>
					</div>
					<div class="form-attributes">
						<p>Password:</p>
						<input type="password" name="password" value="" placeholder="" />
						<div class="error_msg">
							<?php if(isset($error_msg['password'])) {
								echo $error_msg['password'];
							} ?>
						</div>
					</div>
					<div class="form-attributes">
						<p>Mobile No:</p>
						<input type="text" name="mobile_no" value="" placeholder="" />
						<div class="error_msg">
							<?php if(isset($error_msg['mobile_no'])) {
								echo $error_msg['mobile_no'];
							} ?>
						</div>
					</div>

					<div class="form-attributes">
						<p>Date Of Birth:</p>
						<input  type="text" name="dob" id="datepicker" value="" placeholder="" />
						<div class="error_msg">
							<?php if(isset($error_msg['dob'])) {
								echo $error_msg['dob'];
							} ?>
						</div>
					</div>

					<div class="form-attributes">
						<p>Website:</p>
						<input type="url" name="website_url" value="" placeholder="" />
						<div class="error_msg">
							<?php if(isset($error_msg['website_url'])) {
								echo $error_msg['website_url'];
							} ?>
						</div>
					</div>
					<div class="form-attributes">
						<p>Gender:</p>
						<span>Male:</span> <input type="radio" name="gender" value="male" <?php if(isset($gender) && ($gender == "male")) echo "checked";?> />
						<span>Female:</span> <input type="radio" name="gender" value="female" <?php if(isset($gender) && ($gender == "female")) echo "checked";?> />
						<div class="error_msg">
							<?php if(isset($error_msg['gender'])) {
								echo $error_msg['gender'];
							} ?>
						</div>

					</div>

					<div class="form-attributes">
						<select name="select_one">
							<option value="NULL">Please Select</option>
							<option value="Option 1">Option 1</option>
							<option value="Option 2">Option 2</option>
							<option value="Option 3">Option 3</option>
						</select>

						<div class="error_msg">
							<?php if(isset($error_msg['select_one'])) {
								echo $error_msg['select_one'];
							} ?>
						</div>
					</div>

					<div class="form-attributes">
						<p>Select:</p>
						<span>Red:</span> <input type="checkbox" name="checkbox[]" value="red" <?php if(isset($checkbox) && ($checkbox == "check1")) echo "checked";?> />
						<span>Blue:</span> <input type="checkbox" name="checkbox[]" value="blue" <?php if(isset($checkbox) && ($checkbox == "check2")) echo "checked";?> />
						<span>Green:</span> <input type="checkbox" name="checkbox[]" value="green" <?php if(isset($checkbox) && ($checkbox == "check3")) echo "checked";?> />
						<span>Yellow:</span> <input type="checkbox" name="checkbox[]" value="yellow" <?php if(isset($checkbox) && ($checkbox == "check4")) echo "checked";?> />

						<div class="error_msg">
							<?php if(isset($error_msg['checkbox'])) {
								echo $error_msg['checkbox'];
							} ?>
						</div>
					</div>

					<div class="form-attributes">
						<p>File/Image Upload:</p>
						<input type="file" name="img" value="" />
						<div class="error_msg">
							<?php if(isset($error_msg['img'])) {
								echo $error_msg['img'];
							} ?>
						</div>
					</div>

					<div class="form-attributes">
						<p>Comment:</p>
						<textarea rows="5" cols="40" name="comment" placeholder="" /></textarea>
						<div class="error_msg">
							<?php if(isset($error_msg['comment'])) {
								echo $error_msg['comment'];
							} ?>
						</div>
					</div>
					
					<div class="form-attributes">
						<input type="submit" name="submit" class="submit_btn" value="Save"  />
					</div>
				</form>
			</div>
		</div><!--/.col-md-12-->
	</div><!--/.row-->
</div><!--/.container-->