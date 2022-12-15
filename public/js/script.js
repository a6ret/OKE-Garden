"use strict";

const dropdown_layanan = document.querySelector("a.dropdown-layanan");
const dropdown_blog = document.querySelector("a.dropdown-blog");
const dropdown_mitra = document.querySelector("a.dropdown-mitra");
const dropdown_profil = document.querySelector("img.dropdown-profil");
const hamburger_menu = document.querySelector("button.hamburgerMenu");
const mobile_menu = document.querySelector("div.mobile-menu");
const close_icon = document.querySelector("button.closeIcon");
const overlay = document.querySelector(".overlay-mobile-menu");
const dropdown_layanan_mobile = document.querySelector(
    "a.dropdown-layanan-mobile"
);
const dropdown_blog_mobile = document.querySelector("a.dropdown-blog-mobile");
const dropdown_mitra_mobile = document.querySelector("a.dropdown-mitra-mobile");

dropdown_layanan.addEventListener("click", (e) => {
    e.preventDefault();
    dropdown_layanan.nextElementSibling.classList.toggle("toggle-layanan");
});

dropdown_blog.addEventListener("click", (e) => {
    e.preventDefault();
    dropdown_blog.nextElementSibling.classList.toggle("toggle-blog");
});

dropdown_mitra.addEventListener("click", (e) => {
    e.preventDefault();
    dropdown_mitra.nextElementSibling.classList.toggle("toggle-mitra");
});

dropdown_profil.addEventListener("click", (e) => {
    e.preventDefault();
    dropdown_profil.nextElementSibling.classList.toggle("toggle-profil");
});

dropdown_layanan_mobile.addEventListener("click", (e) => {
    e.preventDefault();
    dropdown_layanan_mobile.nextElementSibling.classList.toggle(
        "toggle-layanan-mobile"
    );
});

dropdown_blog_mobile.addEventListener("click", (e) => {
    e.preventDefault();
    dropdown_blog_mobile.nextElementSibling.classList.toggle(
        "toggle-blog-mobile"
    );
});

dropdown_mitra_mobile.addEventListener("click", (e) => {
    e.preventDefault();
    dropdown_mitra_mobile.nextElementSibling.classList.toggle(
        "toggle-mitra-mobile"
    );
});

hamburger_menu.addEventListener("click", () => {
    mobile_menu.classList.toggle("toggle-mobile-menu");
});

overlay.addEventListener("click", () => {
    mobile_menu.classList.toggle("toggle-mobile-menu");
});

close_icon.addEventListener("click", () => {
    mobile_menu.classList.toggle("toggle-mobile-menu");
});
