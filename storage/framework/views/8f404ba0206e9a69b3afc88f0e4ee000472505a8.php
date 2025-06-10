<div class="header-top">
	<div class="container-fluid">
		<div class="header-top-content">
			<div class="px-3"><span class="mr-2 text-theme-blue fa fa-envelope"> </span><?php echo e(config('settings.email')); ?></div>
			<div class="px-3"><span class="mr-2 text-theme-blue fa fa-phone"> </span><?php echo e(config('settings.contact_no')); ?></div>
			<ul class="social-icons">
				<li><a href="https://www.facebook.com/BewareEssentials"><i class="zmdi zmdi-facebook"></i></a></li>
				<li><a href="https://www.linkedin.com/company/beware-cctv-surveillance-systems/"><i class="zmdi zmdi-linkedin"></i></a></li>
				<li><a href="https://www.instagram.com/bewareessentials/"><i class="zmdi zmdi-instagram"></i></a></li>
			</ul>
		</div>
	</div>
</div>
<div id="header-wrapper">
	<header id="header">
		<div id="main-header-wrapper-sticky-wrapper" class="sticky-wrapper">
			<div class="container-fluid">
				<div class="main-header">
					<div id="logo" class="pl-4">
						<a href="/" rel="home"> <img class="normal_logo" src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="CCTV" title="CCTV" /> <img class="darkbg_logo" src="https://vigil.wpengine.com/wp-content/themes/vigil/images/light-logo.png" alt="CCTV" title="CCTV" /> </a>
					</div>
					<div id="menu-wrapper" class="menu-wrapper menu-default">
						<div class="dt-menu-toggle" id="dt-menu-toggle"> Menu <span class="dt-menu-toggle-icon"></span> </div>
						<nav id="main-menu" class="menu-menu1-container">
							<ul class="menu">
								<!--li class="menu-item current_page_item"><a href="/">Home</a></li-->
								<li class="menu-item"><a href="<?php echo e(route('page', 'about-us')); ?>">About Us</a>
								
							</li>
								<li class="menu-item"><a href="#">Products <i class="zmdi zmdi-caret-down ms-2"></i></a>
									<ul class="dropdown-menu">
									
									<?php $__currentLoopData = Helper::allcate(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catagory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li><a href="<?php echo e(route('products', $catagory->slug)); ?>"><i class="zmdi zmdi-dot-circle mr-2"></i><?php echo e($catagory->name); ?> <i class="zmdi zmdi-caret-right ms-2 float-right mt-2"></i></a>
										<!-- <li><a href=""><i class="zmdi zmdi-dot-circle mr-2"></i> Surveillance Cameras <i class="zmdi zmdi-caret-right ms-2 float-right mt-2"></i></a>-->
										<?php if(@$catagory->categories->isNotEmpty()): ?>
											<ul class="sub-dropdown-menu">
											<?php $__currentLoopData = @$catagory->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcatagory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<li><a href="<?php echo e(route('products', $subcatagory->slug)); ?>"><i class="zmdi zmdi-dot-circle mr-2"></i><?php echo e($subcatagory->name); ?></a></li>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												<!-- <li><a href=""><i class="zmdi zmdi-dot-circle mr-2"></i> Network Cameras</a></li> -->
											</ul>
											<?php endif; ?>
										</li> 
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</ul>
								</li>
								<li class="menu-item"><a href="<?php echo e(route('page','career')); ?>">Career</a></li>
								<li class="menu-item"><a href="<?php echo e(route('blogs')); ?>">Blog</a></li>
								<li class="menu-item"><a href="<?php echo e(route('page', 'contact-us')); ?>">Contact Us</a></li>
								<?php if(auth()->guard()->guest()): ?>
								
								
								<li class="menu-item pt-2 px-3"><button type="button" class="btn btn-theme-blue mt-lg-3 btn-leadform">Become a Distributor</button></li>
								<?php else: ?>
								<li class="menu-item dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-sign-in"></i> <?php echo e(Auth::user()->name); ?> </a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
										<?php if(auth()->user()->is_admin): ?>
										<a class="dropdown-item" href="<?php echo e(route('admin.dashboard')); ?>">
										     Admin Dashboard 
										</a>
										<?php endif; ?>
										
										<a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
										   onclick="event.preventDefault();
														 document.getElementById('logout-form').submit();">
											<?php echo e(__('Logout')); ?>

										</a>

										<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
											<?php echo csrf_field(); ?>
										</form>
									</div>
								</li>	
							    <?php endif; ?>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
</div>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('distributer')->html();
} elseif ($_instance->childHasBeenRendered('iucluQ4')) {
    $componentId = $_instance->getRenderedChildComponentId('iucluQ4');
    $componentTag = $_instance->getRenderedChildComponentTagName('iucluQ4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('iucluQ4');
} else {
    $response = \Livewire\Livewire::mount('distributer');
    $html = $response->html();
    $_instance->logRenderedChild('iucluQ4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?><?php /**PATH D:\beware-essentials\resources\views/layouts/_shared/header.blade.php ENDPATH**/ ?>