<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class Hopper extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('hopper_inside');
    }
}
