<?php
namespace Scardoso\Newsletter;

use Kirby\Cms\Page;

class Mail extends Page
{
    protected $recipients;
    
    public function __construct(Collection $recipients)
    {
        $this->recipients = $recipients;
    }

    public function send(bool $test = true): self
    {

    }

    public static function getFiles(): array
    {
        $files = [];

        foreach ($this->files() as $f) {
            $files[] = $f->root();
        }

        return $files;
    }
}