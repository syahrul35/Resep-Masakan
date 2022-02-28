<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/my-login.css') }}">

    <title>My Recipes - Add Recipe</title>
</head>
<body class="my-login-page">
    <section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper add">
					<div class="brand">
						{{-- <img src="img/logo.jpg" alt="logo"> --}}
						<h1>My Recipes</h1>
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Add Recipe</h4>
							<form method="POST" class="my-login-validation" novalidate="" enctype="multipart/form-data"
							action="recipe" method="POST">
							@csrf 
								<div class="form-group">
									<label for="title">Title</label>
									<input id="title" type="text" class="form-control" name="title" value="" required autofocus>
								</div>

								<div class="form-group">
									<label for="describe">Description</label>
									<textarea class="form-control" name="describe" id="describe" cols="30" rows="5"></textarea>
								</div>

								<div class="form-group">
									<label for="describe">Tools and Materials</label>
									<textarea class="form-control" name="tools" id="tools" cols="30" rows="8"></textarea>
								</div>

                                <div class="form-group">
									<label for="describe">Cooking Steps</label>
									<textarea class="form-control" name="step" id="step" cols="30" rows="8"></textarea>
								</div>
                                
                                <div class="form-group">
									<label for="image">Upload Image</label>
									<input id="image" type="file" class="form-control" name="image" value="" required autofocus
                                    style="padding:0.2em;">
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										<a href="main">Upload Recipe</a>
									</button>
								</div>

                                <div class="form-group m-0">
									<button type="submit" class="btn btn-danger btn-block" style="margin-top:1em">
										<a href="main">Cancel</a>
									</button>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2022 &mdash; My Recipes
					</div>
				</div>
			</div>
		</div>
	</section>
    
</body>
</html>