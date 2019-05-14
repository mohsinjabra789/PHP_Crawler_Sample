<?php 
	$data  = crawler::http_request('https://localbitcoins.com/accounts/profile/Jawad92/');
	$links = crawler::extract_elements('a', $data);
	if ( count($links) > 0 ) {
   		file_put_contents('links.json', json_encode($links, JSON_PRETTY_PRINT));
	}
 ?>