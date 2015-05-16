 <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

<h2 class="sub-header">Section title</h2>
          <div class="table-responsive">
            <h1></h1>








 <h1>Memcache,Redis,MongoDB（数据缓存系统）方案对比与分析          <a class="aredit" relid=119><span style="font-size:11px;background-color:#006600;color:#DFC5A4;">编辑</span></a>
            </h1>

<h2><a name="id120">一、问题：</a>         <a class="aredit" relid=120><span style="font-size:11px;background-color:#006600;color:#DFC5A4;">编辑</span></a>
        </h2>
<div>
 <span><span ><span >数据库表数据量极大（千万条），要求让服务器更加快速地响应用户的需求。</span></span></span>
</div>
<div>
 <span> </span>
 <div>
  <span></span>
 </div>
</div>
<h2><a name="id121">二、解决方案：</a>         <a class="aredit" relid=121><span style="font-size:11px;background-color:#006600;color:#DFC5A4;">编辑</span></a>
        </h2>
<ol>
 <li>
  <span> 通过高速服务器Cache缓存数据库数据</span>
 </li>
 <li>
  <span>内存数据库</span>
 </li>
</ol>
<div>
 <div>
  <span><span> （这里仅从数据缓存方面考虑，当然，后期可以采用Hadoop+HBase+Hive等分布式存储分析平台）</span></span>
 </div>
</div>
<h2><a name="id122">三、主流解Cache和数据库对比：</a>         <a class="aredit" relid=122><span style="font-size:11px;background-color:#006600;color:#DFC5A4;">编辑</span></a>
        </h2>
<p>&nbsp;</p>
<p>
 上述技术基本上代表了当今在数据存储方面所有的实现方案，其中主要涉及到了普通关系型数据库（MySQL/PostgreSQL），NoSQL数据库(MongoDB)，内存数据库（Redis），内存Cache（Memcached），我们现在需要的是对大数据表仍保持高效的查询速度，普通关系型数据库是无法满足的。而MongoDB其实只是一种非关系型数据库，其优势在于可以存储海量数据，具备强大的查询功能，因此不宜用于缓存数据的场景。
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
 <br />
均衡客户端请求，各个节点可以交流，可拓展行、可维护性更强大。<br />
<br />
来自：http://blog.csdn.net/suifeng3051/article/details/23739295</p>
</div>
        </div>