const header = () => {

  // register HTML elements
  const searchBtn = document.querySelector('.nav-search');
  const closeBtn = document.querySelector('.nav-search-close');
  const searchInput = document.querySelector('.nav-search-input-wrapper');
  const subMenu = document.querySelector('.menu-item-has-children');
  const subMenuList = document.querySelector('.sub-menu');


  // search click event
  searchBtn.addEventListener('click', () => {
    searchInput.style.visibility = "visible";
    searchInput.classList.add("fade-in");
  });

  // close search click event
  closeBtn.addEventListener('click', () => {
    searchInput.style.visibility = "hidden";
    searchInput.classList.remove("fade-in");
  });

  // submenu animation add
  subMenu.addEventListener('mouseover', () => {
    subMenuList.classList.add("slide-top");
  });

  // submenu animation remove
  subMenu.addEventListener('mouseout', () => {
    subMenuList.classList.remove("slide-top");
  });

}

export default header;
