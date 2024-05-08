document.addEventListener("DOMContentLoaded", () => {
    var swiper = new Swiper(".mySwiper", {
        direction: "vertical",
        slidesPerView: 1,
        spaceBetween: 30,
        mousewheel: true,
        // autoplay: {
        //     delay: 5000,
        //   },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });


    const menuIcon = document.querySelector("#menu-icon-desktop")
    const menu = document.querySelector("#desktop_top_menu_wrapper")
    const logo = document.querySelector("#_desktop_logo")
    


    logo.addEventListener("mouseover", () => {
        menu.style.width = "15vw"
        menu.style.visibility = "visible"
    })
    menu.addEventListener("mouseover", () => {
        menu.style.width = "15vw"
        menu.style.visibility = "visible"
    })
    menu.addEventListener("mouseleave", () => {
        menu.style.width = "0"
        menu.style.visibility = "hidden"
        // logoImg.setAttribute("src", "/img/vistaalegre.webp")
    })
    logo.addEventListener("mouseleave", () => {
        menu.style.width = "0"
        menu.style.visibility = "hidden"
        menuIcon.style.display = "flex"
    })



});


document.addEventListener("DOMContentLoaded", () => {
    // function  open searchbar 768px
    const searchIcon = document.querySelector(".material-icons.search.mobile")
    const clearIcon = document.querySelector(".search-mobile #search_widget form i.clear")
    const clearIconMenu = document.querySelector("#mobile_top_menu_wrapper .clear")
    const menuMobile = document.querySelector("#mobile_top_menu_wrapper")
    const menuIcon = document.querySelector("#menu-icon-desktop")

    const headerMobile = document.querySelector(".header-top-right-mobile")
    const headerLinksMobile = document.querySelectorAll(".header-top-right-mobile a")
    const logoImg = document.querySelector("#_desktop_logo .logo")


    searchIcon.addEventListener("click", () => {
        const searchMobile = document.querySelector(".search-mobile")
        searchMobile.style.display = "block"
    })
    clearIcon.addEventListener("click", () => {
        const searchMobile = document.querySelector(".search-mobile")
        searchMobile.style.display = "none"
    })


    // mobile

    if(window.screen.width <= 768){
        menuIcon.addEventListener("click", () => {
            menuMobile.style.width = "100dvw"
            menuMobile.style.visibility = "visible"
            headerMobile.style.color = "#333"
            headerLinksMobile.forEach((item) => {
                item.style.color = "#333"
            })
            logoImg.setAttribute("src", "/img/vistaalegre.png")
        })

        clearIconMenu.addEventListener("click" , () => {
            menuMobile.style.width = "0dvw"
            menuMobile.style.visibility = "hidden"
            headerMobile.style.color = "#fff"
            headerLinksMobile.forEach((item) => {
                item.style.color = "#fff"
            })
            logoImg.setAttribute("src", "/img/logo-1715011212.jpg")
        })
    }


});

document.addEventListener("DOMContentLoaded", function() {
    const swiperContent = document.querySelector(".footer-slide");
    const logoImg = document.querySelector("#_desktop_logo .logo")
    const header = document.querySelector(".header-top-right")
    const headerLinks = document.querySelectorAll(".header-top-right a")
    const headerMobile = document.querySelector(".header-top-right-mobile")
    const headerLinksMobile = document.querySelectorAll(".header-top-right-mobile a")
    const menuIconC = document.querySelector("#menu-icon-desktop")
    const searchForm = document.querySelector(".searchbar_desktop #search_widget form")
    const searchFormI = document.querySelector(".searchbar_desktop #search_widget i")
    const searchFormPlaceholder = document.querySelector(".searchbar_desktop #search_widget form input[type='text']")
    const inputSearchText = document.querySelector(".searchbar_desktop #search_widget form input[type='text']")

    if (swiperContent) {
        const observer = new MutationObserver((mutationsList) => {
            for (let mutation of mutationsList) {
                if (mutation.type === "attributes" && mutation.attributeName === "class") {
                    if (swiperContent.classList.contains("swiper-slide-active")) {
                        logoImg.setAttribute("src", "/img/vistaalegre.png")
                        header.style.color = "#333";
                        headerLinks.forEach((item) => {
                            item.style.color = "#333"
                        })
                        menuIconC.style.color = "#333"
                        searchForm.style.borderBottom = "1px solid #333"
                        searchFormI.style.color = "#333"
                        searchFormPlaceholder.classList.add("placeholder-black")
                        headerMobile.style.color = "#333"
                        headerLinksMobile.forEach((item) => {
                            item.style.color = "#333"
                        })
                        inputSearchText.style.color = "#333"
                    }else{
                        logoImg.setAttribute("src", "/img/logo-1715011212.jpg")
                        header.style.color = "#fff";
                        headerLinks.forEach((item) => {
                            item.style.color = "#fff"
                        })
                        menuIconC.style.color = "#fff"
                        searchForm.style.borderBottom = "1px solid #fff"
                        searchFormI.style.color = "#fff"
                        searchFormPlaceholder.classList.remove("placeholder-black")
                        headerMobile.style.color = "#fff"
                        headerLinksMobile.forEach((item) => {
                            item.style.color = "#fff"
                        })
                        inputSearchText.style.color = "#fff"
                    }
                }
            }
        });

        observer.observe(swiperContent, { attributes: true });
    }
});


document.addEventListener("DOMContentLoaded", () => {
    const inputNewsletter = document.querySelector("#blockEmailSubscription_displayFooter input[type='email']")
    const btnNewsletter = document.querySelector(".newsletter-container input.btn")

    if(inputNewsletter){
        inputNewsletter.addEventListener("input", updateValue);
        function updateValue(e) {
            inputNewsletter.setAttribute("value", e.target.value);
          if(inputNewsletter.value.length != 0) {
            btnNewsletter.style.display = "block"
          }else {
            btnNewsletter.style.display = "none"
          }
        }
    }
    
})

document.addEventListener("DOMContentLoaded", () => {
    if(window.location.href.split('/')[3] === "cart?action=show"){
        const logoImg = document.querySelector("#_desktop_logo .logo")
        logoImg.setAttribute("src", "/img/vistaalegre.png")
    }
})
