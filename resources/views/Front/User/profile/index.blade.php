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
		<div class="col-12 px-0 text-center mt-5">
			<div class="d-inline-block text-center">
				<img src="{{auth()->user()->getUserAvatar()}}" style="width: 60px;height: 60px;border-radius: 50%;display: inline-block;"> 
			</div>
		</div>
		<ul class="Profile-class">
			<li>Name: {{auth()->user()->UserName}} </li>
			<li>Email: {{auth()->user()->UserName}} </li>
			<li>is Agent: {{auth()->user()->is_Agent}} </li>
			<li>postion : {{auth()->user()->postion}} </li>
			<li>phone : {{auth()->user()->phone}} </li>  
		</ul>
	</div>
</div>
 
@endsection