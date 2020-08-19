<div style="position: fixed;
    z-index: 45454;
    width: 50%;
    left: 10px;
    top: 8px;cursor: pointer;"> 
	@if($errors->any())
	<ul class="list-unstyled alert alert-danger hide-me-on-click">

	@foreach($errors->all() as $error)

	<li>{{$error}}</li>
	@endforeach
	</ul>
	@endif
</div>