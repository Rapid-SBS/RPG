  <div class="row justify-content-center">

    <div id="ultimate-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Phantom Strike -->  
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapsePhantomstrike" role="button" aria-expanded="false" aria-controls="collapsePhantomstrike">
        <input type="radio" name="ability" value="Phantom Strike" v-model="ultimateSelection">
        <h6>Phantom Strike</h6>
      </label>

      <!-- Shadows Unleashed -->
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseShadowsunleashed" role="button" aria-expanded="false" aria-controls="collapseShadowsunleashed">
        <input type="radio" name="ability" value="Shadows Unleashed" v-model="ultimateSelection">
        <h6>Shadows Unleashed</h6>
      </label>
      <br>
      <p class="jhide" id="ultimate-selection">{{ultimateSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="ultimate-sai" class="row mx-auto pad-10 max-wide-380">

    <!-- Phantom Strike -->
    <div class="collapse mx-auto" id="collapsePhantomstrike" data-parent="#ultimate-sai">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Emerge from the shadows to strike your enemy.<br>Double Critical Hit Chance.<br>DMG = Weapon ATT + Player ATT.<br>Costs 9 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">14</span>
            Weapon ATT
          </li>
        </ul>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-teal">2x</span>
            Crit Chance
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Shadows Unleashed -->
    <div class="collapse mx-auto" id="collapseShadowsunleashed" data-parent="#ultimate-sai">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Unleash the full horror of your shadow energy, siphoning life from your enemies while they are consumed by darkness.<br>Ignores all enemy RES.<br>Restores full health.<br>DMG = 3 x (Player ATT)<br>Costs 14 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            Enemy RES = <span class="badge bg-white text-teal">0</span>
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->