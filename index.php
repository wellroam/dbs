<?php get_header(); ?>

	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 text-left">
					<div id="fh5co-logo"><a href="index.php">夏缶动画<span>.</span></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="active"><a href="index.php">主页</a></li>
						<li><a href="#fh5co-project">作品</a></li>
						<li><a href="#services">关于我们</a></li>
						<li><a href="#fh5co-counter">业务合作范围</a></li>
                        <li><a href="#fh5co-blog">企业精神</a></li>
                        <li><a href="#intro">服务介绍</a></li>
						<li><a href="#contact">联系我们</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover js-full-height" role="banner"  data-stellar-background-ratio="0.5">
        <div id="scene" class="fh5co-cover overlay js-full-height ">
            <video  src="http://cnd.shufflecg.com/shuffle.mp4" autoplay="autoplay" loop="loop" >

            </video>
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
					<p>力争用最好的技艺实现您的产品价值</p>
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

        <div class="fh5co-cover" style="background-image: url(http://cnd.shufflecg.com/lmbz.jpg)")  data-stellar-background-ratio="0.1" >
        <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="center-block text-center">
                        <div class="display-t">
                            <div class="display-tc  animate-box" data-animate-effect="fadeInUp">
                                <h1 class="mb30">创意·创新·创造</h1>
                                <h2>夏缶动画，为追求无限创意的设计师喝彩！</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="services" class="fh5co-services fh5co-bg-section border-bottom"  data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-8 col-md-offset-2 text-left animate-box" data-animate-effect="fadeInUp">
                        <div class="fh5co-heading">
                            <span>我们匠心独运</span>
                            <h2>关于我们</h2>
                            <p>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp成都夏缶动画有限公司前身是大白汐工作室，注册资本壹佰万，公司位于成都市武侯区西部智谷D区，主营业务各类三维动画、影视后期。<br>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp团队核心成员皆是行业三维动画各个模块老手，制作企业产品动画项目与电视台栏目包装无数，在面对各种类型的商业客户，我们都能快速高效的完成商业答卷！我们可以提供从创意到后期合成整个流程的服务，我们的原则是：最精良的团队做最精良的作品。<br>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp我们为了梦想而不断的制作原创动画，助推国漫复兴。本公司团队核心成员大白汐制作的原创动画《轮回》于2017年一经发布便引起各大视频网站强烈反响，先后入围新光奖等各大国际重大动漫赛事，并获得第十一届亚洲青年动漫大赛《贵飞奖》荣誉。<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 ">
                        <div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-eye"></i>
						</span>
                            <h3>经验</h3>
                            <p>夏缶动画有非常丰富项目经验丰富，高度完成了各种不同类型的项目，一定有与您的企业需求类似的项目。</p>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                        <div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-command"></i>
						</span>
                            <h3>技艺</h3>
                            <p>夏缶动画不仅能使用各大动画软件，呈现完整的动画成片，同时还能提供符合企业产品宣传理念的动画方案、创意脚本。</p>

                        </div>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-4 col-sm-6 ">
                        <div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-power"></i>
						</span>
                            <h3>服务</h3>
                            <p>夏缶动画具有优质的服务，给您的企业带来充分的保障，周到的服务不仅仅停留在动画制作过程中，还会在项目完成之后为您带来更多细心的售后服务。</p>

                        </div>
                    </div>

                    <div class="clearfix visible-md-block"></div>

                    <div class="col-md-4 col-sm-6 ">
                        <div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-eye"></i>
						</span>
                            <h3>创意</h3>
                            <p>根据客户需要，由专业创意团队与您一对一沟通，给出最佳方案</p>

                        </div>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-4 col-sm-6 ">
                        <div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-command"></i>
						</span>
                            <h3>报价</h3>
                            <p>相对于价格，夏缶动画更关注创造客户价值，报价透明是唯一的承诺</p>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                        <div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-power"></i>
						</span>
                            <h3>品质</h3>
                            <p>团队成员拥有当下先进的CG制作技术，具备高清制作能力和高清处理流程，保证画面完整度，做出更高品质的动画。</p>
                        </div>
                    </div>

                    <div class="clearfix visible-md-block"></div>
                </div>
            </div>
        </div>

        <div id="joinus" class="fh5co-cover" style="background-image: url(http://cnd.shufflecg.com/yg.jpg); "  data-stellar-background-ratio="0.1" >
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="center-block text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeInUp">
                                <h1 class="mb30">业务合作范围</h1>
                                <h2>全力实现您最佳的产品价值!</h2>
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
                        <h2>业务合作范围</h2>
                        <p>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp我们可以提供从创意到后期合成整个流程的原创服务，拒绝雷同，拒绝模版，拒绝转包，我们要的就是全力实现您更好的产品价值，我们的业务范围有：<br>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<strong>三维角色动画</strong>——围绕生动的动画角色展开的妙趣横生的故事情节，或是一个桥段，或是一句台词，或是一个简单的动作，我们赋予角色灵魂，角色实现您更好的产品价值。<br>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<strong>三维产品动画</strong>——我们绝不按照常规套路模版式的简单的去介绍您的产品，而是先去深入了解您的产品，如果有必要，甚至源代码！甚至源图纸！然后从各个方面去寻找您产品的更新更好更酷的表现方式，哪怕，用表现兰博基尼的方式去表现一个鱼缸！（我们又不是没干过...）<br>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<strong>三维动画广告</strong>——用合适的三维元素去实现你更好的产品价值，或是纯制作，或是实拍结合，在您的产品面前，谁更能发挥更好的价值我们就用什么手段。<br>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<strong>栏目包装</strong>——用更新更炫更酷的视听语言以及画面元素去表达您这个栏目的核心内容，尽全力将15到30秒的时间发挥到极致，将观众的注意力凝聚在您的栏目。<br>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<strong>游戏CG</strong>——我们倾注全团队之力，让您的游戏CG，在暴雪面前，也不会颤抖... <br>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<strong>影视后期</strong>——写实是我们的信条。 <br>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<strong>其他业务</strong>——我们不做！我们是专业的三维团队好嘛！ <br>
                        </p>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-3 col-md-offset-1 col-sm-6 animate-box" data-animate-effect="fadeInLeft">

                        <div class="feature-center">
						<span class="icon">
							<i class="ti-download"></i>
						</span>
                            <span class="counter"><span class="js-counter" data-from="0" data-to="7" data-speed="15" data-refresh-interval="50">1</span>年+</span>
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
        <div id="joinus" class="fh5co-cover" style="background-image:url(http://cnd.shufflecg.com/lct.jpg)")  data-stellar-background-ratio="0.1" >
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="center-block text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeInUp">
                                <h1 class="mb30">服务流程</h1>
                                <h2>专业的流程是高品质作品的前提与保障！</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="intro" class="fh5co-services fh5co-bg-section border-bottom"  data-stellar-background-ratio="0.1">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-8 col-md-offset-2 text-left animate-box" data-animate-effect="fadeInUp">
                        <div class="fh5co-heading">
                            <span>尽善尽美</span>
                            <h2>服务介绍</h2>
                            <p>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp项目流程：<br>
                                <b>合作意愿</b>——<b>了解需求</b>——<b>合同签订</b>——<b>项目创意与策划</b>（若客户提供则省略此环节）——<b>产品或角色设定</b>——
                                <b>模型</b>——<b>layout</b>(出动画分镜）——<b>材质</b>——<b>动画</b>——<b>特效</b>——<b>画面合成</b>——<b>音频合成</b>——<b>成片输出</b> <br>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp过程中不断与客户协商敲定后再进行下一步制作流程。成片输出后可进行三次无偿修改（不包含创意以及设定类框架性修改）。 <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 ">
                        <div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-eye"></i>
						</span>
                            <h3>提出需求</h3>
                            <p>客户在项目之前，首先要提出需求。内容包括：动画的基本风格，表达内容，基本脚本</p>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                        <div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-command"></i>
						</span>
                            <h3>进行沟通</h3>
                            <p>客户提出设计方面的需求建议，与策划人员进行具体的沟通</p>
                        </div>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-4 col-sm-6 ">
                        <div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-power"></i>
						</span>
                            <h3>方案和报价</h3>
                            <p>针对客户的需求结构，客户先提出费用预算，然后我们协商确定制作费用，并制定设计方案</p>

                        </div>
                    </div>

                    <div class="clearfix visible-md-block"></div>

                    <div class="col-md-4 col-sm-6 ">
                        <div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-eye"></i>
						</span>
                            <h3>签订合同</h3>
                            <p>客户如果满意我们的方案，签订商务合同，客户支付制作预付款</p>
                        </div>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-4 col-sm-6 ">
                        <div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-command"></i>
						</span>
                            <h3>设计制作</h3>
                            <p>我方按照需求书进行整体设计，出具设计初稿。客户审核并确认设计初稿后，我方开始整体设计制作</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                        <div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-power"></i>
						</span>
                            <h3>交付客户实用</h3>
                            <p>制作完成后，客户进行验收，通过验收后，客户支付项目尾款，交付客户使用</p>
                        </div>
                    </div>

                    <div class="clearfix visible-md-block"></div>
                </div>
            </div>
        </div>
        <div id="joinus" class="fh5co-cover" style="background-image: url(http://cnd.shufflecg.com/fhf.jpg)"  data-stellar-background-ratio="0.1" >
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="center-block text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeInUp">
                                <h1 class="mb30">企业文化</h1>
                                <h2>找准的方向，用对的方法，做好的方案， 实现自我理想与价值</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-blog" class="fh5co-bg-section">
            <div class="container">
                <div class="row animate-box row-pb-md" data-animate-effect="fadeInUp">
                    <div class="col-md-8 col-md-offset-2 text-left fh5co-heading">
                        <span>术业有专供</span>
                        <h2>夏缶精神</h2>
                        <p>专注，专业，专一</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="fh5co-post">
                            <h3><a>企业精神</a></h3>
                            <p>超越自我，勇往直前<br>我们的存在就是为客户创造价值</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="fh5co-post">
                            <h3><a>企业法则</a></h3>
                            <p>细节决定成败<br>低调做人，高调做事</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="fh5co-post">
                            <h3><a>企业价值观</a></h3>
                            <p>永为先驱<br>尽善尽美</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-started">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>加入我们</h2>
                        <p>我们真诚欢迎热爱动画事业的人才加入我们的团队</p>
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
                <div class="p-b"></div>

                <div class="row p-b">
                    <div class="col-lg-4  text-center wow bounceIn" >
                        <i class="fh5co-logo icon-phone"></i>
                        <p>18521521502</p>
                    </div>
                    <div class="col-lg-4 text-center wow bounceIn" >
                        <i class="fh5co-logo icon-location "></i>
                        <p>成都市武侯区西部智谷D区2栋1单元706</p>
                    </div>
                    <div class="col-lg-4  text-center wow bounceIn">
                        <i class="fh5co-logo icon-mail"></i>
                        <a href="mailto:shufflecg@shufflecg.com"><p>shufflecg@shufflecg.com</p></a>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <div class="contact-popup ">
        <a href="#contact"><p>咨询电话：18521521502</p></a>
    </div>
	<!-- jQuery -->
	<!-- jQuery Easing -->
	<script src="https://cdn.bootcss.com/jquery-easing/1.3/jquery.easing.min.js"></script>
	<!-- Waypoints -->
	<script src="https://cdn.bootcss.com/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<!-- countTo -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/magnific-popup-options.js"></script>
	<!-- Stellar -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>


	</body>


