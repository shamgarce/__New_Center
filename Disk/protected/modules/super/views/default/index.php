<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    
    

  </head>
  <body>


<p>线上资源</p>
<p><a href="http://www.yiichina.com/doc/guide/2.0" target="_blank">http://www.yiichina.com/doc/guide/2.0</a><br>
  <a href="https://github.com/yiisoft" target="_blank">https://github.com/yiisoft</a><br>
  <a href="http://www.digpage.com/index.html" target="_blank">http://www.digpage.com/index.html</a><br>
  <a href="http://yii2.techbrood.com/guide-index.html" target="_blank">http://yii2.techbrood.com/guide-index.html</a></p>
<p><br>
  //=================================================<br>
主系统</p>
<p><a href="http://192.168.1.200:99/welcome/index" target="_blank">http://192.168.1.200:99/welcome</a><br>
  <a href="http://192.168.1.200:99/welcome/error" target="_blank">http://192.168.1.200:99/welcome/error</a><br>
  <a href="http://192.168.1.200:99/welcome/test" target="_blank">http://192.168.1.200:99/welcome/test</a></p>
<p><a href="http://192.168.1.200:99/site" target="_blank">http://192.168.1.200:99/site</a></p>
<p>模块</p>
<p><a href="http://192.168.1.200:99/super" target="_blank">http://192.168.1.200:99/super<br>
</a><a href="http://192.168.1.200:99/v1" target="_blank">http://192.168.1.200:99/v1</a><br>
  <a href="http://127.0.0.1:99/gii" target="_blank">http://127.0.0.1:99/gii</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>//=================================================</p>
<p>完整独立模块 Super</p>
<p>1 ： 用户管理<br>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>//=================================================</p>
<p></p>
<p><a href="http://192.168.1.200/v3" target="_blank">http://192.168.1.200/v3</a><br>
  <a href="http://192.168.1.200/Man" target="_blank">http://192.168.1.200/Man</a></p>
<p>&nbsp;</p>
<p><a href="http://192.168.1.200:99/admin/default/index" target="_blank">http://192.168.1.200:99/admin/default/index</a></p>
<p><a href="http://192.168.1.200:99/gii/controller/index" target="_blank">http://192.168.1.200:99/gii</a></p>
<p><a href="http://192.168.1.200:99/pm/" target="_blank">http://192.168.1.200:99/pm/</a></p>
<p>：88 - 暂时不用<br>
  //=================================================<br>
</p>
<p>：89 <br>
  //=================================================<br>
实验的新系统和框架原型</p>
<p><a href="http://192.168.1.200:90/DEO/" target="_blank"></a>：90<br>
  //================================================<br>
  主要是几个文档系统，和一个管理系统</p>
<p><a href="http://192.168.1.200:90/Doc/" target="_blank">http://192.168.1.200:90/Doc/</a><br>
  <a href="http://192.168.1.200:90/M/" target="_blank">http://192.168.1.200:90/M/</a><br>
  <a href="http://192.168.1.200:90/W/" target="_blank">http://192.168.1.200:90/W/</a></p>
<p><a href="http://192.168.1.200:90/M/" target="_blank"></a>//================================================<br>
静态资源地址</p>
<p>phpMyadmin</p>
<p><a href="http://192.168.1.200:90/T/PM/" target="_blank">http://192.168.1.200:90/T/PM/</a></p>
  <p>线上 </p>
  <p><a href="http://58.30.248.98:88/Man" target="_blank">http://58.30.248.98:88/Man</a><br>
  <a href="http://58.30.248.98:88/DEO" target="_blank">http://58.30.248.98:88/DEO</a><br>
  <a href="http://58.30.248.98:88/v1" target="_blank">http://58.30.248.98:88/v1</a></p>
  <p><a href="http://58.30.248.98:88/phpmyadmin/" target="_blank">http://58.30.248.98:88/phpmyadmin/</a></p>
  <p>&nbsp;</p>
  </body>
</html>
<div class="super-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?= __FILE__ ?></code>
    </p>
</div>
