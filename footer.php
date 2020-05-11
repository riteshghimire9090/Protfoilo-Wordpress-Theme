
<div id="contact">
    <h2>Get in Touch</h2>
    <div id="contact-form">
        <form method="POST" action="">

<!--            <input type="text" name="name" placeholder="Your Full" required>-->
            <input type="email" name="email" placeholder="Your email" required>
            <input type="textarea" name="subject" placeholder="Subject" />
            <textarea name="message"  name="message" placeholder="Your message" required></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
    <!-- End #contact-form -->
</div>
<!-- End #contact -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 copyright">
                <p>
                    Copyright &copy; <?php echo date("Y"); ?> <a rel="follow"  href="http://riteshghimire.com/" >Ritesh Ghimire</a>
                </p>
            </div>
            <div class="col-sm-2 top">
                    <span id="to-top">
                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                    </span>
            </div>
            <div class="col-sm-5 social">
                <ul>
                    <li>
                        <a href="<?php echo get_theme_mod("devpro_social_media_github")?>" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo get_theme_mod("devpro_social_media_stack_over_flow")?>" target="_blank"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo get_theme_mod("devpro_social_media_linkedin")?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo get_theme_mod("devpro_social_media_facebook")?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo get_theme_mod("devpro_social_media_twitter")?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo get_theme_mod("devpro_social_media_google_plus")?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- End footer -->



<script src="<?php echo get_template_directory_uri()?>/js/scripts.min.js"></script>

<?php //wp_footer();?>
</body>

</html>
