<x-bdskeleton-sidebar-item route="admin.home" prefix="admin" icon="speedometer2" label="Home" />
<x-bdskeleton-sidebar-item route="admin.home" prefix="admin/user" icon="people" label="Menu Item 1" />

@php
    $membershipSubmenus = [
        'admin.home' => 'View All',
        'admin.home' => 'Add New'
    ]
@endphp
<x-bdskeleton-sidebar-item route="admin.home" prefix="admin/membership-plan" icon="cash" 
    label="Menu Item 2" :subMenus="$membershipSubmenus" />