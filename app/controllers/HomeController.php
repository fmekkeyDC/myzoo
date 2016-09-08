<?php

class HomeController extends BaseController {

	protected $public_path;
	protected $system_name;
	protected $system_lang;
	protected $tpl_name;
	protected $userdata;

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function __construct(){
		$this->public_path = "public/layout/";
		$this->system_name = "CodePro|MyZoo project";
		$this->system_lang = "AR";
		$this->tpl_name = "content";
		$this->userdata = User::find(1);
	}

	//routing handler

	public function home () {
		return View::make('layout.holder')
		->with("public_path",$this->public_path)
		->with("system_name",$this->system_name)
		->with("system_apps",$this->getAppsData())
		->with("tpl_name",$this->tpl_name)
		->with("system_lang",$this->system_lang);
	}

	public function application_manager(){
		$this->tpl_name = "application_manager";
		$listOfOptions = [1 => "فعال" , 2 => "غير فعال"];

		$appsParents = [0=>"تطبيق رئيسي"];

		foreach($this->getAppsParents()["parent"] as $parents){
			$appsParents[$parents->id] = $parents->app_name;
		}

		return View::make('layout.holder')
		->with("public_path",$this->public_path)
		->with("system_name",$this->system_name)
		->with("system_apps",$this->getAppsData())
		->with("tpl_name",$this->tpl_name)
		->with("listOfOptions",$listOfOptions)
		->with("appsParents",$appsParents)
		->with("getAppsParents",$this->getAppsParents("all"))
		->with("system_lang",$this->system_lang);
	}

	public function store_item_definer(){
		$this->tpl_name = "store_item_definer";

		return View::make('layout.holder')
		->with("public_path",$this->public_path)
		->with("system_name",$this->system_name)
		->with("system_apps",$this->getAppsData())
		->with("tpl_name",$this->tpl_name)
		->with("system_lang",$this->system_lang);
	}

	public function add_items_to_store () {
		$this->tpl_name = "add_items_to_store";

		return View::make('layout.holder')
		->with("public_path",$this->public_path)
		->with("system_name",$this->system_name)
		->with("system_apps",$this->getAppsData())
		->with("tpl_name",$this->tpl_name)
		->with("system_lang",$this->system_lang);
	}

	public function delete_item_from_stroe () {
		$this->tpl_name = "delete_item_from_stroe";

		return View::make('layout.holder')
		->with("public_path",$this->public_path)
		->with("system_name",$this->system_name)
		->with("system_apps",$this->getAppsData())
		->with("tpl_name",$this->tpl_name)
		->with("system_lang",$this->system_lang);
	}

	public function define_item_groups () {
		$this->tpl_name = "define_item_groups";

		return View::make('layout.holder')
		->with("public_path",$this->public_path)
		->with("system_name",$this->system_name)
		->with("system_apps",$this->getAppsData())
		->with("tpl_name",$this->tpl_name)
		->with("system_lang",$this->system_lang);
	}
	//core handler
	public function getAppsData(){
		if (User::find(1)->id == 1){
			$getChildren = DB::table("applications")->where("app_active","=",1)->where("parent","!=",0)->where("parent","!=",0)->get();
			$apps_child_lists = [];
			foreach($getChildren as $childs){
				$apps_child_lists [] = $childs->parent;
			}
			$getParent = DB::table("applications")->where("app_active","=",1)->where("parent","=",0)->get();
		}else{
			$getUserApps = DB::table("users")->where("id","=",$this->userdata->id)->select("users_apps")->first();
			$getAppsQuery = unserialize($getUserApps->users_apps);
			$getChildren = DB::table("applications")->where("app_active","=",1)->where("parent","!=",0)->whereIn("id",$getAppsQuery)->get();
			$apps_child_lists = [];
			foreach($getChildren as $childs){
				$apps_child_lists [] = $childs->parent;
			}
			$getParent = DB::table("applications")->where("app_active","=",1)->where("parent","=",0)->whereIn("id",$apps_child_lists)->get();
		}
		return ["parent" => $getParent,"children" => $getChildren];
	}

	public static function getAppsParents ($returnMethod="normal") {
		if (User::find(1)->id == 1){
			$getChildren = DB::table("applications")->where("app_active","=",1)->where("parent","!=",0)->get();
			$apps_child_lists = [];
			foreach($getChildren as $childs){
				$apps_child_lists [] = $childs->parent;
			}

			$getParent = DB::table("applications")->where("app_active","=",1)->where("parent","=",0)->orderBy("sort","asc")->get();
			
		}else{
			$getUserApps = DB::table("users")->where("id","=",User::find(1)->id)->select("users_apps")->first();
			$getAppsQuery = unserialize($getUserApps->users_apps);
			$getChildren = DB::table("applications")->where("app_active","=",1)->where("parent","!=",0)->whereIn("id",$getAppsQuery)->orderBy("sort","asc")->get();
			$apps_child_lists = [];
			foreach($getChildren as $childs){
				$apps_child_lists [] = $childs->parent;
			}

			$getParent = DB::table("applications")->where("app_active","=",1)->where("parent","=",0)->whereIn("id",$apps_child_lists)->orderBy("sort","asc")->get();
		}

		if ($returnMethod == "normal"){
			return ["parent"=>$getParent,"children"=>$getChildren];
		}else if ($returnMethod == "all"){

			$getAllParents = DB::select("SELECT * FROM applications where app_active = 1 order by sort ASC");
			return $getAllParents;

		}else{
			App::abort(500, 'badRequestMethod');
		}
	}

}
