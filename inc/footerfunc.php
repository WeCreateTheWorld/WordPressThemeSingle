<?php

/**
 * 计算在线人数
 */
function show_online_count() {
	//首先你要有读写文件的权限，首次访问肯不显示，正常情况刷新即可  
	$online_log = "maplers.dat"; //保存人数的文件到根目录,  
	$timeout = 120;//120秒内没动作者,认为掉线  
	$entries = file($online_log);
	$temp = array();
	for ($i=0;$i<count($entries);$i++){
	$entry = explode(",",trim($entries[$i]));
	if(($entry[0] != getenv('REMOTE_ADDR')) && ($entry[1] > time())) {
	array_push($temp,$entry[0].",".$entry[1]."\n"); //取出其他浏览者的信息,并去掉超时者,保存进$temp  
	}}
	array_push($temp,getenv('REMOTE_ADDR').",".(time() + ($timeout))."\n"); //更新浏览者的时间  
	$maplers = count($temp); //计算在线人数  
	$entries = implode("",$temp);
	//写入文件  
	$fp = fopen($online_log,"w");
	flock($fp,LOCK_EX); //flock() 不能在NFS以及其他的一些网络文件系统中正常工作  
	fputs($fp,$entries);
	flock($fp,LOCK_UN);
	fclose($fp);
	return $maplers;
}
?>