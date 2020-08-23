@extends('Front.User.layout.app')<!--Page title-->
@section('title')
Profile
@endsection
@section('header') 
<style >
	.Profile-class{
		padding: 10px;
	}
	.Profile-class li {
		padding: 10px ;
		border-bottom: 1px dashed #ddd;
		font-size: 18px;
	}
</style>
<div class="col-12 px-0 py-5 ">
	<div style="max-width: 100%;width: 600px;" class="m-auto" >
		<form method="POST" action="/profile/update" enctype='multipart/form-data'>
			@csrf
		<div class="col-12 px-0 text-center mt-5">
			<div class="d-inline-block text-center">
				<img src="{{auth()->user()->getUserAvatar()}}" style="width: 60px;height: 60px;border-radius: 50%;display: inline-block;"> 
			</div>
		</div>
		<ul class="Profile-class">
			<li>Name: 
				<div class="col-12 px-0 mt-2">
					<input type="" name="UserName" value="{{auth()->user()->UserName}}" class="form-control">
				</div>
				
			</li>
			<li>Email:
				<div class="col-12 px-0 mt-2">
					<input type="email" name="email" value="{{auth()->user()->email}}" class="form-control">
				</div>
			</li>
			<li> Avatar : 

				<div class="col-12 px-0 mt-2">
					<input type="file" name="avatar" value="" class="form-control">
				</div>
				
			</li>
			<li>is Agent:
				<div class="col-12 px-0 mt-2">
					<input type="hidden" value="0" name="is_Agent" value="0" class="form-control" checked="">
					<input type="checkbox" value="1" name="is_Agent" value="1"  {{auth()->user()->is_Agent==1?'checked':''}} style="width: 20px;height: 20px;">
				</div>
			</li>
			<li>postion :
				<div class="col-12 px-0 mt-2">
					<input type="" name="postion" value="{{auth()->user()->postion}}" class="form-control">
				</div>
			</li>
			<li>phone : 
				<div class="col-12 px-0 mt-2">
					<input type="" name="phone" value="{{auth()->user()->phone}}" class="form-control">
				</div>
			</li>  
		</ul>
		<div class="col-12">
			<button class="btn btn-primary py-1 px-5">Update My Data</button>
		</div>
		
		</form>
	</div>
</div>
 
@endsection