<aside>
    <div class="knowMe">
        <div class="asideImg">
            <img src="{{asset('assets/image/avatar.png')}}" alt="">
        </div>
        <div class="aside-social">
            <ul>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="side-menu">
        <ul class="menu">
            <li><a href="http://127.0.0.1:8000/admin/dashboard" class="{{Request::is('admin/dashboard')? 'active':''}}"><i class="fa-solid fa-table-columns"></i>  Dashboard</a></li>
            <li><a href="http://127.0.0.1:8000/admin/users" class="{{Request::is('admin/users')? 'active':''}}"><i class="fa-solid fa-user"></i> Users</a></li>
            <li class="aside-catagory" onclick="toggleCatagory()"><i class="fa-solid fa-box"></i>
                    <span class="{{Request::is('admin/catagory')? 'active':''}}" data-bs-toggle="dropdown" aria-expanded="false"> Catagory </span>
                    <ul class="submenu-catagory">
                        <li><a class="dropdown-item" href="http://127.0.0.1:8000/admin/catagory">Catagory</a></li>
                        <li><a class="dropdown-item" href="http://127.0.0.1:8000/admin/catagory-add">Catagory Add</a></li>
                    </ul>
            </li>
            <li><a href="http://127.0.0.1:8000/admin/news"><i class="fa-solid fa-newspaper"></i> News</a></li>
            <li><a href="http://127.0.0.1:8000/admin/bignews"><i class="fa-solid fa-newspaper"></i> Big News</a></li>
            <li><a href="http://127.0.0.1:8000/admin/blog"><i class="fa-solid fa-newspaper"></i> Blog</a></li>

            <li class="aside-post" onclick="togglePost()"><i class="fa-solid fa-signs-post"></i>
                    <span class="{{Request::is('admin/posts')? 'active':''}}" data-bs-toggle="dropdown" aria-expanded="false"> Post </span>
                    <ul class="submenu-post">
                        <li><a class="dropdown-item" href="http://127.0.0.1:8000/admin/posts">Post</a></li>
                        <li><a class="dropdown-item" href="http://127.0.0.1:8000/admin/posts-add">Post Add</a></li>
                    </ul>
            </li>
            <li><a href="http://127.0.0.1:8000/admin/images"><i class="fa-solid fa-box"></i> Images</a></li>
            <li><a href="http://127.0.0.1:8000/admin/video"><i class="fa-solid fa-box"></i> Video</a></li>
            <!-- http://127.0.0.1:8000/admin/orders -->
            <!-- <li class="aside-customer" onclick="toggleSubMenu()"><i class="fa-brands fa-intercom"></i> 
            <span class="mini-click-non {{Request::is('admin/orders')? 'active':''}}">Orders</span>
                <ul class="submenu-angle" aria-expanded="false">
                    <li><a title="Inbox" href="#"><span class="mini-sub-pro">Inbox</span></a></li>
                    <li><a title="View Mail" href="#"><span class="mini-sub-pro">View Mail</span></a></li>
                    <li><a title="Compose Mail" href="#"><span class="mini-sub-pro">Compose Mail</span></a></li>
                </ul>
            </li>
            <li><a href="http://127.0.0.1:8000/admin/addorder"><i class="fa-solid fa-box"></i> Add Orders</a></li>
            <li><a href="http://127.0.0.1:8000/admin/update"><i class="fa-solid fa-box"></i> Updates Orders</a></li>
          
            <li><a href="http://127.0.0.1:8000/admin/pagination"><i class="fa-solid fa-box"></i> Paginations</a></li>
            <li><a href="http://127.0.0.1:8000/admin/addbasket"><i class="fa-solid fa-box"></i> Add Basket</a></li>
            <li><a href="http://127.0.0.1:8000/admin/api"><i class="fa-solid fa-box"></i> Api's</a></li> -->
        </ul>
    </div>
    <script src="{{asset('assets/js/aside-customer.js')}}"></script>
</aside>
