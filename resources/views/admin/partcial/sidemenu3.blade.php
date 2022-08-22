<li class="nav-item @if($conName[1] == 'dashboard') active @endif">
    <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="fas fa-fw fa-home"></i>
        <span>Dashboard</span>

    </a>
</li>

<!-- General Settings -->
@php if( in_array('General Settings', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'setting' && $conName[2] == 'general') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting" aria-expanded="true" aria-controls="collapseSetting">
        <i class="fas fa-cog"></i>
        <span>General Settings</span>
    </a>
    <div id="collapseSetting" class="collapse @if($conName[1] == 'setting' && $conName[2] == 'general') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item @if($conName[3] == 'logo') active @endif" href="{{ route('admin.general_setting.logo') }}">Logo</a>
            <a class="collapse-item @if($conName[3] == 'favicon') active @endif" href="{{ route('admin.general_setting.favicon') }}">Favicon</a>
            <a class="collapse-item @if($conName[3] == 'loginbg') active @endif" href="{{ route('admin.general_setting.loginbg') }}">Login Background</a>
            <a class="collapse-item @if($conName[3] == 'banner') active @endif" href="{{ route('admin.general_setting.banner') }}">Banner</a>
            
        </div>
    </div>
</li>
@endif

@php if( in_array('Sliders', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'slider') active @endif">
    <a class="nav-link" href="{{ route('admin.slider.index') }}">
        <i class="fas fa-sliders-h"></i>
        <span>Sliders</span>
    </a>
</li>
@endif
<!-- Page Settings -->
@php if( in_array('Page Settings', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'page') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePageSettings" aria-expanded="true" aria-controls="collapsePageSettings">
        <i class="fas fa-paste"></i>
        <span>Section Settings</span>
    </a>
    <div id="collapsePageSettings" class="collapse @if($conName[1] == 'page') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <a class="collapse-item @if($conName[2] == 'home') active @endif" href="{{ route('admin.page_home.edit') }}">Home</a> --}}
            <a class="collapse-item @if($conName[2] == 'about') active @endif" href="{{ route('admin.page_about.edit') }}">About</a>
            {{-- <a class="collapse-item @if($conName[2] == 'service') active @endif" href="{{ route('admin.page_service.edit') }}">Service</a>
            <a class="collapse-item @if($conName[2] == 'clients') active @endif" href="{{ route('admin.page_clients.edit') }}">Clients</a>
            <a class="collapse-item @if($conName[2] == 'shop') active @endif" href="{{ route('admin.page_shop.edit') }}">Shop</a>
            <a class="collapse-item @if($conName[2] == 'blog') active @endif" href="{{ route('admin.page_blog.edit') }}">Blog</a> --}}
            <a class="collapse-item @if($conName[2] == 'project') active @endif" href="{{ route('admin.page_project.edit') }}">Porfolio</a>
            {{-- <a class="collapse-item @if($conName[2] == 'faq') active @endif" href="{{ route('admin.page_faq.edit') }}">FAQ</a>
            <a class="collapse-item @if($conName[2] == 'team') active @endif" href="{{ route('admin.page_team.edit') }}">Team Member</a> --}}
            {{-- <a class="collapse-item @if($conName[2] == 'photo-gallery') active @endif" href="{{ route('admin.page_photo_gallery.edit') }}">Photo Gallery</a> --}}
            {{-- <a class="collapse-item @if($conName[2] == 'video-gallery') active @endif" href="{{ route('admin.page_video_gallery.edit') }}">Video Gallery</a> --}}
            <a class="collapse-item @if($conName[2] == 'contact') active @endif" href="{{ route('admin.page_contact.edit') }}">Contact</a>
            {{-- <a class="collapse-item @if($conName[2] == 'career') active @endif" href="{{ route('admin.page_career.edit') }}">Career</a>
            <a class="collapse-item @if($conName[2] == 'term') active @endif" href="{{ route('admin.page_term.edit') }}">Term</a>
            <a class="collapse-item @if($conName[2] == 'privacy') active @endif" href="{{ route('admin.page_privacy.edit') }}">Privacy</a>
            <a class="collapse-item @if($conName[2] == 'other') active @endif" href="{{ route('admin.page_other.edit') }}">Other</a> --}}
        </div>
    </div>
</li>
@endif

<!-- Why Choose Us -->
@php if( in_array('Why Choose Us', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'why-choose') active @endif">
    <a class="nav-link" href="{{ route('admin.why_choose.index') }}">
        <i class="fas fa-arrows-alt"></i>
        <span>Why Choose Us</span>
    </a>
</li>
@endif

<!-- Project -->
@php if( in_array('Project', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'project') active @endif">
    <a class="nav-link" href="{{ route('admin.project.index') }}">
        <i class="fas fa-umbrella"></i>
        <span>Porfolio</span>
    </a>
</li>
@endif

<!-- Testimonials -->
@php if( in_array('Testimonial', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'testimonial') active @endif">
    <a class="nav-link" href="{{ route('admin.testimonial.index') }}">
        <i class="fas fa-award"></i>
        <span>Testimonial</span>
    </a>
</li>
@endif

<!-- Video Gallery -->
@php if( in_array('Video Gallery', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'video-gallery') active @endif">
    <a class="nav-link" href="{{ route('admin.video.index') }}">
        <i class="fas fa-video"></i>
        <span>Video Gallery</span>
    </a>
</li>
@endif