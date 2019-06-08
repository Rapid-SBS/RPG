  <div class="row justify-content-center">

    <!-- Assasinate -->
    <a class="btn text-white pad-10 mar-5 bg-purple" data-toggle="collapse" href="#collapseAssasinate" role="button" aria-expanded="false" aria-controls="collapseAssasinate">
      <h6>Assasinate <span class="badge badge-light text-teal">12</span></h6>
    </a>

    <!-- Chaos Blade -->  
    <a class="btn text-white pad-10 mar-5 bg-purple" data-toggle="collapse" href="#collapseChaosblade" role="button" aria-expanded="false" aria-controls="collapseChaosblade">
      <h6>Chaos Blade <span class="badge badge-light text-teal">11</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="ultimate-dagger" class="row mx-auto pad-10">

    <!-- Assasinate -->
    <div class="collapse mx-auto" id="collapseAssasinate" data-parent="#ultimate-dagger">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Become hidden for one turn and<br> strike your enemy the next. <br> DMG = 5 x (Player ATT).<br> Costs 12 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Chaos Blade -->
    <div class="collapse mx-auto" id="collapseChaosblade" data-parent="#ultimate-dagger">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Shroud your enemies in smoke then<br> ravage them with your blade. <br> Lowers enemy accuracy for one turn. <br> DMG = 3 x (Player ATT).<br> Costs 12 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">-1</span>
            Enemy Accuracy
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->