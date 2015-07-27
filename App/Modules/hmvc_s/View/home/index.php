<?php
$data = array(
'title' => 'Welcome',  //设置title变量为Welcome
);
View::tplInclude('Frame/header', $data);
?>



<body class="page-body">
<div class="page-loading-overlay"><div class="loader-2"></div></div>
	<?php
$data = array(
'title' => 'Welcome',  //设置title变量为Welcome
);
View::tplInclude('Frame/setting', $data);
?>

	
		<?php
$data = array(
'title' => 'Welcome',  //设置title变量为Welcome
);
View::tplInclude('Frame/headbar', $data);
?>

	
	
	
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
<?php
$data = array(
'title' => 'Welcome',  //设置title变量为Welcome
);
View::tplInclude('Frame/sitebar', $data);
?>
		

		
		<div class="main-content">
        
        
        
<!-- path nav -->
<div class="page-title">
    <div class="title-env">
        <h1 class="title">DataTable</h1>
        <p class="description">Dynamic table variants with pagination and other controls</p>
    </div>

    <div class="breadcrumb-env">
        <ol class="breadcrumb bc-1">
        <li>
            <a href="dashboard-1.html">
            <i class="fa-home"></i>
            Home
            </a>
        </li>
        <li>
            <a href="tables-basic.html">Tables</a>
        </li>
        <li class="active">
            <strong>Data Tables</strong>
        </li>
        </ol>
    </div>
</div>        
<!-- path nav end -->
        
        
<!-- row -->
<div class="row">






<div class="col-sm-12">
								
<!-- Table Model 2 -->
<strong>Table Model 2</strong>

<table class="table table-model-2 table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
        </tr>
    </thead>
    
    <tbody>
        <tr>
            <td>1</td>
            <td>Arlind</td>
            <td>Nushi</td>
        </tr>
        
        <tr>
            <td>2</td>
            <td>Art</td>
            <td>Ramadani</td>
        </tr>
        
        <tr>
            <td>3</td>
            <td>Filan</td>
            <td>Fisteku</td>
        </tr>
    </tbody>
</table>

</div>







<div class="col-sm-12">

<div class="panel panel-default">
    <div class="panel-heading">
    <h3 class="panel-title">Inline Form</h3>
        <div class="panel-options">
            <a href="#">
            <i class="linecons-cog"></i>
            </a>
            <a data-toggle="panel" href="#">
            <span class="collapse-icon">–</span>
            <span class="expand-icon">+</span>
            </a>
            <a data-toggle="reload" href="#">
            <i class="fa-rotate-right"></i>
            </a>
            <a data-toggle="remove" href="#"> × </a>
        </div>
    </div>

    <div class="panel-body">
    <form class="form-inline" role="form">
        <div class="form-group">
        <input class="form-control" type="text" placeholder="Username" size="25">
        </div>
    </form>
    </div>
</div>
</div>
</div>
<!-- -->        
        
					
			<script>
			jQuery(document).ready(function($)
			{
				$('a[href="#layout-variants"]').on('click', function(ev)
				{
					ev.preventDefault();
					
					var win = {top: $(window).scrollTop(), toTop: $("#layout-variants").offset().top - 15};
					
					TweenLite.to(win, .3, {top: win.toTop, roundProps: ["top"], ease: Sine.easeInOut, onUpdate: function()
						{
							$(window).scrollTop(win.top);
						}
					});
				});
			});
			</script>
			
			<div class="jumbotron">
				<h1>首页</h1>
				
<p>
<pre>
404
login
logout
</pre>
菜单设置
<pre>
用户管理
接口管理

--针对个人的临时设置
1  ： 显示帮助信息
2 ： 
Notifications

Messages
Events
Updates
SeverUptims



--我的

message
notifications


设置
修改信息
修改密码
退出登陆
锁定
</pre>

                
                
                    
                    </p>
				
				<br />
				<!-- a class="btn btn-primary btn-lg" href="#layout-variants" role="button">See Layout Variants</a -->
			</div>
			
			<!-- h3 id="layout-toggles">
				Layout Toggles
				<br />
				<small>Links that will automatically collapse or expand side panels, chat or user settings pane.</small>
			</h3 -->
           
			<br />
			
			<!-- 
			<div class="row">
				
				<div class="col-xs-3 text-muted">Link</div>
				<div class="col-xs-9 text-muted">Code</div>
				
				<div class="vspacer v3"></div>
			
				<div class="col-sm-3">
					<a href="#" class="btn btn-secondary btn-block btn-icon btn-icon-standalone text-left" data-toggle="sidebar">
						<i class="fa-bars"></i>
						<span>Toggle Sidebar</span>
					</a>
				</div>
				<div class="col-sm-9">
					<pre>&lt;a href=&quot;#&quot; data-toggle=&quot;sidebar&quot;&gt;Toggle Sidebar&lt;/a&gt;</pre>
				</div>
				
				<div class="clearfix"></div>
				<div class="vspacer v4"></div>
			
				<div class="col-sm-3">
					<a href="#" class="btn btn-secondary btn-block btn-icon btn-icon-standalone text-left" data-toggle="chat">
						<i class="fa-comment-o"></i>
						<span>Toggle Chat</span>
					</a>
				</div>
				<div class="col-sm-9">
					<pre>&lt;a href=&quot;#&quot; data-toggle=&quot;chat&quot;&gt;Toggle Chat&lt;/a&gt;</pre>
				</div>
				
				<div class="clearfix"></div>
				<div class="vspacer v4"></div>
			
				<div class="col-sm-3">
					<a href="#" class="btn btn-secondary btn-block btn-icon btn-icon-standalone text-left" data-toggle="settings-pane">
						<i class="linecons-user"></i>
						<span>Toggle Settings Pane</span>
					</a>
				</div>
				<div class="col-sm-9">
					<pre>&lt;a href=&quot;#&quot; data-toggle=&quot;chat&quot;&gt;Toggle Settings Pane&lt;/a&gt;</pre>
				</div>
			
				
				<div class="clearfix"></div>
				<div class="vspacer v4"></div>
			
				<div class="col-sm-3">
					<a href="#" class="btn btn-secondary btn-block btn-icon btn-icon-standalone text-left" data-toggle="settings-pane" data-animate="true">
						<i class="linecons-cog"></i>
						<span>Settings Pane /w Animation</span>
					</a>
				</div>
				<div class="col-sm-9">
					<pre>&lt;a href=&quot;#&quot; data-toggle=&quot;chat&quot; data-animate=&quot;true&quot;&gt;Toggle Settings Pane&lt;/a&gt;</pre>
				</div>
			
				
				<div class="clearfix"></div>
				<div class="vspacer v4"></div>
			
				<div class="col-sm-3">
					<a href="#" class="btn btn-secondary btn-block btn-icon btn-icon-standalone text-left" rel="go-top">
						<i class="fa-arrow-up"></i>
						<span>Go to Top</span>
					</a>
				</div>
				<div class="col-sm-9">
					<pre>&lt;a href=&quot;#&quot; rel=&quot;go-top&quot;&gt;Go to Top&lt;/a&gt;</pre>
				</div>
			
			</div>
			 -->
			
			<br />
			<br />
			
			<!-- h3 id="layout-variants">
				Layout Variants
				<br />
				<small>9 different layout types with fixed or static scrolling panels</small>
			</h3 -->
		  <?php
$data = array(
'title' => 'Welcome',  //设置title变量为Welcome
);
View::tplInclude('Frame/footer', $data);
?>
	  </div>
		
			

		
	</div>
	
	
	<?php
$data = array(
'title' => 'Welcome',  //设置title变量为Welcome
);
View::tplInclude('Frame/footerjs', $data);
?>



    
<script language="javascript"> 
$(document).ready(function(){


}) 
</script> 
    
    

</body>
</html>