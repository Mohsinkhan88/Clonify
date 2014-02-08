<?php include("include_newcss.php"); ?>
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

                    <h3>Initial Invocation Parameters</h3>                                                                               
                </div><!-- End .heading-->
                
			<form method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/invoke/invoke_init" >
			<table id="multi_select_tbl">
            	<tr>
                	<td width="130px;"><label>Min Similarities for Simple Clone Class</label></td>
                    <td><input type="text" name="sccMinSim" id="sccMinSim"/></td>
            	</tr>
                <tr>
                	<td><label>Method Analysis</label></td>
                    <td><input type="checkbox" name="methodAnalysis" id="methodAnalysis"/></td>
            	</tr>
                <tr>
                	<td><label>Grouping Choice</label></td>
                    <td><select style="width:120px;" name="groupingChoice" id="groupingChoice">
                      <option value="mixed">Mixed Mode</option>
                      <option value="across_groups">Across Groups</option>
	                  </select><br/></td>
            	</tr>
                <tr>
                	<td><label>Language</label></td>
                    <td><select style="width:120px;" name="language" id="language">
						<?php foreach ($languages as $language){ ?>
                          <option value="<?php echo $language->id ?>"><?php echo $language->language ?></option>
                        <?php } ?>
                        </select></td>
            	</tr>
                <tr>
                	<td><label>Files from DB</label></td>
                    <td><select style="width:400px;height:150px;" multiple="multiple" name="files[]">
						<?php foreach ($usrfiles as $usrfile){ ?>
                          <option value="<?php echo $usrfile->id ?>"><?php echo $usrfile->fname ?></option>
                        <?php } ?>
                        </select></td>
            	</tr>
                <tr>
                	<td><input type="submit" value="Next"/></td>
                    <td></td>
            	</tr>
            </table>
            </form>
            </div>
            <!-- End contentwrapper -->
        </div><!-- End #content -->
    
    </div><!-- End #wrapper -->