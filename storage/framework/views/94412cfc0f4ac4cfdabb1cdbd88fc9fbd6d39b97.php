<div class="ec-left-sidebar ec-bg-sidebar">
	<div id="sidebar" class="sidebar ec-sidebar-footer">
		<div class="ec-brand">
			<a href="/" title="Beware Essential">
				<img src="<?php echo e(asset('assets/images/admin-logo.png')); ?>" alt="">
			</a>
		</div>
		<div class="ec-navigation" data-simplebar="">
			<ul class="nav sidebar-inner" id="sidebar-menu">
				<li class="active"><a class="sidenav-item-link" href="<?php echo e(route('admin.dashboard')); ?>"><i
							class="mdi mdi-view-dashboard-outline"></i> <span
							class="nav-text">Dashboard</span></a>
					<hr>
				</li>
				
				<!--li class="has-sub"><a class="sidenav-item-link" href="javascript:void(0)"><i
							class="mdi mdi-account-group-outline"></i> <span class="nav-text">Vendors</span> <b
							class="caret"></b></a>
					<div class="collapse">
						<ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
							<li><a class="sidenav-item-link" href="vendor-card.html"><span
										class="nav-text">Vendor Grid</span></a></li>
							<li><a class="sidenav-item-link" href="vendor-list.html"><span
										class="nav-text">Vendor List</span></a></li>
							<li><a class="sidenav-item-link" href="vendor-profile.html"><span
										class="nav-text">Vendors Profile</span></a></li>
						</ul>
					</div>
				</li>
				<li class="has-sub"><a class="sidenav-item-link" href="javascript:void(0)"><i
							class="mdi mdi-account-group"></i> <span class="nav-text">Users</span> <b
							class="caret"></b></a>
					<div class="collapse">
						<ul class="sub-menu" id="users" data-parent="#sidebar-menu">
							<li><a class="sidenav-item-link" href="user-card.html"><span class="nav-text">User
										Grid</span></a></li>
							<li><a class="sidenav-item-link" href="user-list.html"><span class="nav-text">User
										List</span></a></li>
							<li><a class="sidenav-item-link" href="user-profile.html"><span
										class="nav-text">Users Profile</span></a></li>
						</ul>
					</div>
					<hr>
				</li>
				<li class="has-sub"><a class="sidenav-item-link" href="javascript:void(0)"><i
							class="mdi mdi-dns-outline"></i> <span class="nav-text">Categories</span> <b
							class="caret"></b></a>
					<div class="collapse">
						<ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
							<li><a class="sidenav-item-link" href="main-category.html"><span
										class="nav-text">Main Category</span></a></li>
							<li><a class="sidenav-item-link" href="sub-category.html"><span class="nav-text">Sub
										Category</span></a></li>
						</ul>
					</div>
				</li-->
				
				<li class="has-sub">
					<a class="sidenav-item-link" href="javascript:void(0)">
						<i class="mdi mdi-account-supervisor"></i> 
						<span class="nav-text">Users</span><b class="caret"></b>
					</a>
					<div class="collapse">
						<ul class="sub-menu" id="users" data-parent="#sidebar-menu">
							<!--li>
								<a class="sidenav-item-link" href="product-add.html">
									<span class="nav-text">Add Product</span>
								</a>
							</li-->
							<li>
								<a class="sidenav-item-link" href="<?php echo e(route('admin.users.index')); ?>">
									<span class="nav-text">List Users</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="has-sub"><a class="sidenav-item-link" href="javascript:void(0)"><i class="mdi mdi-dns-outline"></i> <span class="nav-text">Categories</span> <b class="caret"></b></a>
					<div class="collapse">
						<ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
							<li><a class="sidenav-item-link" href="<?php echo e(route('admin.categories.index')); ?>"><span class="nav-text"> Categories</span></a></li>
							<li><a class="sidenav-item-link" href="<?php echo e(route('admin.categories.sub-categories.index')); ?>"><span class="nav-text">Sub Categories</span></a></li>
						</ul>
					</div>
				</li>
				<li class="has-sub">
					<a class="sidenav-item-link" href="javascript:void(0)">
						<i class="mdi mdi-palette-advanced"></i> 
						<span class="nav-text">Products</span><b class="caret"></b>
					</a>
					<div class="collapse">
						<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
							<!-- <li>
								<a class="sidenav-item-link" href="<?php echo e(route('admin.product-types.index')); ?>">
									<span class="nav-text">Product Types</span>
								</a>
							</li> -->
							<li>
								<a class="sidenav-item-link" href="<?php echo e(route('admin.products.index')); ?>">
									<span class="nav-text">List Products</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="has-sub">
					<a class="sidenav-item-link" href="javascript:void(0)">
						<i class="mdi mdi-palette-advanced"></i> 
						<span class="nav-text">Blogs</span><b class="caret"></b>
					</a>
					<div class="collapse">
						<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
							<!-- <li>
								<a class="sidenav-item-link" href="<?php echo e(route('admin.product-types.index')); ?>">
									<span class="nav-text">Product Types</span>
								</a>
							</li> -->
							<li>
								<a class="sidenav-item-link" href="<?php echo e(route('admin.blogs.index')); ?>">
									<span class="nav-text">List Blogs</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="has-sub">
					<a class="sidenav-item-link" href="javascript:void(0)">
						<i class="mdi mdi-account-group"></i> 
						<span class="nav-text">Leads </span><b class="caret"></b>
					</a>
					<div class="collapse">
						<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
							<li>
								<a class="sidenav-item-link" href="<?php echo e(route('admin.product-leads.index')); ?>">
									<span class="nav-text">Product Leads</span>
								</a>
							</li>
							<li>
								<a class="sidenav-item-link" href="<?php echo e(route('admin.contact-us-leads.index')); ?>">
									<span class="nav-text">Contact US leads</span>
								</a>
							</li>
							<li>
								<a class="sidenav-item-link" href="<?php echo e(route('admin.distributer')); ?>">
									<span class="nav-text">Distributer leads</span>
								</a>
							</li>
							<li>
								<a class="sidenav-item-link" href="<?php echo e(route('admin.carrers')); ?>">
									<span class="nav-text">Carrers leads</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="has-sub">
					<a class="sidenav-item-link" href="javascript:void(0)">
						<i class="mdi mdi-account-group"></i> 
						<span class="nav-text">Seo Tags</span><b class="caret"></b>
					</a>
					<div class="collapse">
						<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
							<li>
								<a class="sidenav-item-link" href="<?php echo e(route('admin.seotags.index')); ?>">
									<span class="nav-text">Seo Pages</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<!--li class="has-sub"><a class="sidenav-item-link" href="javascript:void(0)"><i
							class="mdi mdi-cart"></i> <span class="nav-text">Orders</span> <b
							class="caret"></b></a>
					<div class="collapse">
						<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
							<li><a class="sidenav-item-link" href="new-order.html"><span class="nav-text">New
										Order</span></a></li>
							<li><a class="sidenav-item-link" href="order-history.html"><span
										class="nav-text">Order History</span></a></li>
							<li><a class="sidenav-item-link" href="order-detail.html"><span
										class="nav-text">Order Detail</span></a></li>
							<li><a class="sidenav-item-link" href="invoice.html"><span
										class="nav-text">Invoice</span></a></li>
						</ul>
					</div>
				</li>
				<li><a class="sidenav-item-link" href="review-list.html"><i class="mdi mdi-star-half"></i> <span
							class="nav-text">Reviews</span></a></li>
				<li><a class="sidenav-item-link" href="brand-list.html"><i class="mdi mdi-tag-faces"></i> <span
							class="nav-text">Brands</span></a>
					<hr>
				</li>
				<li class="has-sub"><a class="sidenav-item-link" href="javascript:void(0)"><i
							class="mdi mdi-login"></i> <span class="nav-text">Authentication</span> <b
							class="caret"></b></a>
					<div class="collapse">
						<ul class="sub-menu" id="authentication" data-parent="#sidebar-menu">
							<li><a href="sign-in.html"><span class="nav-text">Sign In</span></a></li>
							<li><a href="sign-up.html"><span class="nav-text">Sign Up</span></a></li>
						</ul>
					</div>
				</li>
				<li class="has-sub"><a class="sidenav-item-link" href="javascript:void(0)"><i
							class="mdi mdi-diamond-stone"></i> <span class="nav-text">Icons</span> <b
							class="caret"></b></a>
					<div class="collapse">
						<ul class="sub-menu" id="icons" data-parent="#sidebar-menu">
							<li><a class="sidenav-item-link" href="material-icon.html"><span
										class="nav-text">Material Icon</span></a></li>
							<li><a class="sidenav-item-link" href="font-awsome-icons.html"><span
										class="nav-text">Font Awsome Icon</span></a></li>
							<li><a class="sidenav-item-link" href="flag-icon.html"><span class="nav-text">Flag
										Icon</span></a></li>
						</ul>
					</div>
				</li>
				<li class="has-sub"><a class="sidenav-item-link" href="javascript:void(0)"><i
							class="mdi mdi-image-filter-none"></i> <span class="nav-text">Other Pages</span> <b
							class="caret"></b></a>
					<div class="collapse">
						<ul class="sub-menu" id="otherpages" data-parent="#sidebar-menu">
							<li class="has-sub"><a href="404.html">404 Page</a></li>
						</ul>
					</div>
				</li-->
			</ul>
		</div>
	</div>
</div><?php /**PATH D:\beware-essentials\resources\views/layouts/_shared/admin/_sidebar.blade.php ENDPATH**/ ?>