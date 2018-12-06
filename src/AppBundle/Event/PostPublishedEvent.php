<?php

namespace AppBundle\Event;

use AppBundle\Entity\Post;
use Symfony\Component\EventDispatcher\Event as EventDispatcher;

class PostPublishedEvent extends EventDispatcher{

    const NAME = "post.published";

    /**
     * @var Post  $_post
     */
    private $_post;

    public function __construct(Post $post)
    {
        $this->_post = $post;
    }

    public function getPost(){
        return $this->_post;
    }

    public function getTag(){
        return $this->_post->getTag();
    }

}