  <div class="row justify-content-center">

    <!-- Plasma Beam -->
    <a class="btn text-white pad-10 mar-5 bg-purple" data-toggle="collapse" href="#collapsePlasmabeam" role="button" aria-expanded="false" aria-controls="collapsePlasmabeam">
      <h6>Plasma Beam <span class="badge badge-light text-teal">10</span></h6>
    </a>

    <!-- Blizzard -->  
    <a class="btn text-white pad-10 mar-5 bg-purple" data-toggle="collapse" href="#collapseBlizzard" role="button" aria-expanded="false" aria-controls="collapseBlizzard">
      <h6>Blizzard <span class="badge badge-light text-teal">12</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="ultimate-runestone" class="row mx-auto pad-10">

    <!-- Plasma Beam -->
    <div class="collapse mx-auto" id="collapsePlasmabeam" data-parent="#ultimate-runestone">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Combine lightning with fire to form plasma,<br>piercing enemy defenses with its extreme heat.<br>Ignores all enemy RES.<br>DMG = 4 x (Player INT).<br> Costs 10 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            Enemy RES = <span class="badge bg-white text-blue">0</span>
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Blizzard -->
    <div class="collapse mx-auto" id="collapseBlizzard" data-parent="#ultimate-runestone">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Combine wind with ice to create a blizzard,<br>dealing damage to all enemies and increasing<br>their Miss Chance for 1 turn.<br>DMG = 3 x (Player INT).<br> Costs 12 Mana.</p> 
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            Miss Rate <span class="badge bg-white text-teal">+1</span>
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->