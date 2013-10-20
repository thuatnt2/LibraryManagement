<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

        <title><?php echo $title_for_layout ?></title>

        <!--                       CSS                       -->

        <!-- Reset Stylesheet -->
		<?php
		echo $this->Html->css(array(
			'admin_reset',
//			'vendor/bootstrap.min',
                        'bootstrap-3',
			'vendor/bootstrap-theme.min',
			'admin',
			'admin_invalid',
			'/usermgmt/css/umstyle',
//			'/js/vendor/fancybox/jquery.fancybox',
//			'/js/vendor/jquery-ui/jquery.ui.all',
			'admin_custom',
		));

		?>
    </head>

    <body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->

			<?php
			echo $this->element('admin/left_bar');

			?>

            <div id="main-content"> <!-- Main Content Section with everything -->
				<?php
				echo $this->element('admin/header')

				?>

                <!--content for layout-->
				<?php echo $this->fetch('content'); ?>

				<?php
//				echo $this->element('admin/footer');

				?>

            </div> <!-- End #main-content -->
			<!--Modal content-->
			<div style="display: none" class="modal fade" id="my-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" id="x-close">&times;</button>
							<h4 class="modal-title" id="title-of-modal">Modal title</h4>
						</div>
						<div class="modal-body" id="content-of-modal">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			
			<div style="display: none; position: fixed; top: 35%; left: 50%;" id="indicator">
				<img src="<?php echo $this->Html->url('/images/indicator.gif');?>"/>
			</div>


        </div>
		<script type="text/javascript">
			var base_url = window.location.hostname;
        </script>
		<?php
		echo $this->Html->script(array(
			'vendor/jquery-1.9.1.min',
			'jquery.extensions',
			'vendor/bootstrap.min',
			'vendor/modal',
			'vendor/holder',
			'jquery.cookie',
			'admin_simpla.jquery.configuration',
			'ckeditor/ckeditor',
			'vendor/fancybox/jquery.fancybox',
			'admin',
		));
		echo $this->fetch('scriptBottom');

		?>


    </body>


</html>
