<template>
    <div class="sb-sidenav-menu">
        <div class="nav">
            <a class="nav-link" href="/admin/dashboard">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseGestao"
                aria-expanded="false" aria-controls="collapseGestao">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Gestão
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseGestao" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="/admin/usuarios">Usuários</a>
                    <a class="nav-link" href="/admin/roles">Permissões</a>
                </nav>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Sidebar'
}
</script>
