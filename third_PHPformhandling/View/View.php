<?php
	class View{
		public function index(){
			$this->importHead();
?>

<header class="masthead">
		<div class="container px-4 px-lg-5 h-100">
				<div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
						<div class="col-lg-8 align-self-end">
								<h1 class="text-white font-weight-bold">Your Favorite Place for Free Learning Cool Things</h1>
								<hr class="divider" />
						</div>
						<div class="col-lg-8 align-self-baseline">
								<p class="text-white-75 mb-5">Programming is not about only coding, it is bringing ideas to life!</p>
								<a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
						</div>
				</div>
		</div>
</header>


<?php
			$this->importFoot();
		}

		public function about(){
			$this->importHead();
?>
<!-- About-->
<section class="d-flex justify-content-between bg-dark p-5" ></section>
<section class="page-section bg-primary" id="about">
		<div class="container px-4 px-lg-5">
				<div class="row gx-4 gx-lg-5 justify-content-center">
						<div class="col-lg-8 text-center">
								<h2 class="text-white mt-0">We've got what you need!</h2>
								<hr class="divider divider-light" />
								<p class="text-white-75 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
								<a class="btn btn-light btn-xl" href="#services">Get Started!</a>
						</div>
				</div>
		</div>
</section>

<?php
			$this->importFoot();
		}
		public function services(){
			$this->importHead();
?>

<!-- Services-->
<section class="d-flex justify-content-between bg-dark p-5" ></section>
<section class="page-section" id="services">
		<div class="container px-4 px-lg-5">
				<h2 class="text-center mt-0">At Your Service</h2>
				<hr class="divider" />
				<div class="row gx-4 gx-lg-5">
						<div class="col-lg-3 col-md-6 text-center">
								<div class="mt-5">
										<div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
										<h3 class="h4 mb-2">Sturdy Themes</h3>
										<p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
								</div>
						</div>
						<div class="col-lg-3 col-md-6 text-center">
								<div class="mt-5">
										<div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
										<h3 class="h4 mb-2">Up to Date</h3>
										<p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
								</div>
						</div>
						<div class="col-lg-3 col-md-6 text-center">
								<div class="mt-5">
										<div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
										<h3 class="h4 mb-2">Ready to Publish</h3>
										<p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
								</div>
						</div>
						<div class="col-lg-3 col-md-6 text-center">
								<div class="mt-5">
										<div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
										<h3 class="h4 mb-2">Made with Love</h3>
										<p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
								</div>
						</div>
				</div>
		</div>
</section>
<?php
			$this->importFoot();
		}
		public function portfolio(){
			$this->importHead();
?>
<!-- Portfolio-->
<!-- Call to action-->
<section class="page-section bg-dark text-white">
		<div class="container px-4 px-lg-5 text-center">
				<h2 class="mb-4">Free Download at Start Bootstrap!</h2>
				<a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Download Now!</a>
		</div>
</section>
<div id="portfolio">
		<div class="container-fluid p-0">
				<div class="row g-0">
						<div class="col-lg-4 col-sm-6">
								<a class="portfolio-box" href="./View/Template/assets//img/portfolio/fullsize/1.jpg" title="Project Name">
										<img class="img-fluid" src="./View/Template/assets//img/portfolio/thumbnails/1.jpg" alt="..." />
										<div class="portfolio-box-caption">
												<div class="project-category text-white-50">Category</div>
												<div class="project-name">Project Name</div>
										</div>
								</a>
						</div>
						<div class="col-lg-4 col-sm-6">
								<a class="portfolio-box" href="./View/Template/assets//img/portfolio/fullsize/2.jpg" title="Project Name">
										<img class="img-fluid" src="./View/Template/assets//img/portfolio/thumbnails/2.jpg" alt="..." />
										<div class="portfolio-box-caption">
												<div class="project-category text-white-50">Category</div>
												<div class="project-name">Project Name</div>
										</div>
								</a>
						</div>
						<div class="col-lg-4 col-sm-6">
								<a class="portfolio-box" href="./View/Template/assets//img/portfolio/fullsize/3.jpg" title="Project Name">
										<img class="img-fluid" src="./View/Template/assets//img/portfolio/thumbnails/3.jpg" alt="..." />
										<div class="portfolio-box-caption">
												<div class="project-category text-white-50">Category</div>
												<div class="project-name">Project Name</div>
										</div>
								</a>
						</div>
				</div>
		</div>
</div>
<?php
			$this->importFoot();
		}
			public function login(){
				$this->importHead();
?>

<!-- Contact-->
<section class="d-flex justify-content-between bg-dark p-5" ></section>
<section class="page-section" id="contact">
		<div class="container px-4 px-lg-5">
				<div class="row gx-4 gx-lg-5 justify-content-center">
						<div class="col-lg-8 col-xl-6 text-center">
								<h2 class="mt-0">Let's Get In Touch!</h2>
								<hr class="divider" />
								<p class="text-muted mb-5">Ready to start your next project with us?</p>
						</div>
				</div>
				<div class="row gx-4 gx-lg-5 justify-content-center mb-5">
						<div class="col-lg-6">
								<!-- * * * * * * * * * * * * * * *-->
								<!-- * * SB Forms Contact Form * *-->
								<!-- * * * * * * * * * * * * * * *-->
								<!-- This form is pre-integrated with SB Forms.-->
								<!-- To make this form functional, sign up at-->
								<!-- https://startbootstrap.com/solution/contact-forms-->
								<!-- to get an API token!-->
								<form id="contactForm" action="index.php?page=registration" method='post' >
										<!-- Name input-->
										<div class="form-floating mb-3">
												<input class="form-control" id="name" type="text" name="fullname" placeholder="Enter your name..." data-sb-validations="required" />
												<label for="name">Full name</label>
												<div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
										</div>
										<!-- Email address input-->
										<div class="form-floating mb-3">
												<input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" data-sb-validations="required,email" />
												<label for="email">Email address</label>
												<div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
												<div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
										</div>
										<!-- password input-->
										<div class="form-floating mb-3">
												<input class="form-control" id="password" type="password" name="password" placeholder="Enter your password..." data-sb-validations="required" />
												<label for="password">Password</label>
												<div class="invalid-feedback" data-sb-feedback="password:required">A name is required.</div>
										</div>

										<!-- Submit error message-->
										<!---->
										<!-- This is what your users will see when there is-->
										<!-- an error submitting the form-->
										<div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit</button></div>
										<div class="pt-3 float-end">
											<a href="index.php?page=registration" style="text-decoration: none;">Create New Account</a>
										</div>
								</form>
						</div>
				</div>
		</div>
</section>

<?php
			$this->importFoot();
		}

		public function register(){
			$this->importHead();
?>
<section class="d-flex justify-content-between bg-dark p-5" ></section>
<section class="page-section" id="contact">
		<div class="container px-4 px-lg-5">
				<div class="row gx-4 gx-lg-5 justify-content-center">
						<div class="col-lg-8 col-xl-6 text-center">
								<h2 class="mt-0">Register Page</h2>
								<hr class="divider" />
						</div>
				</div>
				<div class="row gx-4 gx-lg-5 justify-content-center mb-5">
						<div class="col-lg-6">
								<!-- * * * * * * * * * * * * * * *-->
								<!-- * * SB Forms Contact Form * *-->
								<!-- * * * * * * * * * * * * * * *-->
								<!-- This form is pre-integrated with SB Forms.-->
								<!-- To make this form functional, sign up at-->
								<!-- https://startbootstrap.com/solution/contact-forms-->
								<!-- to get an API token!-->
								<form id="contactForm" action="index.php?page=profile" method="post" >
										<!-- Name input-->
										<div class="form-floating mb-3">
												<input class="form-control" id="name" name="fullname" type="text" placeholder="Enter your name..." data-sb-validations="required" />
												<label for="name">Full name</label>
												<div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
										</div>

										<!-- Select input-->
										<div class="row g-2 mb-3">
										  <div class="col-md">
										    <div class="form-floating">
										      <label>	Gender:	</label>
										    </div>
										  </div>
										  <div class="col-md">
										    <div class="form-floating">
													<select class="form-select" name="gender">
														<option value="Male">Male</option>
														<option value="Female">Female</option>
														<option value="Other">Other</option>
													</select>
										    </div>
										  </div>
										</div>

										<!-- Phone number input-->
										<div class="form-floating mb-3">
												<input class="form-control" id="name" name="phonenumber" type="text" placeholder="Enter your name..." data-sb-validations="required" />
												<label for="name">Phone Number:</label>
										</div>

										<!-- Address input-->
										<div class="form-floating mb-3">
												<input class="form-control" id="name" name="address" type="text" placeholder="Enter your name..." data-sb-validations="required" />
												<label for="name">Address</label>
										</div>


										<!-- Radio button input-->

										<div class="mb-3 p-3" style=" border-style: solid;  border-color: #f04e13;  border-width: thin; border-radius:10px;">
											<label class="mb-3">	Do you work as a software engineer?	</label>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="softwareEngineer" id="exampleRadios1" value="option1" checked>
											  <label class="form-check-label" for="exampleRadios1">
											    Yes
											  </label>
											</div>
												<div class="form-check">
												  <input class="form-check-input" type="radio" name="softwareEngineer" id="exampleRadios2" value="option2">
												  <label class="form-check-label" for="exampleRadios2">
												    No
												  </label>
												</div>
										</div>
										<!-- Select input-->
										<div class="mb-3">
											<label class="mb-3">	Choose your job title?	</label>
											<select class="form-select" name="jobTitle" aria-label="Default select example">
												<option value="Back End Web Developer">Back End Web Developer</option>
												<option value="Front End Web Developer">Front End Web Developer</option>
												<option value="Android Developer">Android Developer</option>
												<option value="IOS developer">IOS developer</option>
												<option value="Data Scientist">Data Scientist</option>
												<option value="AI engineer">AI engineer</option>
												<option value="Other">Other...</option>
											</select>
										</div>

										<!-- Select input-->
										<div class="mb-3">
											<label class="mb-3">	Which technologies do you know?	</label>
											<div class="form-check">
											  <input class="form-check-input" name="skills[]" type="checkbox" value="React/Vue/Angular JS" id="flexCheckChecked" checked>
											  <label class="form-check-label" for="flexCheckChecked">
											    React/Vue/Angular JS
											  </label>
											</div>
											<div class="form-check">
											  <input class="form-check-input" name="skills[]" type="checkbox" value="Spring/Spring Boot {Java}" id="flexCheckChecked">
											  <label class="form-check-label" for="flexCheckChecked">
											    Spring/Spring Boot {Java}
											  </label>
											</div>
											<div class="form-check">
											  <input class="form-check-input" name="skills[]" type="checkbox" value="Flask/Django {Python}" id="flexCheckChecked">
											  <label class="form-check-label" for="flexCheckChecked">
											    Flask/Django {Python}
											  </label>
											</div>
											<div class="form-check">
											  <input class="form-check-input" name="skills[]" type="checkbox" value="Unity/Unreal Engine {C#}" id="flexCheckChecked">
											  <label class="form-check-label" for="flexCheckChecked">
											    Unity/Unreal Engine {C#}
											  </label>
											</div>
											<div class="form-check">
											  <input class="form-check-input" name="skills[]" type="checkbox" value="Tensorflow/Keras {Machine Learning}" id="flexCheckChecked">
											  <label class="form-check-label" for="flexCheckChecked">
											    Tensorflow/Keras {Machine Learning}
											  </label>
											</div>
											<div class="form-check">
											  <input class="form-check-input" name="skills[]" type="checkbox" value="Kali linux/Ethical Hacking {Security}" id="flexCheckChecked">
											  <label class="form-check-label" for="flexCheckChecked">
											    Kali linux/Ethical Hacking {Security}
											  </label>
											</div>
										</div>


										<!-- Email address input-->
										<div class="form-floating mb-3">
												<input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
												<label for="email">Email address</label>
										</div>
										<!-- password input-->
										<div class="form-floating mb-3">
												<input class="form-control" id="password" name="password" type="password" placeholder="Enter your password..." data-sb-validations="required" />
												<label for="password">Password</label>
												<div class="invalid-feedback" data-sb-feedback="password:required">A name is required.</div>
										</div>

										<!-- Submit error message-->
										<!---->
										<!-- This is what your users will see when there is-->
										<!-- an error submitting the form-->
										<div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Create an Account</button></div>
								</form>
						</div>
				</div>
		</div>
</section>

<?php
			$this->importFoot();
		}

		public function profile($user){
			$this->importHead();
?>
<section class="d-flex justify-content-between bg-dark p-5" ></section>

<div class="container mt-3">
    <div class="main-body">
          <!-- /Breadcrumb -->
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <?php echo "<h4>".$user->getFullName()."</h4>" ?>
											<?php echo "<p class='text-secondary mb-1'>".$user->getJobTitle()."</p>" ?>
                      <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                    <span class="text-secondary">https://bootdey.com</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary">@bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $user->getFullName();?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $user->getEmail();?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $user->getGender();?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $user->getPhoneNumber();?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $user->getAddress();?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3">Technologies:</h6>
											<?php
											foreach ($user->getTecnologies() as $skill) {
												echo "<small>".$skill."</small>
				                      <div class='progress mb-3' style='height: 5px'>
				                        <div class='progress-bar bg-primary' role='progressbar' style='width: ".rand(10,100)."%' aria-valuenow=".rand(10,100). " aria-valuemin='0' aria-valuemax='100'></div>
				                      </div>";
											}
											?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>


<?php
		$this->importFoot();
	}
		public function importHead(){
			include "./View/Template/Head.html";
		}

		public function importFoot(){
			include "./View/Template/Footer.html";
		}
	}
?>
