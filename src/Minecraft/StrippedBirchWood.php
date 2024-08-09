<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class StrippedBirchWood extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('stripped_birch_log_top');
    }
}
