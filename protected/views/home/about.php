<div class="cover" style="background-image: url('<?php echo Yii::app()->baseUrl.'/images/static/'. $this->setting['about_hero_image']; ?>');">
  <div class="text"><h2><?php echo $this->setting['about_hero_title'] ?></h2></div>
</div>

<section class="breadcrumb-insides">
	<div class="prelative container">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">Home</a></li>
		    <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang'=>Yii::app()->language)); ?>"><?php echo $this->setting['about_hero_title'] ?></a></li>
		  </ol>
		  <div class="back float-right">
		  	<a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>"><span><img src="<?php echo $this->assetBaseurl; ?>arrow-back.png" alt=""></span>BACK TO PREVIOUS PAGE</a>
		  </div>
		</nav>
	</div>
</section>

<section class="about-sec-1">
	<div class="prelative container">
		<div class="box-container">
			<div class="row">
				<div class="col-md-30">
					<div class="box-content">
						<div class="title">
							<h4><?php echo $this->setting['about2_small_title'] ?></h4>
						</div>
						<div class="sub">
							<p><?php echo $this->setting['about2_subtitle'] ?></p>
						</div>
						<div class="content">
							<?php echo $this->setting['about_content'] ?>
						</div>
					</div>
				</div>
				<div class="col-md-30">
					<div class="image"><img class="w-100 img img-fluid" src="<?php echo Yii::app()->baseUrl.'/images/static/'. $this->setting['about2_pictures']; ?>" alt=""></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-sec-2">
	<div class="prelative container py-5">
		<div class="pt-5">	</div>
		<div class="box-outer">	
			<div class="row no-gutters">
				<div class="col-md-30 order-2 order-sm-1">
					<div class="box-left-1">
						<div class="content">
							<div class="title">
								<p>What Made Us Unique</p>
							</div>
							<div class="isi">
								The main difference with Corpus Prima Ventura from other companies under Corpus Group is that we have capital component. Corpus Prima Ventura is not providing 100% loan, we require the client to have at least 40% from their companies needed to loan.</div>
						</div>
					</div>
				</div>
				<div class="col-md-30 order-1 order-sm-2">
					<div class="box-right-1"><img class="w-100 img img-fluid" src="<?php echo Yii::app()->baseUrl.'/images/static/'. $this->setting['about3_pictures_1']; ?>" alt=""></div>
				</div>
			</div>
		</div>
		<div class="pt-5"></div>
		<div class="box-outer">	
			<div class="row no-gutters">
				<div class="col-md-30">
					<div class="box-left-2"><img class="w-100 img img-fluid" src="<?php echo Yii::app()->baseUrl.'/images/static/'. $this->setting['about3_pictures_2']; ?>" alt=""></div>
				</div>
				<div class="col-md-30">
					<div class="box-right-2">
						<div class="content">
							<div class="title">
								<p>Minimum Capital Percentage</p>
							</div>
							<div class="isi">
								Compared with other competitors, most of them do not have a required minimum capital percentage. At a glance, this seems unimportant, however this has a great effect on the company's performance due to the percentage size of the loan given.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pb-5"></div>
		<div class="box-outer">
			<div class="row no-gutters">
				<div class="col-md-30 order-2 order-sm-1">
					<div class="box-left-1">
						<div class="content">
							<div class="title">
								<p>We Work Alongside With You</p>
							</div>
							<div class="isi">
								Apart from having the required minimum of 40% from their companies, we have option to place our personnel or team in the client's company. The purpose is to ease up the supervision from misuse of funds and consultation.
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-30 order-1 order-sm-2">
					<div class="box-right-1"><img class="w-100 img img-fluid" src="<?php echo Yii::app()->baseUrl.'/images/static/nx_banners_corp_4.jpg'; ?>" alt=""></div>
				</div>
			</div>
		</div>
		<div class="pb-5"></div>
	</div>
</section>

<section class="about-sec-3">
	<div class="prelative container">
		<div class="row">
			<div class="col-md-30">
				<div class="visi-misi">
					<div class="title">
						<p>Vision</p>
					</div>
					<div class="content">
						<?php echo $this->setting['about4_visi'] ?>
					</div>
				</div>
			</div>
			<div class="col-md-30">
				<div class="py-2 d-block d-sm-none"></div>
				<div class="visi-misi">
					<div class="title">
						<p>Mission</p>
					</div>
					<div class="content">
						<?php echo $this->setting['about4_misi'] ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-sec-4">
	<div class="prelative container">
		<div class="row">
			<div class="col-md-60">
				<div class="head">
					<div class="title">
						<p><?php echo $this->setting['about5_title'] ?></p>
					</div>
					<div class="sub">
						<p><?php echo $this->setting['about5_subtitle'] ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="prelative container box-about">
		<div class="box-pejabat">
			<div class="row justify-content-md-center">
				<?php 
				$m_team = TeamList::model()->findAll();
				?>
				<?php foreach ($m_team as $key => $value): ?>
				<div class="col-md-12 pb-4">
					<div class="box-items d-block mx-auto text-center">
						<div class="image"><img class="img img-fluid" src="<?php echo Yii::app()->baseUrl.'/images/team/'. $value->image; ?>" alt=""></div>
						<div class="nama">
							<p><?php echo $value->title ?></p>
						</div>
						<div class="kat">
							<?php if (Yii::app()->language == 'en'): ?>
							<p><?php echo $value->position_en ?></p>
							<?php else: ?>
							<p><?php echo $value->position_id ?></p>
							<?php endif ?>
						</div>
					</div>
				</div>
				<?php endforeach ?>

				<!-- <div class="col-md-12 pb-4">
					<div class="image"><img class="w-100" src="<?php echo $this->assetBaseurl; ?>pem1.jpg" alt=""></div>
					<div class="nama">
						<p>Kristhiono Gunarso</p>
					</div>
					<div class="kat">
						<p>President Director</p>
					</div>
				</div>
				<div class="col-md-12 pb-4">
					<div class="image"><img class="w-100" src="<?php echo $this->assetBaseurl; ?>pem3.jpg" alt=""></div>
					<div class="nama">
						<p>Jos Tjahjono</p>
					</div>
					<div class="kat">
						<p>Marketing Director</p>
					</div>
				</div>
				<div class="col-md-12 pb-4">
					<div class="image"><img class="w-100" src="<?php echo $this->assetBaseurl; ?>pem7.jpg" alt=""></div>
					<div class="nama">
						<p>Lisye Sinanto</p>
					</div>
					<div class="kat">
						<p>Operational Director</p>
					</div>
				</div>
				<div class="col-md-12 pb-4">
					<div class="image"><img class="w-100" src="<?php echo $this->assetBaseurl; ?>direksi.jpg" alt=""></div>
					<div class="nama">
						<p>Melisa Natalie</p>
					</div>
					<div class="kat">
						<p>Lending and Project Director</p>
					</div>
				</div> -->
			</div>
			<!-- <div class="row pb-5">
				<div class="col-md-17">
					<div class="image"><img src="<?php echo $this->assetBaseurl; ?>pem2.jpg" alt=""></div>
				</div>
				<div class="col-md-43">
					<div class="content-right">
						<div class="nama">
							<p>Meidy Holiangu</p>
						</div>
						<div class="kat">
							<p>PRESIDENT DIRECTOR</p>
						</div>
						<div class="content">
							<p>Whether you're just starting to know more about us, or planning for a detailed financial preparations, we're here and there’s a place here in Corpus for you. If you're ready to talk about your options and possibilities, contact us now. Whether you're just starting to know more about us, or planning for a detailed financial preparations, we're here and there’s a place here in Corpus for you. If you're ready to talk about your options and possibilities, contact us now.  </p>
						</div>
					</div>
				</div>
			</div>
			<div class="row pb-5">
				<div class="col-md-17">
					<div class="image"><img src="<?php echo $this->assetBaseurl; ?>pem1.jpg" alt=""></div>
				</div>
				<div class="col-md-43">
					<div class="content-right">
						<div class="nama">
							<p>Kristhiono Gunarso</p>
						</div>
						<div class="kat">
							<p>PRESIDENT DIRECTOR</p>
						</div>
						<div class="content">
							<p>Whether you're just starting to know more about us, or planning for a detailed financial preparations, we're here and there’s a place here in Corpus for you. If you're ready to talk about your options and possibilities, contact us now. Whether you're just starting to know more about us, or planning for a detailed financial preparations, we're here and there’s a place here in Corpus for you. If you're ready to talk about your options and possibilities, contact us now.  </p>
						</div>
					</div>
				</div>
			</div>
			<div class="row pb-5">
				<div class="col-md-17">
					<div class="image"><img src="<?php echo $this->assetBaseurl; ?>pem3.jpg" alt=""></div>
				</div>
				<div class="col-md-43">
					<div class="content-right">
						<div class="nama">
							<p>Jos Tjahjono</p>
						</div>
						<div class="kat">
							<p>Domestic Funding & Digital Brranding Director</p>
						</div>
						<div class="content">
							<p>Whether you're just starting to know more about us, or planning for a detailed financial preparations, we're here and there’s a place here in Corpus for you. If you're ready to talk about your options and possibilities, contact us now. Whether you're just starting to know more about us, or planning for a detailed financial preparations, we're here and there’s a place here in Corpus for you. If you're ready to talk about your options and possibilities, contact us now.  </p>
						</div>
					</div>
				</div>
			</div>
			<div class="row pb-5">
				<div class="col-md-17">
					<div class="image"><img src="<?php echo $this->assetBaseurl; ?>pem7.jpg" alt=""></div>
				</div>
				<div class="col-md-43">
					<div class="content-right">
						<div class="nama">
							<p>Lisye Sinanto</p>
						</div>
						<div class="kat">
							<p>Operational Director</p>
						</div>
						<div class="content">
							<p>Whether you're just starting to know more about us, or planning for a detailed financial preparations, we're here and there’s a place here in Corpus for you. If you're ready to talk about your options and possibilities, contact us now. Whether you're just starting to know more about us, or planning for a detailed financial preparations, we're here and there’s a place here in Corpus for you. If you're ready to talk about your options and possibilities, contact us now.  </p>
						</div>
					</div>
				</div>
			</div>
			<div class="row pb-5">
				<div class="col-md-17">
					<div class="image"><img src="<?php echo $this->assetBaseurl; ?>direksi.jpg" alt=""></div>
				</div>
				<div class="col-md-43">
					<div class="content-right">
						<div class="nama">
							<p>Melisa Natalie</p>
						</div>
						<div class="kat">
							<p>Landing and Project Director</p>
						</div>
						<div class="content">
							<p>Whether you're just starting to know more about us, or planning for a detailed financial preparations, we're here and there’s a place here in Corpus for you. If you're ready to talk about your options and possibilities, contact us now. Whether you're just starting to know more about us, or planning for a detailed financial preparations, we're here and there’s a place here in Corpus for you. If you're ready to talk about your options and possibilities, contact us now.  </p>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
	<div class="pb-5 d-none d-sm-block"></div>
</section>
<!---->
<!--<section class="about-sec-5">-->
<!--	<div class="prelative container">-->
<!--		<div class="title-head">-->
<!--			<p>CORPORATE STRUCTURE</p>-->
<!--		</div>-->
<!--		<div class="subtitle-head">-->
<!--			<p>Corpus Corporation Structure</p>-->
<!--		</div>-->
<!--		<div class="image"><img class="w-100" src="--><?php //echo $this->assetBaseurl; ?><!--Layer-25.png" alt=""></div>-->
<!--	</div>-->
<!--</section>-->
<!---->
<!--<section class="about-sec-6">-->
<!--	<div class="prelative container">-->
<!--		<div class="subtitle-head">-->
<!--			<p>Corpus Organisation Structure</p>-->
<!--		</div>-->
<!--		<div class="image"><img class="w-100" src="--><?php //echo $this->assetBaseurl; ?><!--Layer-27.png" alt=""></div>-->
<!--	</div>-->
<!--</section>-->
