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

class DataController extends Controller{

	public function actionDrug(){
		
		$old = new Info22Old();
		
		$offset = isset($_GET['offset']) ? $_GET['offset'] : '25541';
		
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

}
