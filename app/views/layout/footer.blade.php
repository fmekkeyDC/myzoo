            </div>

            <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>powred by CodePro System {{date("Y")}}</p>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->
            <div id="helpModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- /#helpModal -->
            <!--jQuery -->
            
            @if (preg_split('/[@]+/', Route::currentRouteAction())[1] == "home")
              
                {{-- {{HTML::Script($public_path."lib/jquery/jquery.js")}} --}}
                
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
            @endif

            <script type="text/javascript">
                var sideOpened = "";
                function SetSession(id){
                    sideOpened = $.cookie('sideOpened', id, { expires: 7, path: '/' });
                }

                $("#LIST_"+$.cookie('sideOpened')+"").addClass("active");
            </script>
        </body>

</html>
