@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Workflow</div>
            <div class="panel-body">
                <div class="row">
                	<div class="col-md-6">
            			<approvalflow-form></approvalflow-form>
                		<!-- <form action="{{ URL::to('workflows') }}" method="post">
                			{{ csrf_field() }}
					   		<modules-list></modules-list>
					   		<actions-list></actions-list>
            				<div class="form-group">
						   		<label for="name">Name of the approval</label>
							    <input type="text" class="form-control" id="name" placeholder="Enter the name of the approval"  aria-describedby="nameOfApproval">
							    <span id="nameOfApproval" class="help-block">This will help you to remember when you come next time</span>
						  	</div>
            				<div class="form-group">
						   		<label for="name">Description</label>
						   		<textarea class="form-control" placeholder="Enter the description"></textarea>
						  	</div>
						  	<div class="checkbox">
							    <label>
							      <input type="checkbox"> Check me out
							    </label>
						  	</div>
						  	<button type="submit" class="btn btn-success">Submit</button>
                		</form>
 -->                	</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
	
</script>