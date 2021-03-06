<?php 
    $e_activemenu = $this->action->id;
    $controllers_ac = $this->id;
    $session=new CHttpSession;
    $session->open();
    $login_member = $session['login_member'];

    $active_menu_pg = $controllers_ac.'/'.$e_activemenu;
?>


<section class="header d-none d-sm-block">
  <div class="prelative container-header header-tops">
    <div class="row">
      <div class="col-md-41 col-xl-35">

      </div>
      <div class="col-md-19 col-xl-25">
        <div class="content float-right mr-5">
          <div class="box-telp">
            <p>
                <a href="https://wa.me/<?php echo str_replace(' ', '', $this->setting['contact_wa']) ?>">WHATSAPP / HOTLINE<span><img src="<?php echo $this->assetBaseurl; ?>logo-wa.png" alt=""></span> <?php echo $this->setting['contact_phone'] ?> </a>
            </p>
          </div>
          <div class="hr-header"></div>
          <div class="bahasa">
            <p>
                <?php
                $get = $_GET;
                $get['lang'] = 'en';
                ?>
                <a href="<?php echo $this->createUrl($this->route, $get) ?>"><span class="active">ENGLISH</span></a>
                &nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;
                <?php
                $get = $_GET;
                $get['lang'] = 'id';
                ?>
                <a href="<?php echo $this->createUrl($this->route, $get) ?>"><span>INDONESIA</span></a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-bottom">
    <div class="prelative container">
      <div class="row">
        <div class="col-md-15">
          <div class="image logo-image">
            <a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">
              <img class="img img-fluid log_dekstop_n" src="<?php echo $this->assetBaseurl; ?>corpus-header.png" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-45">
        <nav class="navbar navbar-expand-lg">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/whatwedo', 'lang'=>Yii::app()->language)); ?>" data-id="menu-whatwedo">Our Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang'=>Yii::app()->language)); ?>" data-id="menu-investor">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/blog/index', 'lang'=>Yii::app()->language)); ?>">News & Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/career', 'lang'=>Yii::app()->language)); ?>">Career</a>
              </li>             
              <li class="nav-item contact">
                <a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/contactus', 'lang'=>Yii::app()->language)); ?>">Contact Us</a>
              </li>             
            </ul>
          </div>
        </nav>

        </div>
      </div>

      
    </div>
  </div>
  
</section>

<section id="myAffix" class="header-affixs affix-top">
  <div class="prelative container cont-header mx-auto">
    <div class="row">
      <div class="col-md-15 col-sm-15">
        <div class="lgo_web_headrs_wb">
          <a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">
            <img src="<?php echo $this->assetBaseurl; ?>corpus-header-op.png" alt="" class="img img-fluid">
          </a>
        </div>
      </div>
      <div class="col-md-35 col-sm-35">
        <nav class="navbar navbar-expand-lg">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/whatwedo', 'lang'=>Yii::app()->language)); ?>" data-id="menu-whatwedo2">Our Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang'=>Yii::app()->language)); ?>" data-id="menu-investor2">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/blog/index', 'lang'=>Yii::app()->language)); ?>">News & Events</a>
              </li>    
              <li class="nav-item">
                <a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/career', 'lang'=>Yii::app()->language)); ?>">Career</a>
              </li>         
              <li class="nav-item contact">
                <a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/contactus', 'lang'=>Yii::app()->language)); ?>">Contact Us</a>
              </li>             
            </ul>
          </div>
        </nav>
      </div>
      <div class="col-md-10 col-sm-10">
        <div class="kanan-sendiri text-right">
          <div class="wa-kanan">
            <a href="https://wa.me/<?php echo str_replace(' ', '', $this->setting['contact_wa']) ?>">
              <img src="<?php echo $this->assetBaseurl; ?>WA-Logo-sticky.png" alt="">
            </a>
          </div>
          <div class="en-in">
            <?php
            $get = $_GET;
            $get['lang'] = 'en';
            ?>
            <a href="<?php echo $this->createUrl($this->route, $get) ?>" title="ENG">EN | </a>
            <?php
            $get = $_GET;
            $get['lang'] = 'id';
            ?>
            <a href="<?php echo $this->createUrl($this->route, $get) ?>" title="Bahasa">ID</a>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>

    <div class="blocks_menu_dropdown about-n1" id="menu-whatwedo2">
    <div class="prelative container pt-2 pb-5">
      <div class="row">
        <div class="col-md-15"></div>
        <div class="col-md-45">
          <div class="bx-inners_sub">
            <div class="py-2"></div>
            <div class="lines-grey"></div>
            <div class="py-2"></div>
            <div class="py-1"></div>
            <div class="prelatife row">
              <div class="col-md-55">
                <div class="menu-sub">
                  <ul class="list-unstyled">
                    <?php
                    $data_ser = Service::model()->findAll($criteria);
                    ?>
                    <?php foreach ($data_ser as $key => $value): ?>
                    <li><a href="<?php echo CHtml::normalizeUrl(array('/home/whatwedo', 'id'=> $value->id, 'lang'=>Yii::app()->language)); ?>"><?php echo ucwords( strtolower( $value->description->title) ) ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
              <div class="col-md-5">
                <div class="blc_right_close_menu"><a class="btn btn-link closing_menu" href="#" ><i class="fa fa-times fa-2x"></i></a></div>
              </div>
            </div>
            <div class="clear clearfix"></div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>

  <div class="blocks_menu_dropdown about-n1" id="menu-investor2">
    <div class="prelative container pt-2 pb-5">
      <div class="row">
        <div class="col-md-15"></div>
        <div class="col-md-45">
          <div class="bx-inners_sub">
            <div class="py-2"></div>
            <div class="lines-grey"></div>
            <div class="py-2"></div>
            <div class="py-1"></div>
            <div class="prelatife row">
              <div class="col-md-55">
                <div class="menu-sub">
                  <ul class="list-unstyled">
                    <li><a href="<?php echo CHtml::normalizeUrl(array('/home/investorreports', 'lang'=>Yii::app()->language)); ?>">Annual Financial Reports</a></li>
                    <li><a href="<?php echo CHtml::normalizeUrl(array('/blog/index', 'category'=>'financial', 'lang'=>Yii::app()->language)); ?>">Financial Highlights</a></li>
                    <li><a href="<?php echo CHtml::normalizeUrl(array('/home/investorfactsheet', 'lang'=>Yii::app()->language)); ?>">Factsheets</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-5">
                <div class="blc_right_close_menu"><a class="btn btn-link closing_menu" href="#" ><i class="fa fa-times fa-2x"></i></a></div>
              </div>
            </div>
            <div class="clear clearfix"></div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</section>

<header class="header-mobile homepage_head">
  <nav class="navbar fixed-top navbar-light">
  <a class="navbar-brand" href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>"><img src="<?php echo $this->assetBaseurl; ?>corpus-header-op.png" alt="" class="img img-fluid"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
		<li class="list-inline-item">
			<a href="<?php echo CHtml::normalizeUrl(array('/home/whatwedo', 'lang'=>Yii::app()->language)); ?>" data-id="menu-whatwedo">Our Services</a>
		</li>
		<li class="list-inline-item">
			<a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang'=>Yii::app()->language)); ?>" data-id="menu-investor">About Us</a>
		</li>
<!--		<li class="list-inline-item">-->
<!--			<a href="--><?php //echo CHtml::normalizeUrl(array('/home/case', 'lang'=>Yii::app()->language)); ?><!--">Case Studies</a>-->
<!--		</li>-->
		<li class="list-inline-item">
			<a href="<?php echo CHtml::normalizeUrl(array('/blog/index', 'lang'=>Yii::app()->language)); ?>">News & Events</a>
		</li>
		<li class="list-inline-item">
			<a href="<?php echo CHtml::normalizeUrl(array('/home/career', 'lang'=>Yii::app()->language)); ?>">Career</a>
		</li>
		<li class="list-inline-item">
			<a href="<?php echo CHtml::normalizeUrl(array('/home/contactus', 'lang'=>Yii::app()->language)); ?>">Contact Us</a>
		</li>
      <li class="nav-item last">
      <?php
      $get = $_GET; $get['lang'] = 'en';
      ?>
      <a class="bahasa-mobile" href="<?php echo $this->createUrl($this->route, $get) ?>" title="ENG">English&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</a>
      <a class="bahasa-mobile" href="<?php echo $this->createUrl($this->route, $get) ?>" title="Bahasa">Indonesia</a>
      </li>
    </ul>
  </div>
  </nav>
</header>

<script type="text/javascript">
  $(function(){

  // views sub menu
  $('a.views_menu_drop').on('click', function(e){
    $('section.header .header-bottom').find('.logo-image a img').attr('src', '<?php echo $this->assetBaseurl; ?>corpus-header.png');
    $('.blocks_menu_dropdown.about-n1').removeClass('views-menu');
    $('section.header .header-bottom').removeClass('mn-open');
    $('section.header .header-bottom').find('.logo-image a img').attr('src', '<?php echo $this->assetBaseurl; ?>corpus-header.png');


    var n_act = $(this).attr('data-id');

    $('#'+n_act+'.blocks_menu_dropdown.about-n1').addClass('views-menu');
    $('section.header -mobil.header-bottom').addClass('mn-open');
    $('section.header -mobil.header-bottom').find('.logo-image a img').attr('src', '<?php echo $this->assetBaseurl; ?>corpus-header-op.png');

    e.preventDefault();
  });

  $('.blc_right_close_menu a.closing_menu').on('click', function(e){
    $('.blocks_menu_dropdown.about-n1').removeClass('views-menu');
    $('section.header .header-bottom').removeClass('mn-open');
    $('section.header .header-bottom').find('.logo-image a img').attr('src', '<?php echo $this->assetBaseurl; ?>corpus-header.png');

    e.preventDefault();
  });

  var sn_width = $(window).width();
  if (sn_width > 1150) {

      $(window).scroll(function(){
        var sntop1 = $(window).scrollTop();

        if(sntop1 > 115){
          // console.log(sntop1);
          $('.header-affixs').removeClass('affix-top').addClass('affix');
          // $('.header-affixs').addClass('affix');
        }else{
          $('.header-affixs.affix').removeClass('affix').addClass('affix-top');
          // $('body').css('padding-top', '0px');
        }
      });

    }

  });
</script>



<script>
  // $(document).ready(function(){
  //   $("#headerproduct").css("display","none");
  // });
</script>

