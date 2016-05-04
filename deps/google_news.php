<?php
function getNews ($query, $start) {
	$website = "https://ajax.googleapis.com/ajax/services/search/news?&num=20&v=1.0&q=" . $query . "&start=" . $start;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $website);
	curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	$output = curl_exec($ch);
	curl_close($ch);

	return $output;
}

$query = @$_POST["query"];
$start = @$_POST["start"];

echo getNews($query, $start);
?>
