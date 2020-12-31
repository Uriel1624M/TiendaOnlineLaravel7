@extends('admin.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1>
			<i class="fa fa-shopping-cart"></i>
			Marcas <small>[Editar Marca]</small>
			</h1>
		</div>

		<div class="row
		">
			<div class="col-md-6 offset-md-3">
				@if(count($errors)>0)
				@include('admin.partials.error')
				@endif
				<div class="page">
					{!! Form::model($marca,['route'=>['marcas.update',$marca->id],'method'=>'PUT'])!!}

						<div class="form-group">
								 {!! Form::label('marca', 'Nombre :', array('class' => 'subrayado')) !!} 
					
								{!! Form::text('marca', null, array(
												                    'class'=>'form-control',
												                    'required'=>'required',
												                    'placeholder'=>'Nombre Categoria.',
												                    'autofocus'=>'autofocus')) 
			                	!!}
						</div>
						<div class="form-group">
							{!! Form::label('descripcion', 'Descripcion :', array('class' => 'subrayado')) !!} 
					
								{!! Form::textarea('descripcion', null, array(
												                    'class'=>'form-control',
												                    'required'=>'required',
												                    'placeholder'=>'Nombre Categoria.',
												                    'autofocus'=>'autofocus')) 
			                	!!}
						</div>
						<div class="form-group">
							{!!Form::submit('Actualizar',array('class'=>' btn btn-primary'))!!}

							<a href="{{route('marcas.index')}}" class="btn btn-danger"> Cancelar</a>
						</div>
					{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
@stop
