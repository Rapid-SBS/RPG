  <div class="row justify-content-center">

    <!-- Skull Bash -->
    <a class="btn text-white pad-10 mar-5 bg-purple" data-toggle="collapse" href="#collapseSkullbash" role="button" aria-expanded="false" aria-controls="collapseSkullbash">
      <h6>Skull Bash <span class="badge badge-light text-teal">8</span></h6>
    </a>

    <!-- Destabilize -->  
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseDestabilize" role="button" aria-expanded="false" aria-controls="collapseDestabilize">
      <h6>Destabilize <span class="badge badge-light text-teal">4</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="attack-brawler" class="row mx-auto pad-10">

   <!-- Skull Bash -->
    <div class="collapse mx-auto" id="collapseSkullbash" data-parent="#ultimate-quarterstaff">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Slam your quarterstaff into<br>the skull of an enemy. <br>Double Critical Hit Chance.<br> DMG = Weapon ATT + Player ATT.<br> Costs 8 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">5</span>
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

    <!-- Destabilize -->
    <div class="collapse mx-auto" id="collapseDestabilize" data-parent="#attack-brawler">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Attack the pressure points of your<br>foe, disrupting their chi flow.<br>Triple Critical Hit Chance.<br>Critical Hits apply Stun debuff.<br>DMG = 2 x (Player INT).<br> Costs 4 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-teal">3x</span>
            Crit Chance
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->