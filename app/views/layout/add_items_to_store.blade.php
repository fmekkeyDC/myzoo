
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
    						<div class="alert alert-success">إذن إضافة اصناف</div>
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
						            </div>

						            <div class="col-lg-12" style="margin-bottom:12px;">
						            	<button class="btn btn-warning" type="button" id="add_new_items">اضافة صنف للإذن</button>
						            </div>

						            <div class="col-lg-12">
						            	<div class="table-responsive tableHolder">
						            		<table class="table table-bordered sortableTable responsive-table tablesorter tablesorter-default">
						            			<thead>
						            				<tr>
						            					<th>كود الصنف</th>
						            					<th>إسم الصنف</th>
						            					<th>نوع الصنف</th>
						            					<th>العدد</th>
						            					<th>سعر الشراء</th>
						            				</tr>
						            			</thead>
						            			<tbody>
						            				<tr>
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
						                    				{{Form::text("icon","",["id"=>"icon" , "name"=>"icon" , "placeholder"=>"سعر الشراء" , "class"=>"form-control"])}}
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

	var elements = [
	    "esc","tab","space","return","backspace","scroll","capslock","numlock","insert","home","del","end","pageup","pagedown",
	    "left","up","right","down",
	    "f1","f2","f3","f4","f5","f6","f7","f8","f9","f10","f11","f12",
	    "1","2","3","4","5","6","7","8","9","0",
	    "a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z",
	    "Ctrl+a","Ctrl+b","Ctrl+c","Ctrl+d","Ctrl+e","Ctrl+f","Ctrl+g","Ctrl+h","Ctrl+i","Ctrl+j","Ctrl+k","Ctrl+l","Ctrl+m",
	    "Ctrl+n","Ctrl+o","Ctrl+p","Ctrl+q","Ctrl+r","Ctrl+s","Ctrl+t","Ctrl+u","Ctrl+v","Ctrl+w","Ctrl+x","Ctrl+y","Ctrl+z",
	    "Shift+a","Shift+b","Shift+c","Shift+d","Shift+e","Shift+f","Shift+g","Shift+h","Shift+i","Shift+j","Shift+k","Shift+l",
	    "Shift+m","Shift+n","Shift+o","Shift+p","Shift+q","Shift+r","Shift+s","Shift+t","Shift+u","Shift+v","Shift+w","Shift+x",
	    "Shift+y","Shift+z",
	    "Alt+a","Alt+b","Alt+c","Alt+d","Alt+e","Alt+f","Alt+g","Alt+h","Alt+i","Alt+j","Alt+k","Alt+l",
	    "Alt+m","Alt+n","Alt+o","Alt+p","Alt+q","Alt+r","Alt+s","Alt+t","Alt+u","Alt+v","Alt+w","Alt+x","Alt+y","Alt+z",
	    "Ctrl+esc","Ctrl+tab","Ctrl+space","Ctrl+return","Ctrl+backspace","Ctrl+scroll","Ctrl+capslock","Ctrl+numlock",
	    "Ctrl+insert","Ctrl+home","Ctrl+del","Ctrl+end","Ctrl+pageup","Ctrl+pagedown","Ctrl+left","Ctrl+up","Ctrl+right",
	    "Ctrl+down",
	    "Ctrl+f1","Ctrl+f2","Ctrl+f3","Ctrl+f4","Ctrl+f5","Ctrl+f6","Ctrl+f7","Ctrl+f8","Ctrl+f9","Ctrl+f10","Ctrl+f11","Ctrl+f12",
	    "Shift+esc","Shift+tab","Shift+space","Shift+return","Shift+backspace","Shift+scroll","Shift+capslock","Shift+numlock",
	    "Shift+insert","Shift+home","Shift+del","Shift+end","Shift+pageup","Shift+pagedown","Shift+left","Shift+up",
	    "Shift+right","Shift+down",
	    "Shift+f1","Shift+f2","Shift+f3","Shift+f4","Shift+f5","Shift+f6","Shift+f7","Shift+f8","Shift+f9","Shift+f10","Shift+f11","Shift+f12",
	    "Alt+esc","Alt+tab","Alt+space","Alt+return","Alt+backspace","Alt+scroll","Alt+capslock","Alt+numlock",
	    "Alt+insert","Alt+home","Alt+del","Alt+end","Alt+pageup","Alt+pagedown","Alt+left","Alt+up","Alt+right","Alt+down",
	    "Alt+f1","Alt+f2","Alt+f3","Alt+f4","Alt+f5","Alt+f6","Alt+f7","Alt+f8","Alt+f9","Alt+f10","Alt+f11","Alt+f12"
	];

	$.each(elements, function(i, e) {
	   var newElement = ( /[\+]+/.test(elements[i]) ) ? elements[i].replace("+","_") : elements[i];
	   
		$(document).bind('keydown', elements[i], function assets() {
	       	if (elements[i] == "Ctrl+down"){
	       		$("#add_new_items").click();
	       		return false;
	       	}if (elements[i] == "Ctrl+up"){
	       		$("table tr:last").remove();
	       		return false;
	       	}
	   });
	});

	$(function(){
		$(':input').on('focus',function(){
	        $(this).attr('autocomplete', 'off');
	    });

		$("#add_new_items").on("click",function(){
			var tableAppender = "";
			tableAppender += '<tr>';
			tableAppender += '<td>';
			tableAppender += '<input id="icon" name="icon" placeholder="كود الصنف" class="form-control" type="text" value="">';
			tableAppender += '</td>';
			tableAppender += '<td>';
			tableAppender += '<input id="icon" name="icon" placeholder="إسم الصنف" class="form-control" type="text" value="">';
			tableAppender += '</td>';
			tableAppender += '<td>';
			tableAppender += '<input id="icon" name="icon" placeholder="النوع" class="form-control" type="text" value="">';
			tableAppender += '</td>';
			tableAppender += '<td>';
			tableAppender += '<input id="icon" name="icon" placeholder="العدد" class="form-control" type="text" value="">';
			tableAppender += '</td>';
			tableAppender += '<td>';
			tableAppender += '<input id="icon" name="icon" placeholder="سعر الشراء" class="form-control" type="text" value="">';
			tableAppender += '</td>';
			tableAppender += '</tr>';
			tableAppender += "<tr>";
			$('table').append(tableAppender);
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