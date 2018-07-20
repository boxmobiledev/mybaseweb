<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="{{ asset('admin_theme/assets/images/users/profile.png') }}" alt="user" /> 
                             <!-- this is blinking heartbit-->
                            <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </div>
                    <!-- User profile text-->
                    <div class="profile-text"> 
                            <h5>Markarn Doe</h5>

                        <div class="dropdown-menu animated flipInY">
                        <!-- text--> 
                        <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                        <!-- text-->  
                        <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                        <!-- text-->  
                        <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                        <!-- text--> 
                        <div class="dropdown-divider"></div>
                        <!-- text-->  
                        <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                        <!-- text--> 
                        <div class="dropdown-divider"></div>
                        <!-- text-->  
                        <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                        <!-- text-->  
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">PERSONAL</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Super Admin</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a class="has-arrow" href="#" aria-expanded="false">Member</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="{{url('userlist')}}">List</a></li>
                                        <li><a href="{{url('userform/0')}}">Create</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false">Role</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="{{url('rolelist')}}">List</a></li>
                                        <li><a href="{{url('roleform/0')}}">Create</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false">Module</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="{{url('modulelist')}}">List</a></li>
                                        <li><a href="{{url('moduleform/0')}}">Create</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false">Pages</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="{{url('pagelist')}}">List</a></li>
                                        <li><a href="{{url('pageform/0')}}">Create</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Multi level dd</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li class="nav-small-cap">JOB</li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false">Job / งานทั้งหมด</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="#">ดูทั้งหมด</a></li>
                                        <li><a href="#">งานตรวจท่อ</a></li>
                                        <li><a href="#">งานตรวจไฟฟ้า</a></li>
                                        <li><a href="#">เพิ่ม</a></li>
                                    </ul>
                                </li>
                                <li class="nav-small-cap">INFORMATION</li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false">Tool / เครื่องมือ</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="{{url('toollist')}}">ดูทั้งหมด</a></li>
                                        <li><a href="{{url('toolform/0')}}">เพิ่ม</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false">Pipe / ประเภทท่อ</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="{{url('pipelist')}}">ดูทั้งหมด</a></li>
                                        <li><a href="{{url('pipeform/0')}}">เพิ่ม</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false">JobType / ประเภทงาน</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="{{url('jobtypelist')}}">ดูทั้งหมด</a></li>
                                        <li><a href="{{url('jobtypeform/0')}}">เพิ่ม</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false">จังหวัด</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="{{url('provincelist')}}">ดูทั้งหมด</a></li>
                                        <li><a href="{{url('provinceform/0')}}">เพิ่ม</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false">สถานที่</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="{{url('placelist')}}">ดูทั้งหมด</a></li>
                                        <li><a href="{{url('placeform/0')}}">เพิ่ม</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false">สถานที่ส่งเอกสาร</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="{{url('placeshiplist')}}">ดูทั้งหมด</a></li>
                                        <li><a href="{{url('placeshipform/0')}}">เพิ่ม</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>