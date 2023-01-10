<?php
//get the q parameter from URL
$q = $_GET["q"];

//find out which feed was selected
if ($q == "ln") {
    $xml = ("https://rss.cbc.ca/lineup/canada-montreal.xml");
} elseif ($q == "mtt") {
    $xml = ("https://www.themoscowtimes.com/ru/rss/news");
} elseif ($q == "rt") {
    $xml = ("https://www.rt.com/rss/russia/");
}

$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

//get elements from "<channel>"
$channel = $xmlDoc->getElementsByTagName('channel')->item(0);
$channel_title = $channel->getElementsByTagName('title')
    ->item(0)->childNodes->item(0)->nodeValue;
$channel_link = $channel->getElementsByTagName('link')
    ->item(0)->childNodes->item(0)->nodeValue;
$channel_desc = $channel->getElementsByTagName('description')
    ->item(0)->childNodes->item(0)->nodeValue;

////output elements from like title of news network, not using since is in the dropdown "<channel>"
//echo('<p><a href="' . $channel_link . '" target="_blank">' . $channel_title . '</a>');
//echo("<br>");
//echo($channel_desc . "</p>");

//get and output "<item>" elements
$x = $xmlDoc->getElementsByTagName('item');
for ($i = 0; $i <= 2; $i++) {
    $item_title = $x->item($i)->getElementsByTagName('title')
        ->item(0)->childNodes->item(0)->nodeValue;
    $item_link = $x->item($i)->getElementsByTagName('link')
        ->item(0)->childNodes->item(0)->nodeValue;
    $item_desc = $x->item($i)->getElementsByTagName('description')
        ->item(0)->childNodes->item(0)->nodeValue;
    echo('<p><a href="' . $item_link
        . '" target="_blank">' . $item_title . '</a>');
    echo("<br>");
    echo($item_desc . "</p>");
}
?>
