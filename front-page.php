
<div class="main hero">
<?php get_header();  ?>
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      
      <div class="tagline">
          <h1><?php the_field('tagline'); ?></h1> 
      </div>
      <div class="subtag col-md-8">
          <h3><?php the_field('subtag'); ?></h3>
      </div>

      <div class="contactform">
        <h3>Want to know when Hopeful Inc. is launching?<br>Enter your email address below for updates.</h3>
        <?php echo do_shortcode('[contact-form-7 id="46" title="Contact Form"]'); ?>
        
      </div>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <!-- <h2><?php the_title(); ?></h2> -->
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->


<div class = "col-md-4 offset-4 behopeful clearfix">
  <h2>Be Hopeful</h2>
</div>
<div class="container">
  <div class="behopefulcontainer col-md-12">
  <div class="containerflex behopefulcontent">
    <div class="contentbox">
    <?php 

    $image = get_field('be_hopeful_image_#1');

    if( !empty($image) ): ?>

    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

    <?php endif; ?>
        <p class = "boxone"><?php the_field('box_text_1'); ?></p>
    </div>
    <div class="arrow my-auto">
      <?php 

        $image = get_field('arrow');

        if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

      <?php endif; ?>
    </div>
   
    <div class="contentbox">

       <?php 

        $image = get_field('be_hopeful_image_#2');

        if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
        <p><?php the_field('box_text_2'); ?></p>
  
    </div>
    <div class="arrow my-auto">
        <?php 

        $image = get_field('arrow');

        if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
    </div>
    <div class="contentbox">
        <?php 

        $image = get_field('round_logo');

        if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
        <p class = "boxthree"><?php the_field('box_text_3'); ?></p>
    </div>
  </div>
</div>
</div>


<div class="container">
  <div class="savingcontent col-md-12">
  <h2>Hopeful is the solution for nonprofits looking to store, analyze, and leverage their data for their future growth</h2>
  <?php 

        $image = get_field('round_logo_only');

        if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
</div>
</div>

<div class="container">
  <div class="savingcontent col-md-12">
  <div class="row">
    <h2>See How You're Saving The World</h2>
    <p>Despite one of the biggest economic bull-runs in history, donor dollars for nonprofits have been declining for the past decade. In a time of increasing competition, nonprofits are not leveraging advances in data management technologies to collect, analyze, and leverage the data they collect on their potential donors and volunteers. <br><br>
    Hopeful Inc. is creating the first audience analytics platform specifically for nonprofits and their for profit partners. Using the machine learning techniques widely used in the for-profit sector, Hopeful's technology will allow your organization to better target your likeliest donors, source potential new business partnerships, and even proactively suggest the best channels to market your initiatives. </p>
  </div>
  <div class="containerflex">
    <div class="bluebox blueboxone">
      <h4>5%</h4>
      <p>Of Nonprofits in 2018 reported that they used data in their decision-making</p>
    </div>
    <div class="bluebox">
      <h4>97%</h4>
      <p>Expressed a strong interest in learning how to use their data to increase their donor pool</p>
    </div>
    <div class="bluebox">
      <h4>48%</h4>
      <p>Of Nonprofit Executives reported they were unsure how their organization tracked their data</p>
    </div>
    <div class="bluebox blueboxfour">
      <h4>79%</h4>
      <p>Reported that they did not have enough personnel or time to effectively managed their data</p>
    </div>
  </div>
  </div>
</div>

<h2 class="text-center subheading">Our Team<hr></h2>

<div class="container">
<div class="containerflex col-md-12 ourteam">
  <div class="teammember">
  <div class="teammemberheading memberone">
    <h5>Alexander Jivov</h5>
    <h6>Chief Executive Officer/Co-Founder</h6>
  </div>
    <?php 

        $image = get_field('team_member_image_1');

        if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
        <p><?php the_field('team_bio_1'); ?></p> 
  </div>
  <div class="teammember">
  <div class="teammemberheading">
    <h5>Ahsan Javed</h5>
    <h6>Chief Technology Officer/Co-Founder</h6>
  </div>
      <?php 

        $image = get_field('team_member_image_2');

        if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
     <p><?php the_field('team_bio_2'); ?></p>   
  </div>
  <div class="teammember">
  <div class="teammemberheading memberthree">
    <h5>Soleiman Rahmani</h5>
    <h6>Data Scientist/Developer</h6>
  </div>
        <?php 

        $image = get_field('team_member_image_3');

        if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
        <p><?php the_field('team_bio_3'); ?></p> 
  </div>
</div>
</div>

<h2 class="text-center subheading">Get In Touch<hr></h2>
<div class="contactformlower containerflex">
  <!-- <div class="bluebackground"> -->
  <form id = "contactformlower">
  <h5>Send us a message</h5>
  <?php echo do_shortcode('[contact-form-7 id="204" title="Get In Touch"]'); ?>
</div>
</form>
<!-- </div> -->
  

<?php get_footer(); ?>
