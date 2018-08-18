<div class="container">
    <section class="lots">
      <h2>История просмотров</h2>
      <ul class="lots__list">
        <? foreach ($newArr as $key => $value) : ?>
        <li class="lots__item lot">
          <div class="lot__image">
            <img src="<?php echo $value['url'];?>" width="350" height="260" alt="<?php echo $value['Название'];?>">
          </div>
          <div class="lot__info">
            <span class="lot__category"><?php echo $value['Категория'];?></span>
            <h3 class="lot__title"><a class="text-link" href="lot.php?id=<?php echo $key;?>"><?php echo $value['Название'];?></a></h3>
            <div class="lot__state">
              <div class="lot__rate">
                <span class="lot__amount">Стартовая цена</span>
                <span class="lot__cost"><?php echo $value['Цена'];?><b class="rub">р</b></span>
              </div>
              <div class="lot__timer timer">
                <?php echo $time; ?>
              </div>
            </div>
          </div>
        </li>
      <? endforeach; ?>
      </ul>
    </section>
    <ul class="pagination-list">
      <li class="pagination-item pagination-item-prev"><a>Назад</a></li>
      <li class="pagination-item pagination-item-active"><a>1</a></li>
      <li class="pagination-item"><a href="#">2</a></li>
      <li class="pagination-item"><a href="#">3</a></li>
      <li class="pagination-item"><a href="#">4</a></li>
      <li class="pagination-item pagination-item-next"><a href="#">Вперед</a></li>
    </ul>
  </div>