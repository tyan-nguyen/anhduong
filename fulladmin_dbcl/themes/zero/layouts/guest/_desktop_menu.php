<?php 
use app\modules\dashboard\models\Links;

$langid = Yii::$app->params['mainLang'];
$parentLinks = Links::find()->where("pid IS NULL OR pid = 0 AND lang = '".$langid."'")->andFilterWhere(['type'=>'MENU_TOP'])->orderBy(['priority'=>SORT_ASC])->all();

function getChild1st($pid){
    $childLinks = Links::find()->where(['pid'=>$pid])->andFilterWhere(['type'=>'MENU_TOP'])->orderBy(['priority'=>SORT_ASC])->all();
    foreach ($childLinks as $iLinkChid=>$linkChid){
        if($linkChid->numberChildren()==0){
        ?>
      	<div class="menu-child">
      		<a href="<?= $linkChid->link ?>" class="menu-root lv1"><?= $linkChid->name ?></a>
      	</div>
        <?php 
        } else {
            /* echo
            '<li class="dropdown-submenu has-sub">
            <a href="'.$linkChid->link.'" class="dropdown-toggle" data-toggle="dropdown">'.$linkChid->name.'</a>
            <ul class="dropdown-menu">
            ' .
            getChild2nd($linkChid->id)
            . '</ul>
            </li>'; */
            
        ?>
        	<div class="menu-child has-sub">
              <a href="<?= $linkChid->link ?>" class="menu-root lv1"> <?= $linkChid->name ?>
              		<span class="icon-dropdown rotate-90">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M11.9465 5.45337H7.79316H4.05317C3.41317 5.45337 3.09317 6.2267 3.5465 6.68004L6.99983 10.1334C7.55317 10.6867 8.45317 10.6867 9.0065 10.1334L10.3198 8.82003L12.4598 6.68004C12.9065 6.2267 12.5865 5.45337 11.9465 5.45337Z" fill="white" />
                         </svg>
                	</span>
                </a>                
              <div class="sub-menu">
                <?php getChild2nd($linkChid->id) ?>
              </div>
            </div>
        <?php 
        }
    }
}

function getChild2nd($pid){
    $result = '';
    $childLinks = Links::find()->where(['pid'=>$pid])->andFilterWhere(['type'=>'MENU_TOP'])->orderBy(['priority'=>SORT_ASC])->all();
    foreach ($childLinks as $iLinkChid=>$linkChid){
        if($linkChid->numberChildren()==0){
            echo '<div class="menu-child">
          		<a href="'.$linkChid->link.'" class="menu-root lv2">'.$linkChid->name.'</a>
          	</div>';
        } else {
            /* echo '<li class="dropdown-submenu">
            <a href="'.$linkChid->link.'" class="dropdown-toggle" data-toggle="dropdown">'.$linkChid->name.'</a>
            <ul class="dropdown-menu">
            ' .
            getChild2nd($linkChid->id)
            . '</ul>
            </li>'; */
            
        ?>
        <div class="menu-child has-sub">
              <a href="<?= $linkChid->link ?>" class="menu-root lv2"> <?= $linkChid->name ?>
              		<span class="icon-dropdown rotate-90" style="top:5px">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M11.9465 5.45337H7.79316H4.05317C3.41317 5.45337 3.09317 6.2267 3.5465 6.68004L6.99983 10.1334C7.55317 10.6867 8.45317 10.6867 9.0065 10.1334L10.3198 8.82003L12.4598 6.68004C12.9065 6.2267 12.5865 5.45337 11.9465 5.45337Z" fill="white" />
                         </svg>
                	</span>
                </a>                
              <div class="sub-menu">
                <?php getChild2nd($linkChid->id) ?>
              </div>
            </div>
        <?php 
        }
    }
    //return $result;
}

?>

<div class="header-menu header-menu-basic">
  <div class="container">
    <div class="header-menu-wrap">
      <div class="header-menu-root has-sub">
		<a href="/" class="menu-root "> <img src="/dbcl/images/home_logo.png" alt="" class="img-fluid logo-head" />&nbsp;</a>
      </div>
      
      	<?php 
          foreach ($parentLinks as $i=>$link){
              if($link->numberChildren()==0){
          ?>
          <div class="header-menu-root">
			<a href="<?= $link->link ?>" class="menu-root"><?= $link->name ?></a>
      	</div>
          <?php 
              } else {
          ?>
          	<div class="header-menu-root has-sub">
              <a href="<?= $link->link ?>" class="menu-root"> <?= $link->name ?>
              		<span class="icon-dropdown ">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M11.9465 5.45337H7.79316H4.05317C3.41317 5.45337 3.09317 6.2267 3.5465 6.68004L6.99983 10.1334C7.55317 10.6867 8.45317 10.6867 9.0065 10.1334L10.3198 8.82003L12.4598 6.68004C12.9065 6.2267 12.5865 5.45337 11.9465 5.45337Z" fill="white" />
                        </svg>
                	</span>
                </a>                
              <div class="sub-menu">
                <?php getChild1st($link->id) ?>
              </div>
            </div>
          <?php     
              }
          }
      ?>
      
      
      
      <?php /* ?>
      <div class="header-menu-root  has-sub "> 
      	<a href="/trang/gioi-thieu-130" class="menu-root"> Giới thiệu
      		<span class="icon-dropdown ">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.9465 5.45337H7.79316H4.05317C3.41317 5.45337 3.09317 6.2267 3.5465 6.68004L6.99983 10.1334C7.55317 10.6867 8.45317 10.6867 9.0065 10.1334L10.3198 8.82003L12.4598 6.68004C12.9065 6.2267 12.5865 5.45337 11.9465 5.45337Z" fill="white" />
                </svg>
        	</span>
        </a>
        <div class="sub-menu">
          <div class="menu-child"> <a href="/trang/gioi-thieu-chung-130" class="menu-root lv1                                                                 ">Giới thiệu chung</a></div>
          <div class="menu-child"> <a href="/trang/chuc-nang-nhiem-vu-131" class="menu-root lv1                                                                 ">Chức năng - Nhiệm vụ</a></div>
          <div class="menu-child"> <a href="/co-cau-to-chuc" class="menu-root lv1                                                                 ">Cơ cấu tổ chức</a></div>
        </div>
      </div>
      
      <div class="header-menu-root">
			<a href="/danh-muc/tin-tuc-su-kien-4090" class="menu-root  "> Tin tức - Sự kiện </a>
      </div>
      
      <div class="header-menu-root  has-sub ">
      	<a href="/danh-muc/tin-tuc-dam-bao-chat-luong-2929" class="menu-root"> Đảm bảo chất lượng
      		<span class="icon-dropdown ">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.9465 5.45337H7.79316H4.05317C3.41317 5.45337 3.09317 6.2267 3.5465 6.68004L6.99983 10.1334C7.55317 10.6867 8.45317 10.6867 9.0065 10.1334L10.3198 8.82003L12.4598 6.68004C12.9065 6.2267 12.5865 5.45337 11.9465 5.45337Z" fill="white" />
                </svg>
            </span>
		</a>
        <div class="sub-menu">
          <div class="menu-child  has-sub ">
          	<a href="/danh-muc/tin-tuc-dam-bao-chat-luong-2929?cat_child=4315" class="menu-root lv1">
				Kiểm định chất lượng giáo dục 
				<span class="icon-dropdown rotate-90">
                	<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.9465 5.45337H7.79316H4.05317C3.41317 5.45337 3.09317 6.2267 3.5465 6.68004L6.99983 10.1334C7.55317 10.6867 8.45317 10.6867 9.0065 10.1334L10.3198 8.82003L12.4598 6.68004C12.9065 6.2267 12.5865 5.45337 11.9465 5.45337Z" fill="white" />
                    </svg>
            	</span>
            </a>
            <div class="sub-menu">
              <div class="menu-child">
                    <a href="/danh-muc/kiem-dinh-chat-luong-giao-duc-4315?cat_child=4316" class="menu-root lv2">
                    	Kiểm định chất lượng Trường
                    </a>
             	</div>
              <div class="menu-child">
					<a href="/danh-muc/kiem-dinh-chat-luong-giao-duc-4315?cat_child=4317" class="menu-root lv2">Kiểm định chất lượng CTĐT theo tiêu chuẩn MOET </a>
              </div>
              <div class="menu-child">
					<a href="/danh-muc/kiem-dinh-chat-luong-giao-duc-4315?cat_child=4318" class="menu-root lv2">Kiểm định chất lượng CTĐT theo tiêu chuẩn AUN-QA </a>
				</div>
            </div>
          </div>
          <div class="menu-child">
				<a href="/danh-muc/tin-tuc-dam-bao-chat-luong-2929?cat_child=2924" class="menu-root lv1">Tin hoạt động</a>
			</div>
          <div class="menu-child">
				<a href="/danh-muc/tin-tuc-dam-bao-chat-luong-2929?cat_child=2925" class="menu-root lv1">Thông báo</a>
			</div>
          <?= $this->render('_menuItem') ?>
        </div>
      </div>
      
      <div class="header-menu-root">
      	<a href="/danh-muc/quan-ly-phoi-vbcc-4091" class="menu-root"> Quản lý phôi VBCC </a>
      </div>
      <div class="header-menu-root">
      	<a href="/van-ban-quan-ly" class="menu-root"> Văn bản quản lý </a>
      </div> <?php */ ?>
    </div>
  </div>
</div>
