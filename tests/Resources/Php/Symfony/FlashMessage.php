<?php

namespace Translation\Extractor\Tests\Resources\Php\Symfony;

class FlashMessage
{
    /**
     * @return array
     */
    public function newAction()
    {
        $this->addFlash('success', 'flash.created');

        return array();
    }
}
