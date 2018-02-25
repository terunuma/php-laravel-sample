<div class="l-header">
    <div class="l-header-contents">
        <div class="l-header-contents__item">
            <a href="/"><img src="/assets/images/logo.png" alt="SideBizz" width="164"></a>
        </div>
        <div class="l-header-contents__item">
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