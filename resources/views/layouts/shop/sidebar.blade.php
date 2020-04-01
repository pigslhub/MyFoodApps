<!-- Page Sidebar Start-->
<div class="page-sidebar">
  <div class="main-header-left d-none d-lg-block">
    <div class="logo-wrapper"><a href="#"><img src="{{asset('assets/images/endless-logo.png')}}" alt=""></a></div>
  </div>
  <div class="sidebar custom-scrollbar">
    <div class="sidebar-user text-center">
      <div><img class="img-60 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#">
        <div class="profile-edit"><a href="#" target="_blank"><i data-feather="edit"></i></a></div>
      </div>
      <h6 class="mt-3 f-14">{{Auth::guard('shop')->user()->name}}</h6>
      <p>Resturant Owner.</p>
    </div>
      <ul class="sidebar-menu">
          <li><a class="sidebar-header" href="{{route('shop.home')}}" ><i data-feather="home"></i><span>Dashboard</span></a></li>
          <li><a class="sidebar-header" href="{{route('shop.selectCategory')}}" ><i data-feather="file-text"></i><span>Manage Restaurant</span></a></li>
          <li><a class="sidebar-header" href="{{route('shop.showMyCategories')}}" ><i data-feather="file-text"></i><span>My Categories</span></a></li>
          <li><a class="sidebar-header" href="{{route('shop.conversation.index')}}" ><i data-feather="file-text"></i><span>Inbox</span></a></li>
          <li><a class="sidebar-header" href="{{route('shop.order.viewAll')}}" ><i data-feather="box"></i><span>Orders</span></a></li>
          <li><a class="sidebar-header" href="{{route('shop.advertisement.create')}}" ><i data-feather="file-text"></i><span>Advertisement</span></a></li>
      </ul>
  </div>
</div>
<!-- Page Sidebar Ends-->

