<?php
/* @var $this TblPostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Posts',
);

$this->menu=array(
	array('label'=>'Create TblPost', 'url'=>array('create')),
	array('label'=>'Manage TblPost', 'url'=>array('admin')),
);
?>

<h1>Tbl Posts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
