<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Buy6Old;
use app\models\Buy6;
use app\models\BuyData6;
use app\models\Area;

class DataController extends Controller{

	public function actionAgency(){
		
		$old = new Buy6Old();
		
		$offset = isset($_GET['offset']) ? $_GET['offset'] : '355249';
		
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

}
