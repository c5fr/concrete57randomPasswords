<?php
namespace Application\Block\Randompasswords;
use Concrete\Core\Block\BlockController;

class Controller extends BlockController{

	protected $btInterfaceWidth = "200";
	protected $btInterfaceHeight = "200";
	public function getBlockTypeDescription() {
		return t("Générer des mots de passe aléatoires");
	}

	public function getBlockTypeName() {
		return t("Random passwords");
	}


	public function view(){
		$this->set('num_pages', $this->num_pages);
	}



}

?>
