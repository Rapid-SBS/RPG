  <div class="row justify-content-center">

    <!-- Lightbringer -->
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseLightbringer" role="button" aria-expanded="false" aria-controls="collapseLightbringer">
      <h6>Lightbringer <span class="badge badge-light text-teal">9</span></h6>
    </a>

    <!-- Revive -->  
    <a class="btn text-white pad-10 mar-5 bg-purple" data-toggle="collapse" href="#collapseRevive" role="button" aria-expanded="false" aria-controls="collapseRevive">
      <h6>Revive <span class="badge badge-light text-teal">12</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="ultimate-quarterstaff" class="row mx-auto pad-10">

    <!-- Lightbringer -->
    <div class="collapse mx-auto" id="collapseLightbringer" data-parent="#attack-brawler">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Your quarterstaff begins to glow, releasing<br>explosions of light as you strike your enemy.<br>DMG = 4 x (Player INT).<br>Costs 8 Mana.</p>
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
           <p class="card-text text-center">Revive a fallen ally with full HP and Mana.<br> Costs 12 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->