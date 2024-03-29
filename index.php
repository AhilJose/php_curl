<!DOCTYPE html> 
<html>
<head>
	<title>Get Content of HMTL Page Using PHP CURL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="using php curl to get data, php curl get contents of page, Get html source code with cURL, Get HTML Code of HTML File using PHP CURL, Get content of page using PHP cURL, How to get a web page using CURL, how to extract data from a website using php, php curl https get example, php script to extract data from website">
	<meta name="keywords" content="using php curl to get data, php curl get contents of page, Get html source code with cURL, Get HTML Code of HTML File using PHP CURL, Get content of page using PHP cURL, How to get a web page using CURL, how to extract data from a website using php, php curl https get example, php script to extract data from website">
	
	
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css" >
</head>
<body>
	<div class="container">
		<h1 class="text-center page-title" >Get Content of HMTL Page Using PHP CURL</h1>
		<div class="row url-getter">
			<div class="col-md-offset-2 col-md-8">
				<form role="form" id="siteform" method="post">
					<div class="form-group">
						<input type="url" class="form-control" name="site_url" id="site_url" placeholder="Enter your site address">
						<span class="help-block"></span>
					</div>
					<button data-loading-text="Please wait..." type="submit" id="url_getter" class="btn btn-default btn-success">Submit</button>
				</form>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center page-title" >New Site</h1>
				<iframe style="border: 0 none !important;height: 1000px;width: 100%;" id="site"></iframe>		
			</div>
		</div>
		
	</div>
	
	

	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>