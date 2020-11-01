<?php get_header(); ?>
    <div class="wrapper">
    <div id="page_top"><a href=""></a></div>
        <div id="mainVisual">
            <div class="position-relative vh-100">
                <div class="position-absolute">
                    <img loading="lazy" class="vh-100 vw-100 mainVisual-img" src="<?php echo get_template_directory_uri(); ?>/image/mainvisual.webp" alt="メイン画像">
                </div>
                <!-- ハンバーガーメニュー アイコン -->
                <div class="hamburger">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </div>
                <!-- スマホサイズ時ハンバーガーメニュー押下時に起動するナビゲーション -->
                <div id="navMenu-modal">
                    <ul>
                        <li class="hamburger-list"><a href="#About">ABOUT</a></li>
                        <li class="hamburger-list"><a href="#Services">SERVICES</a></li>
                        <li class="hamburger-list"><a href="#Members">MEMBERS</a></li>
                        <li class="hamburger-list"><a href="#Blogs">BLOGS</a></li>
                        <li class="hamburger-list"><a href="#Contact">CONTACT</a></li>
                    </ul>
                </div>
                <!-- ディスプレイサイズ時のナビゲーション -->
                <nav id="global-nav" class="nav navbar navbar-expand-md">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-txt nav-link" href="#About">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-txt nav-link" href="#Services">SERVICES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-txt nav-link" href="#Members">MEMBERS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-txt nav-link" href="#Blogs">BLOGS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-txt nav-link" href="#Contact">CONTACT</a>
                            </li>    
                        </ul>
                    </div>
                </nav>
                <div class="row">
                    <div class="col-lg-5 position-absolute mainVisual-headline">
                        <h1 class="mainVisual-headline__text">RevTech</h1>
                    </div>
                </div>
            </div>
        </div>
        <section id="About" class="section sectionAbout">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="sectionTitle sectionTitle__About">
                            <h2 class="sectionTitle-txt sectionTitle-txt__About">ABOUT</h2>
                        </div>    
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-11 d-md-flex flex-row-reverse mx-auto">
                        <div class="sectionImg sectionImg__About col-md-5 mx-auto">
                            <img loading="lazy" class="sectionImg-img sectionImg-img__About" src="<?php echo get_template_directory_uri(); ?>/image/about.webp" alt="紹介">
                        </div>
                        <div class="sectionTxt SectionTxt__About col-md-5 mx-auto">
                            <p class="sectionTxt-txt Section-txt__About">
                                ご依頼主さまの課題に寄り添い、保守性の高いサイト制作サービス、業務効率化のツール作成サービス、またその経験から初学者をはじめとするプログラミング学習支援を展開しています。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Services" class="section sectionServices">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="sectionTitle sectionTitle__Services">
                            <h2 class="sectionTitle-txt sectionTitle-txt__Services">Services</h2>
                        </div>     
                    </div>
                </div>
                <div class="row serviceInner">
                    <div class="col-12 col-md-11 d-md-flex flex-row-reverse mx-auto">
                        <div class="serviceImgBox serviceImgBox__Pro col-md-5 mx-auto">
                            <img loading="lazy" class="services-img" src="<?php echo get_template_directory_uri(); ?>/image/programing.webp" alt="プログラミング">
                            <div class="box-slicer"></div>
                            <div class="col-lg-5 position-absolute services-headline__Pro">
                                <h3 class="services-headline__text">Programing</h3>
                            </div>
                        </div>
                        <div class="sectionTxt services-text col-md-5 mx-auto">
                            <p>普段は金融系のSEとして活動しております。使用言語は主に、C#やVB.Net、VBA。
                                保守性の高いシステムの開発やVBAを用いた業務の効率化に従事しております。
                                お気軽にご相談ください。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row serviceInner my-5">
                    <div class="col-12 col-md-11 d-md-flex flex-row mx-auto">
                        <div class="serviceImgBox serviceImgBox__Seo col-md-5 mx-auto">
                            <img loading="lazy" class="services-img" src="<?php echo get_template_directory_uri(); ?>/image/seo.webp" alt="SEO">
                            <div class="box-slicer"></div>
                            <div class="col-lg-5 position-absolute services-headline__Seo">
                                <h3 class="services-headline__text">SEO/Coding</h3>
                            </div>
                        </div>
                        <div class="sectionTxt services-text col-md-5 mx-auto">
                            <p>WEBサイト運営やアパレルブランドに携わった経験を活かし、
                                主に、HTML5、CSS3、JavaScriptを用いたSEOに強いサイトのコーディングを行うことができます。
                                お気軽にご相談ください。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row serviceInner">
                    <div class="col-12 col-md-11 d-md-flex flex-row-reverse mx-auto">
                        <div class="serviceImgBox serviceImgBox__Edu col-md-5 mx-auto test">
                            <img loading="lazy" class="services-img" src="<?php echo get_template_directory_uri(); ?>/image/website.webp" alt="Website">
                            <div class="box-slicer"></div>
                            <div class="col-lg-5 position-absolute services-headline__Edu">
                                <h3 class="services-headline__text">Education</h3>
                            </div>
                        </div>
                        <div class="sectionTxt services-text col-md-5 mx-auto">
                            <p>大手のプログラミングスクールでの講師経験や100人以上のプログラミングコミュニティを創設・運営した経験から、
                                スクール同等のコンテンツ、初学者に寄り添うサポートを行うことができます。
                                ご興味ある方はお気軽にご相談ください。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Members" class="bg-members">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="sectionTitle sectionTitle__Members">
                            <h2 class="sectionTitle-txt sectionTitle-txt__Members">Members</h2>
                        </div>     
                    </div>
                </div>
                <div class="row">
                    <div class="col-11 col-md-4 mx-auto">
                        <div class="memberImg memberImg__Shunta text-center py-4">
                            <img loading="lazy" class="memberImg-img memberImg-img__Shunta rounded-circle" src="<?php echo get_template_directory_uri(); ?>/image/shunta.webp" alt="shunta">
                        </div>
                        <div class="memberTxt memberTxt__Shunta">
                            <p class="memberTxt-nm memberTxt-nm__Shunta text-center">WATABE SHUNTA</p>
                            <p class="memberTxt-txt memberTxt-txt__Shunta">ここにテキストが入ります。ここにテキストが入ります。
                                ここにテキストが入ります。ここにテキストが入ります。
                            </p>
                        </div>
                    </div>
                    <div class="col-11 col-md-4 mx-auto">
                        <div class="memberImg memberImg__Sho text-center py-4">
                            <img loading="lazy" class="memberImg-img memberImg-img__Sho rounded-circle" src="<?php echo get_template_directory_uri(); ?>/image/man.webp" alt="sho">
                        </div>
                        <div class="memberTxt memberTxt__Sho">
                            <p class="memberTxt-nm memberTxt-nm__Sho text-center">NIIKURA SHO</p>
                            <p class="memberTxt-txt memberTxt-txt__Sho">ここにテキストが入ります。ここにテキストが入ります。
                                ここにテキストが入ります。ここにテキストが入ります。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Blogs" class="section sectionBlogs">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="sectionTitle sectionTitle__Blogs">
                            <h2 class="sectionTitle-txt sectionTitle-txt__Blogs">Blogs</h2>
                        </div>    
                    </div>
                </div>
                <div class="row">
                    <div class="swiper-container py-5">
                        <div class="swiper-wrapper">
                            <div class="blogBox swiper-slide">
                                <div class="card">
                                    <img loading="lazy" class="blog-img" src="<?php echo get_template_directory_uri(); ?>/image/blogs.webp" alt="blog">
                                    <div class="card-body pt-0">
                                        <h5 class="card-title"></h5>
                                        <span class="blog-tag">News</span><br>
                                        <span class="blog-cd">2020/10/10</span>
                                        <p class="blog-title">公式サイトリリース！</p>
                                    </div>
                                </div>
                            </div>
                            <div class="blogBox swiper-slide">
                                <div class="card">
                                    <img loading="lazy" class="blog-img" src="<?php echo get_template_directory_uri(); ?>/image/blogs.webp" alt="blog">
                                    <div class="card-body pt-0">
                                        <h5 class="card-title"></h5>
                                        <span class="blog-tag">News</span><br>
                                        <span class="blog-cd">2020/10/10</span>
                                        <p class="blog-title">公式サイトリリース！</p>
                                    </div>
                                </div>
                            </div>
                            <div class="blogBox swiper-slide">
                                <div class="card">
                                    <img loading="lazy" class="blog-img" src="<?php echo get_template_directory_uri(); ?>/image/blogs.webp" alt="blog">
                                    <div class="card-body pt-0">
                                        <h5 class="card-title"></h5>
                                        <span class="blog-tag">News</span><br>
                                        <span class="blog-cd">2020/10/10</span>
                                        <p class="blog-title">公式サイトリリース！</p>
                                    </div>
                                </div>
                            </div>
                            <div class="blogBox swiper-slide">
                                <div class="card">
                                    <img loading="lazy" class="blog-img" src="<?php echo get_template_directory_uri(); ?>/image/blogs.webp" alt="blog">
                                    <div class="card-body pt-0">
                                        <h5 class="card-title"></h5>
                                        <span class="blog-tag">News</span><br>
                                        <span class="blog-cd">2020/10/10</span>
                                        <p class="blog-title">公式サイトリリース！</p>
                                    </div>
                                </div>
                            </div>
                            <div class="blogBox swiper-slide">
                                <div class="card">
                                    <img loading="lazy" class="blog-img" src="<?php echo get_template_directory_uri(); ?>/image/blogs.webp" alt="blog">
                                    <div class="card-body pt-0">
                                        <h5 class="card-title"></h5>
                                        <span class="blog-tag">News</span><br>
                                        <span class="blog-cd">2020/10/10</span>
                                        <p class="blog-title">公式サイトリリース！</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Contact" class="section sectionContact">
            <div class="container-fluid px-0">
                <div class="position-relative">
                    <div class="position-absolute bgImg">
                        <img loading="lazy" class="bgImg-Contact" src="<?php echo get_template_directory_uri(); ?>/image/contact.webp" alt="blog">
                    </div>
                    <div class="col-11 col-md-10 py-5 form-box mx-auto">
                        <div class="row bg-light py-5">
                            <div class="col-12 col-md-5 ml-auto">
                                <div class="sectionTitle__Contact">
                                    <h2 class="sectionTitle-txt__Contact">Contact</h2>
                                </div>     
                                <div class="contact-text my-4">
                                    <p>弊サイトを最後までご覧いただきありがとうございます。
                                        サイト制作から学習サポートまで、サービスに対するご質問、ご依頼等ございましたらお気軽にお問い合わせください。
                                    </p>
                                </div>
                            </div> 
                            <div class="col-12 col-md-5 mr-auto">
                                <form class="text-center">
                                    <div class="form-group">
                                        <input type="text" id="contactInputName" placeholder="お名前">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="contactInputEmail" placeholder="メールアドレス">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="contactInputCompany" placeholder="会社名">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="contactInputRequire" placeholder="ご用件">
                                    </div>
                                    <div class="form-group">
                                        <textarea id="contactInputContent" placeholder="お問い合わせ内容"></textarea>
                                    </div>
                                    <button type="submit" class="button-send">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_footer(); ?>