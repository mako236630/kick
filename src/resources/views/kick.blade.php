<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>石巻キックボクシング | ISHINOMAKI KICKBOXING</title>
    <meta name="description" content="石巻キックボクシング - 本格キックボクシングで、心と体を鍛える。初心者から上級者まで。">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Oswald:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/kick.css') }}">
</head>
<body>

    {{-- ヘッダー --}}
    <header class="header">
        <div class="container header-inner">
            <a href="#" class="logo">石巻<span>KICK</span>BOXING</a>
            <button class="nav-toggle" id="navToggle" aria-label="メニューを開く">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <nav>
                <ul class="nav-list" id="navList">
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#classes">CLASS</a></li>
                    <li><a href="#trainers">TRAINER</a></li>
                    <li><a href="#access">ACCESS</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>

    {{-- ヒーロー --}}
    <section class="hero" id="top">
        <div class="hero-content">
            <img src="/img/IMG_6429 - 編集済み.png" alt="ロゴ">
            <p class="hero-subtitle">汗をかき、心を整える。</p>
            <a href="#contact" class="hero-cta">無料体験に申し込む</a>
        </div>
        <p class="hero-scroll">SCROLL</p>
    </section>

    {{-- ジム紹介 --}}
    <section class="section about" id="about">
        <div class="container">
            <p class="section-label">About Us</p>
            <h2 class="section-title">ジム紹介</h2>
            <div class="about-grid">
                <div class="about-text">
                    <p>
                        石巻キックボクシングは、キックボクシングを通じて心身を鍛えるジムです。
                        初心者から経験者まで、それぞれのペースで上達できる環境を整えています。
                    </p>
                    <p>
                        広々としたトレーニングスペースと、元プロ・キックボクサーが、
                        あなたの目標を全力でサポートします。
                    </p>
                    <div class="about-stats">
                        <div class="stat-item">
                            <p class="stat-number">シャワー室完備</p>
                            <p class="stat-label">無料</p>
                        </div>
                        <div class="stat-item">
                            <p class="stat-number">手ぶらでOK</p>
                            <p class="stat-label">グローブ・その他道具貸出</p>
                        </div>
                        <div class="stat-item">
                            <p class="stat-number">通い放題</p>
                            <p class="stat-label">好きな時間に来退OK</p>
                        </div>
                    </div>
                </div>
                <div class="about-visual"></div>
            </div>
        </div>
    </section>

    {{-- クラス・料金 --}}
    <section class="section classes" id="classes">
        <div class="container">
            <p class="section-label">Class & Price</p>
            <h2 class="section-title">料金</h2>
            <div class="class-cards">
                <article class="class-card">
                    <h3 class="class-name">男性</h3>
                    <p class="class-price">¥8,800<span>/月</span></p>
                    <p class="class-note">通い放題 / 手ぶらOK</p>
                </article>
                <article class="class-card">
                    <h3 class="class-name">女性</h3>
                    <p class="class-price">¥7,700<span>/月</span></p>
                    <p class="class-note">通い放題 / 手ぶらOK</p>
                </article>
                <article class="class-card">
                    <h3 class="class-name">学生(大・高・中)</h3>
                    <p class="class-price">¥6,600<span>/月</span></p>
                    <p class="class-note">通い放題 / 手ぶらOK</p>
                    <p class="class-note">※ 小学生・未就学児は受付しておりません</p>
                </article>
            </div>
            <p class="class-note">入会金と事務手数料の¥14,300(税込)はお客様負担になります。また、ご入会から1年以内に退会された場合はキャンペーン対象外となりますので、ご注意下さい。
                月謝のお支払い方法は口座振替となりますので、ご入会の際は口座番号の分かるものとお届け印をお持ちください</p>
        </div>
    </section>

    {{-- トレーナー --}}
    <section class="section trainers" id="trainers">
        <div class="container">
            <p class="section-label">Trainer</p>
            <h2 class="section-title">トレーナー</h2>
            <div class="trainer-cards">
                <article class="trainer-card">
                    <div class="trainer-photo">
                        <img src="{{ asset('/img/IMG_6984.jpg') }}" alt="主トレーナー">
                    </div>
                    <h3 class="trainer-name">岩渕　哲也</h3>
                    <p class="trainer-role">元プロキックボクサー</p>
                    <p class="trainer-bio">石巻生まれ</p>
                </article>
                <article class="trainer-card">
                    <div class="trainer-photo-sub">
                        <img src="{{ asset('/img/4D3EEB0B-C4D0-4D23-9541-1CC8432A5AE0_L0_001-2024_6_23 14_41_47.jpg') }}" alt="主トレーナー">
                    </div>
                </article>
                <article class="trainer-card">
                    <div class="trainer-photo-sub">
                        <img src="{{ asset('/img/96FB3553-ACA5-4E87-AE33-6CEE61C694C4_L0_001-2024_6_23 14_41_47.jpg') }}" alt="主トレーナー">
                    </div>
                </article>
            </div>
        </div>
    </section>

    {{-- アクセス --}}
    <section class="section access" id="access">
        <div class="container">
            <p class="section-label">Access</p>
            <h2 class="section-title">アクセス</h2>
            <div class="access-grid">
                <dl class="access-info">
                    <div>
                        <dt>住所</dt>
                        <dd>〒986-0832<br>宮城県石巻市泉町4丁目1-39</dd>
                    </div>
                    <div>
                        <dt>電話</dt>
                        <dd>090-2979-6894</dd>
                    </div>
                    <div>
                        <dt>営業時間</dt>
                        <dd>
                            月 火 水 金 : 10:00 - 22:00<br>
                            土 日 : 13:00 - 18:00<br>
                            木 : 定休
                        </dd>
                    </div>
                    <div>
                        <dt>最寄り駅</dt>
                        <dd>石巻駅 徒歩14分</dd>
                    </div>
                    <div>
                        <dt>駐車場</dt>
                        <dd>6～10台可能</dd>
                    </div>
                </dl>
                <div class="access-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3125.5671909801486!2d141.29714727538212!3d38.42836597424359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f89a3bdcc6b2ab1%3A0x8a60c37f89444e16!2z55-z5be744Kt44OD44Kv44Oc44Kv44K344Oz44Kw!5e0!3m2!1sja!2sjp!4v1779600834789!5m2!1sja!2sjp"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    {{-- お問い合わせ --}}
    <section class="section contact" id="contact">
        <div class="container contact-inner">
            <p class="section-label">Contact</p>
            <h2 class="section-title">お問い合わせ</h2>
            <p class="contact-lead">無料体験・見学のお申し込みは、InstagramのDMまたはお電話にてご連絡ください。</p>
            <div class="contact-methods">
                <a href="https://www.instagram.com/ishinomaki_kick/" class="contact-card" target="_blank" rel="noopener noreferrer">
                    <span class="contact-icon">IG</span>
                    <h3 class="contact-name">Instagram DM</h3>
                    <p class="contact-desc">DMでお気軽にお問い合わせください</p>
                    <span class="contact-action">DMを送る →</span>
                </a>
                <a href="tel:090-2979-6894" class="contact-card">
                    <span class="contact-icon">TEL</span>
                    <h3 class="contact-name">お電話</h3>
                    <p class="contact-desc">090-2979-6894</p>
                    <span class="contact-action">電話をかける →</span>
                </a>
            </div>
        </div>
    </section>

    {{-- フッター --}}
    <footer class="footer">
        <p class="footer-logo">石巻キックボクシング</p>
        <p class="footer-copy">&copy; {{ date('Y') }} ISHINOMAKI KICKBOXING. All Rights Reserved.</p>
    </footer>

    <script>
        const navToggle = document.getElementById('navToggle');
        const navList = document.getElementById('navList');

        navToggle.addEventListener('click', () => {
            navList.classList.toggle('is-open');
        });

        navList.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navList.classList.remove('is-open');
            });
        });
    </script>
</body>
</html>
