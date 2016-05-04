<?php
function getTicker ($ticker) {
	$website = "http://finance.yahoo.com/q?s=" . $ticker;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $website);
	curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	$output = curl_exec($ch);
	curl_close($ch);

	return $output;

  /* returns a string of the cURL retrieved contents. */
}

$tickerInput = $_GET["ticker"];

$tickers = explode(",", $tickerInput);
/* set the ticker from $_POST. */


$tickers = ["AAPL"];

$priceInfo = array();
$DOM = array();

for ($x = 0; $x < count($tickers); $x++) {
  $html = getTicker($tickers[$x]);

  $DOM[$x] = new DOMDocument();

  print_r($DOM[$x]->getElementsByTagName("span"));


  $DOM[$x]->loadHTML(getTicker($tickers[$x]));

  array_push($priceInfo, array(
    "price" => $DOM[$x]->getElementById("yfs_l84_" . $tickers[$x])->nodeValue,
    "percentChange" => $DOM[$x]->getElementById("yfs_p43_" . $tickers[$x])->nodeValue
  ));
}

echo json_encode($priceInfo);

/* This is the PHP script work in progress for getting the information directly
   from Yahoo!

   The current issue however is that the HTML appears to be invalid enough that
   PHP won't correctly parse it. I may have to just use regular expressions to
   read the HTML like the good ole days... */


?>
