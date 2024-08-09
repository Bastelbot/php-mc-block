<?php
namespace Bastelbot\McBlock;

use Bastelbot\Common\Log;
use Bastelbot\Common\CaseConverter;
use Bastelbot\McBlock\Abstract\BlockNotFound;

class BlockFactory
{
    protected $blocks;
    protected $replacements;
    protected $use_block_data = false;
    protected $id_class_mapping = [];

    public function __construct ()
    {
        $this->blocks = [];
        $this->replacements = json_decode(file_get_contents(__DIR__.'/replacement_block_ids.json'), true);
        $this->id_class_mapping = json_decode(file_get_contents(__DIR__.'/id_class_mapping.json'), true);
    }

    public function getBlock ($id, $data)
    {
        //echo "BlockFac:getBlock: $id\n";
        $id = $this->getEffectiveId($id);
        $hash = $this->use_block_data ? md5($id . json_encode($data)) : $id;
        $data = $this->use_block_data ? $data : 0;
        if(empty($this->blocks[$hash])) {
            $block = $this->createBlock($id);
            $block->setName($id);
            $block->setData($data);
            $this->blocks[$hash] = $block;
        }
        return $this->blocks[$hash];
    }

    protected function getEffectiveId($id) {
        return $this->replacements[$id] ?? $id;
    }

    protected function getBlockClassName ($id) {
        $cls = $this->id_class_mapping[$id] ?? null;
        if($cls) return $cls;

        $cls = explode(':', $id);
        foreach($cls as $k => $v) {
            $cls[$k] = CaseConverter::snakeToPascal($v);
        }
        array_unshift($cls, 'Bastelbot\\McBlock');
        return implode("\\", $cls);
    }

    protected function createBlock ($id)
    {
        //echo "new: $id\n";
        if($id) {
            $class = $this->getBlockClassName($id);
            if(class_exists($class)) {
                return new $class();
            }
        }
        Log::error("class $class not found. id: " . print_r($id, true), 1);
        return new BlockNotFound();
    }
}
