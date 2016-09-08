
<link rel="stylesheet" href="{{$public_path}}lib/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css">
<link rel="stylesheet" href="{{$public_path}}lib/jquery.gritter/css/jquery.gritter.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/Uniform.js/2.1.2/themes/default/css/uniform.default.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">

<style type="text/css">
	label {
		font-size: 12px !important;
	}
</style>
<div id="content">
	<div class="outer">
		<div class="inner bg-light lter" style="height: 2000px">
			<div class="row">
				<div class="col-lg-12">
				    <div class="box dark">
				        <header>
				            <div class="icons"><i class="fa fa-edit"></i></div>
				            <h5>إدارة المخازن</h5>
				            <!-- .toolbar -->
				            <div class="toolbar">
				              <nav style="padding: 8px;">
				                  <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
				                      <i class="fa fa-minus"></i>
				                  </a>
				                  <a href="javascript:;" class="btn btn-default btn-xs full-box">
				                      <i class="fa fa-expand"></i>
				                  </a>
				                  {{-- <a href="javascript:;" class="btn btn-danger btn-xs close-box">
				                      <i class="fa fa-times"></i>
				                  </a> --}}
				              </nav>
				            </div>            <!-- /.toolbar -->
				        </header>
				        <div id="div-1" class="body collapse in" aria-expanded="true">
    						<div class="alert alert-success">إذن حذف للمخزن</div>
				        	<div class="messages"></div>
				        	{{Form::open(["action" => "addItemsToStores","id"=>"addItemsToStores" ,"class"=>"form-horizontal"])}}
					        	<div class="row">
						        	<div class="col-lg-12">
						                <div class="form-group">
						                	{{Form::label('app_name', 'رقم الإذن',["class"=>"control-label col-lg-2"])}}
						                    <div class="col-lg-10">
						                    	{{Form::text("app_name","",["id"=>"app_name" , "name"=>"app_name" , "placeholder"=>"رقم الإذن" , "class"=>"form-control"])}}
						                    </div>
						                </div>
						                <div class="form-group">
						                	{{Form::label('app_route', 'تاريخ الإذن',["class"=>"control-label col-lg-2"])}}
						                    <div class="col-lg-10">
						                    	{{Form::text("app_route","",["id"=>"app_route" , "name"=>"app_route" , "placeholder"=>"تاريخ الإذن" , "class"=>"form-control"])}}
						                    </div>
						                </div>
						                <div class="form-group">
						                	{{Form::label('app_route', 'سبب الحذف',["class"=>"control-label col-lg-2"])}}
						                    <div class="col-lg-10">
						                    	{{Form::text("app_route","",["id"=>"app_route" , "name"=>"app_route" , "placeholder"=>"سبب الحذف" , "class"=>"form-control"])}}
						                    </div>
						                </div>
						            </div>

						            <div class="col-lg-12" style="margin-bottom:12px;">
						            	<button class="btn btn-danger" type="button" id="add_new_items">حذف الإذن بالكامل</button>
						            </div>

						            <div class="col-lg-12">
						            	<div class="table-responsive tableHolder">
						            		<table class="table table-bordered sortableTable responsive-table tablesorter tablesorter-default">
						            			<thead>
						            				<tr>
						            					<th>تحديد</th>
						            					<th>كود الصنف</th>
						            					<th>إسم الصنف</th>
						            					<th>نوع الصنف</th>
						            					<th>العدد</th>
						            					<th>حالة الصنف</th>
						            				</tr>
						            			</thead>
						            			<tbody>
						            				<tr>
						            					<td>
						            						{{Form::checkbox("icon","",false,["id"=>"icon" , "name"=>"icon" , "placeholder"=>"كود الصنف" , "class"=>"form-control input-sm"])}}
						            					</td>
						            					<td>
						            						{{Form::text("icon","",["id"=>"icon" , "name"=>"icon" , "placeholder"=>"كود الصنف" , "class"=>"form-control"])}}
						            					</td>
						            					<td>
						            						{{Form::text("icon","",["id"=>"icon" , "name"=>"icon" , "placeholder"=>"إسم الصنف" , "class"=>"form-control"])}}
						            					</td>
						            					<td>
						            						{{Form::text("icon","",["id"=>"icon" , "name"=>"icon" , "placeholder"=>"النوع" , "class"=>"form-control"])}}
						            					</td>
						            					<td>
						            						{{Form::text("icon","",["id"=>"icon" , "name"=>"icon" , "placeholder"=>"العدد" , "class"=>"form-control"])}}
						            					</td>
						            					<td>
						                    				{{Form::text("icon","",["id"=>"icon" , "name"=>"icon" , "placeholder"=>"حالة الصنف" , "class"=>"form-control"])}}
						            					</td>
						            				</tr>
						            			</tbody>
					            			</table>
				            			</div>
				              		</div>
				              	</div>
				              	<div class="row">
				              		<div class="col-lg-12">
				              			<div class="form-group">
						                    <div class="col-lg-12">
						                    	{{Form::submit('حفظ',["class"=>"btn btn-success btn-block"])}}
						                    </div>
						                </div>
				              		</div>
				              	</div>
		            		</div>
	            	{{Form::close()}}
	            </div>
		</div>
		<!-- /.inner -->
	</div>
	<!-- /.outer -->
</div>

{{HTML::Script($public_path."js/jquery.min.js")}}
{{HTML::Script($public_path."js/moment.min.js")}}
{{HTML::Script($public_path."js/jquery-ui.min.js")}}
{{HTML::Script($public_path."js/fullcalendar.min.js")}}
{{HTML::Script($public_path."js/jquery.tablesorter.min.js")}}
{{HTML::Script($public_path."js/jquery.sparkline.min.js")}}
{{HTML::Script($public_path."js/jquery.flot.min.js")}}
{{HTML::Script($public_path."js/jquery.flot.selection.min.js")}}
{{HTML::Script($public_path."js/jquery.flot.resize.min.js")}}
{{HTML::Script($public_path."js/metisMenu.min.js")}}
{{HTML::Script($public_path."js/screenfull.min.js")}}
{{HTML::Script($public_path."lib/bootstrap/js/bootstrap.js")}}
{{HTML::Script($public_path."lib/screenfull/screenfull.js")}}
{{HTML::Script($public_path."js/core.js")}}
{{HTML::Script($public_path."js/app.js")}}
{{HTML::Script($public_path."js/style-switcher.js")}}
{{HTML::Script($public_path."js/jquery.hotkeys.js")}}
{{HTML::Script($public_path."js/jquery.cookie.js")}}


<script type="text/javascript">

	$(function(){
		$('input').on('focus',function(){
	        $(this).attr('autocomplete', 'off');
	    });
	});
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/holder/2.4.1/holder.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/Uniform.js/2.1.2/jquery.uniform.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
<script src="{{$public_path}}lib/plupload/js/plupload.full.min.js"></script>
<script src="{{$public_path}}lib/plupload/js/jquery.plupload.queue/jquery.plupload.queue.min.js"></script>
<script src="{{$public_path}}lib/jquery.gritter/js/jquery.gritter.min.js"></script>
<script src="{{$public_path}}lib/formwizard/js/jquery.form.wizard.js"></script>