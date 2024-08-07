<div class="header-menu flex-column flex-lg-row" data-kt-drawer="true" data-kt-drawer-name="header-menu"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend"
    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">

    <div class="menu menu-rounded menu-column menu-lg-row menu-root-here-bg-desktop menu-active-bg menu-state-primary menu-title-gray-800 menu-arrow-gray-500  align-items-stretch flex-grow-1  my-5 my-lg-0 px-2 px-lg-0 fw-semibold fs-6"
        id="#kt_header_menu" data-kt-menu="true">
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
            class="menu-item menu-lg-down-accordion me-0 me-lg-2 @if (request()->is('/')) here @endif">
            <span class="menu-link py-3">
                <a href="{{ route('home') }}">
                    <span class="menu-title">Home</span>
                </a>
            </span>
        </div>

        <div class="menu-item menu-lg-down-accordion me-0 me-lg-2 @if (request()->is('dosen/kelas')) here @endif">
            <span class="menu-link py-3">
                <a href="{{ route('dosen.kelas.index') }}">
                    <span class="menu-title">Kelas</span>
                </a>
            </span>
        </div>

        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
            class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2"><span
                class="menu-link py-3"><span class="menu-title">Profile</span><span
                    class="menu-arrow d-lg-none"></span></span>
        </div>
    </div>
    {{-- <div class="flex-shrink-0 p-4 p-lg-0 me-lg-2">
        <a href="https://preview.keenthemes.com/html/metronic/docs"
            class="btn btn-sm btn-light-primary fw-bold w-100 w-lg-auto" data-bs-toggle="tooltip"
            data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
            Docs & Components
        </a>
    </div> --}}
</div>
