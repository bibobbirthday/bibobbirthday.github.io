document.getElementById("make-wishes").addEventListener("click", function () {
    const popup = document.createElement("div");
    popup.textContent = "Here you go, make a wish Bibob!";
    popup.style.position = "fixed";
    popup.style.top = "50%";
    popup.style.left = "50%";
    popup.style.transform = "translate(-50%, -50%)";
    popup.style.backgroundColor = "rgba(255, 255, 255, 0.8)";
    popup.style.padding = "20px";
    popup.style.borderRadius = "10px";
    popup.style.zIndex = "1000";
    document.body.appendChild(popup);
    popup.style.fontSize = "24px";
    popup.style.fontWeight = "bold";
  
    setTimeout(function () {
      document.body.removeChild(popup);
      window.location.href = "http://139.180.138.242/wishes.php";
    }, 3000);
  });