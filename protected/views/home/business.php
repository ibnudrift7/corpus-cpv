<?php 
$numbs = isset( $_GET['id'] )? intval($_GET['id']) : 1;

$criteria = new CDbCriteria;
$criteria->with = array('description');
$criteria->addCondition('description.language_id = :language_id');
$criteria->params[':language_id'] = $this->languageID;
$criteria->addCondition('t.id = :id');
$criteria->params[':id'] = intval( htmlspecialchars($numbs) );
$model = Service::model()->find($criteria);

$img_cov = Yii::app()->baseUrl.'/images/static/ill-hero-about-cpv.jpg';
?>
<div class="cover whatwedo" style="background-image: url('<?php echo $img_cov ?>');">
  <div class="text ya">
  	<h2 class="what">Apply For Your Business</h2>
  </div>
</div>

<section class="breadcrumb-insides">
	<div class="prelative container">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">Home</a></li>
		    <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/whatwedo')); ?>">Our Services</a></li>
		    <li class="breadcrumb-item"><a href="javascript:;">Apply For Your Business</a></li>
		  </ol>
		  <div class="back float-right">
		  	<a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>"><span><img src="<?php echo $this->assetBaseurl; ?>arrow-back.png" alt=""></span>BACK TO PREVIOUS PAGE</a>
		  </div>
		</nav>
	</div>
</section>

<section class="contact-sec-1 pn_detail_business">
    <div class="prelative container">
        <div class="row w-100">
            <div class="col-md-30">
                <div class="content">
                    <div class="lets">
                        <p>APPLY FOR YOUR BUSINESS</p>
                    </div>
                    <div class="title">
                        <p>We are eager to know you more, schedule a meeting with Corpus and allow us to find the best solutions available to benefit your business.</p>
                    </div>
                    <!-- <div class="fill d-none">
                        <p><?php // echo $this->setting['contact_bottom_content'] ?></p>
                    </div> -->
                </div>
                <div class="py-4"></div>
                <?php 
                $n_downld = array(
                                [
                                    'name'=>'Penawaran Calon Debitur',
                                    'files'=>'penawaran-calon-debitur.pdf',
                                ],
                                [
                                    'name'=>'Form Pengajuan Pembiayaan',
                                    'files'=>'apk-logo-baru.xlsx',
                                ],
                            );
                ?>
                <div class="boxs_listing_download">
                    <?php foreach ($n_downld as $key => $value): ?>
                    <div class="items mb-3">
                        <div class="row">
                            <div class="col col-md-5">
                                <div class="bxl_img"><img src="<?php echo $this->assetBaseurl ?>img-icon-pdfs.png" alt="" class="img img-fluid"></div>
                            </div>
                            <div class="col">
                                <div class="desc_info">
                                    <p><?php echo $value['name'] ?></p>
                                    <a download href="<?php echo Yii::app()->baseUrl.'/document/'. $value['files'] ?>" class="btn btn-link p-0 btn_ncall">Download</a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
                <div class="clear"></div>

                <div class="clearfix"></div>
            </div>
            <div class="col-md-30">
                <!-- <div class="image"><img class="w-100" src="<?php echo $this->assetBaseurl; ?>Layer-33.jpg" alt=""></div> -->
            </div>
        </div>
    </div>
</section>

<style>
	.cover.whatwedo .text.ya{
		width:1000px !important;
	}
</style>
