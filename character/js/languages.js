/*
addBonusLanguages() - returns Randomly selected Dwarf Bonus Languages
*/
function addBonusLanguages() {
	var bonusLanguages = [
		{"language": "Alignment Tongue"},
		{"language": "Halfling"},
		{"language": "Elf"},
		{"language": "Gnome"},
		{"language": "Bugbear"},
		{"language": "Goblin"},
		{"language": "Gnoll"},
		{"language": "Hobgoblin"},
		{"language": "Kobold"},
		{"language": "Minotaur"},
		{"language": "Ogre"},
		{"language": "Orc"},
		{"language": "Troglodyte"},
		{"language": "Dragon"},
		{"language": "Griffin"},
		{"language": "Bear"},
		{"language": "Undercommon"}
			];
    return bonusLanguages[Math.floor(Math.random() * bonusLanguages.length)]; 
}

		
	  
/*
getBonusLanguages() returns the bonus languages that a character may have due to high intelligence or the Lucky Sign of Bird Song.  A for loop is used to prevent duplicates of languages.
*/
function getBonusLanguages (intelligenceModifier, luckySign, luckModifier) {
	var bonusLanguages = 1;
	if(bonusLanguages  != undefined && typeof bonusLanguages === 'number') {
		if(intelligenceModifier > 0)
		{
			bonusLanguages += intelligenceModifier;
		}
	}
	else {
		return "";
	}
	
	if(luckySign != undefined && luckySign.luckySign === "Birdsong") {
		bonusLanguages += luckModifier;
	}
	
	if(bonusLanguages <=0) {
		return "";
	}
	var result = ", " + addBonusLanguages().language, newLanguage = "";
	
	// loop
	for(var i = 1; i < bonusLanguages; i++){
		// 1) get a random lang
		newLanguage = addBonusLanguages().language;
		// 2) check the new lang is not repeative
		if(result.indexOf(newLanguage) != -1){
			i--;
			// if yes continue;
			continue;
		} else{
			// if not, add the new lang into the result
			result += ", " + newLanguage;
		}

	}
	return result;
}