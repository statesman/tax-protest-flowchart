<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <?php
  $meta = array(
    "title" => "Protesting your tax assessment | Statesman.com",
    "description" => "A flowchart on the process to protest tax evaluations by Travis Central Appraisal District.",
    "thumbnail" => "http://projects.statesman.com/news/tax-protest-flowchart/assets/share.png", // needs update
    "shortcut_icon" => "http://media.cmgdigital.com/shared/theme-assets/242014/www.statesman.com_5126cb2068bd43d1ab4e17660ac48255.ico",
    "apple_touch_icon" => "http://media.cmgdigital.com/shared/theme-assets/242014/www.statesman.com_fa2d2d6e73614535b997734c7e7d2287.png",
    "url" => "http://projects.statesman.com/news/tax-protest-flowchart/",
    "twitter" => "statesman"
  );
?>

  <title>Interactive: <?php print $meta['title']; ?> | Austin American-Statesman</title>
  <link rel="shortcut icon" href="<?php print $meta['shortcut_icon']; ?>" />
  <link rel="apple-touch-icon" href="<?php print $meta['apple_touch_icon']; ?>" />

  <link rel="canonical" href="<?php print $meta['url']; ?>" />

  <meta name="description" content="<?php print $meta['description']; ?>">

  <meta property="og:title" content="<?php print $meta['title']; ?>"/>
  <meta property="og:description" content="<?php print $meta['description']; ?>"/>
  <meta property="og:image" content="<?php print $meta['thumbnail']; ?>"/>
  <meta property="og:url" content="<?php print $meta['url']; ?>"/>

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@<?php print $meta['twitter']; ?>" />
  <meta name="twitter:title" content="<?php print $meta['title']; ?>" />
  <meta name="twitter:description" content="<?php print $meta['description']; ?>" />
  <meta name="twitter:image" content="<?php print $meta['thumbnail']; ?>" />
  <meta name="twitter:url" content="<?php print $meta['url']; ?>" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dist/style.css">

  <link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>


  <?php /* CMG advertising and analytics */ ?>
  <?php include "includes/advertising.inc"; ?>
  <?php include "includes/metrics-head.inc"; ?>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

        <a class="navbar-brand" href="http://www.statesman.com/" target="_blank">
        <img class="visible-xs visible-sm" width="103" height="26" src="assets/logo-short-black.png" />
        <img class="hidden-xs hidden-sm" width="273" height="26" src="assets/logo.png" />
        </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="visible-xs small-social"><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right social hidden-xs">
          <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
          <li><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
  </div>
</nav>

  <article class="container">
    <div class="row">
      <div class="col-xs-12 header">
        <h1>Protesting your tax assessment</h1>
        <p>Published Sunday, May 9, 2015</p>
        <p class="author">By Andra Lim, Bridget Grumet, Andrew Chavez and Christian McDonald</p>
        <p>If you’re still reeling from the sticker shock of this year’s property appraisal notice, you may be considering challenging the appraisal. You could hire a firm to handle the challenge for you; typically they only get paid if they succeed in cutting your taxable value. Or you could handle the appeal yourself. Here’s how the process works:</p>
        <p><span>Related:</span> <a target="_blank" href="">Headline <i class="fa fa-angle-double-right"></i></a></p>
      </div>

      <?php $dots = array(
        'step1' => 'Appraisal date',
        'step2' => 'Notices',
        'step3' => 'Protest deadline',
        'step4' => 'Step 4'
      ); ?>

      <div id="progress-bar">
        <div id="progress" class="container">
          <ul class="nav">
            <?php foreach($dots as $dot => $label): ?>
              <li role="presentation">
                <a href="#<?php print $dot; ?>">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-dot-circle-o fa-stack-1x"></i>
                    <i class="fa fa-circle-o fa-stack-1x"></i>
                  </span>
                  <span class="label"><?php print $label; ?></span>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>

      <div id="step1" class="step">
        <div class="col-xs-12 col-sm-3 col-md-4">
          <img class="img-responsive" src="http://placehold.it/600x400" />
        </div>
        <div class="col-xs-12 col-sm-9 col-md-8">
          <h1>The appraisal base date</h1>
          <h2>Jan. 1</h2>
          <p>Your home’s appraised value for the year is based on its condition – and what the property could sell for – on this date. Keep in mind, the appraisal district arrives at a figure by calculating the market value of your property. And your home’s condition on Jan. 1 is key as you look at factors that may affect the value. Any damage or improvements after this date – say, a tree that falls on your roof in March, or the new bathroom you added in May – won’t affect the taxable value of your home this year.</p>
        </div>
      </div>

      <div id="step2" class="step">
        <div class="col-xs-12 col-sm-3 col-md-4">
          <img class="img-responsive" src="http://placehold.it/600x400" />
        </div>
        <div class="col-xs-12 col-sm-9 col-md-8">
          <h1>Appraisal notices arrive</h1>
          <h2>Late April</h2>
          <p>A piece of mail arrives from the appraisal district, telling you the value of your home for tax purposes. Look over the numbers carefully. If your property is not described correctly or if the value looks out of whack, you can protest it.</p>
          <div class="well"><i class="fa fa-briefcase fa-5x"></i><p><strong>By the numbers</strong></p><p>NUMBER of notices went to Travis County property owners in 2014.</p></div>
        </div>
      </div>

      <div id="step3" class="step">
        <div class="col-xs-12 col-sm-3 col-md-4">
          <img class="img-responsive" src="http://placehold.it/600x400" />
        </div>
        <div class="col-xs-12 col-sm-9 col-md-8">
          <h1>Protest deadline</h1>
          <h2></h2>
          <p>This is the usual deadline for filing a “Notice of Protest” of your appraised value; since that date falls on a weekend this year, the notice can be filed on the next business day, which is Monday, June 1. What’s the best way to file? You have a couple of options. You can use the form on the back of the “Notice of Appraised Value” that you received from the appraisal district, since it already has your account information printed on it. Or you may be able to file your protest online. In Travis County, go to www.traviscad.org and click on E-File. Williamson County residents can go to www.wcad.org and click on “Online Protests,” while Hays County residents can do the same at www.hayscad.com . The benefit of online protesting is that appraisal district staffers can review your information and decide whether to offer you a settlement, potentially without you having to attend a hearing at all. [LINK to TCAD video explaining eFile process: http://www.traviscad.org/video/eFile/how_to_efile_player.html  ]</p>
         </div>
      </div>

      <div id="step4" class="step">
        <div class="col-xs-12 col-sm-3 col-md-4">
          <img class="img-responsive" src="http://placehold.it/600x400" />
        </div>
        <div class="col-xs-12 col-sm-9 col-md-8">
          <h1>Step 4</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dignissim mauris metus, ac placerat ligula sodales vitae. Quisque purus lectus, aliquet vel libero et, rhoncus efficitur massa. Sed commodo rhoncus fringilla. Aliquam vitae ex commodo, volutpat arcu mattis, dapibus dui. Proin ac aliquam augue, ac accumsan ligula. Morbi posuere turpis turpis, pharetra pulvinar neque interdum sit amet. In hac habitasse platea dictumst. Cras vehicula nibh ante, vel dignissim ex gravida a. Suspendisse vestibulum lorem arcu, ac blandit turpis tincidunt imperdiet. Sed elit mi, pharetra pretium enim id, dignissim porta justo. Sed eget maximus lorem, vel suscipit lorem. Vestibulum ut ante pulvinar, placerat purus tempor, ultricies quam.</p>
          <p>Cras pretium interdum turpis at varius. Morbi tristique justo quam, molestie dapibus ante cursus non. Cras a nunc sed metus ornare mollis vel vel neque. Etiam suscipit sagittis sem, eu sodales eros maximus ac. Suspendisse vehicula pharetra erat, sit amet iaculis purus pharetra eget. Nulla facilisi. Quisque pretium massa et lorem ullamcorper hendrerit. Aliquam vel tristique mauris, ut bibendum magna. Nulla nec sagittis lectus, sed euismod lacus. Suspendisse vel elit risus. Proin eu ligula eleifend, aliquet nunc in, tincidunt ligula.</p>
          <p>Phasellus lobortis nisi quis velit aliquet, a iaculis turpis vulputate. Ut quis faucibus nisl. Fusce quis augue lobortis, feugiat velit a, vulputate orci. In sit amet dolor ut erat dictum placerat. Sed ultricies justo et malesuada faucibus. Fusce erat velit, ornare non faucibus eget, fermentum vitae libero. Etiam cursus bibendum quam ac pharetra.</p>
          <p>Duis tristique placerat sem, ut fermentum elit venenatis vitae. Suspendisse libero dui, tempor ac scelerisque id, lobortis ac velit. Curabitur augue risus, efficitur at orci in, tincidunt ornare diam. In fermentum justo id imperdiet pharetra. Nam dignissim sem id ante congue consectetur. Vestibulum elementum nisl vel luctus dictum. Cras eros est, cursus at quam eget, bibendum tempus quam. Ut pretium non velit id pretium. Fusce vel metus luctus, facilisis tellus finibus, egestas est. Mauris pulvinar ac mi id tristique. Sed dui mauris, egestas nec enim ac, tristique auctor orci. Phasellus eu mattis risus, vel sagittis purus. Nulla sed felis non lacus vestibulum elementum. Nam facilisis, leo ac molestie fermentum, sem leo tincidunt ligula, sit amet pharetra risus urna at turpis. Phasellus dapibus bibendum diam, nec pulvinar purus scelerisque at.</p>
        </div>
      </div>
    </div>

  </article>

  <!-- bottom matter -->
  <?php include "includes/banner-ad.inc";?>
  <?php include "includes/legal.inc";?>
  <?php include "includes/project-metrics.inc"; ?>
  <?php include "includes/metrics.inc"; ?>

  <script src="dist/scripts.js"></script>

  <?php if($_SERVER['SERVER_NAME'] === 'localhost'): ?>
    <script src="//localhost:35729/livereload.js"></script>
  <?php endif; ?>
</body>
</html>
