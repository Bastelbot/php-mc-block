<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class QuartzPillar extends Block
{
    protected $name = 'minecraft:quartz_pillar';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('quartz_pillar_top');
    }
}
