<?php 
$numbs = isset( $_GET['id'] )? intval($_GET['id']) : 1;

$criteria = new CDbCriteria;
$criteria->with = array('description');
$criteria->addCondition('description.language_id = :language_id');
$criteria->params[':language_id'] = $this->languageID;
$criteria->addCondition('t.id = :id');
$criteria->params[':id'] = intval( htmlspecialchars($numbs) );
$model = Service::model()->find($criteria);

$img_cov = Yii::app()->baseUrl.'/images/static/'. $this->setting['services_hero_image'];
?>
<div class="cover whatwedo" style="background-image: url('<?php echo $img_cov ?>');">
  <div class="text ya">
  	<h2 class="what"><?php echo $this->setting['services_hero_title'] ?></h2>
  	<p><?php echo $this->setting['services_hero_subtitle'] ?></p>
  </div>
</div>

<section class="breadcrumb-insides">
	<div class="prelative container">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">Home</a></li>
		    <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/whatwedo', 'lang'=>Yii::app()->language)); ?>"><?php echo $this->setting['services_hero_title'] ?></a></li>
<!--		    <li class="breadcrumb-item"><a href="javascript:;">--><?php //echo ucwords( strtolower( $model->description->title) ) ?><!--</a></li>-->
		  </ol>
		  <div class="back float-right">
		  	<a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>"><span><img src="<?php echo $this->assetBaseurl; ?>arrow-back.png" alt=""></span>BACK TO PREVIOUS PAGE</a>
		  </div>
		</nav>
	</div>
</section>

<section class="what-sec-1 d-none d-sm-block">
	<div class="prelative container">
		<div class="row">
			<div class="col-md-25">
				<div class="box-aneh">
					<div class="image">
						<img class="img img-fluid" src="<?php echo Yii::app()->baseUrl.'/images/static/'. $this->setting['services2_pictures']; ?>" alt="<?php echo Yii::app()->name; ?>">
					</div>
					<div class="bawah-gambar px-3 pt-3 d-none d-sm-block">
						<div class="row">
							<div class="col-md-5 col-xs-5 col-5">
								<img src="<?php echo $this->assetBaseurl; ?>logo-bawah-gambar.png" alt="">
							</div>
							<div class="col-md-55 col-xs-55 col-55">
								<?php if (Yii::app()->language == 'en'): ?>
								<p>Take the next steps with Corpus Prima Ventura, come contact us and talk to our consultants - let’s get your finance growing.</p>
								<?php else: ?>
								<p>Ambil langkah selanjutnya dengan Corpus Prima Ventura, datang hubungi kami dan bicaralah dengan konsultan kami - mari tumbuhkan keuangan Anda.</p>
								<?php endif ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-35 pl-4">
				<div class="content">
					<div class="title">
						<p><?php echo $this->setting['services2_small_title'] ?></p>
					</div>
				</div>

				<div class="content-utama">
					<?php echo $this->setting['services_content'] ?>
					<!-- <h4>Corpus Prima Ventura was established on 30 June 2014 as a part of Corpus Prima Mandiri. We provide funding solutions for businesses. We believe in helping businesses with an entrepreneurial spirit, integrity, passion, and commitment to thrive in what they do. We are registered with and overseen by Otoritas Jasa Keuangan (OJK).</h4>
					<p>Corpus Prima Ventura provides professional business solutions to clients. We also provide monetary support in the form of capital to startup companies, ailing companies and growing companies. We always strive to do our best for our clients. Presently, Corpus Prima Ventura is one of the leading and most profitable venture capital
						company in Indonesia.</p> -->

					<div class="py-2 d-none d-sm-block"></div>
					<div class="py-1"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php /*
<section class="what-sec-1 d-block d-sm-none">
	<div class="prelative container">
		<div class="row">
			<div class="col-md-35 pl-4 pb-3">
				<div class="content">
					<div class="title">
						<p><?php echo ucwords( strtolower( $model->description->title ) ) ?></p>
					</div>
					<div class="sub">
						<p>By <span><img src="<?php echo $this->assetBaseurl; ?>what-corpus.png" alt=""></span></p>
					</div>
				</div>
			</div>
			<div class="col-md-25">
				<div class="box-aneh">
					<div class="image"><img class="" src="<?php echo $this->assetBaseurl; ?><?php echo $model['image'] ?>" alt=""></div>
					<div class="bawah-gambar px-3 pt-3 d-none d-sm-block">
						<div class="row">
							<div class="col-md-5 col-xs-5 col-5">
								<img src="<?php echo $this->assetBaseurl; ?>logo-bawah-gambar.png" alt="">
							</div>
							<div class="col-md-55 col-xs-55 col-55">
								<p>Take the next steps with Corpus Capital, come contact us and talk to our consultants - let’s get your finance growing.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
*/ ?>

<section class="what-sec-2">
	<div class="prelative container">
		<div class="row">
			<div class="col-md-25">
			</div>
			<div class="col-md-35 pl-4">
				<div class="row">
					<div class="col-md-60">
						<div class="box-content">
							<div class="title-utama">
								<h3><?php echo $this->setting['services3_btm_titles'] ?></h3>
							</div>
							<div class="content-isi content-text">
								<?php echo $this->setting['services3_btm_content_top'] ?>
								<div class="clear clearfix"></div>
							</div>
							<div class="content-isi content-text">
								<?php echo $this->setting['services3_btm_content_bottom'] ?>

								<div class="py-2"></div>
								<a href="<?php echo CHtml::normalizeUrl(array('/home/business', 'lang'=>Yii::app()->language)); ?>" class="btn btn-link btns_custom_blue"><?php echo $this->setting['business_hero_title'] ?></a>
								<div class="py-2"></div>
								<div class="clear clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>

<style>
	.cover.whatwedo .text.ya{
		width:1000px !important;
	}
</style>
