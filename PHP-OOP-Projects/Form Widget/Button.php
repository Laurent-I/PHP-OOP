<?php

class Button extends HtmlElement
{
public string $text;

    /**
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }
    public function render(): string
    {
        // TODO: Implement render() method.
        return sprintf('<button>%s</button>', $this->text);
    }

}