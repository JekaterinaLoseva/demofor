<div style="margin:0px 50px 0px 50px">   

@if($abouts)
 
	<table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>№ п/п</th>
                <th>Имя</th>
                <th>Псевдоним</th>
                <th>Текст</th>
                <th>Дата создания</th>
                
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
        
        @foreach($abouts as $k => $about)
        
        	<tr>
        	
        		<td>{{ $about->id }}</td>
        		<td>{!! Html::link(route('aboutsEdit',['about'=>$about->id]),$about->name,['alt'=>$about->name]) !!}</td>
        		<td>{{ $about->alias }}</td>
        		<td>{{ $about->text }}</td>
        		<td>{{ $about->created_at }}</td>
        		
        		<td>
	        		{!! Form::open(['url'=>route('aboutsEdit',['about'=>$about->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}
	        			
	        			{{ method_field('delete') }}
	        			{!! Form::button('Удалить',['class'=>'btn btn-danger','type'=>'submit']) !!}
	        			
	        		{!! Form::close() !!}
        		</td>
        	</tr>
        
        @endforeach
        
		
        </tbody>
    </table>
@endif 

{!! Html::link(route('aboutsAdd'),'Новая страница') !!}
   
</div>