<?php get_header()?>

<section class="hero">
        <div class="hero-left">
            <div>
                <h1><?php the_field('hero_header')?></h1>
            </div>
            <div>
                <p>Hassle free and committed assistance to your assignments, exams, quizzes and dissertation</p>
            </div>
            <div class="hero-btn">
                <button>Get a Quote</button>
                <button>Book a Demo</button>
            </div>
        </div>
        <?php if(get_field('$hero_image'));?>
        <div class="hero-right">
            <img src="<?php the_field('hero_image');?>" alt="">
        </div>

    </section>
    <section class="form-container">
        <form action="" class="form">
            <p class="form-header">Get a Quote within 1 hour</p>
            <p class="form-text">Initiate the conversation with our instant mailing service. Just fill out the form and attach necessary files. A copy of the mail will also be sent to you. You can also text us directly on WhatsApp.</p>
            <div class="form-row-a">
                <div>
                    <label for="">Full Name</label>
                    <input type="text" placeholder="John Doe"/>
                </div>
                <div>
                    <label for="">Email Address</label>
                    <input type="email" placeholder="john@doe.com"/>
                </div>
                <div>
                    <label for="">Contact Number</label>
                    <input type="text" placeholder="+91 9999999999"/>
                </div>
            </div>
            <div class="form-row">
                <div>
                    <label for="">Title of Assignment</label>
                    <input type="text" placeholder="E.g - Mid Sem Machine Learning Assignment"/>
                </div>
            </div>
            <div class="form-row">
                <div>
                    <label for="">Short description of assignment</label>
                    <textarea></textarea>
                </div>
            </div>
            <div class="form-row">
                <div>
                    <label for="">Upload relevant files</label>
                    <input type="file"/>
                </div>
            </div>
            <div class="form-row">
                <button type="submit">Get a Quote</button>
            </div>
        </form>
    </section>
    <section class="flex-container">
    <h1 style="font-size: 2em;font-weight: 600;margin: 0 1em;text-align: center;">A PACE forward in your academic grades</h1>
    <div class="card-container">
        <div class="flex-card">
            <div class="card-img">
                <img src="<?php the_field('assignments_image');?>" alt="">
            </div>
            <div class="card-content">
                <h2>Assignments</h2>
                <p>Our team manages the assignment and works with in-depth proficiency. The brief, learning outcomes and rubrics will be followed extensively to give relevant and quality work.</p>
                <p>Check our samples</p>
            </div>
        </div>
        <div class="flex-card">
            <div class="card-img">
                <img src="<?php the_field('exams_image');?>" alt="">
                <img src="./test.png" alt=""/>
            </div>
            <div class="card-content">
                <h2>Exams</h2>
                <p>Our experts have cracked some of the toughest entrance examinations in the world. Our unique approach, expertise and team work will take care of your exam worries. Send a sample with the date and time of exam and let us take care of it.</p>
                <p>Check our samples</p>
            </div>
        </div>
        <div class="flex-card">
            <div class="card-img">
                <img src="<?php the_field('quizzes_image');?>" alt="">
                <img src="./quiz.png" alt=""/>
            </div>
            <div class="card-content">
                <h2>Online Quizzes</h2>
                <p>Our team has over a million hours of quiz taking experience. We know what works to get you through your quizzes. You can see numerous quiz screenshots on our testimonials page.</p>
                <p>Check our samples</p>
            </div>
        </div>
        <div class="flex-card">
            <div class="card-img">
                <img src="<?php the_field('dissertations_image');?>" alt="">
                <img src="./project.png" alt=""/>
            </div>
            <div class="card-content">
                <h2>Dissertations</h2>
                <p>Research Topics, Methodology, Literature survey, large word count, quantitative and qualitative surveys, strict deadlines, numerous feedback form supervisor, development bugs etc worrying you ? Not anymore. Contact us now.</p>
                <p>Check our samples</p>
            </div>
        </div>
    </div>
    </section>
    <section class="flex-container">
        <div class="card-container">
            <h1>Do not take our word for it</h1>
            <p>Don't trust reviews catered by writers? Why Should YOU!!! Check out our 100% genuine WhatsApp conversations and results screenshots. Necessary precautions have been taken to maintain privacy of our clients.</p>
            <a href="">Check Testimonials</a>
        </div>
    </section>
    <section class="flex-container">
        <h1 style="font-size: 2em;font-weight: 600; margin: 0 1em;text-align: center;">People are choosing PACE because</h1>
        <div class="card-container">
            <div class="flex-card-a" style="padding: 1em">
                <div class="card-img-a">
                    <img src="./plagiarism.png" alt=""/>
                </div>
                <div class="card-content-a">
                    <h2>Zero Plagiarism</h2>
                    <p>We are committed towards giving plagiarism free work. All content is checked in turnitin before it makes it to you or your submission portal.</p>
                </div>
            </div>
            <div class="flex-card-a" style="padding: 1em">
                <div class="card-img-a">
                    <img src="./trust.png" alt=""/>
                </div>
                <div class="card-content-a">
                    <h2>Trust Policy</h2>
                    <p>We will NOT scam you. We have your best interests in mind and will try our best to get you through. If a task is not doable, we simply decline the assignment. We confirm only the doable tasks. So get your quote now.</p>
                </div>
            </div>
            <div class="flex-card-a" style="padding: 1em">
                <div class="card-img-a">
                    <img src="./support.png" alt=""/>
                </div>
                <div class="card-content-a">
                    <h2>Unprecedented support</h2>
                    <p>You will always be updated about your work. We want you not to be worried about anything. Quick replies and regular updates is our motto. Connect with us on WhatsApp now.</p>
                </div>
            </div>
            <div class="flex-card-a" style="padding: 1em">
                <div class="card-img-a">
                    <img src="./privacy.png" alt=""/>
                </div>
                <div class="card-content-a">
                    <h2>Full Privacy</h2>
                    <p>We do not disclose even the client's name to the experts untill necessary for the task. We use VPN to login into moodle and blackboards. Your details are safe with us. We take great care for it.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="flex-container">
        <h1 style="font-size: 2em;font-weight: 600; margin: 0 1em;">Blog Posts to help you</h1>
        <div class="card-container" style="justify-content: flex-start;">
            <?php 
                $blogs_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3
                );
                $blog_posts = new WP_Query($blogs_args);
                while($blog_posts->have_posts(  )){
                    $blog_posts->the_post(  );
            ?>
            <div class="flex-card-a" style="height:450px">
                <div class="card-img-blog">
                    <?php the_post_thumbnail();?>
                </div>
                <div class="card-content-blog">
                    <h2><?php the_title()?></h2>
                    <p><?php the_excerpt()?></p>
                </div>
                <a href="<?php the_permalink()?>">Read More</a>
            </div>
            <?php
                }
            ?>
        </div>
    </section>
    <section>
        <!-- wp:structured-content/faq-item {"question":"Are your experts reliable ?"} -->
        <!-- wp:paragraph {"placeholder":"Enter your answer here"} -->
        <p>Our experts are from leading educational institutes from India like IITs, NITs, IIMs and top business and law schools. They have to take some of the toughest exams in the world just to get admitted. So yes, they are reliable.</p>
        <!-- /wp:paragraph -->
        <!-- /wp:structured-content/faq-item -->

        <!-- wp:structured-content/faq-item {"question":"Do you take care of plagiarism ?"} -->
        <!-- wp:paragraph {"placeholder":"Enter your answer here"} -->
        <p>Yes, 0% plagiarism guaranteed. Will send you a turnitin report as well.</p>
        <!-- /wp:paragraph -->
        <!-- /wp:structured-content/faq-item -->

        <!-- wp:structured-content/faq-item {"question":"Will you take care of my deadline?"} -->
        <!-- wp:paragraph {"placeholder":"Enter your answer here"} -->
        <p>Yes, always. We understand how important the work is to you. We will make sure the deadline is met.</p>
        <!-- /wp:paragraph -->
        <!-- /wp:structured-content/faq-item -->
    </section>

    <?php get_footer()?>