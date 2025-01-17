<?php

namespace HtmlToProseMirror\Nodes;

class OrderedList extends Node
{
    public function matching()
    {
        return $this->DOMNode->nodeName === 'ol';
    }

    public function data()
    {
        return [
            'type' => 'orderedList',
            'attrs' => [
                'order' =>
                    $this->DOMNode->getAttribute('start') ?
                    (int) $this->DOMNode->getAttribute('start') :
                    1,
            ],
        ];
    }
}
