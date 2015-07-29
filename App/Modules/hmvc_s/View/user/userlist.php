<?php
View::tplInclude('Frame/header', $data);
?>



<body class="page-body">
<div class="page-loading-overlay"><div class="loader-2"></div></div>
<?php

View::tplInclude('Frame/setting', $data);
?>


<?php

View::tplInclude('Frame/headbar', $data);
?>

	
	
	
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
<?php
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
<div class="panel panel-default collapsed">
    <div class="panel-heading">
    <h3 class="panel-title"><a class="btn btn-info btn-lg btn-icon icon-left" data-toggle="panel" href="#">
    <span class=" expand-icon">添加新用户</span></a></h3>
    
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




<div class="col-sm-12">

<div class="panel panel-default">
    <div class="panel-heading">
    <h3 class="panel-title">用户列表</h3>
        <div class="panel-options">
            <a  onclick="showAjaxModal();" href="javascript:;">
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
   

<table class="table table-model-2 table-hover">
<thead>
<tr>
<th>id</th>
<th>登陆名</th>
<th>真实姓名</th>
<th>用户组</th>
<th>注册时间</th>
<th>登陆时间</th>
<th>登陆ip</th>
<th width=70>无效？</th>
<th width=300>操作</th>
</tr>
</thead>
<tbody>
<tr>
<td>#</td>
<td>Name<span class="label label-success">New2</span></td>
<td>Address</td>
<td>#</td>
<td>Name</td>
<td>Address</td>
<td>#</td>
<td><input class="iswitch iswitch-red" type="checkbox" checked=""></td>
<td>
<a class="btn btn-primary btn-single btn-sm  btn-icon icon-left" >Show Me</a>
<a class="btn btn-secondary btn-sm btn-icon icon-left" onClick="showAjaxModal();" href="javascript:;"> Edit </a>
<a class="btn btn-danger btn-sm btn-icon icon-left" href="#"> Delete </a>
<a class="btn btn-info btn-sm btn-icon icon-left" href="#"> Profile </a>

</td>

</tr>

<tr>
  <td colspan="9" align="right">
 <!-- 
  <div id="example-1_paginate" class="dataTables_paginate paging_simple_numbers">
<ul class="pagination">
<li id="example-1_previous" class="paginate_button previous disabled" aria-controls="example-1" tabindex="0">
<a href="#">Previous</a>
</li>
<li class="paginate_button active" aria-controls="example-1" tabindex="0">
<a href="#">1</a>
</li>
<li class="paginate_button " aria-controls="example-1" tabindex="0">
<a href="#">2</a>
</li>
<li class="paginate_button " aria-controls="example-1" tabindex="0">
<a href="#">3</a>
</li>
<li class="paginate_button " aria-controls="example-1" tabindex="0">
<a href="#">4</a>
</li>
<li class="paginate_button " aria-controls="example-1" tabindex="0">
<a href="#">5</a>
</li>
<li class="paginate_button " aria-controls="example-1" tabindex="0">
<a href="#">6</a>
</li>
<li id="example-1_next" class="paginate_button next" aria-controls="example-1" tabindex="0">
<a href="#">Next</a>
</li>
</ul>
</div>
-->  
  </td>
  </tr>

</tbody>
</table>
   
   
   
    </div>
</div>
</div>



</div>
<!-- -->        
        
			

			

<?php
View::tplInclude('Frame/footer', $data);
?>
	  </div>
		
			

		
	</div>
	
	
<?php
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
