  <div class="row justify-content-center">

    <div id="ultimate-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Subzero Blade -->  
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseSubzeroblade" role="button" aria-expanded="false" aria-controls="collapseSubzeroblade">
        <input type="radio" name="ability" value="Subzero Blade" v-model="ultimateSelection">
        <h6>Subzero Blade</h6>
      </label>

      <!-- Frost Fury -->
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseFrostfury" role="button" aria-expanded="false" aria-controls="collapseFrostfury">
        <input type="radio" name="ability" value="Frost Fury" v-model="ultimateSelection">
        <h6>Frost Fury</h6>
      </label>
      <br>
      <p class="jhide" id="ultimate-selection">{{ultimateSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="ultimate-ice" class="row mx-auto pad-10 max-wide-380">

    <!-- Subzero Blade -->
    <div class="collapse mx-auto" id="collapseSubzeroblade" data-parent="#ultimate-ice">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Shape a weapon of your choosing to strike your foe.<br> Critical hits apply Frozen debuff instead of bonus damage.<br> DMG = 4 x (Player INT).<br> Costs 9 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Frost Fury -->
    <div class="collapse mx-auto" id="collapseFrostfury" data-parent="#ultimate-ice">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Create giant glacial spikes high in the atmosphere and bring them hailing down upon your foes.<br> DMG = 3 x (Player INT).<br> Costs 12 Mana.</p> 
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->