@extends('layout')

@section('content')

	<h1 class="title">Create A New Project</h1>

	<form method="POST" action="/projects">

		@csrf

		<div class="field">
			<label class="label" for="title">Project Title</label>

			<div class="control">

			<input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" value="{{ old('title')}}" required>

			</div>
		</div>

		<div class="field">

			<label class="label" for="description">Project Description</label>

		<div class="control">

			<textarea name="description" class="textarea {{ $errors->has('title') ? 'is-danger' : '' }}" required>
			{{ old('description') }}
			</textarea>

			</div>
		</div>

		<div>
			<button type="submit" class="button is-link">Create Project</button>
		</div>

		@include ('errors')

	
	</form>

@endsection