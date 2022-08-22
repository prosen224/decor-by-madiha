<li class="nav-item @if($conName[1] == 'dashboard') active @endif">
    <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="fas fa-fw fa-home"></i>
        <span>Dashboard</span>

    </a>
</li>

<!-- General Settings -->
@php if( in_array('General Settings', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[3] == 'setting' && $conName[2] == 'general') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting" aria-expanded="true" aria-controls="collapseSetting">
        <i class="fas fa-cog"></i>
        <span>General Settings</span>
    </a>
    <div id="collapseSetting" class="collapse @if($conName[3] == 'logo' || $conName[3] == 'favicon' ||$conName[3] == 'loginbg') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item @if($conName[3] == 'logo') active @endif" href="{{ route('admin.general_setting.logo') }}">Logo</a>
            <a class="collapse-item @if($conName[3] == 'favicon') active @endif" href="{{ route('admin.general_setting.favicon') }}">Favicon</a>
            <a class="collapse-item @if($conName[3] == 'loginbg') active @endif" href="{{ route('admin.general_setting.loginbg') }}">Login Background</a>
            
            
        </div>
    </div>
</li>
@endif


<!-- Home Page Settings -->
@php if( in_array('General Settings', $arr_one) || session('role_id')==1 ): @endphp


<li class="nav-item @if($conName[1] == 'setting' && $conName[2] == 'general') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting1" aria-expanded="true" aria-controls="collapseSetting1">
        <i class="fa-solid fa-laptop-file"></i>
        <span>Home</span>
    </a>
    <div id="collapseSetting1" class="collapse @if($conName[1] == 'slider' || $conName[3] == 'banner' || $conName[1] == 'why-choose' || $conName[2] == 'project' || $conName[1] == 'project' || $conName[2] == 'about' || $conName[2] == 'contact') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">

        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item @if($conName[1] == 'slider') active @endif" href="{{ route('admin.slider.index') }}">Slider</a>
        <a class="collapse-item @if($conName[3] == 'banner') active @endif" href="{{ route('admin.general_setting.banner') }}">Section Banner</a>
        <a class="collapse-item @if($conName[2] == 'contact') active @endif" href="{{ route('admin.page_contact.edit') }}">Contact Us</a>
        <a class="collapse-item @if($conName[1] == 'why-choose') active @endif" href="{{ route('admin.why_choose.index') }}">We Specialize In</a>
        <a class="collapse-item @if($conName[2] == 'project') active @endif" href="{{ route('admin.page_project.edit') }}">Porfolio Info</a>
        <a class="collapse-item @if($conName[1] == 'project') active @endif" href="{{ route('admin.project.index') }}">Portfolio Gallery</a>
        <a class="collapse-item @if($conName[2] == 'about') active @endif" href="{{ route('admin.page_about.edit') }}">About Us</a>
        <a class="collapse-item @if($conName[2] == 'contact') @endif" href="{{ route('admin.testimonial.create') }}">Testimonial Slider</a>
        
            
        </div>
    </div>
</li>
@endif





<!-- Videos Page Settings -->
@php if( in_array('Video Gallery', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'setting' && $conName[2] == 'general') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting2" aria-expanded="true" aria-controls="collapseSetting">
    <i class="fa-solid fa-play"></i>
        <span>Videos</span>
    </a>
    <div id="collapseSetting2" class="collapse @if(($conName[2] == 'create' && $conName[1] == 'video-gallery') || ($conName[2] == 'view' && $conName[1] == 'video-gallery')) show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item @if($conName[2] == 'create' && $conName[1] == 'video-gallery') active @endif" href="{{ route('admin.video.create') }}">Add Video</a>
            <a class="collapse-item @if($conName[2] == 'view' && $conName[1] == 'video-gallery') active @endif" href="{{ route('admin.video.index') }}">All List</a>
        </div>
    </div>
</li>
@endif




<!-- Testimonials Page Settings -->
@php if( in_array('Testimonial', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'setting' && $conName[2] == 'general') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting3" aria-expanded="true" aria-controls="collapseSetting">
    <i class="fa-solid fa-feather-pointed"></i>
        <span>Testimonials</span>
    </a>
    <div id="collapseSetting3" class="collapse @if(($conName[2] == 'create' && $conName[1] == 'testimonial') || ($conName[2] == 'view' && $conName[1] == 'testimonial')) show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item @if($conName[2] == 'create' && $conName[1] == 'testimonial') active @endif" href="{{ route('admin.testimonial.create') }}">Add Testimonial</a>
            <a class="collapse-item @if($conName[2] == 'view' && $conName[1] == 'testimonial') active @endif" href="{{ route('admin.testimonial.index') }}">All List</a>  
        </div>
    </div>
</li>
@endif