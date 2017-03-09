@if(isset($portfolios) && is_object($portfolios))
<section id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Portfolio</h2>
				<hr class="star-primary">
			</div>
		</div>
		<div class="row">
		@foreach($portfolios as $item)
			<div class="col-sm-4 portfolio-item">
				<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
					<div class="caption">
						<div class="caption-content">
							<i class="fa fa-search-plus fa-3x"></i>
						</div>
					</div>
					{!! Html::image('assets/img/'.$item->images, $item->name, 
					array('class'=>'img-responsive img-thumbnail')) !!}
				</a>
			</div>
		@endforeach
			
			
		</div>
	</div>
</section>

@endif

<!-- About Section -->
@if(isset($abouts) && is_object($abouts))

@foreach($abouts as $k=>$about)

<section id="about" class="success">
	<div class="container">
		<div class="row">
	
			<div class="col-lg-12 text-center">
				<h2>About</h2>
				<hr class="star-light">
			</div>		
		</div>
		@foreach($abouts as $item)
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
			{!! $about->text !!}
			</div>
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<a href="#" class="btn btn-lg btn-outline">
					<i class="fa fa-download"></i> Read more
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endforeach

@endif

<!-- Contact Section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Contact Me</h2>
				<hr class="star-primary">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
				<!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
				
			
				<form action="{{ route('home') }}"  method="post">
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Name</label>
							<input type="text" class="form-control" placeholder="Name" name='name'
							id="name" required data-validation-required-message="Please enter your name.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Email Address</label>
							<input type="email" class="form-control" placeholder="Email Address" name='email'
							id="email" required data-validation-required-message="Please enter your email address.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Phone Number</label>
							<input type="tel" class="form-control" placeholder="Phone Number" name='phone'
							id="phone" required data-validation-required-message="Please enter your phone number.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Message</label>
							<textarea rows="5" class="form-control" placeholder="Message" name='text'
							id="message" required data-validation-required-message="Please enter a message."></textarea>
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<br>
					<div id="alert alert-success"></div>
					<div class="row">
						<div class="form-group col-xs-12">
							<button type="submit" class="btn btn-success btn-lg">Send</button>
						</div>
					</div>
					
		
					{{ csrf_field() }}
					
				</form>
			
				
		<!--		<div class="form">
          
          <form action="{{ route('home')}}" method="post">
            <input class="input-text" type="text" name="name" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <input class="input-text" type="text" name="email" value="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <textarea name="text" class="input-text text-area" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
            <input class="input-btn" type="submit" value="send message">
            
            
            {{ csrf_field() }}
          
          </form> -->
          
				
				
			</div>
		</div>
	</div>
</section>

<!-- Footer -->
<footer class="text-center">
	<div class="footer-above">
		<div class="container">
			<div class="row">
				<div class="footer-col col-md-4">
					<h3>Location</h3>
					<p>Latvia</p>
				</div>
				<div class="footer-col col-md-4">
					<h3>Around the Web</h3>
					<ul class="list-inline">
						<li>
							<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
						</li>
						<li>
							<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
						</li>
						<li>
							<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
						</li>
						<li>
							<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
						</li>
						<li>
							<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
						</li>
					</ul>
				</div>
				<div class="footer-col col-md-4">
					<h6>About Freelancer</h6>
					<h6>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</h6
					>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-below">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					Copyright &copy; Demofor 207
				</div>
			</div>
		</div>
	</div>
</footer>