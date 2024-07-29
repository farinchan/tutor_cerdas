<!--begin::Menu wrapper-->
<div class="header-menu flex-column flex-lg-row" data-kt-drawer="true" data-kt-drawer-name="header-menu"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend"
    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
    <!--begin::Menu-->
    <div class="menu menu-rounded menu-column menu-lg-row menu-root-here-bg-desktop menu-active-bg menu-state-primary menu-title-gray-800 menu-arrow-gray-500  align-items-stretch flex-grow-1  my-5 my-lg-0 px-2 px-lg-0 fw-semibold fs-6"
        id="#kt_header_menu" data-kt-menu="true">
        <!--begin:Menu item-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
            class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2"><!--begin:Menu link--><span
                class="menu-link py-3"><span class="menu-title">Dashboards</span><span
                    class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                @include("layout/partials/header/_menu/__dashboards")
            </div><!--end:Menu sub-->
        </div><!--end:Menu item--><!--begin:Menu item-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
            class="menu-item menu-lg-down-accordion me-0 me-lg-2"><!--begin:Menu link--><span
                class="menu-link py-3"><span class="menu-title">Pages</span><span
                    class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
                @include("layout/partials/header/_menu/__pages")
            </div><!--end:Menu sub-->
        </div><!--end:Menu item--><!--begin:Menu item-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
            class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2"><!--begin:Menu link--><span
                class="menu-link py-3"><span class="menu-title">Apps</span><span
                    class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                    class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link py-3"><span
                            class="menu-icon"><i class="ki-duotone ki-rocket fs-2"><span class="path1"></span><span
                                    class="path2"></span></i></span><span class="menu-title">Projects</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div
                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/projects/list"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">My
                                    Projects</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/projects/project"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">View
                                    Project</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/projects/targets"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Targets</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/projects/budget"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Budget</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/projects/users"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Users</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/projects/files"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Files</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/projects/activity"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Activity</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/projects/settings"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Settings</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                    class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link py-3"><span
                            class="menu-icon"><i class="ki-duotone ki-handcart fs-2"></i></span><span
                            class="menu-title">eCommerce</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div
                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                            data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                            <!--begin:Menu link--><span class="menu-link py-3"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Catalog</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                <!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/ecommerce/catalog/products"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Products</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/ecommerce/catalog/categories"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Categories</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/ecommerce/catalog/add-product"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Add Product</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/ecommerce/catalog/edit-product"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Edit Product</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/ecommerce/catalog/add-category"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Add Category</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/ecommerce/catalog/edit-category"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Edit Category</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
                            <!--begin:Menu link--><span class="menu-link py-3"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Sales</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/ecommerce/sales/listing"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Orders Listing</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/ecommerce/sales/details"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span class="menu-title">Order
                                            Details</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/ecommerce/sales/add-order"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span class="menu-title">Add
                                            Order</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/ecommerce/sales/edit-order"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span class="menu-title">Edit
                                            Order</span></a><!--end:Menu link--></div><!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
                            <!--begin:Menu link--><span class="menu-link py-3"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Customers</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/ecommerce/customers/listing"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Customers Listing</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/ecommerce/customers/details"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Customers Details</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
                            <!--begin:Menu link--><span class="menu-link py-3"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Reports</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/ecommerce/reports/view"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Products Viewed</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/ecommerce/reports/sales"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Sales</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/ecommerce/reports/returns"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Returns</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/ecommerce/reports/customer-orders"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Customer Orders</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/ecommerce/reports/shipping"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Shipping</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/ecommerce/settings"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Settings</span></a><!--end:Menu link--></div>
                        <!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                    class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link py-3"><span
                            class="menu-icon"><i class="ki-duotone ki-chart fs-2"><span class="path1"></span><span
                                    class="path2"></span></i></span><span class="menu-title">Support
                            Center</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div
                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/support-center/overview"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Overview</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                            data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                            <!--begin:Menu link--><span class="menu-link py-3"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Tickets</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                <!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/support-center/tickets/list"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Ticket List</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/support-center/tickets/view"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Ticket View</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                            data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                            <!--begin:Menu link--><span class="menu-link py-3"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Tutorials</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                <!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/support-center/tutorials/list"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Tutorials List</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/support-center/tutorials/post"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Tutorials Post</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/support-center/faq"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">FAQ</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/support-center/licenses"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Licenses</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/support-center/contact"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Contact
                                    Us</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                    class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link py-3"><span
                            class="menu-icon"><i class="ki-duotone ki-shield-tick fs-2"><span
                                    class="path1"></span><span class="path2"></span></i></span><span
                            class="menu-title">User Management</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div
                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                            data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                            <!--begin:Menu link--><span class="menu-link py-3"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Users</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                <!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/user-management/users/list"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span class="menu-title">Users
                                            List</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/user-management/users/view"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span class="menu-title">View
                                            User</span></a><!--end:Menu link--></div><!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                            data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                            <!--begin:Menu link--><span class="menu-link py-3"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Roles</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                <!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/user-management/roles/list"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span class="menu-title">Roles
                                            List</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/user-management/roles/view"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span class="menu-title">View
                                            Roles</span></a><!--end:Menu link--></div><!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/user-management/permissions"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Permissions</span></a><!--end:Menu link--></div>
                        <!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                    class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link py-3"><span
                            class="menu-icon"><i class="ki-duotone ki-phone fs-2"><span class="path1"></span><span
                                    class="path2"></span></i></span><span class="menu-title">Contacts</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div
                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/contacts/getting-started"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Getting
                                    Started</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/contacts/add-contact"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Add
                                    Contact</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/contacts/edit-contact"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Edit
                                    Contact</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/contacts/view-contact"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">View
                                    Contact</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                    class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link py-3"><span
                            class="menu-icon"><i class="ki-duotone ki-basket fs-2"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span
                                    class="path4"></span></i></span><span
                            class="menu-title">Subscriptions</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div
                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/subscriptions/getting-started"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Getting
                                    Started</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/subscriptions/list"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Subscription
                                    List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/subscriptions/add"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Add
                                    Subscription</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/subscriptions/view"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">View
                                    Subscription</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                    class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link py-3"><span
                            class="menu-icon"><i class="ki-duotone ki-briefcase fs-2"><span
                                    class="path1"></span><span class="path2"></span></i></span><span
                            class="menu-title">Customers</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div
                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/customers/getting-started"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Getting
                                    Started</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/customers/list"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Customer
                                    Listing</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/customers/view"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Customer
                                    Details</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                    class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link py-3"><span
                            class="menu-icon"><i class="ki-duotone ki-credit-cart fs-2"><span
                                    class="path1"></span><span class="path2"></span></i></span><span
                            class="menu-title">Invoice Management</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div
                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                            data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                            <!--begin:Menu link--><span class="menu-link py-3"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Profile</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                <!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/invoices/view/invoice-1"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Invoice 1</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/invoices/view/invoice-2"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Invoice 2</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                        href="?page=apps/invoices/view/invoice-3"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Invoice 3</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/invoices/create"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Create
                                    Invoice</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                    class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link py-3"><span
                            class="menu-icon"><i class="ki-duotone ki-file-added fs-2"><span
                                    class="path1"></span><span class="path2"></span></i></span><span
                            class="menu-title">File Manager</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div
                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/file-manager/folders"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Folders</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/file-manager/files"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Files</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/file-manager/blank"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Blank
                                    Directory</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/file-manager/settings"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Settings</span></a><!--end:Menu link--></div>
                        <!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                    class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link py-3"><span
                            class="menu-icon"><i class="ki-duotone ki-sms fs-2"><span class="path1"></span><span
                                    class="path2"></span></i></span><span class="menu-title">Inbox</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div
                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/inbox/listing"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Messages</span><span class="menu-badge"><span
                                        class="badge badge-light-success">3</span></span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/inbox/compose"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Compose</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/inbox/reply"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">View &
                                    Reply</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                    class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link py-3"><span
                            class="menu-icon"><i class="ki-duotone ki-message-text-2 fs-2"><span
                                    class="path1"></span><span class="path2"></span><span
                                    class="path3"></span></i></span><span class="menu-title">Chat</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div
                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/chat/private"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Private
                                    Chat</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/chat/group"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Group
                                    Chat</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                                href="?page=apps/chat/drawer"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Drawer
                                    Chat</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                        href="?page=apps/calendar"><span class="menu-icon"><i
                                class="ki-duotone ki-calendar-8 fs-2"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span
                                    class="path4"></span><span class="path5"></span><span
                                    class="path6"></span></i></span><span
                            class="menu-title">Calendar</span></a><!--end:Menu link--></div><!--end:Menu item-->
            </div><!--end:Menu sub-->
        </div><!--end:Menu item--><!--begin:Menu item-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
            class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
            <!--begin:Menu link--><span class="menu-link py-3"><span class="menu-title">Help</span><span
                    class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                <!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                        href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank"
                        title="Check out over 200 in-house components, plugins and ready for use solutions"
                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                        data-bs-placement="right"><span class="menu-icon"><i class="ki-duotone ki-rocket fs-2"><span
                                    class="path1"></span><span class="path2"></span></i></span><span
                            class="menu-title">Components</span></a><!--end:Menu link--></div>
                <!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                        href="https://preview.keenthemes.com/html/metronic/docs" target="_blank"
                        title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover"
                        data-bs-dismiss="click" data-bs-placement="right"><span class="menu-icon"><i
                                class="ki-duotone ki-abstract-26 fs-2"><span class="path1"></span><span
                                    class="path2"></span></i></span><span
                            class="menu-title">Documentation</span></a><!--end:Menu link--></div>
                <!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3" href="?page=layout-builder"
                        title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip"
                        data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span
                            class="menu-icon"><i class="ki-duotone ki-switch fs-2"><span class="path1"></span><span
                                    class="path2"></span></i></span><span class="menu-title">Layout
                            Builder</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                        href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                        target="_blank"><span class="menu-icon"><i class="ki-duotone ki-code fs-2"><span
                                    class="path1"></span><span class="path2"></span><span
                                    class="path3"></span><span class="path4"></span></i></span><span
                            class="menu-title">Changelog v8.2.6</span></a><!--end:Menu link--></div>
                <!--end:Menu item-->
            </div><!--end:Menu sub-->
        </div><!--end:Menu item-->
    </div>
    <!--end::Menu-->
    <!--begin::Actions-->
    <div class="flex-shrink-0 p-4 p-lg-0 me-lg-2">
        <a href="https://preview.keenthemes.com/html/metronic/docs"
            class="btn btn-sm btn-light-primary fw-bold w-100 w-lg-auto" data-bs-toggle="tooltip"
            data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
            Docs & Components
        </a>
    </div>
    <!--end::Actions-->
</div>
<!--end::Menu wrapper-->
