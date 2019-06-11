  <div class="row justify-content-center">

    <!-- Glacial Spike -->
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseGlacialspike" role="button" aria-expanded="false" aria-controls="collapseGlacialspike">
      <h6>Glacial Spike <span class="badge badge-light text-teal">5</span></h6>
    </a>

    <!-- Frost Wave -->  
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseFrostwave" role="button" aria-expanded="false" aria-controls="collapseFrostwave">
      <h6>Frost Wave <span class="badge badge-light text-teal">7</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="attack-ice" class="row mx-auto pad-10">

    <!-- Glacial Spike -->
    <div class="collapse mx-auto" id="collapseGlacialspike" data-parent="#attack-ice">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Conjure a large spike of ice<br>and hurl it at an enemy.<br>DMG = Weapon ATT + Player INT.<br> Costs 5 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">4</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Frost Wave -->
    <div class="collapse mx-auto" id="collapseFrostwave" data-parent="#attack-ice">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Unleash a wave of subzero energy.<br> Double Critical Hit Chance.<br>Critical hits apply Frozen debuff<br> instead of bonus damage.<br> DMG = Player INT.<br> Costs 7 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->