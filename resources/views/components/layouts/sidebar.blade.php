<aside class="sidebar">
    <div class="sidebar-header">
        <span class="brand">MANGROVE CENTER</span>
    </div>
    <div class="sidebar-user">
        <img src="{{ url('public') }}/assets/config/images/team/1.jpg" alt="">
        <div class="user-container">
            <h2>Dollatif</h2>
            <p>Dollatif@gmail.com</p>
        </div>
    </div>
    <ul class="sidebar-menu">
        <li class="header">LIST MENU</li>
        <x-list.list-sidebar-menu url="admin/dashboard" icon="dashboard" title="Dashboard" />
        <x-list.list-sidebar-menu url="admin/event" icon="event_note" title="Data Event" />
        <x-list.list-sidebar-menu url="admin/katalog" icon="exposure" title="Data Katalog" />
      
    </ul>
</aside>