<?php
 function upload($name,$path){
    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->rootPath  =     './Public/Upload/'; // 设置附件上传根目录
    $upload->savePath  =     $path.'/'; // 设置附件上传（子）目录
    // 上传文件 
    $info   =   $upload->upload();
    if(!$info) {// 上传错误提示错误信息
        $status = 'error';
        $img_path = '';
    }else{// 上传成功
      $status = 'success';
      $img_path = $info[$name]['savepath'].$info[$name]['savename'];
    }
    $result['status'] = $status;
    $result['path'] = $img_path;
    return $result;
}