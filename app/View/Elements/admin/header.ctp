<!-- Page Head -->
<h2>Welcome <?php echo $this->Session->read('UserAuth.User.username'); ?></h2>
<!--<p id="page-intro">What would you like to do?</p>

<ul class="shortcut-buttons-set">

    <li><a class="shortcut-button new-article" href="#"><span class="png_bg">
                Write an Article
            </span></a></li>

    <li><a class="shortcut-button new-page" href="#"><span class="png_bg">
                Create a New Page
            </span></a></li>

    <li><a class="shortcut-button upload-image" href="#"><span class="png_bg">
                Upload an Image
            </span></a></li>

    <li><a class="shortcut-button add-event" href="#"><span class="png_bg">
                Add an Event
            </span></a></li>

    <li><a class="shortcut-button manage-comments" href="#messages" rel="modal"><span class="png_bg">
                Open Modal
            </span></a></li>

</ul> End .shortcut-buttons-set -->

<div class="clear"></div> <!-- End .clear -->
<noscript> <!-- Show a notification if the user has disabled javascript -->
<div class="notification error png_bg">
    <div>
        Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
    </div>
</div>
</noscript>