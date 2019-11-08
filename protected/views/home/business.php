<?php 
$numbs = isset( $_GET['id'] )? intval($_GET['id']) : 1;

$criteria = new CDbCriteria;
$criteria->with = array('description');
$criteria->addCondition('description.language_id = :language_id');
$criteria->params[':language_id'] = $this->languageID;
$criteria->addCondition('t.id = :id');
$criteria->params[':id'] = intval( htmlspecialchars($numbs) );
$model = Service::model()->find($criteria);

$img_cov = Yii::app()->baseUrl.'/images/static/'. $this->setting['business_hero_image'];
?>
<div class="cover whatwedo" style="background-image: url('<?php echo $img_cov ?>');">
  <div class="text ya">
  	<h2 class="what"><?php echo $this->setting['business_hero_title'] ?></h2>
  </div>
</div>

<section class="breadcrumb-insides">
	<div class="prelative container">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">Home</a></li>
		    <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/whatwedo')); ?>">Our Services</a></li>
		    <li class="breadcrumb-item"><a href="javascript:;"><?php echo $this->setting['business_hero_title'] ?></a></li>
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
                        <p><?php echo strtoupper( $this->setting['business_hero_title']) ?></p>
                    </div>
                    <div class="title">
                        <?php echo $this->setting['business_1_content'] ?>
                    </div>
                    <!-- <div class="fill d-none">
                        <p><?php // echo $this->setting['contact_bottom_content'] ?></p>
                    </div> -->
                </div>
                <div class="py-4"></div>
                <?php 
                $n_downld = array(
                                [
                                    'name'=>'Persyaratan Calon Debitur',
                                    'files'=>'penawaran-calon-debitur.pdf',
                                ],
                                [
                                    'name'=>'Form Pengajuan Pembiayaan',
                                    'files'=>'apk-logo-baru.xlsx',
                                ],
                            );
                // cal data
                $criteria = new CDbCriteria;
                $criteria->order = 't.sort ASC';
                $data_down = Pdf::model()->findAll($criteria);
                ?>
                <div class="boxs_listing_download">
                    <?php foreach ($data_down as $key => $value): ?>
                    <div class="items mb-3">
                        <div class="row">
                            <div class="col-10 col-md-5">
                                <div class="bxl_img"><img src="<?php echo $this->assetBaseurl ?>pdfs-512.png" alt="" class="img img-fluid"></div>
                            </div>
                            <div class="col">
                                <div class="desc_info">
                                    <?php if (Yii::app()->language == 'en'): ?>
                                    <p><?php echo $value->nama_en ?></p>    
                                    <?php else: ?>
                                    <p><?php echo $value->nama_id ?></p>
                                    <?php endif ?>
                                    <a download href="<?php echo Yii::app()->baseUrl.'/images/pdf/'. $value->file ?>" class="btn btn-link p-0 btn_ncall">Download</a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
					<div class="formnya">
                        <?php echo $this->setting['business_2_content'] ?>
						<!-- <p>
						You can download the form to fill it then scan and send it to us via email <a href="mailto:admin.cpv@corpus.co.id">admin.cpv@corpus.co.id</a> or Whatsapp at<a href="https://wa.me/62811318553"> 0811318553 </a</p> -->
					</div>
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
	.formnya p a{
			color: #333333;
	}
</style>
