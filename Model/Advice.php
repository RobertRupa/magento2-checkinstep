<?php
 
namespace Konatsu\CheckInStep\Model;


class Advice
{

    /**
     * @var PageFactory
     */
    private $title;
    private $content;

 
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }
}