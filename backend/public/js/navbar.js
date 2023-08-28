const ticketsToggle = document.getElementById('ticketsToggle');
const ticketsDropdownMenu = document.getElementById('ticketsDropdownMenu');
const settingsToggle = document.getElementById('settingsToggle');
const settingsDropdownMenu = document.getElementById('settingsDropdownMenu');
const settingsContainer = document.querySelector('.settings-container'); // Use the unique class "settings-container"

let isTicketsOpen = false;
let isSettingsOpen = false;

ticketsToggle.addEventListener('click', (e) => {
    e.preventDefault();
    isTicketsOpen = !isTicketsOpen;
    if (isTicketsOpen) {
        ticketsDropdownMenu.classList.remove('hidden', 'opacity-0', 'scale-95');
        ticketsDropdownMenu.classList.add('opacity-100', 'scale-100');

        settingsContainer.style.marginTop = `${ticketsDropdownMenu.clientHeight}px`;
    } else {
        ticketsDropdownMenu.classList.remove('opacity-100', 'scale-100');
        ticketsDropdownMenu.classList.add('opacity-0', 'scale-95');
        settingsContainer.style.marginTop = '0';
    }

    e.stopPropagation
});

settingsToggle.addEventListener('click', (e) => {
    e.preventDefault();
    isSettingsOpen = !isSettingsOpen;
    if (isSettingsOpen) {
        settingsDropdownMenu.classList.remove('hidden', 'opacity-0', 'scale-95');
        settingsDropdownMenu.classList.add('opacity-100', 'scale-100');
    } else {
        settingsDropdownMenu.classList.remove('opacity-100', 'scale-100');
        settingsDropdownMenu.classList.add('opacity-0', 'scale-95');
    }
    e.stopPropagation
});
