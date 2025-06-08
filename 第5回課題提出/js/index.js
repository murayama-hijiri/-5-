//スライドショー
$(function () {
    const swiper = new Swiper(".swiper", {
        loop: true,
        slidesPerView: 1.2,
        centeredSlides: true,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});
// スケジュールテキスト切り替え
$(function () {
    $(".date").click(function () {
        let id = $(this).attr("id");
        $(".date").removeClass("active");
        $(".date_text").removeClass("active");
        $("#" + id).addClass("active");
        $("." + id).addClass("active");
    });
});
// フォームバリデーション
$(function () {
    const reg_tel = /^0\d{9,10}$/;
    const reg_email = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    $("input, select").on("input change", function () {
        let tel = $("input[name='tel']").val();
        let email = $("input[name='email']").val();
        let name = $("input[name='name']").val();
        let seat = $("select[name='seat']").val();

        $("#confirm_button").removeClass("active").prop("disabled", true);
        $(".tel_required_text").removeClass("active");
        $(".email_required_text").removeClass("active");

        let valid = true;

        if (tel && !reg_tel.test(tel)) {
            $(".tel_required_text").addClass("active");
            valid = false;
        }

        if (email === "") {
            valid = false;
        } else if (!reg_email.test(email)) {
            $(".email_required_text").addClass("active");
            valid = false;
        }

        if (name === "" || seat === "") {
            valid = false;
        }

        if (valid) {
            $("#confirm_button").addClass("active").prop("disabled", false);
        }
    });
});
//ハンバーガーメニュー
$(function () {
    $("#js-hamburger-menu, .navigation__link").on("click", function () {
        $(".navigation").toggleClass("open");
        $(".hamburger-menu").toggleClass("hamburger-menu--open");
    });
});
