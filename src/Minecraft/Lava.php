<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class Lava extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('lava_still');
    }
}
