
<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">

    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{Request::is('/admin/slider*') ? 'active' : ''}} ">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{Request::is('/admin/slider*') ? 'active' : ''}} ">
                <a class="nav-link" href="{{route('slider.index')}}">
                    <i class="material-icons">slideshow</i>
                    <p>Sliders</p>
                </a>
            </li>
            <li class="{{Request::is('admin/category*') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('category.index')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Categories</p>
                </a>
            </li>
            <li class="{{Request::is('admin/item*') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('item.index')}}">
                    <i class="material-icons">library_books</i>
                    <p>Items</p>
                </a>
            </li>
            <li class="{{Request::is('admin/reservation*') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('reservation.index')}}">
                    <i class="material-icons">chrome_reader_mode</i>
                    <p>Reservation</p>
                </a>
            </li>
            <li class="{{Request::is('admin/contact*') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('contact.index')}}">
                    <i class="material-icons">message</i>
                    <p>Contact Message</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./icons.html">
                    <i class="material-icons">bubble_chart</i>
                    <p>Icons</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./map.html">
                    <i class="material-icons">location_ons</i>
                    <p>Maps</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./notifications.html">
                    <i class="material-icons">notifications</i>
                    <p>Notifications</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./rtl.html">
                    <i class="material-icons">language</i>
                    <p>RTL Support</p>
                </a>
            </li>
            <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li>
        </ul>
    </div>
</div>
</div>
