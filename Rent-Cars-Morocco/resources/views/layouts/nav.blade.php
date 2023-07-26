
<html>
<head>
	<title>Bootstrap Sidebar Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
		/* Set height of the page */
		html, body {
			height: 100%;
			font-family: Arial, sans-serif;
			font-size: 14px;
		}

		/* Style sidebar */
		.sidebar {
			height: 100%;
			width: 200px;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			background-color: #f8f9fa;
			overflow-x: hidden;
			padding-top: 20px;
			border-right: 1px solid #dee2e6;
		}

		.sidebar h2 {
			font-size: 20px;
			font-weight: bold;
			margin-bottom: 30px;
			text-align: center;
			color: #007bff;
		}

		.list-group-item {
			background-color: transparent;
			border: none;
			border-radius: 0;
			font-weight: bold;
			color: #343a40;
			transition: background-color 0.2s ease-in-out;
		}

		.list-group-item:hover {
			background-color: #dee2e6;
			color: #007bff;
		}

		.dropdown-menu {
			background-color: #f8f9fa;
			border: none;
			box-shadow: none;
		}

		.dropdown-item {
			color: #343a40;
			font-weight: bold;
			transition: background-color 0.2s ease-in-out;
		}

		.dropdown-item:hover {
			background-color: #dee2e6;
			color: #007bff;
		}

	</style>
	<script>
		$(document).ready(function(){
			$(".dropdown-toggle").dropdown();
		});
	</script>
</head>
<body>

	<!-- Sidebar -->
<div class="sidebar">
    <h2>Cars</h2>
    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action">Manage Cars</a>
      <a href="#" class="list-group-item list-group-item-action">Interview</a>
      <a href="#" class="list-group-item list-group-item-action">Rent</a>
      <a href="#" class="list-group-item list-group-item-action">Taxes</a>
      <div class="dropdown">
        <a href="#" class="list-group-item list-group-item-action dropdown-toggle" data-toggle="dropdown">Other</a>
        <div class="dropdown-menu">
          <a href="#" class="dropdown-item">Note</a>
        </div>
      </div>
    </div>
    <div class="list-group mt-auto">
      <div class="dropdown">
        <a href="#" class="list-group-item list-group-item-action dropdown-toggle" data-toggle="dropdown">User</a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="#" class="dropdown-item">Settings</a>
          <a href="#" class="dropdown-item">Logout</a>
        </div>
      </div>
    </div>
  </div>

</body>
</html>


