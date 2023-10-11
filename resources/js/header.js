console.log("[!] Loading script header.js...");

const toggleBtn = document.querySelector('.toggle_btn');
const toggleBtnIcon = document.querySelector('.toggle_btn i');
const dropDownMenu = document.querySelector('.dropdown_menu');

if (toggleBtn && toggleBtnIcon && dropDownMenu) {
    toggleBtn.addEventListener("click", () => {
        dropDownMenu.classList.toggle('open');
        const isOpen = dropDownMenu.classList.contains('open');

        toggleBtnIcon.classList = isOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars';
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth > 992) {
            dropDownMenu.classList.remove('open');
            toggleBtnIcon.classList = 'fa-solid fa-bars';
        }
    });
}
