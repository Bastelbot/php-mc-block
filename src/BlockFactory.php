<?php
namespace Bastelbot\McBlock;

use Bastelbot\Common\Log;
use Bastelbot\Common\CaseConverter;
use Bastelbot\McBlock\Abstract\BlockNotFound;

class BlockFactory
{
    protected $blocks;

    public function __construct ()
    {
        $this->blocks = [];
    }

    public function getBlock ($id, $data)
    {
        //echo "BlockFac:getBlock: $id\n";
        $hash = md5($id . json_encode($data));
        if(empty($this->blocks[$hash])) {
            $block = $this->createBlock($id);
            $block->setData($data);
            $this->blocks[$hash] = $block;
        }
        return $this->blocks[$hash];
    }

    protected function getBlockClassName ($id) {
        $cls = explode(':', $id);
        foreach($cls as $k => $v) {
            $cls[$k] = CaseConverter::snakeToPascal($v);
        }
        array_unshift($cls, 'Bastelbot\\McBlock');
        return implode("\\", $cls);
    }

    protected function createBlock ($id)
    {
        echo "new: $id\n";
        if($id) {
            $class = $this->getBlockClassName($id);
            if(class_exists($class)) {
                return new $class();
            }
        }
        Log::error("class $class not found. id: " . print_r($id, true), 1);
        return new BlockNotFound($id);
    }
}
