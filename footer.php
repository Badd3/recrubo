
    </section>

    <footer class="site-footer">
        <div class="container">
            <aside class="footer-widgets widget-area">
                <?php dynamic_sidebar('footer-widgets'); ?>
            </aside>
        </div>
    </footer>

    <?php wp_footer(); ?>

    <?php if(is_page('chatbots')) { ?>
        <script type="text/javascript">
            window.__flowai_webclient_embed = 'demo-bot';
        </script>
        <!-- <script src="https://widget.flowai.app/w/YU8xYXI1WWRBfGNvSTVweFFfeQ==/flow-webclient-1.1.2.min.js"></script> -->
        <script src="https://widget.flowai.app/w/YU8xYXI1WWRBfGNvSTVweFFfeQ==/flow-webclient-1.1.2.min.js?r=1621888973665"></script>
    <?php } ?>




</body>
</html>
