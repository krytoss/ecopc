@extends('layouts.master')

@section('content')
	<section id="contact">
	    <div class="container row">

	    	<div class="col col-md-6">
	    		asdlkj
	    	</div>

	    	<div class="col col-md-6">

	    		<div class="well well bs-component">
		 
		            <form class="form-horizontal" method="post">
						<!-- Below for each loop display validation error messages -->
		                @foreach ($errors->all() as $error)
		                    <p class="alert alert-danger">{{ $error }}</p>
		                @endforeach
		 				<!-- Below if condition display sending email success message -->               
		                @if (session('status'))
						    <div class="alert alert-success">
						        {{ session('status') }}
						    </div>
						@endif
		 
		                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
		 
		                <fieldset>
		                    <legend>Kontaktný formulár</legend>
		                     	<div class="form-group">
								  <label for="usr">Meno:</label>
								  <input type="text" class="form-control" id="name" name="name">
								</div>
								<div class="form-group">
								  <label for="email">E-mail:</label>
								  <input type="text" class="form-control" id="email" name="email">
								</div> 
								<div class="form-group">
		                        <label for="message">Správa</label>
		                        <textarea class="form-control" rows="3" id="message" name="message"></textarea>
		                        
		                    </div>
		 
		                    <div class="form-group">
		                        <button type="submit" class="btn btn-success">Odoslať</button>
		                    </div>
		                </fieldset>
		            </form>
		        </div>
	    		
	    	</div>

	    </div>
    </section>
@endsection