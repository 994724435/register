// JavaScript Document
var subcat = new Array(); 
subcat[0] = new Array('临床医师','主任医师','主任医师')
subcat[1] = new Array('临床医师','副主任医师','副主任医师') 
subcat[2] = new Array('临床医师','主治医师','主治医师') 
subcat[3] = new Array('临床医师','住院医师','住院医师') 
subcat[4] = new Array('临床医师','实习医生','实习医生') 
subcat[5] = new Array('临床医师','其他','其他') 
subcat[6] = new Array('医技人员','主任技师/药师','主任技师/药师') 
subcat[7] = new Array('医技人员','副主任技师/药师','副主任技师/药师') 
subcat[8] = new Array('医技人员','主管技师/药师','主管技师/药师') 
subcat[9] = new Array('医技人员','技士/药士','技士/药士') 
subcat[10] = new Array('医技人员','见习技士/药士','见习技士/药士') 
subcat[11] = new Array('医技人员','其他','其他') 
subcat[12] = new Array('科研人员/卫生管理','研究员','研究员') 
subcat[13] = new Array('科研人员/卫生管理','副研究员','副研究员') 
subcat[14] = new Array('科研人员/卫生管理','助理研究员','助理研究员') 
subcat[15] = new Array('科研人员/卫生管理','研究实习员','研究实习员') 
subcat[16] = new Array('科研人员/卫生管理','其他','其他') 
subcat[17] = new Array('行政管理人员','科长/处长','科长/处长') 
subcat[18] = new Array('行政管理人员','副科长/处长','副科长/处长') 
subcat[19] = new Array('行政管理人员','其他','其他') 
subcat[20] = new Array('高校教师','教授','教授') 
subcat[21] = new Array('高校教师','副教授','副教授') 
subcat[22] = new Array('高校教师','讲师','讲师') 
subcat[23] = new Array('高校教师','助理讲师','助理讲师') 
subcat[24] = new Array('高校教师','其他','其他') 
subcat[25] = new Array('后勤/工程技术人员','高级工程师','高级工程师') 
subcat[26] = new Array('后勤/工程技术人员','工程师','工程师')
subcat[27] = new Array('后勤/工程技术人员','助理工程师','助理工程师')
subcat[28] = new Array('后勤/工程技术人员','技术员','技术员')
subcat[29] = new Array('护理人员','主任护师','主任护师')
subcat[30] = new Array('护理人员','副主任护师','副主任护师')
subcat[31] = new Array('护理人员','主管护师','主管护师')
subcat[32] = new Array('护理人员','护师','护师')
subcat[33] = new Array('护理人员','护士','护士')
subcat[34] = new Array('护理人员','实习护士','实习护士')
subcat[35] = new Array('护理人员','其他','其他')
subcat[36] = new Array('在校学生','研究生','研究生')
subcat[37] = new Array('在校学生','其他','其他')
subcat[38] = new Array('企业/厂商','企业/厂商','企业/厂商')
subcat[39] = new Array('其他','其他','其他')

function changeselect1(locationid) 
{ 
document.myform.ut.length = 0; //初始化下拉列表 清空下拉数据 
document.myform.ut.options[0] = new Option('请选择',''); //给第一个值 
for (i=0; i<subcat.length; i++) //legth=20 
{ 
if (subcat[i][0] == locationid) //[0] [1] 第一列 第二列 
{document.myform.ut.options[document.myform.ut.length] = new Option(subcat[i][1], subcat[i][2]);} 
} 
}