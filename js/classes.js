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
	constructor(name, manacost) {
		this.name = name;
	  this.manacost = manacost;
	}
}

class Attack extends Ability {
	constructor(name, manacost, multiplier, additive) {
		super(name, manacost);
	  this.multiplier = multiplier;
	  this.additive = additive;
	  this.attack = function() {
	  	return current.att
	  };
	  this.attCalc = function() {
	    return this.attack() * this.multiplier + this.additive
	  };
	}
}