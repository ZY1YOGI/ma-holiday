window.onload = () => {
  const theme = localStorage.getItem("theme") ?? localStorage.setItem("theme", "light");
  if (theme === "light") {
    document.documentElement.className = "light";
  } else if (theme === "dark") {
    document.documentElement.className = "dark";
  }
};
