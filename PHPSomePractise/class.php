<?php
class Stats{
    public $aa;
    public $bb;
    public $cc;

    public function __construct($aaa,$bbb,$ccc){
        $this->aa = $aaa;
        $this->bb = $bbb;
        $this->cc = $ccc;

    }
}

class Skill {
public $ee;
public $ff;

public $gg;

public function __construct($eee,$fff,$ggg) {
$this->ee = $eee;
$this->ff = $fff;
$this->gg = $ggg;
}

}

class Hero {
public $name;
public $stats;
public $skills;
public $article;

    public function __construct($name,$stats,$skills,$article){
        $this->name =$name;
        $this->stats =$stats;
        $this->skills =$skills;
        $this->article =$article;
    }
}

$one = new Stats(1,2,3);
$two=[];
$two[]= new Skill("王","王王","王王王");
$two[]= new Skill("炒","炒面","炒朱");
$article = "阿題扣";
$heroo = new Hero("狗",$one,$two,$article);
echo $heroo -> article;
var_dump($heroo);
?>