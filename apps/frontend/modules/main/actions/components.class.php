<?php
class ostatnieComponents extends sfComponents{
    public function executeMenu(sfWebRequest $request){
        $this->tekst = Tekst.doSelect(new Criteria());
    }
}
?>
