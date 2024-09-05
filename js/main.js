"use strict";

// ヘッダーの背景変化
document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector(".header");

  const isSpecialPage =
    document.body.classList.contains("page-sponsors") ||
    document.body.classList.contains("page-gallery") ||
    document.body.classList.contains("page-contest");

  if (isSpecialPage || window.scrollY > 100) {
    header.classList.add("black");
  }

  window.addEventListener("scroll", () => {
    if (window.scrollY > 100 || isSpecialPage) {
      header.classList.add("black");
    } else {
      header.classList.remove("black");
    }
  });

  if (window.scrollY > 100) {
    header.classList.add("black");
  }
});

// イベントタイマー
function countDown(due) {
  const now = new Date(); // 現在時刻を定義
  const rest = due.getTime() - now.getTime();
  // パラメータdueのミリ秒から定数nowのミリ秒を引いて定数restに代入
  const sec = Math.floor(rest / 1000) % 60; // 秒を定義
  const min = Math.floor(rest / 1000 / 60) % 60; // 分を定義
  const hours = Math.floor(rest / 1000 / 60 / 60) % 24; // 時間を定義
  const days = Math.floor(rest / 1000 / 60 / 60 / 24); // 日を定義
  const count = [days, hours, min, sec];

  return count;
}

// 升砲館EBR日程を定義
const goal1 = new Date(2024, 11, 14);

function recalc() {
  // Timer セクションが存在する場合のみタイマーを更新
  const timerSection = document.querySelector(".Timer");

  if (timerSection) {
    const counter = countDown(goal1);

    const dayElem = document.getElementById("timer-day");
    const hoursElem = document.getElementById("timer-hours");
    const minElem = document.getElementById("timer-min");
    const secElem = document.getElementById("timer-sec");

    if (dayElem && hoursElem && minElem && secElem) {
      dayElem.textContent = counter[0];
      hoursElem.textContent = counter[1];
      minElem.textContent = String(counter[2]).padStart(2, "0");
      secElem.textContent = String(counter[3]).padStart(2, "0");
    }

    refresh();
  }
}

function refresh() {
  setTimeout(recalc, 1000);
}

document.addEventListener("DOMContentLoaded", function () {
  recalc();
});
//イベントタイマーここまで

//Gallery画像モーダル
// const GalleryModalBtn = document.getElementById("js-gallery__modalBtn");
// const GalleryModalback = document.getElementById("js-gallery__modalBack");
// const GalleryModalCloseBtn = document.getElementById("js-gallery__modalClose");

// GalleryModalBtn.addEventListener("click", () => {
//   GalleryModalback.classList.add("on");
// });

// GalleryModalCloseBtn.addEventListener("click", () => {
//   GalleryModalback.classList.remove("on");
// });
// GalleryModalback.addEventListener("click", () => {
//   GalleryModalback.classList.remove("on");
// });
