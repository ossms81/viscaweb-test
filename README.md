A problem occurred with `HtmlDomParser::file_get_html()`. I have had to replace `$offset = -1` by `$offset = 0` in `vendor\sunra\php-simple-html-dom-parser\Src\Sunra\PhpSimple\simplehtmldom_1_5\simple_html_dom.php  (line 76)`

I have developed the code without being able to test because the function returned an error. You can see like this:
```
$dom = HtmlDomParser::file_get_html('https://www.sportsinteraction.com/specials/us-elections-betting/')->plaintext;
echo $ dom;
exit;
```