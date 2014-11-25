 <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Simple Tables
                        <small>preview of simple tables</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Simple</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                    	<div class="col-md-8">
                    		<div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Packages</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-condensed">
                                        <tr>
                                            <th>Name</th>
                                            <th>Downloads</th>
                                            <th>Version</th>
                                        </tr>
                                        <?php 
	                                        global $fred; 
	                                        echo $fred->display_versions_table();
                                        ?>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                    	</div>
                    	<div class="col-md-4">
                    		<div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Bordered Table</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Name</th>
                                            <th>Downloads</th>
                                            <th>Version</th>
                                        </tr>
                                        <?php 
	                                        global $fred; 
	                                        echo $fred->display_versions_table();
                                        ?>
                                    </table>
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix">

                                </div>
                            </div><!-- /.box -->
						</div>
                        <div class="col-md-8">
                            <div class="box">
                            	<form role="form" name="add_version_form" method="post">
                                <div class="box-header">
                                    <h3 class="box-title">Add Version</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                	<div class="form-group">
										<label>Package</label>
										<select class="form-control" name="package_id" id="package_id">
											<option>Select</option>
											<?php
												foreach($fred->package_select_list() as $package_id => $package_name):
											?>
													<option value="<?php echo $package_id;?>"><?php echo $package_name; ?></option>			
											<?php
												endforeach;
											?>
										</select>
									</div>
                                	<div class="form-group">
										<label>Date masks:</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
										</div><!-- /.input group -->
									</div><!-- /.form group -->
									<?php 
									
									$args = array(
										"id" => "version",
										"display_name" => "Version Number",
										"icon" => "cogs"
									);
									echo $fred->form_item($args);
									
									$args = array(
										'id' => "name",
										'display_name' => "Name",
										'icon' => 'folder-open'
									);
									echo $fred->form_item($args);
									
									$args = array(
										'id' => 'author', 
										'display_name' => "Author",
										'icon' => 'user'
									);
									echo $fred->form_item($args);
									
									$args = array(
										'id' => 'requires',
										'display_name' => 'Required Wordpress Version',
										'icon' => 'key'
									);
									echo $fred->form_item($args);
									
									$args = array(
										'id' => 'tested',
										'display_name' => "Tested on Wordpress Version",
										'icon' => 'wheelchair'
									);
									echo $fred->form_item($args);
									
									$args = array(
										'id' => 'homepage',
										'display_name' => "Homepage",
										'icon' => 'globe'
									);
									echo $fred->form_item($args);
									
									?>
 
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            	</form>
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                        <div class="col-md-4">
                            <div class="box">
                            	<form role="form" name="add_package" method="post">
                                <div class="box-header">
                                    <h3 class="box-title">Add Package</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                	
									<?php 
									$fred->submit_form('submit_add_package');
									$args = array(
										"id" => "package_name",
										"display_name" => "Package ID Name",
										"icon" => "terminal"
									);
									echo $fred->form_item($args);
									
									$args = array(
										'id' => "url",
										'display_name' => "URL",
										'icon' => 'globe'
									);
									echo $fred->form_item($args);
									
									?>
 
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <button name="submit_add_package" value="1" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            	</form>
                            </div><!-- /.box -->
                        </div>
                    </div><!-- /.row -->
                </section><!-- /.content -->