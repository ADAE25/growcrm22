
<?php echo $__env->make('nav.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('nav.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
  <!-- ! Hide app brand if navbar-full -->
  <div class="app-brand demo">
    <a href="http://full-version.test" class="app-brand-link">
      <span class="app-brand-logo demo">
        <svg width="32" height="20" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0"></path>
  <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616"></path>
  <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616"></path>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0"></path>
</svg>
      </span>
      <span class="app-brand-text demo menu-text fw-bold">Vuexy</span>
    </a>
    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
      <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow" style="display: none;"></div>
  <ul class="menu-inner py-1 ps ps--active-y">

    <li class="menu-item active" >
      <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div>Dashboards</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">3</div>

              </a>

      
            <ul class="menu-sub">

      <li class="menu-item active">
        <a href="http://full-version.test" class="menu-link">
                    <div>Analytics</div>
        </a>
              </li>
      <li class="menu-item ">
        <a href="http://full-version.test/dashboard/crm" class="menu-link">
                    <div>CRM</div>
        </a>
              </li>
      <li class="menu-item ">
        <a href="http://full-version.test/dashboard/ecommerce" class="menu-link">
                    <div>eCommerce</div>
        </a>
              </li>
      </ul>
          </li>
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                <div>Layouts</div>
              </a>
            <ul class="menu-sub">
      <li class="menu-item ">
        <a href="http://full-version.test/layouts/collapsed-menu" class="menu-link">
                    <div>Collapsed menu</div>
        </a>
              </li>
      <li class="menu-item ">
        <a href="http://full-version.test/layouts/content-navbar" class="menu-link">
                    <div>Content navbar</div>
        </a>
              </li>
      <li class="menu-item ">
        <a href="http://full-version.test/layouts/content-nav-sidebar" class="menu-link">
                    <div>Content nav + Sidebar</div>
        </a>
              </li>
      <li class="menu-item ">
        <a href="http://full-version.test/layouts/horizontal" class="menu-link" target="_blank">
                    <div>Horizontal</div>
        </a>
              </li>
      <li class="menu-item ">
        <a href="http://full-version.test/layouts/without-menu" class="menu-link">
                    <div>Without menu</div>
        </a>
              </li>
      <li class="menu-item ">
        <a href="http://full-version.test/layouts/without-navbar" class="menu-link">
                    <div>Without navbar</div>
        </a>
              </li>
      <li class="menu-item ">
        <a href="http://full-version.test/layouts/fluid" class="menu-link">
                    <div>Fluid</div>
        </a>
              </li>
      <li class="menu-item ">
        <a href="http://full-version.test/layouts/container" class="menu-link">
                    <div>Container</div>
        </a>
              </li>
      <li class="menu-item ">
        <a href="http://full-version.test/layouts/blank" class="menu-link" target="_blank">
                    <div>Blank</div>
        </a>
        </li>
      </ul>
          </li>
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-brand-php"></i>
                <div>Laravel Example</div>
              </a>
            <ul class="menu-sub">
      <li class="menu-item ">
        <a href="http://full-version.test/laravel/user-management" class="menu-link">
                    <div>User Management</div>
        </a>

        
              </li>
      </ul>
          </li>

        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Apps &amp; Pages</span>
    </li>
    <li class="menu-item ">
      <a href="http://full-version.test/app/email" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div>Email</div>
              </a>

      
          </li>
    <li class="menu-item ">
      <a href="http://full-version.test/app/chat" class="menu-link">
                <i class="menu-icon tf-icons ti ti-messages"></i>
                <div>Chat</div>
              </a>

      
          </li>
    <li class="menu-item ">
      <a href="http://full-version.test/app/calendar" class="menu-link">
                <i class="menu-icon tf-icons ti ti-calendar"></i>
                <div>Calendar</div>
              </a>

      
          </li>

    <li class="menu-item ">
      <a href="http://full-version.test/app/kanban" class="menu-link">
                <i class="menu-icon tf-icons ti ti-layout-kanban"></i>
                <div>Kanban</div>
              </a>

      
          </li>
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-file-dollar"></i>
                <div>Invoice</div>
                <div class="badge bg-label-danger rounded-pill ms-auto">4</div>

              </a>

      
            <ul class="menu-sub">
      <li class="menu-item ">
        <a href="http://full-version.test/app/invoice/list" class="menu-link">
                    <div>List</div>
        </a>

        
              </li>
      <li class="menu-item ">
        <a href="http://full-version.test/app/invoice/preview" class="menu-link">
                    <div>Preview</div>
        </a>

        
              </li>
      <li class="menu-item ">
        <a href="http://full-version.test/app/invoice/edit" class="menu-link">
                    <div>Edit</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/app/invoice/add" class="menu-link">
                    <div>Add</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div>Users</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/app/user/list" class="menu-link">
                    <div>List</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <div>View</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/app/user/view/account" class="menu-link">
                    <div>Account</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/app/user/view/security" class="menu-link">
                    <div>Security</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/app/user/view/billing" class="menu-link">
                    <div>Billing &amp; Plans</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/app/user/view/notifications" class="menu-link">
                    <div>Notifications</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/app/user/view/connections" class="menu-link">
                    <div>Connections</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div>Roles &amp; Permissions</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/app/access-roles" class="menu-link">
                    <div>Roles</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/app/access-permission" class="menu-link">
                    <div>Permission</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-file"></i>
                <div>Pages</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <div>User Profile</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/pages/profile-user" class="menu-link">
                    <div>Profile</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/pages/profile-teams" class="menu-link">
                    <div>Teams</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/pages/profile-projects" class="menu-link">
                    <div>Projects</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/pages/profile-connections" class="menu-link">
                    <div>Connections</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <div>Account Settings</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/pages/account-settings-account" class="menu-link">
                    <div>Account</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/pages/account-settings-security" class="menu-link">
                    <div>Security</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/pages/account-settings-billing" class="menu-link">
                    <div>Billing &amp; Plans</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/pages/account-settings-notifications" class="menu-link">
                    <div>Notifications</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/pages/account-settings-connections" class="menu-link">
                    <div>Connections</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/pages/faq" class="menu-link">
                    <div>FAQ</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <div>Help Center</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/pages/help-center-landing" class="menu-link">
                    <div>Landing</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/pages/help-center-categories" class="menu-link">
                    <div>Categories</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/pages/help-center-article" class="menu-link">
                    <div>Article</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/pages/pricing" class="menu-link">
                    <div>Pricing</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <div>Misc</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/pages/misc-error" class="menu-link" target="_blank">
                    <div>Error</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/pages/misc-under-maintenance" class="menu-link" target="_blank">
                    <div>Under Maintenance</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/pages/misc-comingsoon" class="menu-link" target="_blank">
                    <div>Coming Soon</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/pages/misc-not-authorized" class="menu-link" target="_blank">
                    <div>Not Authorized</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-lock"></i>
                <div>Authentications</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <div>Login</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/auth/login-basic" class="menu-link" target="_blank">
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/auth/login-cover" class="menu-link" target="_blank">
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <div>Register</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/auth/register-basic" class="menu-link" target="_blank">
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/auth/register-cover" class="menu-link" target="_blank">
                    <div>Cover</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/auth/register-multisteps" class="menu-link" target="_blank">
                    <div>Multi-steps</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <div>Verify Email</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/auth/verify-email-basic" class="menu-link" target="_blank">
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/auth/verify-email-cover" class="menu-link" target="_blank">
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <div>Reset Password</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/auth/reset-password-basic" class="menu-link" target="_blank">
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/auth/reset-password-cover" class="menu-link" target="_blank">
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <div>Forgot Password</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/auth/forgot-password-basic" class="menu-link" target="_blank">
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/auth/forgot-password-cover" class="menu-link" target="_blank">
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <div>Two Steps</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/auth/two-steps-basic" class="menu-link" target="_blank">
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/auth/two-steps-cover" class="menu-link" target="_blank">
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-forms"></i>
                <div>Wizard Examples</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/wizard/ex-checkout" class="menu-link">
                    <div>Checkout</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/wizard/ex-property-listing" class="menu-link">
                    <div>Property Listing</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/wizard/ex-create-deal" class="menu-link">
                    <div>Create Deal</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="http://full-version.test/modal-examples" class="menu-link">
                <i class="menu-icon tf-icons ti ti-square"></i>
                <div>Modal Examples</div>
              </a>

      
          </li>
        
    

    
        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Components</span>
    </li>

        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-id"></i>
                <div>Cards</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">5</div>

              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/cards/basic" class="menu-link">
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/cards/advance" class="menu-link">
                    <div>Advance</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/cards/statistics" class="menu-link">
                    <div>Statistics</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/cards/analytics" class="menu-link">
                    <div>Analytics</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/cards/actions" class="menu-link">
                    <div>Actions</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-color-swatch"></i>
                <div>User interface</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/ui/accordion" class="menu-link">
                    <div>Accordion</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/ui/alerts" class="menu-link">
                    <div>Alerts</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/ui/badges" class="menu-link">
                    <div>Badges</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/ui/buttons" class="menu-link">
                    <div>Buttons</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/ui/carousel" class="menu-link">
                    <div>Carousel</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/ui/collapse" class="menu-link">
                    <div>Collapse</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/ui/dropdowns" class="menu-link">
                    <div>Dropdowns</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/ui/footer" class="menu-link">
                    <div>Footer</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/ui/list-groups" class="menu-link">
                    <div>List groups</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/ui/modals" class="menu-link">
                    <div>Modals</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/ui/navbar" class="menu-link">
                    <div>Navbar</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/ui/offcanvas" class="menu-link">
                    <div>Offcanvas</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/ui/pagination-breadcrumbs" class="menu-link">
                    <div>Pagination &amp; Breadcrumbs</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/ui/progress" class="menu-link">
                    <div>Progress</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/ui/spinners" class="menu-link">
                    <div>Spinners</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/ui/tabs-pills" class="menu-link">
                    <div>Tabs &amp; Pills</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/ui/toasts" class="menu-link">
                    <div>Toasts</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/ui/tooltips-popovers" class="menu-link">
                    <div>Tooltips &amp; popovers</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/ui/typography" class="menu-link">
                    <div>Typography</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-components"></i>
                <div>Extended UI</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/extended/ui-avatar" class="menu-link">
                    <div>Avatar</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/extended/ui-blockui" class="menu-link">
                    <div>BlockUI</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/extended/ui-drag-and-drop" class="menu-link">
                    <div>Drag &amp; Drop</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/extended/ui-media-player" class="menu-link">
                    <div>Media Player</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/extended/ui-perfect-scrollbar" class="menu-link">
                    <div>Perfect scrollbar</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/extended/ui-star-ratings" class="menu-link">
                    <div>Star Ratings</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/extended/ui-sweetalert2" class="menu-link">
                    <div>SweetAlert2</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/extended/ui-text-divider" class="menu-link">
                    <div>Text Divider</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <div>Timeline</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/extended/ui-timeline-basic" class="menu-link">
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/extended/ui-timeline-fullscreen" class="menu-link">
                    <div>Fullscreen</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/extended/ui-tour" class="menu-link">
                    <div>Tour</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/extended/ui-treeview" class="menu-link">
                    <div>Treeview</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/extended/ui-misc" class="menu-link">
                    <div>Miscellaneous</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-brand-tabler"></i>
                <div>Icons</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/icons/tabler" class="menu-link">
                    <div>Tabler</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/icons/font-awesome" class="menu-link">
                    <div>Fontawesome</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Forms &amp; Tables</span>
    </li>

        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-toggle-left"></i>
                <div>Form Elements</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/forms/basic-inputs" class="menu-link">
                    <div>Basic Inputs</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/forms/input-groups" class="menu-link">
                    <div>Input groups</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/forms/custom-options" class="menu-link">
                    <div>Custom Options</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/forms/editors" class="menu-link">
                    <div>Editors</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/forms/file-upload" class="menu-link">
                    <div>File Upload</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/forms/pickers" class="menu-link">
                    <div>Pickers</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/forms/selects" class="menu-link">
                    <div>Select &amp; Tags</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/forms/sliders" class="menu-link">
                    <div>Sliders</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/forms/switches" class="menu-link">
                    <div>Switches</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/forms/extras" class="menu-link">
                    <div>Extras</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-layout-navbar"></i>
                <div>Form Layouts</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/form/layouts-vertical" class="menu-link">
                    <div>Vertical Form</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/form/layouts-horizontal" class="menu-link">
                    <div>Horizontal Form</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/form/layouts-sticky" class="menu-link">
                    <div>Sticky Actions</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-text-wrap-disabled"></i>
                <div>Form Wizard</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/form/wizard-numbered" class="menu-link">
                    <div>Numbered</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/form/wizard-icons" class="menu-link">
                    <div>Icons</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="http://full-version.test/form/validation" class="menu-link">
                <i class="menu-icon tf-icons ti ti-checkbox"></i>
                <div>Form Validation</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="http://full-version.test/tables/basic" class="menu-link">
                <i class="menu-icon tf-icons ti ti-table"></i>
                <div>Tables</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-layout-grid"></i>
                <div>Datatables</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/tables/datatables-basic" class="menu-link">
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/tables/datatables-advanced" class="menu-link">
                    <div>Advanced</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/tables/datatables-extensions" class="menu-link">
                    <div>Extensions</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Charts &amp; Maps</span>
    </li>

        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-chart-pie"></i>
                <div>Charts</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/charts/apex" class="menu-link">
                    <div>Apex Charts</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="http://full-version.test/charts/chartjs" class="menu-link">
                    <div>ChartJS</div>
        </a>

        
              </li>
      </ul>
          </li>
      
    
    <li class="menu-item ">
      <a href="http://full-version.test/maps/leaflet" class="menu-link">
                <i class="menu-icon tf-icons ti ti-map"></i>
                <div>Leaflet Maps</div>
              </a>

      
          </li>
    
        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Misc</span>
    </li>

        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="https://pixinvent.ticksy.com/" class="menu-link" target="_blank">
                <i class="menu-icon tf-icons ti ti-lifebuoy"></i>
                <div>Support</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation/laravel-introduction.html" class="menu-link" target="_blank">
                <i class="menu-icon tf-icons ti ti-file-description"></i>
                <div>Documentation</div>
              </a>

      
          </li>
          <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 301px; right: 4px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 61px;"></div></div></ul>

<?php /**PATH C:\laragon\www\growcrm22\application\resources\views/nav/verticalMenu.blade.php ENDPATH**/ ?>