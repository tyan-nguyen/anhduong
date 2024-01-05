<div class="app__item" style="background-image: url('/anhduong2/images/du-an/<?= $model['image'] ?>')">
  <div class="app__item__info">
    <div>
      <h3><?= $model['title'] ?></h3>
      <div class="app__item__info-excerpt"> <?= $model['subTitle'] ?> </div>
    </div>
    <div class="app__item__info-btn"> <a href="/xem-du-an/<?= $model['slug'] ?>"> <i class="fa-regular fa-circle-right"></i> </a> </div>
  </div>
  <div class="app__item__hover">
    <div>
      <h3>Thông tin dự án</h3>
      <div class="app__item__hover-des"> <?= $model['desc'] ?> </div>
      <div class="app__item__hover-btn aperam-btn"> <a href="/xem-du-an/<?= $model['slug'] ?>"> Xem thêm </a> </div>
    </div>
    <!-- <div class="app__item__hover-arrow">
    <div class="icon-arrow"></div>
</div> --> 
    
  </div>
  <!-- .app__item__hover --> 
</div>