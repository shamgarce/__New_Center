<?php

class WelcomeController extends Controller
{
	public $defaultAction = 'Index';
	/**
	 * Declares class-based actions.
	 */
	public function actionIndex()
	{
		echo 'Welcome::index';
	}
	public function actionerror()
	{
		$this->render('error', $error);
	}

	public function actiontest()
	{
		echo 'Welcome::test';
		echo '<hr>';


$post=Post::model()->find('id=:id',array(':id'=>2));
//$post=Post::model()->find(array(
//	'select'=>'title',
//	'condition'=>'id=:id',
//	'params'=>array(':id'=>1),
//	));


//$criteria=new CDbCriteria;
//$criteria->select='title,content,create_time'; // only select the ’title’ column
//$criteria->condition='id=:id';
//$criteria->params=array(':id'=>2);
//$post=Post::model()->find($criteria);

//var_dump($post);

echo $post->Customization;

//primaryKey
//    属性给出一个 AR 实例的主键值。
//    Customization
//    CActiveRecord 提供了一些占位符（placeholder）方法可被用来在子类中重写以自定义它的工作流程。
//    beforeValidate 和 afterValidate: 它们在验证执行 之前/后 被调用。
//    beforeSave 和 afterSave: 它们在保存一个 AR 实例之前/后 被调用。
//    beforeDelete 和 afterDelete: 它们在一个 AR 实例被删除 之前/后 被调用。
//    afterConstruct: 这将在每个 AR 实例被使用 new 操作符创建之后被调用。
//    beforeFind: 它在一个 AR finder 被用来执行一个查询之前被调用 （例如 find（）， findAll（））。 从版本 1.0.9 可用。
//    afterFind: 它在每个 AR 实例被创建作为一个查询结果后被调用。











//// find all rows satisfying the specified condition
//$posts=Post::model（）->findAll（$condition,$params）；
//// find all rows with the specified primary keys
//$posts=Post::model（）->findAllByPk（$postIDs,$condition,$params）；
//// find all rows with the specified attribute values
//$posts=Post::model（）->findAllByAttributes（$attributes,$condition,$params）；
//// find all rows using the specified SQL statement
//$posts=Post::model（）->findAllBySql（$sql,$params）；若没有符合条件的记录，

//$post=Post::model()->find($condition,$params);
//// find the row with the specified primary key
//$post=Post::model()->findByPk($postID,$condition,$params);
//// find the row with the specified attribute values
//$post=Post::model()->findByAttributes($attributes,$condition,$params);
//// find the first row using the specified SQL statement
//$post=Post::model()->findBySql($sql,$params);


//除了上面所说的 find和findAll 方法， 为了方便， 下面的方法也可以使用：
//// get the number of rows satisfying the specified condition
//$n=Post::model（）->count（$condition,$params）；
//// get the number of rows using the specified SQL statement
//$n=Post::model（）->countBySql（$sql,$params）；
//// check if there is at least a row satisfying the specified condition
//$exists=Post::model（）->exists（$condition,$params）；更新记录
//一个 AR 实例被字段值填充后， 我们可以改变它们并保存回它们到数据表中。
//$post=Post::model（）->findByPk（10）；


//更新一行或多行表中的记录而不预先载入它们也是可能的。 AR 提供如下方便的类水平的（class-level）方法来实现它：
//// update the rows matching the specified condition
//Post::model（）->updateAll（$attributes,$condition,$params）；
//// update the rows matching the specified condition and primary key（s）
//Post::model（）->updateByPk（$pk,$attributes,$condition,$params）；
//// update counter columns in the rows satisfying the specified conditions
//Post::model（）->updateCounters（$counters,$condition,$params）；在上面，
//
//$post=Post::model（）->findByPk（10）； // assuming there is a post whose ID is 10
//$post->delete（）； // delete the row from the database table注意， 在删除后， 此 AR 实例仍然未改变， 但相应的表记录已经不存在了。
//下面类水平的（class-level）方法被用来删除记录，而无需预先载入它们：
//// delete the rows matching the specified condition
//Post::model（）->deleteAll（$condition,$params）；
//// delete the rows matching the specified condition and primary key（s）
//Post::model（）->deleteByPk（$pk,$condition,$params）；数据验证



/*
		$post=new Post;
		echo $post->title;
		$post->title 		= 'title';
		$post->content 		= 'content';
		$post->create_time 	= time();
		echo $post->tableName();
		print_r($attributeLabels);
		$post->save();
*/

	}


}
