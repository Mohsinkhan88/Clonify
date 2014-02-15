<div id="wrapper">

        <!--Body content-->
        <div id="content" class="clearfix">
            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">

                    <h3>Load Results</h3>                                                                               
                </div><!-- End .heading-->
				<div class="row-fluid">
				<div class="span12">
                            
                            <div class="box">
                                <div class="content noPad">
                                    <table class="responsive table table-bordered">
                                        <thead>
                                          <tr>
                                            <th width = "40px" >#</th>
                                            <th width = "300px">Date/Time</th>
                                            <th>Name</th>
                                            <th width = "40px">Status</th>
                                          </tr>
                                        </thead>
                                        <tbody>
										<?php $count=1; foreach ($results as $result){ ?>
										<tr>
                                            <td><?php echo $count; $count++; ?></td>
                                            <td><?php echo $result->invoked_time; ?></td>
                                            <td><a href=#><?php echo $user_name.'_'.$result->user_id.'_'.$result->id;?><a></td>
											<?php if($result->status == 1){ ?>
                                            <td><img src="<?=asset_url('images/Info.png') ?>" height ="24" width="24" /></td>
											<?php } ?>
											<?php if($result->status == 2){ ?>
                                            <td><img src="<?=asset_url('images/Tick.png') ?>" height ="24" width="24" /></td>
											<?php } ?>
											<?php if($result->status == 3){ ?>
                                            <td><img src="<?=asset_url('images/Error.png') ?>" height ="24" width="24" /></td>
											<?php } ?>
                                          </tr>
										<?php } ?>
                                        <!--  
										  <tr>
                                            <td>1</td>
                                            <td>2014-02-11T10:22:46+00:00</td>
                                            <td><a href=#>umerhayat_result_5<a></td>
                                            <td><img src="<?=asset_url('images/Info.png') ?>" height ="24" width="24" /></td>
                                          </tr>
                                          <tr>
                                            <td>1</td>
                                            <td>2014-02-11T10:22:46+00:00</td>
                                            <td><a href=#>umerhayat_result_4<a></td>
                                            <td><img src="<?=asset_url('images/Tick.png') ?>" height ="24" width="24" /></td>
                                          </tr>
                                          <tr>
                                            <td>1</td>
                                            <td>2014-02-11T10:22:46+00:00</td>
                                            <td><a href=#>umerhayat_result_3<a></td>
                                            <td><img src="<?=asset_url('images/Tick.png') ?>" height ="24" width="24" /></td>
                                          </tr>
										  <tr>
                                            <td>1</td>
                                            <td>2014-02-11T10:22:46+00:00</td>
                                            <td><a href=#>umerhayat_result_2<a></td>
                                            <td><img src="<?=asset_url('images/Error.png') ?>" height ="24" width="24" /></td>
                                          </tr>
										  <tr>
                                            <td>1</td>
                                            <td>2014-02-11T10:22:46+00:00</td>
                                            <td><a href=#>umerhayat_result_1<a></td>
                                            <td><img src="<?=asset_url('images/Tick.png') ?>" height ="24" width="24" /></td>
                                          </tr> -->
                                        </tbody>
                                    </table>
                                </div>

                            </div><!-- End .box -->

                        </div>
						
			</div>
			</div>
			</div>
		</div>