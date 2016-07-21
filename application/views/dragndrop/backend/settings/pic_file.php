 
	<div id="page-wrapper">
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> <i class="fa fa-image fa-fw"></i> <?php echo lang('settings_pic_name') ?></h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->			
			
		<div class="row">
			<div class="col-md-12 col-lg-12">
			
			   <?php echo form_open('admin/settings/picfile', array('class' => 'form-horizontal', 'id' => 'form_settings_pic', 'name' => 'form_settings_pic', 'role' => 'form' )); ?>
								
					<div class="form-group">
						<label><?php echo lang('profile_max_upload_width') ?></label>
						<input class="form-control" type="text" name="max_upload_width" id="max_upload_width" value="<?php echo set_value('max_upload_width', $max_upload_width); ?>"/>
						<p class="help-block"><?php echo form_error('max_upload_width'); ?></p>
					</div> 								
					
					<div class="form-group">
						<label><?php echo lang('profile_max_upload_height') ?></label>
						<input class="form-control" type="text" name="max_upload_height" id="max_upload_height" value="<?php echo set_value('max_upload_height', $max_upload_height); ?>"/>
						<p class="help-block"><?php echo form_error('max_upload_height'); ?></p>
					</div> 
					
					<div class="form-group">
						<label><?php echo lang('profile_allowed_extensions') ?></label>
						<input class="form-control" type="text" name="allowed_extensions" id="allowed_extensions" value="<?php echo set_value('allowed_extensions', $allowed_extensions); ?>"/>
						<p class="help-block"><?php echo form_error('allowed_extensions'); ?></p>
					</div> 
					
					<div class="form-group">
						<label><?php echo lang('profile_max_upload_filesize') ?></label>
						<input class="form-control" type="text" name="max_upload_filesize" id="max_upload_filesize" value="<?php echo set_value('max_upload_filesize', $max_upload_filesize); ?>"/>
						<p class="help-block"><?php echo form_error('max_upload_filesize'); ?></p>
					</div> 	

					<div class="btn-group"> 
						<input type="submit" class="btn btn-primary" id="button" name="profile_pic_submit" value="<?php echo lang('save') ?>" />
					</div> 						
					<div class="btn-group">
						<input type="submit" class="btn" id="button" name="profile_pic_cancel" value="<?php echo lang('cancel') ?>" /> 
					</div>							
					
				<?php echo form_close(); ?>	                        
						   
			</div>
			<!-- /.col-md-12 .col-lg-12 -->				
		</div>
		<!-- /.row --> 
    </div>
    <!-- /#wrapper --> 