<section class="home-sec-1">
	<div class="prelative container">
		<div class="box-content">
			<div class="row">
				<div class="col-md-30">
					<div class="title">
						<h4>Build your business with good capital and cash flow. Be ready to success with optimistic mind, as we will be at your back.</h4>
					</div>
					<div class="subtitle">
						<?php $ln_contact = CHtml::normalizeUrl(array('/home/contactus', 'lang'=>Yii::app()->language)); ?>
						<p>Besides supplying you with corporate loans, we will work with you and take a close and careful look at the financial needs of your business. We perfectly tailor the finance solution that you need.If you're ready to talk about your options and possibilities, contact us now.</p>
					</div>
				</div>
				<div class="col-md-30">
					<div class="tombol">
						<a class="call" href="<?php echo $this->setting['home_section1_link_schedule'] ?>"><?php echo $this->setting['home_section1_link_schedule_text'] ?></a>
						<p><a class="tombol1" href="http://wa.me/623199015353"><?php echo $this->setting['home_section1_link_schedule_text_info'] ?></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section class="outers-box-videos">
	<div class="box-videos-nyoutubes">
		<div class="prelatife container">
			<div class="inner-video">
				<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/xh4k0oZBoDc' frameborder='0' allowfullscreen></iframe></div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</section> -->

<section class="home-sec-2" id="div1">

	<div class="prelative container">
		<div class="box-content">
			<div class="row">
				<div class="col-md-60">
					<img src="<?php echo $this->assetBaseurl; ?>logo-sec-2.png" alt="">
					<div class="title">
						<p>YOUR PARTNER IN CAPITAL FUNDING</p>
					</div>
					<div class="sub">
						<p>Why You Need Corpus Prima Ventura</p>
					</div>
					<div class="content">
						Corpus Prima Ventura have successfully helped hundreds of satisfied business in Indonesia. As we know that every busines is unique on it’s own, each solution is customised and therefore we will find the loan that fits your business. With secure financing, good planning and peace of mind, we’ll help you to build your way to success. Our process is very simple:<br><strong>Assess Your Need - Analyze Assets - Get You Funding</strong>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="py-4 my-3"></div>
<div class="separators_blue"></div>

<section class="home-sec-our d-none">
	<div class="prelative container">
		<div class="box-our-service">
			<div class="title">
				<p><?php echo Tt::t('front', 'Case Studies') ?></p>
			</div>
			<div class="box-content-outer">
				<div class="box-content-inner">
					<div class="row">
						<div class="col-md-20">
							<div class="box-isi-content">
								<p>I've had great success with Corpus Prima Ventura, thanks to the knowledgeable staff who make every effort to find the right solutions for my business. They are very attentive to my needs and get things done quickly. True professionals.</p>
								<h3>Jerry Brilianto</h3>
								<h4>Alfa Midi Franchisee</h4>
							</div>
						</div>
						<div class="col-md-20">
							<div class="box-isi-content">
								<p>Corpus Prima Ventura trully understoods my situation and partnered me up with a perfect solution freeing up more than IDR 800 million of cash flow. Thank you Corpus for your ability to help business owners like me, I highly recommend your services.</p>
								<h3>Anthony Layola</h3>
								<h4>Dewani Digital Printing</h4>
							</div>
						</div>
						<div class="col-md-20">
							<div class="box-isi-content">
								<p>Excellent service! Highly recommended! Funding in less than a couple of days! If you need funding, don't go to the bank, go to Corpus Prima Ventura!</p>
								<h3>David Anis</h3>
								<h4>Alfa Midi Franchisee</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box-cont">
				<a href="<?php echo CHtml::normalizeUrl(array('/home/whatwedo', 'lang'=>Yii::app()->language)); ?>" target="_blank" rel=""><?php echo Tt::t('front', 'Learn More About Our Services'); ?></a>
				<a href="<?php echo CHtml::normalizeUrl(array('/home/case', 'lang'=>Yii::app()->language)); ?>" target="_blank" rel=""><?php echo Tt::t('front', 'View More Case Studies'); ?></a>
				<div class="py-4"></div>
			</div>
		</div>
	</div>
</section>

<section class="home-sec-3">
	<div class="prelative container">
		<div class="row">
			<div class="col-md-60">
				<div class="clear"></div>
			</div>
		</div>
	</div>
</section>

<section class="home-sec-4">
	<div class="prelative container">
		<div class="box-header">
			<div class="row">
				<div class="col-md-60">
					<div class="title">
						<p><?php echo $this->setting['home_section2_smalltitle'] ?></p>
					</div>
					<div class="sub">
						<p><?php echo $this->setting['home_section2_title'] ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="box-row-content">
			<div class="row">
				<?php foreach ($dataBlog->getData() as $key => $value): ?>
	            <div class="col-md-20">
	                <div class="box-content-inner">
	                    <div class="image">
	                        <a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id'=> $value->id, 'lang'=>Yii::app()->language)); ?>">
	                            <img class="w-100" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(403,268, '/images/blog/'.$value->image , array('method' => 'resize', 'quality' => '90')) ?>" alt="">
	                        </a>
	                    </div>
	                    <div class="tanggal">
	                        <p><i class="fa fa-calendar"></i> &nbsp;<?php echo date("d F Y", strtotime($value->date_input)); ?></p>
	                    </div>
	                    <div class="content">
	                        <a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id'=> $value->id, 'lang'=>Yii::app()->language)); ?>">
	                            <p><?php echo $value->description->title ?></p>
	                        </a>
	                    </div>
	                    <div class="read-more">
	                        <a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id'=> $value->id, 'lang'=>Yii::app()->language)); ?>">Read More</a>
	                    </div>
	                </div>
	            </div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<div class="pb-5"></div>
	<div class="pb-5 d-none d-sm-block"></div>
</section>
