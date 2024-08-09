<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class Smoker extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('smoker_front');
    }
}
