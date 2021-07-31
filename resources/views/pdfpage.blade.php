<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<title>Page Title</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<a href="{{route('pdfDownload')}}" class="btn btn-primary">Download pdf</a>			
				</div>
				<div class="card-body">
					<table class="table table-bordered">
				    <thead>
				      <tr>
				        <th>Firstname</th>
				        <th>Lastname</th>
				        <th>Email</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>John</td>
				        <td>Doe</td>
				        <td>john@example.com</td>
				      </tr>
				      <tr>
				        <td>Mary</td>
				        <td>Moe</td>
				        <td>mary@example.com</td>
				      </tr>
				      <tr>
				        <td>July</td>
				        <td>Dooley</td>
				        <td>july@example.com</td>
				      </tr>
				    </tbody>
				  </table>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>