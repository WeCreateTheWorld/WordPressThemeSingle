<?php

/**
 * ������������
 */
function show_online_count() {
	//������Ҫ�ж�д�ļ���Ȩ�ޣ��״η��ʿϲ���ʾ���������ˢ�¼���  
	$online_log = "maplers.dat"; //�����������ļ�����Ŀ¼,  
	$timeout = 120;//120����û������,��Ϊ����  
	$entries = file($online_log);
	$temp = array();
	for ($i=0;$i<count($entries);$i++){
	$entry = explode(",",trim($entries[$i]));
	if(($entry[0] != getenv('REMOTE_ADDR')) && ($entry[1] > time())) {
	array_push($temp,$entry[0].",".$entry[1]."\n"); //ȡ����������ߵ���Ϣ,��ȥ����ʱ��,�����$temp  
	}}
	array_push($temp,getenv('REMOTE_ADDR').",".(time() + ($timeout))."\n"); //��������ߵ�ʱ��  
	$maplers = count($temp); //������������  
	$entries = implode("",$temp);
	//д���ļ�  
	$fp = fopen($online_log,"w");
	flock($fp,LOCK_EX); //flock() ������NFS�Լ�������һЩ�����ļ�ϵͳ����������  
	fputs($fp,$entries);
	flock($fp,LOCK_UN);
	fclose($fp);
	return $maplers;
}
?>