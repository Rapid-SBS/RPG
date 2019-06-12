  <div class="row justify-content-center">

    <!-- Solar Wrath -->
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseSolarwrath" role="button" aria-expanded="false" aria-controls="collapseSolarwrath">
      <h6>Solar Wrath <span class="badge badge-light text-teal">4</span></h6>
    </a>

    <!-- Smite -->  
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseSmite" role="button" aria-expanded="false" aria-controls="collapseSmite">
      <h6>Smite <span class="badge badge-light text-teal">4</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="attack-mace" class="row mx-auto pad-10">

    <!-- Solar Wrath -->
    <div class="collapse mx-auto" id="collapseSolarwrath" data-parent="#attack-mace">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Blast your foe with radiant light.<br>DMG = 2 x (Player INT).<br>Costs 4 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Smite -->
    <div class="collapse mx-auto" id="collapseSmite" data-parent="#attack-mace">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Smite your foe with your heavy mace.<br>DMG = Weapon ATT + Player ATT).<br> Costs 4 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">4</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->