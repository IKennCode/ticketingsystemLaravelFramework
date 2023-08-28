const settingsToggle = document.getElementById('settingsToggle');
    const settingsDropdownMenu = document.getElementById('settingsDropdownMenu');

    settingsToggle.addEventListener('click', (e) => {
        e.preventDefault();
        settingsDropdownMenu.classList.toggle('hidden');
        settingsDropdownMenu.classList.toggle('opacity-100');
        settingsDropdownMenu.classList.toggle('scale-100');
    });