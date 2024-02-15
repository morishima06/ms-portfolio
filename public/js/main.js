/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
// @メニューの処理@
var floating_menu = $('.floating_menu');
var nav_button = $('.nav_button');
var line1 = $('.line1');
var line2 = $('.line2');
var line3 = $('.line3');
var floating_link = $('.floating_link');
nav_button.click(function () {
  floating_menu.toggleClass('menu_active');
  // $(".menu_active").fadeToggle(1500);
  line1.toggleClass('line1_active');
  line2.toggleClass('line2_active');
  line3.toggleClass('line3_active');
});
floating_link.click(function () {
  floating_menu.toggleClass('menu_active');
  line1.toggleClass('line1_active');
  line2.toggleClass('line2_active');
  line3.toggleClass('line3_active');
});

// @問い合わせフォーム処理
var modal_section = $('#modal_section');
function display_confirm() {
  var username = $('input[name="username"]').val();
  var email = $('input[name="email"]').val();
  var message = $('textarea[name="message"]').val();
  $('.modal_name').text(username).val(username);
  $('.modal_email').text(email).val(email);
  $('.modal_message').text(message).val(message);
  modal_section.css('display', 'block');
}
var close_button = $('.close_button');

// モーダル閉じる処理
close_button.click(function () {
  modal_section.css('display', 'none');
});

// モーダル確認ボタン処理
$('.confirm_btn').click(function () {
  var result = true;
  var check_result = true;
  $('#err_textarea').empty();
  var name = $("#contact_name").val();
  result = check_name(name);
  if (!result) {
    check_result = result;
  }
  var mail = $("#contact_mail").val();
  result = check_mail(mail);
  if (!result) {
    check_result = result;
  }
  var message = $("#contact_message").val();
  result = check_message(message);
  if (!result) {
    check_result = result;
  }
  if (check_result == false) {
    alert('入力に問題があります');
    return;
  }
  display_confirm();
});
$(function () {
  $("#contact_name").bind("change blur", function () {
    var name = $(this).val();
    check_name(name);
  });
});
function check_name(name) {
  $("#err_name").remove();
  var ch_name = name;
  var result = true;
  if (ch_name == '') {
    $("#err_textarea").append('<p id="err_name" class="err_text">＊名前を入力してください。</p>');
    result = false;
  }
  return result;
}
$(function () {
  $("#contact_mail").bind("change blur", function () {
    var mail = $(this).val();
    check_mail(mail);
  });
});
function check_mail(mail) {
  $("#err_mail").remove();
  var result = true;
  var ch_mail = mail;
  if (ch_mail == '') {
    $("#err_textarea").append('<p id="err_mail" class="err_text" >＊メールアドレスを入力してください。</p>');
    result = false;
  }
  return result;
}
$(function () {
  $("#contact_message").bind("change blur", function () {
    var message = $(this).val();
    check_message(message);
  });
});
function check_message(message) {
  $("#err_message").remove();
  var result = true;
  var ch_message = message;
  if (ch_message == '') {
    $("#err_textarea").append('<p id="err_message" class="err_text">＊メッセージ内容をを入力してください。</p>');
    result = false;
  }
  return result;
}
/******/ })()
;