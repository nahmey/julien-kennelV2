<template>
	<div class="site-footer">
		<div class="inner first">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<h3 class="heading">About Tour</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
						<div class="widget">
							<ul class="list-unstyled social">
								<!-- <li><a href="#"><span class="icon-twitter"></span></a></li> -->
								<!-- <li><a href="#"><span class="icon-instagram"></span></a></li> -->
								<!-- <li><a href="#"><span class="icon-facebook"></span></a></li> -->
								<li><a href="#" class="mr-2"><span class="icon-linkedin"></span></a></li>
								<!-- <li><a href="#"><span class="icon-dribbble"></span></a></li> -->
								<!-- <li><a href="#"><span class="icon-pinterest"></span></a></li> -->
								<li><a href="#"><span class="icon-github"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 pl-lg-5">
						<div class="widget">
							<h3 class="heading">Pages</h3>
							<ul class="links list-unstyled">
								<li><a href="#">Blog</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
<!-- 					<div class="col-md-6 col-lg-2">
						<div class="widget">
							<h3 class="heading">Resources</h3>
							<ul class="links list-unstyled">
								<li><a href="#">Blog</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div> -->
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<h3 class="heading">Contact</h3>
							<ul class="list-unstyled quick-info links">
								<li class="email"><a href="mailto:kennel.julien@gmail.com">kennel.julien@gmail.com</a></li>
								<li class="phone"><a href="tel:0674118211">06.74.11.82.11</a></li>
								<li class="address"><a href="#">3 Passage Achille Demange 67700 SAVERNE</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="inner dark">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8 mb-3 mb-md-0 mx-auto">
						<p>Copyright © {{dayjs().format('YYYY')}}. Tous droits réservés. - <Link :href="route('mentions_legales')" class="link-highlight text_white">Mentions légales</Link>
						</p>
						<!-- <p>Copyright ©<script>document.write(new Date().getFullYear());</script>2025. All Rights Reserved. — Designed with love by <a href="https://untree.co" class="link-highlight">Untree.co</a>Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
						</p> -->
					</div>
					
				</div>
			</div>
		</div>
	</div>
</template>

<script setup>
import dayjs from 'dayjs';
</script>