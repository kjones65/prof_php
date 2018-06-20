<?php declare(strict_types=1);

namespace SocialNews\Framework\Rendering;

interface TemplateRenderer
{
    /**
     * It takes the name of a template,
     * with some optional data that can be passed along, and then returns a string
     * with the rendered HTML.
     */
    public function render(string $template, array $data = []): string;
}