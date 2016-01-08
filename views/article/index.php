<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<div style="font-size: 20px; color: red;"><?php echo 91607-$num; ?><div>

			<script type="text/javascript">

location.href="<?php echo Url::to(['article/index','offset'=>$num]); ?>";  

</script>

</body>
</html>

