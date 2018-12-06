<?php

namespace AppBundle\Event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class PostPublishedSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return [
            PostPublishedEvent::NAME => 'onPostPublished'
        ];
    }


    public function onPostPublished(PostPublishedEvent $event)
    {
        dump($event->getTag());
    }
}