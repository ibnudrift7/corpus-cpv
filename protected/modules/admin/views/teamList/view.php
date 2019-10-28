<?php
$this->breadcrumbs=array(
	'Team Lists'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List TeamList', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add TeamList', 'icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Edit TeamList', 'icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete TeamList', 'icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View TeamList #<?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'image',
		'title',
		'position_en',
		'position_id',
		'content',
		'sortings',
		'actives',
	),
)); ?>
