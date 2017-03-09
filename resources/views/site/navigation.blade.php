@if(isset($menu))

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand" href="#page-top">Demofor</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	
		 
		 	 	 <div id="country-select">
  <form action="server-side-script.php">
    <select id="country-options" name="country-options">
      <option selected="selected" title="http://www.demofor/com" value="en">English</option>
      <option title="http://www.demofor/ru" value="ru">Русский</option>
      <option title="http://www.demofor/lv" value="lv">Latviešu</option>
    </select>
    <input value="Select" type="submit" />
  </form>
</div>
		
		
			<ul class="nav navbar-nav navbar-right">
			
				<li class="hidden">
					<a href="#page-top"></a>
				</li>
			@foreach($menu as $item)	
				<li class="page-scroll">
					<a href="#{{ $item['alias'] }}">{{ $item['title'] }}</a>
				</li>
			@endforeach	
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>

@endif





