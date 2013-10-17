<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 

        <!-- Website Title --> 
        <title>WeAdmin | Login</title>

        <!-- Meta data for SEO -->
        <meta name="description" content="">
        <meta name="keywords" content="">

        <!-- Template stylesheet -->
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css(array(
            'green/screen.css',
        ));
        echo $this->Html->script(array(
            'script/jquery.min.js',
            'hint.js',
        ));
        echo $this->fetch('meta');
        ?>
        <script type="text/javascript" charset="utf-8">
            $(function() {
                // find all the input elements with title attributes
                $('input[title!=""]').hint();
                $('#login_info').click(function() {
                    $(this).fadeOut('fast');
                });
            });
        </script>
    </head>
    <body class="login">
        <!-- Begin login window -->
        <?php echo $this->fetch('content')?>
        <!-- End login window -->
    </body>
</html>
