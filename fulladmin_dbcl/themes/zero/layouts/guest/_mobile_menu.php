<?php 
use app\modules\dashboard\models\Links;

$langid = Yii::$app->params['mainLang'];
$parentLinks = Links::find()->where("pid IS NULL OR pid = 0 AND lang = '".$langid."'")->andFilterWhere(['type'=>'MENU_TOP'])->orderBy(['priority'=>SORT_ASC])->all();

function getMChild($pid){
    $childLinks = Links::find()->where(['pid'=>$pid])->andFilterWhere(['type'=>'MENU_TOP'])->orderBy(['priority'=>SORT_ASC])->all();
    foreach ($childLinks as $iLinkChid=>$linkChid){
        if($linkChid->numberChildren()==0){
            ?>
      	<li>
            <a title="<?= $linkChid->name ?>" href="<?= $linkChid->link ?>"><?= $linkChid->name ?></a>
        </li>
        <?php 
        } else {            
        ?>            
            <li>
            	<a title="<?= $linkChid->name ?>" href="<?= $linkChid->link ?>"><?= $linkChid->name ?></a>
            	<ul>
            		<?php getMChild($linkChid->id) ?>
            	</ul>
        	</li>
        <?php 
        }
    }
}


?>

<div class="mobile-ham">
    <a href="#mmenu" class="icon-menu-mb" id="menu-rotate">
        <div class="menu-line">
            <div class="lines">
                <div class="line diagonal part-1"></div>
                <div class="line horizontal"></div>
                <div class="line diagonal part-2"></div>
            </div>
        </div>
    </a>
    <nav id="mmenu">
        <ul>
        	<?php 
          foreach ($parentLinks as $i=>$link){
              if($link->numberChildren()==0){
          ?>
      		<li>
                <a title="<?= $link->name ?>" href="<?= $link->link ?>" class="item-menu-mb"><?= $link->name ?></a>
            </li>
          <?php 
              } else {
          ?>
          		<li>
                    <a title="<?= $link->name ?>" href="<?= $link->link ?>" class="item-menu-mb"><?= $link->name ?></a>
                    <ul>
                		<?php getMChild($link->id) ?>
                	</ul>
                </li>
          <?php } } ?>
        
        </ul>
    </nav>
</div>