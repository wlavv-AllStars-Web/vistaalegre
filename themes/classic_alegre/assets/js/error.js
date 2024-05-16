// document.addEventListener("DOMContentLoaded", () => {
//     const whatsapp = document.querySelector('.button_whatsapp');
//     const whatsapp_content = document.querySelector('.whatsapp_content');

//     if (whatsapp && whatsapp_content) {
//         console.log(whatsapp);

//         // Function to show the WhatsApp content
//         const showContent = () => {
//             whatsapp_content.classList.remove("whatsapp_hidden");
//         };

//         // Function to hide the WhatsApp content
//         const hideContent = (event) => {
//             // Check if the mouse is leaving both the button and the content
//             const relatedTarget = event.relatedTarget;
//             if (!whatsapp.contains(relatedTarget) && !whatsapp_content.contains(relatedTarget)) {
//                 whatsapp_content.classList.add("whatsapp_hidden");
//             }
//         };

//         // Add event listeners
//         whatsapp.addEventListener("mouseover", showContent);
//         whatsapp_content.addEventListener("mouseover", showContent);
//         whatsapp_content.addEventListener("mouseout", hideContent);
//     } else {
//         console.error('Elements not found');
//     }
// });

document.addEventListener("DOMContentLoaded", () => {
    const whatsapp = document.querySelector('.button_whatsapp');
    const whatsapp_content = document.querySelector('.whatsapp_content');
    const whatsappMobile = document.querySelector('.contacts_maintenance_mobile .button_whatsapp');
    const whatsapp_contentMobile = document.querySelector('.contacts_maintenance_mobile .whatsapp_content');

    if ((whatsapp && whatsapp_content) || (whatsappMobile && whatsapp_contentMobile)) {

        const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);

        if (isMobile) {
            // Ensure both mobile-specific elements exist
            if (whatsappMobile && whatsapp_contentMobile) {
                // Mobile-specific event handlers
                const toggleContent = (event) => {
                    whatsapp_contentMobile.classList.toggle("whatsapp_hidden");
                    whatsapp_content.classList.toggle("whatsapp_hidden");
                    event.stopPropagation();
                };

                const hideContent = (event) => {
                    if (!whatsappMobile.contains(event.target) && !whatsapp_contentMobile.contains(event.target)) {
                        whatsapp_contentMobile.classList.add("whatsapp_hidden");
                    }
                    if (!whatsapp.contains(event.target) && !whatsapp_content.contains(event.target)) {
                        whatsapp_content.classList.add("whatsapp_hidden");
                    }
                };

                whatsappMobile.addEventListener("click", toggleContent);
                whatsapp.addEventListener("click", toggleContent);
                document.addEventListener("click", hideContent);
                document.addEventListener("touchend", hideContent);
            
            }else {
                console.error('tablet elements not found');

            }
        } else {
            // Ensure both desktop-specific elements exist
            if (whatsapp && whatsapp_content) {
                // Desktop-specific event handlers
                const showContent = () => {
                    whatsapp_content.classList.remove("whatsapp_hidden");
                };

                const hideContent = (event) => {
                    const relatedTarget = event.relatedTarget;
                    if (!whatsapp.contains(relatedTarget) && !whatsapp_content.contains(relatedTarget)) {
                        whatsapp_content.classList.add("whatsapp_hidden");
                    }
                };

                whatsapp.addEventListener("mouseover", showContent);
                whatsapp.addEventListener("mouseout", hideContent);
                whatsapp_content.addEventListener("mouseover", showContent);
                whatsapp_content.addEventListener("mouseout", hideContent);
            } else {
                console.error('Desktop elements not found');
            }
        }
    } else {
        console.error('Elements not found');
    }
});
