var status = document.getElementById("status"), text = document.getElementById("location");

status.onchange = function(e) {
  text.disabled = (status.value == "Delivered");
};