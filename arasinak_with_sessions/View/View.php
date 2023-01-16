<?php
	class View{
		public function index(){
			$this->importHead1();
?>

<div id="login" style="width:1200px;">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="index.php?page=login" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
			$this->importFoot();
		}

		public function insertStudent(){
			$this->importHeadAdmin();
?>
<div id="login" style="width:1200px;">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="index.php?page=insertData" method="post">
                            <h3 class="text-center text-info">Add New Student</h3>
														<div class="form-group">
                                <label for="studnumber" class="text-info">Student Number:</label><br>
                                <input type="text" name="studnumber" id="studnumber" class="form-control">
                            </div>
														<div class="form-group">
                                <label for="fullname" class="text-info">Full Name:</label><br>
                                <input type="text" name="fullname" id="fullname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="year" class="text-info">year:</label><br>
                                <input type="text" name="year" id="year" class="form-control">
                            </div>
														<div class="form-group">
                                <label for="faculty" class="text-info">Faculty:</label><br>
                                <input type="text" name="faculty" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Add new Student">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
			$this->importFoot();
		}
		public function homeUser(){
			$this->importHeadUser();
?>
<h1>home user</h1>
<?php
			$this->importFoot();
		}
		public function homeAdmin(){
			$this->importHeadAdmin();
?>
<h1>home admin</h1>

<?php
			$this->importFoot();
		}
		public function searchAdmin(){
			$this->importHeadAdmin();
?>
<h1>search user page</h1>


<?php
			$this->importFoot();
		}
		public function searchUser(){
			$this->importHeadUser();
?>
<h1>search user page</h1>

<?php
			$this->importFoot();
		}
		public function showAllUsersforAdmin($users){
			$this->importHeadAdmin();
?>
<h1>All users :</h1>
<?php if(count($users)==0){ ?>
	<p>No users found!!!</p>
<?php }	else { //else statement?>
	<table class="table table-bordered mb-5">
		<thead>
			<tr>
				<th>ID:</th>
				<th>Student Number:</th>
				<th>Full Name:</th>
				<th>Year:</th>
				<th>Faculty:</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<?php  foreach ($users as $user){?>
			<tbody>
				<tr>
					<td><?php echo $user->getStudId(); ?></td>
					<td><?php echo $user->getStudNum(); ?></td>
					<td><?php echo $user->getFullName(); ?></td>
					<td><?php echo $user->getYear(); ?></td>
					<td><?php echo $user->getFaculty(); ?></td>
					<td>
						<form action='index.php?page=deleteUser' method='post'>
							<input type='hidden' name='userId' value='<?php echo $user->getStudId();?>'>
							<input type='submit' value='Delete'>
						</form>
					</td>
					<td>
						<form action='index.php?page=updateUser' method='post'>
							<input type='hidden' name='userId' value='<?php echo $user->getStudId();?>'>
							<input type='submit' value='Update'>
						</form>
					</td>
				</tr>
			</tbody>
		<?php }//end of foreach ?>
	</table>

	<?php
}
				$this->importFoot();
			}
			public function showAllUsersforUser($users){
				$this->importHeadUser();
	?>
	<h1>All users :</h1>
	<?php if(count($users)==0){ ?>
		<p>No users found!!!</p>
	<?php }	else { //else statement?>
		<table class="table table-bordered mb-5">
			<thead>
				<tr>
					<th>ID:</th>
					<th>Student Number:</th>
					<th>Full Name:</th>
					<th>Year:</th>
					<th>Faculty:</th>
				</tr>
			</thead>
			<?php  foreach ($users as $user){?>
				<tbody>
					<tr>
						<td><?php echo $user->getStudId(); ?></td>
						<td><?php echo $user->getStudNum(); ?></td>
						<td><?php echo $user->getFullName(); ?></td>
						<td><?php echo $user->getYear(); ?></td>
						<td><?php echo $user->getFaculty(); ?></td>
					</tr>
				</tbody>
			<?php }//end of foreach ?>
		</table>

		<?php
		}
				$this->importFoot();
		}
			public function showMessage($message){
				$this->importHead1();
	?>

			<h1><?php echo $message;?></h1>

	<?php
					$this->importFoot();
			}

 public function updateUser($user){
	$this->importHead();
	if(empty($user->getStudNum())) $getStudNum = ""; else $getStudNum = $user->getStudNum();

	if(empty($user->getFullName())) $getFname = ""; else $getFname = $user->getFullName();
	if(empty($user->getYear())) $getYear = ""; else $getYear = $user->getYear();
	if(empty($user->getFaculty())) $getFaculty = ""; else $getFaculty = $user->getFaculty();

?>


<div id="login" style="width:1200px;">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="index.php?page=updateInfo" method="post">
                            <h3 class="text-center text-info">Update Student Info</h3>
														<div class="form-group">
                                <input type="hidden" value = "<?php echo $user->getStudId(); ?>" name="id" id="id" class="form-control">
                            </div>
														<div class="form-group">
                                <label for="studnumber"  class="text-info">Student Number:</label><br>
                                <input type="text" value = "<?php echo $getStudNum; ?>" name="studnumber" id="studnumber" class="form-control">
                            </div>
														<div class="form-group">
                                <label for="fullname" class="text-info">Full Name:</label><br>
                                <input type="text" value = "<?php echo $getFname; ?>" name="fullname" id="fullname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="year" class="text-info">year:</label><br>
                                <input type="text" value = "<?php echo $getYear; ?>" name="year" id="year" class="form-control">
                            </div>
														<div class="form-group">
                                <label for="faculty" class="text-info">Faculty:</label><br>
                                <input type="text" value = "<?php echo $getFaculty; ?>" name="faculty" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
$this->importFoot();
}
public function showInfomessage($mess){
	$this->importHeadAdmin();
 ?>
<h1><?php echo $mess; ?></h1>
<?php
			$this->importFoot();
		}
		public function importHead(){
			include "./View/Template/Head.html";
		}

		public function importHeadUser(){
			include "./View/Template/HeadUser.html";
		}

		public function importHeadAdmin(){
			include "./View/Template/HeadAdmin.html";
		}

		public function importHead1(){
			include "./View/Template/Head1.html";
		}

		public function importFoot(){
			include "./View/Template/Footer.html";
		}
	}
?>
