  <div class="row justify-content-center">

    <!-- Starfire -->  
    <a class="btn text-white pad-10 mar-5 bg-purple" data-toggle="collapse" href="#collapseStarfire" role="button" aria-expanded="false" aria-controls="collapseStarfire">
      <h6>Starfire <span class="badge badge-light text-teal">12</span></h6>
    </a>

    <!-- Abyss Break -->
    <a class="btn text-white pad-10 mar-5 bg-purple" data-toggle="collapse" href="#collapseAbyssbreak" role="button" aria-expanded="false" aria-controls="collapseAbyssbreak">
      <h6>Abyss Break <span class="badge badge-light text-teal">10</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="ultimate-aether" class="row mx-auto pad-10">

    <!-- Starfire -->
    <div class="collapse mx-auto" id="collapseStarfire" data-parent="#ultimate-aether">
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

    <!-- Abyss Break -->
    <div class="collapse mx-auto" id="collapseAbyssbreak" data-parent="#ultimate-aether">
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

  </div><!-- /.row -->