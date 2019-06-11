  <div class="row justify-content-center">

    <!-- Toxic Arrow -->
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseToxicarrow" role="button" aria-expanded="false" aria-controls="collapseToxicarrow">
      <h6>Toxic Arrow <span class="badge badge-light text-teal">4</span></h6>
    </a>

    <!-- Steel Jaw Trap -->  
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseSteeltrap" role="button" aria-expanded="false" aria-controls="collapseSteeltrap">
      <h6>Steel Jaw Trap <span class="badge badge-light text-teal">5</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="attack-bow" class="row mx-auto pad-10">

    <!-- Toxic Arrow -->
    <div class="collapse mx-auto" id="collapseToxicarrow" data-parent="#attack-bow">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Deals damage and applies Poison debuff.<br> DMG = Weapon ATT + Player ATT.<br> Costs 4 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">6</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Steel Jaw Trap -->
    <div class="collapse mx-auto" id="collapseSteeltrap" data-parent="#attack-bow">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Deals damage and applies Stun debuff.<br>DMG = Weapon ATT + Player ATT.<br> Costs 5 Mana.</p>
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