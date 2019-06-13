  <div class="row justify-content-center">

    <!-- Pulverize -->  
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapsePulverize" role="button" aria-expanded="false" aria-controls="collapsePulverize">
      <h6>Pulverize <span class="badge badge-light text-teal">6</span></h6>
    </a>

    <!-- Hammer Uppercut -->
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseHammeruppercut" role="button" aria-expanded="false" aria-controls="collapseHammeruppercut">
      <h6>Hammer Uppercut  <span class="badge badge-light text-teal">7</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="attack-warhammer" class="row mx-auto pad-10">

    <!-- Pulverize -->
    <div class="collapse mx-auto" id="collapsePulverize" data-parent="#attack-warhammer">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Repeatedly smash an enemy with your warhammer.<br>Pierces enemy DEF.<br>DMG = 2 x (Player ATT).<br> Costs 6 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">-4</span>
            Enemy DEF
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Hammer Uppercut -->
    <div class="collapse mx-auto" id="collapseHammeruppercut" data-parent="#attack-warhammer">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Swing your hammer into an enemy's chin,<br>dealing damage and applying Stun debuff.<br>DMG = Player ATT.<br>Costs 6 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->