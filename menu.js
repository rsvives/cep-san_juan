
  const currentPage = window.location.pathname.split("/").pop();

  document.querySelectorAll('#mainMenu .nav-link').forEach(link => {
    if (link.getAttribute('href') === currentPage) {
      link.classList.add('active');
    }
  });
