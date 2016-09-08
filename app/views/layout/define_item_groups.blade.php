<div id="content">
	<div class="outer">
		<div class="inner bg-light lter" style="min-height: 1000px">
			<div class="row">
				<div class="col-lg-12">
				    <div class="box dark">
				        <header>
				            <div class="icons"><i class="fa fa-edit"></i></div>
				            <h5>مدير التطبيقات</h5>
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
				        	<div class="messages"></div>
				        	<div class="col-lg-8">
				        		<div class="alert alert-success">تعريف انواع الأصناف</div>
					        	{{Form::open(["action" => "addNewApplication","id"=>"addNewApplication" ,"class"=>"form-horizontal"])}}
					                <div class="form-group">
					                	{{Form::label('app_name', 'إسم النوع',["class"=>"control-label col-lg-2"])}}
					                    <div class="col-lg-10">
					                    	{{Form::text("app_name","",["id"=>"app_name" , "name"=>"app_name" , "placeholder"=>"إسم النوع" , "class"=>"form-control"])}}
					                    </div>
					                </div>

					                <div class="form-group">
					                    <div class="col-lg-12">
					                    	{{Form::submit('حفظ',["class"=>"btn btn-success btn-block"])}}
					                    </div>
					                </div>
					            {{Form::close()}}
				            </div>
				            <div class="col-lg-4">
				        		<div class="alert alert-info">التطبيقات الحالية</div>
				            	<div class="table-responsive tableHolder">
				            		<table class="table table-bordered sortableTable responsive-table tablesorter tablesorter-default">
				            			<thead>
				            				<tr>
				            					<th>اسم النوع</th>
				            					<th>حفظ</th>
				            				</tr>
				            			</thead>
				            			<tbody>
				            				<tr>
				            					<td>
				            						{{Form::text("app_name","",["id"=>"app_name" , "name"=>"app_name" , "placeholder"=>"إسم النوع" , "class"=>"form-control"])}}
				            					</td>
				            					<td>
				            						{{Form::button("حفظ",["id"=>"saveBTN_","class"=>"btn btn-success","onclick"=>"saveFN()"])}}
				            					</td>
				            				</tr>
				            			</tbody>
				            		</table>
				            	</div>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
			<!-- /.inner -->
		</div>
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
{{HTML::Script($public_path."js/jquery.cookie.js")}}
