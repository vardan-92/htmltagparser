<?php

require __DIR__ . '/parser-html-tags/vendor/autoload.php';

use Meloy\ParserHtmlTags\ParserHtmlTags;
use Meloy\ParserHtmlTags\Content\FromUrl;

$url = 'https://candodream.com';

$content = new FromUrl($url);
$model = new ParserHtmlTags($content);

echo "<pre>";
print_r($model->htmlTagsCount());