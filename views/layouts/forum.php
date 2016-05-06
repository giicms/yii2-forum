<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\web\themes\giicms\widgets\TestWidget;

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
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/css/custom.css') ?>" media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/css/style.css') ?>" media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/css/settings.css') ?>" media="screen,projection"/>

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-75361345-1', 'auto');
            ga('send', 'pageview');

        </script>
    </head>
    <body>
        <?php $this->beginBody() ?>
    <body>

        <div class="container-fluid">

            <!-- Slider -->
            <div class="tp-banner-container" style="overflow: visible;">
                <div class="tp-banner revslider-initialised tp-simpleresponsive" id="revslider-190" style="max-height: 278px; height: 278px;">
                    <ul style="display: block; overflow: hidden; width: 100%; height: 100%; max-height: none;">	
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" style="width: 100%; height: 100%; overflow: hidden; visibility: visible; left: 0px; top: 0px; z-index: 20; opacity: 1;">
                            <!-- MAIN IMAGE -->
                            <div class="slotholder" style="width:100%;height:100%;"><div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" data-lazydone="undefined" data-src="images/slide.jpg" style="width: 100%; height: 100%; opacity: 1; position: relative; background-image: url(&quot;images/slide.jpg&quot;); background-color: rgba(0, 0, 0, 0); background-size: cover; background-position: 0% 0%; background-repeat: no-repeat;"></div></div>
                            <!-- LAYERS -->
                        </li>
                    </ul>
                    <div class="tp-loader" style="display: none;"></div><div class="tp-bannertimer" style="visibility: hidden; width: 0%;"></div></div>
            </div>
            <!-- //Slider -->

            <div class="headernav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-xs-3 col-sm-2 col-md-2 logo "><a href="http://forum.azyrusthemes.com/index.html"><img src="./Forum __ Home Page_files/logo.jpg" alt=""></a></div>
                        <div class="col-lg-3 col-xs-9 col-sm-5 col-md-3 selecttopic">
                            <div class="dropdown">
                                <a data-toggle="dropdown" href="http://forum.azyrusthemes.com/index.html#">Borderlands 2</a> <b class="caret"></b>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="http://forum.azyrusthemes.com/index.html#">Borderlands 1</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-2" href="http://forum.azyrusthemes.com/index.html#">Borderlands 2</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-3" href="http://forum.azyrusthemes.com/index.html#">Borderlands 3</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 search hidden-xs hidden-sm col-md-3">
                            <div class="wrap">
                                <form action="http://forum.azyrusthemes.com/index.html#" method="post" class="form">
                                    <div class="pull-left txt"><input type="text" class="form-control" placeholder="Search Topics"></div>
                                    <div class="pull-right"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">
                            <div class="stnt pull-left">                            
                                <form action="http://forum.azyrusthemes.com/03_new_topic.html" method="post" class="form">
                                    <button class="btn btn-primary">Start New Topic</button>
                                </form>
                            </div>
                            <div class="env pull-left"><i class="fa fa-envelope"></i></div>

                            <div class="avatar pull-left dropdown">
                                <a data-toggle="dropdown" href="http://forum.azyrusthemes.com/index.html#"><img src="./Forum __ Home Page_files/avatar.jpg" alt=""></a> <b class="caret"></b>
                                <div class="status green">&nbsp;</div>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="http://forum.azyrusthemes.com/index.html#">My Profile</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-2" href="http://forum.azyrusthemes.com/index.html#">Inbox</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-3" href="http://forum.azyrusthemes.com/index.html#">Log Out</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-4" href="http://forum.azyrusthemes.com/04_new_account.html">Create account</a></li>
                                </ul>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xs-12 col-md-8">
                            <div class="pull-left"><a href="http://forum.azyrusthemes.com/index.html#" class="prevnext"><i class="fa fa-angle-left"></i></a></div>
                            <div class="pull-left">
                                <ul class="paginationforum">
                                    <li class="hidden-xs"><a href="http://forum.azyrusthemes.com/index.html#">1</a></li>
                                    <li class="hidden-xs"><a href="http://forum.azyrusthemes.com/index.html#">2</a></li>
                                    <li class="hidden-xs"><a href="http://forum.azyrusthemes.com/index.html#">3</a></li>
                                    <li class="hidden-xs"><a href="http://forum.azyrusthemes.com/index.html#">4</a></li>
                                    <li><a href="http://forum.azyrusthemes.com/index.html#">5</a></li>
                                    <li><a href="http://forum.azyrusthemes.com/index.html#">6</a></li>
                                    <li><a href="http://forum.azyrusthemes.com/index.html#" class="active">7</a></li>
                                    <li><a href="http://forum.azyrusthemes.com/index.html#">8</a></li>
                                    <li class="hidden-xs"><a href="http://forum.azyrusthemes.com/index.html#">9</a></li>
                                    <li class="hidden-xs"><a href="http://forum.azyrusthemes.com/index.html#">10</a></li>
                                    <li class="hidden-xs hidden-md"><a href="http://forum.azyrusthemes.com/index.html#">11</a></li>
                                    <li class="hidden-xs hidden-md"><a href="http://forum.azyrusthemes.com/index.html#">12</a></li>
                                    <li class="hidden-xs hidden-sm hidden-md"><a href="http://forum.azyrusthemes.com/index.html#">13</a></li>
                                    <li><a href="http://forum.azyrusthemes.com/index.html#">1586</a></li>
                                </ul>
                            </div>
                            <div class="pull-left"><a href="http://forum.azyrusthemes.com/index.html#" class="prevnext last"><i class="fa fa-angle-right"></i></a></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <!-- POST -->
                            <div class="post">
                                <div class="wrap-ut pull-left">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="./Forum __ Home Page_files/avatar.jpg" alt="">
                                            <div class="status green">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="./Forum __ Home Page_files/icon1.jpg" alt=""><img src="./Forum __ Home Page_files/icon4.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <h2><a href="http://forum.azyrusthemes.com/02_topic.html">10 Kids Unaware of Their Halloween Costume</a></h2>
                                        <p>It's one thing to subject yourself to a Halloween costume mishap because, hey, that's your prerogative.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfo pull-left">
                                    <div class="comments">
                                        <div class="commentbg">
                                            560
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                                    <div class="time"><i class="fa fa-clock-o"></i> 24 min</div>                                    
                                </div>
                                <div class="clearfix"></div>
                            </div><!-- POST -->


                            <!-- POST -->
                            <div class="post">
                                <div class="wrap-ut pull-left">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="./Forum __ Home Page_files/avatar2.jpg" alt="">
                                            <div class="status red">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="./Forum __ Home Page_files/icon3.jpg" alt=""><img src="./Forum __ Home Page_files/icon4.jpg" alt=""><img src="./Forum __ Home Page_files/icon5.jpg" alt=""><img src="./Forum __ Home Page_files/icon6.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <h2><a href="http://forum.azyrusthemes.com/02_topic.html">What Instagram Ads Will Look Like</a></h2>
                                        <p>Instagram offered a first glimpse at what its ads will look like in a blog post Thursday. The sample ad, which you can see below.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfo pull-left">
                                    <div class="comments">
                                        <div class="commentbg">
                                            89
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                                    <div class="time"><i class="fa fa-clock-o"></i> 15 min</div>                                    
                                </div>
                                <div class="clearfix"></div>
                            </div><!-- POST -->


                            <!-- POST -->
                            <div class="post">
                                <div class="wrap-ut pull-left">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="./Forum __ Home Page_files/avatar3.jpg" alt="">
                                            <div class="status red">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="./Forum __ Home Page_files/icon2.jpg" alt=""><img src="./Forum __ Home Page_files/icon4.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <h2><a href="http://forum.azyrusthemes.com/02_topic.html">The Future of Magazines Is on Tablets</a></h2>
                                        <p>Eric Schmidt has seen the future of magazines, and it's on the tablet. At a Magazine Publishers Association.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfo pull-left">
                                    <div class="comments">
                                        <div class="commentbg">
                                            456
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                                    <div class="time"><i class="fa fa-clock-o"></i> 2 days</div>                                    
                                </div>
                                <div class="clearfix"></div>
                            </div><!-- POST -->


                            <!-- POST -->
                            <div class="post">
                                <div class="wrap-ut pull-left">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="./Forum __ Home Page_files/avatar4.jpg" alt="">
                                            <div class="status yellow">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="./Forum __ Home Page_files/icon1.jpg" alt=""><img src="./Forum __ Home Page_files/icon4.jpg" alt=""><img src="./Forum __ Home Page_files/icon6.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <h2><a href="http://forum.azyrusthemes.com/02_topic.html">Pinterest Now Worth $3.8 Billion</a></h2>
                                        <p>Pinterest's valuation is closing in on $4 billion after its latest funding round of $225 million, according to a report.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfo pull-left">
                                    <div class="comments">
                                        <div class="commentbg">
                                            78
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                                    <div class="time"><i class="fa fa-clock-o"></i> 24 min</div>                                    
                                </div>
                                <div class="clearfix"></div>
                            </div><!-- POST -->



                            <!-- POST -->
                            <div class="post">
                                <div class="wrap-ut pull-left">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="./Forum __ Home Page_files/avatar.jpg" alt="">
                                            <div class="status green">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="./Forum __ Home Page_files/icon1.jpg" alt=""><img src="./Forum __ Home Page_files/icon4.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <h2><a href="http://forum.azyrusthemes.com/02_topic.html">10 Kids Unaware of Their Halloween Costume</a></h2>
                                        <p>It's one thing to subject yourself to a Halloween costume mishap because, hey, that's your prerogative.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfo pull-left">
                                    <div class="comments">
                                        <div class="commentbg">
                                            560
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                                    <div class="time"><i class="fa fa-clock-o"></i> 24 min</div>                                    
                                </div>
                                <div class="clearfix"></div>
                            </div><!-- POST -->


                            <!-- POST -->
                            <div class="post">
                                <div class="wrap-ut pull-left">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="./Forum __ Home Page_files/avatar2.jpg" alt="">
                                            <div class="status red">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="./Forum __ Home Page_files/icon3.jpg" alt=""><img src="./Forum __ Home Page_files/icon4.jpg" alt=""><img src="./Forum __ Home Page_files/icon5.jpg" alt=""><img src="./Forum __ Home Page_files/icon6.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <h2><a href="http://forum.azyrusthemes.com/02_topic.html">What Instagram Ads Will Look Like</a></h2>
                                        <p>Instagram offered a first glimpse at what its ads will look like in a blog post Thursday. The sample ad, which you can see below.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfo pull-left">
                                    <div class="comments">
                                        <div class="commentbg">
                                            89
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                                    <div class="time"><i class="fa fa-clock-o"></i> 15 min</div>                                    
                                </div>
                                <div class="clearfix"></div>
                            </div><!-- POST -->


                            <!-- POST -->
                            <div class="post">
                                <div class="wrap-ut pull-left">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="./Forum __ Home Page_files/avatar3.jpg" alt="">
                                            <div class="status red">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="./Forum __ Home Page_files/icon2.jpg" alt=""><img src="./Forum __ Home Page_files/icon4.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <h2><a href="http://forum.azyrusthemes.com/02_topic.html">The Future of Magazines Is on Tablets</a></h2>
                                        <p>Eric Schmidt has seen the future of magazines, and it's on the tablet. At a Magazine Publishers Association.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfo pull-left">
                                    <div class="comments">
                                        <div class="commentbg">
                                            456
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                                    <div class="time"><i class="fa fa-clock-o"></i> 2 days</div>                                    
                                </div>
                                <div class="clearfix"></div>
                            </div><!-- POST -->

                        </div>
                        <div class="col-lg-4 col-md-4">

                            <!-- -->
                            <div class="sidebarblock">
                                <h3>Categories</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <ul class="cats">
                                        <li><a href="http://forum.azyrusthemes.com/index.html#">Trading for Money <span class="badge pull-right">20</span></a></li>
                                        <li><a href="http://forum.azyrusthemes.com/index.html#">Vault Keys Giveway <span class="badge pull-right">10</span></a></li>
                                        <li><a href="http://forum.azyrusthemes.com/index.html#">Misc Guns Locations <span class="badge pull-right">50</span></a></li>
                                        <li><a href="http://forum.azyrusthemes.com/index.html#">Looking for Players <span class="badge pull-right">36</span></a></li>
                                        <li><a href="http://forum.azyrusthemes.com/index.html#">Stupid Bugs &amp; Solves <span class="badge pull-right">41</span></a></li>
                                        <li><a href="http://forum.azyrusthemes.com/index.html#">Video &amp; Audio Drivers <span class="badge pull-right">11</span></a></li>
                                        <li><a href="http://forum.azyrusthemes.com/index.html#">2K Official Forums <span class="badge pull-right">5</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- -->
                            <div class="sidebarblock">
                                <h3>Poll of the Week</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <p>Which game you are playing this week?</p>
                                    <form action="http://forum.azyrusthemes.com/index.html#" method="post" class="form">
                                        <table class="poll">
                                            <tbody><tr>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                                                Call of Duty Ghosts
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="chbox">
                                                        <input id="opt1" type="radio" name="opt" value="1">  
                                                        <label for="opt1"></label>  
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar color2" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 63%">
                                                                Titanfall
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="chbox">
                                                        <input id="opt2" type="radio" name="opt" value="2" checked="">  
                                                        <label for="opt2"></label>  
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar color3" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                                                Battlefield 4
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="chbox">
                                                        <input id="opt3" type="radio" name="opt" value="3">  
                                                        <label for="opt3"></label>  
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                    </form>
                                    <p class="smal">Voting ends on 19th of October</p>
                                </div>
                            </div>

                            <!-- -->
                            <div class="sidebarblock">
                                <h3>My Active Threads</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="http://forum.azyrusthemes.com/index.html#">This Dock Turns Your iPhone Into a Bedside Lamp</a>
                                </div>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="http://forum.azyrusthemes.com/index.html#">Who Wins in the Battle for Power on the Internet?</a>
                                </div>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="http://forum.azyrusthemes.com/index.html#">Sony QX10: A Funky, Overpriced Lens Camera for Your Smartphone</a>
                                </div>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="http://forum.azyrusthemes.com/index.html#">FedEx Simplifies Shipping for Small Businesses</a>
                                </div>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="http://forum.azyrusthemes.com/index.html#">Loud and Brave: Saudi Women Set to Protest Driving Ban</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>



                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xs-12">
                            <div class="pull-left"><a href="http://forum.azyrusthemes.com/index.html#" class="prevnext"><i class="fa fa-angle-left"></i></a></div>
                            <div class="pull-left">
                                <ul class="paginationforum">
                                    <li class="hidden-xs"><a href="http://forum.azyrusthemes.com/index.html#">1</a></li>
                                    <li class="hidden-xs"><a href="http://forum.azyrusthemes.com/index.html#">2</a></li>
                                    <li class="hidden-xs"><a href="http://forum.azyrusthemes.com/index.html#">3</a></li>
                                    <li class="hidden-xs"><a href="http://forum.azyrusthemes.com/index.html#">4</a></li>
                                    <li><a href="http://forum.azyrusthemes.com/index.html#">5</a></li>
                                    <li><a href="http://forum.azyrusthemes.com/index.html#">6</a></li>
                                    <li><a href="http://forum.azyrusthemes.com/index.html#" class="active">7</a></li>
                                    <li><a href="http://forum.azyrusthemes.com/index.html#">8</a></li>
                                    <li class="hidden-xs"><a href="http://forum.azyrusthemes.com/index.html#">9</a></li>
                                    <li class="hidden-xs"><a href="http://forum.azyrusthemes.com/index.html#">10</a></li>
                                    <li class="hidden-xs hidden-md"><a href="http://forum.azyrusthemes.com/index.html#">11</a></li>
                                    <li class="hidden-xs hidden-md"><a href="http://forum.azyrusthemes.com/index.html#">12</a></li>
                                    <li class="hidden-xs hidden-sm hidden-md"><a href="http://forum.azyrusthemes.com/index.html#">13</a></li>
                                    <li><a href="http://forum.azyrusthemes.com/index.html#">1586</a></li>
                                </ul>
                            </div>
                            <div class="pull-left"><a href="http://forum.azyrusthemes.com/index.html#" class="prevnext last"><i class="fa fa-angle-right"></i></a></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>


            </section>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-xs-3 col-sm-2 logo "><a href="http://forum.azyrusthemes.com/index.html#"><img src="./Forum __ Home Page_files/logo.jpg" alt=""></a></div>
                        <div class="col-lg-8 col-xs-9 col-sm-5 ">Copyrights 2014, websitename.com</div>
                        <div class="col-lg-3 col-xs-12 col-sm-5 sociconcent">
                            <ul class="socialicons">
                                <li><a href="http://forum.azyrusthemes.com/index.html#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="http://forum.azyrusthemes.com/index.html#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="http://forum.azyrusthemes.com/index.html#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="http://forum.azyrusthemes.com/index.html#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="http://forum.azyrusthemes.com/index.html#"><i class="fa fa-cloud"></i></a></li>
                                <li><a href="http://forum.azyrusthemes.com/index.html#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>


        <?php $this->endBody() ?>

    </body>
</html>
<?php $this->endPage() ?>
