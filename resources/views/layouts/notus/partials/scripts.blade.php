@vite([
    'vendor/koneko/laravel-vuexy-website-layout-simple-koneko/resources/assets/templates/notus-tailwind/vendor/popper/popper.js',
    'vendor/koneko/laravel-vuexy-website-layout-simple-koneko/resources/assets/templates/notus-tailwind/js/app.js',
])

<script>
    /* Function for opning navbar on mobile */
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }

    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
        let element = event.target;

        while (element.nodeName !== "A") {
            element = element.parentNode;
        }

        Popper.createPopper(element, document.getElementById(dropdownID), {
            placement: "bottom-start"
        });

        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
    }
</script>
