<?php
namespace Src\Classes;

class classRender{

// Propriedades;
  private $Dir;
  private $Title;
  private $Description;
  private $Keywords;

  public function getDir(){return $this->Dir;}
  public function setDir($Dir){$this->Dir = $Dir;}

  public function getTitle(){return $this->Title;}
  public function setTitle($Title){$this->Title = $Title;}

  public function getDescription(){return $this->Description;}
  public function setDescription($Description){$this->Description = $Description;}

  public function getKeywords(){return $this->Keywords;}
  public function setKeywords($Keywords){$this->Keywords = $Keywords;}

// Renderiza Layout;
  public function renderLayout()
  {
    include_once(DIRREQ.'app/view/layout.php');
  }

// Add características expecíficas no main;
  public function addHeader()
  {
    if(file_exists(DIRREQ."app/view/{$this->getDir()}/header.php")){
      include(DIRREQ."app/view/{$this->getDir()}/header.php");
    };
  }

// Add características expecíficas no head;
  public function addHead()
  {
    if(file_exists(DIRREQ."app/view/{$this->getDir()}/head.php")){
      include(DIRREQ."app/view/{$this->getDir()}/head.php");
    };
  }

// Add características expecíficas no main;
  public function addMain()
  {
    if(file_exists(DIRREQ."app/view/{$this->getDir()}/main.php")){
      include(DIRREQ."app/view/{$this->getDir()}/main.php");
    };
  }

// Add características expecíficas no footer;
public function addFooter()
  {
    if(file_exists(DIRREQ."app/view/{$this->getDir()}/footer.php")){
      include(DIRREQ."app/view/{$this->getDir()}/footer.php");
    };
  }

}