const section = document.querySelector('.default_page_content');
const navBlock = document.querySelector('.naw-list_block');

if (navBlock) {
    const ul = document.createElement('ul');
    const headings = section.querySelectorAll('h2, h3');

    headings.forEach((heading, index) => {
        const li = document.createElement('li');
        const link = document.createElement('a');
        const headingText = heading.textContent;
        const id = 'heading-' + (index + 1);
        heading.setAttribute('id', id);
        link.href = '#' + id;
        link.textContent = headingText;
        li.appendChild(link);
        ul.appendChild(li);

        link.addEventListener('click', (event) => {
            event.preventDefault();
            const yOffset = -100;
            const targetId = link.getAttribute('href').slice(1);
            const targetElement = document.getElementById(targetId);
            const y = targetElement.getBoundingClientRect().top + window.pageYOffset + yOffset;
            window.scrollTo({top: y, behavior: 'smooth'});
        });
    });

    navBlock.appendChild(ul);
}

const innerContainer = document.querySelector('.wp-block-group__inner-container');

if (innerContainer) {

    const titleSection = document.createElement('div');
    titleSection.classList.add('title-section');

    titleSection.appendChild(innerContainer);

    section.appendChild(titleSection);
}

const defaultBlockContent = document.querySelector('.default_block_content');

const wrapperContent = document.createElement('div');
wrapperContent.classList.add('wrapper-content');

if (wrapperContent === true) {
    wrapperContent.appendChild(defaultBlockContent);
    wrapperContent.appendChild(navBlock);
    section.appendChild(wrapperContent);
}


const burgerMenu = document.querySelector('.burger-menu');
const subMainMenu = document.querySelector('.sub_main_menu');
const mainMenu = document.querySelector('.navbar-nav');
const mobileMenu = document.querySelector('.mobile-menu');
const body = document.getElementsByTagName("body")[0];
const iconHome = document.querySelector('.icon_home');
const productBtn = document.querySelector('.product_button');

burgerMenu.addEventListener('click', () => {
    burgerMenu.classList.toggle('active');
    mobileMenu.classList.toggle('active');
    body.classList.toggle('active-menu')
})

function moveMenuItems() {
    if (window.innerWidth <= 1024) {
        mobileMenu.appendChild(iconHome);
        mobileMenu.appendChild(productBtn);
        mobileMenu.appendChild(subMainMenu);
        mobileMenu.appendChild(mainMenu);
    } else {
        subMainMenu.style.display = 'flex';
        mainMenu.style.display = 'flex';
    }
}

document.addEventListener('DOMContentLoaded', function () {
    moveMenuItems();
});

window.addEventListener('resize', moveMenuItems);


const switchers = document.querySelectorAll('.modal-products .uk-switcher');

const switcher_li_items = document.querySelectorAll('.modal-products ul[uk-switcher] li');

window.addEventListener("DOMContentLoaded", (event) => {

    setTimeout(() => {
        switcher_li_items.forEach((switcher_item, index) => {
            // don`t working
            if(index != 0)
                switcher_item.classList.remove('uk-active');
        });
        switchers.forEach((switchers_item, index) => {
            if(index != 0)
                switchers_item.hidden = true;
        });
    }, 1);
});

switcher_li_items.forEach((item, index) => {
    item.addEventListener('click', () => {

        let show_index = item.getAttribute('switch-data');


        switchers.forEach((switchers_item) => {
            if(switchers_item.id != 'switcher-' + show_index){
                switchers_item.hidden = true;
            }else{
                switchers_item.hidden = false;
            }
        });

    });
});