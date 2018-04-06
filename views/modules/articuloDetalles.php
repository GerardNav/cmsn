<div class="ed_pagetitle" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0" style="background-image: url(views/images/art.jpg);">
<div class="ed_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-6">
				<div class="page_title">
					<h2><?php echo $respuesta["titulo"]; ?></h2>
				</div>
			</div>
			<div class="col-lg-6 col-md-8 col-sm-6">
				<ul class="breadcrumb">
					<li><a href="index.html">home</a></li>
					<li><i class="fa fa-chevron-left"></i></li>
					<li><a href="blog.html">educo blog</a></li>
					<li><i class="fa fa-chevron-left"></i></li>
					<li><a href="blog_single.html">single post</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--Breadcrumb end-->
<!--Blog content start-->
<div class="ed_transprentbg ed_toppadder80 ed_bottompadder80">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-9">
				<div class="ed_blog_all_item">
					<div class="ed_blog_item ed_bottompadder50">
						<div class="ed_blog_image">
							<img  src="backend/<?php echo $respuesta["ruta"]; ?>" alt="blog image" />
						</div>
					<div class="ed_blog_info">
						<span>
							<h2><?php echo $respuesta["titulo"]; ?></h2>
							<h3><?php echo $respuesta["subtitulo"]; ?></h3>
						</span>
						<ul>
							<li><a href="#"><i class="fa fa-user"></i> james marco</a></li>
							<li><a href="#"><i class="fa fa-clock-o"></i> January 22, 2015</a></li>
							<li><a href="#"><i class="fa fa-comment-o"></i> 4 comments</a></li>
						</ul>
						<?php echo $respuesta["contenido"]; ?>
					</div>
					<div class="ed_blog_tags">
					<ul>
						<li><i class="fa fa-tags"></i> <a href="#">tags: </a></li>
						<li><a href="#">university,</a></li>
						<li><a href="#">college,</a></li>
						<li><a href="#">skill,</a></li>
						<li><a href="#">edution</a></li>
					</ul>
					<div><a href="javascript:;" id="ed_share_wrapper">share the post</a>
						<ul id="ed_social_share">
							<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="skype"><i class="fa fa-skype"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="facebook"><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>
					</div>
					</div>
					<!--Quotation start-->
					<div class="ed_quotation">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<h4>You should also read: <span>“Our team became international champion.”</span></h4>
						</div>
					</div>
					<!--Quotation end-->
					<!--Comments section start-->
					<div class="ed_blog_comment_wrapper">
						<h4>All Comments</h4>
						<div class="ed_blog_comment ed_toppadder30">
							<div class="ed_comment_image"> <img src="http://placehold.it/70X70" alt="" /> </div>
							<div class="ed_comment_text">
								<h5>Frank Pascole <span>january 27, 2015 <a href="" class="comment_reply">Reply</a></span></h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vehicula mauris ac facilisis congue. Fusce sem enim, rhoncus volutpat condimentum ac, placerat semper ligula. Suspendisse in viverra justo, eu placerat urna. Vestibulum blandit diam suscipit nibh mattis ullamcorper. Nullam a condimentum nulla, ut facilisis enim. </p>
							</div>
						</div>
						<div class="ed_blog_sub_comment ed_toppadder30">
							<div class="ed_comment_image"> <img src="http://placehold.it/70X70" alt="" /> </div>
							<div class="ed_comment_text">
								<h5>Tina Bonucci <span>january 31, 2015 <a href="" class="comment_reply">Reply</a></span></h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vehicula mauris ac facilisis congue. Fusce sem enim, rhoncus volutpat condimentum ac, placerat semper ligula. Suspendisse in viverra justo, eu placerat urna. Vestibulum blandit diam suscipit nibh mattis ullamcorper. Nullam a condimentum nulla, ut facilisis enim. </p>
							</div>
						</div>
						<div class="ed_blog_comment ed_toppadder30">
							<div class="ed_comment_image"> <img src="http://placehold.it/70X70" alt="" /> </div>
							<div class="ed_comment_text">
								<h5>Sarah Silvester  <span>january 28, 2015 <a href="" class="comment_reply">Reply</a></span></h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vehicula mauris ac facilisis congue. Fusce sem enim, rhoncus volutpat condimentum ac, placerat semper ligula. Suspendisse in viverra justo, eu placerat urna. Vestibulum blandit diam suscipit nibh mattis ullamcorper. Nullam a condimentum nulla, ut facilisis enim. </p>
							</div>
						</div>
						<div class="ed_blog_comment ed_toppadder30">
							<div class="ed_comment_image"> <img src="http://placehold.it/70X70" alt="" /> </div>
							<div class="ed_comment_text">
								<h5>Andre House <span>january 25, 2015 <a href="" class="comment_reply">Reply</a></span></h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vehicula mauris ac facilisis congue. Fusce sem enim, rhoncus volutpat condimentum ac, placerat semper ligula. Suspendisse in viverra justo, eu placerat urna. Vestibulum blandit diam suscipit nibh mattis ullamcorper. Nullam a condimentum nulla, ut facilisis enim. </p>
							</div>
						</div>
					</div>
					<!--Comments section end-->
					<!--Comments Form start-->
					<div class="ed_blog_message_wrapper">
						<h4>All Comments</h4>
						<div class="ed_blog_messages ed_toppadder30">
							<div class="row">
								<form>
									<div class="form-group">
										<div class="col-lg-4">
											<input type="text" class="form-control" placeholder="Your Name" />
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-4">
											<input type="email" class="form-control" placeholder="Your Email" />
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-4">
											<input type="url" class="form-control" placeholder="Your Website URL" />
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-12">
											<textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-12">
											<a href="#" class="btn ed_btn ed_orange">reply</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				<!--Comments Form end-->
				</div>
			</div>
			<?php if ($respuesta["tipoarticulo"] == "2") { ?>
<!--Sidebar Start-->
			<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="sidebar_wrapper">
					<aside class="widget widget_search">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</aside>
					<aside class="widget widget_categories">
						<h4 class="widget-title">Search Categories</h4>
						<ul>
							<li><a href="#"><i class="fa fa-chevron-right"></i> School Psychology</a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i> Youth Counseling</a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i> Exam Stress</a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i> Our Experise</a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i> Vocational Counseling</a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i> Student Guidance</a></li>
						</ul>
					</aside>
					<aside class="widget widget_archive">
						<h4 class="widget-title">Our Archive</h4>
						<ul>
							<li><a href="#"><i class="fa fa-chevron-right"></i> December 2014  (4)</a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i> October 2014  (1)</a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i> May 2013  (13)</a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i> August 2012  (5)</a></li>
						</ul>
					</aside>
					<aside class="widget widget_tag_cloud">
						<h4 class="widget-title">Search by Tags</h4>
							<a href="#" class="ed_btn ed_orange">university</a>
							<a href="#" class="ed_btn ed_orange">skill</a>
							<a href="#" class="ed_btn ed_orange">tests</a>
							<a href="#" class="ed_btn ed_orange">exams</a>
							<a href="#" class="ed_btn ed_orange">elementary school</a>
							<a href="#" class="ed_btn ed_orange">college</a>
							<a href="#" class="ed_btn ed_orange">edution</a>
					</aside>
				</div>
			</div>

<!--Sidebar End-->
<?php } ?>
		</div>
	</div>  
</div>
<!--Blog content end-->