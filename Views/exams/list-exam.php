<!-- inner page banner -->
<div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
	<div class="container">
		<div class="page-banner-entry">
			<h1 class="text-white">Exams</h1>
		</div>
	</div>
</div>
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
	<div class="container">
		<ul class="list-inline">
			<li><a href="#">Home</a></li>
			<li>Exams</li>
		</ul>
	</div>
</div>
<!-- Breadcrumb row END -->
<!-- inner page banner END -->
<div class="content-block">
	<!-- About Us -->
	<div class="section-area section-sp1 gallery-bx">
		<div class="container">
			<div class="feature-filters clearfix center m-b40">
				<ul class="filters" data-toggle="buttons">
					<li data-filter="" class="btn active">
						<input type="radio">
						<a href="#"><span>All</span></a>
					</li>
					<li data-filter="happening" class="btn">
						<input type="radio">
						<a href="#"><span>Happening</span></a>
					</li>
					<li data-filter="upcoming" class="btn">
						<input type="radio">
						<a href="#"><span>Upcoming</span></a>
					</li>
					<li data-filter="expired" class="btn">
						<input type="radio">
						<a href="#"><span>Expired</span></a>
					</li>
				</ul>
			</div>
			<div class="clearfix">
				<ul id="masonry" class="ttr-gallery-listing magnific-image row">
					<?php
					foreach ($data as $value) {
					?>
						<li class="action-card col-lg-6 col-md-6 col-sm-12 happening">
							<div class="event-bx m-b30">
								<div class="action-box">
									<img src="assets/images/event/pic1.jpg" alt="">
								</div>
								<div class="info-bx d-flex">
									<div>
										<div class="event-time">
											<div class="event-date">29</div>
											<div class="event-month">October</div>
										</div>
									</div>
									<div class="event-info">
										<h4 class="event-title"><a href="#"><?php echo $value['exam_name'] ?></a></h4>
										<ul class="media-post">
											<li><a href="#"><i class="fa fa-clock-o"></i> <?php echo $value['start'] ?> <?php echo $value['time'] ?>p</a></li>
											<!-- <li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li> -->
										</ul>
										<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p> -->
										<a onclick="return confirm('Start exam #'+ '<?php echo $value['exam_name']; ?>'+'#?')" href="index.php?controller=exam&action=detail&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-primary btn-toastr"><i class="ti-pencil-alt"></i> Start</a>
									</div>
								</div>
							</div>
						</li>
					<?php
					}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- contact area END -->