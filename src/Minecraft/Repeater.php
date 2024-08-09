<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class Repeater extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('repeater_on');
    }
}
