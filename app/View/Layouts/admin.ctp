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
			'vendor/bootstrap',
			'vendor/bootstrap-theme.min',
			'admin',
			'admin_invalid',
			'/usermgmt/css/umstyle',
			'/js/vendor/fancybox/jquery.fancybox',
			'/js/vendor/jquery-ui/jquery.ui.all',
			'admin_custom',
		));

		?>
    </head>

    <body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->

			<?php
			echo $this->element('admin/left_bar');

			?>

            <div id="main-content"> <!-- Main Content Section with everything -->
				<div id="header-control">
					<div class="content-box header-left"><!-- Start Content Box -->
						<p>
							<button class="btn btn-large">Mượn trả sách</button>
							<button class="btn btn-large">Đăng kí bạn đọc</button>
							<button class="btn btn-large">Biên mục sách</button>
						</p>
					</div>
					<div class="content-box header-right"><!-- Start Content Box -->

						<div class="content-box-content">
							<h4>Xin chào : <a href="#">Lê Mai Viện</a></h4>
							<p>Chức vụ : Thủ thư</p>
							<a href="#">Thông tin cá nhân</a>
							<a href="#">Đổi mật khẩu</a>
							<a href="">Đăng xuất</a>

						</div> <!-- End .content-box-content -->

					</div> <!-- End .content-box -->
					<div class="clear"></div>
				</div>

				<?php
//                                    echo $this->element('admin/header')

				?>

                <!--content for layout-->
				<?php echo $this->fetch('content'); ?>

				<?php
				echo $this->element('admin/footer');

				?>

            </div> <!-- End #main-content -->

        </div>
		<script type="text/javascript">
			var base_url = '<?php echo $this->Html->webroot('/'); ?>';
        </script> 
		<?php
		echo $this->Html->script(array(
			'vendor/jquery-1.9.1.min',
			'jquery.extensions',
			'vendor/bootstrap.min',
			'vendor/holder',
			'admin_simpla.jquery.configuration',
			'ckeditor/ckeditor',
			'vendor/fancybox/jquery.fancybox',
			'admin',
		));
		echo $this->fetch('scriptBottom');

		?>


    </body>


</html>
