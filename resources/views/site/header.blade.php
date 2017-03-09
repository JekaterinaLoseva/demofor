@if(isset($pages) && is_object($pages))

@foreach($pages as $k=>$page)

<section id="{{ $page->alias }}">

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				{!! Html::image('assets/img/'.$page->images,'',
				array('class'=>'img-responsive img-circle')) !!}
				<div class="intro-text">
					{!! $page->title !!}
					<hr class="star-light">
					{!! $page->text !!}
				</div>
			</div>
		</div>
	</div>
</section>

@endforeach

@endif


@if(session('status'))

<div class="alert alert-success">
	{{ session('status') }}
</div>

@endif


@if(count($errors) > 0)

<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
			
	</ul>
</div>

@endif