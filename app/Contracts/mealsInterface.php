<?php
    namespace App\Contracts;



interface mealsInterface {

    //public function setLang($langId);
    public function selectAll();
    public function checkId($id);
    public function checkCat($catId);
    public function checkTag($tagId);
    public function checkWith($meals);
    public function checkDiff_time($diffTime);
    public function checkPerP($perPage);
    public function returnResults($meals);
}




?>