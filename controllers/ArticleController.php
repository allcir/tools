<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Article21Old;
use app\models\Article21;
use app\models\ArticleData21;

class ArticleController extends Controller{

	public function actionIndex(){
		
		$old = new Article21Old();
		
		$offset = isset($_GET['offset']) ? $_GET['offset'] : '0';
		
		$rs = $old->find()->offset($offset)->limit(50)->orderBy('ID ASC')->all();

		if($rs){
				
			foreach($rs as $v){
		
				$article = new Article21();
				$articledata = new ArticleData21();

				$article->itemid = $v->ID;
				if($v->Type == '营销管理'){
					$catid = 3999;
				}elseif($v->Type == '医药市场'){
					$catid = 4000;
				}elseif($v->Type == '行业资讯'){
					$catid = 4001;
				}elseif($v->Type == '健康生活'){
					$catid = 4002;
				}else{
					$catid = 0;
				}
				$article->catid = $catid;
				$article->areaid = 0;
				$article->level = 0;
				$article->title = $v->Title;
				$article->tag = str_replace('/',' ',$v->Tag);
				$article->addtime = strtotime($v->PostDTime);
				$article->edittime = strtotime($v->PostDTime);
				$article->status = 3;
				$article->islink = 0;

				$article->zs_source = $v->Source;
				$article->zs_hot = $v->Hot;
				$article->zs_sitename = $v->SiteName;
				$article->zs_imageurl = $v->ImageUrl;
				$article->zs_levels = $v->levels;
				$article->zs_comid = $v->Comid;
				$article->zs_ischeck = $v->IsCheck;
		
				$articledata->itemid = $v->ID;
		
				if($v->Information == null){
					$v->Information = '';
				}
				$articledata->content = $v->Information;
		
				$article->save(false);
				$articledata->save(false);
		
			}
				
			$num = $offset + 50;
		
			return $this->render('index',['num'=>$num]);
				
		}else{
			echo '0k!!!!!!!!!!';
		}
		
	}
	

}
