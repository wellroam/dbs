


<?php get_header(); ?>

	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 text-left">
					<div id="fh5co-logo"><a href="index.php">大白鲨影视<span>.</span></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="active"><a href="index.php">主页</a></li>
						<li><a href="#fh5co-project">作品</a></li>
						<li><a href="#fh5co-services">关于我们</a></li>
						<li><a href="#fh5co-counter">团队经验</a></li>
						<li><a href="#contact">联系我们</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner"  data-stellar-background-ratio="0.5">
        <div id="scene" class="fh5co-cover overlay">
            <div class="layer" data-depth="0.0"><img src="<?php bloginfo('template_url'); ?>/images/bg1.jpg"></div>
            <div class="layer" data-depth="0.3"><img src="<?php bloginfo('template_url'); ?>/images/bg2.png"></div>
        </div>
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeInUp">
							<h1 class="mb30">每一帧都有灵魂</h1>
							<p>
								<a href="#fh5co-project" target="_blank" class="btn btn-primary">了解我们</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-project">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 text-left fh5co-heading  animate-box">
					<span>我们用镜头讲述你的故事</span>
					<h2>作品</h2>
					<p>大白鲨动画团队核心制作人员在影视广告、动画制作行业已经侵润十年有余，秉承以客户的成功作为我们的核心理念，力争为客户提供更多更具价值的服务</p>
				</div>
			</div>

			<div class="row row-pb-md">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box img-cover-box" data-animate-effect="fadeIn">
                    <a gotopage="<?php the_permalink(); ?>"><?php the_post_thumbnail("img-cover"); ?>
						<div class="fh5co-copy">
							<h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
						</div>
					</a>
				</div>
                <?php endwhile; ?>
                <?php else : ?>
                    <h3 class="title"><a href="#" rel="bookmark">未找到</a></h3>
                    <p>没有找到任何文章！</p>
                <?php endif; ?>
			</div>


			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-left fh5co-heading  animate-box">
					<a href=""><span>查看更多.....</span> </a>

				</div>
			</div>
		</div>
		
	</div>

        <div class="fh5co-cover" style="background-image: url(<?php bloginfo('template_url'); ?>/images/zzzw.jpg")  data-stellar-background-ratio="0.5" >
        <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="center-block text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeInUp">
                                <h1 class="mb30">梦想·创想·青春</h1>
                                <h2>大白鲨影视，创办于2017年，为追求无限创意的设计师喝彩！</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-services" class="fh5co-bg-section border-bottom"  data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-8 col-md-offset-2 text-left animate-box" data-animate-effect="fadeInUp">
                        <div class="fh5co-heading">
                            <span>我们匠心独运用</span>
                            <h2>关于我们</h2>
                            <p>站在公司身后的，是一支年轻有为的实力团队。这里不单有制作经验丰富的导演，同时也有十余年经验的制作团队。</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 ">
                        <div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-eye"></i>
						</span>
                            <h3>优秀团队</h3>
                            <p>多年从业经验的优秀团队，作品精美画风成熟。涵盖各种风格、不同领域，时刻准备应对您的不同需求。</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                        <div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-command"></i>
						</span>
                            <h3>节约成本</h3>
                            <p>没有转包及中介，由公司直接为您报价，保证每一分钱都体现在稿件质量上，用更低的价格获得更高质量的稿件。</p>

                        </div>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-4 col-sm-6 ">
                        <div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-power"></i>
						</span>
                            <h3>信誉保证</h3>
                            <p>完善的信誉体系，评价均来自真实交易，多项信誉数据供参考。全程担保交易，让您不再害怕跑单，约稿更安心。</p>

                        </div>
                    </div>

                    <div class="clearfix visible-md-block"></div>

                </div>
            </div>
        </div>

        <div class="fh5co-cover" style="background-image: url(<?php bloginfo('template_url'); ?>/images/zzzw1.jpg")  data-stellar-background-ratio="0.5" >
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="center-block text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeInUp">
                                <h1 class="mb30">动画·栏包·广告</h1>
                                <h2>十年磨一剑，我们的团队有丰富的项目经验</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="fh5co-counter" class="fh5co-bg "  >
            <div class="container">

                <div class="row animate-box" data-animate-effect="fadeInUp" >
                    <div class="col-md-8 col-md-offset-2 text-left fh5co-heading">
                        <span>不积硅步无以至千里</span>
                        <h2>团队经验</h2>
                        <p>介绍公司主要业务</p>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-3 col-md-offset-1 col-sm-6 animate-box" data-animate-effect="fadeInLeft">

                        <div class="feature-center">
						<span class="icon">
							<i class="ti-download"></i>
						</span>
                            <span class="counter"><span class="js-counter" data-from="0" data-to="7" data-speed="15" data-refresh-interval="50">1</span>+</span>
                            <span class="counter-label">团队历史</span>

                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-2 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="feature-center">
							<span class="icon">
								<i class="ti-face-smile"></i>
							</span>
                            <span class="counter"><span class="js-counter" data-from="0" data-to="43" data-speed="15" data-refresh-interval="50">1</span>+</span>
                            <span class="counter-label">商业项目</span>
                        </div>
                    </div>


                </div>
            </div>
        </div>



        <div id="contact" class="fh5co-footer-style-3">
            <div  class="container">
                <div class="row fh5co-made">
                    <div class="col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <p>联系我们</p>
                    </div>
                </div>

                <div class="row p-b">
                    <div class="col-lg-4  text-center wow bounceIn" >
                        <i class="fh5co-logo icon-phone"></i>
                        <p>+86 028-11111111</p>
                    </div>
                    <div class="col-lg-4  text-center wow bounceIn" >
                        <i class="fh5co-logo icon-location"></i>
                        <p>四川省成都市武侯区盛安街401号天合凯旋南城1栋B座1211室</p>
                    </div>
                    <div class="col-lg-4  text-center wow bounceIn">
                        <i class="fh5co-logo icon-mail"></i>
                        <a href="mailto:kf@matrixwing.com"><p>449184990@qq.com</p></a>
                    </div>
                </div>
            </div>
        </div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->

	<!-- jQuery Easing -->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.waypoints.min.js"></script>
	<!-- countTo -->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/magnific-popup-options.js"></script>
	<!-- Stellar -->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>


	</body>


