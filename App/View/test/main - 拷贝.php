<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>::::<?=$title?>::::</title>


</head>

<body>
<?php
$data = array(
    'title' => 'Welcome',  //设置title变量为Welcome
);
View::tplInclude('Frame/main', $data);

//W('Side', array('page' => 'Index'));
?>

<!-- Body begin ================================================== -->
//RBAC模块
main
<!-- Bootstrap core JavaScript================================================== -->
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- Bootstrap core JavaScript================================================== -->
<script language="javascript">
    $(document).ready(function(){

    })
</script>
</body>
</html>
