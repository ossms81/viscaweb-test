<?php

require __DIR__ . '/vendor/autoload.php';

use Sunra\PhpSimple\HtmlDomParser;

$dom = HtmlDomParser::file_get_html('https://www.sportsinteraction.com/specials/us-elections-betting/');
$i = 0;
$result = array();

foreach($dom->find('ul.GamesMenu > li') as $bet) {

    $result[$i]['BetName'] = $bet->find('span.Game__header__name')->plaintext;

    $j = 0;

    foreach($bet->find('div.BetcardBetButton.StandardRunners__bet-button') as $odd) {
        
        $result[$i]['BetOptions'][$j]['Outcome'] = $odd->find('span.BetButton__runnerName')->plaintext;
        $result[$i]['BetOptions'][$j]['Odds'] = $odd->find('span.Odd.BetButton__price')->plaintext;

        $j++;

    }
        
    $i++;

}

echo json_encode($result);