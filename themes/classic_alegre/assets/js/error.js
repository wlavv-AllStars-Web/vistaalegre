document.addEventListener("DOMContentLoaded", () => {
    const whatsapp = document.querySelector('.button_whatsapp');
    const whatsapp_content = document.querySelector('.whatsapp_content');

    if (whatsapp && whatsapp_content) {
        console.log(whatsapp);

        // Function to show the WhatsApp content
        const showContent = () => {
            whatsapp_content.classList.remove("whatsapp_hidden");
        };

        // Function to hide the WhatsApp content
        const hideContent = (event) => {
            // Check if the mouse is leaving both the button and the content
            const relatedTarget = event.relatedTarget;
            if (!whatsapp.contains(relatedTarget) && !whatsapp_content.contains(relatedTarget)) {
                whatsapp_content.classList.add("whatsapp_hidden");
            }
        };

        // Add event listeners
        whatsapp.addEventListener("mouseover", showContent);
        whatsapp_content.addEventListener("mouseover", showContent);
        whatsapp_content.addEventListener("mouseout", hideContent);
    } else {
        console.error('Elements not found');
    }
});
