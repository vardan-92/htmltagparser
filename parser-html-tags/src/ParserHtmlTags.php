<?php

declare(strict_types=1);

namespace Meloy\ParserHtmlTags;

use Meloy\ParserHtmlTags\Content\ContentInterface;

class ParserHtmlTags
{

    /**
     * @var ContentInterface
     */
    private $content;

    /**
     * @var array
     */
    private $data = [];

    /**
     * @param ContentInterface $content
     */
    public function __construct(ContentInterface $content
    ) {
        $this->content = $content;
    }

    /**
     * @return void
     */
    public function extract()
    {
        $array = $this->content->htmlTagsToArray();
        foreach ($array as $item) {
            $exp = explode(' ', $item);
            $this->data[] = $exp[0];
        }
    }

    /**
     * @return array
     */
    public function htmlTagsCount()
    {
        $this->extract();
        return array_count_values($this->data);
    }
}