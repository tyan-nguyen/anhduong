<?php 
use app\modules\dashboard\models\Links;
$quickLink = Links::find()->where(['type'=>'QUICK_LINK'])->all();
$footerLink = Links::find()->where(['type'=>'FOOTER_LINK'])->all();
$socialLink = Links::find()->where(['type'=>'SOCIAL_LINK'])->all();
?>
<footer class="footer footer-nangcao">
            <div class="row-social">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-social">
                                <span>Kết nối với chúng tôi:</span>
                                <?php 
                                  	foreach ($socialLink as $iLink=>$link){
                                  ?>
                                  <a <?= $link->open_new_tab ? 'target="_bank"' : '' ?> href="<?= $link->link ?>">
                                          <?= $link->name ?>
                                      </a>
                                  <?php     
                                  }
                                  ?>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class=" col-lg-5 col-sm-6 ">
                            <div class="row-logo-footer-nc">
                                <a href="#" class="logo-footer">
                                    <img src="/dbcl/images/logo2.png" alt="" class="img-fluid logo-head logo-sm" />
                                    <div class="name">
                                        <h2>Trường Đại học Trà Vinh</h2>
                                        <h3>Phòng Đảm bảo Chất lượng</h3>
                                    </div>
                                </a></div>
                            <div class="add-ft">
                                <span class="add">
                                    Địa chỉ: Số 126 Quốc lộ 53, khóm 4, phường 5, TP.Trà Vinh, tỉnh Trà Vinh<br />
                                    Điện thoại: (+84).74.3855246  <br/>
                                    Fax: (+84).74.3855217 <br/>
                                    Giấy phép xuất bản số: 35/GP-TTDT do Cục QL Phát thanh, Truyền hình và Thông tin điện tử (Bộ TTTT) cấp ngày 05/04/2013

                                </span>
                                </div>
                        </div>
                        <div class="col-lg-3 col-sm-6" style="margin-bottom:20px">
                           <div class="link-ft">
                                <h3>LIÊN KẾT</h3>
                                <?php 
                                foreach ($quickLink as $iLink=>$link){
                                 ?>
                                  <a <?= $link->open_new_tab ? 'target="_bank"' : '' ?> href="<?= $link->link ?>"><?= $link->name ?></a>
                                 <?php     
                                  }
                                 ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12" style="margin-bottom:20px">
                            <div class="link-ft">
                                <h3>LIÊN KẾT NGOÀI</h3>
                                <?php 
                                  foreach ($footerLink as $iLink=>$link){
                                 ?>
                                  <a <?= $link->open_new_tab ? 'target="_bank"' : '' ?> href="<?= $link->link ?>"><?= $link->name ?></a>
                                 <?php     
                                  }
                                 ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lbl-cp">                    
                    © Bản Quyền thuộc Trường Đại Học Trà Vinh <br/>
                    Mọi chi tiết về nội dung website xin liên hệ: banbientapwebsite@tvu.edu.vn <br/>
                    Kỹ thuật: webmaster@tvu.edu.vn
                </div>
            </div>
        </footer>