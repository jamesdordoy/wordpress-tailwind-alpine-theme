
        <footer class="bg-gray-100">
            <nav class="footer-navigation flex content-center">
                <?php
                    $args = [
                        'theme_location' => 'footer',
                    ];
                    wp_nav_menu($args);
                ?>
            </nav>
            <p class="text-center"><?php bloginfo('name'); ?> - &copy; <?php echo date("Y"); ?></p>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>