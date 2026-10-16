document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.sidebar-nav a');
    const contentSections = document.querySelectorAll('.sidebar-content[id]');

    if (contentSections.length === 0) return;

    function hideAllSections() {
        contentSections.forEach(function (section) {
            section.style.display = 'none';
        });
    }

    function showSection(sectionId) {
        const section = document.getElementById(sectionId);
        if (section) {
            section.style.display = 'block';
        }
    }

    function updateNavLinkClasses(activeLinkId) {
        navLinks.forEach(function (link) {
            const href = link.getAttribute('href');
            if (href === '#' + activeLinkId) {
                link.classList.remove('btn-secondary');
                link.classList.add('btn');
            } else {
                link.classList.remove('btn');
                link.classList.add('btn-secondary');
            }
        });
    }

    function activateSection(targetId) {
        hideAllSections();
        if (targetId && targetId !== 'main-content') {
            showSection(targetId);
            updateNavLinkClasses(targetId);
        }
    }

    const initialHash = window.location.hash.substring(1);
    if (initialHash && document.getElementById(initialHash)) {
        activateSection(initialHash);
    } else if (contentSections.length > 0) {
        activateSection(contentSections[0].id);
    }

    navLinks.forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            window.location.hash = targetId;
            activateSection(targetId);
        });
    });
});
