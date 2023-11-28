@extends('layout')
@section('content')
<!DOCTYPE html>
<head>
    <title>Your Page Title</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mobile money payment</title>

	<body>
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Lorem ipsum</p>
						<h1>Kindly proceed with mobile payment</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	
						         

						<div class= "container">
							<div class= "row">
								<div class= "col-sm-8 mx-auto">
									<div class="card">
										<div class= "card-header">
											Obtain Access Token
										</div>
										<div class= "card-body">
										<h4 id="access_token"></h4>
											<button id="getAccessToken" class="btn btn-primary">Request Access Token</button>
											
										</div>
									</div>

									<div class="card">
										<div class= "card-header">Register URLs</div>
										<div class= "card-body">
										<button class="btn btn-primary">Register URLs</button>

										</div>
									</div>

									<div class="card">
										<div class= "card-header">Simulate Transaction</div>
										<div class= "card-body">
											<form action= "">
												@csrf
												 <div class= "form-group">
													<label for="amount">Amount</label>
													<input type="number" name="amount" class="form-control" id="amount">
												  </div>
												  <div class= "form-group">
													<label for="account">Account</label>
													<input type="text" name="account" class="form-control" id="account">
												  </div>
                                                  <button class="btn btn-primary">Simulate Payment</button>
										      </form>
											</div>
									   </div>

									
									</div>
							</div>

					</div>
					<script src="{{ asset ('js/app.js') }}"></script>
					<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
	document.getElementById('getAccessToken').addEventListener('click', (event) =>{
		event.preventDefault()

		axios.post('/get-token', {})
		.then((response ) => {
			console.log(response.data);
			document.getElementById('access_token').innerHTML = response.data.access_token
		})
		.catch((error) =>{
			console.log(error);
		})
	})
</script>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

