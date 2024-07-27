<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>FashonablyLate</title>
</head>

<body>
    <div class="header">
        <header class="header-item">
            <h1 class="header-item__title">FashonablyLate</h1>
        </header>
    </div>
    <h2 class="content__title">Contact</h2>
    <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <main class="content">
            <div class="content-item">
                <dl class="content-item__cover">
                    <dt class="content-item__title">お名前<span class="required--red">※</span></dt>
                    <dd class="content-item__form">
                        <input class="content-item__form-item--short" type="text" id="name1" name="name1" placeholder="例：山田">
                        <!-- エラーメッセージ -->
                        <input class="content-item__form-item--short" type="text" id="name2" name="name2" placeholder="例：太郎">
                        <!-- エラーメッセージ -->
                    </dd>
                </dl>
                <dl class="content-item__cover">
                    <dt class="content-item__title">性別<span class="required--red">※</span></dt>
                    <dd class="content-item__form">
                        <input class="content-item__form-item--short" type="radio" checked="checked" id="male" name="gender"><label for="male">男性</label>
                        <input class="content-item__form-item--short" type="radio" id="female" name="gender"><label for="female">女性</label>
                        <input class="content-item__form-item--short" type="radio" id="anothor" name="gender"><label for="anothor">その他</label>
                    </dd>
                </dl>
                <dl class="content-item__cover">
                    <dt class="content-item__title">メールアドレス<span class="required--red">※</span></dt>
                    <dd class="content-item__form">
                        <input class="content-item__form-item" type="email" name="email" placeholder="例:test@example.com">
                        <!-- エラーメッセージ -->
                    </dd>
                </dl>
                <dl class="content-item__cover">
                    <dt class="content-item__title">電話番号<span class="required--red">※</span></dt>
                    <dd class="content-item__form">
                        <input class="content-item__form-item--short" type="text" id="tel1" name="tel" placeholder="080">-
                        <input class="content-item__form-item--short" type="text" id="tel2" name="tel" placeholder="1234">-
                        <input class="content-item__form-item--short" type="text" id="tel3" name="tel" placeholder="5678">
                        <!-- エラーメッセージ -->
                    </dd>
                </dl>
                <dl class="content-item__cover">
                    <dt class="content-item__title">住所<span class="required--red">※</span></dt>
                    <dd class="content-item__form">
                        <input class="content-item__form-item" type="text" name="address" placeholder="例:test@example.com">
                        <!-- エラーメッセージ -->
                    </dd>
                </dl>
                <dl class="content-item__cover">
                    <dt class="content-item__title">建物名<span class="required--red">※</span></dt>
                    <dd class="content-item__form">
                        <input class="content-item__form-item" type="text" name="building" placeholder="例:千駄ヶ谷マンション101">
                        <!-- エラーメッセージ -->
                    </dd>
                </dl>
                <dl class="content-item__cover">
                    <dt class="content-item__title">お問い合わせの種類<span class="required--red">※</span></dt>
                    <dd class="content-item__form">
                        <select class="content-item__form-item--short" type="text" id="type" name="type">
                            <option class="content-item__form-item__type" value="選択してください">選択してください</option>
                            <option class="content-item__form-item__type" value="商品の交換について">商品の交換について</option>
                        </select>
                        <!-- エラーメッセージ -->
                    </dd>
                </dl>
                <dl class="content-item__cover">
                    <dt class="content-item__title">お問い合わせ内容<span class="required--red">※</span></dt>
                    <dd class="content-item__form">
                        <input class="content-item__form-item" type="text" name="content">
                        <!-- エラーメッセージ -->
                    </dd>
                </dl>
            </div>
        </main>
        <button class="content--button">確認画面</button>
        <form>
</body>

</html>