  <div class="row justify-content-center">

    <div id="attack-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Shield Bash -->  
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseShieldbash" role="button" aria-expanded="false" aria-controls="collapseShieldbash">
        <input type="radio" name="ability" value="Shield Bash" v-model="attackSelection">
        <h6>Shield Bash</h6>
      </label>

      <!-- Spin Attack -->
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseSpinattack" role="button" aria-expanded="false" aria-controls="collapseSpinattack">
        <input type="radio" name="ability" value="Spin Attack" v-model="attackSelection">
        <h6>Spin Attack</h6>
      </label>
      <br>
      <p class="jhide" id="attack-selection">{{attackSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="attack-sword" class="row mx-auto pad-10 max-wide-380">

    <!-- Shield Bash -->
    <div class="collapse mx-auto" id="collapseShieldbash" data-parent="#attack-sword">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Bash your opponent with your heavy shield.<br>Double Critical Hit Chance.<br>Critical hits apply Stun debuff.<br>DMG = Weapon ATT + Player ATT.<br>Costs 6 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">8</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Spin Attack -->
    <div class="collapse mx-auto" id="collapseSpinattack" data-parent="#attack-sword">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Charge into the fray and whip your sword around, damaging all enemies.<br>DMG = 2 x (Player ATT).<br> Costs 6 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->