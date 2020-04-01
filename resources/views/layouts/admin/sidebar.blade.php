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
      <h6 class="mt-3 f-14">ELANA</h6>
      <p>general manager.</p>
    </div>
      <ul class="sidebar-menu">
        
            <li>
                <a class="sidebar-header" href="{{route('admin.home')}}">
                    <i data-feather="home"></i><span>Dashboard</span>
                </a>
            </li>
            
             <li>
                <a class="sidebar-header" href="{{route('admin.create')}}">
                    <i data-feather="home"></i><span>Admins</span>
                </a>
            </li>
            
            <li>
                <a class="sidebar-header" href="{{route('admin.customer.create')}}">
                    <i data-feather="home"></i><span>Customers</span>
                </a>
            </li>

            {{-- <li class="nav-item {{request()->routeIs('admin.category.create')? 'active':''}}">
                <a href="{{route('admin.category.create')}}" class="nav-link" target="">
                    <i class="fa fa-copy"></i>
                    <p>Categories</p>
                </a>
            </li>
           
           
            <li>
                <a class="sidebar-header" href="{{route('admin.service.create')}}" >
                    <i data-feather="home"></i><span>Services</span>
                </a>
            </li>
           
            <li>
                <a class="sidebar-header" href="{{route('admin.shopType.create')}}" >
                    <i data-feather="home"></i><span>Shop Types</span>
                </a>
            </li> --}}
            <li>
                <a class="sidebar-header" href="{{route('admin.shop.create')}}">
                    <i data-feather="home"></i><span>Shops</span>
                </a>
            </li>
            <li>
                <a class="sidebar-header" href="{{route('admin.driver.create')}}">
                    <i data-feather="home"></i><span>Drivers</span>
                </a>
            </li> 
           
            <li>
                <a class="sidebar-header" href="{{route('admin.conversations.create')}}">
                    <i data-feather="home"></i><span>Conversations</span>
                </a>
            </li>  
            <li>
                <a class="sidebar-header" href="{{route('admin.order.viewAll')}}">
                    <i data-feather="home"></i><span>Orders</span>
                </a>
            </li>  
        
      </ul>
  </div>
</div>
<!-- Page Sidebar Ends-->

