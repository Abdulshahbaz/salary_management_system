<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MyBlogs</span>
    </a> 
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>                                                                                       
        <div class="info">
         <a href="#" class="d-block">MyBlog</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="{{route('admin.dashboard')}}" class="nav-link {{Request::routeIs('admin.dashboard') ? 'active
              bg-primary' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a> 
          <li class="nav-item">
            <a href="{{route('employee.list')}}" class="nav-link {{Request::routeIs('employee.list') ? 'active
              bg-primary' : ''}}">                      
              <i class="nav-icon far fa-image"></i>
              <p>
                Employees
              </p>
            </a>
          </li>  
          <li class="nav-item">
            <a href="{{route('employee.salary')}}" class="nav-link {{Request::routeIs('employee.salary') ? 'active
              bg-primary' : ''}}">                      
              <i class="nav-icon far fa-image"></i>
              <p>
                Employees Salary
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="{{route('calculate.salary')}}" class="nav-link {{Request::routeIs('calculate.salary') ? 'active
              bg-primary' : ''}}">                      
              <i class="nav-icon far fa-image"></i>
              <p>
                Calculated Salary
              </p>
            </a>
          </li>     
        </ul>
      </nav>
    </div>
</aside>     