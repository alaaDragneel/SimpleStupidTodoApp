@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	        	<h1 class="text-black-50 text-center" style="font-size: 50px;">Todos</h1>
	        	<div class="card">
					<div class="card-header">Add New Todo</div>
					<div class="card-body">
						<form action="{{ route('todos.store') }}" method="post">
							@csrf
							<div class="form-group">
								<input type="text" class="form-control" name="todo" placeholder="Write Your Todo" />
							</div>
							<div class="form-group" style="margin-bottom: 0;">
								<button class="btn btn-success">Create Todo</button>
							</div>
						</form>
					</div>
				</div>
				<br/>
	            @include('todos._list', ['todos' => $todos])
	        </div>
	    </div>
	</div>
@endsection

