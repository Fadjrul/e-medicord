

     
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="<?php echo site_url('LandingPage')?>">Home</a></li>
                <li><a href="#">Galeri</a></li>
                <li><a href="#">Video</a></li>
            </ol>
            <h2>Video</h2>

        </div>
    </section>
    <main id="main">
       
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                    <section id="blog" class="blog">
                        <div class="container" data-aos="fade-up">

                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="row">
                                    <?php 
                                        if($gallery){
                                            foreach($gallery as $g){ 
                                    ?>
                                        <div class="col-lg-6">
                                            <article class="entry" style="background-color: #fff">
                                                <div class="entry-img">
                                                    <?php if($g->gallery_cover !=""){?>
                                                    <video controls="" width="100%" height="150">
                                                        <source src="<?php echo base_url();?>upload/gallery/video/<?php echo $g->gallery_cover;?>" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                    <?php }else{ ?>
                                                        <iframe width="100%" height="150" src="<?php echo $g->gallery_url;?>"></iframe>
                                                    <?php }?>
                                                </div>
                                                <h2 class="entry-title">
                                                    
                                                    <?php echo $g->gallery_name;?>
                                                </h2>
                                                <div class="entry-meta" style="color:#777777;font-size:12px;">
                                                    <ul>
                                                        <li class="d-flex align-items-center"> <i class="icofont-calendar"></i> <?php echo indonesiaDate($g->gallery_date)?></li>
                                                    </ul>
                                                </div>
                                                
                                                

                                                

                                            </article>
                                        </div>

                                        

                                    <?php 
                                            }
                                        }else{ echo "Tidak Ada Video"; }
                                    ?>
                                    </div>

                                
                                    <hr>
                                    <div class="blog-pagination"><?php echo $links;?></div>

                                </div>

                                <div class="col-lg-4">
                                    <div class="sidebar">
                                        <h3 class="sidebar-title">Galeri</h3>
                                        <hr style="border: 0.9px dashed #d2d6de">
                                        <div class="sidebar-item categories">
                                            <ul>
                                                <li><a href="<?php echo site_url('page/gallery/photo');?>">Foto</a></li>
                                                <li><a href="<?php echo site_url('page/gallery/video');?>">Video</a></li>
                                            </ul>
                                        </div>
                                        
                                        
                                        <h3 class="sidebar-title">Artikel Terbaru</h3>
                                        <hr style="border: 0.9px dashed #d2d6de">
                                        <div class="sidebar-item recent-posts">
                                            <?php foreach($recent as $r){ ?>
                                            <div class="post-item clearfix">
                                                <img src="<?php echo base_url();?>upload/news/<?php echo $r->news_cover?>" alt="">
                                                <h4><a href="<?php echo site_url('page/information_detail/'.$r->news_category_id.'/'.$r->field_id.'/'.$r->news_slug);?>"><?php echo $r->news_title;?></a></h4>
                                                <time style="color:gray"><i class="icofont-eye-alt"></i> <b><?php echo $r->news_count_view;?>x dilihat</b> &nbsp;&nbsp;<b class="badge badge-success"><?php echo $r->field_name;?></b></time>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </section>

            </div>
        </section>
    </main>