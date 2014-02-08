<div id="wrapper">

        <div id="sidebar">                    

            <div class="sidenav">

                <div class="sidebar-widget" style="margin: -1px 0 0 0;">
                    <h5 class="title" style="margin-bottom:0">Ledt Side Bar</h5>
                </div><!-- End .sidenav-widget -->

                <div class="mainnav">
                    <ul>
                        <li><a href="#"><span class="icon16 icomoon-icon-stats-up"></span>Option 1</a></li>                                                
                    </ul>
                </div>
            </div><!-- End sidenav -->            

        </div><!-- End #sidebar -->

        <!--Body content-->
        <div id="content" class="clearfix">
            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">

                    <h3>Dashboard</h3>                                                                               
                </div><!-- End .heading-->
               <div class="row-fluid">

                        <div class="span12">

                            <div class="box gradient">
                                <div class="title">
                                    <h4>
                                        <span class="icon16 icomoon-icon-folder"></span>
                                        <span>File manager and upload</span>
                                    </h4>
                                </div>
                                <div class="content noPad">
                                    <div id="elfinder"></div>
                                </div>

                            </div><!-- End .box -->

                        </div><!-- End .span12 -->

                   </div><!-- End .row-fluid -->
				<div>
					<form method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/ex_cont/saveFilesToDb" >
					<input type="submit" value="Finish"/>
				</div>
            </div><!-- End contentwrapper -->
        </div><!-- End #content -->
    
    </div><!-- End #wrapper -->