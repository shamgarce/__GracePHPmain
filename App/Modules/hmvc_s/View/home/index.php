<?php
View::tplInclude('Frame/header', ['title' => $title]);
?>



<body class="page-body">
<div class="page-loading-overlay"><div class="loader-2"></div></div>
<?php
View::tplInclude('Frame/setting',  ['title' => $title]);
?>

	
<?php
View::tplInclude('Frame/headbar',  ['title' => $title]);
?>

	
	
	
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
<?php
View::tplInclude('Frame/sitebar',['title' => $title]);
?>
		

		
		<div class="main-content">
        
        
        
<!-- path nav -->
<div class="page-title">
    <div class="title-env">
        <h1 class="title">仪表盘</h1>
        <p class="description">显示系统的运行情况，和数据情况</p>
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
        
        <script>
				var xenonPalette = ['#68b828','#7c38bc','#0e62c7','#fcd036','#4fcdfc','#00b19d','#ff6264','#f7aa47'];
			</script>
<!-- row -->


			<div class="row">
				<div class="col-sm-12">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">数据库数据情况</h3>
							<div class="panel-options">
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">&ndash;</span>
									<span class="expand-icon">+</span>
								</a>
								<a href="#" data-toggle="remove">
									&times;
								</a>
							</div>
						</div>
						<div class="panel-body">	
							<script type="text/javascript">
								jQuery(document).ready(function($)
								{
									$("#bar-1").dxChart({
										dataSource: [
											{day: "Monday", sales: 3},
											{day: "Tuesday", sales: 2},
											{day: "Wednesday", sales: 3},
											{day: "Thursday", sales: 4},
											{day: "Friday", sales: 6},
											{day: "Saturday", sales: 11},
											{day: "Sund2ay", sales: 4} ,
											{day: "Sunday", sales: 4} 
										],
									 
										series: {
											argumentField: "day",
											valueField: "sales",
											name: "Sales",
											type: "bar",
											color: '#68b828'
										}
									});
									
									$("#bar-1-randomize").on('click', function(ev)
									{
										ev.preventDefault();
										
										$('#bar-1').dxChart('instance').option('dataSource', [
											{day: "Monday", sales: between(1,25)},
											{day: "Tuesday", sales: between(1,25)},
											{day: "Wednesday", sales: between(1,25)},
											{day: "Thursday", sales: between(1,25)},
											{day: "Friday", sales: between(1,25)},
											{day: "Saturday", sales: between(1,25)},
											{day: "Sunday", sales: between(1,25)} 
										]);
									});
								});
								
								function between(randNumMin, randNumMax)
								{
									var randInt = Math.floor((Math.random() * ((randNumMax + 1) - randNumMin)) + randNumMin);
									
									return randInt;
								}
							</script>
							<div id="bar-1" style="height: 440px; width: 100%;"></div>
							<br />
							<a href="#" id="bar-1-randomize" class="btn btn-primary btn-small">Randomize</a>
						</div>
					</div>
						
				</div>
			</div>
			
		
			
			
			
			<div class="row">
				<div class="col-sm-12">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">数据库数据情况</h3>
							<div class="panel-options">
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">&ndash;</span>
									<span class="expand-icon">+</span>
								</a>
								<a href="#" data-toggle="remove">
									&times;
								</a>
							</div>
						</div>
						<div class="panel-body">	
							<script type="text/javascript">
								jQuery(document).ready(function($)
								{
									var dataSource = [
										{region: "As1ia", val: 4119626293},
										{region: "Af1rica", val: 1012956064},
										{region: "No1rthern America", val: 344124520},
										{region: "La1tin America and the Caribbean", val: 590946440},
										{region: "Eu1rope", val: 727082222},
										{region: "Asia", val: 4119626293},
										{region: "Africa", val: 1012956064},
										{region: "Northern America", val: 344124520},
										{region: "Latin America and the Caribbean", val: 590946440},
										{region: "Europe", val: 727082222},
										{region: "Oceania", val: 35104756}
									], timer;
									
									$("#bar-10").dxPieChart({
										dataSource: dataSource,
										title: "数据库数据情况",
										tooltip: {
											enabled: false,
										  	format:"millions",
											customizeText: function() { 
												return this.argumentText + "<br/>" + this.valueText;
											}
										},
										size: {
											height: 420
										},
										pointClick: function(point) {
											point.showTooltip();
											clearTimeout(timer);
											timer = setTimeout(function() { point.hideTooltip(); }, 2000);
											$("select option:contains(" + point.argument + ")").prop("selected", true);
										},
										legend: {
											visible: false
										},  
										series: [{
											type: "doughnut",
											argumentField: "region"
										}],
										palette: xenonPalette
									});
									
								});
							</script>
							<div id="bar-10" style="height: 450px; width: 100%;"></div>
						</div>
					</div>
						
				</div>
			</div>


<!-- -->        
        
					

			
			
			

			

<?php
View::tplInclude('Frame/footer',[]);
?>
	  </div>
		
			

		
	</div>
	
	
<?php
View::tplInclude('Frame/footerjs', []);
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

	<!-- Imported scripts on this page -->
	<script src="/assets/js/devexpress-web-14.1/js/globalize.min.js"></script>
	<script src="/assets/js/devexpress-web-14.1/js/dx.chartjs.js"></script>

</body>
</html>
