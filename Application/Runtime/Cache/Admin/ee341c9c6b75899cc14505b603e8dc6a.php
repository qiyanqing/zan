<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>学员总信息列表</title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="0" style="width: 800px;height: 100px;">
	<tr align="center">
		<td>个人照片</td>
		<td>姓名</td>
		<td>性别</td>
		<td>分类</td>
		<td>所在公司</td>
		<td>薪资</td>
		<td>状态</td>
		<td>兴趣值</td>
		<td>点赞数</td>
		<td>操作</td>
	</tr>
	<?php  foreach($result as $value) { ?>
	<tr align="center">
		<td><img src="/Public/upload/<?php echo ($value['img']); ?>"width="140px" height="100px"></td>
		<td><?php echo ($value['name']); ?></td>
		<td><?php echo ($value['sex']); ?></td>
		<td><?php echo ($value['category']); ?></td>
		<td><?php echo ($value['company']); ?></td>
		<td><?php echo ($value['money']); ?></td>
		<td><?php echo ($value['status']); ?></td>
		<td><?php echo ($value['sort']); ?></td>
		<td><?php echo ($value['like_num']); ?></td>
		<td>
		<a href="http://zan.cc/index.php/admin/zan/edit?id=<?php echo $value['id']?>">修改</a>
		<a href="http://zan.cc/index.php/admin/zan/delete?id=<?php echo $value['id']?>">删除</a>
		</td>
	</tr>
	<?php } ?>
</table>
</body>
</html>