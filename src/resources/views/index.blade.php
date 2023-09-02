<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>お問い合わせ</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text-name">
                            <input type="text" name="name" value="{{ old('name') }}" />
                            <input type="text" name="name" value="{{ old('name') }}" /><br />
                            <span class="form__input--item">例）山田</span>
                            <span class="form__input--item">例）太郎</span>
                        </div>
                        <div class="form__error">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__groupA">
                    <div class="form__groupA-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__groupA-content">
                        <div class="form__input--radio">
                            <label for="gender1"><input type="radio" id="gender1" name="gender" style="transform:scale(2.5)" class="form__input--radio-plain" value="男性" {{ old ('gender1') == '男性' ? 'checked' : '' }} checked />
                                男性</label>
                            <label for="gender2"><input type="radio" id="gender2" name="gender" style="transform:scale(2.5)" class="form__input--radio-plain" value="女性" {{ old ('gender2') == '女性' ? 'checked' : '' }} /> 女性</label>
                        </div>
                        <div class=" form__error">
                            @error('gender')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" value="{{ old('email') }}" /><br />
                            <span class="form__input--item">例）test@example.com</span>
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">郵便番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--post">
                            <span class="form__input--text-item">〒</span>
                            <input type="text" name="postcode" alue="{{ old('postcode') }}" /><br />
                            <span class="form__input--item">例）123-4567</span>
                        </div>
                        <div class="form__error">
                            @error('postcode')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" value="{{ old('address') }}" /><br />
                            <span class="form__input--item">例）東京都渋谷区千駄ヶ谷1-2-3</span>
                        </div>
                        <div class="form__error">
                            @error('address')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building_name" value="{{ old('building_name') }}" /><br />
                            <span class="form__input--item">例）千駄ヶ谷マンション101</span>
                        </div>
                        <div class="form__error">
                            @error('building_name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">ご意見</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="option" value="{{ old('option') }}"></textarea>
                        </div>
                        <div class="form__error">
                            @error('option')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認</button>
                </div>
            </form>
        </div>
    </header>
</body>

</html>