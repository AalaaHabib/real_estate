@extends('Front.User.layout.app')<!--Page title-->
@section('title')
Security
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
		<form method="POST" action="/profile/update-password" enctype='multipart/form-data'>
			@csrf
		<div class="col-12 px-0 text-center mt-5">
			<div class="d-inline-block text-center">
				<img src="{{auth()->user()->getUserAvatar()}}" style="width: 60px;height: 60px;border-radius: 50%;display: inline-block;"> 
			</div>
		</div>
		<ul class="Profile-class">
			<li>Old Password: 
				<div class="col-12 px-0 mt-2">
					<input type="password" name="old_password" value="" class="form-control">
				</div>
				
			</li>
			<li>New Password:
				<div class="col-12 px-0 mt-2">
					<input type="password" name="password" value="" class="form-control">
				</div>
			</li>
			<li> Confirm Password : 

				<div class="col-12 px-0 mt-2">
					<input type="password" name="password_confirmation" value="" class="form-control">
				</div>
				
			</li> 
		</ul>
		<div class="col-12">
			<button class="btn btn-primary py-1 px-5">Update My Password</button>
		</div>
		
		</form>
	</div>
</div>
 
@endsection