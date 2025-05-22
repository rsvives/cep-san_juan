document.addEventListener("DOMContentLoaded", function() {
  const currentPath = window.location.pathname.toLowerCase();
  console.log("Current Path:", currentPath);

  document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
    const linkPath = new URL(link.href).pathname.toLowerCase();
    console.log("Link Path:", linkPath);
    if (linkPath === currentPath) {
      console.log("Match found! Activating:", link.href);
      link.classList.add('active');
    }
  });
});
