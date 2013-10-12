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
			'vendor/bootstrap.min',
			'vendor/holder',
			'admin_simpla.jquery.configuration',
			'ckeditor/ckeditor',
			'vendor/fancybox/jquery.fancybox',
			'admin',
		));
		echo $this->fetch('scriptBottom');

		?>
		<script type="text/javascript">
			var faculty_id = $('#UserFacultyId').val();
			console.log(faculty_id);
			if (faculty_id != '')
				loadDepartment(faculty_id);
			$('#UserFacultyId').on('change', function() {
				//alert('change');
				//$('#ReaderFacultyId').change(function() {
				var faculty_id = $('#UserFacultyId').val();
				if (faculty_id != '')
					loadDepartment(faculty_id);
			});

			function loadDepartment(faculty_id) {
				$.ajax({
					type: 'POST',
					url: 'loadDepartment',
					async: false,
					data: {faculty_id: faculty_id},
					success: function(response) {
						console.log(response);
						var departments = $.parseJSON(response);
						var option = '<option value="">Chọn lớp</option>';
						if (departments.length > 0) {
							for (var i = 0; i < departments.length; i++) {
								option += '<option value = "' + departments[i]['Department']['id'] + '">' + departments[i]['Department']['name'] + '</option>'

							}
						}
						$('#UserDepartmentId').html(option);
					}
				});
			}
		</script>

    </body>


</html>
