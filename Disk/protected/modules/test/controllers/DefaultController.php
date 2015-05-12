<?php

class DefaultController extends Controller
{


    public function actionIndex()
	{
        //echo 'test.default.index';
		//$this->render('index');

        $a['te'] = 99999;
        $this->render('test',$a);
exit;





        //除域名外的URL
        echo Yii::app()->request->getUrl();
        echo '<br>';
        //除域名外的首页地址
        echo Yii::app()->user->returnUrl;
        echo '<br>';
        //6、//除域名外的根目录地址
        echo Yii::app()->homeUrl;
        echo '<br>';

        //在view中得到当前controller的ID方法 ：
        echo Yii::app()->getController()->id;
        echo '<br>';

        //在view中得到当前action的ID方法 ：
        echo Yii::app()->getController()->getAction()->id;
        echo '<br>';


        //yii获取ip地址 ：
        echo Yii::app()->request->userHostAddress;
        echo '<br>';

        //yii判断提交方式 ：
        echo Yii::app()->request->isPostRequest;


        echo '<br>';

        //得到当前域名:
        echo Yii::app()->request->hostInfo;


        echo '<br>';
        //得到proteced目录的物理路径 ：
        echo YII::app()->basePath;


        echo '<br>';
        //获得上一页的url以返回 ：

        echo Yii::app()->request->urlReferrer;
        echo '<br>';
        //得到当前url ：
        echo Yii::app()->request->url;
        echo '<br>';
        //得到当前home url ：
        echo Yii::app()->homeUrl;

        echo '<br>';
        //得到当前return url ：
        echo Yii::app()->user->returnUrl;
        echo '<br>';
        //项目路径 ：
        echo dirname(Yii::app()->BasePath);

        //项目目录
        echo Yii::app()->request->baseUrl;

        //只输出一个连接（url）<?php echo $this->createUrl('admin/left_menu');? > //**.php?r=admin/left_menu
        echo '<br>';
        echo Yii::app()->request->getParam('id');


        //防止重复提交：Ccontroler->refresh();


        //echo Yii::app()->clientScript->registerCoreScript('jquery');;

/*
调用YII框架中 jquery：Yii::app()->clientScript->registerCoreScript('jquery');
framework/web/js/source的js,其中registerCoreScript key调用的文件在framework/web/js/packages.php列表中可以查看
输出一组url（yii url 默认样式）
*/






    }


    public function filters()
    {
        return array(
            'accessControl',
        );
    }

        public function accessRules()
    {
        return array(
            array('allow',  // allow all users to access 'index' and 'view' actions.
                'actions'=>array('view','21'),
                'users'=>array('*'),
            ),
            array('allow', // 仅登录用户有权限操作：create,update
                'actions'=>array('create','index'),
                'users'=>array('@'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }

        //执行所有动作之前
        public function beforeAction($action)
    {
        if (parent::beforeAction($action)) {
            //check GET parameters
            if (in_array($action->id, array('update','delete'))) {
                if (empty($_GET['id']))
                    throw new CHttpException(404,'Not found');

            }
            echo 1;
            return true;
        } else
            return false;
    }



}