@extends('layout')

@section('content')
	<main class="register-main-height">
		<div class="container">
			<div class="row">
				<div class="col-md-12 hidden-xs">
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="gray">Register</li>
					</ul> 
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 chat-title">
					<h3>Register</h3>
				</div>
				<div class="container reg-cont-width">
					<form id="reg-form" action="/register" method="post">
						@csrf
						<div class="errors" style="">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
							<ul>
								@if(Session::has('success'))
								<li>{{ Session::get('success') }}</li>
								@endif
							</ul>
						</div>
						<div class="form-group reg-form-margin">
							<input class="form-control" type="text" name="username" placeholder="Username">
						</div>
						<div class="form-group reg-form-margin">
							<input id="password" class="form-control" type="password" name="password" placeholder="Password">
						</div>
						<div class="form-group reg-form-margin" >
							<input class="form-control" type="password" name="password2" placeholder="Retype password">
						</div>
						<div class="form-group reg-form-margin" >
							<input class="form-control" type="text" name="firstname" placeholder="First name">
						</div>
						<div class="form-group reg-form-margin">
							<input class="form-control" type="text" name="lastname" placeholder="Last name">
						</div>
						<div class="form-group reg-form-margin" >
							<select class="form-control" name="country" id="">
								<option value="0">Country</option>
								<option value="Latvia">Latvia</option>
								<option value="Lietuva">Lietuva</option>
							</select>
						</div>
						<div class="form-group reg-form-margin">
							<input type="checkbox" name="checkbox" value="1">
							<label for="checkbox"><small>Agree with terms and conditions</small></label>
						</div>
						<div class="form-group">
							<input class="form-control reg-btn-width" type="submit" name="submit" value="Register">
						</div>
					</form>
				</div>
			</div>
		</div>
<!-- 		    <script>
        $('#reg-form').submit(function(){
            var errors = [];
            $('.errors ul').html('');
            $('.has-error').removeClass('has-error');
            if ($('input[name="username"]').val() == '') {
                errors.push('Please enter username');
                $('input[name="username"]').addClass('has-error');
            }
            if ($('input[name="password"]').val() == '') {
                errors.push('Please enter password');
                $('input[name="password"]').addClass('has-error');
            }
            if ($('input[name="password"]').val().length < 8) {
                errors.push('Password must be at least 8 symols');
                $('input[name="password"]').addClass('has-error');
            }
            if ($('input[name="retype_password"]').val() == '') {
                errors.push('Please retype the password');
                $('input[name="retype_password"]').addClass('has-error');
            }
            if ($('input[name="retype_password"]').val() != $('input[name="password"]').val()) {
                errors.push('Passwords must match');
                $('input[name="password"]').addClass('has-error');
                $('input[name="retype_password"]').addClass('has-error');
            }
            if ($('input[name="first_name"]').val() == '') {
                errors.push('Please enter first name');
                $('input[name="first_name"]').addClass('has-error');
            }
            if ($('select[name="country"]').val() == 0) {
                errors.push('Select country');
                $('select[name="country"]').addClass('has-error');
            }
            if ($('input[name="checkbox"]').is(":checked") == false) {
                errors.push('Agree with terms');
                $('input[name="checkbox"]').addClass('has-error');
            }
            if (errors.length > 0) {
                // handle errors
                for (var index = 0; index < errors.length; index++) {
                    var element = errors[index];
                    $('.errors ul').append('<li>' + element + '</li>');
                }
                $('.errors').show();
                return false;
            }
        });
    </script> -->
	</main>
@endsection