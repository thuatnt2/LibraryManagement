<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 

        <!-- Website Title --> 
        <title>WeAdmin | Dashboard</title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css(array(
            'green/screen.css',
            'green/datepicker.css',
            'tipsy.css',
            '../js/visualize/visualize.css',
            '../js/jwysiwyg/jquery.wysiwyg.css',
            '../js/fancybox/jquery.fancybox-1.3.0.css',
            '/usermgmt/css/umstyle',
        ));
        echo $this->Html->script(array(
            'script/jquery.min.js',
            'script/jquery-ui-1.8.custom.min.js',
            'jquery.img.preload.js',
            'hint.js',
            'visualize/jquery.visualize.js',
            'jwysiwyg/jquery.wysiwyg.js',
            'fancybox/jquery.fancybox-1.3.0.js',
            'jquery.tipsy.js',
            'custom_green.js'
        ));
        echo $this->fetch('meta');
        //echo $this->fetch('css');
        //echo $this->fetch('script');
        ?>

    </head>
    <body>
        <div class="content_wrapper">

            <!-- Begin header -->
            <?php echo $this->element('admin/header')?>
            <!-- End header -->


            <!-- Begin left panel -->
            <?php echo $this->element('admin/left_menu'); ?>
            <!-- End left panel -->


            <!-- Begin content -->
            <div id="content">
                <div class="inner">
                    <?php echo $this->element('admin/top_bar'); ?>
                    <!--content for layout-->
                     <?php echo $this->fetch('content') ?>
                    <!--End content for layout-->

                </div>

                <br class="clear"/><br class="clear"/>
               
                <!-- Begin footer -->
                <?php echo $this->element('admin/footer') ?>
                <!-- End footer -->

            </div>
            <!-- End content -->
        </div>
    </body>
</html>