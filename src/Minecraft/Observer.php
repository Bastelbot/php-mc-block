<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class Observer extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('observer_back_on');
    }
}
