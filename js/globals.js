// --- Global Functions ---
/*
const getPlayerObj = () => { JSON.parse(localStorage.getItem('objPlayer')); }
const getSkillsObj = () => { JSON.parse(localStorage.getItem('objSkills')); }
const getRpgClassObj = () => { JSON.parse(localStorage.getItem('objRpgclass')); }
const getWeaponObj = () => { JSON.parse(localStorage.getItem('objWeapon')); }

const setPlayerObj = () => { localStorage.setItem('objPlayer', JSON.stringify(player)); }
const setSkillsObj = () => { localStorage.setItem('objSkills', JSON.stringify(skills)); }
const setRpgClassObj = () => { rpgclass = localStorage.setItem('objRpgclass', JSON.stringify(rpgclass)); }
const setWeaponObj = () => { localStorage.setItem('objWeapon', JSON.stringify(weapon)); }
*/
const rpgClassKey = 'rpgClass'
const weaponKey = 'weapon'

export function getRpgClass()

{

return JSON.parse(localStorage.getItem(rpgClassKey));

}

export function setRpgClass(rpgClass)

{

localStorage.setItem(rpgClassKey, JSON.stringify(rpgClass))

}

export function getWeapon()

{

return JSON.parse(localStorage.getItem(weaponKey));

}

export function setWeapon(weapon)

{

localStorage.setItem(weaponKey, JSON.stringify(weapon))

}