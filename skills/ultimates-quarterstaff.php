  <div class="row justify-content-center">

    <!-- Hammer of Dawn -->
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseHammerofdawn" role="button" aria-expanded="false" aria-controls="collapseHammerofdawn">
      <h6>Hammer of Dawn <span class="badge badge-light text-teal">9</span></h6>
    </a>

    <!-- Revive -->  
    <a class="btn text-white pad-10 mar-5 bg-purple" data-toggle="collapse" href="#collapseRevive" role="button" aria-expanded="false" aria-controls="collapseRevive">
      <h6>Revive <span class="badge badge-light text-teal">12</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="ultimate-quarterstaff" class="row mx-auto pad-10">

    <!-- Hammer of Dawn -->
    <div class="collapse mx-auto" id="collapseHammerofdawn" data-parent="#attack-brawler">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">A beam of light falls from the heavens<br>and crashes into your foe.<br>Ignores enemy RES.<br>DMG = 3 x (Player INT).<br>Costs 9 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            Enemy RES = <span class="badge bg-white text-teal">0</span>
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Revive -->
    <div class="collapse mx-auto" id="collapseRevive" data-parent="#ultimate-quarterstaff">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
           <p class="card-text text-center">Revive a fallen ally with full HP.<br> Costs 12 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->