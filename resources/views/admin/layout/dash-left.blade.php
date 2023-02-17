<div class="app-sidebar sidebar-shadow">
  <div class="scrollbar-sidebar">
      <div class="app-sidebar__inner">
          <ul class="mt-4 vertical-nav-menu">
              <li class="app-sidebar__heading">Dashboards</li>
              <li>
                  <a id="dashboard" class=""  href="{{url('account')}}">
                      <i style="font-size: 16px;" class="metismenu-icon fa-solid fa-house"></i>
                      Dashboard
                  </a>
                  <a id="threed_page" class="mt-2" href="{{url('account/3d')}}">
                      <i style="font-size: 16px;" class="metismenu-icon fa-solid fa-user"></i>
                      3D Exterior
                  </a>
                  <a id="interior_page" class="mt-2" href="{{url('account/3d/interior')}}">
                      <i style="font-size: 16px;" class="metismenu-icon fa-solid fa-user"></i>
                      3D Interior
                  </a>
                  <a id="messages" class="mt-2" href="{{url('account/messages')}}">
                      <i style="font-size: 16px;" class="metismenu-icon fa-solid fa-message"></i>
                      Messages
                  </a>
                  <a id="gallery_page" href="{{ url('account/galleries') }}" class="mt-2">
                      <i style="font-size: 16px;" class="metismenu-icon fa-solid fa-image"></i>
                      Gallery
                  </a>
                  <a id="projects_page" href="{{ url('account/projects') }}" class="mt-2">
                      <i style="font-size: 16px;" class="metismenu-icon fa-solid fa-image"></i>
                      Projects
                  </a>
              </li>

              <li class="mt-5 app-sidebar__heading">FORMS</li>
              <li>
                  <a id="gallery_form" href="{{ url('account/form-gallery') }}" class="mb-2" >
                      <i style="font-size: 16px;" class="metismenu-icon fa-solid fa-plus"></i>
                      Add Gallery
                  </a>
              </li>

              <li>
                  <a id="threed_form" href="{{url('account/form-3d')}}">
                      <i style="font-size: 16px;" class="metismenu-icon fa-solid fa-plus"></i>
                      Add Exterior 3D Image
                  </a>
              </li>

              <li>
                  <a id="interior_form" href="{{url('account/form-3d/interior')}}">
                      <i style="font-size: 16px;" class="metismenu-icon fa-solid fa-plus"></i>
                      Add Interior 3D Image
                  </a>
              </li>

              <li>
                  <a id="add_projects" href="{{url('account/create/project')}}">
                      <i style="font-size: 16px;" class="metismenu-icon fa-solid fa-plus"></i>
                      Add Project
                  </a>
              </li>


          </ul>
      </div>
  </div>
</div>
