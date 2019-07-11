/* ===== Miss/Hit/Crit Roll ===== */
const mhcRoll = (miss, crit) => {
	if (miss > 3) {
		console.log('Error: Miss range cannot be greater than 3');
		return "Error";
	}
	if (crit > 3) {
		console.log('Error: Crit range cannot be greater than 3');
		return "Error";
	}

  let rollResult = Math.floor(Math.random() * (6)) + 1;
  let missRange = parseInt(miss) * 1;
  let critRange = 7 - parseInt(crit);

  if (rollResult >= critRange) {
  	console.log("Accuracy Roll: " + rollResult);
  	return "crit";
  } else if (rollResult <= missRange){
  	console.log("Accuracy Roll: " + rollResult);
		return "miss";
  } else {
  	console.log("Accuracy Roll: " + rollResult);
  	return "hit";
  }
}