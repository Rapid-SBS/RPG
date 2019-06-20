  <div class="row justify-content-center">

   <div id="ultimate-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Vortex Arrow -->  
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseVortexarrow" role="button" aria-expanded="false" aria-controls="collapseVortexarrow">
        <input type="radio" name="ability" value="Vortex Arrow" v-model="ultimateSelection">
        <h6>Vortex Arrow</h6>
      </label>

      <!-- Nature Surge -->
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseNaturesurge" role="button" aria-expanded="false" aria-controls="collapseNaturesurge">
        <input type="radio" name="ability" value="Nature Surge" v-model="ultimateSelection">
        <h6>Nature Surge</h6>
      </label>
      <br>
      <p class="jhide" id="ultimate-selection">{{ultimateSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="ultimate-longbow" class="row mx-auto pad-10 max-wide-380">

    <!-- Vortex Arrow -->
    <div class="collapse mx-auto" id="collapseVortexarrow" data-parent="#ultimate-longbow">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">A powerful vortex of wind launches your arrow at extreme speed.<br>Triple Critical Hit Rate.<br>DMG = 3 x (Player ATT).<br> Costs 9 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-teal">3x</span>
            Crit Chance
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Nature Surge -->
    <div class="collapse mx-auto" id="collapseNaturesurge" data-parent="#ultimate-longbow">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">You and your allies are infused with the raw power of nature, healing and increasing your stats for 2 turns.<br>HEAL = 2 x Player INT.<br> Costs 12 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-teal">+2</span>
            All Stats
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->