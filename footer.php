<footer class="l_footer fadeUpTrigger Mincho font_white" id="Footer_jp">
    <div class="toTop" href="#top">
        <span></span>
    </div>
    <div class="copylight">&copy;Kaito Shinomiya</div>
    <!-- <div class="Contact">
                <a href="tel:08029785073" class="font_white">Tel080-2978-5073</a>
            </div> -->
</footer>
</div>
<?php
wp_enqueue_script('portfolio-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js');
wp_enqueue_script('portfolio-js', get_template_directory_uri() . '/assets/js/commn.js');
?>
<?php wp_footer(); ?>
</body>

</html>
