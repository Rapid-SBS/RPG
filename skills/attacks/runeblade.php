  <div class="row justify-content-center">

    <!-- Frost Core -->
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseFrostcore" role="button" aria-expanded="false" aria-controls="collapseFrostcore">
      <h6>Frost Core <span class="badge badge-light text-teal">6</span></h6>
    </a>

    <!-- Whirlwind -->  
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseWhirlwind" role="button" aria-expanded="false" aria-controls="collapseWhirlwind">
      <h6>Whirlwind <span class="badge badge-light text-teal">6</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="attack-runeblade" class="row mx-auto pad-10">

    <!-- Frost Core -->
    <div class="collapse mx-auto" id="collapseFrostcore" data-parent="#attack-runeblade">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Plunge your runeblade into your opponent while<br> channeling the ice element, applying Freeze debuff for 1 turn.<br>DMG = 2 x Player ATT.<br> Costs 6 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Whirlwind -->
    <div class="collapse mx-auto" id="collapseWhirlwind" data-parent="#attack-runeblade">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Spin up a whirlwind with your runeblade,<br>damaging all enemies.<br>DMG = Weapon ATT + Player INT.<br> Costs 6 Mana.</p> 
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