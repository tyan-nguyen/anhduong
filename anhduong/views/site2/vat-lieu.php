<?php
if($page ==2){
    echo $this->render('vatlieu/page2');
} else if($page==3){
    echo $this->render('vatlieu/page3');
} else {
    echo $this->render('vatlieu/page1');
}