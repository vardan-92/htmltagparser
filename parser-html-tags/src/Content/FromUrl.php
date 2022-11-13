<?php

declare(strict_types=1);

namespace Meloy\ParserHtmlTags\Content;

use Meloy\ParserHtmlTags\Content\ContentInterfacerface;

class FromUrl implements ContentInterface
{
    const REG_EX_PATTERN = '~<([^/][^>]*?)>~';

    private string $url;
    private string $content;

    /**
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
        $this->convertToString();
    }

    /**
     * @return void
     */
    private function convertToString()
    {
        $this->content = file_get_contents($this->url);
    }

    /**
     * @return array
     */
    public function htmlTagsToArray(): array
    {
        preg_match_all(self::REG_EX_PATTERN, $this->content, $matches, PREG_PATTERN_ORDER);
        return $matches[1];
    }
}