const settingsToggle = document.getElementById('settingsToggle');
    const settingsDropdownMenu = document.getElementById('settingsDropdownMenu');

    let isOpen = false;

    settingsToggle.addEventListener('click', (e) => {
        e.preventDefault();
        isOpen = !isOpen;
        if (isOpen) {
            settingsDropdownMenu.classList.remove('hidden', 'opacity-0', 'scale-95');
            settingsDropdownMenu.classList.add('opacity-100', 'scale-100');
        } else {
            settingsDropdownMenu.classList.remove('opacity-100', 'scale-100');
            settingsDropdownMenu.classList.add('opacity-0', 'scale-95');
        }
    });