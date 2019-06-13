  <div class="row justify-content-center">

    <!-- Shield Bash -->
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseShieldbash" role="button" aria-expanded="false" aria-controls="collapseShieldbash">
      <h6>Shield Bash <span class="badge badge-light text-teal">7</span></h6>
    </a>

    <!-- Blade Storm -->  
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseBladestorm" role="button" aria-expanded="false" aria-controls="collapseBladestorm">
      <h6>Blade Storm <span class="badge badge-light text-teal">8</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="attack-sword" class="row mx-auto pad-10">

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

    <!-- Blade Storm -->
    <div class="collapse mx-auto" id="collapseBladestorm" data-parent="#attack-sword">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Hack and slash your way through your enemies.<br>DMG = 2 x (Player ATT).<br> Costs 6 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->