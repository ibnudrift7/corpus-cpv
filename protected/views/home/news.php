<section class="block-breadcrumb">
  <div class="prelative container2">
    <div class="row">
      <div class="col-40">
        <div class="breadcrumb">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">HOME</a></li>
              <li class="breadcrumb-item"><a href="#">NEWS & ARTICLES</a></li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="col-20">
        <div class="back text-right">
          <a href="#">BACK</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="title-breadcrumb">
  <div class="title mx-auto d-block text-center">
    <h3>News & Articles</h3>
  </div>
</section>

<section class="pilihan hide-mobile">
  <div class="prelative container text-center d-block mx-auto">
    <ul>
      <li class="active"><a href="#">
        ALL ARTICLES
          </a> 
      </li>
      <li class="garis-awal"><div class="garis"></div></li>
      <li><a href="#">
        CORPORATE NEWS
          </a> 
      </li>
      <li class="garis-awal"><div class="garis"></div></li>
      <li><a href="#">
        CALCIUM CARBONATE RELATED ARTICLES
          </a> 
      </li>
        
    </ul>
  </div>
</section>

<section class="pilihan hide-pc">
  <div class="prelative container text-center d-block mx-auto">
    <ul>
      <li class="active"><a href="#">
        ALL ARTICLES
          </a> 
      </li>
      <li class="garis-awal"><div class="garis"></div></li>
      <li><a href="#">
        CORPORATE NEWS
          </a> 
      </li>
      <li class="garis-awal"><div class="garis"></div></li>
      <li><a href="#">
        CALCIUM CARBONATE RELATED ARTICLES
          </a> 
      </li>
        
    </ul>
  </div>
</section>

<section class="news-sec-1">
  <div class="prelative container news">
    <?php for($i=0;$i<=3;$i++){ ?>
    <div class="row">
        <div class="col-md-20">
          <div class="box-news">
            <div class="tanggal">
              <p>17 February 2019</p>
            </div>
            <div class="title py-3">
              <a href="<?php echo CHtml::normalizeUrl(array('/home/news_detail', 'lang'=>Yii::app()->language)); ?>">
                <h2>Bridgestone tender offer for Dwi Selo Giri Mas shares in the bid</h2>
              </a>
            </div>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non gravida dolor. Fusce gravi.da, risus vel sodales posuere, mi metus tincidunt nisi, vitae finibus metus urna viverra turpis. </p>
            </div>
          </div>
        </div>  
        <div class="col-md-20">
          <div class="box-news">
            <div class="tanggal">
              <p>19 February 2019</p>
            </div>
            <div class="title py-3">
              <a href="<?php echo CHtml::normalizeUrl(array('/home/news_detail', 'lang'=>Yii::app()->language)); ?>">
                <h2>Dwi Selo Giri Mas group to give back to the community</h2>
              </a>
            </div>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non gravida dolor. Fusce gravi.da, risus vel sodales posuere, mi metus tincidunt nisi, vitae finibus metus urna viverra turpis. </p>
            </div>
          </div>
        </div>
        <div class="col-md-20">
          <div class="box-news">
            <div class="tanggal">
              <p>21 February 2019</p>
            </div>
            <div class="title py-3">
              <a href="<?php echo CHtml::normalizeUrl(array('/home/news_detail', 'lang'=>Yii::app()->language)); ?>">
                <h2>Calcium Carbonate products of DSGM achieve the best quality award in 2018</h2>
              </a>
            </div>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non gravida dolor. Fusce gravi.da, risus vel sodales posuere, mi metus tincidunt nisi, vitae finibus metus urna viverra turpis. </p>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
  <div class="pb-5 hide-pc"></div>
  <div class="pb-5 hide-pc"></div>
  <div class="pb-5 hide-pc"></div>
  <div class="pb-5"></div>
  <hr>
</section>