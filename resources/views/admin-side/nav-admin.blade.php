<div class="sidebar">
    <div class="logo">
        <img src="/img/logouperku1.png" alt="">
    </div>
    <ul class="menu" >
        <li class="active" >
            <a href="{{route('dashboard')}}" >
                <i class="fas fa-tachometer-alt"></i>
                <span>dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{route('adminpanel')}}">
                <i class="fas fa-user"></i>
                <span>AdminPanel</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-cog"></i>
                <span>Settings</span>
            </a>
        </li>
        <li class="logout">
            <a href="/logout">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>