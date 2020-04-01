<!-- Page Sidebar Start-->
<div class="page-sidebar">
  <div class="main-header-left d-none d-lg-block">
    <div class="logo-wrapper"><a href="#"><img src="<?php echo e(asset('assets/images/endless-logo.png')); ?>" alt=""></a></div>
  </div>
  <div class="sidebar custom-scrollbar">
    <div class="sidebar-user text-center">
      <div><img class="img-60 rounded-circle" src="<?php echo e(auth('admin')->user()->avatar); ?>" alt="#">
        <div class="profile-edit"><a href="#" target="_blank"><i data-feather="edit"></i></a></div>
      </div>
    <h6 class="mt-3 f-14"><?php echo e(auth('admin')->user()->name); ?></h6>
      <p><?php echo e(auth('admin')->user()->email); ?></p>
    </div>
      <ul class="sidebar-menu">
        
            <li>
                <a class="sidebar-header" href="<?php echo e(route('admin.home')); ?>">
                    <i data-feather="home"></i><span>Dashboard</span>
                </a>
            </li>
            
             <li>
                <a class="sidebar-header" href="<?php echo e(route('admin.create')); ?>">
                    <i data-feather="home"></i><span>Admins</span>
                </a>
            </li>
            
            <li>
                <a class="sidebar-header" href="<?php echo e(route('admin.customer.create')); ?>">
                    <i data-feather="home"></i><span>Customers</span>
                </a>
            </li>

            
            <li>
                <a class="sidebar-header" href="<?php echo e(route('admin.shop.create')); ?>">
                    <i data-feather="home"></i><span>Shops</span>
                </a>
            </li>
            <li>
                <a class="sidebar-header" href="<?php echo e(route('admin.driver.create')); ?>">
                    <i data-feather="home"></i><span>Drivers</span>
                </a>
            </li> 
           
            <li>
                <a class="sidebar-header" href="<?php echo e(route('admin.conversations.create')); ?>">
                    <i data-feather="home"></i><span>Conversations</span>
                </a>
            </li>  
            <li>
                <a class="sidebar-header" href="<?php echo e(route('admin.order.viewAll')); ?>">
                    <i data-feather="home"></i><span>Orders</span>
                </a>
            </li>  
        
      </ul>
  </div>
</div>
<!-- Page Sidebar Ends-->

<?php /**PATH /Volumes/LocalDisk2/Projects/Food Project/MyFoodApps/resources/views/layouts/admin/sidebar.blade.php ENDPATH**/ ?>