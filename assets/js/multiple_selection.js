	function toggle(checkboxID, toggleID, toggleID2, toggleID3) {
	var checkbox = document.getElementById(checkboxID);
	var toggle = document.getElementById(toggleID);
	var toggle2 = document.getElementById(toggleID2);
	var toggle3 = document.getElementById(toggleID3);
	updateToggle = checkbox.checked ? toggle.disabled=false : toggle.disabled=true;
	updateToggle2 = checkbox.checked ? toggle2.disabled=false : toggle2.disabled=true;
	updateToggle3 = checkbox.checked ? toggle3.disabled=false : toggle3.disabled=true;
	
	}
	
	function toggle2(checkboxID, toggleID, toggleID2) {
	var checkbox = document.getElementById(checkboxID);
	var toggle = document.getElementById(toggleID);
	var toggle2 = document.getElementById(toggleID2);
	updateToggle = checkbox.checked ? toggle.disabled=false : toggle.disabled=true;
	updateToggle2 = checkbox.checked ? toggle2.disabled=false : toggle2.disabled=true;

	
	}
	

	