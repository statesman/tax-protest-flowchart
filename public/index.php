<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <?php
  $meta = array(
    "title" => "Protesting your tax assessment",
    "description" => "A flowchart on the process to protest tax evaluations by Travis Central Appraisal District.",
    "thumbnail" => "http://projects.statesman.com/news/tax-protest-flowchart/assets/share.jpg", // needs update
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
        <li class="visible-xs small-social"><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right social hidden-xs">
          <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
        </ul>
    </div>
  </div>
</nav>

  <article class="container">
    <div class="row">
      <div class="col-xs-12 header">
        <h1>Here’s how to protest your property tax appraisal</h1>
        <p>Updated April 26, 2017</p>
        <p class="author">By <a href="//twitter.com/aasinteractive">Statesman Interactives</a></p>
        <p>If you’re still reeling from the sticker shock of this year’s property appraisal notice, you may be considering challenging the appraisal. You could hire a firm to handle the challenge for you; typically they only get paid if they succeed in cutting your taxable value. Or you could handle the challenge yourself. Here’s how the process works:</p>
        <p><span>Related:</span> <a target="_blank" href="http://www.mystatesman.com/news/news/local/rising-up-in-protest-why-most-appraisal-challenges/nmCs6/#69d6ad93.257250.735730">Rising up in protest: Why most appraisal challenges in Austin succeed <i class="fa fa-angle-double-right"></i></a></p>
      </div>

      <?php $dots = array(
        'step1' => 'Appraisal',
        'step2' => 'Notices sent',
        'step3' => 'Protest form',
        'step4' => 'Informal meeting',
        'step5' => 'Hearing',
        'step6' => 'Arbitration'
        ); ?>

      <div id="progress-bar" class="col-xs-12 hidden-xs">
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
    </div>
    <div id="step1" class="step row">
      <div class="col-xs-12 col-sm-3 col-md-4">
        <img class="img-responsive" src="assets/step01-homes.jpg" />
        <p class="caption"><!-- Kim Renner has renovated two homes in Hemphill Park and is beginning a new project in Aldridge Place.  Her projects have been featured on Martha Stewart Living, Austin Monthly Home, and Metropolitan Home Magazines. --> <span class="credit pull-right">Julia Robinson/FOR AMERICAN-STATESMAN</span></p>
      </div>
      <div class="col-xs-12 col-sm-9 col-md-8">
        <h2>Your home value starts here</h2>
        <h3>Jan. 1</h3>
        <p>Your home’s appraised value for the year is based on its condition – and what the property could sell for – on this date. Keep in mind, the appraisal district arrives at a figure by calculating the market value of your property. And your home’s condition on Jan. 1 is key as you look at factors that may affect the value. Any damage or improvements after this date – say, a tree that falls on your roof in March, or the new bathroom you added in May – won’t affect the taxable value of your home this year.</p>
      </div>
    </div>

    <div id="step2" class="step row">
      <div class="col-xs-12 col-sm-3 col-md-4">
        <img class="img-responsive" src="assets/step02-mail.jpg" />
        <p class="caption"><!-- 5/11/2005 Ralph Barrera/AMERICAN-STATESMAN; A major trend is happening in older neighborhoods throughout central Austin. Older homes are being replaced with newer and bigger models spurring a sharp rise in property values. Johanna Street in south Austin off of S. 1st St. is one such area. In the 600 block of W. Johanna St. there are many new homes. Jennifer Yeggoni and her husband Mohan recently purchased and moved into their new home only a month ago. "We feel bad that we're sort of the cause of gentrification, but at the same time we're so excited to have this house and live in such a diverse neighborhood.", said Jennifer.  The couple moved from Cedar Park to central Austin. "Suburbia was nice, but it wasn't what we ultimately wanted. I grew up in the barrios of Lubbock, TX. and neighborhood diversity is what we were looking for." (Toohey story) ORG XMIT:  --><span class="credit pull-right">Ralph Barrera/AMERICAN-STATESMAN</span></p>
      </div>
      <div class="col-xs-12 col-sm-9 col-md-8">
        <h2>The envelope, please</h2>
        <h3>Late April/early May</h3>
        <p>A piece of mail arrives from the appraisal district, telling you the value of your home for tax purposes. Look over the numbers carefully. If your property is not described correctly or if the value looks out of whack, you can protest it.</p>
        <div class="well"><i class="fa fa-home fa-5x"></i><p><strong>417,717</strong></p><p>Number of notices mailed to Travis County property owners in 2016.</p></div>
      </div>
    </div>

    <div id="step3" class="step row">
      <div class="col-xs-12 col-sm-3 col-md-4">
        <img class="img-responsive" src="assets/step03-tcad.jpg" />
      </div>
      <div class="col-xs-12 col-sm-9 col-md-8">
        <h2>Step 1: File this form</h2>
        <h3>May 31</h3>
        <p>This is the deadline for filing a “Notice of Protest” of your appraised value. What’s the best way to file? You have a couple of options. You can use the form on the back of the “Notice of Appraised Value” that you received from the appraisal district, since it already has your account information printed on it. Or you may be able to file your protest online. In Travis County, go to <a href="http://www.traviscad.org"> traviscad.org</a> and click on E-File. Williamson County residents can go to <a href="www.wcad.org">wcad.org</a> and click on “Online Protests,” while Hays County residents can do the same at <a href="http://www.hayscad.com">hayscad.com</a>. The benefit of online protesting is that appraisal district staffers can review your information and decide whether to offer you a settlement, potentially <a href="http://www.traviscad.org/video/eFile/how_to_efile_player.html">without you having to attend a hearing at all</a>.</p>
        <p>As you’re filling out the form, pay particular attention to the step in which you check off the box or boxes stating the reason for your protest. Your choices here will affect what kind of evidence you can present later on. If the district listed the wrong square footage for your home, for instance, be sure to check “property description is incorrect.” If you think your value is out of step with similar homes, make sure to mark “Value is unequal compared with other properties.”</p>
        <p>For typical homeowners challenging their appraisal, the Texas Comptroller’s office suggests checking “Value is over market value” and “Value is unequal compared with other properties.” That will “allow you to present the widest types of evidence and preserve your full appeal rights,” the agency says in its handout on “<a href="http://www.window.state.tx.us/taxinfo/proptax/pdf/96-295.pdf">Property Taxpayer Remedies</a>.”</p>
        <div class="well"><i class="fa fa-home fa-5x"></i><p><strong>115,773</strong></p><p>The number of protests initiated in Travis County in 2016.</p></div>
       </div>
    </div>

    <div id="step4" class="step row">
      <div class="col-xs-12 col-sm-3 col-md-4">
        <img class="img-responsive" src="assets/step04-hearing01.jpg" />
        <p class="caption"> <span class="credit pull-right">AMERICAN-STATESMAN FILE 2003</span></p>
        <div class="hidden-xs"><img class="img-responsive" src="assets/step04-informal.jpg" />
        <p class="caption"><span class="credit pull-right">AMERICAN-STATESMAN FILE 2000</span></p></div>
      </div>
      <div class="col-xs-12 col-sm-9 col-md-8">
        <h2>Step 2: Meet with the appraiser</h2>
        <h3>June</h3>
        <p>The appraisal review board – or ARB, if you’re into acronyms – is already meeting on the first appeals through the gate. But we’re getting ahead of ourselves.</p>
        <p>Once you’ve filed your “Notice of Protest,” the Travis Central Appraisal District will send you a letter with two dates: an informal meeting with an appraisal staffer and your formal hearing date with the ARB, a group of independent residents appointed to hear these challenges. During the informal meeting, the staffer will review the numbers with you. Bring all of your documentation: Information on comparable homes (records are available on the appraisal district’s website), perhaps an independent appraisal if you recently refinanced your house, or photos, repair estimates and other records showing damage that may devalue your home. Once you and a staffer have hashed it out, the district may offer to reduce your value by a certain amount. If you’re satisfied, you can accept it.</p>
        <p>If not, you can keep your date with the ARB, or technically, with a three-member panel of ARB members. Before that hearing, you have a right to see all of the information the district appraisers plan to present, so be sure to contact the appraisal district to request those documents.</p>
        <p>In Travis County, typically two weeks pass between the informal meeting with staff and the ARB hearing. In Williamson and Hays counties, that meeting with a staffer usually happens the same day as the ARB hearing. Either way, the same process applies: If you’re satisfied with the outcome after meeting with the staffer, you can forego the ARB hearing.</p>
        <div class="well"><i class="fa fa-home fa-5x"></i><p><strong>68%</strong></p><p>The percentage of homeowners who hired an agent to represent them in assessment protests in 2016.</p></div>
       </div>
    </div>

    <div id="step5" class="step row">
      <div class="col-xs-12 col-sm-3 col-md-4">
        <img class="img-responsive" src="assets/step05-hearing02.jpg" />
        <p class="caption"> <!-- 6/27/03 Staff Photo by Sung Park/AMERICAN-STATESMAN Tom Poterek, left is sworn in by the appraisal review board during a formal hearing regarding the value of Poterek's home.  Appraisal review board members are from left, Jim Irion, Holland Brown and Mary E. Moreno.  On right, representing the Appraisal District, is Mitch Fast.  Poterek was successful in lowering the appraisal for his property. --><span class="credit pull-right">AMERICAN-STATESMAN FILE 2003</span></p>
      </div>
      <div class="col-xs-12 col-sm-9 col-md-8">
        <h2>The big day</h2>
        <p>If you take your case to the ARB, come prepared and expect a rapid-fire proceeding. The entire hearing will likely take 15 to 30 minutes. In that time you will be placed under oath and given a chance to present any evidence or witnesses supporting your case. You must conclude by stating the figure you believe your property is worth. Someone from the appraisal district will likely question you and provide additional evidence. Then you can question the appraiser or any witnesses presented by the appraisal district. Members of the ARB can ask clarifying questions, too. Finally, each side gets to make a closing statement, so once again you’ll want to reiterate what you believe your property is worth and why. The three-member panel will discuss the case and reach a recommended value.</p>
        <p><span>The big day:</span> The full ARB will review the recommendation of the three-person panel and approve your final assessed value. You’ll get a certified letter in the mail with the decision.</p>
        <div class="well"><i class="fa fa-home fa-5x"></i><p><strong>$15,595</strong></p><p>The median amount of valuation reduced from residential properties through protest in 2016. The average was $30,685.</p></div>
       </div>
    </div>

    <div id="step6" class="step row">
      <div class="col-xs-12 col-sm-3 col-md-4">
        <img class="img-responsive" src="assets/step06-book.jpg" />
        <p class="caption"><span class="credit pull-right">Rodolfo Gonzalez / AMERICAN-STATESMAN</span></p>
      </div>
      <div class="col-xs-12 col-sm-9 col-md-8">
        <h2>Still not satisfied?</h2>
        <h3>August</h3>
        <p>Protest hearings typically wrap up by now. But you still have recourse if you’re not satisfied with the ARB decision. If your property is valued at less than $1 million, or if it’s your homestead, regardless of value, you can take your case to binding arbitration. There’s a <a href="http://www.window.state.tx.us/taxinfo/taxforms/ap-219.pdf">form for that</a>, too. You’ll need to file that within 45 days of receiving the ARB decision, and it’ll cost you $500. All but $50 of that will be refunded if you prevail.</p>
        <p>There are two alternatives to arbitration. You can take your appeal to state district court (that challenge must be filed within 60 days of receiving the ARB decision, and you’ll likely need an attorney’s help). Or for properties valued over $ 1 million, you can file an appeal with the State Office of Administrative Hearings (that challenge must be filed within 30 days of receiving the ARB decision). </p>
        <div class="well"><i class="fa fa-home fa-5x"></i><p><strong>$9.4B</strong></p><p>The amount of valuation shaved off of Travis County tax rolls through the protest process in 2016. Residential protests accounted for nearly $2.25 billion of that.</p></div>
       </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <h2>Rules of the road</h2>
        <ul>
          <li><span>DON’T:</span> Complain about how you can’t afford your taxes. The appraisal district doesn’t set the tax rate; they only decide what your home is worth for tax purposes.</li>
          <li><span>DO:</span> Come armed with a specific value you believe your home is worth, and the documentation to support that figure.</li>
          <li><span>DON’T:</span> Give a long, rambling presentation filled with generalizations.</li>
          <li><span>DO:</span> Request in advance the documentation the appraisal district compiled to calculate its appraisal of your property.  Examine the comparable homes used to determine your property’s value. See whether differences in property size, home upgrades or proximity to a busy road, for instance, might make those properties a poor comparison for your home.</li>
        </ul>
        <p>Updates: Some dates have been changed to reflect Travis Central Appraisal District adjustments to their appraisal challenge timeline.</p>
        <p>Sources: Travis Central Appraisal District; Texas Comptroller’s Office.</p>
      </div>
    </div>


<!-- there was a close div here at one time -->
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
