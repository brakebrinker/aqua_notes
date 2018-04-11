<?php
/**
 * Created by PhpStorm.
 * User: m.pevnev
 * Date: 11.4.18
 * Time: 18.52
 */

namespace AppBundle\Service;


use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;

class MarkdownTransformer
{
    private $markdownParser;

    public function __construct(MarkdownParserInterface $markdownParser)
    {
        $this->markdownParser = $markdownParser;
    }

    public function parse($str) {
        return $this->markdownParser
            ->transformMarkdown($str);
    }
}