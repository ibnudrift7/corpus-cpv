<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<?php echo $this->renderPartial('//layouts/_header', array()); ?>


<!-- Start fcs -->
<?php
$criteria=new CDbCriteria;
$criteria->with = array('description');
$criteria->addCondition('description.language_id = :language_id');
$criteria->addCondition('t.active = 1');
$criteria->params[':language_id'] = $this->languageID;
$criteria->group = 't.id';
$criteria->order = 't.id ASC';
$slide = Slide::model()->with(array('description'))->findAll($criteria);

// dummy slide
$dum_slides = array(
	[
		'img_desk' => 'ill-home-corpus-ventura-01.jpg',
		'img_mob' => 'fcs-corpus-02_mob.jpg',
	],
	[
		'img_desk' => 'ill-home-corpus-ventura-02.jpg',
		'img_mob' => 'fcs-corpus-03_mob.jpg',
	],
	[
		'img_desk' => 'ill-home-corpus-ventura-03.jpg',
		'img_mob' => 'fcs-corpus-04_mob.jpg',
	]
);
?>
<div class="fcs-wrapper outers_fcs_wrapper prelatife wrapper-slide">
	<div class="container cont-fcs">
		<div id="myCarousel_home" class="carousel slide" data-ride="carousel" data-interval="4500">
			<div class="carousel-inner">
				<?php foreach ($slide as $key => $value): ?>
					<div class="carousel-item <?php if ($key == 0): ?>active<?php endif ?> home-slider-new">
						<img class="w-100 d-none d-sm-block" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,978, '/images/slide/'. $value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="<?php echo $value->description->title ?>" style="background-repeat: no-repeat;background-size: cover;">
                    <img class="w-100 d-block d-sm-none" src="<?php echo Yii::app()->baseUrl.'/images/slide/'; ?><?php echo $value->image2 ?>" alt="<?php echo $value->description->title ?>">
						<?php /*
                    <div class="carousel-caption caption-slider-home">
                        <div class="prelative container">
                            <div class="bxsl_tx_fcs">
                                <div class="row no-gutters">
                                    <div class="col-md-60">
                                        <h5>How we help you</h5>
                                        <h3>Finding you a whole new perspective and solutions for your successful financial future</h3>
                                        <p>BUSINESS SUPPORT & CAPITAL MARKET ADVISORY, INVESTMENT BANKING, FINANCIAL ADVISORY AND MERGER ACQUISITION ALL IN ONE ROOF. </p>
                                        <div class="scroll">
                                            <a href="#" id="click">
                                                <p>Scroll Down <span><img src="<?php echo $this->assetBaseurl; ?>arrow-combo.png" alt=""></span></p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    */ ?>

					</div>
				<?php endforeach ?>
			</div>
			<div class="carousel-text">
				<div class="prelative container">
					<div class="bxsl_tx_fcs">
						<div class="row no-gutters">
							<div class="col-md-60">
								<?php echo $this->setting['home_sectionf_text'] ?>
								<!-- <div class="scroll">
                                    <a href="#" id="click">
                                        <p>Scroll Down <span><img src="<?php echo $this->assetBaseurl; ?>arrow-combo.png" alt=""></span></p>
                                    </a>
                                </div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-button-native">
				<div class="prelative container">
					<ol class="carousel-indicators">
						<?php foreach ($slide as $key => $value): ?>
							<li data-target="#myCarousel_home" data-slide-to="<?php echo $key ?>" <?php if ($key == 0): ?>class="active"<?php endif ?>></li>
						<?php endforeach ?>
					</ol>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- End fcs -->

<?php echo $content ?>

<?php echo $this->renderPartial('//layouts/_footer', array()); ?>

<script type="text/javascript">
    $(document).ready(function(){

        if ($(window).width() >= 768) {
            var $item = $('#myCarousel_home.carousel .carousel-item');
            var $wHeight = $(window).height();
            $item.eq(0).addClass('active');
            $item.height($wHeight);
            $item.addClass('full-screen');

            $('#myCarousel_home.carousel img.d-none.d-sm-block').each(function() {
                var $src = $(this).attr('src');
                var $color = $(this).attr('data-color');
                $(this).parent().css({
                    'background-image' : 'url(' + $src + ')',
                    'background-color' : $color
                });
                $(this).remove();
            });

            $(window).on('resize', function (){
                $wHeight = $(window).height();
                $item.height($wHeight);
            });

            $('#myCarousel_home.carousel').carousel({
                interval: 4500,
                pause: "false"
            });
        }

    });
</script>

<script>
    $(document).ready(function (){
        $("#click").click(function (){
            $('html, body').animate({
                scrollTop: $("#div1").offset().top
            }, 2000);
        });
    });
</script>

<?php $this->endContent(); ?>
