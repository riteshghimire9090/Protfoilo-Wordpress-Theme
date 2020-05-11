<?php get_header()?>

<!-- End header -->

<div id="lead">
    <div id="lead-content">
        <h1><?php echo get_theme_mod("devpro_personal_detail_handle_name")?></h1>
        <h2><?php echo get_theme_mod("devpro_personal_detail_handle_profession")?></h2>
        <a href="<?php echo get_theme_mod("devpro_personal_detail_handle_download_url")?>" class="btn-rounded-white"><?php _e("Download Resume","devpro")?></a>
    </div>
    <!-- End #lead-content -->

    <div id="lead-overlay"></div>

    <div id="lead-down">
            <span>
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </span>
    </div>
    <!-- End #lead-down -->
</div>
<!-- End #lead -->

<div id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="heading"><?php _e("About Me","devpro")?></h2>
            </div>
            <div class="col-md-8">
                <p>
                    <?php echo get_theme_mod("devpro_personal_detail_handle_about")?>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- End #about -->

<div id="experience" class="background-alt">
    <h2 class="heading"><?php _e("Experience","devpro")?></h2>
    <div id="experience-timeline">
        <?php
       $experiences= get_posts(["numberposts"=>3,'post_type'   => 'experience']);
        foreach($experiences as $experience)
        {



        ?>

        <div data-date="<?php echo $experience->post_excerpt ?>">
            <h3> <?php echo $experience->post_title ?></h3>
            <?php echo $experience->post_content ?>
        </div>

        <?php
        }
        ?>


    </div>
</div>
<!-- End #experience -->

<div id="education">
    <h2 class="heading"><?php _e("Education","devpro")?></h2>
    <?php
    $educations= get_posts(["numberposts"=>3,'post_type'   => 'education']);

    foreach($educations as $education)
    {
?>
        <div class="education-block">
            <h3><?php echo $education->post_title ?></h3>
            <span class="education-date"><?php echo $education->post_excerpt ?></span>
            <?php echo $education->post_content ?>
        </div>


        <?php
    }


    ?>

    <!-- End .education-block -->

<!--    <div class="education-block">-->
<!--        <h3>University of Ottawa</h3>-->
<!--        <span class="education-date">Sept 2016 - Sept 2017</span>-->
<!--        <h4>Bachelor of Science in Computer Science</h4>-->
<!--        <ul>-->
<!--            <li>-->
<!--                Lorem ipsum dolor sit amet, consectetur adipiscing elit.-->
<!--            </li>-->
<!--            <li>-->
<!--                Lorem ipsum dolor sit amet, consectetur adipiscing elit.-->
<!--            </li>-->
<!--            <li>-->
<!--                Lorem ipsum dolor sit amet, consectetur adipiscing elit.-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
    <!-- End .education-block -->
</div>
<!-- End #education -->

<div id="projects" class="background-alt">
    <h2 class="heading"><?php _e("Projects","devpro")?></h2>
    <div class="container">
        <div class="row">

            <?php
            $projects   =   get_posts(["numberposts"=>3,'post_type'   => 'project']);
            foreach ($projects as $project)
            {
                ?>

                <div class="project shadow-large">
                    <div class="project-image">
                    <?php echo get_the_post_thumbnail($project->ID) ?>
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>  <?php echo $education->post_title ?></h3>
                        <p>
                            <?php echo $education->post_content ?>
                        </p>
<!--                        <a href="  --><?php //echo $education->post_content ?><!--">View Project</a>-->
                    </div>
                    <!-- End .project-info -->
                </div>


                <?php
            }

            ?>

            <!-- End .project -->


            <!-- End .project -->
        </div>
    </div>
</div>
<!-- End #projects -->

<div id="skills">
    <h2 class="heading"><?php _e("Skills","devpro")?></h2>
    <ul>
        <?php
        foreach(get_tags() as $tag)
        {
            echo "<li>$tag->name</li>";
        }


        ?>

    </ul>
</div>
<!-- End #skills -->

<?php get_footer()?>
