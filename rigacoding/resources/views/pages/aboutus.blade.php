@extends('layout')

@section('content')
	<main>
		<div class="container">
			<div class="row">
				<div class="col-md-12 hidden-xs">
			      <ul class="breadcrumb">
			        <li><a href="/">Home</a></li>
			        <li class="gray">About us</li>
			      </ul> 
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 chat-title hidden-xs">
					<h3>About us</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 hidden-xs">
					<ul class="nav nav-tabs float-left tab-bg">
						<li class="active"><a data-toggle="tab" href="#menu1">Tab 1</a></li>
						<li><a data-toggle="tab" href="#menu2">Tab 2</a></li>
						<li><a data-toggle="tab" href="#menu3">Tab 3</a></li>
						<li><a data-toggle="tab" href="#menu4">Tab 4</a></li>
					</ul>
				</div>
				<div class="col-md-12 hidden-xs tab-bg">
					<div class="tab-content">
						<div id="menu1" class="tab-pane fade in active">
							<div class="col-md-2">
								<img src="images/1.jpg" width="100px" style="padding:10px;" alt="">
							</div>
							<div class="col-md-10">
								<h6>Tab 1</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga consequuntur cumque provident amet maiores labore quas, vero omnis magni adipisci tempore, ipsam quasi, illum tempora voluptate tenetur iusto. Accusamus, minima.</p>
							</div>
						</div>
						<div id="menu2" class="tab-pane fade">
							<h3>Tab 2</h3>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
						<div id="menu3" class="tab-pane fade">
							<div class="col-md-2">
								<img src="images/1.jpg" width="100px" style="padding:10px;" alt="">
							</div>
							<div class="col-md-10"">
								<h6>Tab 3</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga consequuntur cumque provident amet maiores labore quas, vero omnis magni adipisci tempore, ipsam quasi, illum tempora voluptate tenetur iusto. Accusamus, minima.</p>
							</div>
						</div>
						<div id="menu4" class="tab-pane fade">
							<h3>Tab 4</h3>
							<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<h3>Contacts</h3>
				</div>
				<div class="col-sm-12">	
					<div class="col-sm-6">
					<iframe width="100%" style="border:none;" height="100%" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ5W-zF8HP7kYRH6AxY6LRktM&key=AIzaSyBpHUzn693oqg8W8KhRfjC_7h2j93zSFlM">
					</iframe>
					</div>
					<div class="col-sm-6">
						<div class="col-xs-12"><h4>Adress:</h4></div>
						<div class="col-xs-12"><p>Pils laukums 3, Riga Lv-1050,Latvia</p></div>
						<div class="col-xs-12"><h4>E-mail:</h4></div>
						<div class="col-xs-12"><p>info@samplepage.lv</p></div>
						<div class="col-xs-12"><h4>Phone:</h4></div>
						<div class="col-xs-12"><p>+371 23423124</p></div>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection