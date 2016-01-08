<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Buy6Old;
use app\models\Buy6;
use app\models\BuyData6;
use app\models\Area;
use app\models\Info22Old;
use app\models\Info22;
use app\models\InfoData22;
use app\models\Company;
use app\models\Member;

class DataController extends Controller{

	//分类处理
	public function actionCat(){
		$cat = array (3747 => array ('catid' => '3747','catname' => '类别','style' => '','catdir' => 'leibie','linkurl' => 'list-catid-3747.html','letter' => 'l','level' => '1','property' => '0','parentid' => '0','arrparentid' => '0','child' => 1,'arrchildid' => '3747,3748,3749,3750,3751,3752,3753,3754,3839,3755,3756,3757,3758,3759,3760,3761,3762,3763,3764,3765,3766,3767,3768,3769,3770,3771,3772,3773,3774,3775,3776,3777,3778,3779,3780,3781,3782,3783,3784,3785,3786,3787,3788,3789,3790,3791,3792,3793,3794,3795,3796,3797,3798,3799,3800,3801,3802,3803,3804,3805,3806,3807,3808,3809,3810,3811,3812,3813,3814,3815,3816,3817,3818,3819,3820,3821,3822,3823,3824,3825,3826,3827,3828,3829,3830,3831,3832,3833,3834,3835,3836,3837,3838,3840,3841,3842,3843,3844,3845,3846,3847,3848,3849,3850,3851,3852,3853,3854,3855,3856,3857,3858,3859,3860,3861,3862,3863,3864,3865','lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3748 => array ('catid' => '3748','catname' => '西药产品','style' => '','catdir' => '3748','linkurl' => 'list-catid-3748.html','letter' => '','level' => '1','property' => '0','parentid' => '3747','arrparentid' => '0,3747','child' => 1,'arrchildid' => '3748,3761,3762,3763,3764,3765,3766,3767,3768,3769,3770,3771,3772,3773,3774,3775,3776,3777,3778,3779,3780,3781,3782,3783,3784,3785','lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3749 => array ('catid' => '3749','catname' => '中药产品','style' => '','catdir' => '3749','linkurl' => 'list-catid-3749.html','letter' => '','level' => '1','property' => '0','parentid' => '3747','arrparentid' => '0,3747','child' => 1,'arrchildid' => '3749,3786,3787,3788,3789,3790,3791,3792,3793,3794,3795,3796,3797,3798,3799,3800,3801,3802,3803,3804,3805,3806,3807,3808,3809,3810,3811,3812,3813','lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3750 => array ('catid' => '3750','catname' => '原料药','style' => '','catdir' => '3750','linkurl' => 'list-catid-3750.html','letter' => '','level' => '1','property' => '0','parentid' => '3747','arrparentid' => '0,3747','child' => 1,'arrchildid' => '3750,3814,3815,3816','lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3751 => array ('catid' => '3751','catname' => '中药材','style' => '','catdir' => '3751','linkurl' => 'list-catid-3751.html','letter' => '','level' => '1','property' => '0','parentid' => '3747','arrparentid' => '0,3747','child' => 1,'arrchildid' => '3751,3817,3818,3819,3820,3821,3822','lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3752 => array ('catid' => '3752','catname' => '保健品食品','style' => '','catdir' => '3752','linkurl' => 'list-catid-3752.html','letter' => '','level' => '1','property' => '0','parentid' => '3747','arrparentid' => '0,3747','child' => 1,'arrchildid' => '3752,3823,3824,3825,3826,3827,3828,3829,3830,3831,3832','lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3753 => array ('catid' => '3753','catname' => '生物制剂','style' => '','catdir' => '3753','linkurl' => 'list-catid-3753.html','letter' => '','level' => '1','property' => '0','parentid' => '3747','arrparentid' => '0,3747','child' => 0,'arrchildid' => 3753,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3754 => array ('catid' => '3754','catname' => '药品包装','style' => '','catdir' => '3754','linkurl' => 'list-catid-3754.html','letter' => '','level' => '1','property' => '0','parentid' => '3747','arrparentid' => '0,3747','child' => 1,'arrchildid' => '3754,3833,3834,3835,3836,3837,3838','lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3839 => array ('catid' => '3839','catname' => '医疗设备','style' => '','catdir' => '3839','linkurl' => 'list-catid-3839.html','letter' => 'y','level' => '1','property' => '0','parentid' => '3747','arrparentid' => '0,3747','child' => 1,'arrchildid' => '3839,3840,3841,3842,3843,3844,3845,3846,3847','lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3755 => array ('catid' => '3755','catname' => '诊断试剂','style' => '','catdir' => '3755','linkurl' => 'list-catid-3755.html','letter' => '','level' => '1','property' => '0','parentid' => '3747','arrparentid' => '0,3747','child' => 1,'arrchildid' => '3755,3848,3849,3850,3851,3852,3853,3854,3855,3856,3857,3858,3859,3860,3861','lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3756 => array ('catid' => '3756','catname' => '药用辅助','style' => '','catdir' => '3756','linkurl' => 'list-catid-3756.html','letter' => '','level' => '1','property' => '0','parentid' => '3747','arrparentid' => '0,3747','child' => 0,'arrchildid' => 3756,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3757 => array ('catid' => '3757','catname' => '化妆品','style' => '','catdir' => '3757','linkurl' => 'list-catid-3757.html','letter' => '','level' => '1','property' => '0','parentid' => '3747','arrparentid' => '0,3747','child' => 0,'arrchildid' => 3757,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3758 => array ('catid' => '3758','catname' => '藏药','style' => '','catdir' => '3758','linkurl' => 'list-catid-3758.html','letter' => '','level' => '1','property' => '0','parentid' => '3747','arrparentid' => '0,3747','child' => 0,'arrchildid' => 3758,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3759 => array ('catid' => '3759','catname' => '蒙药','style' => '','catdir' => '3759','linkurl' => 'list-catid-3759.html','letter' => '','level' => '1','property' => '0','parentid' => '3747','arrparentid' => '0,3747','child' => 0,'arrchildid' => 3759,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3760 => array ('catid' => '3760','catname' => '卫生用品','style' => '','catdir' => '3760','linkurl' => 'list-catid-3760.html','letter' => '','level' => '1','property' => '0','parentid' => '3747','arrparentid' => '0,3747','child' => 1,'arrchildid' => '3760,3862,3863,3864,3865','lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3761 => array ('catid' => '3761','catname' => '抗感染药','style' => '','catdir' => '3761','linkurl' => 'list-catid-3761.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3761,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3762 => array ('catid' => '3762','catname' => '妇科用药','style' => '','catdir' => '3762','linkurl' => 'list-catid-3762.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3762,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3763 => array ('catid' => '3763','catname' => '激素和内分泌功能调节药','style' => '','catdir' => '3763','linkurl' => 'list-catid-3763.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3763,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3764 => array ('catid' => '3764','catname' => '氨基酸类药物','style' => '','catdir' => '3764','linkurl' => 'list-catid-3764.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3764,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3765 => array ('catid' => '3765','catname' => '呼吸系统用药','style' => '','catdir' => '3765','linkurl' => 'list-catid-3765.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3765,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3766 => array ('catid' => '3766','catname' => '消毒防腐药','style' => '','catdir' => '3766','linkurl' => 'list-catid-3766.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3766,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3767 => array ('catid' => '3767','catname' => '皮肤科用药','style' => '','catdir' => '3767','linkurl' => 'list-catid-3767.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3767,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3768 => array ('catid' => '3768','catname' => '解热镇痛药','style' => '','catdir' => '3768','linkurl' => 'list-catid-3768.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3768,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3769 => array ('catid' => '3769','catname' => '抗肿瘤药','style' => '','catdir' => '3769','linkurl' => 'list-catid-3769.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3769,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3770 => array ('catid' => '3770','catname' => '生物技术药物和生化药物','style' => '','catdir' => '3770','linkurl' => 'list-catid-3770.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3770,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3771 => array ('catid' => '3771','catname' => '抗寄生虫病药物','style' => '','catdir' => '3771','linkurl' => 'list-catid-3771.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3771,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3772 => array ('catid' => '3772','catname' => '血液系统用药','style' => '','catdir' => '3772','linkurl' => 'list-catid-3772.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3772,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3773 => array ('catid' => '3773','catname' => '消化系统用药','style' => '','catdir' => '3773','linkurl' => 'list-catid-3773.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3773,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3774 => array ('catid' => '3774','catname' => '循环系统用药','style' => '','catdir' => '3774','linkurl' => 'list-catid-3774.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3774,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3775 => array ('catid' => '3775','catname' => '糖尿病用药','style' => '','catdir' => '3775','linkurl' => 'list-catid-3775.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3775,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3776 => array ('catid' => '3776','catname' => '外科用药','style' => '','catdir' => '3776','linkurl' => 'list-catid-3776.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3776,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3777 => array ('catid' => '3777','catname' => '解毒药及其他','style' => '','catdir' => '3777','linkurl' => 'list-catid-3777.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3777,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3778 => array ('catid' => '3778','catname' => '抗变态反应药物','style' => '','catdir' => '3778','linkurl' => 'list-catid-3778.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3778,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3779 => array ('catid' => '3779','catname' => '免疫系统用药','style' => '','catdir' => '3779','linkurl' => 'list-catid-3779.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3779,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3780 => array ('catid' => '3780','catname' => '泌尿生殖系统药','style' => '','catdir' => '3780','linkurl' => 'list-catid-3780.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3780,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3781 => array ('catid' => '3781','catname' => '神经系统用药','style' => '','catdir' => '3781','linkurl' => 'list-catid-3781.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3781,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3782 => array ('catid' => '3782','catname' => '老年病用药','style' => '','catdir' => '3782','linkurl' => 'list-catid-3782.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3782,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3783 => array ('catid' => '3783','catname' => '维生素类药','style' => '','catdir' => '3783','linkurl' => 'list-catid-3783.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3783,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3784 => array ('catid' => '3784','catname' => '其他专科用药','style' => '','catdir' => '3784','linkurl' => 'list-catid-3784.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3784,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3785 => array ('catid' => '3785','catname' => '微量元素/矿物质及其它营养药','style' => '','catdir' => '3785','linkurl' => 'list-catid-3785.html','letter' => '','level' => '1','property' => '0','parentid' => '3748','arrparentid' => '0,3747,3748','child' => 0,'arrchildid' => 3785,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3786 => array ('catid' => '3786','catname' => '扶正药','style' => '','catdir' => '3786','linkurl' => 'list-catid-3786.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3786,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3787 => array ('catid' => '3787','catname' => '前列腺用药','style' => '','catdir' => '3787','linkurl' => 'list-catid-3787.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3787,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3788 => array ('catid' => '3788','catname' => '骨伤科用药','style' => '','catdir' => '3788','linkurl' => 'list-catid-3788.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3788,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3789 => array ('catid' => '3789','catname' => '风湿用药','style' => '','catdir' => '3789','linkurl' => 'list-catid-3789.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3789,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3790 => array ('catid' => '3790','catname' => '胃肠用药','style' => '','catdir' => '3790','linkurl' => 'list-catid-3790.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3790,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3791 => array ('catid' => '3791','catname' => '耳鼻咽喉口腔科','style' => '','catdir' => '3791','linkurl' => 'list-catid-3791.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3791,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3792 => array ('catid' => '3792','catname' => '泻下/固涩/温里药','style' => '','catdir' => '3792','linkurl' => 'list-catid-3792.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3792,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3793 => array ('catid' => '3793','catname' => '理血/降脂药','style' => '','catdir' => '3793','linkurl' => 'list-catid-3793.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3793,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3794 => array ('catid' => '3794','catname' => '消导化积药','style' => '','catdir' => '3794','linkurl' => 'list-catid-3794.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3794,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3795 => array ('catid' => '3795','catname' => '糖尿病用药','style' => '','catdir' => '3795','linkurl' => 'list-catid-3795.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3795,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3796 => array ('catid' => '3796','catname' => '外科用药','style' => '','catdir' => '3796','linkurl' => 'list-catid-3796.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3796,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3797 => array ('catid' => '3797','catname' => '民族/藏药/蒙药','style' => '','catdir' => '3797','linkurl' => 'list-catid-3797.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3797,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3798 => array ('catid' => '3798','catname' => '妇科用药','style' => '','catdir' => '3798','linkurl' => 'list-catid-3798.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3798,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3799 => array ('catid' => '3799','catname' => '开窍/理气/治风药','style' => '','catdir' => '3799','linkurl' => 'list-catid-3799.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3799,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3800 => array ('catid' => '3800','catname' => '化痰/止咳/平喘药','style' => '','catdir' => '3800','linkurl' => 'list-catid-3800.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3800,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3801 => array ('catid' => '3801','catname' => '中风后遗症用','style' => '','catdir' => '3801','linkurl' => 'list-catid-3801.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3801,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3802 => array ('catid' => '3802','catname' => '其他外用药','style' => '','catdir' => '3802','linkurl' => 'list-catid-3802.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3802,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3803 => array ('catid' => '3803','catname' => '利湿通淋药','style' => '','catdir' => '3803','linkurl' => 'list-catid-3803.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3803,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3804 => array ('catid' => '3804','catname' => '眼科用药','style' => '','catdir' => '3804','linkurl' => 'list-catid-3804.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3804,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3805 => array ('catid' => '3805','catname' => '儿科用药','style' => '','catdir' => '3805','linkurl' => 'list-catid-3805.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3805,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3806 => array ('catid' => '3806','catname' => '祛暑/解表/和解药','style' => '','catdir' => '3806','linkurl' => 'list-catid-3806.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3806,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3807 => array ('catid' => '3807','catname' => '清热/解毒/消炎药','style' => '','catdir' => '3807','linkurl' => 'list-catid-3807.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3807,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3808 => array ('catid' => '3808','catname' => '五官科用药','style' => '','catdir' => '3808','linkurl' => 'list-catid-3808.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3808,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3809 => array ('catid' => '3809','catname' => '心脑血管','style' => '','catdir' => '3809','linkurl' => 'list-catid-3809.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3809,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3810 => array ('catid' => '3810','catname' => '皮肤科用药','style' => '','catdir' => '3810','linkurl' => 'list-catid-3810.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3810,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3811 => array ('catid' => '3811','catname' => '肿瘤用药','style' => '','catdir' => '3811','linkurl' => 'list-catid-3811.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3811,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3812 => array ('catid' => '3812','catname' => '肝胆用药','style' => '','catdir' => '3812','linkurl' => 'list-catid-3812.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3812,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3813 => array ('catid' => '3813','catname' => '安神/头昏/补血药','style' => '','catdir' => '3813','linkurl' => 'list-catid-3813.html','letter' => '','level' => '1','property' => '0','parentid' => '3749','arrparentid' => '0,3747,3749','child' => 0,'arrchildid' => 3813,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3814 => array ('catid' => '3814','catname' => '西药原料药','style' => '','catdir' => '3814','linkurl' => 'list-catid-3814.html','letter' => '','level' => '1','property' => '0','parentid' => '3750','arrparentid' => '0,3747,3750','child' => 0,'arrchildid' => 3814,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3815 => array ('catid' => '3815','catname' => '氨基酸及维生素','style' => '','catdir' => '3815','linkurl' => 'list-catid-3815.html','letter' => '','level' => '1','property' => '0','parentid' => '3750','arrparentid' => '0,3747,3750','child' => 0,'arrchildid' => 3815,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3816 => array ('catid' => '3816','catname' => '中间体','style' => '','catdir' => '3816','linkurl' => 'list-catid-3816.html','letter' => '','level' => '1','property' => '0','parentid' => '3750','arrparentid' => '0,3747,3750','child' => 0,'arrchildid' => 3816,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3817 => array ('catid' => '3817','catname' => '根及根茎类','style' => '','catdir' => '3817','linkurl' => 'list-catid-3817.html','letter' => '','level' => '1','property' => '0','parentid' => '3751','arrparentid' => '0,3747,3751','child' => 0,'arrchildid' => 3817,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3818 => array ('catid' => '3818','catname' => '果实子仁类','style' => '','catdir' => '3818','linkurl' => 'list-catid-3818.html','letter' => '','level' => '1','property' => '0','parentid' => '3751','arrparentid' => '0,3747,3751','child' => 0,'arrchildid' => 3818,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3819 => array ('catid' => '3819','catname' => '全草及花类','style' => '','catdir' => '3819','linkurl' => 'list-catid-3819.html','letter' => '','level' => '1','property' => '0','parentid' => '3751','arrparentid' => '0,3747,3751','child' => 0,'arrchildid' => 3819,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3820 => array ('catid' => '3820','catname' => '叶/树皮/藤木类','style' => '','catdir' => '3820','linkurl' => 'list-catid-3820.html','letter' => '','level' => '1','property' => '0','parentid' => '3751','arrparentid' => '0,3747,3751','child' => 0,'arrchildid' => 3820,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3821 => array ('catid' => '3821','catname' => '树脂/菌藻/加工及其它类','style' => '','catdir' => '3821','linkurl' => 'list-catid-3821.html','letter' => '','level' => '1','property' => '0','parentid' => '3751','arrparentid' => '0,3747,3751','child' => 0,'arrchildid' => 3821,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3822 => array ('catid' => '3822','catname' => '动物及矿物类','style' => '','catdir' => '3822','linkurl' => 'list-catid-3822.html','letter' => '','level' => '1','property' => '0','parentid' => '3751','arrparentid' => '0,3747,3751','child' => 0,'arrchildid' => 3822,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3823 => array ('catid' => '3823','catname' => '降脂降压','style' => '','catdir' => '3823','linkurl' => 'list-catid-3823.html','letter' => '','level' => '1','property' => '0','parentid' => '3752','arrparentid' => '0,3747,3752','child' => 0,'arrchildid' => 3823,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3824 => array ('catid' => '3824','catname' => '美容养颜','style' => '','catdir' => '3824','linkurl' => 'list-catid-3824.html','letter' => '','level' => '1','property' => '0','parentid' => '3752','arrparentid' => '0,3747,3752','child' => 0,'arrchildid' => 3824,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3825 => array ('catid' => '3825','catname' => '减肥瘦身','style' => '','catdir' => '3825','linkurl' => 'list-catid-3825.html','letter' => '','level' => '1','property' => '0','parentid' => '3752','arrparentid' => '0,3747,3752','child' => 0,'arrchildid' => 3825,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3826 => array ('catid' => '3826','catname' => '改善睡眠','style' => '','catdir' => '3826','linkurl' => 'list-catid-3826.html','letter' => '','level' => '1','property' => '0','parentid' => '3752','arrparentid' => '0,3747,3752','child' => 0,'arrchildid' => 3826,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3827 => array ('catid' => '3827','catname' => '计生用品','style' => '','catdir' => '3827','linkurl' => 'list-catid-3827.html','letter' => '','level' => '1','property' => '0','parentid' => '3752','arrparentid' => '0,3747,3752','child' => 0,'arrchildid' => 3827,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3828 => array ('catid' => '3828','catname' => '其他','style' => '','catdir' => '3828','linkurl' => 'list-catid-3828.html','letter' => '','level' => '1','property' => '0','parentid' => '3752','arrparentid' => '0,3747,3752','child' => 0,'arrchildid' => 3828,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3829 => array ('catid' => '3829','catname' => '微量元素矿物质(营养补益)','style' => '','catdir' => '3829','linkurl' => 'list-catid-3829.html','letter' => '','level' => '1','property' => '0','parentid' => '3752','arrparentid' => '0,3747,3752','child' => 0,'arrchildid' => 3829,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3830 => array ('catid' => '3830','catname' => '调节免疫','style' => '','catdir' => '3830','linkurl' => 'list-catid-3830.html','letter' => '','level' => '1','property' => '0','parentid' => '3752','arrparentid' => '0,3747,3752','child' => 0,'arrchildid' => 3830,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3831 => array ('catid' => '3831','catname' => '健脑明目','style' => '','catdir' => '3831','linkurl' => 'list-catid-3831.html','letter' => '','level' => '1','property' => '0','parentid' => '3752','arrparentid' => '0,3747,3752','child' => 0,'arrchildid' => 3831,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3832 => array ('catid' => '3832','catname' => '延缓衰老','style' => '','catdir' => '3832','linkurl' => 'list-catid-3832.html','letter' => '','level' => '1','property' => '0','parentid' => '3752','arrparentid' => '0,3747,3752','child' => 0,'arrchildid' => 3832,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3833 => array ('catid' => '3833','catname' => '纸类材料及其制品','style' => '','catdir' => '3833','linkurl' => 'list-catid-3833.html','letter' => '','level' => '1','property' => '0','parentid' => '3754','arrparentid' => '0,3747,3754','child' => 0,'arrchildid' => 3833,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3834 => array ('catid' => '3834','catname' => '塑料材料及其制品','style' => '','catdir' => '3834','linkurl' => 'list-catid-3834.html','letter' => '','level' => '1','property' => '0','parentid' => '3754','arrparentid' => '0,3747,3754','child' => 0,'arrchildid' => 3834,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3835 => array ('catid' => '3835','catname' => '金属材料及其制品','style' => '','catdir' => '3835','linkurl' => 'list-catid-3835.html','letter' => '','level' => '1','property' => '0','parentid' => '3754','arrparentid' => '0,3747,3754','child' => 0,'arrchildid' => 3835,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3836 => array ('catid' => '3836','catname' => '玻璃材料及其制品','style' => '','catdir' => '3836','linkurl' => 'list-catid-3836.html','letter' => '','level' => '1','property' => '0','parentid' => '3754','arrparentid' => '0,3747,3754','child' => 0,'arrchildid' => 3836,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3837 => array ('catid' => '3837','catname' => '空心胶囊','style' => '','catdir' => '3837','linkurl' => 'list-catid-3837.html','letter' => '','level' => '1','property' => '0','parentid' => '3754','arrparentid' => '0,3747,3754','child' => 0,'arrchildid' => 3837,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3838 => array ('catid' => '3838','catname' => '其他材料','style' => '','catdir' => '3838','linkurl' => 'list-catid-3838.html','letter' => '','level' => '1','property' => '0','parentid' => '3754','arrparentid' => '0,3747,3754','child' => 0,'arrchildid' => 3838,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3840 => array ('catid' => '3840','catname' => '手术设备','style' => '','catdir' => '3840','linkurl' => 'list-catid-3840.html','letter' => '','level' => '1','property' => '0','parentid' => '3839','arrparentid' => '0,3747,3839','child' => 0,'arrchildid' => 3840,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3841 => array ('catid' => '3841','catname' => '医用材料及医用器具','style' => '','catdir' => '3841','linkurl' => 'list-catid-3841.html','letter' => '','level' => '1','property' => '0','parentid' => '3839','arrparentid' => '0,3747,3839','child' => 0,'arrchildid' => 3841,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3842 => array ('catid' => '3842','catname' => '注射输液和穿刺设备','style' => '','catdir' => '3842','linkurl' => 'list-catid-3842.html','letter' => '','level' => '1','property' => '0','parentid' => '3839','arrparentid' => '0,3747,3839','child' => 0,'arrchildid' => 3842,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3843 => array ('catid' => '3843','catname' => '口腔/麻醉/体外循环设备','style' => '','catdir' => '3843','linkurl' => 'list-catid-3843.html','letter' => '','level' => '1','property' => '0','parentid' => '3839','arrparentid' => '0,3747,3839','child' => 0,'arrchildid' => 3843,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3844 => array ('catid' => '3844','catname' => '人工脏器和假肢','style' => '','catdir' => '3844','linkurl' => 'list-catid-3844.html','letter' => '','level' => '1','property' => '0','parentid' => '3839','arrparentid' => '0,3747,3839','child' => 0,'arrchildid' => 3844,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3845 => array ('catid' => '3845','catname' => '其他设备','style' => '','catdir' => '3845','linkurl' => 'list-catid-3845.html','letter' => '','level' => '1','property' => '0','parentid' => '3839','arrparentid' => '0,3747,3839','child' => 0,'arrchildid' => 3845,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3846 => array ('catid' => '3846','catname' => '医用射线设备','style' => '','catdir' => '3846','linkurl' => 'list-catid-3846.html','letter' => '','level' => '1','property' => '0','parentid' => '3839','arrparentid' => '0,3747,3839','child' => 0,'arrchildid' => 3846,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3847 => array ('catid' => '3847','catname' => '诊察器械及诊断仪器','style' => '','catdir' => '3847','linkurl' => 'list-catid-3847.html','letter' => '','level' => '1','property' => '0','parentid' => '3839','arrparentid' => '0,3747,3839','child' => 0,'arrchildid' => 3847,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3848 => array ('catid' => '3848','catname' => '血型/组织配型类试剂','style' => '','catdir' => '3848','linkurl' => 'list-catid-3848.html','letter' => '','level' => '1','property' => '0','parentid' => '3755','arrparentid' => '0,3747,3755','child' => 0,'arrchildid' => 3848,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3849 => array ('catid' => '3849','catname' => '人类基因检测类试剂','style' => '','catdir' => '3849','linkurl' => 'list-catid-3849.html','letter' => '','level' => '1','property' => '0','parentid' => '3755','arrparentid' => '0,3747,3755','child' => 0,'arrchildid' => 3849,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3850 => array ('catid' => '3850','catname' => '微生物抗原/抗体及核酸检测类试剂','style' => '','catdir' => '3850','linkurl' => 'list-catid-3850.html','letter' => '','level' => '1','property' => '0','parentid' => '3755','arrparentid' => '0,3747,3755','child' => 0,'arrchildid' => 3850,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3851 => array ('catid' => '3851','catname' => '临床化学类试剂','style' => '','catdir' => '3851','linkurl' => 'list-catid-3851.html','letter' => '','level' => '1','property' => '0','parentid' => '3755','arrparentid' => '0,3747,3755','child' => 0,'arrchildid' => 3851,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3852 => array ('catid' => '3852','catname' => '血气/电解质测定类试剂','style' => '','catdir' => '3852','linkurl' => 'list-catid-3852.html','letter' => '','level' => '1','property' => '0','parentid' => '3755','arrparentid' => '0,3747,3755','child' => 0,'arrchildid' => 3852,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3853 => array ('catid' => '3853','catname' => '自身免疫诊断类试剂','style' => '','catdir' => '3853','linkurl' => 'list-catid-3853.html','letter' => '','level' => '1','property' => '0','parentid' => '3755','arrparentid' => '0,3747,3755','child' => 0,'arrchildid' => 3853,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3854 => array ('catid' => '3854','catname' => '肿瘤标志物类试剂','style' => '','catdir' => '3854','linkurl' => 'list-catid-3854.html','letter' => '','level' => '1','property' => '0','parentid' => '3755','arrparentid' => '0,3747,3755','child' => 0,'arrchildid' => 3854,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3855 => array ('catid' => '3855','catname' => '生物芯片类','style' => '','catdir' => '3855','linkurl' => 'list-catid-3855.html','letter' => '','level' => '1','property' => '0','parentid' => '3755','arrparentid' => '0,3747,3755','child' => 0,'arrchildid' => 3855,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3856 => array ('catid' => '3856','catname' => '临床基础检验类试剂','style' => '','catdir' => '3856','linkurl' => 'list-catid-3856.html','letter' => '','level' => '1','property' => '0','parentid' => '3755','arrparentid' => '0,3747,3755','child' => 0,'arrchildid' => 3856,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3857 => array ('catid' => '3857','catname' => '维生素测定类试剂','style' => '','catdir' => '3857','linkurl' => 'list-catid-3857.html','letter' => '','level' => '1','property' => '0','parentid' => '3755','arrparentid' => '0,3747,3755','child' => 0,'arrchildid' => 3857,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3858 => array ('catid' => '3858','catname' => '细胞组织化学染色剂类','style' => '','catdir' => '3858','linkurl' => 'list-catid-3858.html','letter' => '','level' => '1','property' => '0','parentid' => '3755','arrparentid' => '0,3747,3755','child' => 0,'arrchildid' => 3858,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3859 => array ('catid' => '3859','catname' => '微生物学检验类试剂','style' => '','catdir' => '3859','linkurl' => 'list-catid-3859.html','letter' => '','level' => '1','property' => '0','parentid' => '3755','arrparentid' => '0,3747,3755','child' => 0,'arrchildid' => 3859,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3860 => array ('catid' => '3860','catname' => '变态反应诊断类试剂','style' => '','catdir' => '3860','linkurl' => 'list-catid-3860.html','letter' => '','level' => '1','property' => '0','parentid' => '3755','arrparentid' => '0,3747,3755','child' => 0,'arrchildid' => 3860,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3861 => array ('catid' => '3861','catname' => '免疫组化与人体组织细胞类试剂','style' => '','catdir' => '3861','linkurl' => 'list-catid-3861.html','letter' => '','level' => '1','property' => '0','parentid' => '3755','arrparentid' => '0,3747,3755','child' => 0,'arrchildid' => 3861,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3862 => array ('catid' => '3862','catname' => '消毒剂','style' => '','catdir' => '3862','linkurl' => 'list-catid-3862.html','letter' => '','level' => '1','property' => '0','parentid' => '3760','arrparentid' => '0,3747,3760','child' => 0,'arrchildid' => 3862,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3863 => array ('catid' => '3863','catname' => '消毒剂','style' => '','catdir' => '3863','linkurl' => 'list-catid-3863.html','letter' => '','level' => '1','property' => '0','parentid' => '3760','arrparentid' => '0,3747,3760','child' => 0,'arrchildid' => 3863,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3864 => array ('catid' => '3864','catname' => '洗手液','style' => '','catdir' => '3864','linkurl' => 'list-catid-3864.html','letter' => '','level' => '1','property' => '0','parentid' => '3760','arrparentid' => '0,3747,3760','child' => 0,'arrchildid' => 3864,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),3865 => array ('catid' => '3865','catname' => '妇科洗液','style' => '','catdir' => '3865','linkurl' => 'list-catid-3865.html','letter' => '','level' => '1','property' => '0','parentid' => '3760','arrparentid' => '0,3747,3760','child' => 0,'arrchildid' => 3865,'lv' => NULL,'sitename' => 'qxw18','kdes' => '','dtime' => NULL,'getyearmonth' => '',),);
		
		$offset = isset($_GET['offset']) ? $_GET['offset'] : '0';
		
		$old = new Info22();

		$rs = $old->find()->select(['itemid','catid','zs_class_lv1','zs_class_lv2'])->offset($offset)->limit(50)->orderBy('itemid ASC')->all();
		
		if($rs){
			foreach($rs as $k=>$v){
				$cats = ',';
				if(!empty($v['zs_class_lv2'])){
					$arr = explode(',',$v['zs_class_lv2']);
					foreach($arr as $v3){
						foreach($cat as $v2){
							if($v3 == $v2['catname']){
								$cats .= $v2['catid'].',';
								break;
							}
						}
					}
				}elseif(!empty($v['zs_class_lv1'])){
					$lv1 = $v['zs_class_lv1'];
					$lv1 = str_replace('西药产品','西药产品,',$lv1);
					$lv1 = str_replace('中药产品','中药产品,',$lv1);
					$lv1 = str_replace('原料药','原料药,',$lv1);
					$lv1 = str_replace('中药材','中药材,',$lv1);
					$lv1 = str_replace('保健品食品','保健品食品,',$lv1);
					$lv1 = str_replace('生物制剂','生物制剂,',$lv1);
					$lv1 = str_replace('药品包装','药品包装,',$lv1);
					$lv1 = str_replace('医疗设备','医疗设备,',$lv1);
					$lv1 = str_replace('诊断试剂','诊断试剂,',$lv1);
					$lv1 = str_replace('药用辅助','药用辅助,',$lv1);
					$lv1 = str_replace('化妆品','化妆品,',$lv1);
					$lv1 = str_replace('藏药','藏药,',$lv1);
					$lv1 = str_replace('蒙药','蒙药,',$lv1);
					$lv1 = str_replace('卫生用品','卫生用品,',$lv1);
					$arr = explode(',',$lv1);
					foreach($arr as $v3){
						foreach($cat as $v2){
							if($v3 == $v2['catname']){
								$cats .= $v2['catid'].',';
								break;
							}
						}
					}
				}
				$info = Info22::findOne($v['itemid']);  
				$info->catid = $cats;
				$info->update(false);
			}
			$num = $offset + 50;
			
			return $this->render('cat',['num'=>$num]);
		}else{
			echo '0k!!!!!!!!!!';
		}
	}
	
	//药品导入
	public function actionDrug(){
		exit();
		$old = new Info22Old();
		
		$offset = isset($_GET['offset']) ? $_GET['offset'] : '78031';
		
		$rs = $old->find()->offset($offset)->limit(50)->orderBy('ID ASC')->all();

		if($rs){
				
			foreach($rs as $v){
		
				$info = new Info22();
				$infodata = new InfoData22();

				$info->itemid = $v->ID;
				$info->level = 0;
				$info->title = $v->Name;
				$info->hits = $v->HitCount;

				$info->username = $v->UserName;


				$info->addtime = strtotime($v->PostDTime);
				$info->edittime = $info->addtime;
				$info->editdate = date('Y-m-d',$info->addtime);
				$info->adddate = date('Y-m-d',$info->addtime);
				

				$info->company = $v->Company;
				$info->vip = $v->VIP;



				$info->status = 3;
				$info->listorder = 0;
				$info->islink = 0;

				$info->approvalno = $v->ApprovalNO;
				$info->zs_uid = $v->Uid;
				$info->zs_vip = $v->VIP;
				$info->zs_bid = $v->Bid;
				$info->zs_bidarea = $v->BidArea;
				$info->zs_area = $v->Area;
				$info->zs_imgurl = $v->ImgUrl;
				$info->zs_imgurl2 = $v->ImgUrl2;
				$info->zs_imgurl3 = $v->ImgUrl3;
				$info->zs_imgurl4 = $v->ImgUrl4;
				$info->zs_medicare = $v->Medicare;
				$info->zs_tags = $v->Tags;
				$info->zs_class_lv1 = $v->Class_LV1;
				$info->zs_class_lv2 = $v->Class_LV2;
				$info->zs_class_lv3 = $v->Class_LV3;
				$info->zs_customclass = $v->CustomClass;
				$info->zs_advantage = $v->Advantage;
				$info->zs_dtime = $v->DTime;
				$info->zs_postdtime = $v->PostDTime;
				$info->zs_hitcount = $v->HitCount;
				$info->zs_state = $v->State;
				$info->zs_sitename = $v->SiteName;
				$info->zs_replycount = $v->ReplyCount;
				$info->zs_html = $v->Html;
				$info->zs_letter = $v->Letter;
				$info->zs_isimg = $v->IsImg;
				$info->zs_isregular = $v->IsRegular;
				$info->zs_orderno = $v->OrderNO;
				$info->zs_upkey = $v->UpKey;
				$info->zs_uporderno = $v->UpOrderNO;
				$info->zs_license = $v->License;
				$info->zs_norms = $v->Norms;
				$info->zs_exhibition = $v->Exhibition;

				$info->point = str_replace(',', ' ', $v->Advantage);

				$info->zszc = is_null($v->Support) ? '': $v->Support;
				$info->dlsyq = $v->Require;
				$info->memo = $v->Memo;
				$info->dosageform = is_null($v->DosageForm) ? '': $v->DosageForm;
				$info->effect = $v->Effect;
				$info->explain = $v->Explain;
				$info->standard = $v->Standard;
				$info->direction = $v->Direction;
				$info->dosage = $v->Dosage;
				$info->type = $v->Type;
				$info->refreshnum = $v->RefreshNum;
				$info->refreshtime = $v->DTime;
				$info->is_zs = 1;				
		
				$infodata->itemid = $v->ID;
		
				if($v->Intro == null){
					$v->Intro = '';
				}
				$infodata->content = $v->Intro;
		
				$info->save(false);
				$infodata->save(false);
		
			}
				
			$num = $offset + 50;
		
			return $this->render('drug',['num'=>$num]);
				
		}else{
			echo '0k!!!!!!!!!!';
		}
		
	}
	
	//药数据处理,修复图片
	public function actionDrug2(){

		$old = new Info22Old();
	
		$offset = isset($_GET['offset']) ? $_GET['offset'] : '0';
	
		$rs = $old->find()->select(['ID','ImgUrl','ImgUrl2','ImgUrl3','ImgUrl4',])->offset($offset)->limit(500)->orderBy('ID ASC')->asArray()->all();
	
		if($rs){
	
			foreach($rs as $v){
				
				$info = Info22::findOne($v['ID']);
				
				if($info){
					$info['zs_imgurl'] = $v['ImgUrl'];
					$info['zs_imgurl2'] = $v['ImgUrl2'];
					$info['zs_imgurl3'] = $v['ImgUrl3'];
					$info['zs_imgurl4'] = $v['ImgUrl4'];
					
					$info->update(false);
				}	
			}
			$num = $offset + 500;
	
			return $this->render('drug2',['num'=>$num]);
	
		}else{
			echo '0k!!!!!!!!!!';
		}
	
	}	

	//药数据处理，修复introduce字段
	public function actionDrug3(){

		$old = new Info22();
	
		$offset = isset($_GET['offset']) ? $_GET['offset'] : '0';
	
		$rs = $old->find()->select(['itemid','introduce'])->with(['data'])->offset($offset)->limit(500)->orderBy('itemid ASC')->asArray()->all();
		if($rs){
	
			foreach($rs as $v){
				
				$info = Info22::findOne($v['itemid']);
				
				if($info){
					$info['introduce'] =  DataController::truncate_utf8_string(strip_tags($v['data']['content']),200); 
					$info->update(false);
				}	
			}
			$num = $offset + 500;
	
			return $this->render('drug3',['num'=>$num]);
	
		}else{
			echo '0k!!!!!!!!!!';
		}
	
	}	
	
	//将email,address,fax等信息从company、member表移动到info22表
	public function actionMove(){
		
		$info1 = new Info22();
		$company = new Company();
		
		$offset = isset($_GET['offset']) ? $_GET['offset'] : '0';
		
		$rs = $info1->find()->offset($offset)->limit(100)->orderBy('itemid ASC')->all();
		
		if($rs){
			/*
			foreach($rs as $v){
				$company = Company::find()->select(['telephone','fax','mail','address'])
				->where('username="'.$v['username'].'"')->asArray()->one();
				if($company){
					$v['telephone'] = $company['telephone'];
					$v['fax'] = $company['fax'];
					$v['email'] = $company['mail'];
					$v['address'] = $company['address'];
					$v->update(false);
				}
			}*/

			foreach($rs as $v){
				$member = Member::find()->select(['truename','qq'])
				->where('username="'.$v['username'].'"')->asArray()->one();
				if($member){
					$v['truename'] = $member['truename'];
					$v['qq'] = $member['qq'];
					$v->update(false);
				}
			}

			$num = $offset + 100;
			
			return $this->render('move',['num'=>$num]);
			
		}else{
			echo '0k!!!!!!!!!!';
		}
	}

	//代理商导入
	public function actionAgency(){
		exit();
		$old = new Buy6Old();
		
		$offset = isset($_GET['offset']) ? $_GET['offset'] : '384036';
		
		$rs = $old->find()->offset($offset)->limit(500)->orderBy('ID ASC')->all();
		
		if($rs){
			
			foreach($rs as $v){
				
				$buy = new Buy6();
				$buydata = new BuyData6();
				
				if($v->Vip==1){
					$buy->groupid = 7;
				}else{
					$buy->groupid = 6;
				}
				
				if(!empty($v->City)){
					$areaid = Area::find()->select(['areaid'])->where('areaname = "'.$v->City.'"')->one();
				}else{
					$areaid = Area::find()->select(['areaid'])->where('areaname = "'.$v->Province.'"')->one();
				}
				
				if($areaid['areaid']){

					$buy->areaid = addslashes($areaid['areaid']);
				}
				
				$buy->itemid = $v->ID;
				$buy->typeid = 1;
				$buy->level = 0;
				$buy->title = $v->IntentDrug;
				$buy->username = $v->FromUserName;
				
				$buy->company = $v->Company;
				$buy->vip = $v->Vip;
				$buy->truename = $v->LinkMan;
				$buy->telephone = $v->Tel;
				$buy->mobile = $v->Pho;
				$buy->address = $v->ADDR;
				$buy->email = $v->EMail;
				$buy->qq = $v->QQ;
				$buy->totime = 0;

				$buy->addtime = strtotime($v->PostDTime);
				$buy->edittime = $buy->addtime;
				$buy->editdate = date('Y-m-d',$buy->addtime);
				$buy->adddate = date('Y-m-d',$buy->addtime);
				$buy->status = 3;
				$buy->zs_tousername = $v->ToUserName;
				$buy->drugid = $v->DrugID;
				$buy->zs_class_lv1 = $v->Class_LV1;
				$buy->zs_class_lv2 = $v->Class_LV2;
				$buy->zs_class_lV3 = $v->Class_LV3;
				$buy->zs_company = $v->Company;
				$buy->zs_status = $v->Status;
				$buy->zs_province = $v->Province;
				$buy->zs_city = $v->City;
				$buy->zs_postcode = $v->PostCode;
				$buy->zs_linkman = $v->LinkMan;
				$buy->zs_tel = $v->Tel;
				$buy->zs_pho = $v->Pho;
				$buy->zs_fax = $v->Fax;
				$buy->zs_qq = $v->QQ;
				$buy->zs_email = $v->EMail;
				$buy->zs_website = $v->WebSite;
				$buy->zs_address = $v->ADDR;
				$buy->zs_intentdrug = $v->IntentDrug;
				$buy->zs_durghistory = $v->DurgHistory;
				$buy->zs_dtime = $v->DTime;
				$buy->zs_postdtime = $v->PostDTime;
				$buy->zs_checked = $v->Checked;
				$buy->zs_jiam = $v->JiaM;
				$buy->zs_jiamtime = $v->JiaMTime;
				$buy->zs_state = $v->State;
				$buy->zs_refreshnum = $v->RefreshNum;
				$buy->zs_sitename = $v->SiteName;
				$buy->zs_letter = $v->Letter;
				$buy->zs_vip = $v->Vip;
				$buy->zs_channel = $v->Channel;
				$buy->history = $v->DurgHistory;
				$buy->is_zs = 1;
				
				$buydata->itemid = $v->ID;
				
				if($v->Intro == null){
					$v->Intro = '';
				}
				$buydata->content = $v->Intro;
				
				$buy->save(false);
				$buydata->save(false);
				
			}
			
			$num = $offset + 500;
		
			return $this->render('agency',['num'=>$num]);
			
		}else{
			echo '0k!!!!!!!!!!';
		}
	}

	public static function truncate_utf8_string($string, $length, $etc = '...')
	{
		$result = '';
		$string = html_entity_decode(trim(strip_tags($string)), ENT_QUOTES, 'UTF-8');
		$strlen = strlen($string);
		for ($i = 0; (($i < $strlen) && ($length > 0)); $i++)
		{
			if ($number = strpos(str_pad(decbin(ord(substr($string, $i, 1))), 8, '0', STR_PAD_LEFT), '0'))
			{
				if ($length < 1.0)
				{
					break;
				}
				$result .= substr($string, $i, $number);
				$length -= 1.0;
				$i += $number - 1;
			}
			else
			{
				$result .= substr($string, $i, 1);
				$length -= 0.5;
			}
		}
		$result = htmlspecialchars($result, ENT_QUOTES, 'UTF-8');
		if ($i < $strlen)
		{
			$result .= $etc;
		}
		return $result;
	}

}
