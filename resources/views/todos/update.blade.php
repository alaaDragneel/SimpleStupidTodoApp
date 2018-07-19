@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	        	<h1 class="text-black-50 text-center" style="font-size: 50px;">Update Todo Todos</h1>
	        	<div class="card">
					<div class="card-header">Update Todo: {{ $todo->todo }}</div>
					<div class="card-body">
						<form action="{{ route('todos.update', $todo) }}" method="post">
							@csrf
							@method('PATCH')
							<div class="form-group">
								<input type="text" class="form-control" name="todo" value="{{ $todo->todo }}" placeholder="Write Your Todo" />
							</div>
							<div class="form-group" style="margin-bottom: 0;">
								<button class="btn btn-primary">Update Todo</button>
							</div>
						</form>
					</div>
				</div>
	        </div>
	    </div>
	</div>
@endsection

