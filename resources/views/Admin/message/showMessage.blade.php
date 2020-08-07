@extends('Admin/layout')


@section('content')
<section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
				<div class="col-lg-9 col-xl-10 maxw100flex-992">
					<div class="row">
						<div class="col-lg-12 mb10 text-center">
							<div class="breadcrumb_content style2">
								<h2 class="breadcrumb_title">Message</h2>
								<p>We are glad to see you again!</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="offset-2 col-lg-8 col-xl-8">
                        <div class="message_container">
        <div class="user_heading">
            <a href="#">
                <div class="wrap">
                   <div class="meta">
                        <h5 class="name">{{$message->title}}</h5>
                        <p class="preview">has been sending at : <Span class="text-danger">{{$message->created_at}}</span></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="inbox_chatting_box">
            <ul class="chatting_content">
                <li class="media sent">
                    <div class="media-body">
                        <div class="date_time">{{$message->name}}</div>
                        <p>{{$message->message}}</p>
                        <div class="date_time text-danger">Email : {{$message->email}}</div>
                        <div class="date_time">phone : {{$message->phone}}</div>
                    </div>
                </li>
            </ul>			
        </div>
       
    </section>

@endsection