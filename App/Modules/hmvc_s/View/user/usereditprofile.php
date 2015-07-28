<?php
View::tplInclude('Frame/header', ['title' => 'Welcome']);
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
        <h1 class="title">用户管理</h1>
        <p class="description">用户增删改查</p>
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
<div class="panel panel-default">
    <div class="panel-heading">
    <h3 class="panel-title"><a data-toggle="panel" href="#">
    <span class="expand-icon">修改用户资料</span>
    </a></h3>
        <div class="panel-options">
            <!-- a href="#">
            <i class="linecons-cog"></i>
            </a -->
            <a data-toggle="panel" href="#">
            <span class="collapse-icon">–</span>
            <span class="expand-icon">+</span>
            </a>
            <!-- a data-toggle="reload" href="#">
            <i class="fa-rotate-right"></i>
            </a -->
            <a data-toggle="remove" href="#"> × </a>
        </div>
    </div>

    <div class="panel-body">







<form role="form" class="form-horizontal">
								
								<div class="form-group">
									<label class="col-sm-2 control-label">登陆名</label>
									
									<div class="col-sm-10">
										<div class="input-group input-group-lg input-group-minimal">
											<span class="input-group-addon">
												<i class="linecons-pencil"></i>
											</span>
											<input type="email" class="form-control no-right-border" placeholder="登陆名">
											<span class="input-group-addon">
												<i class="linecons-paper-plane"></i>
											</span>
										</div>

									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">密码</label>
									
									<div class="col-sm-10">
										<div class="input-group input-group-lg input-group-minimal">
											<span class="input-group-addon">
												<i class="linecons-pencil"></i>
											</span>
											<input type="email" class="form-control no-right-border" placeholder="密码">
											<span class="input-group-addon">
												<i class="linecons-paper-plane"></i>
											</span>
										</div>

									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">确认密码</label>
									
									<div class="col-sm-10">
										<div class="input-group input-group-lg input-group-minimal">
											<span class="input-group-addon">
												<i class="linecons-pencil"></i>
											</span>
											<input type="email" class="form-control no-right-border" placeholder="确认密码">
											<span class="input-group-addon">
												<i class="linecons-paper-plane"></i>
											</span>
										</div>

									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">真实姓名</label>
									
									<div class="col-sm-10">
										<div class="input-group input-group-lg input-group-minimal">
											<span class="input-group-addon">
												<i class="linecons-pencil"></i>
											</span>
											<input type="email" class="form-control no-right-border" placeholder="真实姓名">
											<span class="input-group-addon">
												<i class="linecons-paper-plane"></i>
											</span>
										</div>

									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">联系电话</label>
									
									<div class="col-sm-10">
										<div class="input-group input-group-lg input-group-minimal">
											<span class="input-group-addon">
												<i class="linecons-pencil"></i>
											</span>
											<input type="email" class="form-control no-right-border" placeholder="联系电话">
											<span class="input-group-addon">
												<i class="linecons-paper-plane"></i>
											</span>
										</div>
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label"></label>
									<div class="col-sm-10">
										<div class="input-group input-group-lg input-group-minimal">
                                            <div class="form-group">
                                            <button class="btn btn-success" type="submit">确定</button>
                                            <button class="btn btn-white" type="reset">重置</button>
                                            </div>

										</div>
									</div>
								</div>
								
								
                                
                                
                                
                                
                                
                                
							
			</form>









    </div>
</div>
</div>
</div>
<!-- -->        
        
			

			

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
function showAjaxModal()
{
	jQuery('#modal-7').modal('show', {backdrop: 'static'});
	
	jQuery.ajax({
		url: "/test.html",
		success: function(response)
		{
			jQuery('#modal-7 .modal-body').html(response);
		}
	});
}

$(document).ready(function(){


}) 
</script> 
    
    	<!-- Modal 7 (Ajax Modal)-->
	<div class="modal fade" id="modal-7">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Dynamic Content</h4>
				</div>
				
				<div class="modal-body">
				
					Content is loading...
					
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-info">Save changes</button>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
