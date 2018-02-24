<div class="p-header">
    <div class="p-header-contents">
        <div class="p-header-contents__item">
            <a href="/"><img src="/assets/images/logo.png" alt="SideBizz" width="164"></a>
        </div>
        <div class="p-header-contents__item">
            <ul class="p-header-nav">
                <li class="p-header-nav__item">
                    <a href="#">SideBizzとは</a>
                </li>
                <li class="p-header-nav__item">
                    <a href="#">掲載を検討中の企業様はコチラ</a>
                </li>
                <li class="p-header-nav__item">
                    <a href="#">閲覧履歴</a>
                </li>
                <li class="p-header-nav__item">
                    <a href="#">資料リスト</a>
                    <a href="#" class="p-header-doclist-badge">6</a>
                </li>
            </ul>
        </div>
        <div class="p-header-contents__item u-text-right">
            @guest
                <div class="p-header-btns">
                    <a href="/register" class="p-header-btn">新規登録</a>
                    <a href="/login" class="p-header-btn">ログイン</a>
                </div>
                <a href="#" class="p-header-forget-password">パスワードをお忘れの方はコチラ</a>
            @else
                <div class="p-header-btns">
                    <a href="#" class="p-header-btn">マイページ</a>
                    <a href="#" class="p-header-btn">ログアウト</a>
                </div>
            @endguest
        </div>
    </div>
</div>