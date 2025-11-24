{{-- меню аккаунта пользователя --}}
<div class="account-links">
    {{-- в личный кабинет --}}
    <a href="{{ route('account') }}" class="account-link
        @if($accountLink == 'account') account-link-active @endif">Account</a>
    {{-- на изменение данных пользователя --}}
    <a href="{{ route('account.change') }}" class="account-link
        @if($accountLink == 'change') account-link-active @endif">Details</a>
    {{-- к списку заказов --}}
    <a href="{{ route('account.orders') }}" class="account-link
        @if($accountLink == 'order') account-link-active @endif">Orders</a>
    <a href="" class="account-link
        @if($accountLink == 'download') account-link-active @endif">Downloads</a>
    {{-- в панель администратора, если пользователь - администратор --}}
    @if(auth()->user()->is_admin)
        <a href="{{ route('admin.dashboard') }}" class="account-link">Dashboard</a>
    @endif
    {{-- на выход --}}
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <a href="#" class="account-link"
       onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout
    </a>
</div>
