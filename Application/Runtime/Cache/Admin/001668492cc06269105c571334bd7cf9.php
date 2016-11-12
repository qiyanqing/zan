<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>修改学员信息</title>
</head>
<body>
<form action="<?php echo U('admin/zan/handleedit');?>" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $u['id']?>">
	修改 姓 名：<input type="text" name="name" value="<?php echo ($u['name']); ?>"></input><br><br>
	修改 照 片：<p><img src="/Public/upload/<?php echo ($u['img']); ?>"></p>
			    <input type="file" name="image"></input><br><br>
	修改 性 别：<input type="text" name="sex" value="<?php echo ($u['sex']); ?>"><br><br>		
	修改 公 司：<input type="text" name="company" value="<?php echo ($u['company']); ?>"></input><br><br>
	修改 薪 资：<input type="text" name="money" value="<?php echo ($u['money']); ?>"></input><br><br>
	修改 分 类：<select name="category">
		<?php foreach($category as $v) { ?>
			    <option value="<?php echo ($v['category']); ?>"><?php echo ($v['category']); ?></option>
		<?php  } ?>
	</select><br><br>
	修改 状 态：<input type="text" name="status" value="<?php echo ($u['status']); ?>"></input><br><br>
	修改兴趣值：<input type="text" name="sort" value="<?php echo ($u['sort']); ?>"></input><br><br>

	<input type="submit"  value="确认修改"> 
</form>
</body>
</html>