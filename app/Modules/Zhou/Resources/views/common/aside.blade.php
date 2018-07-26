<!-- search box -->
<div class="main-search">
    <label for="main-search"><i class="icon-search"></i></label>
    <input id="main-search" type="text" placeholder="Search..." />
</div>
<div class="divider"></div>
<!-- end search box -->

<!-- aside item: Mini profile -->
<div class="my-profile">
    <a href="javascript:void(0)" class="my-profile-pic">
        <img src="{{asset('ZhouResources/img/avatar/avatar_0.jpg')}}" alt="" />
    </a>
    <span class="first-child">Welcome <strong>Victoria!</strong></span>
    <span><a href="javascript:void(0);">Edit Profile </a></span>
</div>
<div class="divider"></div>
<!-- end aside item: Mini profile -->

<!-- aside item: Menu -->
<div class="sidebar-nav-fixed">

    <ul class="menu" id="accordion-menu-js">
        <li class="current">
            <a href="javascript:void(0)"><i class="icon-off"></i>Dashboard <span class="badge">2</span></a>
            <ul>
                <li>
                    <a href="index.html" class="expanded">Dashboard</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="logout-js" data-rel="login.html">Logout</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="inbox.html"><i class="icon-envelope"></i>Inbox</a>
        </li>
        <li class="">
            <a href="javascript:void(0)"><i class="icon-check"></i>Forms<span class="badge">3</span></a>
            <ul>
                <li>
                    <a href="forms.html">Form Elements</a>
                </li>
                <li>
                    <a href="validation.html">Validation</a>
                </li>
                <li>
                    <a href="wizard.html">Wizards</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:void(0)"><i class="icon-user"></i>Interface<span class="badge">3</span></a>
            <ul>
                <li>
                    <a href="interface.html">Interface Elements</a>
                </li>
                <li>
                    <a href="buttons.html">Buttons &amp; Icons</a>
                </li>
                <li>
                    <a href="tables.html">Tables</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:void(0)"><i class="icon-signal"></i>Charts &amp; Graphs<span class="badge">2</span></a>
            <ul>
                <li>
                    <a href="basic_charts.html">Basic Charts</a>
                </li>
                <li>
                    <a href="adv_charts.html">Advanced Charts</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="widgets.html"><i class="icon-refresh"></i>Smart Widgets</a>
        </li>
        <li class="">
            <a href="javascript:void(0)"><i class="icon-plus"></i>Bonus<span class="badge">3</span></a>
            <ul>
                <li>
                    <a href="invoice.html">Invoice</a>
                </li>
                <li>
                    <a href="typography.html">Typography</a>
                </li>
                <li>
                    <a href="chat.html">Chat</a>
                </li>
            </ul>
        </li>
    </ul>

</div>
<div class="divider"></div>
<!-- end aside item: Menu -->

<!-- aside item: Inbox -->
<!-- inbox message 1-->
<div class="mini-inbox">
    <div class="alert inbox">
        <button type="button" class="close" data-dismiss="alert">
            ×
        </button>

        <a href="javascript:void(0)">
            <img src="{{asset('ZhouResources/img/email-important.png')}}" width="22" height="18" alt="important mail" />
            From:David S...
        </a>
        Dear Victoria, Congratulations! You work has been uploade...
    </div>
    <!-- inbox message 2-->
    <div class="alert inbox">
        <button type="button" class="close" data-dismiss="alert">
            ×
        </button>
        <a href="javascript:void(0)">
            <img src="{{asset('ZhouResources/img/email-unread.png')}}" width="22" height="18" alt="important mail" />
            Re:Last Year...
        </a>
        Hey Vicky, find attached! Thx :-)
    </div>
    <!-- inbox message 3-->
    <div class="alert inbox last-child">
        <button type="button" class="close" data-dismiss="alert">
            ×
        </button>
        <a href="javascript:void(0)">
            <img src="{{asset('ZhouResources/img/email-unread.png')}}" width="22" height="18" alt="important mail" />
            Company Party
        </a>
        Hi, You have been cordially invited to join new year...
    </div>

</div>
<div class="divider"></div>
<!-- end aside item: Inbox -->

<!-- aside item: Tiny Stats -->
<div class="number-stats">
    <ul>
        <li>4579<span>visitors</span></li>
        <li>571<span>orders</span></li>
        <li>879<span>reviews</span></li>
    </ul>
</div>
<div class="divider"></div>
<!-- end aside item: Tiny Stats -->

<!-- aside buttons -->
<div class="aside-buttons">
    <a href="javascript:void(0)" title="" class="btn btn-primary">Create an Invoice</a>
</div>
<div class="divider"></div>
<!-- end aside buttons -->