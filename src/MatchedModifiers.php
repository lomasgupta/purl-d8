<?php

namespace Drupal\purl;

use Drupal\purl\Event\ModifierMatchedEvent;

class MatchedModifiers
{
    /**
     * @var ModifierMatchedEvent[]
     */
    private $matched;

    /**
     * @var ModifierMatchedEvent[]
     */
    public function getMatched()
    {
        return $matched;
    }

    /**
     * @param ModifierMatchedEvent $event
     *
     * @return null
     */
    public function add(ModifierMatchedEvent $event)
    {
        $this->matched[] = $event;
    }
}
