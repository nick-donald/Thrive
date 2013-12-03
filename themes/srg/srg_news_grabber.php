<?php
$emailStr = '<form id="submit" action="http://localhost/wordpress/wp-content/themes/srg/srg_news_receiver.php" method="get">';
$url = 'http://localhost/wordpress/wp-content/themes/srg/example.xml';
$file = simplexml_load_file($url);
if (isset($file)) {
	$items = $file->channel->item;
} else {
	echo "failed";
}

foreach ($items as $value) {
	preg_match('/(?:cluster=)(\S+)/', $value->guid, $matches);
	$emailStr .= '<input name="article" class="article-check" type="checkbox" data-link="' . $matches[1] . '"/><button class="expand-article">Expand</button>' . $value->description;
}

$emailStr .= '<input name="source" type="hidden" value="' . $url . '" /><input type="submit" value="Submit" /></form>';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'From: SRG Article Checker <no-reply@srginsight.com>';

echo $emailStr;

// try {
// 	mail('nickjdonald@gmail.com', 'SRG Article Test', $emailStr, $headers);
// 	echo "sent";
// } catch (Exception $e) {
// 	echo 'Caught Exception', $e->getMessage(), "\n";
// }
?>

<script>
window.onload = function() {
	var checkedArticles = document.getElementsByClassName('article-check'), response = {};
	var expand = document.getElementsByClassName('expand-article');
	// for (var i = 0; i < checkedArticles.length; i++) {
	// 	// arr[i] = push(checkedArticles[i]);
	// 	console.log(checkedArticles[i].attributes['data-link'].value);
	// }

	document.getElementById('submit').onsubmit = function(e) {
		e.preventDefault();

		response.articles = [];
		for (var i = 0; i < checkedArticles.length; i++) {
			if (checkedArticles[i].checked) {
				response.articles.push({link: checkedArticles[i].attributes['data-link'].value});
			}
		}
		console.log(response);
	}

	for (var i = 0; i < expand.length; i++) {
		expand[i].addEventListener("click", function() {
			expand[i].appendChild(document.createElement('iframe'));
		});
	}

	
	


	// checkedArticles.forEach(function(val, idx, arr) {
	// 	console.log(val);
	// });
}
</script>