<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
    <title>FashonablyLate</title>
</head>

<body>
    <div class="header">
        <header class="header-item">
            <h1 class="header-item__title">FashonablyLate</h1>
        </header>
    </div>
    <h2 class="content__title">Contact</h2>
    <form class="form" action="/contact/thanks" method="get">
    @csrf
    <table class="content-item">
                <main class="content">
                <tr class="content-item__cover">
                    <th class="content-item__title">お名前</th>
                    <td class="content-item__answer"><input type="text" name="name" value="{{ $contact['name'] }}" readonly /></td>
                </tr>
                <tr class="content-item__cover">
                    <th class="content-item__title">性別</th>
                    <td class="content-item__answer"><input type="radio" name="gender" value="{{ $contact['gender'] }}" readonly /></td>
                </tr>
                <tr class="content-item__cover">
                    <th class="content-item__title">メールアドレス</th>
                    <td class="content-item__answer"><input type="email" name="email" value="{{ $contact['email'] }}" readonly /></td>
                </tr>
                <tr class="content-item__cover">
                    <th class="content-item__title">電話番号</th>
                    <td class="content-item__answer"><input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly /></td>
                </tr>
                <tr class="content-item__cover">
                    <th class="content-item__title">住所</th>
                    <td class="content-item__answer"><input type="text" name="address" value="{{ $contact['address'] }}" readonly /></td>
                </tr>
                <tr class="content-item__cover">
                    <th class="content-item__title">建物名</th>
                    <td class="content-item__answer"><input type="text" name="building" value="{{ $contact['building'] }}" readonly /></td>
                </tr>
                <tr class="content-item__cover">
                    <th class="content-item__title">お問い合わせの種類</th>
                    <td class="content-item__answer"><input type="text" name="type" value="{{ $contact['type'] }}" readonly /></td>
                </tr>
                <tr class="content-item__cover">
                    <th class="content-item__title--big">お問い合わせ内容</th>
                    <td class="content-item__answer"><input type="text" name="content" value="{{ $contact['content'] }}" readonly /></td>
                </tr>
            </table>
        </main>
        <div class="content__button">
            <button class="content__button--send">送信</button>
            <button class="content__button--correct">修正</button>
        </div>
    </form>
</body>

</html>