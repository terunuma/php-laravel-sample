<div class="l-header">
    <div class="l-header-contents">
        <div class="l-header-contents__item">
            <a href="/"><img src="/assets/images/logo.png" alt="SideBizz" width="189"></a>
        </div>
        <div class="l-header-contents__item">
            <ul class="l-header-nav">
                <li class="l-header-nav__item">
                    <a href="#">SideBizzとは</a>
                </li>
                <li class="l-header-nav__item">
                    <a href="#">掲載を検討中の企業様はコチラ</a>
                </li>
                <li class="l-header-nav__item">
                    <a href="#">閲覧履歴</a>
                </li>
                <li class="l-header-nav__item">
                    <a href="#">資料リスト</a>
                    <a href="#" class="l-header-doclist-badge">6</a>
                </li>
            </ul>
        </div>
        <div class="l-header-contents__item u-text-right">
            @auth
                <div class="l-header-btns">
                    <a href="#" class="l-header-btn">マイページ</a>
                    <a href="{{ route('logout') }}"
                        class="l-header-btn"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        ログアウト
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            @else
                <div class="l-header-btns">
                    <a href="/register" class="l-header-btn">新規登録</a>
                    <a href="/login" class="l-header-btn">ログイン</a>
                </div>
                <a href="#" class="l-header-forget-password">パスワードをお忘れの方はコチラ</a>
            @endauth
        </div>
    </div>
</div>