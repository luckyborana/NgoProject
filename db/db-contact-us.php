<?php
require_once "db.php";

$status = contactus($_POST);


if($status === 'success'){
	echo json_encode([
		'success'=>'success',
		'message'=>'<p class="alert alert-success">Thanks for the message! We will get back to you as soon as we can</p>',
	]);
	
}
elseif($status === 'error'){
		echo json_encode([
			'error'=>'error',
			'message'=>'<p class="alert alert-danger"> Failed to send message</p>',	
		
		]);

}
elseif($status === 'missing_fields'){
	echo json_encode([
		'error'=>'error',
		'message'=>'<p class="alert alert-danger">You missing some important fields</p>',
		
	]);
}

