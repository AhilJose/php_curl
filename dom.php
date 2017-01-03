<?php
include 'simple_html_dom.php';
/*$url = "http://projects.mgu.ac.in/bTech/btechresult/index.php?module=public&attrib=result&page=result";
$html = file_get_html ( $url );
echo "<pre>";
foreach ( $html->find ( 'a' ) as $element ) {
    $link = $element->href;
    $link = ltrim ( $link, "/" );

    if (!preg_match ( "/http/i", $link )) {
        $link = $url . $link;
    }
    echo $link . PHP_EOL;
    flush ();
}

// Create DOM from URL or file
$html = file_get_html('http://election.manoramaonline.com/ml/assembly-elections-west-bengal-assam-puducherry-tamil-nadu.html');

// Find all images 
foreach($html->find('img') as $element) 
       echo $element->src . '<br>';

// Find all links 
foreach($html->find('a') as $element) 
       echo $element->href . '<br>';

/*   // Create DOM from string
$html = str_get_html('<div id="hello">Hello</div><div id="world">World</div>');

$html->find('div', 1)->class = 'bar';

$html->find('div[id=hello]', 0)->innertext = 'foo';

echo $html; // Output: <div id="hello">foo</div><div id="world" class="bar">World</div>*/

// Dump contents (without tags) from HTML
//echo file_get_html('http://election.manoramaonline.com/ml/assembly-elections-west-bengal-assam-puducherry-tamil-nadu.html')->plaintext; 
/*// Create DOM from URL
$html = file_get_html('http://slashdot.org/');

// Find all article blocks
foreach($html->find('div.article') as $article) {
    $item['title']     = $article->find('div.title', 0)->plaintext;
    $item['intro']    = $article->find('div.intro', 0)->plaintext;
    $item['details'] = $article->find('div.details', 0)->plaintext;
    $articles[] = $item;
}

print_r($articles);*/

/*$doc = new DOMDocument;

// We don't want to bother with white spaces
$doc->preserveWhiteSpace = false;

// Most HTML Developers are chimps and produce invalid markup...
$doc->strictErrorChecking = false;
$doc->recover = true;

$doc->loadHTMLFile('http://www.flipkart.com/leeco-le-2-rose-gold-32-gb/p/itmejeucxaxmnk8k?pid=MOBEJEUCS2Z4N2E2&al=qMM3s42tp7Dmyskl5zWgfsldugMWZuE7Qdj0IGOOVqtY2PLXjfZX%2Fh7EezJzXZs4laqtCWZ1USc%3D&ref=L%3A5888342305875053027&srno=p_1&findingMethod=Search&otracker=start&ss=532c28d5412dd75bf975fb951c740a30');

$xpath = new DOMXPath($doc);

$query = "//span[@class='title']";

$entries = $xpath->query($query);
var_dump($entries->item(0)->textContent);*/

function getHTML($url,$timeout)
{
       $ch = curl_init($url); // initialize curl with given url
       curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]); // set  useragent
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // write the response to a variable
       curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // follow redirects if any
       curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout); // max. seconds to execute
       curl_setopt($ch, CURLOPT_FAILONERROR, 1); // stop when it encounters an error
       return @curl_exec($ch);
}
$html=getHTML("http://www.akhiljose.me",10);
// Find all images on webpage
echo "<pre>";
// Find all links on webpage
foreach($html->find('a') as $element)
echo $element->href . '<br>';

?>