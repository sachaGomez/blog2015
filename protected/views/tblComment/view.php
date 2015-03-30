<?php
/* @var $this TblCommentController */
/* @var $model TblComment */

$this->breadcrumbs=array(
	'Tbl Comments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblComment', 'url'=>array('index')),
	array('label'=>'Create TblComment', 'url'=>array('create')),
	array('label'=>'Update TblComment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblComment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblComment', 'url'=>array('admin')),
);
?>

<h1>View TblComment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'content',
		'status',
		'create_time',
		'author',
		'email',
		'url',
		'post_id',
	),
)); ?>
