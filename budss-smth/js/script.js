const menuBtn = document.querySelector(".menu__button");
const menuList = document.querySelector(".menu__list");

menuBtn.addEventListener("click", () => {
  let expanded = menuBtn.getAttribute("aria-expanded") === "true";
  menuBtn.setAttribute("aria-expanded", !expanded);
  menuBtn.classList.toggle("menu__button--open");
  menuList.classList.toggle("menu__list--open");
  let visible = menuList.toggleAttribute("data-visible");
  visible
    ? document.body.classList.add("hide-scroll")
    : document.body.classList.remove("hide-scroll");
});
