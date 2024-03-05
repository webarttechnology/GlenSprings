 <!-- footer begin -->
        <footer class="blurBg">
            <div class="container">
                <div class="footer-inner blur-wrapper">
                    <div class="row">
                    <div class="footer_left col-sm-6">
                        <span class="logo">
                            <a href="<?php echo get_site_url(); ?>"><img src="<?=get_field('logo',10); ?>" alt="" class="mb-3"></a>
                        </span>
                        
                    </div>
                    <div class="footer-nav col-sm-6 row">
                    <div class="nav-column col-sm-6">
                        <h6 class="mb-2">RESOURCES</h6>
                        <?php wp_nav_menu( array('menu' => 'Footer Menu', 'container' => '', 'items_wrap' => '<ul class="footer__nav_list">%3$s</ul>' )); ?>
                        <!-- <ul class="footer__nav_list">
                            <li class="nav-list__item"><a href="#">Contact</a></li>
                            <li class="nav-list__item"><a href="#">About Us</a></li>
                            <li class="nav-list__item"><a href="#">Blog</a></li>
                            <li class="nav-list__item"><a href="#">Privacy Policy</a></li>
                            <li class="nav-list__item"><a href="#">Term & condition</a></li>
                        </ul> -->
                    </div>

                    <div class="nav-column col-sm-6 mb-3">
                        <h6 class="mb-2">LEGAL</h6>
                        <?php wp_nav_menu( array('menu' => 'Footer Menu2', 'container' => '', 'items_wrap' => '<ul class="footer__nav_list">%3$s</ul>' )); ?>
                        <!-- <ul class="footer__nav_list">
                            <li class="nav-list__item"><a href="#">Contact</a></li>
                            <li class="nav-list__item"><a href="#">About Us</a></li> -->
                            <!-- <li class="nav-list__item"><a href="#">Blog</a></li> -->
                            <!-- <li class="nav-list__item"><a href="#">Privacy Policy</a></li>
                            <li class="nav-list__item"><a href="#">Term & condition</a></li> -->
                        </ul>
                    </div>
                    </div>
                    <!-- <p>US: Denver, Colorado<br>Serving clients globally</p> -->
                    </div>
                    <hr>
                    <div class="footer__copyrights">
                        <ul class="copyrights__list d-flex justify-content-between">
                            <li class="copyrights__list_item">
                                <div class="copyrights__list_link"><?=get_field('copyright_text',10); ?></div>
                            </li>
                            <li class="copyrights__list_item">
                                <a href="#" class="copyrights__list_link"><?=get_field('email_text',10); ?></a>
                            </li>
                            <li class="copyrights__list_item">
                                <?=get_field('design_&_developed_text',10); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>
    <!-- Javascript Files
    ================================================== -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/designesia.js"></script>  
    <!-- <script src="js/custom-marquee.js"></script>    
    <script src='../../../www.google.com/recaptcha/api.js' async defer></script>
    <script src="form.js"></script>   -->
   
    <script type="text/javascript">
        window.addEventListener('scroll', function() {
            var sidebar = document.getElementById('sidebar');
            var footer = document.querySelector('#section-services');
            var sidebarHeight = sidebar.offsetHeight;
            var footerOffsetTop = footer.offsetTop;
            var footerHeight = footer.offsetHeight;
            var scrollPosition = window.scrollY;

            if (scrollPosition >= sidebarHeight && scrollPosition < footerOffsetTop - (window.innerHeight / 1.5)) {
                sidebar.classList.add('fixed');
            } else {
                sidebar.classList.remove('fixed');
            }
        });
    </script>

<?php wp_footer(); ?>

</body>
</html>