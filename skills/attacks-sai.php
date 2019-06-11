  <div class="row justify-content-center">

    <!-- Eviscerate -->
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseEviscerate" role="button" aria-expanded="false" aria-controls="collapseEviscerate">
      <h6>Eviscerate <span class="badge badge-light text-teal">6</span></h6>
    </a>

    <!-- Shadow Blitz -->  
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseShadow Blitz" role="button" aria-expanded="false" aria-controls="collapseShadow Blitz">
      <h6>Shadow Blitz <span class="badge badge-light text-teal">7</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="attack-sai" class="row mx-auto pad-10">

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
    <div class="collapse mx-auto" id="collapseShadow Blitz" data-parent="#attack-sai">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Use your shadow energy to ravage<br>all enemies with extreme speed.<br>DMG = Weapon ATT + Player ATT.<br> Costs 7 Mana.</p>
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