<!-- Page Sidebar Start-->
<div class="page-sidebar">
  <div class="main-header-left d-none d-lg-block">
    <div class="logo-wrapper"><a href="#"><img src="<?php echo e(asset('assets/images/endless-logo.png')); ?>" alt=""></a></div>
  </div>
  <div class="sidebar custom-scrollbar">
    <div class="sidebar-user text-center">
      <div><img class="img-60 rounded-circle" src="<?php echo e(asset('assets/images/user/1.jpg')); ?>" alt="#">
        <div class="profile-edit"><a href="#" target="_blank"><i data-feather="edit"></i></a></div>
      </div>
      <h6 class="mt-3 f-14"><?php echo e(Auth::guard('shop')->user()->name); ?></h6>
      <p>Resturant Owner.</p>
    </div>
      <ul class="sidebar-menu">
          <li><a class="sidebar-header" href="<?php echo e(route('shop.home')); ?>" ><i data-feather="home"></i><span>Dashboard</span></a></li>
          <li><a class="sidebar-header" href="<?php echo e(route('shop.selectCategory')); ?>" ><i data-feather="file-text"></i><span>Manage Restaurant</span></a></li>
          <li><a class="sidebar-header" href="<?php echo e(route('shop.showMyCategories')); ?>" ><i data-feather="file-text"></i><span>My Categories</span></a></li>
          <li><a class="sidebar-header" href="<?php echo e(route('shop.conversation.index')); ?>" ><i data-feather="file-text"></i><span>Inbox</span></a></li>
          <li><a class="sidebar-header" href="<?php echo e(route('shop.order.viewAll')); ?>" ><i data-feather="box"></i><span>Orders</span></a></li>
          <li><a class="sidebar-header" href="<?php echo e(route('shop.advertisement.create')); ?>" ><i data-feather="file-text"></i><span>Advertisement</span></a></li>
      </ul>
  </div>
</div>
<!-- Page Sidebar Ends-->

<?php /**PATH E:\Sir Imran\MyFoodApps\resources\views/layouts/shop/sidebar.blade.php ENDPATH**/ ?>