<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="welcome" class="brand-link">
      <img src="public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        
        <div class="info">
          <a href="" class="d-block"> 
        
              <!-- </p> -->
            </a>
        </div>
      </div>
      <a href="/logout">
          <div class="nav-link"> <i class="fas fa-sign-out-alt">Logout</i></div>
              
            </a>
      <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
    with font-awesome or any other icon font library -->

    <li class="nav-item has-treeview menu-open">
      <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">

        <!-- <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Forms
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/forms/general.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>General Elements</p>
              </a>
            </li>
          </ul>
        </li> -->

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-user-graduate"></i>
            <p>
              Contents
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ URL::to('/admin/add_header') }}" class="nav-link">
                <i class="fas fa-laptop-code"></i>
                <p>Add_header</p>
              </a>
            </li>
          </ul>

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ URL:: to('/admin/add_about')}}" class="nav-link">
                <i class="fas fa-laptop-code"></i>
                <p>Add_about</p>
              </a>
            </li>
          </ul>

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{URL::to('/admin/add_services')}}" class="nav-link">
                <i class="fas fa-laptop-code"></i>
                <p>Add_services</p>
              </a>
            </li>
          </ul>

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{URL::to('/admin/add_features')}}" class="nav-link">
                <i class="fas fa-laptop-code"></i>
                <p>Add_features</p>
              </a>
            </li>
          </ul>

          
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-plus-square"></i>
            <p>
            Portfolio
            <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ URL::to('/admin/add_portfolio') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Portfolio</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{URL::to('/admin/view_portfolio')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Portfolio</p>
              </a>
            </li>
          </ul>
        </li> 
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-plus-square"></i>
            <p>
              Company Details
            <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{URL::to('/admin/add_team')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add team</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add pricing</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{URL::to('/admin/add_qes')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Questions</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{URL::to('/admin/add_contact')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Contact</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{URL::to('/admin/add_footar')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Footar</p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </li>

<li class="nav-item has-treeview menu-open">
      <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">

        

            <li class="nav-item">
              <a href="{{ URL::to('/admin/show_header') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Show_header</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ URL::to('/admin/view_about') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Show_about</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('/admin/view_services') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Show_services</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('/admin/view_features') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Show_Features</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('/admin/view_team') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Show_Team</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('/admin/view_qes') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Show_Question</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('/admin/view_contact') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Show_Contact</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('/admin/view_contact_form') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Show_Contact_form</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('/admin/view_footar') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Show_Footar</p>
              </a>
              <li class="nav-item">
              <a href="{{ URL::to('/admin/view_footar_mail') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Show_Footar_Email</p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </li>


  



</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
