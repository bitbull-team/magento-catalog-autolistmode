<?php
class Company_Catalog_Model_Observer{

    public function setGridMode($observer){
		$block = $observer->getBlock();
		if ($block instanceof Mage_Catalog_Block_Product_List && $block->hasData('items_layout_depend')){
			$range = $block->getData('items_layout_depend');
			if(count($block->getLoadedProductCollection()) >= $range['from']
 				&& count($block->getLoadedProductCollection()) <= $range['to']){
				$block->getChild('product_list_toolbar')->setData('_current_grid_mode','list');
 		}
 		return $this;
		}

  	}
}