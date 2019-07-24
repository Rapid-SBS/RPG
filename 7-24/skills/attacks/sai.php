  <div class="row justify-content-center">

    <div id="attack-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Eviscerate -->  
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseEviscerate" role="button" aria-expanded="false" aria-controls="collapseEviscerate">
        <input type="radio" name="ability" value="Eviscerate" v-model="attackSelection">
        <h6>Eviscerate</h6>
      </label>

      <!-- Shadow Blitz -->
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseShadowblitz" role="button" aria-expanded="false" aria-controls="collapseShadowblitz">
        <input type="radio" name="ability" value="Shadow Blitz" v-model="attackSelection">
        <h6>Shadow Blitz</h6>
      </label>
      <br>
      <p class="jhide" id="attack-selection">{{attackSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="attack-sai" class="row mx-auto pad-10 max-wide-380">

    <!-- Eviscerate -->
    <div class="collapse mx-auto" id="collapseEviscerate" data-parent="#attack-sai">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Inflict a deep wound on your enemy.<br>Applies Bleed debuff.<br>DMG = 2 x (Player ATT).<br>Costs 6 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Shadow Blitz -->
    <div class="collapse mx-auto" id="collapseShadowblitz" data-parent="#attack-sai">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Use your shadow energy to ravage all enemies with extreme speed.<br>DMG = Weapon ATT + Player ATT.<br> Costs 7 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">3</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->