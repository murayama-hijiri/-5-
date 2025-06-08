<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TOPページ</title>
        <link rel="stylesheet" href="../css/style.css">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php include("header.php")?>
        <div class="slide">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="../img/slide_1.jpg" alt="スライド画像1">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/slide_2.jpg" alt="スライド画像2">
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/slide_3.jpg" alt="スライド画像3">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <div class="main_content">
            <div id="catch_phrase">
                <p class="title_text">今年も始まる<span class="text">夏祭り</span></p>
            </div>
            <div id="schedule">
                <p class="title_text">スケジュール</p>
                <div class="schedule_box">
                    <div class="schedule_flex">
                        <div class="date active" id="date1">
                            <p>9月1日</p>
                        </div>
                        <div class="date" id="date2">
                            <p>9月2日</p>
                        </div>
                        <div class="date" id="date3">
                            <p>9月3日</p>
                        </div>
                    </div>
                    <div class="main_text">
                        <p class="date1 date_text active">9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容</p>
                        <p class="date2 date_text">9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容</p>
                        <p class="date3 date_text">9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容</p>
                    </div>
                </div>
            </div>
            <div id="access">
                <p class="title_text">アクセス</p>
                <p>〒771-1154 徳島県徳島市応神町東貞方南川淵川淵</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6607.008043415397!2d134.52368644175942!3d34.10784420979454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355373abe3d15637%3A0xac295ae5e2536dbe!2z5ZCJ6YeO5bed5YyX5bK46YGL5YuV5bqD5aC044K944OV44OI44Oc44O844Or5aC0ROmdog!5e0!3m2!1sja!2sjp!4v1749015818509!5m2!1sja!2sjp" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div id="form">
                <p class="title_text">席予約</p>
                <form method="post" action="confirm.php" class="main_form">
                    <div>
                        <label for="name">お名前<span class="required">※必須</span></label>
                        <input type="text" name="name"  placeholder="例）田中 太郎" required>
                    </div>
                    <div>
                        <label for="seat">席の場所<span class="required">※必須</span></label>
                        <select name="seat" id="" required>
                            <option value="">---</option>
                            <option value="SS">SS席</option>
                            <option value="S">S席</option>
                            <option value="A">A席</option>
                            <option value="B">B席</option>
                            <option value="C">C席</option>
                        </select>
                    </div>
                    <div>
                        <label for="email">メールアドレス<span class="required">※必須</span></label>
                        <input type="email" name="email"  placeholder="例）abcd 123@example.com" required>
                        <p class="email_required_text">正しいメールアドレスを入力してください</p>
                    </div>
                    <div>
                        <label for="tel">電話番号<span>※任意</span></label>
                        <input type="tel" name="tel" placeholder="例）09012345678">
                        <p class="tel_required_text">正しい電話番号を入力してください</p>
                    </div>
                    <input type="submit" id="confirm_button"class="" disabled>
                </form>
            </div>
        </div>
        <?php include("footer.php")?>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="../js/index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    </body>
</html>