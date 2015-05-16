<!-- 先引用main.php布局文件， -->
<?php $this->beginContent('@app/views/layouts/main.php');?>
<div class="left_column">
  <?= $content ?>
</div>

<div class="right_column">
<!-- 在右侧共用的统一数据 -->
</div>
<?php $this->endContent();?>