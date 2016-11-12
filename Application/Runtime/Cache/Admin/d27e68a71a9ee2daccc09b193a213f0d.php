<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>信息增加页面</title>
</head>
<body>
	<h3>知途学员信息增加</h3>
	<br>
	<form method="post" enctype="multipart/form-data" action="<?php echo U('admin/zan/handleadd');?>" >
		照 片 ：<input type="file" name="image"><br><br>
		姓 名 ：<input type="text" name="name"><br><br>
		性 别 ：<input type="text" name="sex"><br><br>
		分 类 ：<select name="category">
			<?php foreach($cc as $v) { ?>
			<option value="<?php echo ($v['category']); ?>"><?php echo $v['category']?></option>
			<?php  } ?>
		</select><br><br>
		公 司 ：<input type="text" name="company"><br><br>
		工 资 ：<input type="text" name="money"><br><br>
		兴趣值：<input type="text" name="sort">（填写0-100数字）</input><br><br>
			   <input type="submit" value="确认增加"></input>
	</form>
</body>
</html>