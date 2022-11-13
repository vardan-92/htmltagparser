<?php

declare(strict_types=1);

namespace Meloy\ParserHtmlTags\Content;

interface ContentInterface
{
    public function htmlTagsToArray(): array;
}