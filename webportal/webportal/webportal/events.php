	<?php
	require_once('includes/header.php');
?>	
<!-- laptop slider -->
<div class="flex-slider">
	<div class="container">
		<ul id="flexiselDemo1">			
			<li>
				<div class="laptop">
					<img src="images/laptopa.png" alt=""/>	
				</div>
			</li>
			<li>
				<div class="laptop">	
					<img src="images/laptop1.png" alt=""/>
				</div>
			</li>
			<li>
				<div class="laptop">
					<img src="images/laptop2.png" alt=""/>
				</div>
			</li>
		</ul>
			<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 1,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 1
										},
										tablet: { 
											changePoint:768,
											visibleItems: 1
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	</div>
</div>

<?php
	require_once('includes/footer.php');
?>