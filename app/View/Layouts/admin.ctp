<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

        <title>Simpla Admin</title>

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
            'admin_custom',
        ));
        echo $this->Html->script(array(
            'vendor/jquery-1.9.1.min',
            'vendor/bootstrap.min',
            'vendor/holder',
            'admin_simpla.jquery.configuration',
            'ckeditor/ckeditor',
            'vendor/fancybox/jquery.fancybox',
            'admin',
        ));
        ?>
        <script type="text/javascript">
            var base_url = '<?php echo $this->Html->webroot('/'); ?>';
        </script>
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
                echo $this->element('admin/footer');
                ?>

            </div> <!-- End #main-content -->

        </div>
        <?php
        ?>
    </body>

</html>
