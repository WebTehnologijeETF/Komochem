<?php 
	function zag()
	{
		header("{$_SERVER['SERVER_PROTOCOL']} 200 OK");
		header('Content-Type: text/html');
    	header('Access-Control-Allow-Origin: *');		
	}

	function rest_get ($request, $data)
	{	
		$veza = new PDO("mysql:dbname=wts;host=localhost", "wtadmin", "wtadmin");
		$veza->exec("set names utf-8"); 

		$upit = $veza->query("SELECT * FROM korisnik");

		print "{ \"korisnik\": ". json_encode($upit->fetchAll()) ."}";
	}

	function rest_post($request, $data)
	{
		echo "post";
	}

	function rest_put($request, $data)
	{
		echo "put";
	}

	function rest_delete($request, $data)
	{
		$korisnikID = $data['korisnikID'];
		$veza = new PDO("mysql:dbname=wts;host=localhost", "wtadmin", "wtadmin");
		$veza->exec("set names utf-8");
		print $korisnikID;
		/*$korisnik = $veza->prepare("delete from korisnik where id=?");
		$korisnik->bindValue(1, $korisnikID, PDO::PARAM_INT);
		$korisnik->execute();*/
	}

	function rest_error($request)
	{
		echo "error";
	}

	$method = $_SERVER['REQUEST_METHOD'];
	$request = $_SERVER['REQUEST_URI'];

	switch ($method) 
	{
		case 'PUT':
			parse_str(file_get_contents('php://input'), $put_vars);
        	zag(); $data = $put_vars; rest_put($request, $data); break;
			break;
		case 'POST':
			zag(); $data = $_POST; rest_post($request, $data); break;
		case 'GET':
			zag(); $data = $_GET; rest_get($request, $data); break;
		case 'DELETE':
			zag(); $data = $_REQUEST;rest_delete($request, $data); break;
		default:
			header("{$_SERVER['SERVER_PROTOCOL']} 404 Not Found");
        	rest_error($request); break;
	}
?>