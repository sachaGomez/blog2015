<?php
/* @var $this TblCommentController */
/* @var $model TblComment */

$this->breadcrumbs=array(
	'Tbl Comments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblComment', 'url'=>array('index')),
	array('label'=>'Create TblComment', 'url'=>array('create')),
	array('label'=>'View TblComment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblComment', 'url'=>array('admin')),
);
?>

<h1>Update TblComment <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>