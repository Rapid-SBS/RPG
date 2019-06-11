  <div class="row justify-content-center">

    <!-- Sky Breaker -->  
    <a class="btn text-white pad-10 mar-5 bg-purple" data-toggle="collapse" href="#collapseSkybreaker" role="button" aria-expanded="false" aria-controls="collapseSkybreaker">
      <h6>Sky Breaker <span class="badge badge-light text-teal">9</span></h6>
    </a>

    <!-- Dragon Force -->
    <a class="btn text-white pad-10 mar-5 bg-purple" data-toggle="collapse" href="#collapseDragonforce" role="button" aria-expanded="false" aria-controls="collapseDragonforce">
      <h6>Dragon Force <span class="badge badge-light text-teal">12</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="ultimate-brawler" class="row mx-auto pad-10">

    <!-- Sky Breaker -->
    <div class="collapse mx-auto" id="collapseSkybreaker" data-parent="#ultimate-brawler">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Soar into the sky and come <br>crashing down on your opponent.<br> DMG = Weapon ATT + Player ATT.<br> Costs 9 Mana.</p> 
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">22</span>
            Weapon ATT
          </li>
        </ul>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Dragon Force -->
    <div class="collapse mx-auto" id="collapseDragonforce" data-parent="#ultimate-brawler">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Your Chi takes the form of a<br>dragon and consumes your enemies.<br>Ignores all enemy RES.<br> DMG = 3 x (Player INT).<br> Costs 12 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            Enemy RES = <span class="badge bg-white text-teal">0</span>
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->