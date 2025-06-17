<nav style="background-color: #ffffff; border-bottom: 1px solid #e5e5e5; padding: 1rem 2rem;">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <!-- Logo ou nome do sistema -->
        <a href="{{ route('cliente.painel.index') }}"
            style="font-weight: bold; font-size: 1.2rem; color: #333; text-decoration: none;">
            Meu Marketplace
        </a>

        <!-- Links de navegação -->
        <div style="display: flex; gap: 1rem;">
            <a href="{{ route('cliente.painel.pedidos') }}" style="text-decoration: none; color: #333;">Meus Pedidos</a>
            <a href="{{ route('cliente.painel.perfil') }}" style="text-decoration: none; color: #333;">Perfil</a>
            <form method="POST" action="#" style="display: inline;">
                @csrf
                <button type="submit"
                    style="background: none; border: none; color: #333; cursor: pointer;">Sair</button>
            </form>
        </div>
    </div>
</nav>