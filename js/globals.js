// --- Global Functions ---
const getPlayerObj = () => { JSON.parse(localStorage.getItem('objPlayer')); };
const getSkillsObj = () => { JSON.parse(localStorage.getItem('objSkills')); };
const getRpgClassObj = () => { JSON.parse(localStorage.getItem('objRpgclass')); };
const getWeaponObj = () => { JSON.parse(localStorage.getItem('objWeapon')); };

const setPlayerObj = () => { localStorage.setItem('objPlayer', JSON.stringify(player)); };
const setSkillsObj = () => { localStorage.setItem('objSkills', JSON.stringify(skills)); };
const setRpgClassObj = () => { localStorage.setItem('objRpgclass', JSON.stringify(rpgclass)); };
const setWeaponObj = () => { localStorage.setItem('objWeapon', JSON.stringify(weapon)); };
