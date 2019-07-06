class rpgClass {
	constructor(name, hp, att, def, int, res) {
		this.name = name;
		this.hp = hp;
		this.att = att;
		this.def = def;
		this.int = int;
		this.res = res;
	}
}

class Ability {
	constructor(name, type, manacost, target) {
		this.name = name;
		this.type = type;
	  this.manacost = manacost;
	  this.target = target;
	}
}

class Attack extends Ability {
	constructor(name, type, manacost, target, dmgtype, multiplier, additive, pierce) {
		super(name, type, manacost, target);
		this.target = target;
		this.dmgtype = dmgtype;
	  this.multiplier = multiplier;
	  this.additive = additive;
	  this.pierce = pierce;
	  if (this.dmgtype == "att") {
		  this.dmg = function() {
		  	return current.att
		  };
		} else if (this.dmgtype == "int") {
			this.dmg = function() {
				return current.int
			};
		}
	  this.attCalc = function() {
	    return this.dmg() * this.multiplier + this.additive
	  };
	}
}

class Heal extends Ability {
	constructor(name, type, manacost, target, multiplier, additive) {
		super(name, type, manacost, target);
		this.target = target;
		this.multiplier = multiplier;
	  this.additive = additive;
	  this.heal = function() {
	  	return current.int
	  };
	  this.healCalc = function() {
	    return this.heal() * this.multiplier + this.additive
	  };
	}
}

class Buff extends Ability {
	constructor(name, type, manacost, target, status, duration, hp, att, def, int, res, mana) {
		super(name, type, manacost, target);
		this.status = status;
		this.duration = duration;
		this.hp = hp;
	  this.att = att;
	  this.def = def;
	  this.int = int;
	  this.res = res;
	  this.mana = mana;
	}
}

class BuffDebuff extends Ability {
	constructor(name, type, manacost, target, status, duration, hp, att, def, int, res, foehp, foeatt, foedef, foeint, foeres) {
		super(name, type, manacost, target);
		this.status = status;
		this.duration = duration;
		this.hp = hp;
	  this.att = att;
	  this.def = def;
	  this.int = int;
	  this.res = res;
	  this.foehp = foehp;
	  this.foeatt = foeatt;
	  this.foedef = foedef;
	  this.foeint = foeint;
	  this.foeres = foeres;
	}
}

class HealBuff extends Ability {
	constructor(name, type, manacost, target, multiplier, additive, status, duration, hp, att, def, int, res, mana) {
		super(name, type, manacost, target);
		this.target = target;
		this.multiplier = multiplier;
	  this.additive = additive;
	  this.status = status;
		this.duration = duration;
		this.hp = hp;
	  this.att = att;
	  this.def = def;
	  this.int = int;
	  this.res = res;
	  this.mana = mana;
	  this.heal = function() {
	  	return current.int
	  };
	  this.healCalc = function() {
	    return this.heal() * this.multiplier + this.additive
	  };
	}
}

class AttackBuff extends Ability {
	constructor(name, type, manacost, target, dmgtype, multiplier, additive, pierce, status, duration, hp, att, def, int, res, mana) {
		super(name, type, manacost, target);
		this.target = target;
		this.dmgtype = dmgtype;
	  this.multiplier = multiplier;
	  this.additive = additive;
	  this.pierce = pierce;
	 	this.status = status;
		this.duration = duration;
		this.hp = hp;
	  this.att = att;
	  this.def = def;
	  this.int = int;
	  this.res = res;
	  this.mana = mana;
	  if (this.dmgtype == "att") {
		  this.dmg = function() {
		  	return current.att
		  };
		} else if (this.dmgtype == "int") {
			this.dmg = function() {
				return current.int
			};
		}
	  this.attCalc = function() {
	    return this.dmg() * this.multiplier + this.additive
	  };
	}
}

class AttackHeal extends Ability {
	constructor(name, type, manacost, target, dmgtype, multiplier, additive, pierce) {
		super(name, type, manacost, target);
		this.target = target;
		this.dmgtype = dmgtype;
	  this.multiplier = multiplier;
	  this.additive = additive;
	  this.pierce = pierce;
	  if (this.dmgtype == "att") {
		  this.dmg = function() {
		  	return current.att
		  };
		} else if (this.dmgtype == "int") {
			this.dmg = function() {
				return current.int
			};
		}
	  this.attCalc = function() {
	    return this.dmg() * this.multiplier + this.additive
	  };
	  this.healCalc = function() {
	    return this.dmg() * this.multiplier + this.additive
	  };
	}
}

class EnemyAttack extends Ability {
	constructor(name, type, target, nthturn, dmgtype, multiplier, additive, pierce) {
		super(name, type, target);
		this.nthturn = nthturn;
		this.target = target;
		this.dmgtype = dmgtype;
	  this.multiplier = multiplier;
	  this.additive = additive;
	  this.pierce = pierce;
	  if (this.dmgtype == "att") {
		  this.dmg = function() {
		  	return enemy.att
		  };
		} else if (this.dmgtype == "int") {
			this.dmg = function() {
				return enemy.int
			};
		}
	  this.attCalc = function() {
	    return this.dmg() * this.multiplier + this.additive
	  };
	}
}