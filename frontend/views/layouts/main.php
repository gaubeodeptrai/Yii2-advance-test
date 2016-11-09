<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\widgets\Menu;
use app\models\Chuyenmuc;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style type='text/css'>

			#header .logo a, #footer .bottom .logo a, .chaser .logo a, .logo-modal {
				background-image: url('<?=Yii::$app->homeUrl?>images/banner/img_55ae14c45470b.jpg');
				background-repeat: no-repeat;
				display: block;
			}
			.chaser .logo a {
				background-size: auto 20px;
			}                                    
				#header.style1 .logo a {
					width: 155px; position: relative;
				}
				#header.style1 .logo a:after {
					position: absolute; display: block; width: 130px; height: 30px; background: url("wp-content/themes/Travelo/images/logo_txt.png") no-repeat; content: ""; top: 0; right: 0;
				}
   </style>
   <script type="text/javascript">
			jQuery(document).ready(function() {
				// CUSTOM AJAX CONTENT LOADING FUNCTION
				var ajaxRevslider = function(obj) {
				
					// obj.type : Post Type
					// obj.id : ID of Content to Load
					// obj.aspectratio : The Aspect Ratio of the Container / Media
					// obj.selector : The Container Selector where the Content of Ajax will be injected. It is done via the Essential Grid on Return of Content
					
					var content = "";

					data = {};
					
					data.action = 'revslider_ajax_call_front';
					data.client_action = 'get_slider_html';
					data.token = '97467154af';
					data.type = obj.type;
					data.id = obj.id;
					data.aspectratio = obj.aspectratio;
					
					// SYNC AJAX REQUEST
					jQuery.ajax({
						type:"post",
						url:"http://www.soaptheme.net/wordpress/travelo/wp-admin/admin-ajax.php",
						dataType: 'json',
						data:data,
						async:false,
						success: function(ret, textStatus, XMLHttpRequest) {
							if(ret.success == true)
								content = ret.data;								
						},
						error: function(e) {
							console.log(e);
						}
					});
					
					 // FIRST RETURN THE CONTENT WHEN IT IS LOADED !!
					 return content;						 
				};
				
				// CUSTOM AJAX FUNCTION TO REMOVE THE SLIDER
				var ajaxRemoveRevslider = function(obj) {
					return jQuery(obj.selector+" .rev_slider").revkill();
				};

				// EXTEND THE AJAX CONTENT LOADING TYPES WITH TYPE AND FUNCTION
				var extendessential = setInterval(function() {
					if (jQuery.fn.tpessential != undefined) {
						clearInterval(extendessential);
						if(typeof(jQuery.fn.tpessential.defaults) !== 'undefined') {
							jQuery.fn.tpessential.defaults.ajaxTypes.push({type:"revslider",func:ajaxRevslider,killfunc:ajaxRemoveRevslider,openAnimationSpeed:0.3});   
							// type:  Name of the Post to load via Ajax into the Essential Grid Ajax Container
							// func: the Function Name which is Called once the Item with the Post Type has been clicked
							// killfunc: function to kill in case the Ajax Window going to be removed (before Remove function !
							// openAnimationSpeed: how quick the Ajax Content window should be animated (default is 0.3)
						}
					}
				},30);
			});
		</script>
         <meta name="generator" content="WPML ver:3.1.8.4 stt:1,27,47;0" />
<style type="text/css">.mc4wp-form input[name="_mc4wp_required_but_not_really"] { display: none !important; }</style>       
</head>
<body class="home page page-id-785 page-template page-template-templatestemplate-home-php">
<?php $this->beginBody() ?>

<div id="page-wrapper">
   <header id="header" class="navbar-static-top">
   	<div id="main-header">

		<div class="main-header">
			<a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
				Mobile Menu Toggle
			</a>

			<div class="container">
				<h1 class="logo navbar-brand">
					<a href="<?=Yii::$app->homeUrl?>">
                                            <!--<img src='images/banner/img_55ae14c45470b.jpg' alt="Niptex" />-->
                                            <?=  Html::img(''.Yii::$app->homeUrl.'images/banner/img_55ae14c45470b.jpg')?>
					</a>
				</h1>
                           
                            <nav id="main-menu" class="menu-main-menu-container">
                             <?=Menu::widget([
                               'options' => ['class' => 'menu'],
                               'items' => Chuyenmuc::getItems(0),
                               
                              'submenuTemplate' => "\n<ul class='sub-menu' style='background-color: #15479E'>\n{items}\n</ul>\n",
                              'encodeLabels' => false, //allows you to use html in labels
                              'activateParents' => true,   ]);  ?>
                            </nav>			
                        </div><!-- .container -->

		</div><!-- .main-header -->
	</div><!-- #main-header -->
<!-- mobile menu -->
<nav id="mobile-menu-01" class="mobile-menu collapse">
                              <?=Menu::widget([
                               'options' => ['class' => 'menu'],
                               'items' => Chuyenmuc::getItems(0),
                              'submenuTemplate' => "\n<ul id='mobile-primary-menu' class='menu'>\n{items}\n</ul>\n",
                              'encodeLabels' => false, //allows you to use html in labels
                              'activateParents' => true,   ]);  ?>
</nav><!-- mobile menu -->
</header>

         
        
        
        <?= Alert::widget() ?>
        <?= $content ?>
    
      <footer id="footer" class="style-def">
       
        <div class="bottom gray-area">
            <div class="container">
                <div class="logo pull-left">
                    <a href="index.php">
                        <img src="<?=Yii::$app->homeUrl?>images/banner/img_55ae14c45470b.jpg" alt="Niptex" />
                    </a>
                </div>
                <div class="pull-right">
                    <a id="back-to-top" href="#"><i class="soap-icon-longarrow-up circle"></i></a>
                </div>
                <div class="copyright pull-right">
					<p>&copy; 2015 Niptex</p>
                </div>
            </div>
        </div>
    </footer>
    
</div>

<style scoped>.tp-caption.largewhitebg_button1,.largewhitebg_button1{background-color:rgba(0,0,0,0);color:#ffffff;font-size:14px;font-weight:400;line-height:33px;padding:0px 25px 0px 25px;text-decoration:none;text-shadow:none;cursor:pointer;border-width:1px;border-color:rgb(255,255,255);border-style:solid}.tp-caption.largewhitebg_button1:hover,.largewhitebg_button1:hover{background-color:rgb(255,255,255);color:rgb(1,183,242);font-size:14px;font-weight:400;line-height:33px;padding:0 25px;text-decoration:none;text-shadow:none;border-width:1px;border-color:rgb(255,255,255);border-style:solid}.tp-caption.large_bold_white_med_2,.large_bold_white_med_2{background-color:transparent;color:rgb(255,255,255);font-size:30px;font-weight:500;line-height:28px;text-decoration:none;border-width:0px;border-color:rgb(255,214,88);border-style:none}.tp-caption.large_bold_white_med,.large_bold_white_med{background-color:transparent;color:rgb(255,255,255);text-align:left;font-size:25px;font-weight:400;line-height:28px;text-decoration:none;border-width:0px;border-color:rgb(255,214,88);border-style:none}</style>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/static.soaptheme.net\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var ajaxurl = "index.html\/\/www.soaptheme.net\/wordpress\/travelo\/wp-admin\/admin-ajax.php";
var themeurl = "index.html\/\/static.soaptheme.net\/themes\/Travelo";
var date_format = "mm\/dd\/yy";
var settings = {"sticky_menu":"1"};
/* ]]> */
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var icl_vars = {"current_language":"en","icl_home":"http:\/\/www.soaptheme.net\/wordpress\/travelo"};
/* ]]> */
</script>
			<script type="text/javascript">

				/******************************************
					-	PREPARE PLACEHOLDER FOR SLIDER	-
				******************************************/
				

				var setREVStartSize = function() {
					var	tpopt = new Object();
						tpopt.startwidth = 1170;
						tpopt.startheight = 646;
						tpopt.container = jQuery('#rev_slider_6_1');
						tpopt.fullScreen = "off";
						tpopt.forceFullWidth="off";

					tpopt.container.closest(".rev_slider_wrapper").css({height:tpopt.container.height()});tpopt.width=parseInt(tpopt.container.width(),0);tpopt.height=parseInt(tpopt.container.height(),0);tpopt.bw=tpopt.width/tpopt.startwidth;tpopt.bh=tpopt.height/tpopt.startheight;if(tpopt.bh>tpopt.bw)tpopt.bh=tpopt.bw;if(tpopt.bh<tpopt.bw)tpopt.bw=tpopt.bh;if(tpopt.bw<tpopt.bh)tpopt.bh=tpopt.bw;if(tpopt.bh>1){tpopt.bw=1;tpopt.bh=1}if(tpopt.bw>1){tpopt.bw=1;tpopt.bh=1}tpopt.height=Math.round(tpopt.startheight*(tpopt.width/tpopt.startwidth));if(tpopt.height>tpopt.startheight&&tpopt.autoHeight!="on")tpopt.height=tpopt.startheight;if(tpopt.fullScreen=="on"){tpopt.height=tpopt.bw*tpopt.startheight;var cow=tpopt.container.parent().width();var coh=jQuery(window).height();if(tpopt.fullScreenOffsetContainer!=undefined){try{var offcontainers=tpopt.fullScreenOffsetContainer.split(",");jQuery.each(offcontainers,function(e,t){coh=coh-jQuery(t).outerHeight(true);if(coh<tpopt.minFullScreenHeight)coh=tpopt.minFullScreenHeight})}catch(e){}}tpopt.container.parent().height(coh);tpopt.container.height(coh);tpopt.container.closest(".rev_slider_wrapper").height(coh);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);tpopt.container.css({height:"100%"});tpopt.height=coh;}else{tpopt.container.height(tpopt.height);tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);}
				};

				/* CALL PLACEHOLDER */
				setREVStartSize();


				var tpj=jQuery;
				tpj.noConflict();
				var revapi6;

				tpj(document).ready(function() {

				if(tpj('#rev_slider_6_1').revolution == undefined){
					revslider_showDoubleJqueryError('#rev_slider_6_1');
				}else{
				   revapi6 = tpj('#rev_slider_6_1').show().revolution(
					{	
						dottedOverlay:"none",
						delay:8000,
						startwidth:1170,
						startheight:646,
						hideThumbs:200,

						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:3,
						
												
						simplifyAll:"off",

						navigationType:"none",
						navigationArrows:"solo",
						navigationStyle:"round",

						touchenabled:"on",
						onHoverStop:"on",
						nextSlideOnWindowFocus:"off",

						swipe_threshold: 0.7,
						swipe_min_touches: 1,
						drag_block_vertical: false,
						
												
												
						keyboardNavigation:"off",

						navigationHAlign:"center",
						navigationVAlign:"bottom",
						navigationHOffset:0,
						navigationVOffset:20,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,

						shadow:0,
						fullWidth:"on",
						fullScreen:"off",

						spinner:"spinner0",
												
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,

						shuffle:"off",

						autoHeight:"off",
						forceFullWidth:"off",
						
						
						
						hideThumbsOnMobile:"off",
						hideNavDelayOnMobile:1500,
						hideBulletsOnMobile:"off",
						hideArrowsOnMobile:"off",
						hideThumbsUnderResolution:0,

						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0					});



									}
				});	/*ready*/

			</script>


			<script type="text/javascript">
			(function() {

				function addSubmittedClass() {
					var className = 'mc4wp-form-submitted';
					(this.classList) ? this.classList.add(className) : this.className += ' ' + className;
				}

				var forms = document.querySelectorAll('.mc4wp-form');
				for (var i = 0; i < forms.length; i++) {
					(function(f) {

						// hide honeypot
						var honeypot = f.querySelector('input[name="_mc4wp_required_but_not_really"]');
						honeypot.style.display = 'none';
						honeypot.setAttribute('type','hidden');

						// add class on submit
						var b = f.querySelector('[type="submit"]');
						if(b.addEventListener) {
							b.addEventListener( 'click', addSubmittedClass.bind(f));
						} else {
							b.attachEvent( 'onclick', addSubmittedClass.bind(f));
						}

					})(forms[i]);
				}
			})();

</script>    
    
    


<?php $this->endBody() ?>
    
</body>
</html>
<?php $this->endPage() ?>
