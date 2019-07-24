  <div class="row justify-content-center">

    <div id="ultimate-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Lightbringer -->  
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseLightbringer" role="button" aria-expanded="false" aria-controls="collapseLightbringer">
        <input type="radio" name="ability" value="Lightbringer" v-model="ultimateSelection">
        <h6>Lightbringer</h6>
      </label>

      <!-- Revive -->
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseRevive" role="button" aria-expanded="false" aria-controls="collapseRevive">
        <input type="radio" name="ability" value="Revive" v-model="ultimateSelection">
        <h6>Revive</h6>
      </label>
      <br>
      <p class="jhide" id="ultimate-selection">{{ultimateSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="ultimate-quarterstaff" class="row mx-auto pad-10 max-wide-380">

    <!-- Lightbringer -->
    <div class="collapse mx-auto" id="collapseLightbringer" data-parent="#ultimate-quarterstaff">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Your quarterstaff begins to glow, releasing explosions of light as you strike your enemy.<br>Ignores all enemy RES.<br>DMG = 4 x (Player INT).<br>Costs 9 Mana.</p>
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